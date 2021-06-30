<?php

require '../Koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM inforumah");
$result = [];

while ($item = mysqli_fetch_assoc($query)) {
    $result[] = $item;
}

echo json_encode($result);
