<?php

require '../Koneksi.php';

$id = $_POST['id'];
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
$jmlOldGambar = $_POST['jmlOldGambar'];

$NewGambar = "";

$getQuery = mysqli_query($conn, "SELECT * FROM inforumah WHERE id = '$id'");

for ($index = 1; $index <= $jmlGambar; $index++) {
    $setName = "Gambar$index";
    eval("\$setName = \"$setName\";");

    if (isset($_FILES["$setName"])) {
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
}

$setArray = [];

for ($index = 1; $index <= $jmlOldGambar; $index++) {
    $setName = "OldGambar$index";
    eval("\$setName = \"$setName\";");

    $Gambar = $_POST["$setName"];
    $setArray[] = $Gambar;
}

$getSingle = mysqli_fetch_assoc($getQuery);
$getGambarDatabase = $getSingle['gambar'];
$setKota = $getSingle['kota'];

$pisahGambar = explode(",", $getGambarDatabase);

foreach ($pisahGambar as $item) {

    if (!in_array($item, $setArray)) {
        $path = "../../Img/Kawasan$setKota/$item";

        if (is_file($path)) {
            unlink("../../Img/Kawasan$setKota/$item");
        }
    } else {
        $NewGambar .= "$item,";
    }
}

$NewGambar = rtrim($NewGambar, ',');

mysqli_query($conn, "UPDATE inforumah SET nama_pemilik = '$nama', email = '$email', telepon = '$telepon', tipe = '$tipeRumah', luas_tanah = '$luasTanah', kamar_mandi = '$kamarMandi', fasilitas = '$Fasilitas', sertifikasi =  '$sertifikat', luas_bangunan = '$luasBangunan', kamar_tidur = '$kamarTidur', lantai = '$lantai', carport_garasi = '$carpotGarasi', alamat =  '$alamat', harga = '$harga', gambar = '$NewGambar', kota = '$kota', provinsi = '$provinsi', maps = '$maps', deskripsi = '$deskripsi', kode_pos = '$kodePos' WHERE id = '$id'");
echo json_encode("Data Berhasil Diupdate.");
