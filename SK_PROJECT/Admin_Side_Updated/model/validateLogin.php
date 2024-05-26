<?php
include '../Database/Connect.php';
global $conn;

session_start();

if ($_SESSION['status'] === 'invalid' || empty($_SESSION['status'])) {
    $_SESSION['status'] = 'invalid';
}

if ($_SESSION['status'] === 'valid') {
    echo "<script> window.location.href = '../View/index.php'</script>";
}

if (isset($_POST['submit'])) {
    $userName = trim($_POST['UserName']);
    $password = trim($_POST['Password']);


    if (empty($userName) || empty($password)) {
        echo "<script> alert('Please fill up all fields') </script>";
    } else {

        $stmt = $conn->prepare("SELECT * FROM admin WHERE UserName = ? AND Password = ?");
        $hashedPassword = md5($password);
        $stmt->bind_param('ss', $userName, $hashedPassword);

        // Execute the statement
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result && mysqli_num_rows($result) > 0) {
            $_SESSION['status'] = 'valid';
            echo "<script> window.location.href = '../View/index.php'</script>";
        } else {
            $_SESSION['status'] = 'invalid';
            echo "<script> alert('Invalid Credentials') </script>";
            echo "<script> window.location.href = '../View/Login.php'</script>";
        }

        $stmt->close();
    }
}


