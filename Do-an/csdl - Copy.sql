-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2014 at 03:07 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(40)  COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_thich` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name_user`, `first_name`, `last_name`, `pass`, `email`, `sdt`, `dia_chi`, `so_thich`) VALUES
(1, 'Admin', 'Nguyễn Văn', 'Kha', '123456', 'nguyenvankha2405@gmail.com', NULL, 'Chư Pah - Gia Lai', NULL);
--
-- Table structure for table `tb_chu_de`
--

CREATE TABLE IF NOT EXISTS `tb_chu_de` (
  `id_chu_de` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `name_chu_de` varchar(50)  COLLATE utf8_unicode_ci NOT NULL,
  `position` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_chu_de`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cthd`
--

CREATE TABLE IF NOT EXISTS `tb_cthd` (
  `id_hoa_don` int(10) NOT NULL,
  `id_dich_vu` int(10) NOT NULL,
  `so_luong` int(11) NOT NULL,
  PRIMARY KEY (`id_hoa_don`,`id_dich_vu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cthd`
--

INSERT INTO `tb_cthd` (`id_hoa_don`, `id_dich_vu`, `so_luong`) VALUES
(1, 1, 2),
(1, 2, 10),
(1, 3, 9),
(1, 9, 2),
(1, 13, 4),
(2, 3, 10),
(3, 4, 15),
(3, 5, 4),
(27, 3, 40),
(27, 5, 25),
(27, 13, 5),
(28, 1, 4),
(28, 4, 25),
(28, 5, 15),
(29, 2, 44),
(29, 4, 42),
(29, 5, 10),
(29, 9, 23),
(29, 13, 2),
(30, 2, 23),
(30, 3, 12),
(30, 4, 20),
(31, 4, 35),
(31, 5, 23),
(31, 12, 4),
(31, 13, 4),
(32, 1, 19),
(32, 13, 2),
(33, 5, 3),
(33, 7, 30),
(33, 11, 3),
(33, 15, 8),
(34, 3, 65),
(35, 15, 5),
(36, 2, 80),
(36, 16, 10),
(36, 21, 2),
(37, 6, 43),
(37, 20, 1),
(38, 3, 56),
(38, 20, 6),
(39, 5, 50),
(39, 20, 2),
(39, 23, 5),
(40, 2, 40),
(41, 11, 5),
(41, 12, 3),
(41, 20, 2),
(42, 5, 78),
(42, 23, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dich_vu`
--

CREATE TABLE IF NOT EXISTS `tb_dich_vu` (
  `id_dich_vu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `name_dich_vu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(11) NOT NULL,
  `don_vi_tinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_dich_vu`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_dich_vu`
--

INSERT INTO `tb_dich_vu` (`id_dich_vu`, `id_user`, `name_dich_vu`, `don_gia`, `don_vi_tinh`) VALUES
(1, 1, 'Bia sài gòn lon', 15000, 'Lon'),
(2, 1, 'Bia 333', 16000, 'Lon'),
(3, 1, 'Bia Ken lon', 20000, 'Lon'),
(4, 1, 'Bia Tiger lon', 19000, 'Lon'),
(5, 1, 'Bia Sài Gòn Chai', 10000, 'Lon'),
(6, 1, 'Bia Ken chai', 15000, 'Chai'),
(7, 1, 'Bia Tiger chai', 13000, 'Chai'),
(8, 1, 'Trái Cây dĩa', 60000, 'Đĩa'),
(9, 1, 'Bim bim', 12000, 'Bì'),
(10, 1, 'Đậu phộng bì', 5000, 'Bì'),
(11, 1, 'Đậu phộng lon', 15000, 'Lon'),
(12, 1, 'Chuối.', 15000, 'Bì'),
(13, 1, 'Hướng dương', 10000, 'Bì'),
(14, 1, 'Coca cola lon', 8000, 'Lon'),
(15, 1, 'Nước suối nhỏ', 5000, 'Chai'),
(16, 1, 'Nước cam lon', 8000, 'Lon'),
(17, 1, 'Nước suối lớn', 10000, 'Chai'),
(18, 1, 'Hạt dưa', 10000, 'Bì'),
(19, 1, 'Mít sấy', 15000, 'Bì'),
(20, 1, 'Bia sài gòn két', 200000, 'Két'),
(21, 1, 'Xoài', 25000, 'Kg'),
(22, 1, 'Mận', 20000, 'Kg'),
(23, 1, 'Ổi', 18000, 'Kg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hoa_don`
--

CREATE TABLE IF NOT EXISTS `tb_hoa_don` (
  `id_hoa_don` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_phong` int(10) NOT NULL,
  `ngay_lap` datetime NOT NULL,
  `trang_thai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_hoa_don`),
  KEY `id_user` (`id_user`,`id_phong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tb_hoa_don`
--

INSERT INTO `tb_hoa_don` (`id_hoa_don`, `id_user`, `id_phong`, `ngay_lap`, `trang_thai`) VALUES
(1, 1, 1, '2014-02-18 06:00:00', 'yes'),
(2, 1, 3, '2014-02-18 06:09:00', 'no'),
(3, 1, 5, '2014-02-18 09:00:00', 'yes'),
(4, 1, 1, '2014-02-17 19:00:00', 'yes'),
(27, 1, 4, '2014-02-16 14:00:00', 'yes'),
(28, 1, 1, '2014-02-18 16:00:00', 'yes'),
(29, 1, 2, '2014-02-18 05:18:56', 'yes'),
(30, 1, 1, '2014-02-18 05:51:49', 'yes'),
(31, 1, 5, '2014-02-19 01:24:30', 'yes'),
(32, 1, 8, '2014-02-19 06:30:51', 'no'),
(33, 1, 7, '2014-02-19 06:31:32', 'yes'),
(34, 1, 6, '2014-02-19 07:01:26', 'no'),
(35, 1, 32, '2014-02-25 05:27:55', 'no'),
(36, 1, 5, '2014-02-25 05:28:18', 'yes'),
(37, 1, 19, '2014-02-25 05:35:30', 'no'),
(38, 1, 25, '2014-02-26 09:12:20', 'yes'),
(39, 1, 1, '2014-03-10 08:41:29', 'yes'),
(40, 1, 15, '2014-03-12 04:58:10', 'no'),
(41, 1, 28, '2014-03-13 16:49:33', 'yes'),
(42, 1, 14, '2014-03-13 17:02:08', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_phong`
--

CREATE TABLE IF NOT EXISTS `tb_phong` (
  `id_phong` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_phong` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `lau` int(11) NOT NULL,
  `trang_thai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_phong`),
  KEY `name_phong` (`name_phong`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tb_phong`
--

INSERT INTO `tb_phong` (`id_phong`, `name_phong`, `lau`, `trang_thai`) VALUES
(1, 'Phòng 1', 0, 'no'),
(2, 'Phòng 2', 0, 'no'),
(3, 'Phòng 3', 0, 'yes'),
(4, 'Phòng 4', 0, 'no'),
(5, 'Phòng 5', 0, 'no'),
(6, 'Phòng 6', 1, 'yes'),
(7, 'Phòng 7', 1, 'no'),
(8, 'Phòng 8', 1, 'yes'),
(9, 'Phòng 9', 1, 'no'),
(10, 'Phòng 10', 1, 'no'),
(11, 'Phòng 11', 2, 'no'),
(12, 'Phòng 12', 2, 'no'),
(13, 'Phòng 13', 2, 'yes'),
(14, 'Phòng 14', 2, 'no'),
(15, 'Phòng 15', 2, 'yes'),
(16, 'Phòng 16', 3, 'no'),
(17, 'Phòng 17', 3, 'yes'),
(18, 'Phòng 18', 3, 'no'),
(19, 'Phòng 19', 3, 'yes'),
(20, 'Phòng 20', 3, 'yes'),
(21, 'Phòng 21', 4, 'yes'),
(22, 'Phòng 22', 4, 'yes'),
(23, 'Phòng 23', 4, 'yes'),
(24, 'Phòng 24', 4, 'no'),
(25, 'Phòng 25', 4, 'no'),
(26, 'Phòng 26', 5, 'yes'),
(27, 'Phòng 27', 5, 'no'),
(28, 'Phòng 28', 5, 'no'),
(29, 'Phòng 29', 5, 'yes'),
(30, 'Phòng 30', 5, 'yes'),
(31, 'Phòng 31', 6, 'no'),
(32, 'Phòng 32', 6, 'yes'),
(33, 'Phòng 33', 6, 'yes'),
(34, 'Phòng 34', 6, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trang`
--

CREATE TABLE IF NOT EXISTS `tb_trang` (
  `id_trang` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_chu-de` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `name_trang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` tinyint(4) NOT NULL,
  `pos_on` datetime NOT NULL,
  PRIMARY KEY (`id_trang`),
  KEY `id_chu-de` (`id_chu-de`,`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
