<?php include('header.php');?>
<?php include('dbcon.php'); ?>
     <table class="table table-hover table-bordered table-striped">
        <thead>
            <h2>All Students Records</h2>
            <tr> 
            <th>ID</th>
            <th> First Name</th>
            <th>Last Name</th>
            <th>age</th>
</tr>
        </thead>
        <tbody>
            <?php 
            $query="SELECT * FROM `students`";
            $result=mysqli_query($connection,$query);
            if(!$result){
                echo "Query failed";}
                else{
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "</tr>";
                    }
                }
            
            ?>
            <tr>
            <td>3</td>
            <td>Anum</td>
            <td>shah</td>
            <td>34</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Haseeb</td>
                <td>Bheel</td>
                <td>54</td>
            </tr>

        </tbody>
    </table>
    <?php include('footer.php');?>