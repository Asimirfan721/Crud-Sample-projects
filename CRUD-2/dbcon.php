<?php 

define("Hostname","localhost");
define("Database","CRUD-2");
define("Username","root");
define("Password","");
$connection = mysqli_connect(Hostname,Username,Password,Database);
if(!$connection){
    echo "Connection failed";
}else{
    echo "Connection successful";
}

?>