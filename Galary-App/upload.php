<?php
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['upload_btn'])){


    $conn = mysqli_connect('localhost','root','','gallery');
$target_DIR = "Upload/";
$target_file = $target_DIR .basename($_FILES['image_up']['name']);
$upload_ok = 1;

$image_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//CHECK ID THE IMAGE IS FAKE
    if(isset($_POST['upload_btn'])){
        $check = getimagesize($_FILES['image_up']['tmp_name']);

        if ($check !== false){
            echo "file is an image - " .$check['mime'] . ".";
        }else{
            echo "file is no image";
            $upload_ok = 0;
        }

    }


    if($upload_ok == 0){
        echo "sorry the image is not successfully uploaded";
    }else{
        if (move_uploaded_file($_FILES['image_up']['tmp_name'], $target_file)){
            $image_name = htmlspecialchars(basename($_FILES['image_up']['name']));
            $Query = "insert into gallery_db(image_name) values('$image_name'); ";
            if(mysqli_query($conn,$Query)){
                echo "success";
            }else{
                echo "not success";
            }
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }
}