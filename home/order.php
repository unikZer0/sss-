<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
require_once('../db/db.php');

$db = new DB;
$conn = $db->conn;

if (isset($_POST['submit']) && isset($_POST['product_id']) && isset($_POST['quantity']) && is_numeric($_POST['quantity']) && intval($_POST['quantity']) > 0) {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $user_id =$_SESSION['login_user'];
    // echo "<script>alert(".$user_id.")</script>";

    // Retrieve product details
    $sql = "SELECT * FROM items WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $total = $price * $quantity;

        // Insert order into database
        $stmt = $conn->prepare("INSERT INTO `orders` (quantity, price, total, item_id, user_id) VALUES (?, ?, ?, ?, ?)");
        if (!$stmt->bind_param("iiiii", $quantity, $price, $total, $product_id, $user_id)) {
            echo "Binding parameters failed: " . $conn->error;
            exit;
        }

        if (!$stmt->execute()) {
            echo "Executing prepared statement failed: " . $stmt->error;
            exit;
        }

        echo "<script>alert('Order placed successfully!'); window.location='index.php';</script>";
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID or quantity not specified or invalid.";
}

$conn->close();
?>