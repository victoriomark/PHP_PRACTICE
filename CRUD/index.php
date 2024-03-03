<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>



<div class="container m-5 p-3">
    <h1> List of Clients</h1>
  <a class="btn btn-primary" href="./create.php">New Client</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>


        <?php
        $conn = mysqli_connect('localhost','root','','Crud');

        //Chick if the connection is success or not
        if(!$conn){
            die("Connection Failed");
        }else{
            $Query_Run = mysqli_query($conn,'Select * from crud_tb');

            while ($row =mysqli_fetch_array($Query_Run)){
                ?>
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['Phone']?></td>
                    <td><?php echo $row['Created_At']?></td>
                    <td class="d-flex gap-2">

                       <form action="./delete.php" method="post">
                           <button name="delete_btn" value="<?php echo $row['ID'] ?>" class="btn text-danger">Delete</button>
                       </form>


                        <form action="./update.php" method="post">
                            <button name="update_btn" value="<?php echo $row['ID'] ?>" class="btn text-primary ">Edit</button>
                        </form>
                    </td>
                </tr>
                <?php
            }

        }
        $conn->close();
        ?>

        </tbody>
    </table>
</div>


</body>
</html>
