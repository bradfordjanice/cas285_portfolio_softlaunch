<?php 

/*
File Name: connection.php
Date: 05/10/18
Programmer: Janice Bradford
Project: jsb Animation Studios Portfolio
*/

//define("DB_SERVER", "127.0.0.1");
define("DB_SERVER", "localhost");
define("DB_USER", "janicebr_cas285");
define("DB_PASSWORD", "G02637467!");
define("DB_NAME", "janicebr_cas285portfolio");

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} else 
    //echo "1. database connection succeeded.<br>"

?>