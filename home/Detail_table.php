<link rel="stylesheet" href="css/Detail_table.css">
<?php
require_once('../parts/header.php');
?>

<main>
    <section class="my-orders">
    <?php
require_once('../db/db.php');
$db = new DB;
$conn = $db->conn;

if(isset($_SESSION['login_user'])) {
    $user_id = $_SESSION['login_user'];
    // echo "<script>alert(".$user_id.")</script>";

    $sql = "SELECT orders.*, items.name FROM `orders` JOIN items ON orders.item_id = items.id WHERE orders.user_id = $user_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>ປະຫວັດການຊື້</h2>";
        echo "<table style='border: 1px solid black;' border='1'>";
        echo "<thead><tr><th style='border: 1px solid black;' >ID</th><th style='border: 1px solid black;' >ຊື່</th><th style='border: 1px solid black;' >ຈຳນວນ</th><th style='border: 1px solid black;' >ລາຄາ</th><th style='border: 1px solid black;' >ລາຄາລວມ</th><th style='border: 1px solid black;' >ຍົກເລິກ</th></tr></thead>";
        echo "<tbody>"; // Added tbody tag here

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='border: 1px solid black;' >".$row['id']."</td>";
            echo "<td style='border: 1px solid black;' >".$row['name']."</td>"; // Corrected item name access
            echo "<td style='border: 1px solid black;' >".$row['quantity']."</td>";
            echo "<td style='border: 1px solid black;' >".$row['price']."</td>";
            echo "<td style='border: 1px solid black;' >".$row['total']."</td>";
            echo "<td style='border: 1px solid black;' ><a href='delete_order.php?id=".$row['id']."'>ຍົກເລິກ</a></td>";
            echo "</tr>";
        }

        echo "</tbody>"; // Closed tbody tag here
        echo "</table>";
    } else {
        echo "ຍັງບໍ່ມີປະຫວັດການຊື້";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
} else {
    echo "ບໍ່ເຫັນຜູ້ໃຊ້";
}
?>

    </section>
</main>
<?php
require_once('../parts/footer.php');
?>
