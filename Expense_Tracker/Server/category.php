<?php

$conn = mysqli_connect('localhost','root','','spense_tracker');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_category'])){
$expense_name = $_POST['ExpenseName'];
$expense_amount = $_POST['ExpenseAmount'];

$Query = "INSERT INTO expense_category(ExpenseName,Expense_Amount) VALUES('$expense_name',$expense_amount); ";


if(mysqli_query($conn,$Query)){
    echo "success";
}else{
    mysqli_error($conn);
    echo "error";
}

}