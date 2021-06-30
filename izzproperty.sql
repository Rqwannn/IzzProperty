-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 18.26
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izzproperty`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usia` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `username`, `password`, `usia`) VALUES
(2, 'Izza Zahra Rastya', 'Rastya@gmail.com', 'Rastya', '12345', '17'),
(3, 'Muhammad Andika', 'Andika@gmail.com', 'Andika', '12345', '17'),
(4, 'Ahmad Ridho', 'Ridho@gmail.com', 'Ridho', '12345', '17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inforumah`
--

CREATE TABLE `inforumah` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `kamar_mandi` int(11) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `sertifikasi` varchar(100) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `kamar_tidur` int(11) NOT NULL,
  `lantai` int(11) NOT NULL,
  `carport_garasi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `kota` enum('Jakarta','Bogor','Depok','') NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `maps` varchar(400) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inforumah`
--

INSERT INTO `inforumah` (`id`, `nama_pemilik`, `email`, `telepon`, `tipe`, `luas_tanah`, `kamar_mandi`, `fasilitas`, `sertifikasi`, `luas_bangunan`, `kamar_tidur`, `lantai`, `carport_garasi`, `alamat`, `harga`, `gambar`, `kota`, `provinsi`, `maps`, `deskripsi`, `kode_pos`, `created_at`) VALUES
(4, 'Rastya', 'Rastya@gmail.com', '081211118888', 'Rumah', 221, 2, 'AC, Garden', 'SHM - Sertifikat Hak Milik', 220, 4, 2, 'Stove', 'Jln. Menteng', '1000000000', '609170f886b31.jpeg,609170f8874a2.jpeg,609170f887dd6.jpeg', 'Bogor', 'Jawa Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4781.9653271738125!2d106.78088282264913!3d-6.586196325607473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c461c298a19b%3A0x1c00c5eb51c821c0!2sWest%20Bogor%2C%20Bogor%20City%2C%20West%20Java%2016111!5e0!3m2!1sen!2sid!4v1620148859972!5m2!1sen!2sid', 'Kamu bisa langsung survey.\n-Pajak pembeli ditanggung penjual\n-Termasuk Biaya AJB.\n-Bonus melimpah (Ada difoto)', '16111', '2021-05-04 06:02:42'),
(8, 'Aditiya Nugroho', 'aditiyanh01@gmail.com', '081211112222', 'Rumah', 115, 2, 'AC', 'SHM', 105, 3, 1, '-', 'Jln. Sawangan', '620000000', '6092a9b6118f2.jpeg,6092a9b6120d8.jpeg,6092a9b6126c4.jpeg', 'Depok', 'Jawa Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63439.512017623536!2d106.7329413028985!3d-6.397931814844099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e8d8d42175d7%3A0x94a2a913944d3643!2sSawangan%2C%20Depok%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1620224386593!5m2!1sen!2sid', 'Tidak Ada', '16524', '2021-05-05 14:20:38'),
(9, 'Rahul Asrialdi', 'rahulasrialdi@gmail.com', '0872896753', 'Rumah', 195, 2, 'AC, Garden', 'SHM', 188, 4, 1, 'Stove', 'Jln. Dupa', '870000000', '6092aade756d8.jpeg,6092aade75f26.jpeg,6092aade76795.jpeg', 'Bogor', 'Jawa Barat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.43292422797!2d106.80985451147218!3d-6.592991398582474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d14706132b%3A0x74920b82aecd90fe!2sJl.%20Dupa%2C%20RT.07%2FRW.09%2C%20Tegallega%2C%20Kecamatan%20Bogor%20Tengah%2C%20Kota%20Bogor%2C%20Jawa%20Barat%2016129!5e0!3m2!1sen!2sid!4v1620224689773!5m2!1sen!2sid', 'Rumah Di Jamin Bagus', '16273', '2021-05-05 14:25:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petinggi_perusahaan`
--

CREATE TABLE `petinggi_perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pendapatan` varchar(35) NOT NULL,
  `jabatan` enum('CEO','CTO','COO','CFO') NOT NULL,
  `negara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petinggi_perusahaan`
--

INSERT INTO `petinggi_perusahaan` (`id`, `nama`, `pendapatan`, `jabatan`, `negara`) VALUES
(1, 'Izza Zahra Rastya', '10000000', 'CTO', 'Indonesia'),
(2, 'Muhammad Raqwan', '10000000', 'CTO', 'Indonesia'),
(3, 'Muhammad Andika', '10000000', 'COO', 'Indonesia'),
(4, 'Ahmad Ridho', '10000000', 'CFO', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inforumah`
--
ALTER TABLE `inforumah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petinggi_perusahaan`
--
ALTER TABLE `petinggi_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `inforumah`
--
ALTER TABLE `inforumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `petinggi_perusahaan`
--
ALTER TABLE `petinggi_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
