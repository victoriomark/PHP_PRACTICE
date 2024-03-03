<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">

    <style>
        body{
            background-color: #7583ff;
            color: #fff;
        }
        #Note_container{
            overflow: scroll;
            scroll-behavior: smooth;
            height: 50vh;
            padding: 1rem;
        }
        #Note_container::-webkit-scrollbar{
            display: none;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center">

<div class="container mt-5 p-5 rounded-5 col-lg-7">
    <div class="container d-lg-flex d-md-flex  justify-content-between">
        <h2>Note</h2>
            <a class="btn btn-dark" href="./Add_note.php">Create New Note</a>
    </div>

    <br>
    <input class="form-control" type="text" placeholder="Search notes">
   <section id="Note_container">
       <!--  Display the data from database -->
       <?php
       $conn = mysqli_connect('localhost','root','','notepad');

       if(!$conn){
           die("<h1>Connection Problem!</h1>");
       }else{
// if success to connect to the database display the data
           $Query = " SELECT * FROM note_db; ";
           $result = mysqli_query($conn,$Query);

           while ($row  = mysqli_fetch_assoc($result)){

               ?>
               <div class="container d-flex justify-content-between align-items-center p-3 bg-dark mt-3 rounded-4">
                   <div>
                       <h5><?php echo $row['Title']; ?></h5>
                       <p> <?php echo $row['Note']; ?></p>
                       <span class="text-secondary"> <?php echo $row['created_at'];?></span>
                       <div class="d-flex gap-2">
                           <form action="./Edit.php" method="post">
                               <button name="edit" value="<?php echo $row['ID'];?>" type="submit" class="btn text-primary">Edit</button>
                           </form>

                           <form action="./Delete.php" method="post">
                               <button name="delete" type="submit" value="<?php echo $row['ID']; ?>" class="btn text-danger">Delete</button>
                           </form>

                       </div>
                   </div>
               </div>
               <?php
           }
       }
       ?>
   </section>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>