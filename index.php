<?php

require_once('parts/header.php');
require_once('db/db.php');
// if(!isset($_SESSION['login_user'])) {
//     header("location: login_1/login.php");
//     exit;
// }
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
    <h1 class="pheading">NEW</h1>
<form action="" method="post">
<section class="sec">
<div class="products">
<?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<div class="img"><img src="'. $row['img'] .'" alt="" /></div>';
                echo '<div class="desc d-inline-block text-truncate">'. $row['desc'] .'</div>';
                echo '<div class="title">'. $row['name'] .'</div>';
                echo '<div class="box">';
                echo '<div class="price">'. $row['price'] .'</div>';
                
                if(isset($_SESSION['login_user'])) {
                    echo '<form action="detile.php" method="get">';
                    echo '<input type="hidden" name="id" value="'. $row['id'] .'">';
                    echo '<button type="submit" class="btn"><a class="text-decoration-none" href="detile.php?id='. $row['id'] .'">Buy Now</a></button>';
                    echo '</form>';
                } else {
                    echo '<a class="btn" href="login_1/login.php">Login to Buy</a>';
                }
                
                echo '</div>';     
                echo '</div>';     
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
