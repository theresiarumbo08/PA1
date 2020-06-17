-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start_event`, `end_event`) VALUES
(3, 'Rapat Himpunan', '2020-05-06 11:40:00', '2020-05-06 13:00:00'),
(4, 'Bimbingan', '2020-06-17 00:00:00', '2020-06-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `calendar_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `email`, `agama`, `jenis_kelamin`, `calendar_id`, `dosen_id`) VALUES
(1, 'Doel Simatupang', 'leo2leo.com', 'Kristen', 'Laki-laki', 3, 1415),
(4, 'Ahmad Prawonto', 'doel123@gmail.com', 'Kristen', 'Laki-laki', 0, 1315),
(32, 'Leonardo Saragih ', 'doel123@gmail.com', 'Kristen', 'Laki-laki', 0, 1115),
(35, 'Dodi Situmeang', 'dodi@gmail.com', 'Kristen', 'Laki-laki', 0, 1215);

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id`, `nama`, `jenis_kelamin`, `kelas`, `prodi`, `angkatan`, `mhs_id`) VALUES
(1, 'Theresia Rumahorbo', 'Perempuan', '31TK', 'D3 TK', 2019, 30),
(2, 'Adi Boy', 'Laki-laki', '31TK', 'D3 TK', 2019, 34),
(3, 'Sonya S', 'Perempuan', '31TI', 'D3 TI', 2019, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(100) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` varchar(15) NOT NULL,
  `waktu_akhir` varchar(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `kegiatan` text NOT NULL,
  `gedung` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `dosen_id`, `hari`, `waktu`, `waktu_akhir`, `tanggal`, `kegiatan`, `gedung`) VALUES
(1, 4, 'Kamis', '14:00', '17:00', '2020-05-02', 'Mata Kuliah Sistem Operasi', '512'),
(4, 4, 'Rabu', '13:00', '15:00', '2020-05-12', 'Mengajar Fisika Dasar MR19', '514'),
(5, 1, 'Kamis', '13:00', '14:00', '2020-05-14', 'Mata Kuliah Basis Data ', '711'),
(6, 35, 'Selasa', '14:00', '16:00', '2020-05-02', 'Mata Kuliah PABI', '514'),
(7, 32, 'Selasa', '09:00', '10:00', '2020-05-02', 'Mata Kuliah English ', '924'),
(8, 35, 'Senin', '08:00', '10:00', '2020-05-28', 'Mata Kuliah Aljabar Linear', '515'),
(9, 1, 'Senin', '12:35', '15:00', '2020-05-30', 'Mata Kuliah Algoritma dan Struktur Data ', '513'),
(10, 4, 'Selasa', '15:00', '17:00', '2020-06-18', 'Mata Kuliah Sistem Operasi', '515'),
(1317, 0, 'Senin', '12:00', '', '2020-06-13', 'Mata Kuliah Sistem Operasi', '515');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_mhs`
--

CREATE TABLE `tb_jadwal_mhs` (
  `id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_pribadi`
--

CREATE TABLE `tb_jadwal_pribadi` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `kegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_pribadi`
--

INSERT INTO `tb_jadwal_pribadi` (`id`, `dosen_id`, `tanggal`, `waktu`, `kegiatan`) VALUES
(1, 1, '2020-05-14', '20:55:00', 'Cuti ke Luar kota'),
(2, 4, '2020-05-24', '13:45:00', 'Rapat dosen'),
(3, 4, '2020-05-24', '12:00:00', 'Pagelaran'),
(4, 32, '2020-05-24', '13:00:00', 'Rapat dosen'),
(5, 4, '2020-05-24', '14:45:00', 'Rapat Himpunan'),
(6, 4, '2020-05-29', '12:35:00', 'Rapat Himpunan'),
(7, 4, '2020-06-10', '12:45:00', 'Cuti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_janji`
--

