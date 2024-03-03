<?php
$input = $_POST['todo'];
$btn = $_POST['btn_add'];
// check if form is submit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($btn)){

    if(empty($input)){
        ?>
        <!--code here-->
        <script>
            alert("Please input your Todo!");
            window.location.href = "../index.php";
        </script>
        <?php
    }else{
        $conn = mysqli_connect("localhost","root","","Todo");
        if (!$conn){
            die("Connection lost");
        }else{
            $input = $_POST['todo'];
            $Query = "INSERT INTO tod_db(todo)values('$input')";


            if(mysqli_query($conn,$Query)){
                ?>
                <script>alert("Successfully Added!");
                    window.location.href = "../index.php";
                </script>
                <?php

            }else{
                ?>
                <script>
                    alert("Error Adding!");
                    window.location.href = "../index.php";
                </script>
                <?php
            }
        }
        $conn->close();
    }
}

?>
