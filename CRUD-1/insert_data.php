<?php 
$connection = mysqli_connect("localhost", "root", "", "crud-1");

if(!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Add_students'])){
     
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];
    if($fname == " " || empty($fname)){
        header('location:index.php?message=Please fill the first name');
    }
   else { 
    $query = "INSERT INTO `students`(`first_name`, `last_name`, `age`) VALUES ('$fname', '$lname', '$age')";
    }
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
        header('location:index.php?insert_msg=Data Inserted Successfully');
    }
}


?>