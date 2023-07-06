-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siforma`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `nama_perusahaan`, `no_hp`, `email`, `judul`, `deskripsi`) VALUES
(1, 'Foods Ordering', '62+ 82295153183', 'azmiiskandar0@gmail.com', 'Important to eat fruit', 'Eating fruit provides health benefits — people who eat more fruits and vegetables as part of an overall healthy diet are likely to have a reduced risk of some chronic diseases. Fruits provide nutrients vital for health and maintenance of your body.\r\n\r\nFruits are sources of many essential nutrients that are underconsumed, including potassium, dietary fiber, vitamin C, and folate (folic acid).\r\n\r\nMost fruits are naturally low in fat, sodium, and calories. None have cholesterol.');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_rekening`, `nomor_rekening`) VALUES
(1, 'Mandiri', 'Moch Azmi Iskandar', '177-000-660-547-8');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `subject`, `deskripsi`) VALUES
(4, 'salsa', 'sadiyyahsalsa283@gmail.com', 'saran', 'sebaiknya');

-- --------------------------------------------------------

--
-- Table structure for table `makam`
--

CREATE TABLE `makam` (
  `id_makam` int(11) NOT NULL,
  `nama_makam` varchar(255) NOT NULL,
  `jml_makam` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makam`
--

INSERT INTO `makam` (`id_makam`, `nama_makam`, `jml_makam`, `gambar`) VALUES
(9, 'Blok C', '35', 'makam111.jpg'),
(10, 'Blok B', '43', 'makam21.jpeg'),
(11, 'Blok A', '12', 'makam13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_makam` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` float NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_makam`, `nama_paket`, `deskripsi`, `harga`, `foto`) VALUES
(6, 11, 'Exclusive', '&gt; Pengurusan Jenazah\r\n&gt; Pengurusan Pemakaman\r\n&gt; Lahan TPU\r\n&gt; Transportasi Jenazah\r\n&gt; Buku Yasin 30 pcs\r\n&gt; Batu nisan', 1500000, 'exclu.png'),
(7, 10, 'Mid Range', '&gt; Pengurusan Jenazah\r\n&gt; Pengurusan Pemakaman\r\n&gt; Lahan TPU\r\n&gt; Transportasi Jenazah\r\n&gt; Buku Yasin 30 pcs', 1000000, 'MidRange.png'),
(8, 9, 'Paket Lite', '&gt; Pengurusan Jenazah\r\n&gt; Pengurusan Pemakaman\r\n&gt; Lahan Tpu', 500000, 'Lite.png');

-- --------------------------------------------------------

--
-- Table structure for table `res_kategori`
--

CREATE TABLE `res_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_kategori`
--

