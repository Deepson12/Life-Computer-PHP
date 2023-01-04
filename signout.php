<?php 
session_start();
//session_destroy();
unset($_SESSION['lifecomputer']);
header('location:startpage.php');
?>


