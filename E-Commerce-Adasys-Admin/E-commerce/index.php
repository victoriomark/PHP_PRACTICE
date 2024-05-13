<html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="./Style.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <title>BurgerKing</title></head><body   style="background-color: #EEF7FF"><header style="background-color: #142D55"  class="container-fluid sticky-top d-flex justify-content-between align-items-center p-2"><div>    <img width="50" src="../Assets/finalLogo.png" alt="logo" height="50"></div>    <nav class="d-flex gap-3 m-2">         <a href="#">Home</a>         <a href="./Menu.php">Menu</a>        <a href="./AboutPage.php">About Us</a>    </nav></header><section  id="HeroSection" class="container-fluid p-5 ">   <div >       <div class="text-light">           <h1>               <span class="text-danger fw-bold">WELCOME</span> <br>               THE WORLD OF TESTY & FRESH FOOD.           </h1>           <p>               Keep it easy with these simple but delicious recipes <br>               Fom make-ahead lunches and midweek meals to fuss-free sides.           </p>       </div>       <div id="container_form"></div>      <div class="d-flex col-lg-5 gap-2">          <label for="tracking_order"></label>          <input style="border: none; outline: none" class="form-control" type="search" id="tracking_order" placeholder="Track your Orders..">          <button id="btn_track" class="btn btn-danger text-light fw-bold">Track</button>      </div>   </div></section><section class="container d-flex flex-column  align-items-center mt-5 p-5"><h1 class="text-dark fw-bold">EXPLORE FOODS</h1>    <div class="container row gap-2 justify-content-center align-items-center">        <?php        include "../Model/Connect.php";        global $conn;        $Query = "SELECT * FROM category LIMIT 3";        $Result = mysqli_query($conn,$Query);        if(mysqli_num_rows($Result)){            while ($row = mysqli_fetch_assoc($Result)){                ?>                <div style="background-color:transparent" class="card col-lg-3 p-2 mt-5 gap-2 border-0">                    <img src="../Model/CategoryImages/<?php echo $row['CategoryImage']?>" alt="burger">                    <div  class="card-body text-danger">                        <h5 class="fw-bold"><?php echo $row['CategoryName']?></h5>                    </div>                </div>                <?php            }        }        ?>    </div></section><section  class="container-fluid d-flex flex-column justify-content-center align-items-center  p-5 mt-3">    <h1 class="text-dark fw-bold text-center p-3">WHAT'S NEW</h1><!--Container For Menu-->    <div class="container-fluid row gap-3 justify-content-center align-items-center"><!-- Menu Box item-->        <?php        include './Model/Connect.php';        global $conn;        $Query = "SELECT * FROM products LIMIT 6";        $Result = mysqli_query($conn,$Query);        if(mysqli_num_rows($Result) > 0){            while ($row = mysqli_fetch_assoc($Result)){                ?>                <div id="menu_card" style="background-color: #142D55" class="col-lg-4 d-lg-flex gap-5 align-items-center p-3 rounded-4">                    <img class="img-thumbnail rounded-4" width="140" src="../Model/Product_Images/<?php echo $row['Product_image']?>" alt="burger">                    <div>                        <h5  class="fw-bold text-light"><?php echo $row['ProductName']?></h5>                        <p class="text-light">                            <?php echo $row['Description']?>                        </p>                        <h6 class="text-warning fw-bold">price: <?php echo $row['Price']?>₱</h6>                        <button id="Add_cart" value="<?php echo $row['ID']?>" class="btn btn-danger">Order Now</button>                    </div>                </div>                <?php            }        }        ?>    </div>   <a class="btn fw-bold text-success mt-5" href="./Menu.php">See More</a></section><div class="modal fade" id="modal_for_view_code" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <h1 class="modal-title fs-5" id="exampleModalLabel">Copy Your Tracking Code for Viewing Your Order!</h1>            </div>            <div class="modal-body">                <h5 id="view_tracking_code" class="text-danger"></h5>            </div>            <div class="modal-footer">                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>            </div>        </div>    </div></div><footer style="background-color: #142D55"  class="container-fluid  p-2 d-flex flex-column justify-content-center align-items-center mt-5"><p class="text-light">    All rights reserved. Designed By Group Aldrin</p></footer><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><script src="./index.js"></script></body></html>