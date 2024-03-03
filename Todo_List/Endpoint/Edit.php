<?php


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_btn'])){
    #BTN FOR GETTING THE ID
    $edit_btn = $_POST['edit_btn'];

    $conn = mysqli_connect("localhost",'root','','Todo');
    if(!$conn){
        die("<h1>Connection Problem</h1>");
    }else{
       $Query = "SELECT todo FROM tod_db WHERE ID = $edit_btn ;";
       $result = mysqli_query($conn,$Query);
         if(mysqli_query($conn,$Query)){
             while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                 ?>
         <!-- HTML CODE HERE-->
                 <!doctype html>
                 <html lang="en">
                 <head>
                     <meta charset="utf-8">
                     <meta name="viewport" content="width=device-width, initial-scale=1">
                     <title>Bootstrap demo</title>
                     <link href="../style.css">
                     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                 </head>
                 <body class="d-flex flex-column justify-content-center align-items-center">
                 <div class="container shadow-sm p-5 m-5">
                     <h3 class="text-success">Update Form</h3>
                     <form class="col-lg-5 d-flex gap-2"  method="POST">
                         <input name="update_input" type="text" value="<?php echo $row['todo']; ?>" class="form-control" >
                         <button type="submit" name="update_btn" value="<?php echo $edit_btn; ?>" class="btn btn-success">Update</button>
                     </form>
                 </div>

                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                 </body>
                 </html>
           <?php
             }
         }

        }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_btn'])) {
    $update_btn = $_POST['update_btn'];
    $update_input = $_POST['update_input'];

    $conn = mysqli_connect("localhost", 'root', '', 'Todo');
    if (!$conn) {
        die("<h1>Connection Problem!<h1/>");
    } else {
        $Query = "UPDATE tod_db SET todo = '$update_input' WHERE ID = $update_btn; ";
        if (mysqli_query($conn, $Query)) {
           ?>
            <script>
                alert("Edit Successfully")
                window.location.href = "../index.php";
            </script>
          <?php
        } else {
            echo "No success";
        }
    }
}

