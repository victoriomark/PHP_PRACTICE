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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- for fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Sign up</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">

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
<!--fOR LOG IN FORM-->
<div style="height: 70vh" class="container d-flex justify-content-center align-items-center">
    <div class="card col-lg-4">
        <div class="card-header p-4" id="card_header">
            <h4 class="text-center text-light">Sign<span class="fw-bold" style="color: #339CA4">Up</span></h4>
        </div>
        <div class="card-body d-flex flex-column gap-2">
            <label for="UserName">UserName</label>
            <input class="form-control" type="text" id="UserName" placeholder="Enter your UserName.." >

            <label for="Password">Password</label>
            <input class="form-control" type="text" id="Password" placeholder="Enter your Password.." >
            <button id="btn_register" class="btn btn-dark">Sign Up</button>
        </div>
    </div>
</div>
<script src="Reg.js"></script>
</body>
</html>
