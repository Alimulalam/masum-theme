<?php
  require_once "connection.php";

    $insert = false;

  if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `notes`  WHERE `sno` = $sno";
    $result = mysqli_query($conn, $sql);

  }

  if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['snoedit'])) {
      $sno= $_POST['snoedit'];
      $title = $_POST['titleedit'];
      $description = $_POST['decriptionedit'];

      $sql = "UPDATE `notes` SET `title` = '$title' ,`decription` = '$description'  WHERE `notes`.`sno` = $sno";
      $result = mysqli_query($conn, $sql);
    
    }
    else{

    if (isset($_POST['submit'])){
            $title = $_POST['title'];
            $description = $_POST['decription'];
    
        if (!empty($title) && !empty($description)) {        

        $sql = "INSERT INTO `notes` (`title`, `decription`) VALUES ('$title ','$description')";
        // $result = mysqli_query($conn, $sql);

        // $conn->query($sql)=== TRUE

        if ($conn->query($sql)=== TRUE) {
        header('location:notes.php');
        }else {
        echo " Does not added";
        }
    }
    }
  }
}
?>




<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">

<!--====== Title ======-->
<title>Add Notes</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="../assets/images/icons.png" type="image/png">


<!-- CSS
============================================ -->

<!--===== Vendor CSS (Bootstrap & Icon Font) =====-->

<link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
<link rel="stylesheet" href="../assets/css/plugins/default.css">


<!--===== Plugins CSS (All Plugins Files) =====-->
<link rel="stylesheet" href="../assets/css/plugins/animate.css">
<link rel="stylesheet" href="../assets/css/plugins/slick.css">
<link rel="stylesheet" href="../assets/css/plugins/magnific-popup.css">


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">

    <!--====== Main Style CSS ======-->
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <!--====== Header Start ======-->

    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                    <div class="header-top-left mt-10">
                        <ul class="header-meta">
                            <li><a href="mailto://alimul036@gmail.com">alimul036@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="header-top-right mt-10">
                        <div class="header-link">
                            <a class="user" href="notes.php">Notes</a>
                            <a class="user" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="navigation" class="navigation navigation-landscape">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="header-logo">
                            <a href="../index.php"><img src="../assets/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="nav-toggle"></div>
                        <nav class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li>
                                    <a class="active" href="../index.php">Home</a>
                                    
                                </li>
                                
                                <li>
                                    <a href="../portfolio.php">Portfolio</a> 
                                </li>
                                <li>
                                    <a href="../profile.php">Profile</a> 
                                </li>
                                <li>
                                    <a href="notes.php">Notes</a> 
                                </li>
                               
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="../about-us.php">About</a></li>
                                        
                                        <li><a href="../gallery.php">Gallery</a></li>
                                        
                                     
                                        <li><a href="login.php"">Login</a></li>
                                        <li><a href="register.php">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="../contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 position-static">
                        <div class="header-search">
                            <form action="#">
                                
                                <input type="text" placeholder="Search">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="page-banner">
            <div class="page-banner-bg bg_cover" style="background-image: url(../assets/images/page-banner.jpg);">
                <div>
                    <div class=" text-center">
                        <h2 class="title">Notes</h2>
                    </div>
                </div>
            </div>
    </section>

    <!--====== Header Ends ======-->
  <!--Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        Edit modal
    </button> -->

    <!-- +++++++++++++++++Edit Modal+++++++++++++++++++ -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="notes.php" method="POST">
                        <input type="hidden" name="snoedit" id="snoedit">
                        <div class="mb-3">

                            <label for="titleedit" class="form-label">Note title</label>
                            <input type="text" class="form-control" id="titleedit" name="titleedit"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="decriptionedit" class="form-label">Note decription</label>
                            <textarea class="form-control" id="decriptionedit" name="decriptionedit"
                                rows="3"></textarea>
                        </div>

                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Note</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <!-- modal end  -->

    <?php 
      if ($insert) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You Notes has been inserted successfully
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
    
    ?>

    <div class="container mt-4 mb-4">
        <h2>Add a Note</h2>
        <form action="notes.php" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Note title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="decription" class="form-label">Note decription</label>
                <textarea class="form-control" id="decription" name="decription" rows="3"></textarea>
            </div>
            <div class="form-check">
                <button type="submit" name="submit" class="btn btn-primary">Add Note</button>
            </div>
            
        </form>
    </div>

    <div class="container mb-3">
        <table class="table" id="mytable" border="1">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM `notes`";
                    $result = mysqli_query($conn,$sql);

                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                      $sno = $sno + 1;
                      echo "<tr>
                      <th scope='row'>". $sno ."</th>
                      <td>". $row['title'] ."</td>
                      <td>". $row['decription'] ."</td>
                      <td> <button type='button' class='edit btn btn-sm btn-primary' id=". $row['sno'].">Edit</button>
                       <button type='button' class='delete btn btn-sm btn-danger' id=d". $row['sno'].">Delete</button> </td>
                      </tr>";
                      }
      
                  ?>

            </tbody>
        </table>
    </div>
</div>
<!--====== Footer Start ======-->


    <!--====== Footer Start ======-->

    <div>
        <?php
            include "footer2.php";
        ?>
    </div>

    <!--====== Footer Ends ======-->

   

    <!--====== Ends ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <!--====== All Plugins js ======-->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.appear.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <script src="assets/js/plugin.min.js"></script> -->


    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
    </script>

    <script>

    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            // console.log("edit", e.target.parentNode.parentNode);
            tr = e.target.parentNode.parentNode;

            title = tr.getElementsByTagName('td')[0].innerText;

            description = tr.getElementsByTagName('td')[1].innerText;
            console.log(title, description);
            titleedit.value = title;
            decriptionedit.value = description;
            snoedit.value = e.target.id;

            $('#editModal').modal('toggle');
        })
    })


    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", e.target.parentNode.parentNode);
            sno = e.target.id.substr(1, );
            
            if (confirm("Press a button!")) {
                window.location = `notes.php?delete=${sno}`;
            } else {
                console.log('no');
            }
        })
    })
    </script>
    


</body>

</html>