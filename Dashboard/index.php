

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
</head>
<style>
    .sidebar{
        padding: 10px;
        background: #222;
        height: 100vh;
        min-width: 200px;
        transition: 0.5s;
        overflow: hidden;
        width: 69px;

    }
    ul{
        list-style: none;
    }
    ul li a{
        text-decoration: none;
    }
    header i{
        cursor: pointer;
    }
    .sidebarActive{
        min-width: 40px;
    }
    ul li:hover{
        background-color: #183153;
        border-radius: 10px;
    }
    #dashboard{
        border-radius: 10px;
    }
    .card{
        transition: 0.5s;
    }
    .card:hover{
        background-color: #222;
        color: aliceblue;
        cursor: pointer;
        transform: translateY(-5px);


    }

</style>
<body class="d-flex justify-content-center ">
<div class="sidebar">
    <ul class="d-flex flex-column gap-2">
        <li id="dashboard" class="d-flex gap-1 align-items-center p-2">
            <i class="fa-solid fa-gauge text-light"></i>
            <a class="text-light fw-bold" href="#">Dashboard</a>
        </li>

        <li class="d-flex gap-1 align-items-center p-2">
            <a class="text-light fw-bold" href="./Pages/AddProduct.php">Add New Products</a>
        </li>


    </ul>
</div>

<div style="background-color: #183153" class="container-fluid  p-5">
    <header class="container-fluid d-flex align-items-center gap-4 text-light  p-3 rounded-2">
        <i id="Menu" class="fa-solid fa-bars"></i>
        <h5>Dashboard</h5>
    </header>
    <div class="container row  p-5 gap-4">
        <div class="card border border-0 col-lg-3 justify-content-center align-items-center p-3">
            <i class="fa-solid fa-cart-shopping"></i>
            <h4  class="car fw-bold">Total Product</h4>
            <h1 class="fw-bold text-success">50</h1>
        </div>
    </div>
</div>



<script>
    const menu = document.getElementById("Menu");
    const SideBar = document.querySelector(".sidebar");
    menu.addEventListener("click",()=>{
        SideBar.classList.toggle("sidebarActive");
    })

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>