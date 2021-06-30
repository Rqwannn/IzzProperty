<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("location:http://localhost/IzzProperti/Login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | IzzProperty</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d1a508a7c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Table/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../CSS/Table/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../CSS/admin.css">
</head>

<body>
    <div class="d-flex">
        <div class="LeftPrimary">
            <div class="container">
                <div class="headerLeft d-flex justify-content-center align-items-center" style="height: 70px;">
                    <h4 style="color: #fff;" class="mt-4">IzzProperty</h3>
                </div>
                <div class="contentLeft mt-5">
                    <div class="contentSide">
                        <div class="container">

                            <ul class="sideNav-link">
                                <li>
                                    <a class="nav-link" href="index.php">
                                        <p><i class="fas fa-th-large" style="color: #5e72e4;"></i>Dashboard</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="sideNav-link mt-2">
                                <li>
                                    <a class="nav-link" href="TotalRumah.php">
                                        <p><i class="far fa-copy" style="color: #5e72e4;"></i>Total Rumah</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="sideNav-link mt-2">
                                <li>
                                    <a class="nav-link" href="TotalAdmin.php">
                                        <p><i class="far fa-copy" style="color: #5e72e4;"></i>Total Admin</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="sideNav-link activeBG mt-2">
                                <li>
                                    <a class="nav-link activeColor" href="TambahRumah.php">
                                        <p><i class="far fa-copy" style="color: #fff;"></i>Tambah Rumah</p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="RightPrimary">
            <div class="navbarAdmin">
                <div class="container d-flex justify-content-between h-100">
                    <div class="navbarLeft">
                        <div class="WrapperInput d-flex justify-content-center align-items-center">
                            <input type="text" placeholder="Search" class="form-control w-100" style="border-top-right-radius: 0; border-bottom-right-radius: 0;">
                            <button class="btn btn-primary" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">Search</button>
                        </div>
                    </div>
                    <div class="navbarRight">
                        <div class="MoreProfile">
                            <div class="clickValueProfile d-flex">
                                <img src="../Img/profile.png" class="rounded-circle clickBtnProfile" alt="">
                                <p class="clickBtnProfile text-dark"><?= $_SESSION['Nama'] ?></p>
                            </div>

                            <div class="slideDown-Profile">
                                <p class="text-dark" style="font-size: 12px;">WELCOME!</p>
                                <div class="contentSlide-Profile mt-3">
                                    <a href="../logout.php" class="d-flex align-items-center">
                                        <i class="fas fa-running"></i>
                                        <p>Logout</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contentRight">
                <div class="container mt-5">
                    <div class="col-md-12 mt-5">
                        <div class="cardProfileAdmin">
                            <div class="headerEmploye">
                                <h5>Tambah Data Rumah</h5>
                            </div>
                            <div class="container">
                                <div class="titleContent">
                                    <p class="mb-5">Informasi Pemilik</p>
                                    <div class="lineTitleAdmin"></div>
                                </div>
                            </div>
                            <div class="contentProfileAdmin">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="inputAdmin d-flex flex-column">
                                                <label for="nama" class="text-secondary">Nama Lengkap</label>
                                                <input type="text" name="nama" id="nama" class="form-control mt-2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inputAdmin d-flex flex-column">
                                                <label for="telepon" class="text-secondary">No. Telepon</label>
                                                <input type="text" name="telepon" id="telepon" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" class="form-control mt-2">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="inputAdmin d-flex flex-column">
                                                <label for="email" class="text-secondary">Email</label>
                                                <input type="email" name="email" id="email" class="form-control mt-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="titleContent">
                                    <p class="my-5">Spesifikasi Rumah</p>
                                    <div class="lineTitleAdmin"></div>
                                </div>
                            </div>
                            <div class="contentEmploye mt-3">
                                <div class="contentProfileAdmin">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="tipeRumah" class="text-secondary">Tipe Rumah</label>
                                                    <input type="text" name="tipeRumah" id="tipeRumah" class="form-control mt-2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="luasTanah" class="text-secondary">Luas Tanah</label>
                                                    <input type="text" name="luasTanah" id="luasTanah" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="kamarMandi" class="text-secondary">Jml Kamar Mandi</label>
                                                    <input type="text" name="kamarMandi" id="kamarMandi" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="Fasilitas" class="text-secondary">Fasilitas</label>
                                                    <input type="text" name="Fasilitas" id="Fasilitas" class="form-control mt-2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="luasBangunan" class="text-secondary">Luas Bangunan</label>
                                                    <input type="text" name="luasBangunan" id="luasBangunan" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="kamarTidur" class="text-secondary">Jml Kamar Tidur</label>
                                                    <input type="text" name="kamarTidur" id="kamarTidur" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="lantai" class="text-secondary">Jumlah Lantai</label>
                                                    <input type="text" name="lantai" id="lantai" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin mt-3 d-flex flex-column">
                                                    <label for="carpotGarasi" class="text-secondary">Carpot Garasi</label>
                                                    <input type="text" name="carpotGarasi" id="carpotGarasi" class="form-control mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="titleContent">
                                        <p class="my-5">Lokasi Rumah</p>
                                        <div class="lineTitleAdmin"></div>
                                    </div>
                                </div>
                                <div class="contentProfileAdmin">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="alamat" class="text-secondary">Alamat</label>
                                                    <input type="text" name="alamat" id="alamat" class="form-control mt-2">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="kota" class="text-secondary">Kota</label>
                                                    <select name="kota" id="kota" class="form-control mt-2">
                                                        <option selected>Pilih Kota</option>
                                                        <option value="Jakarta">Jakarta</option>
                                                        <option value="Bogor">Bogor</option>
                                                        <option value="Depok">Depok</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="provinsi" class="text-secondary">Provinsi</label>
                                                    <input type="text" name="provinsi" id="provinsi" class="form-control mt-2">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="kodePos" class="text-secondary">Kode Pos</label>
                                                    <input type="text" name="kodePos" id="kodePos" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="maps" class="text-secondary">Link Maps</label>
                                                    <input type="text" name="maps" id="maps" class="form-control mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="titleContent">
                                        <p class="my-5">Info Lainya</p>
                                        <div class="lineTitleAdmin"></div>
                                    </div>
                                </div>
                                <div class="contentProfileAdmin">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="harga" class="text-secondary">Harga</label>
                                                    <input type="text" name="harga" id="harga" class="form-control mt-2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="sertifikat" class="text-secondary">Sertifikat</label>
                                                    <input type="text" name="sertifikat" id="sertifikat" class="form-control mt-2">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="deskripsi" class="text-secondary">Deskripsi</label>
                                                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control mt-2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="titleContent">
                                        <p class="my-5">Gambar Rumah</p>
                                        <div class="lineTitleAdmin"></div>
                                    </div>
                                </div>
                                <div class="contentProfileAdmin">
                                    <div class="container">
                                        <div class="row WrapperGambar">
                                            <div class="col-md-12">
                                                <div class="inputAdmin d-flex flex-column">
                                                    <label for="file" class="text-secondary">Gambar</label>
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control GambarRumah">
                                                        <button onclick="TambahGambar()" class="btn btn-outline-secondary" type="button" id="button-addon2" style="border-top-left-radius: 0;border-bottom-left-radius: 0;"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="btnContent-profile mt-4">
                                            <button type="submit" onclick="TambahDataRumah()" class="btn btnUpdate-Profile mb-3">Tambah Rumah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="FooterAdmin d-flex align-items-center justify-content-between mt-5">
                        <div class="leftFooter d-flex">
                            <a class="nav-link">About Us</a>
                            <a class="nav-link">Licenses</a>
                        </div>
                        <div class="rightFooter">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script> IzzProperty. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../JS/jquery.min.js"></script>
<script src="../JS/bootstrap.min.js"></script>
<script src="../JS/sweetalert2.all.min.js"></script>
<script src="../JS/FormatMoney.js"></script>
<script src="../JS/Table/jquery.dataTables.min.js"></script>
<SCript src="../JS/Table/dataTables.bootstrap4.min.js"></SCript>
<SCript src="../JS/Table/dataTables.responsive.min.js"></SCript>
<script src="../JS/Table/responsive.bootstrap4.min.js"></script>
<script src="../JS/admin.js"></script>

</html>