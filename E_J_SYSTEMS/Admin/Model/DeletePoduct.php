<?phpinclude "../../Database/Connect.php";global $conn;if(isset( $_POST['btnID'])){    $id = $_POST['btnID'];    $Query = "DELETE FROM products WHERE  ID = $id";     mysqli_query($conn,$Query);}