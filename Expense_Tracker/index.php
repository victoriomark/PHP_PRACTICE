<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expense Tracker </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- For icons-->
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
<!--For fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Irish+Grover&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body class="bg-dark">
<!-- for Header -->

<header class=" container-fluid d-flex justify-content-between align-items-center p-3 bg-dark ">
    <h2>Expense Tracker</h2>
<!--    for social media links-->
<div class="d-flex gap-3">
    <button class="btn text-light"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fa-solid fa-bars fs-5"></i>
    </button>
</div>
</header>


    <!-- modal for creating expense-->
    <form id="form_data">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Expense Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <label for="ExpenseName">Expense Name</label>
                        <input  class="form-control" type="text" id="ExpenseName" placeholder="Enter Expense Name.." required>
                        <br>
                        <label for="ExpenseAmount">Expense Amount</label>
                        <input  class="form-control" type="number" id="ExpenseAmount" placeholder="Enter Expense Amount.." required>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id="add_category" type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div id="up_container">

    </div>

    <!--card for displaying the data-->
    <div class="container mt-4">
        <div class="card bg-dark">
            <div class="card-header bg-success text-light d-flex  justify-content-lg-between justify-content-md-between ">
                <h5>Category List</h5>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                    Create New Expense
                </button>
            </div>
            <div class="card-body">
                <table class="table table-hover table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Expense Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody id="data_table">

                    </tbody>
                </table>
            </div>
        </div>
    </div>


<!--For SideBar-->
<div class="offcanvas offcanvas-start"  tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-light" id="offcanvasExampleLabel ">Expense Tracker</h5>
        <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
<!-- Content Here-->


<!-- profile Info-->
<div id="profile" class="container d-flex gap-2 flex-column justify-content-center align-items-center">
    <img width="150" class="img-fluid rounded-circle" src="./Uploads/MyProfile.jpg" alt="myProfile" height="150">
    <h4 class="text-light opacity-50">Erwin Victorio</h4>
</div>

 <div class="d-flex flex-column justify-content-center align-items-center mt-5">
<!-- NavLinks-->
        <ul class="list-group d-flex flex-column gap-2">
            <li id="index_canvas_Link_Active"  class="list-group-item bg-success border border-0 rounded-0 ">
                <i class="fa-solid fa-list text-light"></i>
                <a class=" text-light" href="#">Create Category</a>
            </li>
            <li class="list-group-item border border-0 rounded-0 bg-success">
                <i class="fa-solid fa-square-plus text-light"></i>
                <a  class=" text-light" href="./index_createExpense.php">Create Expense</a>
            </li>
            <li class="list-group-item border border-0 rounded-0 bg-success">
                <i class="fa-solid fa-gear text-light"></i>
                <a  class=" text-light" href="#">Profile Settings</a>
            </li>
        </ul>
</div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
 <script src="./main.js"></script>
</body>
</html>


