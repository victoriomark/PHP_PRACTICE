<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Ajax</title>
</head>
<body>
<div class="container mt-4">
    <form id="form_data">
        <label for="UserName">Name</label>
        <input name="UserName" id="UserName" class="form-control" type="text" placeholder="Enter UserName" required>
        <label for="Password">age</label>
        <input name="Password" id="Password" class="form-control" type="password" placeholder="Enter Password" required>
        <br>
        <button class="btn btn-primary" id="sign_in">Sign In</button>
    </form>
</div>
<div id="data_user">
    <!-- Displayed data will go here -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // Function to display data
    const DisplayData = () => {
        const display_data = true;
        $.ajax({
            url: "DisplayData.php",
            type: 'post',
            data: {
                DisplaySend: display_data
            },
            success: function (data,status){
                const data_user = document.getElementById("data_user");
                data_user.innerHTML = data
            }
        });
    };

    // Call DisplayData function after page loads
        DisplayData();

    // AJAX request to add data
    const btn = document.getElementById("sign_in");
    const form_data = document.getElementById("form_data");
    // do prevent the form load every click
    form_data.addEventListener('submit',(e)=>{
        e.preventDefault();

    })
// function to add data to database
    const AddingData = () =>{
        let UserName = document.getElementById("UserName").value;
        let Password = document.getElementById("Password").value;
        $.ajax({
            url: "sendData.php",
            type: "post",
            data:{
                userName: UserName,
                Password: Password
            },
            success: function (data,status){
                DisplayData();
                UserName = ""
                Password = ""
            }
        });

    }

    btn.addEventListener('click',() => {
        // now add loading or delay to add data
        setTimeout(() => {
            AddingData();
        },5000)

    });
</script>
</body>
</html>
