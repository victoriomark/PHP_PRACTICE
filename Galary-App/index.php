<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Gallery_APP</title>
</head>
<body>
<div class="container">
    <form method="post" action="./upload.php" enctype="multipart/form-data">
       <label for="upload_file">UPLOAD HERE</label>
        <input class="form-control" type="file" id="upload_file" name="image_up">
        <button name="upload_btn" class="btn btn-outline-primary mt-2" type="submit">UPLOAD</button>
    </form>
</div>

<div class="container">
    <?php
    $conn = mysqli_connect('localhost','root','','gallery');
    if(!$conn){
        die("connection problem");
    }else{
        $Query = "SELECT * FROM gallery_db;";
        $result = mysqli_query($conn,$Query);

        while($row= mysqli_fetch_assoc($result)){
          $image_name = $row['image_name'];
          ?>
            <div class="container">
                <img width="200" src="./Upload/<?php echo $image_name ?>" alt="image">
            </div>
    <?php
        }

    }
    ?>

</div>
</body>
</html>