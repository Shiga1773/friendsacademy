-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 02:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friend`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(10) NOT NULL,
  `hak_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `hak_akses`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Guru'),
(4, 'Private_A'),
(5, 'Private_B'),
(6, 'Semi_Private'),
(7, 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga_p` varchar(100) NOT NULL,
  `peserta` varchar(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `pertemuan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `kelas`, `harga_p`, `peserta`, `waktu`, `pertemuan`) VALUES
(1, 'Private A', '82000', '1', '25', '8'),
(2, 'Private B', '90000', '1', '50', '8'),
(3, 'Semi Private', '100000', '5', '50', '8'),
(4, 'Group', '110000', '25', '50', '8');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_book`
--

CREATE TABLE `jadwal_book` (
  `id` int(11) NOT NULL,
  `id_guru` varchar(11) NOT NULL,
  `tanggal` varchar(11) DEFAULT NULL,
  `id_pengguna` varchar(11) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `jam_kelas_b` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_book_m`
--

CREATE TABLE `jadwal_book_m` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_book_xl`
--

CREATE TABLE `jadwal_book_xl` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kelas`
--

CREATE TABLE `jadwal_kelas` (
  `id` int(11) NOT NULL,
  `id_guru` varchar(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `jam_kelas` varchar(50) NOT NULL,
  `jam_kelas_b` varchar(50) NOT NULL,
  `jenis_kelas` varchar(50) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kelas`
--

INSERT INTO `jadwal_kelas` (`id`, `id_guru`, `nama_kelas`, `tanggal`, `jam_kelas`, `jam_kelas_b`, `jenis_kelas`, `reason`) VALUES
(74, '5', 'private', '2022-09-22', '12:30 - 12:55', '', 's1', ''),
(75, '5', 'private', '2022-09-09', '09:00 - 09:25', '', 's1', ''),
(76, '5', 'private', '2022-09-16', '13:00 - 13:25', '', 's1', ''),
(77, '5', 'private', '2022-09-30', '11:30 - 11:55', '', 's1', ''),
(78, '5', 'private', '2022-09-30', '12:30 - 12:55', '', 's1', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_m`
--

CREATE TABLE `kelas_m` (
  `id` int(11) NOT NULL,
  `id_pengguna` varchar(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_s`
--

CREATE TABLE `kelas_s` (
  `id` int(11) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `class_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_xl`
--

CREATE TABLE `kelas_xl` (
  `id` int(11) NOT NULL,
  `id_pengguna` varchar(11) NOT NULL,
  `id_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `kategori` enum('PO','Website','Produk','Garansi','Lainnya','Saran') NOT NULL,
  `lain` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keluhan` varchar(250) NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `session` char(100) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `nama2` varchar(35) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `hak_akses` enum('1','2','3','4','5','6','7') DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `pengalaman_mengajar` varchar(250) NOT NULL,
  `asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `ukuran`, `tipe`, `nama2`, `telp`, `email`, `bank`, `hak_akses`, `username`, `password`, `pendidikan_terakhir`, `pengalaman_mengajar`, `asal`) VALUES
(1, 'default.jpg', 1953452, 'image/jpeg', 'I Wayan Prawira', '081999016350', 'hyorinmaru.uzumaki@gmail.com', '', '1', 'admin', 'admin', 'a', 'b', ''),
(4, '66808e327dpp3.png', 719814, 'image/png', 'Chubb', '081907806366', 'hyorinmaru.uzumaki@gmail.com', '', '2', 'manager', 'manager', '', '', ''),
(5, 'f197002b9app2.png', 652644, 'image/png', 'Test Guru', '081907806366', 'hi3rd.sea.vanishing@gmail.com', '', '3', 'guru1', 'guru1', 'asdasdas', 'asdasdas', 'Indonesia'),
(10, 'f5df16d9bdpp.jpg', 40688, 'image/jpeg', 'Wayan prawira', '+6281999016350', 'hi3rd.sea.vanishing@gmail.com', 'BNI : 191-119-9638', '6', 'murid_s', 'murid_s', '', '', ''),
(16, '1f79b53a85pp5.png', 1852713, 'image/png', 'Wira', '01234567890', 'prawira0@gmail.com', '', '7', 'murid_g', 'murid_g', '', '', ''),
(19, 'c8632be6d9pp.jpg', 40688, 'image/jpeg', 'Test Guru2', '081999016350', 'hi3rd.sea.vanishing@gmail.com', '', '3', 'guru2', 'guru2', 'asdasdas', 'asdasdas', 'Indonesia'),
(20, '55487d77a3uramichi onisan.png', 1564319, 'image/png', 'Test Guru3', '+6281999016350', 'hi3rd.sea.vanishing@gmail.com', '', '3', 'guru3', 'guru3', 'asdasdas', 'asdasdas', 'Guatemala'),
(21, 'default.jpg', 7414, 'image/jpeg', 'Prawira', '', 'hyorinmaru.uzumaki@gmail.com', 'BCA : 288-191-1967', '5', 'murid_p2', 'murid_p2', '', '', ''),
(22, 'b61be50f3fStudents watching webinar on computer.jpg', 1882782, 'image/jpeg', 'test guru b', '+6281999016350', 'hi3rd.sea.vanishing@gmail.com', '', '3', 'd037 test guru b', 'b4b02e', 'asdas', 'dawdaw', 'Guatemala'),
(24, '168c002046nichijou.jpg', 57991, 'image/jpeg', 'Test user 1', '081907806366', 'prawira0@gmail.com', '', '', 'df1a Test user 1', '025ad2', '', '', ''),
(27, 'be8c66Belakang.jpg', 242534, 'image/jpeg', 'tes tes', '', 'akiyoshi.shiga@gmail.com', 'BCA : 288-191-1967', '4', '606e tes tes', 'ef12 tes tes', '', '', ''),
(28, '9725deDepan.jpg', 226675, 'image/jpeg', 'eeeee', '', 'akiyoshi.shiga@gmail.com', 'DKI : 428-0800-1273', '', '9920 eeeee', 'b1d0 eeeee', '', '', ''),
(29, '3631a6Belakang.jpg', 242534, 'image/jpeg', 'tes adminfd', '', 'akiyoshi.shiga@gmail.com', 'DKI : 428-0800-1273', '7', '9d0b tes adminfd', '2d7b tes adminfd', '', '', ''),
(30, '67c34ef149BELAKANG.jpg', 372609, 'image/jpeg', 'eff', '081907806366', 'akiyoshi.shiga@gmail.com', '', '2', '79c1 eff', '<br />\r\n<b>Notice</b>:  U', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_request`
--

CREATE TABLE `pengguna_request` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `tipe` varchar(20) DEFAULT NULL,
  `nama2` varchar(35) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `hak_akses` enum('4','5','6','7') DEFAULT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kelas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_request`
--

INSERT INTO `pengguna_request` (`id`, `nama`, `ukuran`, `tipe`, `nama2`, `telp`, `email`, `bank`, `hak_akses`, `username`, `password`, `tanggal`, `harga`, `kelas`) VALUES
(11, 'bb9a194.jpg', 155990, 'image/jpeg', 'I Wayan Prawira', '081999016350', 'hi3rd.sea.vanishing@gmail.com', 'BCA : 288-191-1967', '4', '26fb I Wayan Prawira', '6894 I Wayan Prawira', '11:29 PM  30/08/2022 ', '82000', 'Private_A');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_request_comment`
--

CREATE TABLE `pengguna_request_comment` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(60) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `editor_terakhir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telp` varchar(55) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `telp`, `pesan`, `tanggal`) VALUES
(2, 'Test', 'prawira0@gmail.com', '+6281999016350', 'test Pesan', '06:14:49 21/09/2021');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama_pemesan` varchar(60) NOT NULL,
  `alamat_pemesan` varchar(250) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `id_member` varchar(25) NOT NULL,
  `pesanan_akhir` varchar(1000) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `tanggal_pesanan` varchar(50) NOT NULL,
  `kode_batal_po` varchar(20) NOT NULL,
  `catatan` varchar(500) NOT NULL,
  `status` enum('Pesanan di Terima','Pesanan Sedang di Proses','Stok Kosong','Menunggu Kiriman Distributor','Pesanan dalam Pengiriman','Pesanan sudah Terkirim','Produk tidak di jual lagi','Menunggu Pembayaran') NOT NULL,
  `status_pembayaran` enum('Belum di Bayarkan','Pembayaran sudah Di Terima') NOT NULL,
  `terbilang` varchar(255) NOT NULL,
  `po_batal` varchar(1000) NOT NULL,
  `editor_terakhir` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `ukuran`, `tipe`, `nama_pemesan`, `alamat_pemesan`, `telp`, `id_member`, `pesanan_akhir`, `no_po`, `total_bayar`, `tanggal_pesanan`, `kode_batal_po`, `catatan`, `status`, `status_pembayaran`, `terbilang`, `po_batal`, `editor_terakhir`, `jumlah`, `tahun`, `bulan`) VALUES
(11, 'aff272815f 2021-02-22-13-12-23_0.png', 101077, 'image/png', 'test member  ', 'test member  ', '', '7  ', 'Nama Produk : bawang Goreng,Â Jumlah Pesanan : 2,Â Harga satuan : Rp. 5,000.00,Â Total Harga: Rp. 10,000.00\r\n ', '90/PO-CVDP/03/2021', '10000', '23/03/2021', '4d81f', 'Kosongkan Jika dirasa tidak perlu', 'Pesanan di Terima', 'Belum di Bayarkan', ' Sepuluh Ribu  Rupiah\r\n', '', '', 1, 2021, 'Maret');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `jenis_produk` enum('Bawang Goreng','Bumbu','Sambal','Dreassing','Ayam','Babi','Sapi','Saos','Sayur') NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `tanggal_produksi` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `ppn` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sender` varchar(25) NOT NULL,
  `editor_terakhir` varchar(50) NOT NULL,
  `tanggal_input` varchar(50) NOT NULL,
  `deskripsi` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `ukuran`, `tipe`, `jenis_produk`, `nama2`, `tanggal_produksi`, `harga`, `ppn`, `jumlah`, `sender`, `editor_terakhir`, `tanggal_input`, `deskripsi`) VALUES
(8, '1e591403ff 2021-02-22-13-12-23_0.png', 101077, 'image/png', 'Bawang Goreng', 'bawang Goreng', '2021-03-22', 5000, 0, 50, 'orang_gudang', '', '23/03/2021', 'Bawang Yang di Goreng'),
(9, '8bb6fe84b8 2021-01-25-21-43-05_0.png', 1461543, 'image/png', 'Bumbu', 'bumbu ', '2021-03-23', 12000, 0, 6, 'orang_gudang', '', '23/03/2021', 'penyimpanan');

-- --------------------------------------------------------

--
-- Table structure for table `produk_image`
--

CREATE TABLE `produk_image` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `sender` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_produk`
--

CREATE TABLE `review_produk` (
  `id` int(11) NOT NULL,
  `foto_copy` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_produk`
--

INSERT INTO `review_produk` (`id`, `foto_copy`, `nama_produk`, `id_produk`, `nama_user`, `email`, `tanggal`, `review`) VALUES
(2, '8bb6fe84b8 2021-01-25-21-43-05_0.png', 'bumbu ', 9, 'asda', '', '23/03/2021', 'asffd');

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

CREATE TABLE `trial` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trial`
--

INSERT INTO `trial` (`id`, `email`, `nama`, `telp`, `tanggal`) VALUES
(6, 'hi3rd.sea.vanishing@gmail.com', 'rrrrr', '+6281999016350', ' 30/08/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_book`
--
ALTER TABLE `jadwal_book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tanggal` (`tanggal`,`jam_kelas`),
  ADD UNIQUE KEY `tanggal_2` (`tanggal`,`jam_kelas`);

--
-- Indexes for table `jadwal_book_m`
--
ALTER TABLE `jadwal_book_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_book_xl`
--
ALTER TABLE `jadwal_book_xl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_m`
--
ALTER TABLE `kelas_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas_s`
--
ALTER TABLE `kelas_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`class_id`(10)) USING BTREE;

--
-- Indexes for table `kelas_xl`
--
ALTER TABLE `kelas_xl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pengguna_request`
--
ALTER TABLE `pengguna_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pengguna_request_comment`
--
ALTER TABLE `pengguna_request_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_produk`
--
ALTER TABLE `review_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trial`
--
ALTER TABLE `trial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal_book`
--
ALTER TABLE `jadwal_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `jadwal_book_m`
--
ALTER TABLE `jadwal_book_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal_book_xl`
--
ALTER TABLE `jadwal_book_xl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jadwal_kelas`
--
ALTER TABLE `jadwal_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `kelas_m`
--
ALTER TABLE `kelas_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas_s`
--
ALTER TABLE `kelas_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kelas_xl`
--
ALTER TABLE `kelas_xl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pengguna_request`
--
ALTER TABLE `pengguna_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna_request_comment`
--
ALTER TABLE `pengguna_request_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_produk`
--
ALTER TABLE `review_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trial`
--
ALTER TABLE `trial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
