
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container p-4 col-lg-5">
    <h2>Add New Products</h2>
    <form method="post" action="../EndPoint/AddItems.php" enctype="multipart/form-data">

        <div class="form-floating mb-3">
            <input name="ProductName" type="text" class="form-control" id="floatingInput" placeholder="Enter Your Product Name..">
            <label for="floatingInput">Product Name</label>
        </div>

        <div class="form-floating mb-3">
            <input name="Description" type="text" class="form-control" id="floatingInput" placeholder="Enter Your Description">
            <label for="floatingInput">Description</label>
        </div>

        <div class="form-floating mb-3">
            <input name="Price" type="number" class="form-control" id="floatingInput" placeholder="Enter Your Enter Your Price">
            <label for="floatingInput">Price</label>
        </div>

        <div class="form-floating mb-3">
            <input name="Product_image" type="file" class="form-control">
        </div>
      <button name="upload_Data" class="btn btn-success" type="submit">Add New Product</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>