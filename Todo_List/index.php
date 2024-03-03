<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
 <h2 class="text-success">Todo-List</h2>
<!-- form-->

    <form class="d-flex gap-2" action="Endpoint/addtodo.php" method="post">
        <input type="text" name="todo" class="form-control " placeholder="Enter your Task...">
        <button id="btn_add" name="btn_add" class="btn btn-success rounded-0">Add</button>
    </form>


<!-- List of todos-->
    <div class="container mt-5">
        <table class="table table-success table-hover ">
            <thead>
            <tr>
                <th  scope="col">ID</th>
                <th scope="col">TASK</th>
                <th>Created At</th>
                <th scope="col">ACTION</th>
            </tr>

            </thead>
            <tbody>




<!--modal for Update-->



<!--PHP CODE-->
<?php
$conn = mysqli_connect('localhost','root','','Todo');
if(!$conn){
    die("Connection Problem");
}else{
    $Query = "SELECT * FROM tod_db";
    $Result = mysqli_query($conn,$Query);

    while ($row = mysqli_fetch_array($Result)){
       ?>
        <tr>
            <td><?php echo $row['ID'];?></td>
            <td><?php echo $row['todo'];?></td>
            <td><?php echo $row['Created_At'];?></td>
            <td>
                <form action="./Endpoint/Edit.php" method="post">
                    <button type="submit" class="btn text-primary" name="edit_btn" value="<?php echo $row['ID']?>" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        Edit
                    </button>
                </form>


                <form action="Endpoint/Delete.php" method="post">
                    <button name="btn_delete" value="<?php echo $row['ID']?>" class="btn text-danger fw-bold">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
<?php
    }
}
?>

            </tbody>
        </table>
    </div>
</div>


<script src="./index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>