<?php
$delete_btn = $_POST['delete_btn'];
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($delete_btn)){

    $conn = mysqli_connect('localhost','root','','crud');

    if(!$conn){
        die("Connection Problems");
    }else{
        $Query = "DELETE  FROM crud_tb where ID = $delete_btn";
        if(mysqli_query($conn,$Query)){
            echo "<h1>Successfully Deleted!</h1>";
            echo " <a href='./index.php'>Back Home</a>";
        }else{
            echo "May problem";
        }
    }
}

?>