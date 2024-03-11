<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Request-With");

include "UpdateFunction.php";

$RequestMethod = $_SERVER['REQUEST_METHOD'];
if($RequestMethod === "PUT"){
    $UpdateProductList = GetUpdateProductList();
    echo $UpdateProductList;
}else{
    $data = [
        'Status' => 405,
        'Message' => 'Method Not Allowed'
    ];
    header('HTTP/1.0 405 Not Allowed');
    echo  json_encode($data);
}