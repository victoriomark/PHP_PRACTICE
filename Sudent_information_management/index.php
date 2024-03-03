
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./%20style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
    <title>Student Information</title>


    <style>
        a{
            text-decoration: none;
            color: #1a1d20;
            font-weight: 500;
        }
        ul li{
            padding: 10px;
            border-radius: 10px;
        }
        ul li:hover{
            background-color: aliceblue;
        }
        #flush-collapseOne a:hover{
            background-color: #444;
            color: #ffff;
            padding: 5px;
            border-radius: 5px;


        }
        #logo{
            width: 7rem;
        }
        i{
            transition: 0.5s;
        }
        i:hover{
            transform: translateY(-5px);
        }
    </style>
</head>
<body >

<div class="container-fluid bg-dark  p-3">
    <a class="btn " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fa-solid text-light fa-bars"></i>
    </a>
</div>
<div class="offcanvas offcanvas-start shadow-sm" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
       <div class="row justify-content-center align-items-center">
           <img id="logo" class="img-fluid" src="./Assets/images/logo.png" alt="logo">
           <h3 CLASS="text-center">BSIT RECTO</h3>
       </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
<!--    Canvas for Sidebar-->
    <div class="offcanvas-body">
        <div class="container shadow-sm p-2">
            <h5 class="offcanvas-title fw-bold " id="offcanvasExampleLabel">Administrator</h5>
        </div>
<!-- Dashboard links-->
        <ul class="list-group gap-2 mt-2">
<!-- accordion links -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Students
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body row gap-2">
                            <a href="./StudentList.php">Add New Student</a>
                           <!--for list -->
                            <a  href="./StudentList.php">List</a>
                        </div>
                    </div>
                </div>
        </ul>


    </div>
</div>

<div class="container mt-5">
    <h3>Student List</h3>
<!--table-->

    <table class="table  table-hover table-responsive">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Subject Code</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        $conn = mysqli_connect('localhost','root','','stdent_database');
        if(!$conn){
            die("Connection Problem") .mysqli_connect_error();
        }else{
            $Query = " select  f_name,l_name,m_name,stdent_ID,class FROM student_db; ";
            $result = mysqli_query($conn,$Query);

            while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th scope="row"><?php  echo $row['stdent_ID']; ?></th>
                    <td><?php  echo $row['f_name']; ?></td>
                    <td><?php  echo $row['m_name']; ?></td>
                    <td><?php  echo $row['l_name']; ?></td>
                    <td><?php  echo $row['class']; ?></td>
                    <td class="d-flex">
                        <form method="post" action="./EndPoints/Update.php">
                            <button name="Update" value=" <?php echo $row['stdent_ID'];?>" class="btn" type="submit">
                                <i class="fa-solid text-warning-emphasis fa-pen-to-square"></i>
                            </button>
                        </form>
                        <form method="post" action="./EndPoints/Delete.php">
                            <button name="Delete" value=" <?php echo $row['stdent_ID'];?>" class="btn" type="submit">
                                <i class="fa-solid text-danger-emphasis fa-trash-can"></i>
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
<script src="./index.js"></script>
</body>
</html>