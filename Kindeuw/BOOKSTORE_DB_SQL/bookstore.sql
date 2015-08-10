-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2015 at 05:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE IF NOT EXISTS `bahasa` (
  `id` int(10) unsigned NOT NULL,
  `opsi_bahasa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id`, `opsi_bahasa`) VALUES
(1, 'Indonesia'),
(2, 'Inggris'),
(3, 'Sunda'),
(4, 'Jawa'),
(5, 'Melayu');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL,
  `stok` int(11) NOT NULL,
  `Judul` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Penulis` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Penerbit` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `Deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `Banyak_halaman` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `stok`, `Judul`, `Penulis`, `Penerbit`, `Deskripsi`, `Banyak_halaman`, `Harga`, `created_at`, `updated_at`) VALUES
(35, 9, 'How To Be A Good Person', 'Fahmi Achmad Fauzi', 'PT.MAJU DJAYA', 'Buku ini adalah buku yang menceretiakan bagaimana seseorang mencoba untuk menjadi orang yang baik dan nyaman untuk orang lain', 140, 125000, '2015-08-04 18:43:48', '2015-08-06 01:20:50'),
(36, 15, 'Sekolah Bukan Lagi Tempat Belajar Yang Asik', 'Murid SMP Buangan', 'PT.GUNDALA GUNDA', 'Buku Yang Menceritakan Bagaimana Sulitnya Menjalani Hari Sebagai Murid SMP Di Salah Satu Kota Di Indonesia!~', 250, 54850, '2015-08-05 07:04:05', '2015-08-05 07:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `buku_bahasa`
--

CREATE TABLE IF NOT EXISTS `buku_bahasa` (
  `id` int(10) unsigned NOT NULL,
  `id_buku` int(10) unsigned NOT NULL,
  `id_bahasa` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buku_bahasa`
--

