<?php 
session_start();
session_destroy($_SESSION['admin']);
unset($_SESSION['admin']);
header("location:index.php");

?>