<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./app.css">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
<!-- for fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>HOME</title>
</head>
<body>

<header class="container-fluid d-flex justify-content-between align-items-center p-3">
    <h4>School<span class="fw-bold" style="color: #339CA4">Attendance!</span></h4>
    <nav>
        <ul class="d-flex gap-3">
            <li class="list-group">
                <a href="./index.php">Home</a>
            </li>
            <li class="list-group">
                <a href="./Register.php">Register</a>
            </li>
            <li class="list-group">
                <a href="./Sign_In.php">Sign In</a>
            </li>
        </ul>
    </nav>
    <button id="Burger_icon" class="btn">
        <i class="fa-solid fa-bars"></i>
    </button>
</header>
<!--HERO SECTION-->
<section id="hero_Section" class="container d-lg-flex justify-content-evenly align-items-center">
    <div>
        <img width="400" class="img-fluid" src="./Assets/COVER.svg" alt="cover">
    </div>
    <div class="card  col-lg-4 border-0 p-3" style="background-color: #b3d7da">
        <h2>School<span class="fw-bold" style="color: #339CA4">Attendance!</span></h2>
         <div class="card-body d-flex flex-column justify-content-center align-items-center">
             <h5>Welcome to Our School Attendance Management System!</h5>
             <p>
                 We are delighted to introduce you to our School Attendance Management System,
                 a tool designed to enhance efficiency and accountability in tracking attendance
                 within our school community. With this system in place, we aim to streamline the
                 process of recording and monitoring attendance, ensuring that both students and faculty
                 can focus more on the enriching educational experience our school provides.
             </p>
             <a href="./Sign_In.php" class="btn btn-dark rounded-0">SING IN</a>
         </div>
    </div>
</section>
</body>
</html>