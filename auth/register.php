<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Edumate Education HTML Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">


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
                                <a class="login" href="login.php">Login</a>
                                <a class="register" href="register.php">Register</a>
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
                                        <a href="#">Pages</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="../about-us.php">About</a></li>

                                            <li><a href="../gallery.php">Gallery</a></li>


                                            <li><a href="../login.php"">Login</a></li>
                                        <li><a href=" register.php">Register</a></li>
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

    <!--====== Header Ends ======-->

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(../assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Register</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Login Start ======-->

    <section class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-content">
                        <h4 class="title">Create New Account</h4>

                        <div class="login-register-form">
                            <form action="register_process.php" method="POST">
                                <div class="single-form">
                                    <label for="user_name">Full Name</label>
                                    <input type="text" id="user_name" name="user_name"
                                        value=<?php if (isset($_POST['submit'])) {
                                        echo $user_name ;
                                    } ?>>
                                        <?php if (isset($_POST['submit'])) {
                                        echo $emptymsg_user_name;
                                    } ?>
                                </div>

                                <div class="single-form">
                                    <label for="InputEmail">Email address</label>
                                    <input type="email" id="InputEmail"
                                        aria-describedby="emailHelp" name="user_email" value=<?php if (isset($_POST['submit'])) {
                                            echo $user_email ;
                                        } ?>>
                                            <?php if (isset($_POST['submit'])) {
                                            echo $emptymsg_email;
                                        } ?>
                                </div>

                                <div class="single-form">
                                    <label for="InputPassword" >Password</label>
                                    <input type="password" id="InputPassword" name="user_password"
                                        value=<?php if (isset($_POST['submit'])) {
                                        echo $user_password ;
                                    } ?>>
                                        <?php if (isset($_POST['submit'])) {
                                        echo $emptymsg_password;
                                    } ?>
                                </div>
                                <div class="single-form">
                                    <label for="ConfirmPassword" >Confirm Password</label>
                                    <input type="password" id="ConfirmPassword"
                                        name="user_confirm_password" value=<?php if (isset($_POST['submit'])) {
                                        echo $user_confirm_password ;
                                    } ?>>
                                        <?php if (isset($_POST['submit'])) {
                                        echo $emptymsg_confirmpassword;
                                    } ?>
                                </div>
                                
                                <div class="single-form">
                                    <button class="main-btn btn-block" type="submit" name="submit">Register</button>
                                </div>

                                <div class="single-form">
                                    <label>Already have an account?</label>
                                    <a href="login.php" class="main-btn main-btn-2 btn-block">Log in instead!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Login Ends ======-->

    <!--====== Newsletter Start ======-->

    <!--====== Newsletter Ends ======-->

    <!--====== Footer Start ======-->

    <?php
    include "../Split/footer.php";
    ?>

    <!--====== BACK TOP TOP PART ENDS ======-->

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


</body>

</html>