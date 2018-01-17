-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 01:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `judul` varchar(1024) NOT NULL,
  `isi` varchar(2048) NOT NULL,
  `pengirim` varchar(12) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`judul`, `isi`, `pengirim`, `waktu`) VALUES
('Ini apa? kawan aku depan ngomong apa?', 'autis kau', 'DSN0001', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ikut_kuis`
--

CREATE TABLE `tb_ikut_kuis` (
  `kd_kuis` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `pila` varchar(1024) NOT NULL,
  `pilb` varchar(1024) NOT NULL,
  `pilc` varchar(1024) NOT NULL,
  `pild` varchar(1024) NOT NULL,
  `pile` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kirim_tugas`
--

CREATE TABLE `tb_kirim_tugas` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tugas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kls` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kirim_tugas`
--

INSERT INTO `tb_kirim_tugas` (`username`, `kd_tugas`, `kd_mk`, `kd_kls`, `path`, `upload`, `status`) VALUES
('150155201015', '2', 'TI0001', 'C', 'TUGAS_150155201015_TI0001_C_2.pdf', '2017-06-04 14:28:51', 1),
('150155201015', '2', 'TI0001', 'C', 'TUGAS_150155201015_TI0001_C_21.pdf', '2017-06-04 14:29:08', 1),
('150155201015', '2', 'TI0001', 'C', 'TUGAS_150155201015_TI0001_C_22.pdf', '2017-06-04 14:30:05', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_1.pdf', '2017-06-04 14:34:13', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_11.pdf', '2017-06-04 14:34:43', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_12.pdf', '2017-06-04 14:35:01', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_13.pdf', '2017-06-04 14:36:51', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_14.pdf', '2017-06-04 14:37:24', 1),
('150155201015', '1', 'TI0002', 'B', 'TUGAS_150155201015_TI0002_B_15.pdf', '2017-06-04 14:42:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuis`
--

CREATE TABLE `tb_kuis` (
  `kd_kuis` int(191) NOT NULL,
  `banyak_soal` int(128) NOT NULL,
  `kd_mk` varchar(11) NOT NULL,
  `kd_kls` char(1) NOT NULL,
  `start` datetime NOT NULL,
  `finish` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kuis`
--

INSERT INTO `tb_kuis` (`kd_kuis`, `banyak_soal`, `kd_mk`, `kd_kls`, `start`, `finish`) VALUES
(0, 2, 'TI0001', 'C', '2017-12-22 23:00:00', '2017-12-23 01:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `kd_materi` int(200) NOT NULL,
  `nama_materi` varchar(191) NOT NULL,
  `kd_mk` varchar(16) NOT NULL,
  `kd_dosen` varchar(16) NOT NULL,
  `path` varchar(191) NOT NULL,
  `pertemuan` int(2) NOT NULL,
  `kd_kls` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`kd_materi`, `nama_materi`, `kd_mk`, `kd_dosen`, `path`, `pertemuan`, `kd_kls`) VALUES
(5, 'Pemprograman HTML Dasar', 'TI0001', 'DSN0001', 'MATERI_DSN0001_TI0001_2.pdf', 2, 'C'),
(6, 'Pemprograman AJAX Dasar', 'TI0001', 'DSN0001', 'MATERI_DSN0001_TI0001_13', 12, 'C'),
(8, 'Relatifitas Teori', 'TI0004', 'DSN0001', 'MATERI_DSN0001_TI0004_7.pdf', 7, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mk`
--

CREATE TABLE `tb_mk` (
  `nama_mk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_dosen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai` time DEFAULT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `hari` int(1) NOT NULL,
  `kd_kls` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_mk`
--

INSERT INTO `tb_mk` (`nama_mk`, `kd_mk`, `kd_dosen`, `mulai`, `sks`, `semester`, `hari`, `kd_kls`) VALUES
('Pemprograman Web', 'TI0001', 'DSN0001', '13:20:00', 4, 4, 2, 'C'),
('Analisa dan Desain Berorientasi Objek', 'TI0002', 'DSN0002', '09:10:00', 2, 4, 4, 'B'),
('Analisa dan Perancangan Perangkat Lunak', 'TI0003', 'DSN0002', '10:00:00', 2, 4, 2, 'B'),
('Pemprograman Web', 'TI0001', 'DSN0001', '07:30:00', 2, 4, 1, 'A'),
('Fisika Dasar', 'TI0004', 'DSN0001', '10:10:00', 4, 4, 2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mk_pilihan`
--

CREATE TABLE `tb_mk_pilihan` (
  `kd_mk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `kd_kls` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_mk_pilihan`
--

INSERT INTO `tb_mk_pilihan` (`kd_mk`, `username`, `status`, `kd_kls`) VALUES
('TI0001', '150155201015', 1, 'C'),
('TI0004', '150155201015', 1, 'A'),
('TI0004', '150155201015', 1, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_kuis`
--

CREATE TABLE `tb_soal_kuis` (
  `kd_kuis` int(191) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `soal` varchar(1024) NOT NULL,
  `pila` varchar(1024) NOT NULL,
  `pilb` varchar(1024) NOT NULL,
  `pilc` varchar(1024) NOT NULL,
  `pild` varchar(1024) NOT NULL,
  `pile` varchar(1024) NOT NULL,
  `kunci_jwb` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_kuis`
--

INSERT INTO `tb_soal_kuis` (`kd_kuis`, `no_soal`, `soal`, `pila`, `pilb`, `pilc`, `pild`, `pile`, `kunci_jwb`) VALUES
(0, 1, 'Soal Pertama', 'A', 'b', 'c', 'd', 'e', 'd'),
(0, 2, 'sOAL kEDUA', 'a', 'B', 'B', 'C', 'D', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id` int(200) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_mk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_dosen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` timestamp NULL DEFAULT NULL,
  `kd_kls` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id`, `nama`, `kd_mk`, `kd_dosen`, `deadline`, `kd_kls`) VALUES
(1, 'Tugas Akhir ADBO', 'TI0002', 'DSN0002', '2017-06-05 06:20:00', 'B'),
(4, 'Tugas AKhir PEMWEB', 'TI0001', 'DSN0001', '2017-06-06 06:20:00', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(12) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '3',
  `tagline` varchar(256) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `tempat_lahir` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(256) NOT NULL,
  `goldar` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `email`, `nama`, `level`, `tagline`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `agama`, `goldar`) VALUES
('150155201015', 'b1219ez', 'adeputrans@gmail.co,', 'Ade Putra Nurcholik Santito', 3, 'Future Microcontroller Engineer', 'Perumahan Anggrek Bintan Blok E No 7, Toapaya Selatan KM 16 Lintas Barat Bintan Kepulauan Riau', 'Karawang', '1997-11-11', 'Islam', 'O'),
('150155201030', 'b1219ez', 'muhammadsarimin40@gmail.com', 'Muhammad Sarimin', 3, 'Sarimin Jancok', 'Jl Citra', 'Alai', '2012-11-30', 'Ntah Apa ', 'O'),
('DSN0001', 'b1219ez', 'alena.nana@gmail.com', 'Alena Uperitati', 2, 'Dosen comel TI UMRAH', 'Jl. Pemura RT02/RW03 No. 12 Tanjungpinang, Kepulauan Riau', 'Karimun', '1992-11-11', 'Islam', 'o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`kd_materi`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `kd_materi` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