INSERT INTO `buku_bahasa` (`id`, `id_buku`, `id_bahasa`) VALUES
(2, 35, 1),
(3, 35, 2),
(4, 36, 1),
(5, 36, 2),
(6, 36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `buku_genre`
--

CREATE TABLE IF NOT EXISTS `buku_genre` (
  `id` int(10) unsigned NOT NULL,
  `id_buku` int(10) unsigned NOT NULL,
  `id_genre` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buku_genre`
--

INSERT INTO `buku_genre` (`id`, `id_buku`, `id_genre`) VALUES
(3, 35, 4),
(4, 35, 5),
(5, 36, 1),
(6, 36, 2),
(7, 36, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(10) unsigned NOT NULL,
  `opsi_genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `opsi_genre`) VALUES
(1, 'Cerita'),
(2, 'Komedi'),
(3, 'Anak-Anak'),
(4, 'Dewasa'),
(5, 'Remaja'),
(6, 'Romansa'),
(7, 'Horor'),
(9, 'Edukasi'),
(10, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pemilik_rekening` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_bank` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_rekening` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `transfer_ke_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`id_transaksi`, `nama_pemilik_rekening`, `nama_bank`, `nomor_rekening`, `transfer_ke_no`, `email`, `created_at`, `updated_at`) VALUES
(18, 'Fahmi Achmad Fauzi', 'Mandiri', '087382192783921', '083278843789542', 'chiromatsu@gmail.com', '2015-08-05 00:56:50', '2015-08-05 00:56:50'),
(19, 'Purwa Darozatun', 'Mandiri', '0445132254988', '083278843789542', 'chiromatsu@gmail.com', '2015-08-05 08:13:51', '2015-08-05 08:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(10) unsigned NOT NULL,
  `opsi_kota` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `opsi_kota`) VALUES
(1, 'CIMAHI'),
(2, 'BANDUNG');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE IF NOT EXISTS `kurir` (
  `id` int(10) unsigned NOT NULL,
  `opsi_kurir` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `opsi_kurir`) VALUES
(1, 'JNE'),
(2, 'TIKI'),
(3, 'KINDEUW PACKET');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_21_222019_table_bookstore', 2),
('2015_07_06_061839_create_kindeuws_table', 3),
('2015_07_24_034945_create_table_user', 3),
('2015_07_24_064627_create_model__users_table', 4),
('2015_07_24_074538_user', 5),
('2015_07_24_081640_user', 6),
('2015_07_27_073205_reset_password', 7),
('2015_07_28_024017_tabel_user', 8),
('2015_07_31_022104_tabel_transaksi', 9),
('2015_07_31_032405_konfirmasi_pembayaran', 9),
('2015_07_31_033419_tabel_books', 10),
('2015_07_31_070703_bahasa', 11),
('2015_07_31_071109_genre', 11),
('2015_08_03_033934_bahasa_dan_genre_buku', 12),
('2015_08_03_044717_create_bahasa_models_table', 13),
('2015_08_03_044840_create_bahasa_genres_table', 13),
('2015_08_03_071928_Buku_Bahasa', 14),
('2015_08_03_081444_Buku_Genre', 14),
('2015_08_04_024031_konfirm_tran', 17),
('2015_08_04_015645_kurir', 19),
('2015_08_04_023910_transaksi', 20),
('2015_08_04_021512_tansaksi_kurir', 21),
('2015_08_04_025935_create_transaksis_table', 22),
('2015_08_04_071038_transaksi_status', 22),
('2015_08_05_062802_create_konfirmasis_table', 23),
('2015_08_06_091533_kota', 23),
('2015_08_06_091811_create_kotas_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `reset_pass`
--

CREATE TABLE IF NOT EXISTS `reset_pass` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_telp` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status_transfer` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_admin_terima` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_terima_barang` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_buku` int(11) NOT NULL,
  `Judul` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Harga` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `Total` int(11) DEFAULT NULL,
  `kurir` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `email`, `nama`, `alamat`, `kota`, `no_telp`, `status_transfer`, `status_admin_terima`, `status_terima_barang`, `id_buku`, `Judul`, `Harga`, `jumlah_beli`, `Total`, `kurir`, `created_at`, `updated_at`) VALUES
(22, 'chiromatsu@gmail.com', 'Fahmi Achmad Fauzi', 'jln margaluyu no94 rt 04 rw 02 cimahi', NULL, '081931226131', '0', '0', '0', 35, 'How To Be A Good Person', 125000, 1, 125000, 3, '2015-08-06 01:21:32', '2015-08-06 01:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `verified`, `created_at`, `updated_at`) VALUES
(1, 'Fahmi Achmad Fauzi', 'furokawa', 'chiromatsu@gmail.com', '$2y$10$yHMLvYOnJjTBs98N4EtUw.ndslia84M6x790LFG2BA9eMmfgDdeZW', 'tMNv2H3QiOlwK9tqjOC7jp79gf0TCkKdmnkd63TogQATaViJ1BqUlDuTUZqO', '', '2015-07-28 00:42:51', '2015-08-07 00:51:40'),
(2, 'Rasphberry pi', 'I''am Berry', 'berry@rasphberry.com', '$2y$10$cA6sR35.aAbm/BZ1eT8BS.pUHcGFD/mzeZYJPAXWv.sOTWeElGLCW', 'tE3gK3KVY0N1uUrh7t9Sjs16bVgJ1OBRq4nyRHkhd8PzmJoRFNZSJuMiNm9y', '', '2015-07-29 19:33:04', '2015-07-29 19:34:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_bahasa`
--
ALTER TABLE `buku_bahasa`
  ADD PRIMARY KEY (`id`), ADD KEY `buku_bahasa_id_buku_foreign` (`id_buku`), ADD KEY `buku_bahasa_id_bahasa_foreign` (`id_bahasa`);

--
-- Indexes for table `buku_genre`
--
ALTER TABLE `buku_genre`
  ADD PRIMARY KEY (`id`), ADD KEY `buku_genre_id_buku_foreign` (`id_buku`), ADD KEY `buku_genre_id_genre_foreign` (`id_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_pass`
--
ALTER TABLE `reset_pass`
  ADD PRIMARY KEY (`username`), ADD KEY `reset_pass_email_index` (`email`), ADD KEY `reset_pass_token_index` (`token`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `buku_bahasa`
--
ALTER TABLE `buku_bahasa`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `buku_genre`
--
ALTER TABLE `buku_genre`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku_bahasa`
--
ALTER TABLE `buku_bahasa`
ADD CONSTRAINT `buku_bahasa_id_bahasa_foreign` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `buku_bahasa_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `books` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buku_genre`
--
ALTER TABLE `buku_genre`
ADD CONSTRAINT `buku_genre_id_buku_foreign` FOREIGN KEY (`id_buku`) REFERENCES `books` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `buku_genre_id_genre_foreign` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
