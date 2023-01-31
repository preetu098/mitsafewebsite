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
define("EMAIL_USERNAME","modernt231@gmail.com"); 
define("EMAIL_PASSWORD","mdvhbiieuadjpnjr");

define("EMAIL_FROMMAIL","moderntechnologies12@gmail.com");
define("EMAIL_FROMNAME","MIT SAFE");
define("RECAPTCHA_SITEKEY","6LeCyz0kAAAAAEkL8-k7tZ3dzWkJ5oJj_UWPT7oM");
define("RECAPTCHA_SECRETKEY","6LeCyz0kAAAAAHBpvk8WJDFsXqU35sg11YCTZgHP");

?>