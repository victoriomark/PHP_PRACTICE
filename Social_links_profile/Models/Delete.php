<?phpinclude "config.php";global $conn;if($_SERVER['REQUEST_METHOD'] == "POST"){    $ID = $_POST['Id'];    $Query = "DELETE FROM todo_app_tb WHERE ID = $ID";    mysqli_query($conn,$Query);}