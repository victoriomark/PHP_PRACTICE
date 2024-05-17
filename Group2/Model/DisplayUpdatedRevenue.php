       <?php             include '../Model/Connect.php';             global $conn;             ?>       <div style="background-color: #142D55" class="card border-0 col-lg-3 p-3  d-flex flex-column justify-content-center align-items-center">           <?php           $Query = "SELECT SUM(OrderPrice) AS REVENUE FROM orders WHERE OrderStatus = 'Received'";           $result = mysqli_query($conn,$Query);           while ( $row = mysqli_fetch_assoc($result)){               ?>               <h1 class="card-title text-light">                   <span>₱</span>                   <?php echo number_format($row['REVENUE'])?>               </h1>               <?php           }           ?>           <h5 class="badge bg-primary">REVENUE</h5>       </div>              <div style="background-color: #142D55" class="card border-0 col-lg-3 p-3  d-flex flex-column justify-content-center align-items-center">           <?php           $Query = "SELECT COUNT(OrderStatus) AS PROCESSING FROM orders WHERE OrderStatus = 'Processing'";           $result = mysqli_query($conn,$Query);           while ( $row = mysqli_fetch_assoc($result)){               ?>               <h1 class="card-title text-light">                   <?php echo number_format($row['PROCESSING'])?>               </h1>               <?php           }           ?>           <h5 class="badge bg-warning">PROCESSING</h5>       </div>       <div style="background-color: #142D55" class="card border-0 col-lg-3 p-3  d-flex flex-column justify-content-center align-items-center">           <?php           $Query = "SELECT COUNT(OrderStatus) AS RECEIVE FROM orders WHERE OrderStatus = 'Received'";           $result = mysqli_query($conn,$Query);           while ( $row = mysqli_fetch_assoc($result)){               ?>               <h1 class="card-title text-light">                   <?php echo number_format($row['RECEIVE'])?>               </h1>               <?php           }           ?>           <h5 class="badge bg-success">RECEIVE</h5>       </div>       <div style="background-color: #142D55" class="card border-0 col-lg-3 p-3  d-flex flex-column justify-content-center align-items-center">           <?php           $Query = "SELECT COUNT(OrderPrice) AS PENDING FROM orders WHERE OrderStatus = 'Pending'";           $result = mysqli_query($conn,$Query);           while ( $row = mysqli_fetch_assoc($result)){               ?>               <h1 class="card-title text-light">                   <?php echo number_format($row['PENDING'])?>               </h1>               <?php           }           ?>           <h5 class="badge bg-info">PENDING</h5>       </div>       <div style="background-color: #142D55" class="card border-0 col-lg-3 p-3  d-flex flex-column justify-content-center align-items-center">           <?php           $Query = "SELECT COUNT(OrderStatus) AS CANCELED FROM orders WHERE OrderStatus = 'Canceled'";           $result = mysqli_query($conn,$Query);           while ( $row = mysqli_fetch_assoc($result)){               ?>               <h1 class="card-title text-light">                   <?php echo number_format($row['CANCELED'])?>               </h1>               <?php           }           ?>           <h5 class="badge bg-danger">CANCELED</h5>       </div>       <?php