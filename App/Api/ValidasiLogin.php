<?php

require '../Koneksi.php';
session_start();

$Email = $_POST['Email'];
$Password = $_POST['Password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$Email'");

if (mysqli_num_rows($query)) {
    $getSingle = mysqli_fetch_assoc($query);
    if ($Password == $getSingle['password']) {
        $_SESSION['Nama'] = $getSingle['nama_lengkap'];
        $_SESSION['Email'] = $getSingle['email'];
        $_SESSION['Id'] = $getSingle['id'];
        $_SESSION['auth'] = true;
        echo json_encode('Berhasil');
    } else {
        echo json_encode('Password Anda Salah');
    }
} else {
    echo json_encode('Email Tidak Terdaftar');
}
