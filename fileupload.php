<?php
include "connection.php";

if(isset($_POST['upload'])){
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $tempname = $_FILES['file']['tmp_name'];

$filedata = addslashes(file_get_contents($tempname));

$sql = "INSERT INTO uploads (filename, filetype, filedata) 
VALUES ('$filename', '$filetype', '$filedata')";

mysqli_query($conn, $sql);

echo "File uploaded successfully.";

}

?>