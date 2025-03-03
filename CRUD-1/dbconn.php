<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud-1');


$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($connection === false){
    die("connecition Failed");  
}
else{
    echo "<h1>Database is Connected</h1>"; 
}

?>