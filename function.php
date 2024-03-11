<?php
require '../inc/db_con.php';

function getCustomer()
{
    global $conn;
    // Query the data from database
    $Query = "SELECT * FROM customers_db; ";
    // Execute the Query
    $Query_run = mysqli_query($conn, $Query);

    // Check if the Query is true
    if (!$Query_run) {
        $data = [
            'status' => 500,
            'Message' => "Internal Server error",
        ];
        header("HTTP/1.0 500 Internal Server Error");
    } else {
        if (mysqli_num_rows($Query_run) > 0) {
            // If the record found or result is greater than 0 then display the data
            $res = mysqli_fetch_all($Query_run, MYSQLI_ASSOC);
            $data = [
                'status' => 200,
                'Message' => "Customer Successfully Fetched",
                'data' => $res // include data in response
            ];
            header("HTTP/1.0 200 OK");
        } else {
            $data = [
                'status' => 404,
                'Message' => "Customer Not found",
            ];
            header("HTTP/1.0 404 Not Found");
        }
    }
    return json_encode($data);
}