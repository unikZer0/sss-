<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail</title>
  <link rel="stylesheet" href="../css/detile.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="../js/detile.js"></script>
</head>
<body>

<a class="btn btn-primary" href="index.php">Back</a>
<?php

require_once('../db/db.php');

$db = new DB;

$conn = $db->conn;

if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $sql = "SELECT * FROM items WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<img class='shoeBackground' src=". $row['img'] ." alt=''>";
            echo "<div class=''>";
            echo "<h1 class='nike'>" . $row['name'] . "</h1>";
            echo "</div>";
            echo "<div class='info'>";
            echo "<div class='shoeName'>";
            echo "<div>";
            echo "<h1 class='big'>" . $row['name'] . "</h1>";
            echo "<span class='new'>new</span>";
            echo "</div>";
            echo "</div>";
            echo "<div class='description'>";
            echo "<h3 class='title'>Product Info</h3>";
            echo "<p class='text'>" . $row['desc'] . "</p>";
            echo "</div>";
            echo "<form action='order.php' method='post'>";
            echo "<label for='quantity'>Quantity:</label>";
            echo "<input type='number' id='quantity' name='quantity' value='1' min='1'>";
            echo "<div class='buy-price'>";
            echo "<input type='hidden' name='product_id' value='" . $product_id . "'>";
            echo "<button type='submit' name='submit' class='buy'><i class='fas fa-shopping-cart'></i>Buy</button>";
            echo "</form>";
            echo "<div class='price'>";
            echo "<i class='fas fa-dollar-sign'></i>";
            echo "<h1>" . $row['price'] . "</h1>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Product ID not specified.";
}

$conn->close();
?>
</body>
</html>
