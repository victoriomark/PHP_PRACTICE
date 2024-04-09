<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $conn = mysqli_connect("localhost",'root','','attendance_management');
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    // to prevent sql injection
    $UserName = stripcslashes($UserName);
    $Password = stripcslashes($Password);
    $Password = mysqli_real_escape_string($conn,$Password);
    $UserName = mysqli_real_escape_string($conn,$UserName);


    //performing the QUERY
    $Query = "SELECT * FROM admin WHERE UserName = '$UserName' AND Passwords = '$Password'";
    $result = mysqli_query($conn,$Query);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['UserName'] = $UserName;
        echo '<script>setTimeout(() => { window.location.href = "./Dashboard.php"; }, 2000);</script>';
        exit();
    }else{
        header('Location: ./index.php');
    }

}

?>

