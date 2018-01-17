-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2017 at 08:55 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE IF NOT EXISTS `bimbingan` (
  `nim` varchar(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  KEY `fk_nidn_idx` (`nidn`),
  KEY `fk_nim_idx` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `nama` varchar(225) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `matakuliah_pokok` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`nidn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` varchar(20) NOT NULL,
  `makul_id` varchar(11) NOT NULL,
  `nama_makul` varchar(60) NOT NULL,
  `dosen` varchar(60) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(1) NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `idmk_jadwal_idx` (`makul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `makul_id`, `nama_makul`, `dosen`, `ruang`, `jam`, `sks`, `semester`) VALUES
('jadwal1', 'TI2517', 'Arsitektur Berorientasi Layanan', 'Radzi Ratomi', '6', '08.00-10.30', 3, 5),
('jadwal2', 'TI4008', 'Pemrograman Mobile', 'Hendra Kurniawan', '1', '13.00-15.30', 3, 5),
('jadwal3', 'TI4010', 'Komputasi Evolusi', 'Radzi Ratomi', '6', '08.00-10.30', 3, 5),
('jadwal4', 'TI2520', 'Perancangan dan Implementasi Perangkat Lunak', 'Nerfita Nikentari', '1', '13.00-15.30', 3, 5),
('jadwal5', 'TI3707', 'Kecerdasan Buatan', 'Nurul Hayati', '2', '08.00-10.30', 3, 5),
('jadwal6', 'TI2519', 'Sistem Keamanan', 'Nurul Hayati', '2', '08.00-10.30', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE IF NOT EXISTS `krs` (
  `id_jadwal` varchar(20) NOT NULL,
  `makul_id` varchar(11) NOT NULL,
  `nama_makul` varchar(60) NOT NULL,
  `dosen` varchar(60) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_jadwal`, `makul_id`, `nama_makul`, `dosen`, `ruang`, `jam`, `sks`, `semester`) VALUES
('jadwal2', 'TI4008', 'Pemrograman Mobile', 'Hendra Kurniawan', '1', '13.00-15.30', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_akademik`
--

CREATE TABLE IF NOT EXISTS `login_akademik` (
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('mahasiswa','admin','dosen') NOT NULL,
  `waktu_online` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_akademik`
--

INSERT INTO `login_akademik` (`nama`, `tempat_lahir`, `tanggal_lahir`, `username`, `password`, `level`, `waktu_online`) VALUES
('0', '0', '0000-00-00', '0', '0', '', '2016-10-18 04:28:43'),
('wella', 'kijang', '2000-09-10', '140155201004', 'wella', 'mahasiswa', '2016-10-18 05:45:57'),
('Aris Kurniawan', 'Tanjungpinang', '1996-08-25', '140155201067', '140155201067', 'mahasiswa', '2016-10-17 17:38:52'),
('Dede Tiasha', 'Tanjungpinang', '1997-09-09', '140155201069', '140155201069', 'mahasiswa', '2016-10-17 20:15:33'),
('administrator', '', '0000-00-00', 'admin', 'admin', 'admin', '2016-10-15 18:07:04'),
('Dosen', 'Tanjungpinang', '1992-08-08', 'Dosen', 'dosen', 'dosen', '2016-10-16 07:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `dosen_pa` varchar(225) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `fakultas`, `dosen_pa`, `tempat_lahir`, `tanggal_lahir`, `no_ktp`, `alamat`, `no_hp`, `kelamin`, `agama`, `golongan_darah`) VALUES
('140155201004', 'wella', 'Teknik Informatika', 'Fakultas Teknik', 'HENDRA KURNIAWAN , S.Kom., M.Sc.Eng', '2000/09/10', '0000-00-00', '761726', 'kp. budi mulya', '081991373120', 'Laki - Laki', 'Islam', 'B'),
('140155201067', 'Aris Kurniawan', 'Teknik Informatika', 'Fakultas Teknik', 'HENDRA KURNIAWAN , S.Kom., M.Sc.Eng', 'Tanjungpinang', '1996-08-25', '21010625081996', 'Kp. Budi Mulya', '081991373127', 'Laki - Laki', 'Islam', 'O'),
('140155201069', 'Dede Tiasha', 'Teknik Informatika', 'Fakultas Teknik', 'HENDRA KURNIAWAN , S.Kom., M.Sc.Eng', '1996/09/09', '0000-00-00', '123123', 'qwewqe', '081991373120', 'Perempuan', 'Islam', 'AB');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `makul_id` varchar(11) NOT NULL,
  `nama_makul` varchar(60) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(1) NOT NULL,
  `kelompok_makul` varchar(20) NOT NULL,
  `id_syarat` varchar(11) NOT NULL,
  PRIMARY KEY (`makul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`makul_id`, `nama_makul`, `sks`, `semester`, `kelompok_makul`, `id_syarat`) VALUES
('TI2101', 'Algoritma dan Pemrograman', 4, 1, 'Kompetensi Utama', ''),
('TI2102', 'Pengantar Teknologi Informasi', 4, 1, 'Kompetensi Utama', ''),
('TI2204', 'Organisasi dan Arsitektur Komputer', 3, 2, 'Kompetensi Utama', ''),
('TI2205', 'Pemrograman Berorientasi Objek', 4, 2, 'Kompetensi Utama', ''),
('TI2305', 'Basis Data', 3, 3, 'Kompetensi Utama', ''),
('TI2306', 'Perancangan Web', 3, 3, 'Kompetensi Utama', ''),
('TI2307', 'Jaringan Komputer dan Komunikasi Data', 3, 3, 'Kompetensi Utama', ''),
('TI2308', 'Teori Bahasa Formal dan Otomata', 2, 3, 'Kompetensi Utama', ''),
('TI2309', 'Struktur Data', 4, 3, 'Kompetensi Utama', 'TI2101'),
('TI2310', 'Matriks Ruang dan Vekor', 3, 3, 'Kompetensi Utama', 'TI3101'),
('TI2411', 'Analisa dan Desain Berorientasi Obyek', 2, 4, 'Kompetensi Utama', 'TI2205'),
('TI2412', 'Analisa dan Perancangan Perangkat Lunak', 2, 4, 'Kompetensi Utama', 'TI2203'),
('TI2413', 'Pemmrograman Web', 4, 4, 'Kompetensi Utama', 'TI2306'),
('TI2414', 'Sistem Digital', 3, 4, 'Kompetensi Utama', ''),
('TI2415', 'Sistem Operasi', 3, 4, 'Kompetensi Utama', 'TI2203'),
('TI2516', 'Basis Data Lanjut', 3, 5, 'Kompetensi Utama', 'TI2305'),
('TI2517', 'Arsitektur Berorientasi Layanan', 3, 5, 'Kompetensi Utama', ''),
('TI2518', 'Interaksi Manusia dan Komputer', 3, 5, 'Kompetensi Utama', ''),
('TI2519', 'Sistem kemanan', 3, 5, 'Kompetensi Utama', ''),
('TI2520', 'Perancangan dan Implementasi Perangkat Lunak', 3, 5, 'Kompetensi Utama', 'TI2411 dan '),
('TI2620', 'Grafika Komputer', 4, 6, 'Kompetensi Utama', ''),
('TI2621', 'Manajemen Proyek Perangkat Lunak', 3, 6, 'Kompetensi Utama', 'TI2519'),
('TI2622', 'Pemrograman Jaringan', 3, 6, 'Kompetensi Utama', 'TI2307'),
('TI2623', 'Komputasi Nirkabel', 3, 6, 'Kompetensi Utama', ''),
('TI2624', 'Pengujian dan Penjaminan Mutu Perangkat Lunak', 3, 6, 'Kompetensi Utama', 'TI2519'),
('TI2725', 'Kerja Praktek', 3, 7, 'Kompetensi Utama', 'Lulus 100 S'),
('TI2826', 'Etika Profesi', 2, 8, 'Kompetensi Pendukung', ''),
('TI3101', 'Kalkulus', 4, 1, 'Kompetensi Pendukung', ''),
('TI3202', 'Matematika Diskrit', 4, 2, 'Kompetensi Pendukung', ''),
('TI3303', 'Probabilistik dan Statistika', 3, 4, 'Kompetensi Pendukung', ''),
('TI3304', 'Technopreneurship', 2, 3, 'Kompetensi Pendukung', ''),
('TI3405', 'Metode Numerik', 3, 4, 'Kompetensi Pendukung', 'TI2310'),
('TI3606', 'Metodologi Penelitian', 2, 6, 'Kompetensi Pendukung', ''),
('TI3707', 'Kecerdasan Buatan', 3, 7, 'Kompetensi Pendukung', ''),
('TI3808', 'Tamadun dan Tunjuk Ajar Melayu', 3, 8, 'Umum', ''),
('TI3810', 'Manajemen Industri', 3, 8, 'Kompetensi Pendukung', ''),
('TI4001', 'Pengolahan Citra', 3, 7, 'Kompetensi Pendukung', ''),
('TI4003', 'Sistem Pakar', 3, 7, 'Kompetensi Pendukung', ''),
('TI4008', 'Pemrograman Aplikasi Mobile', 3, 7, 'Kompetensi Pendukung', ''),
('TI4009', 'Sistem Pendukung Keputusan', 3, 7, 'Kompetensi Pendukung', ''),
('TI4010', 'Komputasi Evolusi', 3, 7, 'Kompetensi Pendukung', ''),
('TI5801', 'Skripsi', 6, 8, 'Kompetensi Utama', 'Lulus MK Ko'),
('UM1101', 'Pendidikan Pancasila', 3, 1, 'Umum', ''),
('UM1102', 'Pendidikan Agama', 3, 2, 'Umum', ''),
('UM1103', 'Pendidikan Kewarganegaraan', 3, 1, 'Umum', ''),
('UM1104', 'Bahasa Indonesia', 3, 5, 'Umum', ''),
('UM1105', 'Bahasa Inggris', 3, 7, 'Umum', ''),
('UM1106', 'Pengantar Ilmu dan Teknologi Maritim', 3, 2, 'Umum', ''),
('UM1107', 'Pengetahuan Lingkungan', 2, 8, 'Kompetensi Pendukung', '');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  ` nim` varchar(11) NOT NULL,
  `makul_id` varchar(11) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  KEY `nim_nilai_idx` (` nim`),
  KEY `idmakul_nilai_idx` (`makul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
  `nim` varchar(11) DEFAULT NULL,
  `id_jadwal` varchar(20) DEFAULT NULL,
  KEY `nim_temporary_idx` (`nim`),
  KEY `jadwal_id_idx` (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `nidn_bimbing` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nim_bimbing` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `login_akademik` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `mk_jadwal` FOREIGN KEY (`makul_id`) REFERENCES `mata_kuliah` (`makul_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `login_akademik` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `idmakul_nilai` FOREIGN KEY (`makul_id`) REFERENCES `mata_kuliah` (`makul_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nim_nilai` FOREIGN KEY (` nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `temporary`
--
ALTER TABLE `temporary`
  ADD CONSTRAINT `nim_temp` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
