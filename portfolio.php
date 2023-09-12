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

<meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Masum Portfolio</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/icons.png" type="image/png">
    
        
    <!-- CSS
    ============================================ -->

    <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->

    <link rel="stylesheet" href="styless.css">

    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/default.css">


    <!--===== Plugins CSS (All Plugins Files) =====-->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!--====== Main Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
   


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
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
                        <a class="login" href="auth/logout.php">Logout</a>
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
                            <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 position-static">
                        <div class="nav-toggle"></div>
                        <nav class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li>
                                    <a class="active" href="index.php">Home</a>
                                    
                                </li>
                                
                                <li>
                                    <a href="portfolio.php">Portfolio</a> 
                                </li>
                                <li>
                                    <a href="profile.php">Profile</a> 
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="nav-dropdown nav-submenu">
                                        <li><a href="about-us.php">About</a></li>
                                        
                                        <li><a href="gallery.php">Gallery</a></li>
                                        
                                     
                                        <li><a href="auth/login.php"">Login</a></li>
                                        <li><a href="auth/register.php">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
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


    <div id="main-header">
        <div class="container-area" id="welcome-section">
            <h1 id="title">Hey I am Alimul Alam</h1> 
            <p class="lead"><em>a web developer</em></p>
        </div>
        
    </div>
    

    <!--====== Header Ends ======-->
    <section id="projects">
        <div class="container-area">
            <h1>These are some of my projects</h1>
            <div class="bottom-line"></div>
            <div class="project-tile">
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/my-portfolio/" id="profile-link" target="_blank">
                        <img src="image/sig.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            
                            <span class="project-name"> My Portfolio </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/freecodecamp-landing-page/" id="profile-link" target="_blank">
                        <img src="image/landing.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            
                            <span class="project-name"> Landing Page </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/freecodecamp-technical-documentation/" id="profile-link" target="_blank">
                        <img src="image/document.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            
                            <span class="project-name"> Documentation </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/freecodecamp-survey-form/" id="profile-link" target="_blank">
                        <img src="image/survey.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            
                            <span class="project-name"> Survey Form </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/freecodecamp-Tribute-Page/" id="profile-link" target="_blank">
                        <img src="image/tribute.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                           
                            <span class="project-name"> Tribute Page </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/freecodecamp-personal-portfolio-webpage/" id="profile-link" target="_blank">
                        <img src="image/personal portfolio.jpg" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            <span class="project-name"> Personal portfolio </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>

                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/education-pro/" id="profile-link" target="_blank">
                        <img src="image/EDUCATION PRO.png" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            <span class="project-name"> EDUCATION PRO
 </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>

                <div target="_blank" class="box">
                    <a href="https://educator-responsive-web.netlify.app/" id="profile-link" target="_blank">
                        <img src="image/EDUCATOR.png" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            <span class="project-name"> EDUCATOR </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>

                <div target="_blank" class="box">
                    <a href="https://alimulalam.github.io/World-cup-responsive/" id="profile-link" target="_blank">
                        <img src="image/World-cup-responsive.png" alt="" class="project-img">
                        <p>
                            <span class="code">&lt;</span>
                            <span class="project-name"> World Cup Responsive </span>
                            <span class="code">/&gt;</span>
                        </p>
                    </a>
                </div>
               
            </div>
        </div>
    </section>
    <!--Contact Section-->
    <section id="contact">
        <div class="container-area">
            <h1>Let's work together...</h1>
            <p><em>How do you take your coffee?</em></p>
            <div class="social-media">
                <div>
                    <a href="https://www.facebook.com/alimulalam.masum">
                        <i class="fab fa-facebook fa-1x"></i>
                        Facebook
                    </a>
                    <a href="https://github.com/Alimulalam">
                        <i class="fab fa-github fa-1x"></i>
                        Github
                    </a>
                    <a href="https://twitter.com/AlamAlimul">
                        <i class="fab fa-twitter fa-1x"></i>
                        Twitter
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope-open-text fa-1x"></i>
                        Send a mail
                    </a>
                    <a href="#">
                        <i class="fas fa-phone fa-1x"></i>
                        Call Me
                    </a>
                   
                </div>
            </div>
        </div>
    </section>
    
    <!--====== Footer Start ======-->

    <?php
    include "./split/footer.php";
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
