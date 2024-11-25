-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 11:26 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `jasapercetakan`
--

CREATE TABLE IF NOT EXISTS `jasapercetakan` (
  `id_perusahaan` int(8) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasapercetakan`
--

INSERT INTO `jasapercetakan` (`id_perusahaan`, `nama_perusahaan`, `no_hp`, `alamat`, `kelurahan`, `kecamatan`, `latitude`, `longitude`) VALUES
(1, 'PIXEL ONE', '085244612226', 'Jalan  A Y Patty 97126', 'Honipupu', 'Sirimau', '-3.693954', '128.180421'),
(2, 'Percetakan C-Area Ambon', '081333700030', 'Jalan Kenanga No. 4, 97126', 'Honipupu', 'Sirimau', '
-3.695471', '128.179988'),
(3, 'Percetakan Salam Indah', '082311186052', 'Jl. Pantai Pertokoan Batu Merah', 'Batu Merah', 'Sirimau', '
-3.683999', '128.185691
');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasapercetakan`
--
ALTER TABLE `jasapercetakan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasapercetakan`
--
ALTER TABLE `jasapercetakan`
  MODIFY `id_perusahaan` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
