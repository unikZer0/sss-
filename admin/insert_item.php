<?php
require_once('../db/db.php');

$db = new DB;
$conn = $db->conn;

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $desc = mysqli_real_escape_string($conn, $_POST['desc']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);

    // Handle image upload
    $targetDir = "../img/"; 
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";

            // Insert data into database
            $sql = "INSERT INTO `items`(`t_id`, `name`, `desc`, `price`, `img`) 
            VALUES ('$type','$name','$desc','$price','$targetFile')";
            $qry = mysqli_query($conn, $sql);

                echo "<script>alert('Data inserted successfully!'); window.location='item.php';</script>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "<br />All fields must be filled";
}
?>
