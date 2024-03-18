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
</head>
<body>
<!-- for Header -->

<header class=" container-fluid d-flex justify-content-between align-items-center p-3 bg-dark ">
    <h2>Expense Tracker</h2>
<!--    for social media links-->
    <ul class="d-flex gap-3">
        <li class="list-group">
            <a href="https://www.facebook.com/erwin.victorio.7">
                <i class="fa-brands fa-facebook"></i>
            </a>
        </li>

        <li class="list-group">
        <a href="https://github.com/victoriomark">
            <i class="fa-brands fa-github"></i>
        </a>
        </li>

        <li class="list-group">
        <a href="https://www.facebook.com/erwin.victorio.7">
            <i class="fa-brands fa-square-instagram"></i>
        </a>
        </li>
    </ul>
</header>

<section class="container p-2 shadow-sm bg-dark mt-5 p-3 rounded-3">
<button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
    Create New Expense
</button>
</section>

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
                   <input name="ExpenseName" class="form-control" type="text" id="ExpenseName" placeholder="Enter Expense Name.." required>
                <br>
                   <label for="ExpenseAmount">Expense Amount</label>
                   <input name="ExpenseAmount" class="form-control" type="number" id="ExpenseAmount" placeholder="Enter Expense Amount.." required>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="add_category" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
</form>
<div id="up_container">

</div>
<!--card for displaying the data-->

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-success text-light">
            <h5>Category List</h5>
        </div>
     <div class="card-body">
         <table class="table table-hover">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
 <script src="./main.js"></script>

</body>
</html>


