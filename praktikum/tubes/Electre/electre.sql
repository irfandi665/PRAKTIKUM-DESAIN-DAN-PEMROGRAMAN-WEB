-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2016 at 11:17 AM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electre`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) NOT NULL,
  `nm_kriteria` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode`, `nm_kriteria`) VALUES
(1, 'K001 ', 'Khasiat'),
(3, 'K002', 'Kadar'),
(4, 'K003', 'Aroma');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kanwil` varchar(20) NOT NULL,
  `kd_cabang` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `npp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `kanwil`, `kd_cabang`, `jabatan`, `npp`, `level`) VALUES
(11, 'admin', 'admin', 'administrator', 'jl.berok raya no 40 ', '', '', '', 'admin'),
(12, 'nana', 'nana', 'nana', 'sas', '', '', '', 'members'),
(13, 'indah@gmail.com', '12345', 'Indah Wahyuni', 'Jl. Aru Indah No 21 ', '', '', '', 'members'),
(15, 'kaka', 'kaka', 'Kaka Wijayanto', 'ui', '123', 'Marketing Officer', '15010880', 'members'),
(16, 'yaya', 'yaya', 'yaya', 'asd', 'sdfd', 'PMTI', '', 'superadmin'),
(17, '201604008', 'MuZAU', 'jk', 'jkj', 'jk', 'jk', '', 'superadmin'),
(18, 'jaka', '12345', 'kaka', 'as', 'fg', 'Kepala Dinas', '', 'superadmin'),
(19, 'ioi', 'MuZAU', 'lk', 'kl', 'kl', 'jk', '', 'superadmin'),
(20, 'vendry', '12345', 'Vendry7@gmail.com', '123', '123', 'Marketing Officer', '12345', 'members');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `khasiat` varchar(20) NOT NULL,
  `kadar` varchar(20) NOT NULL,
  `aroma` varchar(20) NOT NULL,
  `hasil` int(20) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode`, `nama`, `khasiat`, `kadar`, `aroma`, `hasil`) VALUES
(2, 'P001', 'Aulia', 'Baik', 'Baik', 'Sangat Baik', 44),
(3, 'P002 ', 'Biore', 'Baik', 'Baik', 'Baik', 360),
(4, 'P003  ', 'Citra', 'Baik', 'Baik', 'Baik', 288),
(5, 'P004   ', 'Enchanteer', 'Baik', 'Baik', 'Baik', 42),
(6, 'P005', 'Marina', 'Baik', 'Baik', 'Sangat Baik', 42),
(7, 'P006', 'Nivea', 'Baik', 'Sangat Baik', 'Baik', 44),
(8, 'P007', 'Shinzui ', 'Baik', 'Baik', 'Baik', 36);
