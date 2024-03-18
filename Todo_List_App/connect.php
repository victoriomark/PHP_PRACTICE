<?php
$conn = mysqli_connect('localhost','root','','todo_app');
if(!$conn){
    die("connection Problem").mysqli_connect_error();
}