<?php
//// Start Session
//session_start();
//
//if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['log_in'])) {
//$conn = mysqli_connect('localhost','root','','spense_tracker');
//    $username = $_POST['Username'];
//    $password = $_POST['Password'];
//    echo $username;
//
//// To prevent from SQL injection
//    $username = stripcslashes($username);
//    $password = stripcslashes($password);
//    $password = mysqli_real_escape_string($conn,$password);
//    $username = mysqli_real_escape_string($conn,$username);
//
//    // QUERY
//    $Query = "SELECT * FROM users WHERE UserNama = '$username' AND Pass = '$password';";
//    $result = mysqli_query($conn,$Query);
//    $count = mysqli_num_rows($result);
//
//    if ($count == 1) {
//        $_SESSION['Pass'] = $password;
//        echo '<script>
//                alert("Successfully Log In!");
//         </script>';
//    } else {
//        echo '
//   <script>
//       alert("Incorrect Password or Username");
//       location.href = "../index.php"
//   </script>';
//        echo mysqli_error($conn);
//    }
//}
//?>
