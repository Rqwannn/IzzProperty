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
    <title>Data Rumah | IzzProperty</title>
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

                            <ul class="sideNav-link activeBG mt-2">
                                <li>
                                    <a class="nav-link activeColor" href="TotalRumah.php">
                                        <p><i class="far fa-copy" style="color: #fff;"></i>Total Rumah</p>
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

                            <ul class="sideNav-link mt-2">
                                <li>
                                    <a class="nav-link" href="TambahRumah.php">
                                        <p><i class="far fa-copy" style="color: #5e72e4;"></i>Tambah Rumah</p>
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

                    <div class="col-md-12">
                        <div class="cardTableData mt-4">
                            <div class="container">
                                <div class="headerTable">
                                    <h5 class="mt-2">Data Rumah</h5>
                                </div>
                            </div>
                            <div id="contentTable" class="contentEmploye">
                                <table border="0" id="TableOrder" class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemilik</th>
                                            <th>Email</th>
                                            <th>Tipe</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="BodySetData">

                                    </tbody>
                                </table>
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