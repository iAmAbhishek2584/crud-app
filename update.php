<?php 
include 'connect.php';
if (isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM $database.`crudTable` WHERE `crudTable`.`Sr_No.`='$id'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Mobile = $row['Mobile']; 
    $Pass = $row['password'];
}
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile']; 
    $pass = $_POST['pass'];

    $sql = "UPDATE `crudtable` SET `Name` = '$name', `Email` = '$email', `password` = '$pass', `mobile` = $mobile WHERE `crudtable`.`Sr_No.` = $id;";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('location:index.php');
    }

    else {
        die(mysqli_error($connect));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="Fname" class="form-label">Name</label>
                <input type="text" class="form-control" id="Fname" required autocomplete="off" name="name" value=<?php echo $Name?>>
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="mail" name="email" aria-describedby="emailHelp" required autocomplete="off" value=<?php echo $Email?>>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" id="mobile" class="form-control" name="mobile" required autocomplete="off" value=<?php echo $Mobile?>>
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwd" name="pass" required value=<?php echo $Pass?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>