INSERT INTO `res_kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Centinental'),
(3, 'Chinese'),
(4, 'Desserts'),
(7, 'American'),
(8, 'Vegan'),
(10, 'Drinks'),
(11, 'Boba'),
(12, 'Indonesian'),
(14, 'Makanan Sunda'),
(16, 'Italian');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_makam` int(11) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `nm_jenazah` varchar(255) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tanggal_wafat` date DEFAULT NULL,
  `tanggal_pemakaman` date DEFAULT NULL,
  `bukti_tf` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `success_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_users`, `id_paket`, `id_makam`, `nama_paket`, `nm_jenazah`, `tanggal_lahir`, `tanggal_wafat`, `tanggal_pemakaman`, `bukti_tf`, `qty`, `total`, `status`, `tanggal`, `success_date`) VALUES
(15, 2, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, 'Closed', '2021-06-16', '2021-06-21'),
(21, 2, 6, 7, 'Hot Dog', '', NULL, NULL, NULL, '', 3, 45000, 'Closed', '2021-06-21', '2021-06-21'),
(22, 2, 2, 9, 'Turkey Fajitas', '', NULL, NULL, NULL, '', 5, 100000, 'In Procces', '2021-06-21', '2021-06-21'),
(23, 2, 1, 8, 'Grilled Cheese Sandwich', '', NULL, NULL, NULL, '', 1, 70000, NULL, '2021-06-21', '2021-06-21'),
(25, 25, 13, 11, 'Nasi Cikur Khas Makanan Sunda', '', NULL, NULL, NULL, '', 1, 35000, 'Rejected', '2023-05-21', '2023-05-21'),
(26, 24, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, 'Closed', '2023-05-21', '2023-05-21'),
(27, 0, 16, 0, 'Paket VVIP', '', NULL, NULL, NULL, '', 2, 1800000, NULL, '2023-06-01', '2023-06-01'),
(28, 0, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, NULL, '2023-06-01', '2023-06-01'),
(30, 26, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, NULL, '2023-06-01', '2023-06-01'),
(31, 26, 7, 10, 'Ham Burger', '', NULL, NULL, NULL, '', 1, 50000, NULL, '2023-06-01', '2023-06-01'),
(32, 26, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, NULL, '2023-06-01', '2023-06-01'),
(33, 27, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, NULL, '2023-06-02', '2023-06-02'),
(34, 27, 7, 10, 'Ham Burger', '', NULL, NULL, NULL, '', 1, 50000, NULL, '2023-06-02', '2023-06-02'),
(35, 28, 14, 11, 'Nasi T.O Khas Tasikmalaya', '', NULL, NULL, NULL, '', 1, 15000, 'Closed', '2023-06-15', '2023-06-15'),
(37, 28, 8, 10, 'Paket Lite', '', NULL, NULL, NULL, '', 1, 500000, 'In Procces', '2023-06-16', '2023-06-16'),
(93, 24, 8, 6, 'Paket Lite', '', NULL, NULL, NULL, '', 1, 500000, NULL, '2023-06-19', '2023-06-19'),
(94, 24, 6, 6, 'Exclusive', '', NULL, NULL, NULL, '', 1, 2000000, NULL, '2023-06-19', '2023-06-19'),
(176, 30, 6, 11, 'Exclusive', 'Agus', '2023-06-01', '2023-06-30', '2023-06-30', 'bukti_tf302.png', 1, 1500000, NULL, '2023-06-21', '2023-06-21'),
(177, 30, 7, 10, 'Mid Range', 'Agus', '2023-06-01', '2023-06-30', '2023-06-30', 'bukti_tf302.png', 1, 1000000, 'Closed', '2023-06-21', '2023-06-21'),
(178, 30, 8, 9, 'Paket Lite', 'Agus', '2023-06-01', '2023-06-30', '2023-06-30', 'bukti_tf302.png', 2, 1000000, 'Closed', '2023-06-21', '2023-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `alamat_users` varchar(300) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `nama`, `no_hp`, `alamat_users`, `gambar`, `role_id`, `date`) VALUES
(1, 'admin@gmail.com', 'admin1234', 'Administrator', '', '', 'default.png', 1, '2021-06-01 22:20:13'),
(17, 'sasadeyeppo3@gmail.com', 'f62fe57b9068dec43aee7e57c7fdef9a', 'Min Yoongi', '08312132243', 'cikampek', 'ً_on_Twitter.jpg', 2, '2023-05-20 14:01:53'),
(24, 'admin@gmail.com', '7488e331b8b64e5794da3fa4eb10ad5d', 'admin', '', '', 'default.png', 1, '2023-05-21 07:49:06'),
(25, 'minyoongi@gmail.com', 'c49eb202fd70f9d7d57e36da97b392b7', 'Min Yoongi', '08312132243', 'cikampek', NULL, 2, '2023-05-21 07:54:01'),
(26, 'sadiyyahsalsa283@gmail.com', '127122839e43f71f388566ff015d361c', 'salsa', '08312132243', 'cikampek', NULL, 2, '2023-06-01 15:34:22'),
(27, 'ciaabel@gmail.com', 'ccc13559e6f58e4b297641399f53c9b1', 'cia', '08312132243', 'jakarta timur', NULL, 2, '2023-06-02 08:07:31'),
(28, 'sasadiyyah@gmail.com', '251dbb753a5db26ad05be09fe613b245', 'salsa', '08312132243', 'cikampek', NULL, 2, '2023-06-15 14:35:27'),
(29, 'salsady@gmail.com', '98fc36895ec14bd83e0ecfe341a33b87', 'salsa', '08312132243', '', 'default1.png', 2, '2023-06-19 05:54:31'),
(30, 'ikhsan@gmail.com', '4e9194a3bb65ab53e41247480905c391', 'Ikhsan', '08558359732', 'Cikampek', NULL, 1, '2023-06-20 08:42:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `makam`
--
ALTER TABLE `makam`
  ADD PRIMARY KEY (`id_makam`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `res_kategori`
--
ALTER TABLE `res_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `makam`
--
ALTER TABLE `makam`
  MODIFY `id_makam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `res_kategori`
--
ALTER TABLE `res_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
