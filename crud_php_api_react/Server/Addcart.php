<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *"); // Allow access from any origin
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization,X-Request-With");

include "AddCartFunction.php";

$RequestMethod = $_SERVER['REQUEST_METHOD'];
if($RequestMethod === "POST"){
    $inputData = json_decode(file_get_contents('php://input'),true);
    //check if the inputData is empty
    if (empty($inputData)){
     $DataStored = CartStore($_POST);

    }else{
        echo  $inputData['name'];
        $DataStored = CartStore($inputData);
    }
   echo $DataStored;


}else{
    $data = [
        'Status' => 405,
        'Message' => $RequestMethod. ' Method Not Allowed'
    ];
    header('HTTP/1.0 405 Not Allowed');
    echo  json_encode($data);
}