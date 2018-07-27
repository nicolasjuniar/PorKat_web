-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 06:23 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `porkat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `katasandi` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `id_pengguna`, `katasandi`, `nama_admin`) VALUES
(1, 'admin', 'admin', 'admin nico');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detailpesan`
--

CREATE TABLE `tbl_detailpesan` (
  `id_detailpesan` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `waktu_pengantaran` datetime NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'belum diantar',
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detailpesan`
--

INSERT INTO `tbl_detailpesan` (`id_detailpesan`, `id_pesan`, `waktu_pengantaran`, `status`, `id_menu`) VALUES
(71, 6, '2018-07-20 02:30:00', 'belum diantar', 1),
(72, 6, '2018-07-21 02:30:00', 'belum diantar', 1),
(73, 6, '2018-07-22 02:30:00', 'belum diantar', 1),
(74, 6, '2018-07-23 02:30:00', 'belum diantar', 1),
(75, 6, '2018-07-24 02:30:00', 'belum diantar', 1),
(76, 6, '2018-07-25 02:30:00', 'belum diantar', 1),
(77, 6, '2018-07-26 02:30:00', 'belum diantar', 1),
(78, 7, '2018-07-20 03:00:00', 'belum diantar', 3),
(79, 7, '2018-07-21 03:00:00', 'belum diantar', 3),
(80, 7, '2018-07-22 03:00:00', 'belum diantar', 3),
(81, 7, '2018-07-23 03:00:00', 'belum diantar', 3),
(82, 7, '2018-07-24 03:00:00', 'belum diantar', 3),
(83, 7, '2018-07-25 03:00:00', 'belum diantar', 3),
(84, 7, '2018-07-26 03:00:00', 'belum diantar', 3),
(85, 8, '2018-07-20 02:00:00', 'belum diantar', 4),
(86, 8, '2018-07-21 02:00:00', 'belum diantar', 4),
(87, 8, '2018-07-22 02:00:00', 'belum diantar', 4),
(88, 8, '2018-07-23 02:00:00', 'belum diantar', 4),
(89, 8, '2018-07-24 02:00:00', 'belum diantar', 4),
(90, 8, '2018-07-25 02:00:00', 'belum diantar', 4),
(91, 8, '2018-07-26 02:00:00', 'belum diantar', 4),
(92, 9, '2018-07-20 03:40:00', 'belum diantar', 2),
(93, 9, '2018-07-21 03:40:00', 'belum diantar', 2),
(94, 9, '2018-07-22 03:40:00', 'belum diantar', 2),
(95, 9, '2018-07-23 03:40:00', 'belum diantar', 2),
(96, 9, '2018-07-24 03:40:00', 'belum diantar', 2),
(97, 9, '2018-07-25 03:40:00', 'belum diantar', 2),
(98, 9, '2018-07-26 03:40:00', 'belum diantar', 2),
(99, 10, '2018-07-20 15:45:00', 'belum diantar', 1),
(100, 10, '2018-07-20 14:47:00', 'belum diantar', 3),
(101, 10, '2018-07-21 15:45:00', 'belum diantar', 1),
(102, 10, '2018-07-21 14:47:00', 'belum diantar', 3),
(103, 10, '2018-07-22 15:45:00', 'belum diantar', 1),
(104, 10, '2018-07-22 14:47:00', 'belum diantar', 3),
(105, 10, '2018-07-23 15:45:00', 'belum diantar', 1),
(106, 10, '2018-07-23 14:47:00', 'belum diantar', 3),
(107, 10, '2018-07-24 15:45:00', 'belum diantar', 1),
(108, 10, '2018-07-24 14:47:00', 'belum diantar', 3),
(109, 10, '2018-07-25 15:45:00', 'belum diantar', 1),
(110, 10, '2018-07-25 14:47:00', 'belum diantar', 3),
(111, 10, '2018-07-26 15:45:00', 'belum diantar', 1),
(112, 10, '2018-07-26 14:47:00', 'belum diantar', 3),
(113, 11, '2018-07-20 15:54:00', 'belum diantar', 1),
(114, 11, '2018-07-20 13:54:00', 'belum diantar', 2),
(115, 11, '2018-07-20 16:54:00', 'belum diantar', 4),
(116, 11, '2018-07-21 15:54:00', 'belum diantar', 1),
(117, 11, '2018-07-21 13:54:00', 'belum diantar', 2),
(118, 11, '2018-07-21 16:54:00', 'belum diantar', 4),
(119, 11, '2018-07-22 15:54:00', 'belum diantar', 1),
(120, 11, '2018-07-22 13:54:00', 'belum diantar', 2),
(121, 11, '2018-07-22 16:54:00', 'belum diantar', 4),
(122, 11, '2018-07-23 15:54:00', 'belum diantar', 1),
(123, 11, '2018-07-23 13:54:00', 'belum diantar', 2),
(124, 11, '2018-07-23 16:54:00', 'belum diantar', 4),
(125, 11, '2018-07-24 15:54:00', 'belum diantar', 1),
(126, 11, '2018-07-24 13:54:00', 'belum diantar', 2),
(127, 11, '2018-07-24 16:54:00', 'belum diantar', 4),
(128, 11, '2018-07-25 15:54:00', 'belum diantar', 1),
(129, 11, '2018-07-25 13:54:00', 'belum diantar', 2),
(130, 11, '2018-07-25 16:54:00', 'belum diantar', 4),
(131, 11, '2018-07-26 15:54:00', 'belum diantar', 1),
(132, 11, '2018-07-26 13:54:00', 'belum diantar', 2),
(133, 11, '2018-07-26 16:54:00', 'belum diantar', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_katering`
--

CREATE TABLE `tbl_katering` (
  `id_katering` int(11) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `katasandi` varchar(50) NOT NULL,
  `nama_katering` varchar(100) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `rating` float NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `latitude` double NOT NULL DEFAULT '0',
  `no_verifikasi` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_katering`
--

INSERT INTO `tbl_katering` (`id_katering`, `id_pengguna`, `katasandi`, `nama_katering`, `no_telp`, `alamat`, `foto`, `rating`, `longitude`, `latitude`, `no_verifikasi`, `status`) VALUES
(1, 'katering1', '123456', 'Khalila Katering', '087372184592', 'Karang Geneng, Sendangadi, Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55285', 'mie_sosis.jpg', 3, 110.3595, -7.744242, '142531', 1),
(2, 'katering2', '123456', '\r\nDikatama Catering Jogja', '089234752820', 'Jl. Jenengan Raya,Yogyakarta', 'ayam_goreng.jpg', 2.5, 110.41999, -7.754652, '332212', 1),
(3, 'katering3', '123456', 'Katering Aneka Ragam', '081392581749', 'Purbayan, Yogyakarta', 'katering_aneka_ragam.jpg', 3, 110.401695, -7.827791, '123456', 1),
(4, 'katering4', '123456', 'Katering Swike Asli', '087321123214', 'Ambarukmo, Yogyakarta', 'swike.jpg', 2.67, 110.402329, -7.78338, '654321', 1),
(5, 'katering5', '123456', 'Katering Spesialis Sop', '089221718352', 'Jl. Kerta Muja Muju, Yogyakarta', 'katering_spesialis_sop.jpg', 4, 110.394145, -7.801977, '212121', 1),
(6, 'katering6', '123456', 'Katering Sate Tusuk', '082519843942', 'Jl. Letjen Suprapto No.1, Yogyakarta', 'katering_sate_tusuk.jpg', 3, 110.35599, -7.800973, '111222', 1),
(7, 'katering7', '123456', 'Katering Nasi Gurih', '088462851826', 'Jl. Taman Siswa 141-145, Yogyakarta', 'katering_nasi_gurih.jpg', 3.5, 110.376386, -7.814698, '221142', 1),
(8, '', '', '', '', '', '', 0, 0, 0, '123321', 1),
(9, '', '', '', '', '', '', 0, 0, 0, '322332', 1),
(10, '', '', '', '', '', '', 0, 0, 0, '142535', 1),
(11, '', '', '', '', '', '', 0, 0, 0, '313242', 1),
(12, '', '', '', '', '', '', 0, 0, 0, '111111', 1),
(13, '', '', '', '', '', '', 0, 0, 0, '654345', 1),
(14, '', '', '', '', '', '', 0, 0, 0, '321456', 1),
(15, 'kateringa', '123456', 'katering abcd', '0787878', 'Jl. Babarsari No.44', '', 0, 110.41487890625, -7.7798025, '687449', 1),
(16, 'katerindd', '123456', 'katering abcd', '0787878', 'Jl. Babarsari No.44', 'IMG_20180720_140019.jpg', 0, 110.41487890625, -7.7798025, '943920', 1),
(17, '', '', '', '', '', '', 0, 0, 0, '991934', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_katering` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `foto`, `harga`, `id_katering`, `status`) VALUES
(1, 'Mie Sosis', 'mie_sosis.jpg', 12500, 1, 1),
(2, 'Nasi Goreng', 'nasi_goreng.jpg', 10000, 1, 1),
(3, 'Kepiting', 'kepiting.jpg', 13000, 1, 1),
(4, 'Udang Goreng', 'udang_goreng.jpg', 15000, 1, 1),
(5, 'Ayam Goreng', 'ayam_goreng.jpg', 16500, 2, 1),
(6, 'Resoles', 'resoles.jpg', 14500, 2, 1),
(7, 'Lemper', 'lemper.jpg', 17000, 2, 1),
(8, 'Ayam Bakar', 'ayam_bakar.jpg', 12000, 2, 1),
(9, 'Magelangan', 'magelangan.jpg', 13000, 3, 1),
(10, 'lantai digoreng nyam nyam nyam', 'IMG_20180719_23729.jpg', 8000000, 1, 0),
(11, 'menu', 'IMG_20180720_140209.jpg', 15000, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `katasandi` varchar(50) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `id_pengguna`, `katasandi`, `no_telp`, `nama_lengkap`, `alamat`, `status`) VALUES
(1, 'nicolasjuniar', '123456', '1234567775', 'nicolas', 'jogja', 1),
(2, 'nico', '123456', '087321', 'nico', 'alamat2', 1),
(3, 'pelanggan3', '12345678', '087321', 'pelanggan 2', 'alamat2', 1),
(4, 'pelanggan4', '12345678', '087837516501', 'gaha', 'ahha', 1),
(5, 'pelanggan5', '12345678', '0875431', 'haha', 'ahah', 1),
(6, 'nicolasjuniar', '12345678', '087837516501', 'nicolas juniar', 'gomvong', 1),
(7, 'pelangganz', '12345678', '089938221', 'pelanggan zxc', 'indonesia', 1),
(8, 'pelanggansetia', '12345678', '087554233619', 'coba2', 'jauh', 1),
(9, 'cobaraw', '12345678', '087837516501', 'raw coba coba', 'jogja', 1),
(10, 'coba', '12341234', '0852741963', 'coba', 'yogya', 1),
(11, 'nico', '112233', '0877687645865', 'nicolas juniar', 'Jalan Babarsari 44, Caturtunggal', 1),
(12, 'nicolas', '123456', '087837516501', 'nicolas juniar', 'Jalan Laksda Adisucipto 15, Caturtunggal', 1),
(13, 'nicoblmterdaftar', '123456', '08111111', 'nicolas', 'Jl. Lembah UGM', 1),
(14, 'abcd', '123456', '08754546', 'nicolas juniar', 'Jl. Babarsari No.41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_katering` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `nota` varchar(50) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `longitude` double NOT NULL DEFAULT '0',
  `latitude` double NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `id_pelanggan`, `id_katering`, `tgl_mulai`, `tgl_selesai`, `catatan`, `nota`, `alamat`, `longitude`, `latitude`, `total`, `status`) VALUES
(6, 2, 1, '2018-07-20', '2018-07-27', '', 'IMG_20180720_112537.jpg', 'Jl. Seturan Raya No.3', 110.41061328125, -7.7660675, 87500, 'sedang berlangsung'),
(7, 2, 1, '2018-07-20', '2018-07-27', '', 'IMG_20180720_112523.jpg', 'Jl. Garuni II', 110.40879296875, -7.7755175, 91000, 'sedang berlangsung'),
(8, 2, 1, '2018-07-20', '2018-07-27', '', 'IMG_20180720_112458.jpg', 'Jl. Babarsari No.1A', 110.41587109375, -7.7741475, 105000, 'sedang berlangsung'),
(9, 2, 1, '2018-07-20', '2018-07-27', '', 'IMG_20180720_112358.jpg', 'Jl. K.H. Muhdi No.126', 110.42276171875, -7.7812525, 70000, 'sedang berlangsung'),
(10, 14, 1, '2018-07-20', '2018-07-27', 'taruh di meja', 'IMG_20180720_135044.jpg', 'Jl. Babarsari No.27', 110.41525390625, -7.7772425, 178500, 'sedang berlangsung'),
(11, 14, 1, '2018-07-20', '2018-07-27', 'kirim ke kamar no 1', '', 'Jl. Babarsari No.44', 110.41484765625, -7.7792975, 262500, 'melakukan pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `ulasan` varchar(300) NOT NULL,
  `rating` float NOT NULL,
  `waktu_ulasan` datetime NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_katering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id_ulasan`, `ulasan`, `rating`, `waktu_ulasan`, `id_pelanggan`, `id_katering`) VALUES
(3, 'menu terlalu sedikit gan', 2, '2017-11-15 15:06:22', 3, 1),
(4, 'kasih 3 dulu, kalo bagus dinaikkin', 3, '2017-11-15 15:06:22', 4, 1),
(5, 'good', 4, '2017-11-15 15:06:22', 5, 1),
(9, '3 bintang', 3, '2017-11-18 02:06:39', 1, 3),
(10, '2 star', 2, '2017-11-18 02:11:04', 1, 6),
(13, 'frog?', 5, '2017-11-20 00:49:12', 10, 4),
(14, 'tengkorak', 1, '2017-11-20 00:26:42', 10, 2),
(15, '4 bintang', 4, '2017-11-20 13:47:14', 6, 6),
(16, 'euy', 2, '2017-11-22 13:49:46', 6, 4),
(17, 'madu 3 bintang', 3, '2017-11-22 12:17:03', 6, 3),
(26, '2 bbbb', 2, '2017-11-22 12:22:24', 6, 1),
(31, 'good', 4, '2017-11-22 15:00:30', 1, 1),
(42, 'sa', 4, '2017-11-28 03:51:05', 10, 7),
(43, 'nigi', 3, '2018-03-05 01:42:58', 1, 1),
(46, 'hehe', 3, '2018-03-05 02:05:22', 0, 0),
(47, 'bagus', 3, '2018-03-11 19:27:10', 0, 0),
(55, 'hehe', 4, '2018-03-11 22:43:15', 1, 2),
(56, 'abcdllsks', 4, '2018-03-11 22:54:55', 1, 5),
(57, '1 bintang', 1, '2018-06-19 14:31:48', 2, 4),
(63, 'bagus', 3, '2018-07-19 01:36:57', 2, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_detailpesan`
--
ALTER TABLE `tbl_detailpesan`
  ADD PRIMARY KEY (`id_detailpesan`);

--
-- Indexes for table `tbl_katering`
--
ALTER TABLE `tbl_katering`
  ADD PRIMARY KEY (`id_katering`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_detailpesan`
--
ALTER TABLE `tbl_detailpesan`
  MODIFY `id_detailpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `tbl_katering`
--
ALTER TABLE `tbl_katering`
  MODIFY `id_katering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
