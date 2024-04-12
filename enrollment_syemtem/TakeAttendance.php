<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="./css/bootstrap.min.css">    <script src="./js/bootstrap.bundle.min.js"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <title>Attendance</title></head><body style="height: 100vh" class="d-flex flex-column bg-dark"><header class="container-fluid text-success p-3">    <h3 class="text-center">Take Attendance</h3></header><main class="container">    <a class="btn" href="index.php"><i class="fa-solid fa-reply-all text-success"></i></a>    <table class="table table-responsive table-borderless  table-hover table-dark">        <thead>        <tr>            <th scope="col">Student Id</th>            <th scope="col">FirstName</th>            <th scope="col">LastName</th>            <th scope="col">Course</th>            <th scope="col">year</th>            <th scope="col">Attendance</th>        </tr>        </thead>        <tbody>           <?php           include "Connect.php";           global $conn;           $Query = "SELECT * FROM collageenroll";           $result = mysqli_query($conn,$Query);           if(mysqli_num_rows($result) > 0){               while ($row = mysqli_fetch_assoc($result)){                   ?>               <tr>                     <td>                        <?php echo $row['ID'] ?>                    </td>                     <td>                         <?php echo $row['FisrtName'] ?>                     </td>                     <td>                         <?php echo $row['LastName'] ?>                     </td>                   <td>                       <?php echo $row['Course'] ?>                   </td>                   <td>                       <?php echo $row['Year'] ?>                   </td>                   <td>                       <label for="Attendance"></label>                       <input  value=" <?php echo $row['ID'] ?>" type="checkbox" id="Attendance">                   </td>               </tr>           <?php               }           }else{               echo "<h1> No Student Available</h1>";           }           ?>        </tbody>    </table>    <div class="container p-2">        <div>            <label class="text-success" for="Data_Time">Attendance Date</label>            <input class="form-control focus-ring-dark col-lg-4" type="date" id="Data_Time">        </div>        <button id="SaveAttendance" class="btn btn-success mt-3">Save Attendance</button>    </div></main><script type="module" src="./Main_JS/Attendance.js"></script></body></html>