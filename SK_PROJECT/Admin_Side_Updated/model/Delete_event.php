<?phpinclude '../Database/Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){   $id = $_POST['id'];    $Query = "DELETE  FROM tb_event WHERE id = $id";    mysqli_query($conn,$Query);}