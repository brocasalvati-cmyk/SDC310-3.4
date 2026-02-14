<?php
// Database Connection
$host = 'localhost';
$db   = 'sdc310_wk3pa';
$user = 'root'; // Default VCASTLE/XAMPP user
$pass = '';     // Default VCASTLE/XAMPP password
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. ADD Personal Information
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $color = $_POST['color'];
    $place = $_POST['place'];
    $nickname = $_POST['nickname'];
    
    $sql = "INSERT INTO personal_info (name, dob, favorite_color, favorite_place, nickname) 
            VALUES ('$name', '$dob', '$color', '$place', '$nickname')";
    $conn->query($sql);
}

// 2. DELETE Personal Information
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM personal_info WHERE id=$id");
}

// 3. UPDATE Personal Information
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $color = $_POST['color'];
    $place = $_POST['place'];
    $nickname = $_POST['nickname'];

    $sql = "UPDATE personal_info SET name='$name', dob='$dob', favorite_color='$color', 
            favorite_place='$place', nickname='$nickname' WHERE id=$id";
    $conn->query($sql);
}

// Fetch all records
$result = $conn->query("SELECT * FROM personal_info");
?>
