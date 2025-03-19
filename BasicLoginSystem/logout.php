<?php 
session_start();
//destroy the session and redirect to login page
session_destroy();
header("Location: index.php");
exit(); // clsoing 
?>