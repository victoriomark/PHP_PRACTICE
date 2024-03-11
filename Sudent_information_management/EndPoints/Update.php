<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save_student'])){
    $btn_w_id = $_POST['save_student'];
    $conn = mysqli_connect('localhost','root','','stdent_database');

    $first_name = $_POST['f_name'];
    $lasName =  $_POST['l_name'];
    $middleName =  $_POST['m_name'];
    $address = $_POST['address'];
    $program = $_POST['program'];
    $subject_code = $_POST['class'];
    $Student_id = $_POST['phone'];


    if(!$conn){
      die("Connection Problem");
    }else{
        $Query = " UPDATE student_db SET   f_name = '$first_name', l_name = '$lasName', m_name = '$middleName' , address = '$address', program = '$program' ,class = '$subject_code', phone = '$Student_id' WHERE stdent_ID = $btn_w_id; ";
         if(mysqli_query($conn,$Query)){
             ?>
             <script>
                 alert("Successfully Updated")
                 window.location.href = "../Dashboard.php";
             </script>
   <?php
         }else{
             ?>
             <script>
                 alert("Something Wrong")
             </script>
             <?php
         }
    }
}
?>

<?php

// this the responsible for creating random STUDENT ID
$x = "A122A";
$Student_id = $x .(rand(500,1000));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>update</title>
</head>
<body>
<div class="container p-2 mt-5">
    <h2>Update Student Information</h2>
    <form  method="post">

        <?php
        $x = "A122A";
        $Student_id = $x .(rand(500,1000));
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Update'])){
            $conn = mysqli_connect('localhost','root','','stdent_database');
            $update_btn = $_POST['Update'];
            $Query = " SELECT * FROM student_db WHERE stdent_ID =  '$update_btn'; ";
            $result = mysqli_query($conn,$Query);

            while ($row = mysqli_fetch_assoc($result)){
                ?>
                <!-- HTML CODE-->
                <div>
                    <input type="text" name="f_name" value="<?php echo $row['f_name']?>" class="form-control ">
                    <br>
                    <input type="text" name="l_name" value="<?php echo $row['l_name']?>" class="form-control " >
                    <br>
                    <input type="text" name="m_name" value="<?php echo $row['m_name']?>" class="form-control " >
                    <br>
                    <input type="text" name="phone" value="<?php echo isset($row['phone']) ? $row['phone'] : $Student_id; ?>" class="form-control">
                    <br>
                    <input type="text" name="address" class="form-control" value="<?php echo $row['address']?>">

                </div>
                <div>
                    <br>
                    <select name="class" class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <option> <?php echo $row['class']?></option>
                        <option value="Itelect-3">Itelect</option>
                        <option value="Apdevet">Apdevet</option>
                        <option value="Rizal">Rizal</option>
                        <option value="Infoas">Infoas</option>
                    </select>
                    <br>
                    <select name="program" class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <option> <?php echo $row['program']?></option>
                        <option value="BSIT">BSIT</option>
                        <option value="STEM">STEM</option>
                        <option value="BSOA">BSOA</option>
                    </select>
                    <br>
                </div>
                <button type="submit" value="<?php echo $row['stdent_ID'];?>" name="save_student" class="btn btn-primary">Save</button>
                <?php
            }
            $conn->close();
        }


        ?>


    </form>
</div>

</body>
</html>
