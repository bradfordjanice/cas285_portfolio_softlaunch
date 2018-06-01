<?php 

/*
File Name: closeConnection.php
Date: 05/10/18
Programmer: Janice Bradford
Project: jsb Animation Studios Portfolio
*/

if(isset($con)) {
    $con = null;
    //echo "<p>4. Database connection closed!</p>";
}
else{
    //echo "<br>4. No database connection to close.";
}

?>