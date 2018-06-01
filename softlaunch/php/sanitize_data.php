<?php

/*
File Name: sanitize_data.php
Date: 05/10/18
Programmer: Janice Bradford
Project: jsb Animation Studios Portfolio
*/

// sanitize form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  return $data;
}

?>