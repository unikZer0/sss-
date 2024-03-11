<?php
header('Content-Type: text/html; charset=UTF-8');
require_once('../db/db.php');

$db = new DB;
$conn = $db->conn;

$username = $_POST['username'];
$password = $_POST['password'];

// $sql = "SELECT * FROM users WHERE username = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param('s', $username);
// $stmt->execute();
// $result = $stmt->get_result();
// $data = $result->fetch_assoc();

// if (isset($data['username'])) {
//     if (password_verify($password, $data['pass'])) {
//         $_SESSION['username'] = $data['username'];
//         header("Location: ../index.php");
//     } else {
//         echo "
//             <script type='text/javascript'>
//               alert('Login failed. Incorrect password.');
//               window.location='../login_1/login.php';
//             </script>";
//     }
// } else {
//     echo "
//             <script type='text/javascript'>
//               alert('Login failed. User not found.');
//               window.location='../login_1/login.php';
//             </script>";
// }
?>