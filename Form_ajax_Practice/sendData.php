<?php

//creating Connection
$conn = mysqli_connect('localhost','root','','admin');

if(!$conn){
    die("Connection Problem");
}else{

extract($_POST);

if(isset($_POST['Password']) && isset($_POST['userName']) ){
    $Query = "insert into ajax(User_Name,passwords) values('$userName','$Password'); ";

    $result = mysqli_query($conn,$Query);

}

}