
<?php
include "config.php";
global $conn;
// check if not login redirecting to index or homa page
session_start();
if(!isset($_SESSION['UserName'])){
    header('Location: ./LogOut.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./app.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">
<header class="container-fluid d-flex justify-content-between align-items-center p-3">
    <h4>School<span class="fw-bold" style="color: #339CA4">Attendance!</span></h4>
    <form method="post" action="./LogOut.php">
        <button type="submit" style="background-color: #339CA4;" class="btn fw-bold text-light">LogOut</button>
    </form>

</header>

<main class="container mt-5  p-2">
   <div class="d-flex justify-content-between align-items-center">
       <h5 style="color: #339CA4" class="text-center">Add New Student</h5>
   </div>
    <div class="container d-flex flex-column gap-2">
        <div>
            <label for="FistName">FistName</label>
          <input class="form-control" type="text" id="FistName" placeholder="Enter FistName">
        </div>
        <div>
            <label for="LastName">LastName</label>
            <input class="form-control" type="text" id="LastName" placeholder="Enter LastName">
        </div>
        <div>
            <label for="Student_ID">Student ID</label>
            <input class="form-control" type="text" id="Student_ID" placeholder="Enter Student_ID">
        </div>
        <div>
            <select id="course" class="form-select" aria-label="Default select example">
                <option selected>Course</option>
                <option value="BSIT">BSIT</option>
                <option value="BSOA">BSOA</option>
                <option value="STEM">STEM</option>
            </select>
        </div>
        <button id="add_student" style="background-color:#339CA4" class="btn text-light fw-bold">Add Student</button>
    </div>
</main>

<section class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h3 style="color: #339CA4">List of Student</h3>
        <button style="background-color:#339CA4" class="btn text-light">Submit Attendance</button>
    </div>

    <table class="table table-responsive-sm">
        <thead>
        <tr>
            <th scope="col">Student Id</th>
            <th scope="col">FirsName</th>
            <th scope="col">LastName</th>
            <th scope="col">Course</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody id="Tb_body">

        </tbody>
    </table>
</section>

<script defer src="./Main.js"></script>
</body>
</html>