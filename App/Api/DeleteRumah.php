<?php

require '../Koneksi.php';

$id = $_POST['id'];

$getQuery = mysqli_query($conn, "SELECT * FROM inforumah WHERE id = '$id'");
$getSingle = mysqli_fetch_assoc($getQuery);

$pisahGambar = explode(',', $getSingle['gambar']);
$setKota = $getSingle['kota'];

foreach ($pisahGambar as $item) {
    $path = "../../Img/Kawasan$setKota/$item";

    if (is_file($path)) {
        unlink("../../Img/Kawasan$setKota/$item");
    }
}

mysqli_query($conn, "DELETE FROM inforumah WHERE id = '$id'");

echo json_encode("Data Berhasil Di Hapus");
