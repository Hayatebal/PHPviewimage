<?php

$servername = "localhost";
$username = "root";
$password = "journal_system";
$dbname = "journal_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload PDF of Image</title>
</head>
<body>
    <h2>Upload PDF of Picture</h2>
    
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit" name="upload">Upload</button>
    </form>

</body>
</html>