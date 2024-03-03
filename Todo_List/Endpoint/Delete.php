<?php

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_delete'])){
    $BTN_DEL = $_POST['btn_delete'];

    $conn = mysqli_connect('localhost','root','','Todo');

    if(!$conn){
        die("<h1>Connection Problem!</h1>");
    }else{
// else mag Query tayo
        $Query = " DELETE FROM tod_db WHERE ID  = $BTN_DEL";

        if(mysqli_query($conn, $Query)){
            ?>
            <script>
                alert("SUCCESSFULLY DELETED!");
                window.location.href = "../index.php";
            </script>
         <?php
        }else{
            ?>
            <script>
                alert("PAKI AYOS HINDI NAG DELETE!");
                window.location.href = "../index.php";
            </script>
            <?php
        }
    }
    $conn->close();
}
