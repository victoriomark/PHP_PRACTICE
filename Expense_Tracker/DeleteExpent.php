<?php
include "./config.php";
global $conn;

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['DelId'])){
    $id = $_POST['DelId'];
$Query = "DELETE FROM createexpenses WHERE ID = $id";
 mysqli_query($conn,$Query);
}
?>
