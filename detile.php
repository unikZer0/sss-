<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail</title>
  <link rel="stylesheet" href="css/detile.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <script src="js/detile.js"></script>
</head>
<body>

<a href="index.php">Back</a>
<form action="" method="post">
<?php
require_once('db/db.php');

$db = new DB;

$conn = $db->conn;

// Check if product ID is set
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // Fetch product details from database
    $sql = "SELECT * FROM items WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // Display product details
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class='shoeBackground'>";
            echo "<h1 class='nike'>nike</h1>";
            echo "<img src='img/logo.png' alt='' class='logo' />";
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
            echo "<div class='buy-price'>";
            echo "<a href='#' class='buy'><i class='fas fa-shopping-cart'></i>Add to Cart</a>";
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
</form>
</body>
</html>
