<?php

// learning pdo in php
// multiple database and mas safe
include_once("class.php");

$Student_id = new  Student('ERWIN', '26', 'bASECO', '89');

//Calling the method inside the  class
$GetName = $Student_id->GetName();
$Get_all_info = $Student_id->Get_all_info();

echo $Get_all_info;





