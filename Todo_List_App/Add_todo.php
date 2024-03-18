<?php
include "connect.php";
extract($_POST);
    if(!empty($_POST['Data'])){
        global $conn;
        $Query = " INSERT INTO todo(todo_data) values('$Data'); ";
        mysqli_query($conn,$Query);
    }

