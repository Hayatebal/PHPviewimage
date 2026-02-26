<?php

include "connection.php";

$sql = "SELECT * FROM uploads";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "<h2>" . $row['filename'] . "</h2>";

    if($row['filetype'] == "application/pdf") {
        echo "<embed src='data:application/pdf;base64," 
        . base64_encode($row['filedata']) 
        . "' width='600' height='400' type='application/pdf'>";
    } else {
        echo '<img src="data:' . $row['filetype'] . ';base64,' . base64_encode($row['filedata']) 
        . '" alt="' . $row['filename'] . '" width="300">';
    }

    echo "<hr>";
}

?>