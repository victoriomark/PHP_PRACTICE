<?php
$conn = mysqli_connect('localhost','root','','expense_category');

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_category'])){
    $expense_name = $_POST['ExpenseName'];
    $expense_amount = $_POST['ExpenseAmount'];

    $Query = "INSERT INTO expense_category(ExpenseName,Expense_Amount) VALUES('$expense_name',$expense_amount); ";

    mysqli_query($conn,$Query);

}