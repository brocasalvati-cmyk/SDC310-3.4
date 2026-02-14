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

<!DOCTYPE html>
<html>
<head>
    <title>Brosal3735 Wk 3 Performance Assessment</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        form { background: #f4f4f4; padding: 15px; border-radius: 5px; }
        input { margin-bottom: 10px; display: block; }
    </style>
</head>
<body>

    <h1>Brosal3735 Wk 3 Performance Assessment</h1>

    <form method="POST">
        <h3>Add/Update Information</h3>
        <input type="hidden" name="id" id="form_id">
        <input type="text" name="name" id="form_name" placeholder="Name" required>
        <input type="date" name="dob" id="form_dob" required>
        <input type="text" name="color" id="form_color" placeholder="Favorite Color">
        <input type="text" name="place" id="form_place" placeholder="Favorite Place to Visit">
        <input type="text" name="nickname" id="form_nickname" placeholder="Nickname">
        
        <button type="submit" name="add">Add New</button>
        <button type="submit" name="update">Update Existing</button>
    </form>

    <table>
        <tr>
            <th>Name</th>
            <th>DOB</th>
            <th>Color</th>
            <th>Place</th>
            <th>Nickname</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['favorite_color']; ?></td>
            <td><?php echo $row['favorite_place']; ?></td>
            <td><?php echo $row['nickname']; ?></td>
            <td>
                <a href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this?')">Delete</a>
                | 
                <button onclick="fillForm(<?php echo htmlspecialchars(json_encode($row)); ?>)">Edit</button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <script>
    // Helper to fill the form for updates
    function fillForm(data) {
        document.getElementById('form_id').value = data.id;
        document.getElementById('form_name').value = data.name;
        document.getElementById('form_dob').value = data.dob;
        document.getElementById('form_color').value = data.favorite_color;
        document.getElementById('form_place').value = data.favorite_place;
        document.getElementById('form_nickname').value = data.nickname;
    }
    </script>

</body>
</html>
