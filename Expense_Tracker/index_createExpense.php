<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expense</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- For alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="d-flex flex-column justify-content-center align-items-center bg-dark">
<header class="container-fluid text-light p-4">
    <a class="btn btn-outline-success" href="./index.php">HOME</a>
</header>

<div class="container p-2 mt-5">
    <div class="card bg-dark">
       <div class="card-header d-flex justify-content-between align-items-center">
           <h4 class="text-success">Category List</h4>
           <button class="btn btn-success rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Add Expense</button>
       </div>
       <div class="card-body">
      <!-- table-->
           <table class="table table-dark table-hover">
               <thead>
               <tr>
                   <th scope="col">Expense Name</th>
                   <th scope="col">Budget</th>
                   <th scope="col">Amount Spent</th>
                   <th scope="col">Current Balance</th>
                   <th scope="col">Action</th>
               </tr>
               </thead>
               <tbody id="expenseData">

               </tbody>
           </table>
       </div>
    </div>
</div>


    <div  class="modal fade" id="staticBackdrop"  data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h1 class="modal-title fs-5 text-light" id="update_modal">Enter Expense</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-evenly">
                       <label for="expenseName">Expense Name</label>
                        <select id="categoryName" name="categoryName" class="form-select" aria-label="Default select example">
                            <option id="categoryName"> Select ExpenseName</option>
                         <!-- LOOP THE CATEGORY -->
                            <?php
                            include "config.php";
                            global $conn;
                            $Query = "Select ExpenseName,Expense_Amount from  expense_category; ";
                            $Result = mysqli_query($conn,$Query);
                            if(mysqli_num_rows($Result) > 0){
                                while ($row = mysqli_fetch_assoc($Result)){
                                    ?>
                                    <option data-budget="<?php echo $row['Expense_Amount']?>"  value="<?php echo $row['ExpenseName']?>"><?php echo $row['ExpenseName']?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    <br>
                    <?php
                    $Query = "Select Expense_Amount from  expense_category; ";

                    ?>
                        <label for="expenseAmount">Expense Description</label>
                        <input  class="form-control" type="text" id="Description" >
                    <br>
                        <label for="Spent">Amount Spent</label>
                        <input   class="form-control" type="number" id="Spent" >
                    <br>
                        <label for="expenseData">Date</label>
                        <input  class="form-control" type="date" id="ExpenseDate"

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button  id="Add_expense"  type="button" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>

<div id="example">

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="./create_expense.js"></script>
</body>
</html>