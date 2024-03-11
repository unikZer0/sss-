<?php
require_once('../db/db.php');

$db = new DB;
$conn = $db->conn;

$name = $_POST['name'];
$l_name = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['Phone'];
$id = $_POST['ID'];
$type_u = 1;
$pass =$_POST['pass'];

// $sql_check_id = "SELECT * FROM users WHERE name = ?";
// $stmt_check_id = $conn->prepare($sql_check_id);
// $stmt_check_id->bind_param("s", $name);
// $stmt_check_id->execute();
// $result_check_id = $stmt_check_id->get_result();

// if ($result_check_id->num_rows > 0) {
//   echo "<script>alert('ID นี้ถูกใช้งานแล้ว กรุณาลองใหม่'); window.location='../register.php';</script>";
//   exit();
// }
// $sql_check_phone = "SELECT * FROM users WHERE phone = ?";
// $stmt_check_phone = $conn->prepare($sql_check_phone);
// $stmt_check_phone->bind_param("s", $phone);
// $stmt_check_phone->execute();
// $result_check_phone = $stmt_check_phone->get_result();

// if ($result_check_phone->num_rows > 0) {
//   echo "<script>alert('เบอร์โทรนี้ถูกใช้งานแล้ว กรุณาลองใหม่'); window.location='../register.php';</script>";
//   exit();
// }
// $sql_check_username = "SELECT * FROM users WHERE username = ?";
// $stmt_check_username = $conn->prepare($sql_check_username);
// $stmt_check_username->bind_param("s", $id);
// $stmt_check_username->execute();
// $result_check_username = $stmt_check_username->get_result();

// if ($result_check_phone->num_rows > 0) {
//   echo "<script>alert('เบอร์โทรนี้ถูกใช้งานแล้ว กรุณาลองใหม่'); window.location='../register.php';</script>";
//   exit();
// }

// $sql_insert = "INSERT INTO users (name, lastname, phone, address, username, pass, type_u) VALUES (?, ?, ?, ?, ?, ?, ?)";
// $stmt_insert = $conn->prepare($sql_insert);
// $stmt_insert->bind_param("ssssssi", $name, $l_name, $phone, $address, $id, $pass, $type_u);

// if ($stmt_insert->execute()) {
//   echo "<script>alert('ลงทะเบียนสำเร็จ'); window.location='../login_1/login.php';</script>";
// } else {
//   echo "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่'); window.location='../login/register.php';</script>";
// }

// $stmt_check_id->close();
// $stmt_insert->close();
// $conn->close();
?>
