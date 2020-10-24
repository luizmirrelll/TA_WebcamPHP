-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2019 at 05:02 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pts_pbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai2`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `id_u_kerja` int(9) DEFAULT NULL,
  `nma_kegt` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=503 ;

--
-- Dumping data for table `tb_pegawai2`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE IF NOT EXISTS `tb_absen` (
  `nama` varchar(255) NOT NULL,
  `id_ab` int(9) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ttd` varchar(255) NOT NULL,
  `absen` varchar(255) NOT NULL,
  `ab_saat` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id_ab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_tamu`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_u_kerja`
--

CREATE TABLE IF NOT EXISTS `t_u_kerja` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `u_kerja` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `t_u_kerja`
--

INSERT INTO `t_u_kerja` (`id`, `u_kerja`, `ket`) VALUES
(81, 'Honorer', ''),
(82, 'Satpam', ''),
(83, 'Pramusaji', ''),
(84, 'THL', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
