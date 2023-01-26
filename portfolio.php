<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Iteck</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/css/lib/swiper.min.css" />
    
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
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
                <span class="btn sm-butn bg-white py-0 px-2 me-2 fs-10px">
                    <small class="fs-10px">Special</small>
                </span>
                <img src="assets/img/icons/nav_icon/imoj_heart.png" alt="" class="icon-15">
                <span class="fs-10px op-6">Get </span>
                <small class="op-10 fs-10px">20% Discount</small>
                <span class="fs-10px op-6">Get for New Account</span>
                <a href="#" class="fs-10px text-decoration-underline ms-2">Register Now</a>
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->

    <!-- ====== start navbar ====== -->
       <nav class="navbar navbar-expand-lg navbar-light bg-transparent style-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="http://mitsafe.com/assets/images/morden-logo.png" alt="" style="height: 60px;width:200px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        home
                    </a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="about.php">about</a></li>
                            <li><a class="dropdown-item" href="page-product-5.html">product</a></li>
                            <li><a class="dropdown-item" href="service.php">services</a></li>
                            <li><a class="dropdown-item" href="page-shop-5.html">shop</a></li>
                            <li><a class="dropdown-item" href="singlePost.php">single project</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">
                            portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-blog-5.html">
                            blog
                            <small
                                class="fs-10px icon-20 rounded-pill bg-blue5 text-white fw-bold px-3 ms-2 d-inline-flex justify-content-center align-items-center">3</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">
                            contact us
                        </a>
                    </li>
                    
                </ul>
                <div class="nav-side">
                    <div class="d-flex align-items-center">
                        <span class="nav-item">
                            <a class="nav-link" href="page-contact-5.html">
                                <i class="bi bi-person fs-5 me-2"></i>
                                sign in
                            </a>
                        </span>
                        <a href="page-contact-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                            <span>Start Free Trial <i class="bi bi-arrow-right ms-1"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->

    <!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> Our <span> Projects </span> </h2>
                    <p> With over 7+ years of our journey we have been proudly serving our clients in different industry verticals from small startups to large enterprises. </p>
                </div>
                <div class="controls">
                    <button type="button" class="control" data-filter="all">All</button>
                    <button type="button" class="control" data-filter=".consultation">IT Consultation</button>
                    <button type="button" class="control" data-filter=".security">Data Security</button>
                    <button type="button" class="control" data-filter=".website">Website Development</button>
                    <button type="button" class="control" data-filter=".design">UI/UX Design</button>
                    <button type="button" class="control" data-filter=".cloud">Cloud Service</button>
                    <button type="button" class="control" data-filter=".development">Game Development</button>
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div class="row mix-container">
                            <div class="col-lg-4 mix security consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="assets/img/portfolio/Screenshot (7).png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php">Soulful Musik Academy</a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">IT Consultation</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Consultation</a>
                                            <a href="#">Management</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix design security">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="assets/img/portfolio/Screenshot (8).png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php"> LuckSkull </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Website Development, UI/UX Design</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">WordPress</a>
                                            <a href="#">PHP</a>
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix website development">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="assets/img/portfolio/Screenshot (9).png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php"> Raichandgroup
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Game Developemnt</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">VR/AR</a>
                                            <a href="#">iOS & Android</a>
                                            <a href="#">Unity 2D/3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="assets/img/portfolio/Screenshot (11).png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php">I-Rummy </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">SEO analysis</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">SEO Analysis</a>
                                            <a href="#">Content Strategy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix website development cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="http://mitsafe.com/assets/images/portfolio/short/portshort2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php">FxHub </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">website design & develoment</small>
                                        <div class="text">
                                            Forex Hub is the fastest growing Best Forex Trading Signals.
                                        </div>
                                        <div class="tags">
                                            <a href="#">WordPress</a>
                                            <a href="#">PHP</a>
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix design consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="http://mitsafe.com/assets/images/portfolio/short/portshort3.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php"> Morden Technology USA
                                            </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Data security</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Security</a>
                                            <a href="#">Management</a>
                                            <a href="#">Backup & Recovery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="http://mitsafe.com/assets/images/portfolio/short/portshort4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php">Online Homeopathy Website </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">UI/UX Design</small>
                                        <div class="text">
                                            Homeopathy is the alternative form of medicine.
                                        </div>
                                        <div class="tags">
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix security cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="http://mitsafe.com/assets/images/portfolio/short/portshort1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php">Online Homeopathy Website </a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Online Homeopathy Website </small>
                                        <div class="text">
                                            Homeopathy is the alternative form of medicine.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Data Security</a>
                                            <a href="#">Python</a>
                                            <a href="#">Data Backup</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix development consultation">
                                <div class="portfolio-card">
                                    <div class="img">
                                        <img src="http://mitsafe.com/assets/images/portfolio/app/app1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="singlePost.php"> Prepu Education System</a> 
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Prepu Education System</small>
                                        <div class="text">
                                            Online Education system Mobile Application.
                                        </div>
                                        <div class="tags">
                                            <a href="#">AI</a>
                                            <a href="#">Machine Learning</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="page-portfolio-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-30">
                            <span> Load More (24) </span>
                        </a>
                    </div>
                </section>
            </div>
        </section>
        <section class="download section-padding style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <h2>Access your business potentials today & find opportunity for 
                                <span>
                                    bigger success 
                                    <img src="assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="assets/img/header/head5_pen.png" alt="" class="head-pen">         
                                </span>
                            </h2>
                            <div class="butns mt-70">
                                <a href="page-contact-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mx-1">
                                    <span> Start A Project Now </span>
                                </a>
                                <a href="page-about-5.html" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mx-1">
                                    <span> See Pricing & Plan </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->


    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
<?php include('layout/innerFooter.php')?>
    <script>
        // ---------- portfolio mixitup -----------
        var containerEl = document.querySelector('.mix-container');

        var mixer = mixitup(containerEl);
    </script>
<script src="assets/js/lib/jquery-3.0.0.min.js"></script>
<script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<script src="assets/js/lib/wow.min.js"></script>
<script src="assets/js/lib/jquery.fancybox.js"></script>
<script src="assets/js/lib/lity.js"></script>
<script src="assets/js/lib/swiper.min.js"></script>
<script src="assets/js/lib/jquery.waypoints.min.js"></script>
<script src="assets/js/lib/jquery.counterup.js"></script>
<script src="assets/js/lib/pace.js"></script>
<script src="assets/js/lib/scrollIt.min.js"></script>
<script src="assets/js/main.js"></script>

</body>

</html>