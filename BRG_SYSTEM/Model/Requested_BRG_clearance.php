<?phpinclude './Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){    $FullName = $_POST['FullName'];    $Pick_Up = $_POST['Pick_Up'];    $Gcash_reference = $_POST['Gcash_reference'];    $Payment = $_POST['Payment'];    $TrackingCode = $_POST['TrackingCode'];    $Purpose = $_POST['Purpose'];    $DocumentType = $_POST['DocumentType'];    $Query = "INSERT INTO requesteddocuments(FullName,Pick_Up_Date,Payment_Method,Gcash_Reference,Tracking_Code,Purpose,Status,DocumentType)       VALUES('$FullName','$Pick_Up','$Payment','$Gcash_reference','$TrackingCode','$Purpose','Pending','$DocumentType')";    mysqli_query($conn,$Query);}