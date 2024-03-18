<?php
$Total = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
<!--    for icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Home</title>
</head>
<body class="bg-dark">
<div class="container p-2 mt-4">

    <table  class="table  table-borderless table-dark  mt-2  table-hover table-responsive-sm table-sm ">
        <thead>
        <tr>
            <th scope="col">Client Id</th>
            <th scope="col">Complete Name</th>
            <th scope="col">Profile</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $conn = mysqli_connect('localhost','root','','commition_projject');
        if(!$conn){
            die("Connection problem");
        }else{
//            select all data
            $Query = "SELECT * FROM clients LIMIT 5;";
            $result = mysqli_query($conn,$Query);

            while ($row = mysqli_fetch_assoc($result)){
               ?>
                <tr>
                    <th scope="row"><?php echo $row['ID'];?></th>
                    <td><?php echo $row['CLientName'];?></td>
                    <td>
                        <img class="img-thumbnail rounded-circle" width="40" src="./Endpoints/Client_image/<?php echo $row['frofile']?>" alt="profile">
                    </td>
                    <td>₱<?php echo $row['Price'];?></td>
                    <td class="<?php echo $row['ProjectStatus'] === "Ongoing" ? "text-danger" : "text-success" ;?>"><?php echo $row['ProjectStatus'];?></td>
                    <td class="text-light-emphasis"><?php echo $row['created_at'];?></td>
                    <td>
                        <form method="post" action="./EndPoints/update.php">
                            <button name="update_btn" type="submit" value="<?php echo $row['ID'];?>" class="btn text-warning-emphasis">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </form>
<!--                        kaya pala nasa nasa loob ka hayaop ka!-->
                        <form method="post" action="./EndPoints/Delete.php">
                            <button name="btn_delete" value="<?php echo $row['ID'];?>" class="btn">
                                   <span class="material-symbols-outlined text-light-emphasis">
                                    delete_forever
                                    </span>
                            </button>
                        </form>
                    </td>
                </tr>

                <?php
//                  IF STATUS OF THE PROJECT IS DONE THEN GET THE TOTAL
                  if($row['ProjectStatus'] === "Done"){
                      $Total += $row['Price'];
                  }

            }
            $conn->close();
        }
        ?>
        <div style="background-color: #265073" class="d-lg-flex d-md-flex   justify-content-between align-items-center p-4 text-light rounded-4">
            <a class="btn btn-outline-light" href="./addNewClient.php">
                Add New Client
            </a>
             <h1>CMS</h1>
                  <!-- DISPLAY THE TOTAL PRICE-->
                <div>
                    <h6 class="text-warning"><strong class="text-light">Total:</strong> ₱<?php echo $Total?></h6>
                    <?php
                    $conn = mysqli_connect('localhost','root','','commition_projject');
                    if(!$conn){
                        die("connection problem");
                    }else{
                        $Query = "SELECT COUNT(ID) AS total_client FROM clients; ";
                        $result =  mysqli_query($conn,$Query);
                        $total = mysqli_fetch_assoc($result);

                      ?>
                        <p>Total Client: <?php  echo $total['total_client'];?></p>
                    <?php
                    }
                    ?>

                </div>
        </div>


        </tbody>
    </table>
</div>
</body>
</html>