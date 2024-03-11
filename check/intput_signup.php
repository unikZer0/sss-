<?php
header('Content-Type: text/html; charset=UTF-8');
require_once('../db/db.php');

$db = new DB;
$conn = $db->conn;

$name = $conn->real_escape_string($_POST['name']);
$l_name = $conn->real_escape_string($_POST['lastname']);
$address = $conn->real_escape_string($_POST['address']);
$phone = $conn->real_escape_string($_POST['Phone']);
$id = $conn->real_escape_string($_POST['ID']);
$pass = $conn->real_escape_string($_POST['pass']);
$type_u = 1;

$sql = "SELECT * FROM users WHERE username = '$id' OR phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('ມີຂໍ້ມູນແລ້ວ');window.location='../login/Login.php</script>";
} else {
    $stmt = $conn->prepare("INSERT INTO users (name, lastname, address, phone, username, pass, type_u) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $name, $l_name, $address, $phone, $id, $pass, $type_u);

    if ($stmt->execute()) {
        echo "<script>alert('User registered successfully'); window.location='../login/Login.php';</script>";
    } else {
        echo "error: " . $stmt->error;
    }
}

$conn->close();
?>
