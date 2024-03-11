<?php


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_data'])){

// creating connection from database
    $conn = mysqli_connect('localhost','root','','commition_projject');

    if(!$conn){
        die("connection problem");
    }else{
//  handle the profile uploading
        $target_dir = "Client_image/";
        $target_file = $target_dir . basename($_FILES['profile']['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//        CHECK IF THE IMAGE IS FAKE
        $check = getimagesize($_FILES['profile']['tmp_name']);
        if($check !== false){
            echo "file is image" . $check['mime']. ".";
        }else{
            echo "file is not image";
        }

        if(move_uploaded_file($_FILES['profile']['tmp_name'],$target_file)){

            // getting the inputs names
            $image_name = htmlspecialchars(basename($_FILES['profile']['name']));
            $status = $_POST['status'];
            $Price = $_POST['Price'];
            $name = $_POST['name'];


            // CREATING QUERY

            $Query = "INSERT INTO clients(ClientName,Price,ProjectStatus,frofile) values('$name',$Price,'$status','$image_name'); ";

            if(mysqli_query($conn,$Query)){
                ?>
                <script>
                    alert("Successfully Added!")
                    window.location.href = "../index.php";
                </script>
            <?php
            }else{
                echo "Error Adding Client" .mysqli_error($conn);
            }


        }
    }
}