
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="d-flex flex-column justify-content-center align-items-center">



<?php


// grad the data

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_btn'])){
    $UpdateBTN = $_POST['update_btn'];
    //CREATING CONNECTION
    $conn = mysqli_connect('localhost','root','','crud');
    //chick if connection is success or not
    if(!$conn){
        die("Connection Problem");
    }else{
        // else run the Query  Select from crud_tb where ID = $UpdateBTN
        $Query = "SELECT ID, Name, Email, Phone, Created_At FROM crud_tb where ID = $UpdateBTN ";
        //chick if the Query is executed
        $result = mysqli_query($conn,$Query);
        if(mysqli_query($conn,$Query)){
            //if success print the updated Data
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    ?>

<div class="container mt-5 p-5">
    <form class="d-flex flex-column gap-3" method="POST">
        <div>
            <label for="Name">Name</label>
            <input class="form-control" value=" <?php echo $row['Name']?>" name="name" type="text"  required>
        </div>

        <div>
            <label for="email">Email</label>
            <input class="form-control" value="<?php echo $row['Email']?>" name="email" type="email"  required>
        </div>

        <div>
            <label for="Name">Phone</label>
            <input class="form-control" value="<?php echo $row['Phone']?>" name="phone" type="tel" required>
        </div>
        <button type="submit" name="btn_submit" value="<?php echo $row['ID']?>" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
            }
        }else{
            echo "Not Success";
        }
    }
}
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_submit'])){

    //check if the form is equal to post method && btn_submit is click
    $name =  $_POST['name'];
    $email =  $_POST['email'] ;
    $phone =  $_POST['phone'] ;
    $Updatebtn =$_POST['btn_submit'];

    $conn = mysqli_connect('localhost','root','','crud');

    if(!$conn){
        die("Connection Problem");
    }else{
        $Query = "UPDATE crud_tb SET Name ='$name' ,Email = '$email',Phone = '$phone' WHERE ID  = $Updatebtn";

        if(mysqli_query($conn,$Query)){
            echo "Edit Success";
            echo " <a href='./index.php'>Back Home</a>";
        }else{
            echo 'Not Success';
        }
    }

}


?>





</body>
</html>