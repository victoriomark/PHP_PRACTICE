<?php

$conn = mysqli_connect("localhost",'root','','spense_tracker');

if(!$conn){
    die("<h1>Connection Problem</h1>");
}