<?php
$conn = mysqli_connect("localhost",'root','','attendance_management');

if(!$conn){
    die("Connection Problem");
}