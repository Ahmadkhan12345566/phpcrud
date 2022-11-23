<?php
 include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Users</h2>
    <a  class="btn btn-primary" href="user.php">Add User</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php

        $sql = "Select * from users";
        $result = mysqli_query($con,$sql);
        if ($result){
         while ($row = mysqli_fetch_assoc($result)){

                 $id= $row["id"];
                 $email=$row["email"];
                 $username=$row["username"];
                 $firstname=$row["firstname"];
                 $lastname=$row["lastname"];

                 echo  "<tr>
            <td>$id</td>
            <td>$email</td>
            <td>$username</td>
            <td>$firstname</td>
            <td>$lastname</td>
            <td>
                <a href='edit.php?id=$id' class='btn btn-default'>Edit</a>
                     <a href='delete.php?id=$id' class='btn btn-danger'>Delete</a>
            </td>
        </tr>";



         }

        }else{
            die(mysqli_error($con));
        }


        ?>



        </tbody>
    </table>
</div>

</body>
</html>
