<?php
include "connect.php";

if (isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "delete from `users` where id=$id";
    $result = mysqli_query($con,$sql);
    if ($result){
//        die("User deleted");
        header("location:index.php");
    }else{

        die(mysqli_error($con));
    }

}

?>
