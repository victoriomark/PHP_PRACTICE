<?php
include "connect.php";
if(isset($_POST['Id'])){
    global $conn;
  echo  $btn_ID = $_POST['Id'];
    $Query = "DELETE FROM todo WHERE ID = $btn_ID; ";
    $result = mysqli_query($conn,$Query);
}