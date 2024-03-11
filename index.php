<?php
require_once('parts/header.php');
require_once('db/db.php');

$db = new DB;

$conn = $db->conn;

$sql = "SELECT * FROM items LIMIT 12";

$result = $conn->query($sql);
 ?>
    <section class="content">
      <h1>Welcome to</h1>
      <p>Shopping</p>
      <a href="Shopping.php">
        <button>Shop Now</button>
      </a>
    </section>
    <h1 class="pheading">yoooooo</h1>
<form action="" method="post">
<section class="sec">
<div class="products">
    <?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo'<div class="card">';
        echo'<div class="img"><img src="'. $row['img'] .'" alt="" /></div>';
        echo'<div class="desc d-inline-block text-truncate">'. $row['desc'] .'</div>';
        echo'<div class="title">'. $row['name'] .'</div>';
        echo'<div class="box"><div class="price">'. $row['price'] .'</div><button class="btn"><a class="text-decoration-none" href="detile.php?id='. $row['id'] .'">Buy Now</a></button> </div>';
        echo'</div>';     
    }
} else {
    echo "0 results";
}
    ?>
       </div>
</section>
</form>

<?php
$conn->close();
require_once('parts/footer.php');
?>
