
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>

    <style>
        #Section{
            background-image: url(https://img.freepik.com/free-photo/mexican-dishes-pepper_23-2147740824.jpg?t=st=1709088198~exp=1709091798~hmac=b6d68343da153a1bbbc8b4dd99a61f6182f0e170dbebc71b23c4c7aeee55b2cd&w=1380);
            background-position: center;
            background-size: cover;

        }
        ul li a{
             text-decoration: none;
        }
        ul li {
            list-style: none;
        }

        #Social i{
            padding: 10px;
            color: #fff;
            border-radius: 50%;

        }
        header{
            background-color: #A5DD9B;
        }

    </style>

</head>
<body class="d-flex flex-column justify-content-center align-items-center">
<header class="container-fluid d-flex justify-content-between align-items-center p-3">
    <i class="fa-solid fa-bars "></i>
    <div class="d-flex p-2">
        <form class="d-flex  justify-content-center align-items-center gap-2" method="post">
            <button class="btn">
                <i class="fa-solid  fa-magnifying-glass text-success"></i>
            </button>
            <input name="search_food" class="form-control" type="text" placeholder="What would you like to eat?">
        </form>
        <div>
            <form method="post">
                <button class="btn" name="btn_cart">
                    <i class="fa-solid fa-cart-shopping text-success"></i>
                </button>
            </form>
        </div>
    </div>
</header>
<section id="Section" class="container p-5 rounded-3 d-flex flex-column justify-content-center mt-5">
  <h1 class="fw-bold text-warning">30% off</h1>
    <h5 class="text-light">Fitness Food</h5>
</section>

<div class="container  p-2 bg-light  mt-5 rounded-3   ">
    <ul class="container d-flex justify-content-between align-items-center">

        <li>
            <i class="fa-solid fa-location-dot"></i>
            <strong>Nearby</strong>
        </li>

        <li>
            <i class="fa-solid fa-location-dot"></i>
            <strong>Nearby</strong>
        </li>

        <li>
            <i class="fa-solid fa-location-dot"></i>
            <strong>Nearby</strong>
        </li>

        <li>
            <i class="fa-solid fa-location-dot"></i>
            <strong>Nearby</strong>
        </li>

    </ul>
</div>
<!--Break Time mamaya naman hehe-->
<!--  Card for Foods-->
<div class="container row gap-3 mt-5 justify-content-center align-items-center p-4">

<!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <form method="post">
                    <button class="btn btn-outline-success">Order Now</button>
                </form>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>

    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>

    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title"><?php echo "Burger" ?></h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>


    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>



    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>



    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>


    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>


    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>


    <!-- cards-->
    <div class="card col-lg-3 col-md-4">
        <img class="card-img-top" src="https://img.freepik.com/free-photo/tasty-burger-isolated-white-background-fresh-hamburger-fastfood-with-beef-cheese_90220-1063.jpg?t=st=1709089676~exp=1709093276~hmac=0ed87e4d5e254b1192deb8d94c60f790f7d4a08c70501022085920bcb60d3407&w=740" alt="">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">This is Dis of the food</p>
            <div class="d-flex justify-content-between">
                <button class="btn btn-outline-success">Order Now</button>
                <strong class="text-success">$30.50</strong>
            </div>
        </div>
    </div>


</div>

<!--Footer-->
<footer class="container-fluid  d-flex flex-column justify-content-center align-items-center bg-dark p-3">
    <div id="Social" class="d-flex gap-3 text-success">
<!-- Social Media Links-->
        <i class="fa-brands bg-success fa-twitter"></i>
        <i class="fa-brands bg-success fa-square-twitter"></i>
        <i class="fa-brands bg-success fa-twitch"></i>
        <i class="fa-brands bg-success fa-facebook"></i>
    </div>
<!-- Services-->
        <ul class="d-flex gap-4 ">
            <li>
                <a class="text-light" href="#">Our Foods</a>
            </li>

            <li>
                <a  class="text-light" href="#">Our Foods</a>
            </li>

            <li>
                <a  class="text-light" href="#">Our Foods</a>
            </li>
            <li>
                <a  class="text-light" href="#">Our Foods</a>
            </li>

        </ul>
        <p class="text-light col-lg-5">
            Indulge in a world of flavors with our convenient food ordering service.
            From gourmet delights to everyday cravings, explore a diverse menu right
            at your fingertips. Satisfaction guaranteed, from order to doorstep. Order
            now and let your taste buds rejoice!
        </p>
            <p class="text-light bg-success p-3 rounded-5 col-lg-4 text-center">Copyright 2024 Example </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>