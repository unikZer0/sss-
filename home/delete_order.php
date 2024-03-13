<?php
require_once('../db/db.php');
$db = new DB;
$conn = $db->conn;

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM orders WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('ຍົກເລິກແລ້ວ'); window.location='delete_table.php';</script>";
    } else {
        echo "error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ບໍ່ເຫັນເລກລະຫັດຜູ້ໃຊ້";
}
?>
