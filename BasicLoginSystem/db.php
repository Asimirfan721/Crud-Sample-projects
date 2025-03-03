<?php
$host = "localhost"; // Change if your database is hosted elsewhere
$user = "root";      // Default username for XAMPP/MAMP
$pass = "";          // Default password (empty for XAMPP)
$dbname = "user_db"; // Name of your database

// Create a connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
