<?php include ('header.php');?>
<?php include ('dbconn.php');?>
<div class="box1">
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> ADD Students</button>
</div>  
        <table class =" table table-hover table-bordered table-striped">   
        <thead>
        <tr>
            <th>Id</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>
        </thead>
    
        <tbody>
            <?php 
                $query = "SELECT * FROM `students`";
                $result = mysqli_query($connection, $query);
            
        if(!$result){
            die("Query Failed");
        }
        else{
           while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><a href="update_page.php?id=<?php echo $row['id'];?>" class = "btn btn-success">Update</a></td>
                <td><a href="delete_page.php?id=<?php echo $row['id'];?>" class = "btn btn-danger">Delete</a></td>
            </tr>
            <?php
           }
           
        }
        ?>
       
        
        </tbody>
    </table>
    <?php 
    if(isset($_GET['message'])){
        echo "<h6>".$_GET['message']."</h6>";
    }
    ?>
    <?php 
    if(isset($_GET['insert_msg'])){
        echo "<h6>".$_GET['insert_msg']."</h6>";
    }
    ?>
    <form action ="insert_data.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
            <div class="form-group">
                <lable for="f_name">First Name</lable>
                <input type="text" class="form-control" name="f_name">

            </div>
            <div class="form-group">
                <lable for="l_name">Last Name</lable>
                <input type="text" class="form-control" name="l_name">

            </div>
            <div class="form-group">
                <lable for="age">Age</lable>
                <input type="text" class="form-control" name="age">

            </div>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name = "Add_students" value = "Add student">  
      </div>
    </div>
  </div>
</div> 
</form>
    <?php include ('footer.php');?>