-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2014 at 03:06 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiki`
--


-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id_danh_muc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int(10) unsigned NOT NULL,
  `name_danh_muc` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_danh_muc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_danh_muc`, `id_menu`, `name_danh_muc`) VALUES
(1, 1, 'Sách tiếng anh'),
(2, 1, 'Sách Tiki khuyên đọc'),
(3, 1, 'Sách văn học - Tiểu thuyết'),
(4, 1, 'Sách kinh tế'),
(5, 1, 'Sách chuyên nghành'),
(6, 1, 'Sách kĩ năng sống - Sách kĩ thuật sống'),
(7, 1, 'Sách Giáo Khoa'),
(8, 1, 'Sách Học Ngoại Ngữ - Từ Điển'),
(9, 1, 'Sách Cho Tuổi Mới Lớn'),
(10, 1, 'Sách Truyện Thiếu Nhi'),
(11, 1, 'Sách Thường Thức - Đời Sống'),
(12, 1, 'Truyện Tranh, Manga, Comic'),
(13, 1, 'Sách Văn Hoá - Nghệ Thuật - Du Lịch'),
(14, 2, 'Máy ảnh - Máy quay phim'),
(15, 2, 'Máy tính bảng - Máy đọc sách'),
(16, 2, 'Tai nghe -Loa'),
(17, 2, 'Phụ kiện điện tử'),
(18, 2, 'Điện thoại'),
(19, 2, 'Phụ kiện cho điện thoại'),
(20, 3, 'Điện gia đình'),
(21, 3, 'Sản phẩm nhà bếp'),
(22, 3, 'Nhà cửa - đời sống'),
(23, 3, 'Sức khỏe - sắc đẹp'),
(24, 3, 'Thể thao'),
(25, 4, 'Quà lưu niệm'),
(26, 4, 'Văn phẩm học'),
(27, 4, 'Đồ dùng cá nhân'),
(28, 4, 'Đồ chơi'),
(29, 4, 'Đồ trang trí'),
(30, 4, 'Giả trí'),
(31, 4, 'Đồ Hand-made'),
(32, 4, 'Flashcard'),
(33, 4, 'Lịch 2014'),
(34, 4, 'Bao lì xì'),
(35, 4, 'Noel 2014'),
(36, 5, 'Thời Trang Nam'),
(37, 5, 'Thời Trang Nữ'),
(38, 5, 'Thời Trang Mặc Ở Nhà'),
(39, 5, 'Túi Xách Nữ'),
(40, 5, 'Giày dép nam'),
(41, 5, 'Giày Dép Nữ'),
(42, 5, 'Phụ kiện thời trang nam'),
(43, 5, 'Phụ Kiện Thời Trang Nữ'),
(44, 6, 'Trang Điểm'),
(45, 6, 'Chăm sóc da mặt'),
(46, 6, 'Chăm sóc tóc / Da đầu'),
(47, 6, 'Chăm sóc cơ thể'),
(48, 6, 'Chăm sóc cá nhân'),
(49, 6, 'Nước hoa');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `hoadon_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoadon_sanpham` text COLLATE utf8_unicode_ci NOT NULL,
  `hoadon_tongtien` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hoadon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hoadon_id`, `hoadon_sanpham`, `hoadon_tongtien`) VALUES
(1, '', '18000'),
(2, '38', '18000'),
(3, '38', '18000'),
(4, '38,33,44', '226000'),
(5, '38,33,44,44', '226000'),
(6, '9,28,42', '8120000'),
(7, '1,26,28', '1106000'),
(8, '2,40', '344000'),
(9, '25,55,34,18', '1677000'),
(10, '3', '79000');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_menu` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`) VALUES
(1, 'Sách'),
(2, 'Điện tử'),
(3, 'Gia dụng'),
(4, 'Quà tặng'),
(5, 'Thời trang'),
(6, 'Làm đẹp -Sức khỏe');

-- --------------------------------------------------------

--
-- Table structure for table `noi_bat`
--

CREATE TABLE IF NOT EXISTS `noi_bat` (
  `id_noi_bat` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int(10) unsigned NOT NULL,
  `name_noi_bat` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_noi_bat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `noi_bat`
--

INSERT INTO `noi_bat` (`id_noi_bat`, `id_menu`, `name_noi_bat`) VALUES
(1, 1, 'Sách bán chạy'),
(2, 1, 'Sách mới'),
(3, 1, 'Sách giảm giá'),
(4, 1, 'Đặt trước'),
(5, 2, 'Điện tử Bán chạy'),
(6, 2, 'Điện tử Hàng mới'),
(7, 2, 'Điện tử Giảm giá'),
(8, 2, 'Đặt trước'),
(9, 3, 'Gia dụng Bán chạy'),
(10, 3, 'Gia dụng Hàng mới'),
(11, 3, 'Gia dụng Giảm giá'),
(12, 3, 'Đặt trước'),
(13, 4, 'Quà tặng Bán chạy'),
(14, 4, 'Quà tặng Hàng mới'),
(15, 4, 'Quà tặng Giảm giá'),
(16, 4, 'Đặt trước'),
(17, 5, 'Thời trang Bán chạy'),
(18, 5, 'Thời trang Hàng mới'),
(19, 5, 'Thời trang Giảm giá'),
(20, 5, 'Đặt trước'),
(21, 6, 'Làm đẹp - sức khỏe Bán chạy'),
(22, 6, 'Làm đẹp - sức khỏe Hàng mới'),
(23, 6, 'Làm đẹp - sức khỏe Giảm giá'),
(24, 6, 'Đặt trước');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_san_pham` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int(10) unsigned DEFAULT NULL,
  `id_noi_bat` int(10) unsigned DEFAULT NULL,
  `id_danh_muc` int(10) unsigned DEFAULT NULL,
  `id_thuong_hieu` int(10) unsigned DEFAULT NULL,
  `name_san_pham` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gia_cu` int(10) unsigned NOT NULL,
  `gia_moi` int(10) unsigned NOT NULL,
  `tac_gia` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thong_tin` text COLLATE utf8_unicode_ci,
  `ban_chay` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_san_pham`),
  KEY `id_noi_bat` (`id_noi_bat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=58 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_san_pham`, `id_menu`, `id_noi_bat`, `id_danh_muc`, `id_thuong_hieu`, `name_san_pham`, `gia_cu`, `gia_moi`, `tac_gia`, `images`, `thong_tin`, `ban_chay`) VALUES
(1, 1, 2, NULL, NULL, 'Hồ Duyên', 64000, 51000, 'Công Tử Hoan Hỉ', 'images/San-pham/1.jpg', 'Lá cuốn sách tinh cảm rất hay của tác giả Công tử Hoan Hỉ\r\n\r\nSách rất được nhiều bạn trẻ yêu thích.', NULL),
(2, 1, 2, NULL, NULL, 'Người Yêu Cũ Có Người Yêu Mới', 55000, 44000, 'Iris Cao', 'images/San-pham/2.jpg', NULL, NULL),
(3, 1, 2, NULL, NULL, 'Điều Kì Diệu Ở Phòng Giam Số 7', 99000, 79000, 'Park Lee Jeong', 'images/San-pham/3.jpg', NULL, NULL),
(4, 1, 2, NULL, NULL, 'Artbook "Tam Sinh Tam Thế - Thật Lí Đào Hoa"', 199000, 159000, 'Đường Thất Công Tử', 'images/San-pham/4.jpg', NULL, NULL),
(5, 1, NULL, 2, NULL, 'Săn cá thần', 85000, 68000, 'Đặng Thiều Quang', 'images/San-pham/5.jpg', NULL, NULL),
(6, 1, NULL, 2, 5, 'Phù thủy sứ OZ(Nhã Lam)', 40000, 50000, 'L.Frank Baum', 'images/San-pham/6.jpg', NULL, NULL),
(7, 1, NULL, 2, NULL, 'Vợ Người Du Hành Thời Gian', 128000, 102000, 'Audrey Niffenegger', 'images/San-pham/7.jpg', NULL, NULL),
(8, 1, NULL, 2, 5, 'Đồi Gió Hú (Nhã Lam)', 86000, 69000, 'Emily Bronte', 'images/San-pham/8.jpg', NULL, NULL),
(9, 2, 6, 18, 14, 'Điện Thoại Lumia 1320', 7480000, 7300000, NULL, 'images/San-pham/9.jpg', NULL, NULL),
(10, 2, 6, 19, NULL, 'Pin Sạc Dự Phòng Buffalo iBuffalo BSMPB04 2013', 950000, 1200000, NULL, 'images/San-pham/10.jpg', NULL, NULL),
(11, 2, 6, 16, NULL, 'Loa Creative D120', 1199000, 2450000, NULL, 'images/San-pham/11.jpg', NULL, NULL),
(12, 2, 6, 18, 14, 'Điện Thoại Lumia 1520', 15900000, 15900000, NULL, 'images/San-pham/12.jpg', NULL, NULL),
(13, 2, NULL, 16, NULL, 'Tai Nghe Sades SA-904', 545000, 450000, NULL, 'images/San-pham/13.jpg', NULL, NULL),
(14, 2, NULL, 16, NULL, 'Tai Nghe Sennheiser HD 201', 580000, 495000, NULL, 'images/San-pham/14.jpg', NULL, NULL),
(15, 2, NULL, 16, 16, 'Tai Nghe Logitech', 342000, 249000, NULL, 'images/San-pham/15.jpg', NULL, NULL),
(16, 2, NULL, 16, NULL, 'Tai Nghe Sennheiser HD 202 II', 955000, 650000, NULL, 'images/San-pham/16.jpg', NULL, NULL),
(17, 3, 10, NULL, NULL, 'Hộp Đựng Cơm 3 Ngăn Homio IN.13-004', 429000, 329000, NULL, 'images/San-pham/17.jpg', NULL, NULL),
(18, 3, 10, NULL, NULL, 'Bộ 21 Hộp Nhựa Homio PL.13-004', 1100000, 769000, NULL, 'images/San-pham/18.jpg', NULL, NULL),
(19, 3, 10, NULL, NULL, 'Máy Xay Sinh Tố Pensonic PB4001-Xanh Lá', 890000, 479000, NULL, 'images/San-pham/19.jpg', NULL, NULL),
(20, 3, 10, NULL, NULL, 'Bếp Từ Cảm Ứng Soho 19CU', 890000, 769000, NULL, 'images/San-pham/20.jpg', NULL, NULL),
(21, 3, NULL, 21, NULL, 'Lò Nướng Bluestone EOB-7587S', 2949000, 2569000, NULL, 'images/San-pham/21.jpg', NULL, NULL),
(22, 3, NULL, 21, NULL, 'Lò nướng NIQ NQ-G33L', 1819000, 1490000, NULL, 'images/San-pham/22.jpg', NULL, NULL),
(23, 3, NULL, 21, NULL, 'Lò Nướng Bánh Mì Westinghouse WKTT3241', 859000, 559000, NULL, 'images/San-pham/23.jpg', NULL, NULL),
(24, 3, NULL, 21, NULL, 'Lò nướng Cornell CT09', 1070000, 890000, NULL, 'images/San-pham/24.jpg', NULL, NULL),
(25, 5, 18, 36, NULL, 'Áo Khoác Len Nam Mattana', 0, 845000, NULL, 'images/San-pham/25.jpg', NULL, NULL),
(26, 5, 18, 36, NULL, 'Áo thun nam Mattana', 0, 735000, NULL, 'images/San-pham/26.jpg', NULL, NULL),
(27, 5, 18, 37, NULL, 'Đầm nhung đen tay lửng Ren tiki -Tím', 480000, 420000, NULL, 'images/San-pham/27.jpg', NULL, NULL),
(28, 5, 18, 37, NULL, 'Đầm Họa Tiết Lớn Tiki -Đen', 400000, 320000, NULL, 'images/San-pham/28.jpg', NULL, NULL),
(29, 5, NULL, 41, NULL, 'Giày búp bê Me Gril -91359 - Xanh Cobalt', 0, 209000, NULL, 'images/San-pham/29.jpg', NULL, NULL),
(30, 5, NULL, 41, NULL, 'Giày búp bê vải hoa đen đỏ', 158000, 126000, NULL, 'images/San-pham/30.jpg', NULL, NULL),
(31, 5, NULL, 41, NULL, 'Giày Cao Gót Me Gril - Bít Mũ -Da', 0, 375000, NULL, 'images/San-pham/31.jpg', NULL, NULL),
(32, 5, NULL, 41, NULL, 'Giày cao gót me gril - bít mũi - đen', 0, 375000, NULL, 'images/San-pham/32.jpg', NULL, NULL),
(33, 4, 14, 34, 43, 'Bao Lì xì chữ nhật -Lì xì teen (M2-03)', 20000, 18000, '', 'images/San-pham/33.jpg', 'Mới lại.\r\nĐộng đáo.\r\nVui nhộn.', 'yes'),
(34, 4, 14, NULL, NULL, 'Bao Lì xì chữ nhật -Lì xì teen (M2-04)', 20000, 18000, NULL, 'images/San-pham/34.jpg', NULL, NULL),
(35, 4, 14, 34, 43, 'Bao Lì xì chữ nhật -Lì xì teen (M2-02)', 20000, 18000, '', 'images/San-pham/35.jpg', 'Mới độc đáo', 'yes'),
(38, 4, 14, NULL, NULL, 'Bao Lì xì chữ nhật -Lì xì teen (M2-01)', 20000, 18000, NULL, 'images/San-pham/36.jpg', NULL, NULL),
(39, 4, NULL, 28, NULL, 'Mô hình giấy cubic Fun: trụ sở quốc hội Hungarry', 0, 300000, NULL, 'images/San-pham/37.jpg', NULL, NULL),
(40, 4, NULL, 28, NULL, 'Mô hình lắp ghép - Buckingham Palace', 0, 300000, NULL, 'images/San-pham/38.jpg', NULL, NULL),
(41, 4, NULL, 28, NULL, 'Mô hình 3D -Notre Dame De Paris (LED)', 0, 500000, NULL, 'images/San-pham/39.jpg', NULL, NULL),
(42, 4, NULL, 28, NULL, 'Mô hình 3D -Neuschwanstein Castle', 0, 500000, NULL, 'images/San-pham/40.jpg', NULL, NULL),
(43, 6, 22, 46, 66, 'Dầu gội đầu Sunsilk Mềm mượt diệu kì 350g', 54000, 51000, NULL, 'images/San-pham/41.jpg', NULL, NULL),
(44, 6, 22, 49, 59, 'Nước hoa nam Adidas - Dynamic Pulse EDT 50ml', 215000, 190000, '', 'images/San-pham/42.jpg', 'Mới lại.\r\nĐộng đáo.\r\nVui nhộn.', 'yes'),
(45, 6, 22, NULL, 65, 'Sữa tắm dove dưỡng chất thấm sâu 180g', 43000, 40000, NULL, 'images/San-pham/43.jpg', NULL, NULL),
(46, 6, 22, NULL, NULL, 'Mặt Nạ giấy dưa leo PUREDERM 23ml', 0, 16000, NULL, 'images/San-pham/44.jpg', NULL, NULL),
(47, 6, NULL, 44, NULL, 'Chì kẻ mắt Etude Proof10 Auto', 225000, 180000, NULL, 'images/San-pham/45.jpg', NULL, NULL),
(48, 6, NULL, 44, NULL, 'Thanh che khuyết điểm Etude Surprise Stick Concealer #1', 250000, 200000, NULL, 'images/San-pham/46.jpg', NULL, NULL),
(49, 6, NULL, 44, NULL, 'Kem Lót thời trang điểm Mira B511-L', 0, 250000, NULL, 'images/San-pham/47.jpg', NULL, NULL),
(50, 6, NULL, 44, NULL, 'Cọ tán phấn Etude Eye Contour Brush', 99000, 89000, NULL, 'images/San-pham/48.jpg', NULL, NULL),
(54, 3, 10, 21, 23, 'Máy đánh trứng', 155000, 120000, '', 'images/San-pham/25081532b057aae51d1.59532214.jpg', 'dfdsfd\r\n\r\nfd\r\nfd\r\nfdf\r\nfd\r\nfd\r\nfd\r\nf', 'yes'),
(55, 6, 22, 46, 65, 'Dầu Xả dove', 50000, 45000, '', 'images/San-pham/17726532b06a34ca343.91750265.jpg', '', 'yes'),
(56, 1, 1, 3, 8, 'Một giọt đà bà', 35000, 38000, 'Không biết', 'images/San-pham/27361532b2e451d4960.39652007.jpg', 'Sách rất hay và ý nghĩa.\r\nCô động cảm xúc của tác giả.', 'yes'),
(57, 6, 22, 45, 60, 'Mặt nạ', 15000, 14000, '', 'images/San-pham/30934532efb53e4c211.49259558.jpg', 'frgfre\r\nrgre\r\nt\r\nret\r\nret\r\nret\r\nre\r\nt\r\nẻt\r\nre\r\ntre', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `ten_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL,
  PRIMARY KEY (`ten_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ten_user`, `pass`, `ho_ten`, `quyen`) VALUES
