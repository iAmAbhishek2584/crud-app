<?php 
// getting server info
$server = "localhost";
$user = "root";
$password = "";
$database = "crud";

// connecting to sql sever
$connect = mysqli_connect($server, $user, $password, $database);

if (!$connect) {
    die(mysqli_connect_error($connect));
}
?>