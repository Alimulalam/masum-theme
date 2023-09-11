<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php
    include "link2.php";
    ?>
</head>

<body>

    <!--====== Header Start ======-->
    <div>
        <?php
            include "header2.php";
        ?>
    </div>
   

    <!--====== Header Ends ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(../assets/images/page-banner.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">Login</h2>
                </div>
            </div>
        </div>
    </section>

 <!--====== Login Start ======-->

 <section class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-register-content">
                        <h4 class="title">Login to Your Account</h4>

                        <div class="login-register-form">
                            <form action="login_process.php" method="POST">
                                <div class="single-form">
                                <label for="InputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name= "user_email" value = <?php if (isset($_POST['submit'])) {
                            echo $user_email ;
                        } ?>>

                        <?php if (isset($_POST['submit'])) {
                            echo $empty_email;
                        } ?>
                        
                                </div>
                                <div class="single-form">
                                <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="user_password" value = <?php if (isset($_POST['submit'])) {
                            echo $user_password ;
                        } ?>>

                        <?php if (isset($_POST['submit'])) {
                            echo $empty_password;
                        } ?>
                                </div>
                                <div class="single-form">
                                    <button class="main-btn btn-block" type="submit" name="submit">Login</button>
                                </div>
                                <div class="single-form d-flex justify-content-between">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember">
                                        <label for="remember"><span></span> Remember Me</label>
                                    </div>
                                    <div class="forget">
                                        <a href="#">Lost Your Password</a>
                                    </div>
                                </div>
                                <div class="single-form">
                                    <label>You don't have account ?</label>
                                    <a href="register.php" class="main-btn main-btn-2 btn-block">Create Account Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <!--====== Login Ends ======-->

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


    <!--====== Main Activation  js ======-->
    <script src="assets/js/main.js"></script>


</body>

</html>