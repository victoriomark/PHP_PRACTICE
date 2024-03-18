<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Add New Client</title>
</head>
<body class="bg-dark text-light">

<div class="container mt-4">
    <h1 >Add New Client</h1>
    <form method="post" action="./EndPoints/UpdloadData.php" enctype="multipart/form-data">

        <label class="fw-bold" for="client_name">Client Name</label>
        <input name="name" class="form-control" id="client_name"  type="text" placeholder="Enter Client Name" required>
        <br>

        <label class="fw-bold" for="client_price">Client Price</label>
        <input name="Price" class="form-control" id="client_price"  type="number" placeholder="Enter Client Price" required>
        <br>

        <select name="status" class="form-select" aria-label="Default select example">
            <option selected>Select Project Status</option>
            <option value="Ongoing">Ongoing</option>
            <option value="Done">Done</option>
        </select>
        <br>

        <label class="fw-bold" for="client_profile">Client Profile</label>
        <input name="profile" class="form-control" id="client_profile"  type="file"  required>
        <br>
        <button name="upload_data" type="submit" class="btn btn-primary">Add New Client</button>
        <button id="cancel" type="button"  class="btn btn-warning fw-bold">Cancel</button>
        <!-- js for cancel event-->
        <script>
            const cancel = document.querySelector("#cancel");
            cancel.addEventListener("click", () =>{
                window.location.href = "./index.php";
                // nice one
            })
        </script>
    </form>

</div>
</body>
</html>
