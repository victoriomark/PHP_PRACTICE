<?php

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['Reg'])){
    include "./config.php";
    global $conn;

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $stmt = $conn->prepare("INSERT INTO admin(UserName,Passwords)values(?,?)");
    $stmt->bind_param("ss",$Username,$Password);

    if($stmt->execute()){
        echo "Successfully Registered";
    }else{
        echo "Error" . $stmt->error;
    }
    $stmt->close();

}