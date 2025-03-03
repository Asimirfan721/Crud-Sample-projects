<?php include ('header.php');?>
<?php include ('dbconn.php');?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];}
    $query = "SELECT * FROM `students` WHERE id = `$id`";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed");
    }
    else{
        $row = mysqli_fetch_assoc($result);
        
    }


?>
<?php 
if(isset($_POST['update_students'])){
    if(isset($_GET['id'])){
        $idnew = $_GET['id'];}

    $fname= $_POST['first_name'];
    $lname= $_POST['l_name'];
    $age= $_POST['age'];
    $query="update, 'students' set 'first_name' = '$fname', 'last_name' = '$lname', 'age' = '$age' where 'id' = '$idnew'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed".mysqli_error());
    }
    else{
        header('location:index.php?update_msg=Data Updated Successfully');
}}
?>

<form action="update_page.php?id_news=<?php echo $id;?>" method="POST">
<div class="form-group">
                <lable for="f_name">First Name</lable>
                <input type="text" name="f_name" class="form-control"  value ="<?php echo $row['first_name'];?>">

            </div>
            <div class="form-group">
                <lable for="l_name">Last Name</lable>
                <input type="text" name="l_name value" class="form-control" name="l_name" value="<?php echo $row['last_name'];?>">

            </div>
            <div class="form-group">
                <lable for="age">Age</lable>
                <input type="text" class="form-control" name="age" value ="<?php echo $row['age'];?>">
</div>

<input type="submit" class="btn btn-success" name = "Update_students" value = "Update">  


</form>
















<?php include ('footer.php');?>