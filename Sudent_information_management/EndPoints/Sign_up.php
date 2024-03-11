<?php


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign_up'])){
    $conn = mysqli_connect('localhost','root','','admin');
    if(!$conn){
        die("connection problem");
    }else{
        $username = $_POST['username'];
        $password = $_POST['Password'];

        $Query = "INSERT INTO  users(UserNamme,Passwords) values('$username','$password'); ";

        if(mysqli_query($conn,$Query)){

            ?>
            <script>
                alert("Successfully Registered!")
                window.location.href = "../index.php"
            </script>
         <?php
        }else{
            echo "error" . mysqli_error($conn);
        }
    }

}