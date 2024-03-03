<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_Data'])) {
    // Grab the names of the inputs
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $ProductName = $_POST['ProductName'];

    // For uploading the image
    $Product_image = $_FILES['Product_image']['name'];
    $Temp_name = $_FILES['Product_image']['tmp_name'];
    $Folder = "../image/" . $Product_image;

    // Creating database connection
    $conn = mysqli_connect('localhost', 'root', '', 'foods');

    // Check if the connection is successful
    if (!$conn) {
        die("<h1>Connection Problem</h1>");
    } else {
        // Escape inputs to prevent SQL injection
        $ProductName = mysqli_real_escape_string($conn, $ProductName);
        $Description = mysqli_real_escape_string($conn, $Description);
        $Price = mysqli_real_escape_string($conn, $Price);
        $Product_image = mysqli_real_escape_string($conn, $Product_image);

        // Insert data into the database
        $Query = "INSERT INTO product_db(ProductName, Description, Price, data)
                  VALUES('$ProductName', '$Description', '$Price', '$Product_image')";
        mysqli_query($conn, $Query);

        // Move uploaded file to destination folder
        move_uploaded_file($Temp_name, $Folder);
    }
}
?>
