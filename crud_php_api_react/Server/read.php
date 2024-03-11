<?php
//declare the Headers HERE
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Request-With");

include("fucnction.php");

$RequestMethod = $_SERVER['REQUEST_METHOD'];
// CHECK ID THE $RequestMethod IS EQUAL TO GET
if($RequestMethod === "GET"){
    $ProductList = GetProductList();
    echo $ProductList;
}else{
    // array of data to handle the error message or success message
    $data = [
        'Status' => 405,
        'Message' => $RequestMethod . "Not Allowed"
    ];
//    send correct headers
    header("HTTP/1.0 405 Method Not Allowed");
    json_encode($data);
}