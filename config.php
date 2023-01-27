<?php

$host = $_SERVER['HTTP_HOST'];
$con = ""; 


// if($host == 'mitsafewebsite.modvent.com'){
//     $con = mysqli_connect('localhost', 'raichand_website_user', '6zE65Ybr6iRLAYXX', 'raichand_website') or die('not connected');   
// }
// else{

//     $con = mysqli_connect('localhost', 'root', '', 'mitsafe_website') or die('not connected'); 
// } 

define("EMAIL_HOST","smtp.gmail.com");
define("EMAIL_USERNAME","rjohri21@gmail.com"); 
define("EMAIL_PASSWORD","jrnemonlkqxxindv");

define("EMAIL_FROMMAIL","rjohri21@gmail.com");
define("EMAIL_FROMNAME","MIT SAFE");
define("RECAPTCHA_SITEKEY","6LcQdS4kAAAAAIvaPOvXtOKUmoUbxrWvF2xznL4f");
define("RECAPTCHA_SECRETKEY","6LcQdS4kAAAAAKjIUEDVPiXFCvPiyofsoLBHkEHL");

?>