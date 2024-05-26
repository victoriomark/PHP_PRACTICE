<?php
session_start();
if(!$_SESSION['status']){
    header('Location: ./Login.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
				initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet"
          href="./style.css">
    <link rel="stylesheet"
          href="./responsive.css">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<header>
    <div class="logosec">
        <div style="color: #5500cb" class="logo"><span style="font-weight: bold; color: #3f0097; font-size: 3rem">EJ</span>Laparan</div>
        <i class="fa-solid fa-bars"></i>
    </div>

</header>
<div class="main-container">
    <div class="navcontainer">
        <nav class="nav">
            <div class="nav-upper-options">
                <div class="nav-option option1">
                    <i class="fa-solid fa-gauge"></i>
                    <h3> Dashboard</h3>
                </div>

                <div class="option2 nav-option">
                    <i class="fa-solid fa-bowl-food"></i>
                    <h3>
                        <a href="./Productlist.php"> Products</a>
                    </h3>

                </div>


                <form method="post" action="../Model/Logout.php" class="nav-option logout">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <button type="submit">Logout</button>
                </form>

            </div>
        </nav>
    </div>
    <div class="main">

        <div class="box-container">

            <?php
            include "../../Database/Connect.php";
            global $conn;
            $Query = "SELECT SUM(Total) AS REVENUE FROM orders WHERE OrderStatus = 'Received'";
            $result = mysqli_query($conn,$Query);
            while ( $row = mysqli_fetch_assoc($result)){
            ?>
            <div class="box box1">
                <div class="text">
                    <h2 class="topic-heading">$<?php echo number_format($row['REVENUE'])?></h2>
                    <h2 class="topic">Revenue</h2>
                </div>
                <i class="fa-solid fa-coins"></i>
                <?php
                }
                ?>
            </div>

            <?php
            include "../../Database/Connect.php";
            global $conn;
            $Query = "SELECT COUNT(OrderStatus) AS Cancel FROM orders WHERE OrderStatus = 'Cancel'";
            $result = mysqli_query($conn,$Query);
            while ( $row = mysqli_fetch_assoc($result)){
            ?>
            <div class="box box2">
                <div class="text">
                    <h2 class="topic-heading"><?php echo number_format($row['Cancel'])?></h2>
                    <h2 class="topic">Cancel</h2>
                </div>
                <i class="fa-solid fa-table-list"></i>
                <?php
                }
                ?>
            </div>

            <?php
            include "../../Database/Connect.php";
            global $conn;
            $Query = "SELECT COUNT(OrderStatus) AS Received FROM orders WHERE OrderStatus = 'Received'";
            $result = mysqli_query($conn,$Query);
            while ( $row = mysqli_fetch_assoc($result)){
            ?>
            <div class="box box1">
                <div class="text">
                    <h2 class="topic-heading"><?php echo number_format($row['Received'])?></h2>
                    <h2 class="topic">Received</h2>
                </div>
                <i class="fa-solid fa-table-list"></i>
                <?php
                }
                ?>
            </div>


            <?php
            include "../../Database/Connect.php";
            global $conn;
            $Query = "SELECT COUNT(OrderStatus) AS Processing FROM orders WHERE OrderStatus = 'Processing'";
            $result = mysqli_query($conn,$Query);
            while ( $row = mysqli_fetch_assoc($result)){
            ?>
            <div class="box box1">
                <div class="text">
                    <h2 class="topic-heading"><?php echo number_format($row['Processing'])?></h2>
                    <h2 class="topic">Processing</h2>
                </div>
                <i class="fa-solid fa-table-list"></i>
                <?php
                }
                ?>
            </div>

        </div>

        <div class="report-container">
            <div class="report-header">
                <h1 style="color: #5500cb">Order List</h1>
                <div id="container">
                </div>
            </div>


            <table>
                <thead>
                <tr>
                    <th >Id</th>
                    <th >ProductName</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "../../Database/Connect.php";
                global $conn;

                $Query = "SELECT OrderId ,Total,Product_Name,Id,OrderStatus FROM orders";
                $result = mysqli_query($conn,$Query);
                if(mysqli_num_rows($result) >0 ){
                  while ($row =mysqli_fetch_assoc($result)){
                      ?>
                      <tr>
                          <th scope="row"><?php echo $row['Id'] ?></th>
                          <td><?php echo $row['Product_Name'] ?></td>
                          <td><?php echo $row['Total'] ?></td>
                          <td>
                              <button><?php echo $row['OrderStatus'] ?></button>
                          </td>
                          <td>
                              <button id="update" value="<?php echo $row['Id'] ?>">Update</button>
                          </td>
                      </tr>
                      <?php
                  }
                }else{
                    echo "<h5>No Orders Available</h5>";
                }
                ?>


                </tbody>
            </table>
</div>

<script src="Main_js/dashboard.js"></script>
</body>
</html>
