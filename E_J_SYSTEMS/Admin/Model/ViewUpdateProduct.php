<?phpinclude '../../Database/Connect.php';global $conn;if(isset($_POST['update'])){    $ID = $_POST['update'];    $Query = "SELECT ProductName, Description, Price, Product_image FROM products WHERE ID = $ID";    $result = mysqli_query($conn, $Query);    if(mysqli_num_rows($result) > 0){        while ($row = mysqli_fetch_assoc($result)){            ?>            <!doctype html>            <html lang="en">            <head>                <meta charset="UTF-8">                <meta name="viewport"                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">                <meta http-equiv="X-UA-Compatible" content="ie=edge">                <title>Document</title>                <style>                    body {                        font-family: Arial, sans-serif;                        margin: 0;                        padding: 0;                        background-color: #f4f4f4;                    }                    .container_ {                        max-width: 600px;                        margin: 50px auto;                        padding: 20px;                        background-color: #fff;                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);                        border-radius: 8px;                    }                    .container_ div {                        margin-bottom: 15px;                    }                    label {                        display: block;                        margin-bottom: 5px;                        font-weight: bold;                    }                    input[type="text"], input[type="number"], input[type="file"], textarea {                        width: 100%;                        padding: 10px;                        margin-top: 5px;                        border: 1px solid #ccc;                        border-radius: 4px;                        box-sizing: border-box;                        font-size: 16px;                    }                    .form-floating {                        position: relative;                    }                    .form-floating label {                        position: absolute;                        top: 10px;                        left: 10px;                        padding: 0 5px;                        background: #fff;                        pointer-events: none;                        transition: all 0.2s ease;                    }                    .form-floating textarea {                        padding: 20px 10px 10px;                    }                    .form-floating textarea:focus + label,                    .form-floating textarea:not(:placeholder-shown) + label {                        top: -20px;                        left: 10px;                        font-size: 12px;                        color: #007bff;                    }                    button {                        padding: 10px 20px;                        background-color: #007bff;                        color: #fff;                        border: none;                        border-radius: 4px;                        cursor: pointer;                        font-size: 16px;                    }                    button:hover {                        background-color: #0056b3;                    }                </style>            </head>            <body>            <div class="container_">                <form action="./saveUpdatedProduct.php" method="post" enctype="multipart/form-data">                    <div>                        <label for="ProductImage">Product Image</label>                        <input class="form-control" type="file" id="ProductImage" name="Updated_image">                    </div>                    <div>                        <label for="ProductName">Product Name</label>                        <input type="text" id="ProductName" name="UpdatedProductName" value="<?php echo $row['ProductName']; ?>" placeholder="Product Name">                    </div>                    <div>                        <label for="ProductPrice">Price</label>                        <input type="number" id="ProductPrice" name="UpdatedProductPrice" value="<?php echo $row['Price']; ?>">                    </div>                    <div class="form-floating">                        <textarea  class="form-control" placeholder="Product Description" id="Description" name="Description" style="height: 100px"><?php echo $row['Description']; ?></textarea>                        <label for="Description">Description</label>                    </div>                    <button type="submit" name="save" value="<?php echo $ID?>">Save</button>                </form>            </div>            </body>            </html>            <?php        }    }}?>