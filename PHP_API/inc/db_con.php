<?php
$conn = mysqli_connect('localhost','root','','api_test');

if(!$conn){
    die("Connection Problem") . mysqli_affected_rows($conn);
}
