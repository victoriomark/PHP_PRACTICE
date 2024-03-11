<?php
// require tge connection
require 'connect.php';

// now lets create the function
function  GetProductList()
{
    global $conn;
    // if success conn Query
    $Query = " SELECT * FROM items; ";

    // executing the Query
    $Query_run = mysqli_query($conn,$Query);

    // check id the query is success or no

    if($Query_run){
        // check if the  reuslt of the query or the number of rows are > 0 or simply teh rusult found or not
        if(mysqli_num_rows($Query_run) > 0){
            // then if grater >0 or may laman ang table fetch nanatin
            $Res = mysqli_fetch_all($Query_run,MYSQLI_ASSOC);

            // then display the data message or the array

            $data = [
                'Status'=> "200",
                'Message' => "Successfully Fetched",
                'data' => $Res
            ];
        }else{
            $data = [
                'Status ' => 404,
                'Message ' => "the items is not found"
            ];
            header('HTTP/1.0  404 NOT FOUND');
        }
    }
    // then return the data
    return json_encode($data);
}