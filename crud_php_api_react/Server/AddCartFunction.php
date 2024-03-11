<?php

require "connect.php";

function error422($Message)
{
    $data = [
        'Status' => "422",
        'Message' => $Message
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    echo json_encode($data);
    exit();
}

function CartStore($customerInput)
{
    global $conn;

    $ProductName = mysqli_real_escape_string($conn, $customerInput['ProductName']);
    $Price = mysqli_real_escape_string($conn, $customerInput['Price']);
    $Product_imae_url = mysqli_real_escape_string($conn, $customerInput['Product_imae_url']); // corrected variable name
    $Description = mysqli_real_escape_string($conn, $customerInput['Description']);

    if (empty(trim($ProductName))) {
        return error422("Enter ProductName");
    } elseif (empty(trim($Price))) {
        return error422("Enter your Price");
    } elseif (empty(trim($Product_imae_url))) {
        return error422("Enter your ProductImage");
    } else {
        $Query = "INSERT INTO cart(Product_Name,Price,Product_imae_url,Description) VALUES ('$ProductName','$Price','$Product_imae_url','$Description')";
        $result = mysqli_query($conn, $Query);

        if ($result) {
            $data = [
                'Status' => 201,
                'Message' => "Successfully Created"
            ];
            header("HTTP/1.0 201 Successfully Created");
            echo json_encode($data);
        } else {
            $data = [
                'Status' => 500,
                'Message' => "Internal Server Error"
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
}
