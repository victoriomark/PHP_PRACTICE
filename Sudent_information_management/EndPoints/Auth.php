<?php

// starting the Session
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign_in'])){
    $conn = mysqli_connect('localhost','root','','admin');
//    Declaring the variable and assign the input value
    $username = $_POST['username'];
    $password = $_POST['Password'];

//    to prevent from myqli injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $password = mysqli_real_escape_string($conn,$password);
    $username =mysqli_real_escape_string($conn,$username);

    $Query = "SELECT * FROM users where  UserNamme = '$username' and Passwords = '$password';";
    $result =mysqli_query($conn,$Query);
    $count = mysqli_num_rows($result);


    if($count == 1){
    $_SESSION['UserNamme'] = $username;
    echo "successfully Login";
//    now if success redirect to dashboard
        header("Location: ../Dashboard.php");
//        exit
    }else{
       header("Location: ../index.php");
    }
    exit();
//

}