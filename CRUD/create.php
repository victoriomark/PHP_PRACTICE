<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>

<!--PHP CODE-->
<?php
    //chick if the Request is equal to Post method amd btn_submit is clicked
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['btn_submit'])) {

        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];


        //now if true  iam going to connect to database
        $conn = mysqli_connect('localhost','root','','crud');
        // Now we can check if the connection is success or not
        if (!$conn){
            die("connection Problem");
        }else{
            // Prepare the SQL statement to insert data into the database
            $Query = "INSERT INTO crud_tb(Name, Email, Phone) VALUES('$Name','$Email','$Phone')";

            if(mysqli_query($conn,$Query)){
                echo "<h1>New Client is Successfully Added</h1>";
                echo " <a href='./index.php'>Back Home</a>";

            }else{
                echo "Error adding New Client";
            }

        }


    }
?>

<div class="container mt-5 p-5">
    <form class="d-flex flex-column gap-3" method="POST">
      <div>
          <label for="Name">Name</label>
          <input class="form-control" name="name" type="text" placeholder="Enter Name..." required>
      </div>

        <div>
            <label for="email">Email</label>
            <input class="form-control" name="email" type="email" placeholder="Enter Email..." required>
        </div>

        <div>
            <label for="Name">Phone</label>
            <input class="form-control" name="phone" type="tel" placeholder="Enter PhoneNumber..." required>
        </div>
        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>