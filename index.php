<?php include 'createDb.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <a class="btn btn-primary" href="user.php" role="button">Add User</a>
    </div>

    <div class="container my-5">
        <h2 style="text-align: center;" class="my-3">User list</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SrNo.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM $database.`crudTable`";
                $result = mysqli_query($connect, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                        <th scope="row">' . $row['Sr_No.'] . '</th>
                        <td>' . $row['Name'] . '</td>
                        <td>' . $row['Email'] . '</td>
                        <td>' . $row['password'] . '</td>
                        <td>' . $row['Mobile'] . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='. $row['Sr_No.'] .'" class="text-light" style="text-decoration: none;">Update</button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='. $row['Sr_No.'] .'" class="text-light" style="text-decoration: none;">Delete</button>
                        </td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>