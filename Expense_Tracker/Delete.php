<?php
$conn = mysqli_connect('localhost','root','','spense_tracker');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Id_Delete'])) {
    $iD = $_POST['Id_Delete'];

$Query = "DELETE  FROM expense_category WHERE ID = $iD";

if(mysqli_query($conn,$Query)){
    echo "Success";
}else{
    echo mysqli_error($conn);
}

}
?>
