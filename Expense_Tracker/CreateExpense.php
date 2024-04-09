<?php
include "config.php";
global $conn;
 if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['createExpenses'])){

     $SelectValue = $_POST['SelectValue'];
     $Description = $_POST['Description'];
     $ExpenseDate = $_POST['ExpenseDate'];
     $SpentExpense = $_POST['Spent'];
     $Budget = $_POST['Budget'];

     $Query = "INSERT INTO createexpenses(SpentExpense,Description,ExpenseDate,SelectValue,Budget) values('$SpentExpense','$Description','$ExpenseDate','$SelectValue','$Budget');";
      mysqli_query($conn,$Query);

 }