<?php
include "config.php";
global  $conn;
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Expense'])){
$Tr = ""; // Initialize $Tr outside the loop
$Query  = "SELECT * FROM expense_category LIMIT 5";
$result = mysqli_query($conn,$Query);

// check if the result is greater than 0
if(mysqli_num_rows($result) > 0){
// if true then loop through the data using while loop
while ($row = mysqli_fetch_assoc($result)){
$id = $row['ID'];
$expense_name = $row['ExpenseName'];
  $ID = $row['ID'];
  $expense_amount = $row['Expense_Amount'];
  $created_at = $row['created_at'];

// Append each row's data to $Tr
    $Tr .= "<tr>"; // Start a new table row
    $Tr .= "<td>$expense_name</td>";
    $Tr .= "<td>₱$expense_amount</td>";
    $Tr .= "<td>$created_at</td>";
    $Tr .= "<td>
              <button  type='button' id='btn_update'  value='$ID' class='btn'><i class='fa-solid fa-pen-to-square'></i></button> 
              <button type='button' id='btn_delete' value='$ID' class='btn btn_delete'><i class='fa-solid fa-trash-can'></i></button> 
            </td>";

    $Tr .= "</tr>"; // Close the table row
}
}else{
// Display a message if there's no data available
$Tr = "<tr><td colspan='4'>No Expenses Available</td></tr>";
}

// Echo $Tr after the loop has finished
echo $Tr;
}
