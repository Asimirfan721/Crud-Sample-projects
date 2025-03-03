<?php include ('header.php');?>
<?php include ('dbconn.php');?>

<?php 
if(isset($_GET['id'])){
    $id = $_GET['id'];}
    $query = "SELECT * FROM `students` WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed");
    }
    else{
        $row = mysqli_fetch_assoc($result);
        
    }


?>

<form>
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






</form>
















<?php include ('footer.php');?>