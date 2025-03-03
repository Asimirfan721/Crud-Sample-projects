

<?php 
//login page 
session_start();

//check if form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    //GET FORM INPUT VALUES AND REMOVE UNCESSARY SPACES
    $email= trim($_POST["email"]);
    $password = trim($_POST["password"]);
}

$email = isset($email) ? $email : '';
$password = isset($password) ? $password : '';

if(empty($email) || empty ($password)){
    echo "All fields are Required";
    }
    else{
        //connect to the database 
        $conn = new Mysqli("localhost", "root", "", "user_db");
        //cehc databasee connection 
        if($conn->connect_error){
            die("connection failed: " . $conn->connect_error);
        }
        $sql ="SELECT id, username, password From users where email ='$email'";
        $result = $conn->query($sql);
        // check if user exists

        if($result->num_rows == 1){
            //fetch the user details
            $row = $result->fetch_assoc();
            $hashedPassword = $row["password"];
            // verify the entered password with the hashed password which is store in database
            if(password_verify($password, $hashedPassword)){
                //Store user data in session variable 
                $_SESSION["user_id"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                //redirect to dashboard or home page 
                header("Location: dashboard.php");
                exit();
            
                $conn->close();
    
            } else {
                echo "Invalid email  ";
            }
        } else {
            echo "Invalid   password";
        }
        $conn->close();
    }
    ?>
        


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
        <a href="register.php">You don't have an account? Register here</a>
    </form>
</body>
</html>
