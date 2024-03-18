<?php
include "config.php";
global $conn;
if(isset($_POST['saveId'])){

    $Id = $_POST['saveId'];
    $expenseName = $_POST['expenseName'];
    $updateAmount  = $_POST['updateAmount'];

    $Query = "UPDATE expense_category SET ExpenseName = '$expenseName', Expense_Amount = '$updateAmount' WHERE ID = $Id ; ";
    mysqli_query($conn,$Query);

}


