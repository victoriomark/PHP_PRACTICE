<?php
header('Access-Control-Allow-Origin: http://localhost:5173');
$taSK = $_POST['task'];
$conn = mysqli_connect('localhost','root','','task_database');

if(!$conn){
    die("connection problem");
}else{
    $Query = " INSERT INTO task_db(task)values('$taSK'); ";

    if(mysqli_query($conn,$Query)){
        echo "Success Adding to the database";
    }else{
        echo "something wrong in adding to database";
    }
}