CREATE TABLE `tb_janji` (
  `id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_janji`
--

INSERT INTO `tb_janji` (`id`, `mhs_id`, `dosen_id`, `tanggal`, `waktu_awal`, `waktu_akhir`, `keterangan`, `status`) VALUES
(1, 30, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(3, 30, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(4, 34, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(5, 30, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(6, 34, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(8, 34, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 1),
(9, 34, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 1),
(10, 30, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 1),
(11, 30, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 1),
(12, 34, 0, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 9),
(13, 30, 32, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(14, 30, 35, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(15, 34, 35, '0000-00-00', '08:45:00', '09:45:00', 'Keperluan PA', 0),
(16, 30, 4, '0000-00-00', '10:20:00', '11:20:00', 'Himpunan HIMATEK', 0),
(17, 30, 1, '0000-00-00', '12:25:00', '14:45:00', 'Proyek Akhir', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_janji_dosen`
--

CREATE TABLE `tb_janji_dosen` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `janji_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_janji_mhs`
--

CREATE TABLE `tb_janji_mhs` (
  `id` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `janji_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telepon` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `jenis_kelamin`, `no_telepon`, `username`, `password`, `email`, `agama`, `mhs_id`, `dosen_id`, `level`) VALUES
(1, 'Doel', 'Simatupang', '12 Desember 1998', 'Perempuan', 822434234, 'susi', 'susi', 'sysi@gmail.com', 'Kristen', 0, 1415, 'Dosen'),
(4, 'Ahmad', 'Prawonto', '14 Februari 1990', 'Laki-laki', 872392309, 'dosen', 'dosen', 'ahmad@gmail.com', 'Islam', 0, 1315, 'Dosen'),
(21, 'Mora', 'Matondang', '02 Mei 2001', 'Laki-laki', 8283324, 'mora', 'mora', 'mora@gmail.com', 'Islam', 0, 0, 'mahasiswa\r\n'),
(29, 'Admin', '', '15 Januari 2009', 'Perempuan', 9238983, 'admin', 'admin', 'admin123@gmail.com', 'Kristen', 0, 0, 'admin'),
(30, 'Theresia ', 'Rumahorbo', '08 Desember 2001', 'Perempuan', 123243255, 'theresiarmh', 'rumbo123', 'theresiarumbo08@gmail.com', 'Kristen', 1, 0, 'mahasiswa'),
(32, 'Leo', 'Saragih', '12 Oktober 2001', 'Laki-laki', 823462823, 'leo', 'leo', 'leosaragih@gmail.com', 'Kristen', 0, 1115, 'Dosen'),
(34, 'Adi Boy ', 'Sitorus', '21 Juli 1999', 'Laki-laki', 82437834, 'adi', 'adi', 'adisitorus@gmail.com', 'Kristen', 2, 0, 'mahasiswa'),
(35, 'Dodi', 'Situmeang', '27 Februari 2001', 'Laki-laki', 822734512, 'dodi', 'dodi', 'theresiarumbo08@gmail.com', 'Hindu', 0, 1215, 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calendar_id` (`calendar_id`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- Indexes for table `tb_jadwal_mhs`
--
ALTER TABLE `tb_jadwal_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mhs_id` (`mhs_id`),
  ADD KEY `jadwal_id` (`jadwal_id`);

--
-- Indexes for table `tb_jadwal_pribadi`
--
ALTER TABLE `tb_jadwal_pribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_janji`
--
ALTER TABLE `tb_janji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `mhs_id` (`mhs_id`) USING BTREE;

--
-- Indexes for table `tb_janji_dosen`
--
ALTER TABLE `tb_janji_dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosen_id` (`dosen_id`),
  ADD KEY `janji_id` (`janji_id`);

--
-- Indexes for table `tb_janji_mhs`
--
ALTER TABLE `tb_janji_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mhs_id` (`mhs_id`),
  ADD KEY `janji_id` (`janji_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1317;

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1318;

--
-- AUTO_INCREMENT for table `tb_jadwal_mhs`
--
ALTER TABLE `tb_jadwal_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jadwal_pribadi`
--
ALTER TABLE `tb_jadwal_pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_janji`
--
ALTER TABLE `tb_janji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_janji_dosen`
--
ALTER TABLE `tb_janji_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_janji_mhs`
--
ALTER TABLE `tb_janji_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jadwal_mhs`
--
ALTER TABLE `tb_jadwal_mhs`
  ADD CONSTRAINT `tb_jadwal_mhs_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `mhs` (`id`),
  ADD CONSTRAINT `tb_jadwal_mhs_ibfk_2` FOREIGN KEY (`jadwal_id`) REFERENCES `tb_jadwal` (`id`);

--
-- Constraints for table `tb_janji_dosen`
--
ALTER TABLE `tb_janji_dosen`
  ADD CONSTRAINT `tb_janji_dosen_ibfk_2` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `tb_janji_dosen_ibfk_3` FOREIGN KEY (`janji_id`) REFERENCES `tb_janji` (`id`);

--
-- Constraints for table `tb_janji_mhs`
--
ALTER TABLE `tb_janji_mhs`
  ADD CONSTRAINT `tb_janji_mhs_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `mhs` (`id`),
  ADD CONSTRAINT `tb_janji_mhs_ibfk_2` FOREIGN KEY (`janji_id`) REFERENCES `tb_janji` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
