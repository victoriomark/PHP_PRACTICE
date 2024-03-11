<?php

require "connect.php";
function GetUpdateProductList()
{
    global $conn;

    $Query = "UPDATE items SET Product_Name, Price,Product_imae_url,Description; ";
}