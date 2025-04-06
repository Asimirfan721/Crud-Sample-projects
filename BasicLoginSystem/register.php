<?php 
//register page
session_start();

//check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){   
    //GET FORM DATA AND REMOVE UNNECESSARY SPACES   
    $username = trim($_POST["username"]); // user name is resolved here
    $email = trim($_POST["email"]); // email 
    $password = trim($_POST["password"]); // password 
    $role = isset($_POST['role']) ? $_POST['role'] : 'user';  // Default role is 'user'
    //$confirm_password = trim($_POST["confirm_password"]);
    //validate username 
    if(empty($username) || empty($password) || empty($email)){ // empty 
        echo "All fields are required"; // 
    }
    else {
        //hash the password for security 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        //CONNECTION WITH DATABASE, UPDATE CREDETNTIALS ACCORDINGLY     
        $conn =  new mysqli("localhost", "root", "", "user_db");
        //check database connection

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashedPassword', '$role')";

        if($conn->query($sql) == TRUE){
            echo "Registeration successfull <a href ='index.php'>Login here</a>";      
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                //CLOSE THE CONNECTION  
                $conn->close();
    }
}

?>

<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>

        <a href="index.php">You have already an account? Login here</a>
    </form>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        border: none;
        border-radius: 4px;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
</html>