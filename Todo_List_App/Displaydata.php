<?php
include "connect.php";
$Query = "SELECT * FROM todo; ";

if (isset($_POST['Todo'])){
    global $conn;
    $list = "<div class='d-flex flex-column gap-2 justify-content-center align-items-center'>"; // Changed backticks to double quotes

    $result = mysqli_query($conn, $Query);
    // check if the row or tha table is not empty
    if(mysqli_num_rows($result) > 0 ){
        while ($row = mysqli_fetch_assoc($result)){

            $ID = $row['ID'];
            $Todo = $row['todo_data'];
            $list .= "
          <div id='todo_contaner' class='d-flex  p-2 justify-content-between align-items-center  col-md-4 col-lg-5 rounded-4 '>
          <p  class='P-1 text-secondary m-2 p-2 rounded-5'>$Todo</p>
          <div>
              <button id='btn_delete' data-id='$ID'  class='btn '>
                <i class='fa-solid fa-trash-can text-light-emphasis'></i>
               </button>
                <button id='btn_update' data-edit='$ID'  class='btn '>
               <i class='fa-regular fa-pen-to-square text-warning-emphasis'></i>
             </button>
          </div>
           </div>
      
     ";
        }

     }else{
     $list .= "<h1>No Todo Available!</h1>";
    }
    $list .= "</div>";
    echo $list;
    }

?>
