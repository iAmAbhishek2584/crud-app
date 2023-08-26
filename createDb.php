<?php 
// getting server info
$server = "localhost";
$user = "root";
$password = "";

// connecting to sql sever
$connect = mysqli_connect($server, $user, $password);

if (!$connect) {
    die(mysqli_connect_error($connect));
}

// creating database 
$database = "crud";
$sql = "CREATE DATABASE IF NOT EXISTS $database;";
$result = mysqli_query($connect, $sql);

// creating table 
$result = mysqli_query($connect, $sql);
$sql = "CREATE TABLE IF NOT EXISTS `$database`.`crudTable` (`Sr_No.` INT(11) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(25) NOT NULL , `Email` VARCHAR(25) NOT NULL , `Mobile` INT(11) NOT NULL , `password` VARCHAR(25) NOT NULL , PRIMARY KEY (`Sr_No.`));";
$result = mysqli_query($connect, $sql);
?>