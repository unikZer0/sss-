<?php
header('Content-Type: text/html; charset=UTF-8');
require_once('../db/db.php');
session_start();
$db = new DB;
$conn = $db->conn;

if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']); 
      
    $sql = "SELECT * FROM users WHERE username = ? AND pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $myusername, $mypassword);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $result->num_rows;
      
    if($count == 1) {
        $_SESSION['login_user'] = $row['id'];
        $_SESSION['user_or_admin'] = $row['type_u'];
        header("location: ../index.php");
        exit();
    } else {
        echo "<script>alert('Your Login Name or Password is invalid'); window.location='../login/Login.php';</script>";
    }
}
?>
