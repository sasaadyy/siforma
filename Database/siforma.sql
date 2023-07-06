-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 06:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
(8, 'euis', 'malaisnaa23@gmail.com', 'makam', 'saran saya tingkatkan kualitas'),
(9, 'lani', 'malaisnaa23@gmail.com', 'paket makam', 'masih positif'),
(10, 'della', 'dellanurwati@gmail.com', 'pertanyaan', 'apakah kantor TPU buka pada hari weekend?');

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
(9, 'Blok C', '35', 'makamin1.jpg'),
(10, 'Blok B', '43', 'makam21.jpeg'),
(11, 'Blok A', '20', 'makam_mewah1.jpg'),
(14, 'Blok A', '12', 'makam14.jpg');

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
(8, 9, 'Paket Lite', '&gt; Pengurusan Jenazah\r\n&gt; Pengurusan Pemakaman\r\n&gt; Lahan Tpu', 550000, 'Lite.png');

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
(186, 28, 7, 10, 'Mid Range', 'moka', '2023-07-04', '2023-07-04', '2023-07-04', 'bukti_tf.jpeg', 1, 1000000, NULL, '2023-07-04', '2023-07-04'),
(187, 32, 8, 9, 'Paket Lite', 'aan', '1994-05-04', '2017-02-15', '2017-02-16', 'bukti_tf.jpeg', 1, 500000, 'Closed', '2023-07-04', '2023-07-04'),
(188, 32, 6, 11, 'Exclusive', 'lana', '1999-01-27', '2021-08-18', '2021-08-19', 'bukti_tf.jpeg', 1, 1500000, 'In Procces', '2023-07-04', '2023-07-04'),
(189, 33, 8, 9, 'Paket Lite', 'ala', '1998-02-24', '2018-04-07', '2018-04-08', 'bukti_tf.jpeg', 1, 500000, 'Rejected', '2023-07-04', '2023-07-05'),
(190, 28, 6, 11, 'Exclusive', 'una', '2005-01-04', '2023-07-04', '2023-07-05', 'bukti_tf.jpeg', 1, 1500000, 'Closed', '2023-07-04', '2023-07-05'),
(196, 28, 6, 11, 'Exclusive', 'Melasari', '2019-07-05', '2023-07-05', '2023-07-05', 'bukti_tf.jpeg', 1, 1500000, 'Closed', '2023-07-05', '2023-07-05'),
(199, 28, 6, 11, 'Exclusive', 'gege', '2023-07-05', '2023-07-05', '2023-07-05', 'WhatsApp Image 2023-07-05 at 8_54_04 PM.jpeg', 1, 1500000, 'Closed', '2023-07-05', '2023-07-05');

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
  `role_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`, `nama`, `no_hp`, `alamat_users`, `role_id`, `date`) VALUES
(1, 'admin@gmail.com', 'admin1234', 'Administrator', '', '', 1, '2021-06-01 22:20:13'),
(17, 'sasadeyeppo3@gmail.com', 'f62fe57b9068dec43aee7e57c7fdef9a', 'Min Yoongi', '08312132243', 'cikampek', 2, '2023-05-20 14:01:53'),
(24, 'admin@gmail.com', '7488e331b8b64e5794da3fa4eb10ad5d', 'admin', '', '', 1, '2023-05-21 07:49:06'),
(25, 'minyoongi@gmail.com', 'c49eb202fd70f9d7d57e36da97b392b7', 'Min Yoongi', '08312132243', 'cikampek', 2, '2023-05-21 07:54:01'),
(26, 'sadiyyahsalsa283@gmail.com', '127122839e43f71f388566ff015d361c', 'salsa', '08312132243', 'cikampek', 2, '2023-06-01 15:34:22'),
(27, 'ciaabel@gmail.com', 'ccc13559e6f58e4b297641399f53c9b1', 'cia', '08312132243', 'jakarta barat', 2, '2023-06-02 08:07:31'),
(28, 'sasadiyyah@gmail.com', '251dbb753a5db26ad05be09fe613b245', 'salsa', '08312132243', 'cikampek', 2, '2023-06-15 14:35:27'),
(29, 'salsady@gmail.com', '98fc36895ec14bd83e0ecfe341a33b87', 'salsa', '08312132243', 'jakarta barat', 2, '2023-06-19 05:54:31'),
(30, 'ikhsan@gmail.com', '4e9194a3bb65ab53e41247480905c391', 'Ikhsan', '08558359732', 'Cikampek', 1, '2023-06-20 08:42:27'),
(32, 'malaisnaa23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'euis nurmala', '083816248875', 'malaisna23@gmail.com', 2, '2023-07-04 05:48:40'),
(33, 'anishaa24@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'ani', '087772565599', 'dawuan', 2, '2023-07-04 07:30:55');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `makam`
--
ALTER TABLE `makam`
  MODIFY `id_makam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
