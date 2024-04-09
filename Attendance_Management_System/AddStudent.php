<?php
include "config.php";
global $conn;

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $fist_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $CourseValue = $_POST['CourseValue'];
    $student_id = $_POST['student_id'];

    // prepare fo Query
    $stmt = $conn->prepare("INSERT INTO student_table(FistName,LastName,Student_id,Course) values(?,?,?,?)");
    // bind the inputs
    $stmt->bind_param('ssss',$fist_name,$last_name,$student_id,$CourseValue);

    // execute the Query
    $stmt->execute();
    $stmt->close();


}