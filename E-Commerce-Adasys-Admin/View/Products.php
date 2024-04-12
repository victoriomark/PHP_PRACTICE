<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="../Style.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <title>Products</title></head><body><section id="product_hero" class="container-fluid p-5 d-flex flex-column justify-content-center align-items-center"><h1 class="fw-bold text-light">PRODUCT LIST</h1></section><section class="p-4 mt-2 container-fluid">   <div  class="d-flex container-fluid justify-content-between align-items-center p-3 rounded-3 sticky-top">       <div>           <div aria-label="breadcrumb">               <ol class="breadcrumb">                   <li  class="breadcrumb-item">                       <a class="text-muted" href="./Dashboard.php">Dashboard</a>                   </li>                   <li class="breadcrumb-item active text-muted" aria-current="page">ProductList</li>               </ol>           </div>           <h5 class="text-muted">Product List</h5>       </div>       <button style="background-color: #142D55" class="btn text-light fw-bold" data-bs-toggle="modal" data-bs-target="#AddProducts">           Add New Product       </button>   </div>    <table class="table table-hover table-responsive-sm">        <thead>        <tr>            <th scope="col">#</th>            <th scope="col">Product</th>            <th scope="col">Product Name</th>            <th scope="col">Category</th>            <th scope="col">Price</th>            <th scope="col">Action</th>        </tr>        </thead>        <tbody id="Product_Container">        </tbody>    </table></section><!-- Modal for Adding Products--><div class="modal fade" id="AddProducts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered modal-lg">        <div class="modal-content">            <div class="modal-header">                <h1 class="modal-title fs-5" id="exampleModalLabel">FORM FOR ADDING NEW PRODUCTS</h1>            </div>            <div class="modal-body d-flex flex-column gap-2">                <div>                    <label for="ProductImage">Product Image</label>                    <input  class="form-control" type="file" id="ProductImage">                </div>                <div>                    <label for="ProductName">Product Name</label>                    <input class="form-control" type="text" id="ProductName" placeholder="Product Name">                </div>                <select id="selectCategory" class="form-select" aria-label="Default select example">                    <option selected>Select Category</option>                    <?php                    include '../Model/Connect.php';                    global $conn;                    $Query = "SELECT CategoryName FROM category";                    $result = mysqli_query($conn,$Query);                    if(mysqli_num_rows($result) > 0){                        while ($row = mysqli_fetch_assoc($result)){                            ?>                            <option value="<?php echo $row['CategoryName']?>"><?php echo $row['CategoryName']?></option>                    <?php                        }                    }                    ?>                </select>                <div>                    <label for="ProductPrice">Price</label>                    <input class="form-control" type="number" id="ProductPrice" placeholder="Price">                </div>                <div class="form-floating">                    <textarea class="form-control" placeholder="Product Description" id="Description" style="height: 100px"></textarea>                    <label for="Description">Description</label>                </div>            </div>            <div class="modal-footer">                <button style="background-color: #dc3545" type="button" class="btn fw-bold text-light" data-bs-dismiss="modal">Cancel</button>                <button id="Add_btn" style="background-color: #142D55" type="button" class="btn text-light fw-bold">Add Product</button>            </div>        </div>    </div></div><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script><script src="../MainJS/ProductList.js"></script></body></html>