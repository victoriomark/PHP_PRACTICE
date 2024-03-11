<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <h1 class="text-muted">Update Client Information</h1>
    <form method="post" enctype="multipart/form-data">
    <?php


  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset( $_POST['update_btn'])){
    $Id = $_POST['update_btn'];
      $conn = mysqli_connect('localhost','root','','commition_projject');

      if(!$conn){
          die("Connection Problem");
      }else{
          $Query = "select  CLientName,Price,ProjectStatus,frofile from clients where  id = $Id; ";
          $result = mysqli_query($conn,$Query);

          while ($row = mysqli_fetch_assoc($result)){
              ?>
              <label class="fw-bold" for="client_name">Client Name</label>
              <input name="name" class="form-control" value="<?php echo $row['CLientName']; ?>" id="client_name"  type="text">
              <br>

              <label class="fw-bold" for="client_price">Client Price</label>
              <input name="Price" class="form-control" value="<?php echo $row['Price']; ?>" id="client_price"  type="number" >
              <br>

              <select name="status" class="form-select" aria-label="Default select example">
                  <option><?php echo $row['ProjectStatus']; ?>   </option>
                  <option value="Ongoing">Ongoing</option>
                  <option value="Done">Done</option>
              </select>
              <br>


              <button name="update_data" value="<?php echo $Id ?>" type="submit" class="btn btn-primary">Save</button>
    <?php
          }
      }

  }
    ?>
    </form>

    <?php


if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['update_data'])){
    $name = $_POST['name'];
    $status = $_POST['status'];
    $price = $_POST['Price'];
    $btn = $_POST['update_data'];
    $conn = mysqli_connect('localhost','root','','commition_projject');
    if(!$conn){
        die("connection problem") .mysqli_connect_error();
    }else{
        $Query = "UPDATE clients SET CLientName = '$name',Price = $price,ProjectStatus = '$status' WHERE ID = '$btn'; ";
        if(mysqli_query($conn,$Query)){
            ?>
            <script>
                alert("Successfully Updated!");
                window.location.href = "../index.php";
            </script>
        <?php
        }else{
            echo "Error to update" .mysqli_error($conn);
        }
    }
}
?>
</div>
</body>
</html>



