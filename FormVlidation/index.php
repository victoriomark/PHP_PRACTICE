
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
  $name = $gmail = $pass = "";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = validate_Form($_POST['name']);
      $gmail = validate_Form($_POST['email']);
      $pass = validate_Form($_POST['password']);
  }


  function validate_Form($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?>


<div class="container">
    <h1>PHPForm Validation</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-3 col-4">
        <?php
        // chick if the input is not empty
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($name)){ ?>
           <div class="alert alert-danger">
               Name is Required!
           </div>

        <?php
          }
        ?>
        <label for="Name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Enter Name...">


        <?php
         if($_SERVER['REQUEST_METHOD'] === 'POST' && empty($gmail)){ ?>
             <div class="alert alert-danger mt-2">
                 Gmail is required!
             </div>

             <?php
         }
        ?>
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Enter Email...">


        <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST' && empty($pass)){ ?>
            <div class="alert alert-danger mt-2">
                Password is required!
            </div>

            <?php
        }
        ?>
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter Name...">




        <button type="submit" class="btn btn-primary m-2">Submit</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>