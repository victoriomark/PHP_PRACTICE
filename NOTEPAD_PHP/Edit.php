<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>

    body{
        background-color: #7583ff;
        color: #fff;
    }
</style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">
<!--Getting the data base on id -->
<?php
 if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])){

//     connection
     $conn = mysqli_connect('localhost','root','','notepad');

//     check if the connection is Success
     if (!$conn){
         die("<h1> Connection Problem</h1>");
     }else{
//    if success Lets Query

         $btn_id = $_POST['edit'];
         $Query = "SELECT * FROM note_db where ID = $btn_id ;";

         $result = mysqli_query($conn,$Query);

         while ($row = mysqli_fetch_assoc($result)){
             ?>
<!-- HTML CODE HERE-->
             <div class="container mt-4">
                 <h4>Update Note</h4>
                 <form method="post">
                     <input name="title" class="form-control" value="<?php echo $row['Title']?>" type="text">
                     <br>
                       <input  name="note" value="<?php echo $row['Note']?>" class="form-control" type="text">
                     <br>
                     <button  name="save" value="<?php echo $row['ID']?>" type="submit" class="btn btn-dark">Save</button>
                 </form>
             </div>
       <?php
         }

     }
$conn->close();
 }
?>

<!--Now Lets gow do Edit Query-->
<?php
//check if the btn save sa na click

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])){
  $Save = $_POST['save'];
  $note = $_POST['note'];
  $title = $_POST['title'];
//    create connection again
    $conn = mysqli_connect('localhost','root','','notepad');

//    check if the connection is success
    if(!$conn){
        die("Connection Problem");
    }else{
        $Query = " UPDATE note_db SET Title = '$title',Note = '$note' where ID = $Save;";
        $result  = mysqli_query($conn,$Query);

        if($result){
           ?>
            <script>
                alert("Successfully Edited")
                window.location.href = 'index.php';
            </script>
<?php
        }else{
           ?>
            <script>
                alert("Something Wrong")
                window.location.href = 'index.php';
            </script>
            <?php
        }
    }
}

?>


</body>
</html>

