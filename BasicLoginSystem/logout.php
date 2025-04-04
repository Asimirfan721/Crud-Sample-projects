<?php 
session_start();
//destroy the session and redirect to login page working
session_destroy();
header("Location: index.php");
exit(); // clsoing 
?>