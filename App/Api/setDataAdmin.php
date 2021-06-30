<?php

require '../Koneksi.php';

$setRumah = [];
$setAdmin = [];

$Pesanan = mysqli_query($conn, "SELECT * FROM inforumah");
$Admin = mysqli_query($conn, "SELECT * FROM admin");

while ($row = mysqli_fetch_assoc($Admin)) {
    $setAdmin[] = $row;
}

while ($row = mysqli_fetch_assoc($Pesanan)) {
    $setRumah[] = $row;
}

$data = [
    'Admin' => count($setAdmin),
    'Rumah' => count($setRumah),
];

echo json_encode($data);
