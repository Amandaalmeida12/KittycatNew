<?php 

session_start();

unset($_SESSION['usuarios']);
header("location:../index.php");
 ?>