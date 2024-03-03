<?php
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['delete'])){
    $conn = mysqli_connect('localhost','root','','notepad');

    if(!$conn){
        die("connection Problem");
    }else{
        $btn_id = $_POST['delete'];
        $Query = " DELETE from note_db where  ID = $btn_id;";
        if(mysqli_query($conn,$Query)){
            ?>
            <script>
                alert("Successfully Deleted!")
                window.location.href = "index.php";
            </script>
 <?php
        }else{
            echo "error Deleting";
        }
    }
}