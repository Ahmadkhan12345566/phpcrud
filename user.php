<?php
include "connect.php";

if (isset($_POST["submit"])){
    $email= $_POST["email"];
    $username =$_POST["username"];
    $firstname =$_POST["firstname"];
    $lastname = $_POST["lastname"];

    $sql = "INSERT INTO users (email,username,firstname,lastname)
            value  ('$email','$username','$firstname','$lastname')";

   $result = mysqli_query($con,$sql);

   if ($result){
//       die("User Inserted");
       header("location:index.php");
   }else{
       die(mysqli_error($con));
   }

}



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
    <h2>Add User</h2>
    <form action="/user.php" method="post">
        <div class="form-group">
            <label >Email:</label>
            <input type="email" class="form-control"  placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label >Username:</label>
            <input type="text" class="form-control"  placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label >First name:</label>
            <input type="text" class="form-control"  placeholder="Enter firstname" name="firstname">
        </div>
        <div class="form-group">
            <label >Last name:</label>
            <input type="text" class="form-control"  placeholder="Enter lastname" name="lastname">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
