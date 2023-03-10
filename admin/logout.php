<?php

session_start();
    unset($_SESSION["ID"]);
    unset($_SESSION["First_Name"]);
    header("Location:index.php");
?>