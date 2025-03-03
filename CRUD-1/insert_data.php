<?php 

if(isset($_POST['Add_students'])){
     
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if($fname == " " || empty($fname)){
        header('location:index.php?message=Please fill the first name');
    }
   else if($lname == " " || empty($lname)){
        header('location:index.php?message=Please fill the last name');
    }
    else {
        header('location:index.php?message=Please fill the age');
    }
}


?>