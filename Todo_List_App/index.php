<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>

<!--    fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Todo list App</title>

    <style>
        #forData{
            background: rgba( 255, 255, 255, 0.1 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 20px );
            -webkit-backdrop-filter: blur( 20px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }

        #todo_contaner{
            background: rgba( 255, 255, 255, 0.2 );
            box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
            backdrop-filter: blur( 1.5px );
            -webkit-backdrop-filter: blur( 1.5px );
            border-radius: 10px;
            border: 1px solid rgba( 255, 255, 255, 0.18 );
        }
        h1,p{
                font-family: "Archivo Black", sans-serif;
                font-weight: 400;
                font-style: normal;


        }
    </style>
</head>
<body >
<div class="container-lg p-3 mt-4 d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-muted text-center">Todo List App</h1>
    <form id="forData" class="col-lg-4 d-flex p-2  rounded-3 d-flex gap-2 align-items-center ">
        <div>
            <input class="form-control" type="text" id="todo" placeholder="Enter Todo.." required>
        </div>
        <button id="btn_add" class="btn mt-1 btn-outline-dark" type="button">Add New Todo</button>
    </form>

</div>
<div id="data_container" class="container col-lg-7  p-4">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./main.js"></script>
</body>
</html>
