<?php  

session_name("yova");
session_start();

session_destroy();

header("location:dlogin.php");

?>