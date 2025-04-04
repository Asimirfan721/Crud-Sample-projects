<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) { // condision if username is available here
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username']; 
$sql = "SELECT * FROM users WHERE username='$username'"; // user name matcches
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    
    $sql = "UPDATE users SET username='$new_username', email='$new_email' WHERE username='$username'";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $new_username;  // Update session variable
        echo "Profile updated!";
    } else {
        echo "Error updating profile: " . $conn->error;
    }
}
?>
<form method="POST">
    <input type="text" name="username" value="<?= $row['username']; ?>">
    <input type="email" name="email" value="<?= $row['email']; ?>">
    <button type="submit">Update</button>
</form>
