<?php
//declare the Headers HERE
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Request-With");

include("function.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];
// NOW CHECK IF THE $requestMethod IS === TO GET
if ($requestMethod === "GET") {
    $CustomerList = getCustomer(); // CREATE A FUNCTION
    echo $CustomerList; // ECHO THE $CustomerList
} else {
    $data = [
        'status' => 405,
        'Message' => $requestMethod . " Method is Not Allowed",
    ];
    // Send the correct header
    header("HTTP/1.0 405 Method Not Allowed");
    // Then echo the json format
    json_encode($data);
}
