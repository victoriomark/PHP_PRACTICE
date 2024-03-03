
<?php
// connection
$conn = mysqli_connect('localhost','root','','stdent_database');
if(!$conn){
    die('<h1>Connection Problem</h1>');
}else{

// check if the add button is being clicked
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_student'])){
        // getting the names of the inputs
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $m_name = $_POST['m_name'];
        $p_number = $_POST['p_number'];
        $address = $_POST['address'];
        $class = $_POST['class'];
        $program = $_POST['program'];
        $gender  = $_POST['gender'];

// Performing Query to add the data in Database
        ?>
        <?php
        $Query = " INSERT INTO student_db(f_name,l_name,m_name,address,phone,gener,class,program)
         values('$f_name','$l_name','$m_name','$address','$p_number','$gender','$class','$program' ); ";

        if(mysqli_query($conn,$Query)){
            ?>
            <script>
                alert("Successfully Added")
               window.location.href = "index.php"
            </script>
      <?php
        }else{
            echo "Error " .mysqli_error($conn);
        }
        }
}
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>StudentList</title>
</head>
<body>

<div class="container p-2 mt-5">
    <h2 class="text-muted">Add New Student Information</h2>
        <form  method="post">
            <div>
                <input type="text" name="f_name" class="form-control " placeholder="Enter First Name" required>
                <br>
                <input type="text" name="l_name" class="form-control " placeholder="Enter last Name" required>
                <br>
                <input type="text" name="m_name" class="form-control " placeholder="Enter middle name" required>
                <br>
                <div class="form-floating">
                    <textarea name="address" class="form-control" style="height: 10vh" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Address</label>
                </div>
                <br>
                <input type="number" name="p_number" class="form-control " placeholder="Enter Phone Number" required>
            </div>
            <div>
                <br>
                <select name="gender" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <select name="class" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option>Class</option>
                    <option value="Itelect-3">Itelect</option>
                    <option value="Apdevet">Apdevet</option>
                    <option value="Rizal">Rizal</option>
                    <option value="Infoas">Infoas</option>
                </select>
                <br>
                <select name="program" class="form-select form-select-lg mb-3" aria-label="Large select example">
                    <option> Program</option>
                    <option value="BSIT">BSIT</option>
                    <option value="STEM">STEM</option>
                    <option value="BSOA">BSOA</option>
                </select>
                <br>
            </div>
            <button type="submit" name="add_student" class="btn btn-primary">Add</button>
            <a class="btn btn-secondary" href="./index.php">Cancel</a>
        </form>
</div>



</body>
</html>