('admin', '123', 'Nguyễn Văn Kha', 1),
('k', '1', 'Nguyễn Tí Tèo', 3),
('kha', '123', 'kha', 3),
('kuem2405', '123', 'NGuyễn Tèo', 2),
('lan', '123', 'Lan hương', 3),
('pe', '123', 'Huỳnh Như', 3),
('pe1', '123', 'Nguyễn Tí ', 3),
('sa', '123', 'Nguyễn Tất Ngọc', 3),
('thanh', '123', 'Nguyễn Đại Thành', 3);

-- --------------------------------------------------------

--
-- Table structure for table `thuong_hieu`
--

CREATE TABLE IF NOT EXISTS `thuong_hieu` (
  `id_thuong_hieu` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int(10) unsigned NOT NULL,
  `name_thuong_hieu` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_thuong_hieu`),
  KEY `id_menu` (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id_thuong_hieu`, `id_menu`, `name_thuong_hieu`) VALUES
(1, 1, 'Aphabooks'),
(2, 1, 'Bách Việt'),
(3, 1, 'Đông Á'),
(4, 1, 'First News'),
(5, 1, 'Nhã Nam'),
(6, 1, 'NXB Kim Đồng'),
(7, 1, 'NXB Phụ Nữ'),
(8, 1, 'NXB Tuổi Trẻ'),
(9, 1, 'Quảng Văn'),
(10, 1, 'NXB Trẻ'),
(11, 1, 'TGM Books'),
(12, 1, 'Thái Hà'),
(13, 1, 'Văn Việt'),
(14, 2, 'Nokia'),
(15, 2, 'Sennhenser'),
(16, 2, 'Logitech'),
(17, 2, 'Philips'),
(18, 2, 'Elecom'),
(19, 2, 'Sony'),
(20, 2, 'Samsung'),
(21, 2, 'Zalmans'),
(22, 3, 'Philips'),
(23, 3, 'Sharp'),
(24, 3, 'Tefal'),
(25, 3, 'Kenwood'),
(26, 3, 'Suzumi'),
(27, 3, 'Panasonic'),
(28, 3, 'Bluehouse'),
(29, 3, 'Pensonic'),
(30, 3, 'Bamix'),
(31, 3, 'Cornell'),
(32, 3, 'Brother'),
(33, 3, 'Vision'),
(34, 3, 'Văn Việt'),
(35, 4, 'PLUS'),
(36, 4, 'Stabilo'),
(37, 4, 'Uni Mitsubish'),
(38, 4, 'Blueway'),
(39, 4, 'Lamy'),
(40, 4, 'Chó Đầu xù'),
(41, 4, 'Nici'),
(42, 4, 'BobiCraft'),
(43, 4, 'Cubic Fun'),
(44, 4, 'MetalWorks'),
(45, 5, 'FOCI'),
(46, 5, 'Zaa'),
(47, 5, 'Vera'),
(48, 5, 'Me Gril'),
(49, 5, 'Bò Sữa'),
(50, 5, 'Nhộng'),
(51, 5, 'WOW'),
(52, 5, 'SomiViet'),
(53, 5, 'Mattana'),
(54, 5, 'Novelty'),
(55, 5, 'Update Style'),
(56, 5, 'Vietnam T-Shirt Project'),
(57, 5, 'KENT'),
(58, 5, 'Paltal'),
(59, 6, 'Adidas'),
(60, 6, 'Playboy'),
(61, 6, 'Mira'),
(62, 6, 'Etude House'),
(63, 6, 'Ponds'),
(64, 6, 'Yoko'),
(65, 6, 'Dove'),
(66, 6, 'Sunsilk'),
(67, 6, 'Clear');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
