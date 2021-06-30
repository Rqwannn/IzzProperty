<?php
require "../Koneksi.php";

$Depok = null;
$Jakarta = null;
$Bogor = null;

$getJakarta = mysqli_query($conn, "SELECT * FROM inforumah WHERE kota = 'Jakarta' ORDER BY created_at ASC");
$setJakarta = [];

if ($getJakarta->num_rows != 0) {
    global $getJakarta;

    while ($row = mysqli_fetch_assoc($getJakarta)) {
        $setJakarta[] = $row;
    }

    $Jakarta = $setJakarta[0];
}

$getBogor = mysqli_query($conn, "SELECT * FROM inforumah WHERE kota = 'Bogor' ORDER BY created_at ASC");
$setBogor = [];

if ($getBogor->num_rows != 0) {
    global $getBogor;

    while ($row = mysqli_fetch_assoc($getBogor)) {
        $setBogor[] = $row;
    }

    $Bogor = $setBogor[0];
}

$getDepok = mysqli_query($conn, "SELECT * FROM inforumah WHERE kota = 'Depok' ORDER BY created_at ASC");
$setDepok = [];

if ($getDepok->num_rows != 0) {
    global $getDepok;

    while ($row = mysqli_fetch_assoc($getDepok)) {
        $setDepok[] = $row;
    }

    $Depok = $setDepok[0];
}

if ($Jakarta) {
    $Jakarta = $Jakarta['id'];
}

if ($Depok) {
    $Depok = $Depok['id'];
}

if ($Bogor) {
    $Bogor = $Bogor['id'];
}

$data = [
    'Depok' => $Depok,
    'Jakarta' => $Jakarta,
    'Bogor' => $Bogor
];

echo json_encode($data);
