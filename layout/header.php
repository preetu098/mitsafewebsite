<!DOCTYPE html>
<?php 
include_once('config.php');

 
$blogdetail=getPageBlogDetail($pdo,basename($_SERVER['PHP_SELF']));
 
 
?>
<html lang="en">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="<?php echo $blogdetail['keywords']; ?>" />
    <meta name="description" content="<?php echo $blogdetail['description']; ?>" />
    <meta name="author" content="<?php echo $blogdetail['author']; ?>" />

    <!-- Title  -->
    <title><?php echo $blogdetail['title']; ?></title>
    <link rel="preload" href="assets/css/bootstrap-icons.woff2">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/css/lib/swiper.min.css" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  type="text/javascript"></script>
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-5">
        <div class="container">
            <div class="content text-white">
                
                    <small class="fs-10px" style="font-size:17px!important">India +91-6265944392</small>
               
                <!-- <img src="assets/img/icons/nav_icon/imoj_heart.png" alt="" class="icon-15"> -->
                <small class="fs-10px" style="font-size:17px!important"> USA +1-(516) 847-4997</small>
                <a href="#" class="fs-10px text-decoration-underline ms-2">Register Now</a>
            </div>
        </div>
    </div>
   
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/morden-logo.png" alt="logo" height="50" width="500">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown" style="font-size:16px!important;">
                        <!-- <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> -->
                            <a class="nav-link" href="index.php" style="font-size:16px!important;">
                            Homes
                        </a>
                      
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="about.php" style="font-size:16px!important;">
                            About
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="product.php" style="font-size:16px!important;">
                            Product
                        </a>
                    </li>
                    <li class="nav-item dropdown" style="font-size:16px!important;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="font-size:16px!important;">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="about.php" style="font-size:16px!important;">Website Design/Developement</a></li>
                            <!-- <li><a class="dropdown-item" href="page-product-5.html">Product</a></li> -->
                            <li><a class="dropdown-item" href="service.php" style="font-size:16px!important;">Application Android/IOS Developement</a></li>
                            
                            <li><a class="dropdown-item" href="singlePost.php" style="font-size:16px!important;">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="singlePost.php" style="font-size:16px!important;">CRM Software</a></li>
                            <li><a class="dropdown-item" href="page-career.php" style="font-size:16px!important;">Graphic Design UX/UI</a></li>
                            <li><a class="dropdown-item" href="page-career.php" style="font-size:16px!important;">Game Developement</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="portfolio.php" style="font-size:16px!important;">
                            portfolio
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="blog.php" style="font-size:16px!important;">
                            blog
                            <small
                                class="fs-10px icon-20 rounded-pill bg-blue5 text-white fw-bold px-3 ms-2 d-inline-flex justify-content-center align-items-center">3</small>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="contactus.php" style="font-size:16px!important;">
                            contact us
                        </a>
                    </li>
                    
                </ul>
                <!-- <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <span class="nav-item">
                            <a class="nav-link" href="page-contact-5.html" style="font-size:16px!important;">
                                <i class="bi bi-person fs-5 me-2"></i>
                                sign in
                            </a>
                        </span>
                        <a href="page-contact-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>Start Free Trial <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->