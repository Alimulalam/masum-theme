
<?php
    session_start();

    if (!empty($_SESSION['useremail'])) {
        // echo $_SESSION['useremail'];

    }else{
        header('location:auth/login.php');
    }
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
    include "./split/link.php";
    ?>
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>

    <!--====== Header Start ======-->

    <?php
    include "./split/header.php";
    ?>

    <!--====== Header Ends ======-->


    <!--====== Footer Start ======-->

    <!--====== Footer Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Profile</h2>
                </div>
            </div>
        </div>
    </section>


    <!-- main part -->

    <!--  ++++++++++++++++++add item++++++++++++-->

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addModalLabel">Add info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="add.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="name_design">
                            <div class="form-group mb-4 icon-design">
                                <i class="fa-regular fa-user"></i>
                                <input type="text" class="form-control border-bottom rounded-4" id="fullname"
                                    name="fullname" placeholder="Full Name">
                            </div>

                        </div>
                        <label for="profilePicture">Profile Picture:</label>
                        <input type="file" id="profilePicture" name="profilePicture">

                        <br><br>

                        <label for="district">Select District:</label>
                        <select id="district" name="district">
                            <option value="Select a district" disabled selected>Select a District</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                        </select>

                        <br><br>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="dob" name="dob">

                        <br><br>

                        <label>Education:</label>
                        <input type="checkbox" id="ssc" name="education[]" value="ssc">
                        <label for="ssc">SSC</label>
                        <input type="checkbox" id="hsc" name="education[]" value="hsc">
                        <label for="hsc">HSC</label>
                        <input type="checkbox" id="bsc" name="education[]" value="bsc">
                        <label for="bsc">BSc</label>
                        <input type="checkbox" id="msc" name="education[]" value="msc">
                        <label for="msc">MSc</label>

                        <br><br>

                        <label>Gender:</label>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>

                        <br><br>

                        <!-- <label for="comments">Comments:</label>
                        <textarea id="comments" name="comments" rows="4" cols="50"></textarea> -->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_student" class="btn btn-primary px-4">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- end  add item -->


    <!--  Update item-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">Update Info</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        &times;
                    </button>
                </div>

                <form action="update.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">

                        <div class="name_design">
                            <div class="form-group mb-4 ">
                                <input type="text" class="form-control border-bottom rounded-4" id="update_fullname"
                                    name="fullname" placeholder="First Name">
                            </div>
                        </div>


                        <label class="form-label">Upload Image</label>
                        <div class="col-2">
                            <img class="preview_img" src="images/default_profile.jpg" width="100px" height="100px">
                        </div>
                        <div class="col-10">
                            <div class="file-upload text-secondary">
                                <input type="file" class="image" name="image" accept="image/*">
                                <input type="hidden" name="image_old" id="image_old">
                            </div>
                        </div>
                        <br><br>


                        <label for="district">Select District:</label>
                        <select id="update_district" name="district">
                            <option value="Select a district" disabled selected>Select a District</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                        </select>

                        <br><br>

                        <label for="dob">Date of Birth:</label>
                        <input type="date" id="update_dob" name="dob" value="dob">

                        <br><br>

                        <label for='education'>Education:</label>
                        <input type="checkbox" id="ssc" name="update_education[]" value="ssc">
                        <label for="ssc">SSC</label>
                        <input type="checkbox" id="hsc" name="update_education[]" value="hsc">
                        <label for="hsc">HSC</label>
                        <input type="checkbox" id="bsc" name="update_education[]" value="bsc">
                        <label for="bsc">BSc</label>
                        <input type="checkbox" id="msc" name="update_education[]" value="msc">
                        <label for="msc">MSc</label>

                        <br><br>

                        <label>Gender:</label>
                        <input type="radio" id="update_male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="update_female" name="gender" value="female">
                        <label for="female">Female</label>

                        <br><br>

                        <!-- <label for="comments">Comments:</label>
                        <textarea id="update_comments" name="comments" rows="4" cols="50"></textarea> -->

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" Name="save_update" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end  update item -->

    <!-- delete modal -->

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Student Delete Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <form action="delete.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" id="delete_id" name="delete_id">
                        <h4>Are you sure you want to delete this record?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="delete_data" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end delete modal -->


    <!-- Table data show  -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                        ?>
                        <div class="alert alert-dismissible fade show h-25" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close">&times;</button>
                        </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>
                    <div class="card-header">
                        <h2 class="text-center mb-3">Add Your Information
                            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                Add item
                            </button>
                        </h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-primary text-center" id="mytable">
                            <thead class="table-danger">
                                <tr>
                                    <th scope="col">Serial NO</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">profile Picture</th>
                                    <th scope="col">District</th>
                                    <th scope="col">Date of Birth</th>
                                    <th scope="col">Education</th>
                                    <th scope="col">Gender</th>
                                    <!-- <th scope="col">Comments</th> -->
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'profileProcess.php';
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Table data show End  -->

    <!--====== Footer Start ======-->
    <section class="footer-area footer-02 bg_cover" style="background-image: url(assets/images/counter-bg.jpg);">
        <div class="footer-widget" style="padding-top: 80px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Information</h4>
                            <ul class="link-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Porfolio</a></li>
                                <li><a href="#">Profile</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Useful Link</h4>
                            <ul class="link-list">

                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Gallary</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-link mt-45">
                            <h4 class="footer-title">Contact Info</h4>
                            <ul class="link-list">
                                <li>
                                    <p>Mohammadpur, Dhaka-1207</p>
                                </li>
                                <li>
                                    <p><a href="tel:+01797279875">+01797 279 875 </a></p>
                                </li>
                                <li>
                                    <p><a href="mailto://alimul036@gmail.com">alimul036@gmail.com</a></p>
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-widget-wrapper text-center">
                    <div class="footer-social">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/alimulalam.masum/"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/AlamAlimul"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/alimulalam/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/alimul-alam-37bb94176/"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright text-center">
                    <p>&copy; Copyright all right reserved by <a href="#">Masum Theme </a></p>
                </div>
            </div>
        </div>
    </section>



    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== Footer Ends ======-->



    <!--====== Start ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== Ends ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

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
    <script src="js/script.js"></script>

    <!-- +++++++++++++++++++<script src="js/script.js"></script>+++++++++++++ -->

    <script src="https://kit.fontawesome.com/ac510fa0e4.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.update_btn').click(function(e) {
            e.preventDefault();

            var profile_id = $(this).closest('tr').find('.profile_id').text();

            $.ajax({
                type: "POST",
                url: "update.php",
                data: {
                    'checking_updatebtn': true,
                    'profile_id': profile_id,
                },
                success: function(response) {
                    $.each(response, function(key, value) {
                        $('#update_id').val(value['id']);
                        $('#update_fullname').val(value['fullname']);
                        $('#update_district').val(value['district']);

                        // image section
                        $('.preview_img').attr('src', 'images/' + value[
                            'profilePicture'] + '');
                        $('#image_old').val(value['profilePicture']);


                        // date of brith
                        $('#update_dob').val(value['date_of_birth']);

                        //Education

                        var selectedEducationLevels = value['education'];

                            if (typeof selectedEducationLevels === 'string') {
                                // Split the comma-separated string into an array of values
                                var educationArray = selectedEducationLevels.split(', ');

                                // Iterate through the array and set the corresponding checkboxes
                                educationArray.forEach(function (edu) {
                                    $('input[name="update_education[]"][value="' + edu + '"]').prop('checked', true);
                                });
                            } else {
                                console.log("Invalid education data:", selectedEducationLevels);
                            }


                        // if (value['education'] === 'ssc') {
                        //     console.log('Setting SSC checkbox as checked');
                        //     $('#ssc').prop('checked', true);
                        // } else if (value['education'] === 'hsc') {
                        //     console.log('Setting HSC checkbox as checked');
                        //     $('#hsc').prop('checked', true);
                        // } else if (value['education'] === 'bsc') {
                        //     console.log('Setting BSc checkbox as checked');
                        //     $('#bsc').prop('checked', true);
                        // } else if (value['education'] === 'msc') {
                        //     console.log('Setting MSc checkbox as checked');
                        //     $('#msc').prop('checked', true);
                        // }


                        // Gender Section
                        if ((value['gender']) == 'male') {
                            $('#update_male').val(value['gender']).attr("checked",
                                true);
                        } else if ((value['gender']) == 'female') {
                            $('#update_female').val(value['gender']).attr("checked",
                                true);
                        }

                        $('#update_comments').val(value['comments']);
                    });
                    $('#updateModal').modal('show');
                }
            });

        });

        // delete section
        $('.delete_btn').click(function(e) {
            e.preventDefault();

            var profile_id = $(this).closest('tr').find('.profile_id').text();
            console.log(profile_id);
            $('#delete_id').val(profile_id);
            $('#deleteModal').modal('show');

        });
    });
    </script>


</body>

</html>