<?php
include  "config.php";
global $conn;
if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Data'])){

    $Tr = "";
    $Query = "SELECT * FROM student_table";
    $result = mysqli_query($conn,$Query);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $FistName = $row['FistName'];
            $LastName = $row['LastName'];
            $Student_id = $row['Student_id'];
            $Course = $row['Course'];
            $ID = $row['ID'];

            $Tr .= "<tr>";
            $Tr .= "<td>$Student_id</td>";
            $Tr .= "<td>$FistName</td>";
            $Tr .= "<td>$LastName</td>";
            $Tr .= "<td>$Course</td>";
            $Tr .= "<td>
              <button  type='button' id='btn_update'  value='$ID' class='btn'><i class='fa-solid fa-pen-to-square '></i></button> 
              <button type='button' id='btn_delete' value='$ID' class='btn btn_delete'><i class='fa-solid fa-trash-can ' ></i></button> 
            </td>";

            $Tr .= "</tr>";
        }

    }
    echo $Tr;
}


