<!DOCTYPE html>
<html lang="en">


<?php 
include('layout/header.php');
?> 
 
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
                            <li><a class="dropdown-item" href="page-single-project-5.html">single project</a></li>
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
>>>>>>> b62048d118f2d8e8a06fa33b047729d1c39cd84d

    <!--Contents-->
    <main class="contact-page style-5">
        <!-- ====== start contact page ====== -->
        <section class="contact section-padding pt-50 style-6">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class=""> Get In <span> Touch </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="text-center mb-100" style="margin-top: -60px;">
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50  color-blue5">+91-6265944392</h2>
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50  color-blue5">USA +1-(516) 847-4997</h2>
                    <!-- <h4 class="fw-normal mb-20 color-000">contact@Itecksolution.com</h4> -->
                    <h4 class="fw-normal mb-10 color-000">202 Business Island Nipaniya Indore</h4>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <?php

                            if(  $sended_mail==true){
                                ?>
                                <div class="alert alert-success">Contact Us Form submitted successfully, We will contact you shortly</div>

                                <?php

                            }
                            else if(   $recaptcha_validated==false){
                                ?>
                                <div class="alert alert-warning">Please verify you are not robot</div>

                                <?php

                            }

                            ?> 
                            <form action="contactus.php" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name" required> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control"  placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="mob_no" class="form-control" placeholder="Mobile Number" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" name="message" class="form-control" placeholder="message here" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12" style="margin-top:30px;">
                                        <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LcQdS4kAAAAAIvaPOvXtOKUmoUbxrWvF2xznL4f"></div>
                                  
                                        </div>

                                        </div>

                                    <div class="col-lg-12 text-center" style="visibility: hidden;""">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#" class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                              
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" name="btnsubmit" value="Send Your Request" class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->

        <!-- ====== start contact page ====== -->
        <!-- <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24219.60999175365!2d-73.9764341314902!3d40.64198229194528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b400c94a227%3A0x18e2a4d3fb21f0ec!2sFlatbush%2C%20Brooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1651361759450!5m2!1sen!2seg" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
        <!-- ====== start contact page ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
 <?php include('layout/innerFooter.php')?>
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>