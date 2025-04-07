<?php
session_start();
$conn = new mysqli("localhost", "root", "", "user_db"); // data base connection delete

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Get user role
$username = $_SESSION['username'];
$sql = "SELECT role FROM users WHERE username='$username'"; // sql query 
$result = $conn->query($sql); // sql query 
$row = $result->fetch_assoc();
$role = $row['role'];

// Check if 'id' is set in the URL (Admin deleting another user)
if (isset($_GET['id'])) {
    if ($role !== 'admin') {
        echo "Access Denied! Only admin can delete other users.";
        exit();
    }
    $user_id = $_GET['id'];
} else {
    // Regular user deleting their own account
    $sql = "SELECT id FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user_id = $row['id'];
}

// Delete the user from the database
$sql = "DELETE FROM users WHERE id='$user_id'";
if ($conn->query($sql) === TRUE) {
    if (!isset($_GET['id'])) {
        // If a regular user deletes their own account, logout
        session_destroy();
        header("Location: delete.php");
    } else {
        // If admin deletes a user, redirect back to admin panel
        header("Location: admin.php");
    }
} else {
    echo "Error deleting account.";
}

$conn->close();
?>
