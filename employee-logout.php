<?php
session_start(); 
session_destroy(); // destroy session
header("location:employee_login.php"); 
?>

