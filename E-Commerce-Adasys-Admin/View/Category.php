<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <link rel="stylesheet" href="../Style.css">    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    <!--CDN FONTS-->    <link rel="preconnect" href="https://fonts.googleapis.com">    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Averia+Serif+Libre:ital,wght@1,300&family=Concert+One&family=Exo+2:ital,wght@0,700;1,700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lexend:wght@100..900&family=Paytone+One&family=Tilt+Neon&display=swap" rel="stylesheet">    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>    <title>Category</title></head><body><section id="product_hero" class="container-fluid p-5 d-flex flex-column justify-content-center align-items-center">    <h1 class="fw-bold text-light">CATEGORY</h1></section><section class="p-4 mt-2 container-fluid">    <div  class="d-flex container-fluid justify-content-between align-items-center p-3 rounded-3 sticky-top">        <div>            <div aria-label="breadcrumb">                <ol class="breadcrumb">                    <li  class="breadcrumb-item">                        <a class="text-muted" href="./Dashboard.php">Dashboard</a>                    </li>                    <li class="breadcrumb-item active text-muted" aria-current="page">Category</li>                </ol>            </div>            <h5 class="text-muted">Category List</h5>        </div>        <button style="background-color: #142D55" class="btn text-light fw-bold" data-bs-toggle="modal" data-bs-target="#AddCategory">            Add New Category        </button>    </div>    <table class="table table-hover table-responsive-sm">        <thead>        <tr>            <th scope="col">CategoryId</th>            <th scope="col">Category Image</th>            <th scope="col">Category Name</th>            <th scope="col">Action</th>        </tr>        </thead>        <tbody id="Category_Container">        </tbody>    </table></section><!-- Modal for Category Products--><div class="modal fade" id="AddCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered modal-lg">        <div class="modal-content">            <div class="modal-header">                <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">FORM FOR ADDING NEW CATEGORY</h1>            </div>            <div class="modal-body d-flex flex-column gap-2">                <div>                    <label for="CategoryImage">Category Image</label>                    <input class="form-control" type="file" id="CategoryImage">                </div>                <div>                    <label for="CategoryName">Category Name</label>                    <input  class="form-control" type="text" id="CategoryName">                </div>            </div>            <div class="modal-footer">                <button style="background-color: #dc3545" type="button" class="btn fw-bold text-light" data-bs-dismiss="modal">Cancel</button>                <button id="Add_category_btn" style="background-color: #142D55" type="button" class="btn text-light fw-bold">Add New Category</button>            </div>        </div>    </div></div><div id="Container_for_modals"></div><!--Modal for conforming delete--><div class="modal fade" tabindex="-1" id="ConfirmDelete">    <div class="modal-dialog modal-dialog-centered modal-sm">        <div class="modal-content">            <div class="modal-body">                <h5 class="fw-bold">ARE YOU SURE?</h5>            </div>            <div class="modal-footer">                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>                <button id="ConfirmDelete_btn" style="background-color: #142D55;" type="button" class="btn text-light">YES</button>            </div>        </div>    </div></div><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script><script src="../MainJS/Category.js"></script></body></html>