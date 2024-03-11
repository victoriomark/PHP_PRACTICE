<?php
$btn_W_id = $_POST['Delete'];
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Delete'])){
    $conn = mysqli_connect('localhost','root','','stdent_database');

    if($conn){
        $Query = "DELETE  FROM student_db WHERE stdent_ID = $btn_W_id; ";

        if(mysqli_query($conn,$Query)){
           ?>
            <script>
                alert("SUCCESSFULLY DELETED")
                window.location.href = "../Dashboard.php"
            </script>
<?php
        }
    }
}