<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./%20style.css">
    <title>Sign In</title>
</head>
<body id="logout">
    <form class="container mt-5 col-lg-5 shadow-sm p-4 bg-light  rounded-3 d-flex flex-column justify-content-center"
          method="post" action="./EndPoints/Auth.php">
        <div>
            <img src="https://access.pinnacle.com.ph/access/images/pwu_logo.png" alt="logo">
        </div>
        <br>
        <label for="username">User Name</label>
        <input name="username" class="form-control" type="text" placeholder="Enter UserName" required>
        <br>
        <label for="Password">Password</label>
        <input name="Password" class="form-control" type="text" placeholder="Enter Password" required>
        <br>
       <button id="btn_login" name="sign_in"  class="btn p-2 btn-primary" type="submit">Login</button>
        <a class="text-primary mt-2" href="./sign_up.php">Sign Up</a>
    </form>


</body>
</html>
