<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="homepage1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
      integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
      integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>
  <body>
  <?php
session_start();
require_once('../db/db.php');
// if(!isset($_SESSION['login_user'])) {
//     header("location: login_1/login.php");
//     exit;
// }
$db = new DB;

$conn = $db->conn;

if(isset($_SESSION['login_user'])) {
  $user_id = $_SESSION['login_user'];
  $sql = "SELECT * FROM users WHERE id = $user_id";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}

$user_name = isset($_SESSION['login_user']) ? $row['name'] : '<a href="login/Login.php">Login</a>';


$dropdown_content = '';
if ($user_name != '<a href="../login/Login.php">Login</a>') {
    $dropdown_content = "<i class='fas fa-caret-down'></i></a>
      <ul class='submenu'>
      <li><a href='../Detail_table.php'>ປະຫວັດການຊື້</a></li>
        <li><a href='../logout.php'>Logout</a></li>
      </ul>";
}
$id_admin=isset($_SESSION['user_or_admin']) ? $_SESSION['user_or_admin'] : ' ';
  // echo "<script>alert(".$id_admin.")</script>";
$admin = '';
if ($id_admin== 2) {
    $admin = "   
    <li>
      <a href=''>admin</a>
      <ul class='submenu'>
        <li><a href='item.php'>items</a></li>
        <li><a href=''>user</a></li>
      </ul>
    </li>";
}
echo "<nav class='navbar'>
  <div class='logo'>
    <h1><a class='text-decoration-none' href='../index.php'>SNM</a></h1>
  </div>
  <ul class='menu'>
    <li>
      <a href='../index.php' class='active'>Home</a>
    </li>
    <li>
      <a href='Shopping.php'>Product</a>
      <ul class='submenu'>
        <li><a href='../Shopping.php?type=1'>Mobile phone</a></li>
        <li><a href='../Shopping.php?type=0'>NoteBook</a></li>
      </ul>
    </li>
    $admin
    <li><a href='../About.html'>About US</a></li>
    <li class='dropdown'>
      <a href='#' class='dropbtn'>$user_name $dropdown_content</li>
    </li>
  </ul>

  <div class='menu-btn'>
    <i class='fas fa-bars'></i>
  </div>
</nav>";
?>

