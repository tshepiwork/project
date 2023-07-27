<?php 

$servername = "localhost";
$database = "first_database";
$username = "root";
$password = "";

$connection = new mysqli($servername,$username,$password,$database);

if($connection->connect_error) {
    echo "Connection failed " ;
}
echo "Connection successful";



?>


