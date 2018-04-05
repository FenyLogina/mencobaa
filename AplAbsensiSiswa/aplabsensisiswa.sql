-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 04:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplabsensisiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_siswa`
--

CREATE TABLE `absen_siswa` (
  `ID_GURU` varchar(5) DEFAULT NULL,
  `NIS` char(12) DEFAULT NULL,
  `ID_KA` varchar(5) DEFAULT NULL,
  `ID_JA` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `ID_ANGKATAN` char(5) NOT NULL,
  `NM_ANGKATAN` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`ID_ANGKATAN`, `NM_ANGKATAN`) VALUES
('0886', 'RPL.21'),
('12436', 'RPLB.20');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `ID_GURU` char(20) NOT NULL,
  `NAMA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`ID_GURU`, `NAMA`) VALUES
('1012152729', 'marisa'),
('125372', 'raisa'),
('1716182097', 'Slavina Mariana'),
('17625380', 'Jejedunn');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_absen`
--

CREATE TABLE `jenis_absen` (
  `ID_JA` varchar(5) NOT NULL,
  `NM_JA` varchar(10) DEFAULT NULL,
  `BATASAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_absen`
--

INSERT INTO `jenis_absen` (`ID_JA`, `NM_JA`, `BATASAN`) VALUES
('12436', 'hadir', '07:30 sampai 09:48'),
('12542', 'Alfa', '12:30 sampai 14:30');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `ID_JURUSAN` char(5) NOT NULL,
  `NM_JURUSAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`ID_JURUSAN`, `NM_JURUSAN`) VALUES
('21463', 'Rekayasa Perangkat Lunak'),
('j', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_KELAS` char(20) NOT NULL,
  `ID_ANGKATAN` varchar(5) DEFAULT NULL,
  `ID_JURUSAN` varchar(5) DEFAULT NULL,
  `NM_KELAS` varchar(3) DEFAULT NULL,
  `WALAS` varchar(20) DEFAULT NULL,
  `JML_SISWA` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_absen`
--

CREATE TABLE `keterangan_absen` (
  `ID_KA` varchar(5) NOT NULL,
  `NM_KA` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan_absen`
--

INSERT INTO `keterangan_absen` (`ID_KA`, `NM_KA`) VALUES
('0896', 'Alfa');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `ID_SEMESTER` varchar(5) NOT NULL,
  `ID_KELAS` varchar(5) DEFAULT NULL,
  `NM_SEMESTER` char(12) DEFAULT NULL,
  `TINGKAT` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(12) NOT NULL,
  `id_kelas` varchar(5) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `no_absen` char(12) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_siswa`
--
ALTER TABLE `absen_siswa`
  ADD KEY `ID_GURU` (`ID_GURU`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `ID_KA` (`ID_KA`),
  ADD KEY `ID_JA` (`ID_JA`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`ID_ANGKATAN`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`ID_GURU`);

--
-- Indexes for table `jenis_absen`
--
ALTER TABLE `jenis_absen`
  ADD PRIMARY KEY (`ID_JA`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`ID_JURUSAN`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_KELAS`),
  ADD KEY `ID_ANGKATAN` (`ID_ANGKATAN`),
  ADD KEY `ID_JURUSAN` (`ID_JURUSAN`);

--
-- Indexes for table `keterangan_absen`
--
ALTER TABLE `keterangan_absen`
  ADD PRIMARY KEY (`ID_KA`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`ID_SEMESTER`),
  ADD KEY `ID_KELAS` (`ID_KELAS`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen_siswa`
--
ALTER TABLE `absen_siswa`
  ADD CONSTRAINT `absen_siswa_ibfk_1` FOREIGN KEY (`ID_GURU`) REFERENCES `guru` (`ID_GURU`),
  ADD CONSTRAINT `absen_siswa_ibfk_2` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `absen_siswa_ibfk_3` FOREIGN KEY (`ID_KA`) REFERENCES `keterangan_absen` (`ID_KA`),
  ADD CONSTRAINT `absen_siswa_ibfk_4` FOREIGN KEY (`ID_JA`) REFERENCES `jenis_absen` (`ID_JA`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`ID_ANGKATAN`) REFERENCES `angkatan` (`ID_ANGKATAN`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`ID_KELAS`) REFERENCES `kelas` (`ID_KELAS`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`ID_KELAS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
