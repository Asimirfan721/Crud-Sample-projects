<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Paget</title>
</head>
<body>
    <h1>CRUD APP IN PHP</h1>
    <a href="create.php">Create</a>
    
</body>
</html>
=======
<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <div class="box1">
            <h2>All Students Records</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENTS</button>
        </div>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM `students`";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            echo "<tr><td colspan='4'>Query failed</td></tr>";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['age']) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<!-- Bootstrap 5 Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Modal Content Goes Here</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<!-- Bootstrap 5 JS & jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
>>>>>>> facb8efc0b7bd8988adb6da1b3e4f166d43e411c
