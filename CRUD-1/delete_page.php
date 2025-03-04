<?php include('dbconn.php')?>

<?php 


    if(isset($_GET['id'])){
        $id=$GET['id'];

$query = "DELETE FROM `students` WHERE id = '$_GET[id]'";
$result = mysqli_query($connection, $query);
if(!$result){
    die("Query Failed".mysqli_error($connection));
}
else{
    header('location:index.php?delete_msg=Data Deleted Successfully');}

}
?>