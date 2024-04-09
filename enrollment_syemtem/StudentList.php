<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="./css/bootstrap.min.css">    <script src="./js/bootstrap.bundle.min.js"></script>    <link rel="stylesheet" href="./Style.css">    <!-- fonts cdn-->    <link rel="preconnect" href="https://fonts.googleapis.com">    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&family=Paytone+One&display=swap" rel="stylesheet">    <!-- Fonts Assume-->    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <title>StudentList</title></head><body class="d-flex flex-column justify-content-center align-items-center bg-dark"><header class="d-flex justify-content-between align-items-center p-3 container-fluid">    <div class="d-flex gap-2 justify-content-center align-items-center">        <h4>Students</h4>    </div>    <div>        <input class="form-control" type="search" placeholder="Search" id="Search">    </div></header><div  class="container mt-5 p-3">    <div>        <a class="btn" href="index.php"><i class="fa-solid fa-reply-all text-success"></i></a>    </div>    <table class="table table-responsive  table-borderless mt-3 table-hover table-dark">        <thead>        <tr>            <th scope="col">Student Id</th>            <th scope="col">FirstName</th>            <th scope="col">LastName</th>            <th scope="col">Address</th>            <th scope="col">Birthday</th>            <th scope="col">Course</th>            <th scope="col">year</th>            <th scope="col">Gender</th>            <th scope="col">Action</th>        </tr>        </thead>        <tbody id="T_body">        </tbody>    </table></div><div id="UpdateContainer"></div><div id="ViewContainer"></div><script src="Main_JS/main.js"></script></body></html>