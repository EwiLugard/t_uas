-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2015 at 04:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `telp`, `password`, `jabatan`, `user_name`) VALUES
(6, 'dewi', '085650826273', 'dewi', 'tiketting', 'dewi'),
(8, 'asih', '085657568790', 'asih', 'admin', 'asih'),
(10, 'mira', '081245789056', 'mira', 'karyawan', 'mira'),
(11, 'olin', '085657123456', 'olin', 'tiketting', 'olin'),
(12, 'dewinta', '089697563412', 'dewinta', 'tiketting', 'dewinta'),
(14, 'fuad', '081345789056', 'fuad', 'karyawan', 'fuad');

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE IF NOT EXISTS `penerbangan` (
  `id_penerbangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pesawat` varchar(20) NOT NULL,
  `jam_berangkat` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tgl_penerbangan` date NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  PRIMARY KEY (`id_penerbangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `penerbangan`
--

INSERT INTO `penerbangan` (`id_penerbangan`, `nama_pesawat`, `jam_berangkat`, `tujuan`, `tgl_penerbangan`, `harga`, `gambar`) VALUES
(6, 'Garuda', '2015-12-31', '12.00', '0000-00-00', 550000, 'smart.jpg'),
(7, 'Garuda', '2015-11-29', '06.30', '0000-00-00', 700000, 'smart.jpg'),
(8, 'kalstar', '2015-12-09', '08.30', '0000-00-00', 600000, 'smart.jpg'),
(9, 'Lion', '2015-11-30', '13.40', '0000-00-00', 500000, 'smart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `no_tiket` varchar(12) NOT NULL,
  `kode_booking` varchar(6) NOT NULL,
  `bank` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `no_tiket`, `kode_booking`, `bank`, `alamat`, `telp`, `tanggal`, `harga`) VALUES
(8, 'catherine', '124536564357', 'JKBNTY', 'BRI', 'jl. gajahmada', '081245787897', '2015-11-09', 400000),
(9, 'asih bunga', '123445667788', 'GH02FG', 'BNI', 'mempawah', '089697675643', '2015-11-06', 650000),
(11, 'satria', '125643567543', 'TYUSHB', 'BCA', 'jl. sukalaksana no. 8', '089697543124', '2015-11-09', 550000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id`, `jabatan`) VALUES
('admin', 'admin', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
