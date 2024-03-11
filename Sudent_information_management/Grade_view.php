

<?php
session_start();

if(!isset($_SESSION['UserNamme'])){
    header("Location: ./EndPoints/logOut.php");
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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Search Student</title>
</head>
<body>

<!--Search functionality-->
<div class="container mt-4">
    <h5>Search Student</h5>
    <form class="col-lg-4 d-flex gap-2" method="post">
        <input class="form-control " name="search_ID_STUDENT" type="text" placeholder="Enter Your Student ID.." required>
        <button name="search_btn" class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="container mt-4">
<table class="table  table-hover table-responsive">
    <thead>
    <tr>
        <th scope="col">Student_ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Middle Name</th>
        <th scope="col">Subject Code</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
<?php
 include_once ("Connect.php");
 if(!$conn){
     die("Connection Problem");
 }else{
// check if the btn search being clicked
     if( $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_btn'])){
         $id = $_POST['search_ID_STUDENT'];
         $Query = "SELECT * FROM student_db WHERE phone = '$id' ";
         $result = mysqli_query($conn,$Query);
//         CHECK IF THE STUDENT IS FOUND OR NOT
          if(!mysqli_num_rows($result)){
            ?>
              <div class="alert alert-danger">
                  <h5>STUDENT NOT FOUND!</h5>
              </div>
        <?php
          }else{
              while ($row = mysqli_fetch_assoc($result)){
                  ?>
                  <tr>
                      <td><?php echo $row['phone'] ?></td>
                      <td><?php echo $row['f_name'] ?></td>
                      <td><?php echo $row['m_name'] ?></td>
                      <td><?php echo $row['l_name'] ?></td>
                      <td><?php echo $row['class'] ?></td>
                  </tr>
                  <?php
              }
              ?>
              <div class="alert alert-success">
                  <h5>STUDENT  FOUND!</h5>
              </div>
              <?php
          }

     }

 }
?>

    </tbody>
</table>
</div>
</body>
</html>