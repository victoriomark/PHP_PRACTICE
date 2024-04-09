<?php
include "config.php";
global $conn;
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['display'])){
    $Query = "SELECT * FROM createexpenses;";
    $Tr = "";
    $CurrentBalance = 0;

    $result = mysqli_query($conn,$Query);
    if (mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)){
           $SpentExpense = $row['SpentExpense'];
           $SelectValue = $row['SelectValue'];
           $Budget = $row['Budget'];
           $ID = $row['ID'];
           $CurrentBalance = $Budget - $SpentExpense;

            $Tr .= "<tr>";
            $Tr .= "<td>$SelectValue</td>";
            $Tr .= "<td>₱$Budget</td>";
            $Tr .= "<td>₱$SpentExpense</td>";
            $Tr .= "<td class='text-success fw-bold'>₱$CurrentBalance</td>";
            $Tr .= "<td>
                     <button value='$ID' id='delete'  class='btn text-light'><i class='fa-solid fa-trash-can'></i></button>
                    </td>";
            $Tr .= "</tr>";

        }

    }else{
        $Tr .= "<tr> <td> No Data Available</td> </tr>";
    }
    echo $Tr;
}


