<?php 
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM $database.`crudTable` WHERE `crudTable`.`Sr_No.` = $id";
    $result = mysqli_query($connect, $sql);
    if($result) {
        header('location:index.php');
    }

    else {
        die(mysqli_connect_error($connect));
    }
}
?>