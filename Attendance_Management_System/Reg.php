<?php

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['Reg'])){
    include "./config.php";
    global $conn;

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $Query = "INSERT INTO admin(UserName,Passwords) VALUES('$Username','$Password');";
    mysqli_query($conn,$Query);

}