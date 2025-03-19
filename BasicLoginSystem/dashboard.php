<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
 // dashboard view 
$conn = new mysqli("localhost", "root", "", "user_db");
$username = $_SESSION['username'];
// this is a comment
$sql = "SELECT role FROM users WHERE username='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$role = $row['role']; // Get user role
 // closing 
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }
        .logout { background: red; color: white; }
        .profile { background: blue; color: white; }
        .admin { background: green; color: white; }
        .delete { background: black; color: white; }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

    <!-- Profile Button -->
    <a href="profile.php"><button class="btn profile">Profile</button></a>

    <!-- Logout Button -->
    <a href="logout.php"><button class="btn logout">Logout</button></a>

    <!-- Admin Panel Button (Only for Admins) -->
    <?php if ($role === 'admin'): ?>
        <a href="admin.php"><button class="btn admin">Admin Panel</button></a>
    <?php endif; ?>

    <!-- Delete Account Button -->
    <a href="delete.php"><button class="btn delete">Delete Account</button></a>
</body>
</html>
