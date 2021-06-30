<?php

require '../Koneksi.php';

$email = $_POST['email'];
$telepon = $_POST['telepon'];
$nama = $_POST['nama'];
$tipeRumah = $_POST['tipeRumah'];
$luasTanah = $_POST['luasTanah'];
$kamarMandi = $_POST['kamarMandi'];
$Fasilitas = $_POST['Fasilitas'];
$luasBangunan = $_POST['luasBangunan'];
$kamarTidur = $_POST['kamarTidur'];
$lantai = $_POST['lantai'];
$carpotGarasi = $_POST['carpotGarasi'];
$alamat = $_POST['alamat'];
$sertifikat = $_POST['sertifikat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$kodePos = $_POST['kodePos'];
$maps = $_POST['maps'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$jmlGambar = $_POST['jmlGambar'];

$NewGambar = "";

for ($index = 1; $index <= $jmlGambar; $index++) {
    $setName = "Gambar$index";
    eval("\$setName = \"$setName\";");

    if (!isset($_FILES["$setName"])) {
        echo json_encode('Masukan File Terlebih Dahulu');
        die;
    }

    $Gambar = $_FILES["$setName"];

    $allowFormat = ['png', 'jpg', 'jpeg'];
    $getFormat = explode('/', $Gambar['type']);

    if ($Gambar['size'] > 3000000) {
        echo json_encode('Ukuran Gambar Terlalu Besar, Harus Kurang Dari 3 MB');
        die;
    } else if (!in_array($getFormat[1], $allowFormat)) {
        echo json_encode('Format File Tidak Di Dukung Hanya png, jpg, jpeg');
        die;
    }

    $NamaGambar = explode('.', $Gambar['name']);
    $Tempat = $Gambar['tmp_name'];

    $namaFilebaru = uniqid();
    $namaFilebaru .= ".";
    $namaFilebaru .= end($NamaGambar);

    $NewGambar .= "$namaFilebaru,";

    move_uploaded_file($Tempat, "../../Img/Kawasan$kota/$namaFilebaru");
}

$NewGambar = rtrim($NewGambar, ',');

mysqli_query($conn, "INSERT INTO inforumah VALUE('', '$nama', '$email', '$telepon', '$tipeRumah', '$luasTanah', '$kamarMandi', '$Fasilitas', '$sertifikat' ,'$luasBangunan', '$kamarTidur', '$lantai', '$carpotGarasi', '$alamat', '$harga', '$NewGambar', '$kota', '$provinsi', '$maps', '$deskripsi', '$kodePos', null)");

echo json_encode("Data Berhasil Ditambahkan.");
