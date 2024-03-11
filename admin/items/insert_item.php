<?php
require_once('parts/header.php');
require_once('db/db.php');
// if(!isset($_SESSION['login_user'])) {
//     header("location: login_1/login.php");
//     exit;
// }
?>
    <h2>Add New Item</h2>
    <form action="insert_item.php" method="post">
        <label for="t_id">Type ID:</label><br>
        <input type="text" id="t_id" name="t_id"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="desc">Description:</label><br>
        <textarea id="desc" name="desc"></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="img">Image URL:</label><br>
        <input type="text" id="img" name="img"><br><br>
        <input type="submit" value="Submit">
    </form>