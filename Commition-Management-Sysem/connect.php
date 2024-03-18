<?php
$conn = mysqli_connect('localhost','root','','commition_projject');

// check if the connection is not success

if(!$conn){
    // if conn is not success die
    die("<h1>Connection Problem</h1>"). mysqli_connect_error();
}