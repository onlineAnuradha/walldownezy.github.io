<?php
// Admin Password (Change this!)
$admin_password = "yourpassword"; 

// Check if the admin is logged in
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        echo '<form method="POST"><input type="password" name="password" placeholder="Enter Admin Password"><button type="submit">Login</button></form>';
        exit();
    }
}

// Handle File Upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['wallpaper'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["wallpaper"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow only image files
    $allowed_types = ["jpg", "jpeg", "png", "gif", "webp"];
    if (in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($_FILES["wallpaper"]["tmp_name"], $target_file)) {
            echo "✅ Wallpaper uploaded successfully!";
        } else {
            echo "❌ Error uploading the file.";
        }
    } else {
        echo "❌ Only JPG, JPEG, PNG, GIF, & WEBP files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Wallpaper</title>
</head>
<body>
    <h2>Upload a Wallpaper</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="wallpaper" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>

