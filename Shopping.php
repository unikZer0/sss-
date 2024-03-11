<?php
require_once('parts/header.php');
require_once('db/db.php');

$db = new DB;
$conn = $db->conn;

$type = isset($_GET['type']) ? $_GET['type'] : null;
if($type == null){
    echo '<h1 class="pheading">ALL</h1>';
} elseif($type == 1){
    echo '<h1 class="pheading">Mobile phone</h1>';
} elseif($type == 0){
    echo '<h1 class="pheading">NoteBook</h1>';
} else {
    echo "
           <script type='text/javascript'>
               alert('not implemented');
               window.location='index.php';
           </script>";
}

if ($type !== null) {
    ?>
    <form action="" method="post">
    <section class="sec">
    <div class="products">
    <?php
    $sql = "SELECT * FROM items WHERE t_id=$type";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo'<div class="card">';
            echo'<div class="img"><img src="'. $row['img'] .'" alt="" /></div>';
            echo'<div class="desc d-inline-block text-truncate">'. $row['desc'] .'</div>';
            echo'<div class="title">'. $row['name'] .'</div>';
            echo'<div class="box"><div class="price">'. $row['price'] .'</div><button class="btn"><a class="text-decoration-none" href="About.html?id='. $row['id'] .'">Buy Now</a></button> </div>';
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
}
else{?>
        <form action="" method="post">
    <section class="sec">
    <div class="products">
    <?php
    $sql = "SELECT * FROM items";
    
    $result = $conn->query($sql);
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
}
$conn->close();
require_once('parts/footer.php');
?>
