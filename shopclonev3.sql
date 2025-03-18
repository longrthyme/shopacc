-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 12, 2024 lúc 01:57 PM
-- Phiên bản máy phục vụ: 10.6.19-MariaDB-cll-lve-log
-- Phiên bản PHP: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fryduocahosting_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `groups` varchar(255) DEFAULT NULL,
  `account` text DEFAULT NULL,
  `chitiet` text DEFAULT NULL,
  `createdate` datetime DEFAULT NULL,
  `updatedate` datetime DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `listimg` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `purchase_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `stk` text NOT NULL,
  `name` text NOT NULL,
  `bank_name` text NOT NULL,
  `chi_nhanh` text NOT NULL,
  `logo` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `bank`
--

INSERT INTO `bank` (`id`, `stk`, `name`, `bank_name`, `chi_nhanh`, `logo`, `ghichu`) VALUES
(4, '8884448888', 'MB BANK', 'BUI THANH PHUONG', '', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/Logo_MB_new.png/1200px-Logo_MB_new.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bank_auto`
--

CREATE TABLE `bank_auto` (
  `id` int(11) NOT NULL,
  `tid` varchar(64) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) DEFAULT 0,
  `cusum_balance` int(11) DEFAULT 0,
  `time` datetime DEFAULT NULL,
  `bank_sub_acc_id` varchar(64) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `bank_auto`
--

INSERT INTO `bank_auto` (`id`, `tid`, `description`, `amount`, `cusum_balance`, `time`, `bank_sub_acc_id`, `username`, `deletedate`) VALUES
(1, 'FT24256415564807', 'CUSTOMER AUTOBANK16. TU: BUI DUC DUY', 10000, 0, '2024-09-12 12:25:25', NULL, 'ADMIN', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `loaithe` varchar(32) NOT NULL,
  `menhgia` int(11) NOT NULL,
  `thucnhan` int(11) DEFAULT 0,
  `seri` text NOT NULL,
  `pin` text NOT NULL,
  `createdate` datetime NOT NULL,
  `status` varchar(32) NOT NULL,
  `note` text NOT NULL,
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `loaithe`, `menhgia`, `thucnhan`, `seri`, `pin`, `createdate`, `status`, `note`, `deletedate`) VALUES
(1, '408652994', 'vietpc', 'VIETTEL', 50000, 0, '19995342315673', '172716352413254', '2024-08-24 18:56:23', 'thatbai', '', NULL),
(2, '509274235', 'Tuananh', 'VIETTEL', 50000, 0, '10010735241756', '196472826153421', '2024-08-24 21:33:04', 'thatbai', '', NULL),
(3, '714556582', 'Tuananh', 'VIETTEL', 20000, 0, '10010341735257', '213103809097754', '2024-08-25 20:54:28', 'thatbai', '', NULL),
(4, '529366302', 'tuanhacknha', 'VIETTEL', 50000, 50000, '10010641730426', '418059623345432', '2024-08-26 08:04:14', 'thanhcong', '', NULL),
(5, '311654222', 'tuanhacknha', 'VIETTEL', 50000, 50000, '10010641730421', '212725119263202', '2024-08-26 08:05:13', 'thanhcong', '', NULL),
(6, '542190149', 'tuanhacknha', 'VIETTEL', 50000, 50000, '10010641730434', '012712573867182', '2024-08-26 08:07:35', 'thanhcong', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `title`, `display`, `img`) VALUES
(16, 'Danh Mục Đăng Bán Tài khoản', 'SHOW', 'https://i.imgur.com/xBcgsBx.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_bandv`
--

CREATE TABLE `category_bandv` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_bandv`
--

INSERT INTO `category_bandv` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(22, 'DỊCH VỤ GEM ANIME DF', 'SHOW', 'https://i.imgur.com/hrCrTjW.jpeg', '<p><br></p>'),
(23, 'UNITS ANIME DF', 'SHOW', 'https://i.imgur.com/NkriGW2.jpeg', ''),
(24, 'BÁN ITEM ANIME DF', 'SHOW', 'https://i.imgur.com/uJR58tW.png', ''),
(25, 'BÁN UNITS TOILET TOWER DEFENSE', 'SHOW', 'https://i.imgur.com/Wth96IN.png', ''),
(26, 'GEMS TOILET TOWER DEFENSE', 'SHOW', 'https://i.imgur.com/89JcinL.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_caythue`
--

CREATE TABLE `category_caythue` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_caythue`
--

INSERT INTO `category_caythue` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(12, 'CÀY THUÊ BLOX FRUIT', 'SHOW', 'https://i.imgur.com/kY52wOa.png', 'ANH EM CÀY XIN VUI LÒNG TẮT 2 STEPS'),
(13, 'FRUIT RƯƠNG GIÁ RẺ', 'SHOW', 'https://i.imgur.com/tdx4lzl.jpeg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_gamepass`
--

CREATE TABLE `category_gamepass` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_gamepass`
--

INSERT INTO `category_gamepass` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(2, 'GAMEPASS BLOX FRUIT VIP', 'SHOW', 'https://i.imgur.com/IhyYBkd.png', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_robux`
--

CREATE TABLE `category_robux` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `luuy` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category_robux`
--

INSERT INTO `category_robux` (`id`, `title`, `display`, `img`, `luuy`) VALUES
(3, 'ROBUX 120H', 'SHOW', 'https://i.imgur.com/67tdxJO.png', ''),
(4, 'ROBUX CHÍNH HÃNG', 'SHOW', 'https://i.imgur.com/alm1oOu.png', '<p>GHI ĐÚNG TK MK</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongtien`
--

CREATE TABLE `dongtien` (
  `id` int(11) NOT NULL,
  `sotientruoc` int(11) DEFAULT NULL,
  `sotienthaydoi` int(11) DEFAULT NULL,
  `sotiensau` int(11) DEFAULT NULL,
  `thoigian` datetime DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `dongtien`
--

INSERT INTO `dongtien` (`id`, `sotientruoc`, `sotienthaydoi`, `sotiensau`, `thoigian`, `noidung`, `username`) VALUES
(1, 0, 1000000, 1000000, '2024-08-22 20:38:39', 'Admin thay đổi số dư ', 'doannhattien'),
(2, 1000000, 1000000, 0, '2024-08-22 20:39:00', 'Đặt hàng gói (100000 GEMS)', 'doannhattien'),
(3, 0, 28000, 28000, '2024-08-24 10:07:25', 'Admin thay đổi số dư ', 'HoangLe'),
(4, 0, 30000, 30000, '2024-08-24 14:51:59', 'Admin thay đổi số dư ', 'tuananh123'),
(5, 3454544, 40000, 3414544, '2024-08-24 18:33:55', 'Đặt hàng gói (700-1500 LV)', 'Tuananh'),
(6, 28000, 28000, 0, '2024-08-24 18:38:53', 'Đặt hàng gói (LẤY SOUL GUITAR)', 'HoangLe'),
(7, 3414544, 20000, 3394544, '2024-08-24 20:39:03', 'Mua tài khoản (#42)', 'Tuananh'),
(8, 0, 20000, 0, '2024-08-24 20:39:03', 'Bán tài khoản (#42)', ''),
(9, 3394544, -3384544, 10000, '2024-08-24 20:40:55', 'Admin thay đổi số dư ', 'Tuananh'),
(10, 10000, 0, 10000, '2024-08-24 21:12:09', 'Thực hiện (Vòng Quay Mùa Hè Sôi Động)', 'Tuananh'),
(11, 10000, 0, 10000, '2024-08-24 21:12:14', 'Thực hiện (Vòng Quay Mùa Hè Sôi Động)', 'Tuananh'),
(12, 50000, 50000, 0, '2024-08-26 08:04:21', 'Nạp tiền tự động qua thẻ cào seri (10010641730426)', 'tuanhacknha'),
(13, 100000, 50000, 50000, '2024-08-26 08:05:20', 'Nạp tiền tự động qua thẻ cào seri (10010641730421)', 'tuanhacknha'),
(14, 150000, 50000, 100000, '2024-08-26 08:07:41', 'Nạp tiền tự động qua thẻ cào seri (10010641730434)', 'tuanhacknha'),
(15, 150000, 150000, 0, '2024-08-26 08:08:35', 'Đặt hàng gói (YORU/HẮC KIẾM)', 'tuanhacknha'),
(16, 10000, 10000, 0, '2024-08-27 21:43:32', 'Đặt hàng gói (dfgdsf)', 'Tuananh'),
(17, 20000, 10000, 10000, '2024-08-27 21:46:46', 'Hoàn tiền gói (dfgdsf)', 'Tuananh'),
(18, 0, 11000, 11000, '2024-09-12 12:25:25', 'Nạp tiền tự động ngân hàng (Vietcombank | FT24256415564807)', 'ADMIN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `gia` int(100) NOT NULL,
  `chitiet` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `category`, `title`, `display`, `img`, `gia`, `chitiet`) VALUES
(63, 62, '', '', 'assets/storage/images/groups_AJ1ROG3PKMWS.png', 0, 'MTAwJSBnb2QgaHVtYW4='),
(64, 55, '', '', 'assets/storage/images/groups_3LIW9EKX268N.png', 0, 'MTAwJSBza2lu'),
(71, 16, 'ACC 100% GOD HUMAN', 'SHOW', 'assets/storage/images/groups_A7SZJ9MFLGQK.png', 25000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIFThu4ggTOG7hiBO4buUIEdBTUVQQVNTIENBTzxicj48L3A+'),
(72, 16, 'ACC 100% CÓ TỪ 1500-2550 LV', 'SHOW', 'assets/storage/images/groups_QCVHEKT906OP.png', 15000, ''),
(73, 16, 'ACC 100% GOD HUMAN + SOUL GUITA', 'SHOW', 'assets/storage/images/groups_YH27Q61ZS0MW.png', 25000, ''),
(74, 16, 'ACC 100%  MAX LV CÓ TỪ 3-5 MELLE V2ACC 100%  MAX LV + GOD HUMAN TỈ LỆ NỔ GAMEPASS CAO', 'SHOW', 'assets/storage/images/groups_I1HX6PVGEJB9.png', 20000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIFThu4ggTOG7hiBO4buUIEdBTUVQQVNTIENBTyBWw4AgTUVMTEUgTeG7mkk8YnI+PC9wPg=='),
(75, 16, 'ACC 100%  MAX LV + GOD HUMAN SONG KIẾM', 'SHOW', 'assets/storage/images/groups_CWANSF7MD9BG.png', 32000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIENESyBU4buIIEzhu4YgTuG7lCBGRzxicj48L3A+'),
(76, 16, 'ACC 100%  MAX LV + GOD HUMAN MOCHI V2', 'SHOW', 'assets/storage/images/groups_VGH3KQXNR29A.png', 35000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIE1PQ0hJIFYyIFThu4ggTOG7hiBO4buUIEdBTUVQQVNTIENBTzxicj48L3A+'),
(77, 16, 'ACC 100%  MAX LV + GOD HUMAN CDK MOCHI V2', 'SHOW', 'assets/storage/images/groups_Q5ALB6DKCJG2.png', 40000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIENESyBNT0NISSBWMiBU4buIIEzhu4YgTuG7lCBHQU1FUEFTUyBDQU88YnI+PC9wPg=='),
(78, 16, 'ACC 100%  MAX LV + GOD HUMAN MỎ NEO', 'SHOW', 'assets/storage/images/groups_1CT06VUAQEHZ.png', 35000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIE3hu44gTkVPIFThu4ggTOG7hiBO4buUIEdBTUVQQVNTIENBTzxicj48L3A+'),
(79, 16, 'ACC 100%  MAX LV + GOD HUMAN KIT RƯƠNG', 'SHOW', 'assets/storage/images/groups_18A7LEQJTUYH.png', 75000, 'PHA+QUNDIDEwMCUmbmJzcDsgTUFYIExWICsgR09EIEhVTUFOIEtJVCBSxq/GoE5HIFThu4ggTOG7hiBO4buUIEdBTUVQQVNTIENBTzxicj48L3A+'),
(80, 16, 'ACC 100% MAX LV + MELLE MỚI', 'SHOW', 'assets/storage/images/groups_JROZUCWE2GIX.png', 75000, 'PHA+PHNwYW4gc3R5bGU9ImNvbG9yOiByZ2IoMzMsIDM3LCA0MSk7IHRleHQtd3JhcDogbm93cmFwOyBiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoMjM0LCAyMzQsIDI0MSk7Ij5BQ0MgMTAwJSBNQVggTFYgKyBNRUxMRSBN4buaSSBHQU1FUEFTUyZuYnNwOzwvc3Bhbj48YnI+PC9wPg=='),
(81, 16, 'ACC 100% MAX LV + GOD HUMAN HOẶC GOD CDK RANGDOM GEAR', 'SHOW', 'assets/storage/images/groups_O91H4SE58DPK.png', 45000, 'PHA+QUNDIDEwMCUgTUFYIExWICsgR09EIEhVTUFOIEhP4bq2QyBHT0QgQ0RLIFJBTkdET00gR0VBUjxicj48L3A+'),
(82, 16, 'ACC 100% MAX LV + GOD HUMAN HOẶC GOD CDK FG GEAR', 'SHOW', 'assets/storage/images/groups_X1SDOP09AMVE.png', 65000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_bandv`
--

CREATE TABLE `groups_bandv` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups_bandv`
--

INSERT INTO `groups_bandv` (`id`, `category`, `title`, `display`, `money`, `img`) VALUES
(7, 8, 'Hyper Upgraded Titan Speakerman', NULL, 399000, ''),
(8, 8, 'DJ TV MAN', NULL, 1100000, ''),
(9, 8, 'Astro Upgraded Titan Cameraman', NULL, 72000, ''),
(10, 8, 'Green Laser Cameraman', NULL, 48000, ''),
(19, 10, 'Upgraded Titan Speakerman', NULL, 149000, ''),
(20, 10, 'Titan Clock', NULL, 222000, ''),
(21, 10, 'Ultimate Titan Tv Man', NULL, 250000, ''),
(22, 10, 'Upgraded Titan Cameraman', NULL, 279000, ''),
(23, 10, 'TriTitan', NULL, 522786, ''),
(24, 10, 'Titan Clover Man', NULL, 349645, ''),
(25, 10, 'Leprecheun Cameraman', NULL, 29432, ''),
(32, 9, '800 GEMS + 100 GEMS', NULL, 10000, 'https://i.imgur.com/NMprCBF.jpeg'),
(33, 9, '1700 GEMS + 200 GEMS', NULL, 20000, 'https://i.imgur.com/NMprCBF.jpeg'),
(34, 9, '4200 GEMS + 500 GEMS', NULL, 50000, 'https://i.imgur.com/NMprCBF.jpeg'),
(35, 9, '8200 GEMS + 1050 GEMS', NULL, 100000, 'https://i.imgur.com/NMprCBF.jpeg'),
(36, 9, '18000 GEMS + 1000 GEMS', NULL, 200000, 'https://i.imgur.com/NMprCBF.jpeg'),
(37, 9, '49000 GEMS + 1000 GEMS', NULL, 500000, 'https://i.imgur.com/NMprCBF.jpeg'),
(38, 9, '100000 GEMS', NULL, 1000000, 'https://i.imgur.com/NMprCBF.jpeg'),
(40, 11, 'Hyper Upgraded Titan Speakerman', NULL, 249000, 'https://i.imgur.com/SenCstc.png'),
(41, 11, 'DJ TV Man', NULL, 998000, 'https://i.imgur.com/AiR1RD8.png'),
(42, 11, 'Upgraded Titan Cinemaman', NULL, 38000, 'https://i.imgur.com/bBQ7Ntk.png'),
(43, 11, 'Titan Clover Man', NULL, 295000, 'https://i.imgur.com/GuHwgVJ.png'),
(44, 11, 'Speaker Repair Drone', NULL, 48000, 'https://i.imgur.com/j2uCyo3.png'),
(45, 11, 'Green Laser Cameraman', NULL, 38000, 'https://i.imgur.com/9Y7gFsR.png'),
(46, 11, 'Astro Upgraded Titan Cameraman', NULL, 69000, 'https://i.imgur.com/12Xkv5G.png'),
(47, 11, 'Upgraded Camera Spider', NULL, 35000, 'https://i.imgur.com/mHEvDgd.png'),
(48, 11, 'X1 BUNNY CRATE', NULL, 1900, 'https://i.imgur.com/HuUUrRy.png'),
(49, 11, 'Titan Sigma', NULL, 52000, 'https://i.imgur.com/kcXS7ni.png'),
(50, 11, 'Leprecheun Cam', NULL, 20000, 'https://i.imgur.com/8RGL5f2.png'),
(51, 11, 'X1 CLOVER CRATE', NULL, 2000, 'https://i.imgur.com/3DcPr1S.png'),
(52, 11, 'X10 CLOVER CRATE', NULL, 19000, 'https://i.imgur.com/3DcPr1S.png'),
(53, 11, 'X10 BUNNY CRATE', NULL, 18700, 'https://i.imgur.com/MQDjigS.png'),
(54, 11, 'SPIDER TV', NULL, 250000, 'https://i.imgur.com/c3IXyO6.png'),
(55, 11, 'CHEF TV', NULL, 169000, 'https://i.imgur.com/F70IFUR.png'),
(56, 11, 'Corrupted Cameraman', NULL, 320000, 'https://i.imgur.com/Zlzgqak.png'),
(57, 11, 'Engineer Cameraman', NULL, 199000, 'https://i.imgur.com/OOR63lZ.png'),
(58, 11, 'Titan Clock Man', NULL, 55000, 'https://i.imgur.com/Rep80S2.png'),
(59, 11, 'Toxic Upgraded Titan Cameraman', NULL, 19000, 'https://i.imgur.com/9K8N23j.png'),
(60, 11, 'Upgraded Mech Cameraman', NULL, 18999, 'https://i.imgur.com/IgDkvrS.png'),
(61, 12, 'TriTitan', NULL, 498000, 'https://i.imgur.com/akA8Gh3.png'),
(62, 11, 'Upgraded Titan Drill Man', NULL, 3999556, 'https://i.imgur.com/gIXSsuT.png'),
(63, 15, 'TriTitan', NULL, 289000, 'https://i.imgur.com/Q8OFC9N.png'),
(64, 15, 'Upgarded Spider Camera', NULL, 48690, 'https://i.imgur.com/nPo8tgD.png'),
(65, 15, 'Titan Clover Man', NULL, 999000, 'https://i.imgur.com/FXZtm92.png'),
(66, 15, 'Lucky TV Woman', NULL, 199000, 'https://i.imgur.com/eWuoVdw.png'),
(67, 15, 'Shamrock Speakerman', NULL, 39000, 'https://i.imgur.com/j8DstsZ.png'),
(68, 15, 'Leprecheun Cameraman', NULL, 9000, 'https://i.imgur.com/bYiKr96.png'),
(69, 15, 'Hammer Pencilman', NULL, 795900, 'https://i.imgur.com/iH2jrd0.png'),
(70, 15, 'Robotic-C-Pen', NULL, 178000, 'https://i.imgur.com/bjG5jU5.png'),
(71, 15, 'Pencilman', NULL, 14500, 'https://i.imgur.com/0zQjgrM.png'),
(72, 15, 'Upgraded Titan Speakerman', NULL, 68000, 'https://i.imgur.com/6oyolIp.png'),
(73, 15, 'Healer TV Woman', NULL, 35000, 'https://i.imgur.com/U2mYGiW.png'),
(74, 15, 'Summoner Pencilman', NULL, 49000, 'https://i.imgur.com/AVqkdlU.png'),
(75, 15, 'Large TV Speakerman', NULL, 19000, 'https://i.imgur.com/umilsTv.png'),
(76, 15, 'Titan Computer Man', NULL, 499000, 'https://i.imgur.com/08YINMP.png'),
(77, 15, 'Drill Assasin', NULL, 127000, 'https://i.imgur.com/uMPUPom.png'),
(78, 15, 'Drill Woman', NULL, 11432, 'https://i.imgur.com/KH5jjdK.png'),
(79, 15, 'Upgrade Camera Woman', NULL, 7778, 'https://i.imgur.com/xTM4Fgy.png'),
(80, 15, 'Ultimate TV Man', NULL, 125050, 'https://i.imgur.com/tRmj0wx.png'),
(81, 15, 'Secret Agent', NULL, 1870834, 'https://i.imgur.com/pZJWJCP.png'),
(82, 15, 'Titan Clock', NULL, 263000, 'https://i.imgur.com/mPS8tug.png'),
(83, 15, 'Upgraded Titan Camera', NULL, 119000, 'https://i.imgur.com/6Hr0Ghq.png'),
(84, 15, 'Titan Reaper', NULL, 107000, 'https://i.imgur.com/S0wg03K.png'),
(85, 11, 'Mewing TV Man', NULL, 18900, 'https://i.imgur.com/AbcWbOB.png'),
(86, 11, 'Upgraded Titan Cam', NULL, 19000, 'https://i.imgur.com/wKMp5uh.png'),
(87, 11, 'Titan Bunny Man', NULL, 19000, 'https://i.imgur.com/TjvesfX.png'),
(88, 11, 'Mech Bunny Titan', NULL, 99000, 'https://i.imgur.com/sNwPlaU.png'),
(89, 11, 'Egg Launcher Cameraman', NULL, 9000, 'https://i.imgur.com/s9zW3Rm.png'),
(90, 11, 'Large Bunny', NULL, 8999, 'https://i.imgur.com/7gKcI9t.png'),
(91, 11, 'Dual Blade Bunnyman', NULL, 5000, 'https://i.imgur.com/MvaaVxa.png'),
(92, 11, 'Easter Speakerman', NULL, 4898, 'https://i.imgur.com/wwpmx4t.png'),
(93, 11, 'x100 BUNNY CRATE', NULL, 189000, 'https://i.imgur.com/2D4lmBL.png'),
(94, 11, 'Lucky Speakerman', NULL, 5555, 'https://i.imgur.com/mzEksct.png'),
(95, 11, 'X100 CLOVER CRATE', NULL, 198000, 'https://i.imgur.com/FlH68v7.png'),
(96, 11, 'Red Laser Cameraman', NULL, 29654, 'https://i.imgur.com/4siBgns.png'),
(97, 11, 'Titan Drill Man', NULL, 48900, 'https://i.imgur.com/sid3UwM.png'),
(98, 11, 'Saw Upgraded Titan Cameraman', NULL, 12000, 'https://i.imgur.com/lOpLgl9.png'),
(99, 11, 'Large Heart Speakerman', NULL, 21134, 'https://i.imgur.com/SNiIU3D.png'),
(100, 11, 'Speakerwoman\\\'s Rose Farm', NULL, 9889, 'https://i.imgur.com/kGViuf1.png'),
(101, 11, 'Healter TV Woman', NULL, 100000, 'https://i.imgur.com/JjkCpGZ.png'),
(102, 11, 'Speaker Large TV Man', NULL, 19000, 'https://i.imgur.com/eJoegfD.png'),
(103, 11, 'x1 VALENTIENS DAY CRATE', NULL, 6000, 'https://i.imgur.com/sf85FjY.png'),
(104, 11, 'x10 VALENTIENS DAY CRATE', NULL, 58000, 'https://i.imgur.com/sf85FjY.png'),
(105, 11, 'x100 VALENTIENS DAY CRATE', NULL, 566700, 'https://i.imgur.com/sf85FjY.png'),
(106, 11, 'Jetpack Mace Camerman', NULL, 35000, 'https://i.imgur.com/o58JG0E.png'),
(107, 11, 'Spear Speakerman', NULL, 10000, 'https://i.imgur.com/VTsXZco.png'),
(108, 11, 'Katana Speakerwoman', NULL, 8780, 'https://i.imgur.com/mmJsURj.png'),
(109, 11, 'Shotgun Cameraman', NULL, 32000, 'https://i.imgur.com/OhbY2XJ.png'),
(110, 11, 'Injured Titan Crate', NULL, 9875, 'https://i.imgur.com/uTig6B3.png'),
(111, 11, 'Minigun Camerawoman', NULL, 9999, 'https://i.imgur.com/5DazuKK.png'),
(112, 11, 'Flamethrower Cameraman', NULL, 25054, 'https://i.imgur.com/jJJlwJN.png'),
(113, 11, 'Annoucer Cameraman', NULL, 14686, 'https://i.imgur.com/8HCottb.png'),
(114, 11, 'Ghost Cameraman', NULL, 29865, 'https://i.imgur.com/ftVR9fQ.png'),
(115, 15, 'Cosmic Plague Doctor', NULL, 499000, 'https://i.imgur.com/I60j7p2.png'),
(116, 15, 'Microphone Man', NULL, 5000, 'https://i.imgur.com/LkZ5Hul.png'),
(117, 15, 'Camcorder Man', NULL, 19556, 'https://i.imgur.com/QjDSuQR.png'),
(118, 15, 'Sonar Woman', NULL, 125909, 'https://i.imgur.com/l1LRvWA.png'),
(119, 15, 'Sonar Titan', NULL, 498000, 'https://i.imgur.com/W2pvuQC.png'),
(120, 15, 'Digito', NULL, 89000, 'https://i.imgur.com/5MA1Xp9.png'),
(121, 15, 'Upgraded Titan Clock', NULL, 450000, 'https://i.imgur.com/aNoV2Nm.png'),
(122, 15, 'Infected Titan Drill', NULL, 99676, 'https://i.imgur.com/fwoIBIh.png'),
(123, 15, 'Infected Speakerman', NULL, 12323, 'https://i.imgur.com/5272k06.png'),
(124, 15, 'Infected Cameraman', NULL, 4756, 'https://i.imgur.com/fKz7uX2.png'),
(126, 11, 'COMBO PHÁ ĐẢO ENDLESS VER 1', NULL, 139000, 'https://i.imgur.com/ktZOfo7.png'),
(127, 11, 'COMBO HỦY DIỆT BỒN CẦU', NULL, 29000, 'https://i.imgur.com/AgNEtZL.png'),
(128, 11, 'COMBO GODLY', NULL, 119000, 'https://i.imgur.com/SMQvV2x.jpeg'),
(129, 15, 'Secret Agent', NULL, 1999999, 'https://i.imgur.com/XikxTwG.png'),
(130, 15, 'Large Laser Camera', NULL, 100000, 'https://i.imgur.com/lkMuv3X.png'),
(131, 15, 'Glitch Cameraman', NULL, 48986, 'https://i.imgur.com/mbOBfYE.png'),
(132, 15, 'Titan Rocket Man', NULL, 255000, 'https://i.imgur.com/b4lEOiO.png'),
(133, 15, 'Titan Drillman', NULL, 69766, 'https://i.imgur.com/lVtcRp6.png'),
(134, 15, 'Valentine Titan', NULL, 209923, 'https://i.imgur.com/PUybSYO.png'),
(135, 15, 'Ice Thrower', NULL, 48332, 'https://i.imgur.com/kzGB3Fy.png'),
(136, 15, 'Titan TV Man', NULL, 101000, 'https://i.imgur.com/3WeWl6c.png'),
(137, 15, 'Mace Cameraman', NULL, 48000, 'https://i.imgur.com/Xer5fWv.png'),
(138, 15, 'Spider TV', NULL, 52000, 'https://i.imgur.com/uRRqKDi.png'),
(139, 15, 'Plunger Cameraman', NULL, 48342, 'https://i.imgur.com/RQmMjsS.png'),
(140, 15, 'Large Spotlightman', NULL, 48542, 'https://i.imgur.com/xxxgBXT.png'),
(141, 15, 'Jetpack Man', NULL, 46000, 'https://i.imgur.com/wb6KboY.png'),
(142, 15, 'TV Woman', NULL, 48888, 'https://i.imgur.com/lYocISf.pn'),
(143, 15, 'BemmyBlox', NULL, 109323, 'https://i.imgur.com/a4IaXnq.png'),
(144, 15, 'Upgraded Titan Drillman', NULL, 105343, 'https://i.imgur.com/iSN1ZQV.jpeg'),
(145, 15, 'Daboom', NULL, 69075, 'https://i.imgur.com/n8LEBaU.png'),
(146, 15, 'Gem Cameraman', NULL, 177000, 'https://i.imgur.com/ZyelfAB.png'),
(147, 15, 'Titan Gem Man', NULL, 1215800, 'https://i.imgur.com/nSjc8o4.png'),
(148, 15, 'Acid Gunner', NULL, 9999, 'https://i.imgur.com/bDhhnTv.png'),
(149, 15, 'DJ Man', NULL, 12422, 'https://i.imgur.com/pVu56XW.png'),
(150, 15, 'Scientist Cameraman', NULL, 29876, 'https://i.imgur.com/4w9lJeN.png'),
(151, 15, 'Bazooka Man', NULL, 9999, 'https://i.imgur.com/cq8RlUY.png'),
(152, 15, 'Camera Helicopter', NULL, 9856, 'https://i.imgur.com/qyaoXfK.png'),
(153, 15, 'Large TV Man', NULL, 9875, 'https://i.imgur.com/qnKwSUm.png'),
(154, 15, 'Speaker Woman', NULL, 8987, 'https://i.imgur.com/4fwlp1y.png'),
(155, 15, 'Spider Cameraman', NULL, 7888, 'https://i.imgur.com/pSnsAo7.png'),
(156, 15, 'Dark Speakerman', NULL, 11193, 'https://i.imgur.com/daWundl.png'),
(157, 15, 'Firework Bazooka Man', NULL, 48888, 'https://i.imgur.com/gWXiRSV.png'),
(158, 15, 'Clock Woman', NULL, 19999, 'https://i.imgur.com/jEzHmb5.png'),
(159, 15, 'Flame Thrower', NULL, 21678, 'https://i.imgur.com/H2vxffL.png'),
(160, 15, 'Valentine Man', NULL, 12122, 'https://i.imgur.com/KemsgL4.png'),
(162, 15, 'Spotlight Man', NULL, 8454, 'https://upanh.tv/image/2vxZ1L'),
(163, 15, 'Speaker Helicopter', NULL, 7897, 'https://upanh.tv/image/2vx9Cz'),
(164, 11, 'Scientist Mech', NULL, 38000, 'https://i.imgur.com/fhuAHVL.png'),
(165, 11, 'Mace Camerawoman', NULL, 9890, 'https://i.imgur.com/a842Aim.png'),
(166, 15, 'Evil TV Woman', NULL, 109000, 'https://i.imgur.com/1z5P52N.png'),
(167, 15, 'Evil Speakerman', NULL, 19000, 'https://i.imgur.com/2A0pe9q.png'),
(168, 15, 'Evil Cameraman', NULL, 4668, 'https://i.imgur.com/ZK4x8kl.png'),
(169, 15, 'Evil Flamethrower', NULL, 149000, 'https://i.imgur.com/4zNVkjb.png'),
(170, 15, 'Evil Scientist Cameraman', NULL, 36598, 'https://i.imgur.com/6OVykqU.png'),
(172, 15, 'Evil Spotlightman', NULL, 8680, 'https://i.imgur.com/Qyrx6To.png'),
(173, 15, 'Evil TV Man', NULL, 36880, 'https://i.imgur.com/HtQ6Ib3.png'),
(174, 15, 'Evil Titan Clockman', NULL, 417000, 'https://i.imgur.com/shUtyMU.png'),
(175, 15, 'Evil Secret Agent', NULL, 419000, 'https://i.imgur.com/K9000CH.png'),
(176, 18, 'Huge Poseidon Corgi', NULL, 72000, 'https://i.imgur.com/BkmDYe9.jpeg'),
(177, 18, 'Huge Happy Rock', NULL, 67000, 'https://i.imgur.com/TWGPskx.jpeg'),
(178, 18, 'Huge Hell Rock', NULL, 66544, 'https://i.imgur.com/fSpY0Xv.jpeg'),
(179, 18, 'Huge Happy Computer', NULL, 53333, 'https://i.imgur.com/YtUGWSO.jpeg'),
(180, 18, '5.000.000 Gem', NULL, 5000, 'https://i.imgur.com/26m96Ua.jpeg'),
(181, 18, '10.000.000 Gem', NULL, 9999, 'https://i.imgur.com/26m96Ua.jpeg'),
(182, 18, '30.000.000 Gem', NULL, 29996, 'https://i.imgur.com/26m96Ua.jpeg'),
(183, 18, '50.000.000 Gem', NULL, 48976, 'https://i.imgur.com/26m96Ua.jpeg'),
(184, 18, '100.000.000 Gem', NULL, 97584, 'https://i.imgur.com/26m96Ua.jpeg'),
(185, 21, 'dfgdsf', NULL, 10000, 'https://i.imgur.com/tyolkwa.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_caythue`
--

CREATE TABLE `groups_caythue` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups_caythue`
--

INSERT INTO `groups_caythue` (`id`, `category`, `title`, `display`, `money`) VALUES
(1, 9, '550 GEMS', NULL, 10000),
(2, 9, '1200 GEMS', NULL, 20000),
(3, 9, '2700 GEMS', NULL, 50000),
(4, 9, '5555 GEMS', NULL, 100000),
(5, 9, '12000 GEMS', NULL, 200000),
(6, 9, '26000 GEMS', NULL, 500000),
(7, 8, 'Hyper Upgraded Titan Speakerman', NULL, 399000),
(8, 8, 'DJ TV MAN', NULL, 1100000),
(9, 8, 'Astro Upgraded Titan Cameraman', NULL, 72000),
(10, 8, 'Green Laser Cameraman', NULL, 48000),
(11, 11, 'Hyper Upgraded Titan Speakerman', NULL, 499000),
(12, 11, 'DJ TV Man', NULL, 1199000),
(13, 11, 'Green Laser Cameraman', NULL, 39000),
(14, 11, 'Speaker Repair Drone', NULL, 39000),
(15, 11, 'Upgraded Titan Cinemaman', NULL, 69000),
(16, 11, 'Chef TV Man', NULL, 239000),
(17, 11, 'Engineer Cameraman', NULL, 259000),
(18, 11, 'Astro Upgraded Titan Cameraman', NULL, 69000),
(19, 10, 'Upgraded Titan Speakerman', NULL, 149000),
(20, 10, 'Titan Clock', NULL, 222000),
(21, 10, 'Ultimate Titan Tv Man', NULL, 250000),
(22, 10, 'Upgraded Titan Cameraman', NULL, 279000),
(23, 10, 'TriTitan', NULL, 522786),
(24, 10, 'Titan Clover Man', NULL, 349645),
(25, 10, 'Leprecheun Cameraman', NULL, 29432),
(26, 11, 'Healer TV Woman', NULL, 99000),
(27, 11, 'Sinister TV Man', NULL, 49865),
(28, 11, 'Titan Clock Man', NULL, 48000),
(29, 12, '1-700 LV', NULL, 40000),
(30, 12, '700-1500 LV', NULL, 40000),
(31, 12, '1500-2550', NULL, 60000),
(32, 12, '1-2550 LV', NULL, 120000),
(33, 12, '20M BELI', NULL, 20000),
(34, 12, '17K F', NULL, 20000),
(35, 12, '1-FULL CHIÊU MELLE HOẶC KIẾM (GHI CHÚ)', NULL, 10000),
(36, 12, '1-FULL CHIÊU FRUIT (GHI CHÚ)', NULL, 15000),
(37, 12, '1-600 MAS', NULL, 20000),
(38, 12, '1-600 MAS FRUIT', NULL, 25000),
(39, 12, 'LẤY MELLE V2 (GHI CHÚ MELLE CẦN LẤY )', NULL, 20000),
(40, 12, 'LẤY GOD HUMAN', NULL, 30000),
(41, 12, 'LẤY TUSHITA', NULL, 30000),
(42, 12, 'LẤY YAMA', NULL, 30000),
(43, 12, 'TAM KIẾM ZORO', NULL, 30000),
(44, 12, 'LẤY SONG KIẾM ĐÃ ĐỦ YAMA VÀ TUSHITA', NULL, 30000),
(45, 12, 'LẤY LƯỠI HÁI BÓNG TỐI', NULL, 30000),
(46, 12, 'LẤY MỎ NEO', NULL, 75000),
(47, 12, 'LẤY FOX LAMP', NULL, 75000),
(48, 12, 'LẤY YORU V3', NULL, 120000),
(49, 12, 'CÀY MẢNH GƯƠNG', NULL, 20000),
(50, 12, 'LẤY MŨ ADMIN', NULL, 20000),
(51, 12, 'GẠT CẦN', NULL, 10000),
(52, 12, 'GẠT CẦN (COMBO LẤY MẢNH MŨ)', NULL, 30000),
(53, 12, 'LẤY 1 GEAR V4', NULL, 15000),
(54, 12, 'LẤY FULL GEAR V4', NULL, 50000),
(55, 12, 'AWK FULL THƯỜNG(GHI CHÚ)', NULL, 15000),
(56, 12, 'AWK MOCHI HOẶC PHOENIX (GHI CHÚ)', NULL, 30000),
(57, 12, 'LẤY SOUL GUITAR', NULL, 28000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_gamepass`
--

CREATE TABLE `groups_gamepass` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups_gamepass`
--

INSERT INTO `groups_gamepass` (`id`, `category`, `title`, `display`, `money`) VALUES
(1, 2, 'X2 DROP/X2 TỈ LỆ RƠI ĐỒ', NULL, 45000),
(2, 2, 'THUYỀN SIÊU TỐC', NULL, 45000),
(3, 2, 'X2 MAS/X2 THÔNG THẠO', NULL, 60000),
(4, 2, 'X2 MONEY/X2 TIỀN', NULL, 60000),
(5, 2, 'YORU/HẮC KIẾM', NULL, 150000),
(6, 2, 'FRUIT NOTIFIER/TÌM FRUIT', NULL, 372000),
(7, 2, 'FULL GAMEPASS (TRỪ TÌM FRUIT)', NULL, 350000),
(8, 2, 'FULL GMAEPASS', NULL, 760000),
(9, 2, '+1 SLOT/+1 RƯƠNG', NULL, 52000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups_robux`
--

CREATE TABLE `groups_robux` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `display` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `groups_robux`
--

INSERT INTO `groups_robux` (`id`, `category`, `title`, `display`, `money`) VALUES
(1, 3, '80 RB', NULL, 10000),
(2, 3, '160 RB', NULL, 20000),
(3, 3, '240 RB', NULL, 30000),
(4, 3, '320 RB', NULL, 40000),
(5, 3, '400 RB', NULL, 50000),
(6, 3, '480 RB', NULL, 60000),
(7, 3, '560 RB', NULL, 70000),
(8, 3, '640 RB', NULL, 80000),
(9, 3, '720 RB', NULL, 90000),
(10, 3, '800 RB', NULL, 100000),
(11, 3, '1600 RB', NULL, 200000),
(12, 3, '4000 RB', NULL, 500000),
(13, 4, '40 RB', NULL, 25000),
(14, 4, '80 RB', NULL, 42000),
(15, 4, '160 RB', NULL, 84000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuvongquay`
--

CREATE TABLE `lichsuvongquay` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `soluong` int(11) DEFAULT 0,
  `NA_trathuong` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichsuvongquay`
--

INSERT INTO `lichsuvongquay` (`id`, `username`, `soluong`, `NA_trathuong`, `time`) VALUES
(1, 'hoangduchuy', 44, NULL, 1684191671),
(2, 'hoangduchuy', 44, NULL, 1684191683),
(3, '', 55, NULL, 1684337968),
(4, 'admin', 44, NULL, 1684401555),
(5, '', 44, NULL, 1684402534),
(6, 'admin', 33, NULL, 1684403531),
(7, 'admin', 44, NULL, 1684403531),
(8, 'admin', 33, NULL, 1684403531),
(9, 'bicoder', 44, NULL, 1712513046),
(10, 'Ngvhoang', 55, NULL, 1712548067),
(11, '', 0, NULL, 1712746656),
(12, '', 0, NULL, 1712746659),
(13, '', 0, NULL, 1714335094),
(14, 'Kocoten', 0, NULL, 1714721974),
(15, 'Kocoten', 0, NULL, 1714721975),
(16, '', 0, NULL, 1714729244),
(17, 'bicoder', 2, NULL, 1714871676),
(18, '', 2, NULL, 1714875147),
(19, '', 6, NULL, 1714875149),
(20, 'Ngvhoang', 2, NULL, 1714875177),
(21, 'Jjctgfhf', 2, NULL, 1714878041),
(22, 'Ngvhoang', 2, NULL, 1714885019),
(23, '', 2, NULL, 1714920020),
(24, 'Dattt', 2, NULL, 1714920052),
(25, 'Dattt', 2, NULL, 1714920052),
(26, 'Ducks', 2, NULL, 1715000351),
(27, '', 2, NULL, 1715000710),
(28, 'Tuananh', 111, NULL, 1724508568);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `solan` varchar(255) NOT NULL,
  `giam` varchar(255) NOT NULL,
  `dichvu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`id`, `code`, `solan`, `giam`, `dichvu`) VALUES
(1, 'XENROBLOX.COM', 'XENROBLOX.COM', '10', 'caythue');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mini_game`
--

CREATE TABLE `mini_game` (
  `id` int(255) NOT NULL,
  `name` varchar(999) DEFAULT NULL,
  `price` varchar(999) NOT NULL DEFAULT '0',
  `sudung` varchar(999) NOT NULL DEFAULT '0',
  `thumb` varchar(999) NOT NULL DEFAULT '0',
  `image` varchar(999) NOT NULL DEFAULT '0',
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'true',
  `time` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mini_game_gift`
--

CREATE TABLE `mini_game_gift` (
  `id` int(255) NOT NULL,
  `id_vongquay` int(255) NOT NULL,
  `item_1` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_2` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_3` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_4` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_5` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_6` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_7` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `item_8` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mini_game_gift`
--

INSERT INTO `mini_game_gift` (`id`, `id_vongquay`, `item_1`, `item_2`, `item_3`, `item_4`, `item_5`, `item_6`, `item_7`, `item_8`) VALUES
(1, 1, '{\"text\":\"Ch\\u00fac May May Lan Sau\",\"kimcuong\":\"33\",\"tyle\":\"5\"}', '{\"text\":\"99 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"122\",\"tyle\":\"5\"}', '{\"text\":\"899 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"222\",\"tyle\":\"5\"}', '{\"text\":\"1299 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"5\"}', '{\"text\":\"3999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"5\"}', '{\"text\":\"5999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"5\"}', '{\"text\":\"7999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"5\"}', '{\"text\":\"9999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"5\"}'),
(2, 2, '{\"text\":\"Ch\\u00fac May May Lan Sau\",\"kimcuong\":\"44\",\"tyle\":\"2\"}', '{\"text\":\"99 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"3\"}', '{\"text\":\"899 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"5\"}', '{\"text\":\"1299 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"55\",\"tyle\":\"4\"}', '{\"text\":\"3999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"44\",\"tyle\":\"3\"}', '{\"text\":\"6999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"2\"}', '{\"text\":\"7999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"22\",\"tyle\":\"3\"}', '{\"text\":\"9999 KIM C\\u01af\\u01a0NG\",\"kimcuong\":\"33\",\"tyle\":\"4\"}'),
(3, 3, '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}', '{\"text\":\"44\",\"kimcuong\":\"44\",\"tyle\":\"4\"}'),
(4, 4, '{\"text\":\"1\",\"kimcuong\":\"0\",\"tyle\":\"80\"}', '{\"text\":\"2\",\"kimcuong\":\"0\",\"tyle\":\"19\"}', '{\"text\":\"3\",\"kimcuong\":\"0\",\"tyle\":\"1\"}', '{\"text\":\"4\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"5\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"6\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"7\",\"kimcuong\":\"0\",\"tyle\":\"0\"}', '{\"text\":\"8\",\"kimcuong\":\"0\",\"tyle\":\"0\"}'),
(5, 5, '{\"text\":\"Cupid Camera Woman\",\"kimcuong\":\"0\",\"tyle\":\"33\"}', '{\"text\":\"Titan Cineman\",\"kimcuong\":\"0\",\"tyle\":\"33\"}', '{\"text\":\"Upgraded Titan Speakerman\",\"kimcuong\":\"0\",\"tyle\":\"33\"}', '{\"text\":\"Upgraded titan cam\",\"kimcuong\":\"0\",\"tyle\":\"33\"}', '{\"text\":\"Toxic Upgraded titan cam\",\"kimcuong\":\"0\",\"tyle\":\"33\"}', '{\"text\":\"Sinister TV Man\",\"kimcuong\":\"0\",\"tyle\":\"11\"}', '{\"text\":\"Titan Clock Man\",\"kimcuong\":\"0\",\"tyle\":\"9\"}', '{\"text\":\"Leprecheun Cam\",\"kimcuong\":\"0\",\"tyle\":\"33\"}'),
(6, 6, '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"2\",\"tyle\":\"50\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"2\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"3\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"4\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"5\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"6\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"8\",\"tyle\":\"1\"}', '{\"text\":\"NguyenTanDat\",\"kimcuong\":\"10\",\"tyle\":\"1\"}'),
(7, 7, '{\"text\":\"1\",\"kimcuong\":\"111\",\"tyle\":\"1\"}', '{\"text\":\"2\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"3\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"4\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"5\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"6\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"7\",\"kimcuong\":\"999\",\"tyle\":\"0\"}', '{\"text\":\"8\",\"kimcuong\":\"999\",\"tyle\":\"0\"}'),
(8, 8, '{\"text\":\"1\",\"kimcuong\":\"111\",\"tyle\":\"1\"}', '{\"text\":\"2\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"3\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"4\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"5\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"6\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"7\",\"kimcuong\":\"222\",\"tyle\":\"0\"}', '{\"text\":\"8\",\"kimcuong\":\"222\",\"tyle\":\"0\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momo`
--

CREATE TABLE `momo` (
  `id` int(11) NOT NULL,
  `request_id` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tranId` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `partnerId` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `partnerName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'xuly',
  `deletedate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `momoo`
--

CREATE TABLE `momoo` (
  `id` int(11) NOT NULL,
  `stk` text NOT NULL,
  `name` text NOT NULL,
  `bank_name` text NOT NULL,
  `chi_nhanh` text NOT NULL,
  `logo` text DEFAULT NULL,
  `ghichu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `momoo`
--

INSERT INTO `momoo` (`id`, `stk`, `name`, `bank_name`, `chi_nhanh`, `logo`, `ghichu`) VALUES
(3, '0967657555', 'MOMO', 'DO TUAN ANH', '', 'https://i.imgur.com/T75IX1a.jpeg', 'ĐFDSFF');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'tenweb', 'SHOPROBLOX'),
(2, 'mota', 'SHOPROBLOX- NƠI MUA BÁN ACC GAME UY TÍN CHẤT LƯỢNG '),
(3, 'tukhoa', 'SHOPROBLOX'),
(4, 'logo', NULL),
(5, 'email', ''),
(6, 'pass_email', ''),
(11, 'noidung_naptien', 'NAPTIEN'),
(12, 'thongbao', '<p></p><div style=\"text-align: center; \" bis_skin_checked=\"1\"><b style=\"background-color: rgb(206, 198, 206);\">SHOPROBLOX XIN CHÀO QUÝ KHÁCH</b></div><div style=\"text-align: center; \" bis_skin_checked=\"1\"><span style=\"background-color: rgb(206, 198, 206);\"><b>Nhân dịp khai trương lại, shop sẽ giảm giá tất cả các thể loại acc</b></span></div><div style=\"text-align: center; \" bis_skin_checked=\"1\"><b style=\"\"><span style=\"background-color: rgb(247, 247, 247);\">ACC V4 GIÁ CHỈ 40K </span><font color=\"#ff0000\" style=\"background-color: rgb(239, 239, 239);\">Ở ĐÂY</font></b></div><div style=\"text-align: center; \" bis_skin_checked=\"1\"><b style=\"\"><span style=\"background-color: rgb(239, 239, 239);\">10K=75 RB CHƯA THUẾ</span><font color=\"#ff0000\" style=\"background-color: rgb(239, 239, 239);\"> TẠI ĐÂY</font></b></div><p></p>'),
(13, 'anhbia', 'assets/storage/theme/anhbia785.gif'),
(14, 'favicon', 'assets/storage/theme/favicon964.png'),
(17, 'baotri', 'ON'),
(18, 'chinhsach', '<p>BẰNG VIỆC SỬ DỤNG C&Aacute;C DỊCH VỤ HOẶC MỞ MỘT T&Agrave;I KHOẢN, BẠN CHO BIẾT RẰNG BẠN CHẤP NHẬN, KH&Ocirc;NG R&Uacute;T LẠI, C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG SỬ DỤNG C&Aacute;C DỊCH VỤ CỦA CH&Uacute;NG T&Ocirc;I HAY TRUY CẬP TRANG WEB. NẾU BẠN DƯỚI 18 TUỔI HOẶC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot;PH&Ugrave; HỢP Ở NƠI BẠN SỐNG, BẠN PHẢI XIN PH&Eacute;P CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P ĐỂ MỞ MỘT T&Agrave;I KHOẢN V&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P PHẢI ĐỒNG &Yacute; VỚI C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y. NẾU BẠN KH&Ocirc;NG BIẾT BẠN C&Oacute; THUỘC &quot;ĐỘ TUỔI TRƯỞNG TH&Agrave;NH&quot; Ở NƠI BẠN SỐNG HAY KH&Ocirc;NG, HOẶC KH&Ocirc;NG HIỂU PHẦN N&Agrave;Y, VUI L&Ograve;NG KH&Ocirc;NG TẠO T&Agrave;I KHOẢN CHO ĐẾN KHI BẠN Đ&Atilde; NHỜ CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA BẠN GI&Uacute;P ĐỠ. NẾU BẠN L&Agrave; CHA MẸ HOẶC NGƯỜI GI&Aacute;M HỘ HỢP PH&Aacute;P CỦA MỘT TRẺ VỊ TH&Agrave;NH NI&Ecirc;N MUỐN TẠO MỘT T&Agrave;I KHOẢN, BẠN PHẢI CHẤP NHẬN C&Aacute;C ĐIỀU KHOẢN DỊCH VỤ N&Agrave;Y THAY MẶT CHO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; V&Agrave; BẠN SẼ CHỊU TR&Aacute;CH NHIỆM ĐỐI VỚI TẤT CẢ HOẠT ĐỘNG SỬ DỤNG T&Agrave;I KHOẢN HAY C&Aacute;C DỊCH VỤ, BAO GỒM C&Aacute;C GIAO DỊCH MUA H&Agrave;NG DO TRẺ VỊ TH&Agrave;NH NI&Ecirc;N THỰC HIỆN, CHO D&Ugrave; T&Agrave;I KHOẢN CỦA TRẺ VỊ TH&Agrave;NH NI&Ecirc;N Đ&Oacute; ĐƯỢC MỞ V&Agrave;O L&Uacute;C N&Agrave;Y HAY ĐƯỢC TẠO SAU N&Agrave;Y V&Agrave; CHO D&Ugrave; TRẺ VỊ TH&Agrave;NH NI&Ecirc;N C&Oacute; ĐƯỢC BẠN GI&Aacute;M S&Aacute;T TRONG GIAO DỊCH MUA H&Agrave;NG Đ&Oacute; HAY KH&Ocirc;NG.</p>\r\n'),
(27, 'min_ruttien', '100000'),
(28, 'ck_con', '3'),
(29, 'phi_chuyentien', '500'),
(30, 'status_chuyentien', 'ON'),
(31, 'hotline', ''),
(32, 'facebook', ''),
(33, 'theme_color', '#01578B'),
(34, 'modal_thongbao', ''),
(42, 'api_bank', ''),
(43, 'status_napbank', 'ON'),
(44, 'status_demo', 'OFF'),
(45, 'api_cardvip', ''),
(46, 'luuy_naptien', '<ul style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; border: 0px; list-style-position: inside; color: rgb(51, 51, 51); font-family: roboto, Arial, Tahoma, sans-serif, arial, Helvetica; font-size: 14px;\"><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Hệ thống xử lý 5s 1 thẻ.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Vui lòng gửi đúng mệnh giá, sai mệnh giá thực nhận mệnh giá bé nhất.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k, quý khách nạp 100k thực nhận 100k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\">Ví dụ mệnh giá thực là 100k quý khách nạp 50k thực nhận 45k.</li><li style=\"padding: 0px; margin: 0px; outline: 0px; border: 0px;\"><br></li></ul>'),
(47, 'id_video_youtube', ''),
(48, 'ck_bank', '0'),
(49, 'luuy_napbank', '<p><span style=\"color: rgb(220, 38, 38); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-weight: 600; word-spacing: 1px; font-size: 0.875rem;\">Lưu ý: Nếu quá 30 phút không nhận được tiền, vui lòng liên hệ page hỗ trợ!</span><br></p><p><i data-v-69ffd940=\"\" style=\"border-width: 0px; border-style: solid; border-color: rgba(229,229,229,var(--tw-border-opacity)); border-image: initial; --tw-border-opacity:1; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; color: rgb(220, 38, 38); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-weight: 600; word-spacing: 1px;\">- Các giao dịch chuyển sai \"Nội dung ghi chú\" sẽ không được xử lý tự động. Hãy liên hệ Fanpage để được hỗ trợ.</i><br></p>'),
(50, 'check_time_cron', ''),
(51, 'api_momo', ''),
(52, 'stk_bank', '8884448888'),
(53, 'mk_bank', ''),
(54, 'check_time_cron_bank', '1726121073'),
(55, 'html_footer', ''),
(56, 'text_left_footer', NULL),
(57, 'text_center_footer', NULL),
(58, 'email_admin', ''),
(59, 'button_buy', '1'),
(60, 'block_f12', 'ON'),
(61, 'license_key', NULL),
(62, 'btnSaveLicense', ''),
(63, 'ck_card', '0'),
(64, 'logo_dark', 'assets/storage/theme/logo_darkOJ2.png'),
(65, 'background', 'assets/storage/theme/backgroundVY8.gif'),
(66, 'discord', ''),
(67, 'motatopnap', '<p><span style=\"color: rgb(230, 77, 77); font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-weight: bolder; font-size: 0.875rem;\">ĐUA TOP NẠP THẺ HÀNG THÁNG</span><br></p><p><span style=\"font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">TOP 1: </span>30k gems<br style=\"border: 0px solid rgb(226, 232, 240); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; word-break: break-word !important;\"><span style=\"font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">TOP 2: </span>15k gems<br style=\"border: 0px solid rgb(226, 232, 240); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; word-break: break-word !important;\"><span style=\"font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">TOP 3: </span>8k gems<br style=\"border: 0px solid rgb(226, 232, 240); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; word-break: break-word !important;\"><span style=\"font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";\">ÁP DỤNG VỚI NHỮNG KHÁCH HÀNG NẠP TRÊN 2.000.000 VNĐ</span><br></p>'),
(68, 'Partner_Key', 'no'),
(70, 'zalo', ''),
(72, 'id_user', NULL),
(73, 'nutvongquay', NULL),
(76, 'giamgia', ''),
(80, 'status_cardvip', 'ON'),
(84, 'status_cardv3', 'ON'),
(85, 'linkthongbao', ''),
(86, 'textthongbao', 'ZALO GIAO LƯU HỖ TRỢ VÀ CẬP NHẬT THÔNG BÁO: TẠI ĐÂY'),
(87, 'theme_web', 'theme1'),
(88, 'theme2', 'OFF'),
(89, 'minigame', 'ON'),
(90, 'accounts', 'ON'),
(91, 'minigame', 'ON'),
(92, 'accounts', 'ON'),
(93, 'caythue', 'ON'),
(94, 'robux', 'ON'),
(95, 'gamepass', 'ON'),
(96, 'text_run', 'SUMERSTOR thông báo !!! Nếu trong quá trình mua tài khoản bạn gặp bất kì vấn đề gì vui lòng liên hệ PAGE của chúng tôi để được hỗ trợ nhé đọc kĩ trước khi mua'),
(97, 'Partner_ID', 'no'),
(98, 'vatpham', 'ON'),
(99, 'secret_captcha', '6LcdF3QpAAAAADPIgqs2nNV9NPUCHzCXPQzavZwV'),
(100, 'sitekey', '6LcdF3QpAAAAACfF8G2ZYkH1g2hLbgMKfVigBdUG'),
(101, 'app_secret', ''),
(102, 'app_id', ''),
(103, 'client_id_gg', ''),
(104, 'client_secret_gg', ''),
(105, 'sale', 'ON'),
(106, 'logingg', 'OFF'),
(107, 'loginfb', 'OFF'),
(108, 'Token_tele', 'no'),
(109, 'ID_tele', 'no'),
(110, 'banner3', 'assets/storage/theme/banner3OAM.gif'),
(111, 'api_link', 'https://api.fuong.net'),
(112, 'api_version', 'historyapimbv3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_bandv`
--

CREATE TABLE `orders_bandv` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `orders_bandv`
--

INSERT INTO `orders_bandv` (`id`, `username`, `receiver`, `dichvu`, `money`, `tk`, `mk`, `createdate`, `updatedate`, `status`, `ghichu`, `reason`) VALUES
(1, 'bicoder', 'bicoder', '800 Gems+200 Bonus', 20000, 'bicoder@gmail.com', 'cvxcvcx', '2024-04-14 01:55:01', '2024-04-14 01:55:01', 'hoantat', 'vbn', 'oke ngon'),
(2, 'Ngvhoang', 'Ngvhoang', 'Speaker Repair Drone', 48000, 'y', 'yd', '2024-04-14 11:09:25', '2024-04-14 11:09:25', 'hoantat', '', ''),
(3, 'Ngvhoang', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'q', 'q', '2024-04-14 15:48:53', '2024-04-14 15:48:53', 'hoantat', '', ''),
(4, 'Ngvhoang', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'q', 'a', '2024-04-14 15:49:02', '2024-04-14 15:49:02', 'hoantat', '', ''),
(5, 'Ngvhoang', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'q', 'q', '2024-04-14 15:49:09', '2024-04-14 15:49:09', 'hoantat', '', ''),
(6, 'Ngvhoang', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'q', 'q', '2024-04-14 15:49:16', '2024-04-14 15:49:16', 'hoantat', '', ''),
(7, 'Ngvhoang', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'q', 'q', '2024-04-14 15:49:23', '2024-04-14 15:49:23', 'hoantat', '', ''),
(8, 'Huyhuy515', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'hy8643', 'huy12345', '2024-04-15 11:07:27', '2024-04-15 11:07:27', 'hoantat', 'toilet tower combat warrior anime dimensions', ''),
(9, 'Kietne12', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'Tao2k2v', 'A99645822', '2024-04-16 04:24:15', '2024-04-16 04:24:15', 'hoantat', 'blox fruit, toilet , tower of hell', ''),
(10, 'Wibu_god', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'uubtarg', 'đmluscam', '2024-04-16 05:09:23', '2024-04-16 05:09:23', 'hoantat', '', ''),
(11, 'Wibu_god', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'uubtarg', 'đmluscam', '2024-04-16 05:10:07', '2024-04-16 05:10:07', 'hoantat', '', ''),
(12, 'Wibu_god', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'uubtarg', 'đmluscam', '2024-04-16 05:10:25', '2024-04-16 05:10:25', 'hoantat', '', ''),
(13, 'Ngvhoang', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'q', 'q', '2024-04-16 05:28:55', '2024-04-16 05:28:55', 'hoantat', '', ''),
(14, 'Ngvhoang', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'q', 'q', '2024-04-16 05:29:01', '2024-04-16 05:29:01', 'hoantat', '', ''),
(15, 'Ngvhoang', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'q', 'q', '2024-04-16 05:29:02', '2024-04-16 05:29:02', 'hoantat', '', ''),
(16, 'Ngvhoang', 'Ngvhoang', '2000 GEMS + 500 GEMS', 50000, 'q', 'q', '2024-04-16 05:29:06', '2024-04-16 05:29:06', 'hoantat', '', ''),
(17, 'Ngvhoang', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'q', 'q', '2024-04-16 05:29:10', '2024-04-16 05:29:10', 'hoantat', '', ''),
(18, 'Ngvhoang', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'q', 'q', '2024-04-16 05:29:15', '2024-04-16 05:29:15', 'hoantat', '', ''),
(19, 'Ngvhoang', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'q', 'q', '2024-04-16 05:29:18', '2024-04-16 05:29:18', 'hoantat', '', ''),
(20, 'Wibu_god', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'uubtarg', 'đmluscam', '2024-04-16 12:22:22', '2024-04-16 12:22:22', 'hoantat', '', ''),
(21, 'Wibu_god', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'uubtarg', 'đmluscam', '2024-04-16 14:37:55', '2024-04-16 14:37:55', 'hoantat', '', ''),
(22, 'Wibu_god', 'Ngvhoang', 'Upgraded Titan Cinemaman', 69876, 'uubtarg', 'đmluscam', '2024-04-16 14:38:29', '2024-04-16 14:38:29', 'hoantat', '', ''),
(23, 'Wibu_god', 'Ngvhoang', 'Upgraded Mech Cameraman', 18999, 'uubtarg', 'đmluscam', '2024-04-16 14:39:00', '2024-04-16 14:39:00', 'hoantat', '', ''),
(24, 'Wibu_god', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'uubtarg', 'đmluscam', '2024-04-17 05:44:44', '2024-04-17 05:44:44', 'hoantat', '', ''),
(25, 'Wibu_god', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'uubtarg', 'đmluscam', '2024-04-17 05:47:14', '2024-04-17 05:47:14', 'hoantat', '', ''),
(26, 'Wibu_god', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'uubtarg', 'đmluscam', '2024-04-17 05:47:30', '2024-04-17 05:47:30', 'hoantat', '', ''),
(27, 'Wibu_god', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'uubtarg', 'đmluscam', '2024-04-17 05:47:37', '2024-04-17 05:47:37', 'hoantat', '', ''),
(28, 'kakajinaka', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'kakajinakafram', 'hehekaka', '2024-04-17 09:03:35', '2024-04-17 09:03:35', 'hoantat', 'Chỉ có toilet tower defense', ''),
(29, 'Chothemdcko', 'Ngvhoang', '25500 GEMS + 4000 GEMS', 500000, 'tarabitadc', 'admindeptrainhat', '2024-04-17 10:54:28', '2024-04-17 10:54:28', 'hoantat', '...', ''),
(30, 'Duongkhanhphuong', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'KimOanhjz0806', '3134958618', '2024-04-17 10:59:54', '2024-04-17 10:59:54', 'hoantat', 'toilet tower defense', ''),
(31, 'Duongkhanhphuong', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'KimOanhjz0806', '3134958618', '2024-04-17 11:04:24', '2024-04-17 11:04:24', 'hoantat', 'toilet tower defense', ''),
(32, 'anelugo', 'Ngvhoang', '2000 GEMS + 500 GEMS', 50000, 'anelugo', 'anelugo', '2024-04-17 11:45:30', '2024-04-17 11:45:30', 'hoantat', 'hehehe', ''),
(33, 'BinhF', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'qteokajs', '123449751', '2024-04-17 12:25:56', '2024-04-17 12:25:56', 'hoantat', 'blox fruit toilet tower def pet sim x', ''),
(34, 'BinhF', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'qteokajs', '123449751', '2024-04-17 12:27:06', '2024-04-17 12:27:06', 'hoantat', 'blox fruit toilet tower def pet sim x', ''),
(35, 'namytprovip', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'namytprovip', '918273645', '2024-04-17 12:59:46', '2024-04-17 12:59:46', 'hoantat', ':)', ''),
(36, 'Wibu_god', 'Ngvhoang', '14500 GEMS + 2000 GEMS', 200000, '2vy335', '2vy335', '2024-04-18 01:27:03', '2024-04-18 01:27:03', 'hoantat', '', ''),
(37, 'Wibu_god', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, '2vy335', '2vy335', '2024-04-18 01:28:41', '2024-04-18 01:28:41', 'hoantat', '', ''),
(38, 'Anbatocoms', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'thanhdzcayttd', '01567979', '2024-04-19 01:54:53', '2024-04-19 01:54:53', 'hoantat', '', ''),
(39, 'Truongne', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'adidaphat_99', 'adidaphat', '2024-04-19 05:42:29', '2024-04-19 05:42:29', 'hoantat', 'toilet tower Defense, blox fruits, đường vận chuyển', ''),
(40, 'Chothemdcko', 'Ngvhoang', '33000 GEMS + 4000 GEMS', 500000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-19 09:26:42', '2024-04-19 09:26:42', 'hoantat', 'đã flo:&gt;', ''),
(41, 'Chothemdcko', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-19 09:28:58', '2024-04-19 09:28:58', 'hoantat', 'đã tim:)', ''),
(42, 'Chothemdcko', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-19 09:29:38', '2024-04-19 09:29:38', 'hoantat', 'shop quá uy tín:&gt;', ''),
(43, 'Banana', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'PhamhuanHAOmv', 'PhamhuanHAOmv', '2024-04-19 10:18:16', '2024-04-19 10:18:16', 'hoantat', 'chị là xinh gái nhất', ''),
(44, 'anelugo', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'anelugo', 'anelugo', '2024-04-19 11:45:39', '2024-04-19 11:45:39', 'hoantat', 'ó yamate', ''),
(45, 'anelugo', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'anelugo', 'anelugo', '2024-04-19 11:46:24', '2024-04-19 11:46:24', 'hoantat', 'hahahe', ''),
(46, 'BinhF', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'qteokajs', '123449751', '2024-04-19 11:52:46', '2024-04-19 11:52:46', 'hoantat', 'Ko bt ghi gì hết :)', ''),
(47, 'BinhF', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'qteokajs', '123449751', '2024-04-19 11:53:26', '2024-04-19 11:53:26', 'hoantat', 'ko chs game gì ngoài ttd ????', ''),
(48, 'Kietne12', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, 'Tao2k2v', 'A99645822', '2024-04-19 12:58:28', '2024-04-19 12:58:28', 'hoantat', '', ''),
(49, 'Cut12345', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'kunnnnnn106', '12345678910', '2024-04-20 00:24:31', '2024-04-20 00:24:31', 'hoantat', '', ''),
(50, 'FLINTT9', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'etingenei', 'etingenei9988vip', '2024-04-21 02:38:42', '2024-04-21 02:38:42', 'hoantat', 'toilet tower defense , gem siêu rẻ hồi tui rủ bn tui mua thêm', ''),
(51, 'FLINTT9', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'etingenei', 'etingenei9988vip', '2024-04-21 02:39:24', '2024-04-21 02:39:24', 'hoantat', 'shop uy tín quá', ''),
(52, 'FLINTT9', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-21 02:40:03', '2024-04-21 02:40:03', 'hoantat', 'rẻ quá shop ơiii', ''),
(53, 'FLINTT9', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'etingenei', 'etingenei9988vip', '2024-04-21 02:42:28', '2024-04-21 02:42:28', 'hoantat', 'mê shop này quá , hồi mua thêm????', ''),
(54, 'khanhcon', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'baconca121', '01010101', '2024-04-21 02:57:25', '2024-04-21 02:57:25', 'hoantat', '', ''),
(55, 'Toilet1467', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 299000, 'ypolozov5c', 'fueurhrj', '2024-04-21 05:17:08', '2024-04-21 05:17:08', 'hoantat', 'toilet tower denfens', ''),
(56, 'Toilet1467', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'ypolozov5c', 'fueurhrj', '2024-04-21 05:18:10', '2024-04-21 05:18:10', 'hoantat', 'vỹ zalo nè', ''),
(57, 'Long12345', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, '1s0abr', '1s0abr', '2024-04-22 03:24:54', '2024-04-22 03:24:54', 'hoantat', '', ''),
(58, 'Qdcgfk4', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'u97iak', '1234azxcv', '2024-04-22 05:21:51', '2024-04-22 05:21:51', 'hoantat', 'obby simulator eveda', ''),
(59, 'pexkigl415', 'Ngvhoang', '5000 GEMS + 1050 GEMS', 100000, 'pexkigl415', 'thuanngu', '2024-04-22 06:14:52', '2024-04-22 06:14:52', 'hoantat', 'sjjeie,jejrjje,rjjrjrj', ''),
(60, 'Huynhat2012', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'Bacon_NhatNgu', '0878443889', '2024-04-22 07:51:23', '2024-04-22 07:51:23', 'hoantat', '', ''),
(61, 'Chothemdcko', 'Ngvhoang', '33000 GEMS + 4000 GEMS', 500000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-22 08:59:40', '2024-04-22 08:59:40', 'hoantat', 'top 1', ''),
(62, 'Chothemdcko', 'Ngvhoang', '33000 GEMS + 4000 GEMS', 500000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-22 09:00:14', '2024-04-22 09:00:14', 'hoantat', 'top 0:v', ''),
(63, 'Huynhat2012', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'Bacon_NhatNgu', '0878443889', '2024-04-22 10:12:03', '2024-04-22 10:12:03', 'hoantat', 'uy tín', ''),
(64, 'kunnnnnn5', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'kunnnnnn106', '12345678910', '2024-04-22 10:21:11', '2024-04-22 10:21:11', 'hoantat', '', ''),
(65, 'tony1010', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'KolevLT5903', '25102010', '2024-04-22 13:08:26', '2024-04-22 13:08:26', 'hoantat', 'cos j cho thêm nhe', ''),
(66, 'Huynhat2012', 'ngvhoang', 'Drill Woman', 11432, 'Bacon_NhatNgu', '0878443889', '2024-04-23 03:55:04', '2024-04-23 03:55:04', 'huy', 'Uy tín', ''),
(67, 'Huynhat2012', 'ngvhoang', 'Microphone Man', 5000, 'Bacon_NhatNgu', '0878443889', '2024-04-23 03:56:26', '2024-04-23 03:56:26', 'huy', 'hơi lâu', ''),
(68, 'FLINTT9', 'ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-23 04:45:48', '2024-04-23 04:45:48', 'hoantat', 'hôm nay ủng hộ tiếp nè', ''),
(69, 'FLINTT9', 'ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-23 04:46:32', '2024-04-23 04:46:32', 'hoantat', 'nhớ gửi gem cho tui nhanh nha❤️', ''),
(70, 'FLINTT9', 'ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-23 04:46:59', '2024-04-23 04:46:59', 'hoantat', 'nhớ gửi nhanh nha', ''),
(71, 'FLINTT9', 'ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-23 04:47:29', '2024-04-23 04:47:29', 'hoantat', 'mong admin bonus cho tui thêm gem', ''),
(72, 'FLINTT9', 'ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'etingenei', 'etingenei9988vip', '2024-04-23 04:47:56', '2024-04-23 04:47:56', 'hoantat', 'hồi có j tui ủng hộ thêm nha, bye', ''),
(73, 'Huynhat2012', 'Ngvhoang', 'Drill Woman', 11432, 'Bacon_KhongDan', '0878443889', '2024-04-23 05:18:45', '2024-04-23 05:18:45', 'hoantat', 'uy tin', ''),
(74, 'Thienvip', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'AOUTOWO101', '2610971107', '2024-04-23 06:06:01', '2024-04-23 06:06:01', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(75, 'Huynhat2012', 'Ngvhoang', 'Microphone Man', 5000, 'Bacon_KhongDan', '0878443889', '2024-04-23 06:40:55', '2024-04-23 06:40:55', 'hoantat', 'uy tin', ''),
(76, 'Phuctai123', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'nguoi3047', 'kobietmatkhau', '2024-04-23 10:16:44', '2024-04-23 10:16:44', 'hoantat', 'toliet tower defense', ''),
(77, 'Phuctai123', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'nguoi3047', 'kobietmatkhau', '2024-04-23 10:16:58', '2024-04-23 10:16:58', 'hoantat', 'toliet tower defense', ''),
(78, 'Phuctai123', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'nguoi3047', 'kobietmatkhau', '2024-04-23 10:17:13', '2024-04-23 10:17:13', 'hoantat', 'toliet tower defense', ''),
(79, 'Anbatocoms', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'Thanhdzcayttd', '01567979', '2024-04-23 10:58:12', '2024-04-23 10:58:12', 'hoantat', 'toilet tower defense', ''),
(80, 'Anhlocsha', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'tjuacztj', 'deolamduocgi', '2024-04-23 11:54:41', '2024-04-23 11:54:41', 'hoantat', 'toilet tower defense', ''),
(81, 'Huynhat2012', 'Ngvhoang', 'Leprecheun Cameraman', 9000, 'Bacon_KhongDan', '0878443889', '2024-04-23 13:31:18', '2024-04-23 13:31:18', 'hoantat', '', ''),
(82, 'Banana', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'PhamhuanHAOmv', 'PhamhuanHAOmv', '2024-04-23 13:43:12', '2024-04-23 13:43:12', 'hoantat', '', ''),
(83, 'Astikhvineuq', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'astikhvineuq', 'blablacc5', '2024-04-23 14:40:47', '2024-04-23 14:40:47', 'hoantat', 'tặng con j dc ko', ''),
(84, 'Astikhvineuq', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'astikhvineuq', 'blablacc5', '2024-04-23 14:41:10', '2024-04-23 14:41:10', 'hoantat', 'tặng con j dc ko pls', ''),
(85, 'Huynhat2012', 'Ngvhoang', 'Upgrade Camera Woman', 7778, 'Bacon_KhongDan', '0878443889', '2024-04-23 15:21:33', '2024-04-23 15:21:33', 'huy', 'uy tín????', ''),
(86, 'Huynhat2012', 'Ngvhoang', '500 GEMS + 100 GEMS', 10000, 'Bacon_KhongDan', '0878443889', '2024-04-24 07:17:12', '2024-04-24 07:17:12', 'hoantat', 'uy tín hơi lâu', ''),
(87, 'Thaiddz', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'khanhdz1438', 'khanhdzvcl', '2024-04-24 10:10:58', '2024-04-24 10:10:58', 'hoantat', '', ''),
(88, 'Kkshsissgsi', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'bebihasaki175', 'khoadotai', '2024-04-25 01:23:03', '2024-04-25 01:23:03', 'hoantat', 'toilet tower defense', ''),
(89, 'Thaiddz', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'khanhdz1438', 'khanhdzvcl', '2024-04-25 03:57:45', '2024-04-25 03:57:45', 'hoantat', '', ''),
(90, 'FLINTT9', 'Ngvhoang', '2500 GEMS + 500 GEMS', 50000, 'etingenei', 'etingenei9988vip', '2024-04-25 04:24:09', '2024-04-25 04:24:09', 'hoantat', 'hi , lại là tui nè . Lần trước tui mua 100k 6000 gem mà shop cho đúng 5200 gem nên tui hơi buồn vì thiếu 800 gem :( , mong shop hôm nay gửi đúng 3000 và một chút j đó bồi thường :( cảm ơn shop nhiều', ''),
(91, 'Wibu_god', 'Ngvhoang', '10500 GEMS + 2000 GEMS', 200000, '2vy335', '2vy335', '2024-04-25 07:09:58', '2024-04-25 07:09:58', 'hoantat', '', ''),
(92, 'datbeo', 'Ngvhoang', '1000 GEMS + 200 GEMS', 20000, 'versoscaladosd7', 'shoputvaio', '2024-04-25 07:23:02', '2024-04-25 07:23:02', 'hoantat', 'blox fruit toilet tower denef tower denef simulator', ''),
(93, 'BinhF', 'Ngvhoang', 'Digito', 59000, 'qteokajs', '123449751', '2024-04-25 08:58:07', '2024-04-25 08:58:07', 'hoantat', 'Ko bt ghi gì hết :)', ''),
(94, 'Thienvip', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'AOUTOWO101', '2610971107', '2024-04-25 16:33:22', '2024-04-25 16:33:22', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(95, 'ddoypape_x438', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'ddoypape_x438', 'ddoypape_x438', '2024-04-26 03:35:33', '2024-04-26 03:35:33', 'hoantat', '', ''),
(96, 'Bendeptrai', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'jinjinjinjinol', 'kitsune123', '2024-04-26 04:45:42', '2024-04-26 04:45:42', 'hoantat', '', ''),
(97, 'Chothemdcko', 'Ngvhoang', '39000 GEMS + 1000 GEMS', 500000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-26 07:19:57', '2024-04-26 07:19:57', 'hoantat', '.', ''),
(98, 'datbeo', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'versoscaladosd7', 'shopanhuytinqua', '2024-04-26 07:41:14', '2024-04-26 07:41:14', 'hoantat', '', ''),
(99, 'datbeo', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'versoscaladosd7', 'shopanhuytinqua', '2024-04-26 07:41:25', '2024-04-26 07:41:25', 'hoantat', '', ''),
(100, 'datbeo', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'versoscaladosd7', 'shopanhuytinqua', '2024-04-26 07:41:32', '2024-04-26 07:41:32', 'hoantat', '', ''),
(101, 'Hoanganh2310', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'uasarbrymu', 'DungNinh', '2024-04-26 13:28:58', '2024-04-26 13:28:58', 'hoantat', 'em chơi 2 game thôi ạ em mới chơi nen mua gems mua unit xin em choi blox fruit voi toilet thoi a', ''),
(102, 'datbeo', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'versoscaladosd7', 'shopuytin', '2024-04-26 22:48:03', '2024-04-26 22:48:03', 'hoantat', '', ''),
(103, 'Giabao', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'davidngo00', '0346782960', '2024-04-27 04:46:57', '2024-04-27 04:46:57', 'hoantat', 'tolet tower defense', ''),
(104, 'Vinhnehaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-27 05:05:38', '2024-04-27 05:05:38', 'hoantat', 'hasaki nè', ''),
(105, 'Vinhnehaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-27 05:05:41', '2024-04-27 05:05:41', 'hoantat', 'hasaki nè', ''),
(106, 'Chothemdcko', 'Ngvhoang', '79000 GEMS + 2000 GEMS', 1000000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-04-27 05:13:48', '2024-04-27 05:13:48', 'hoantat', 'cho1tinuadcko:)', ''),
(107, 'chinguyen', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'cuong09x', 'cuong09x', '2024-04-27 06:11:34', '2024-04-27 06:11:34', 'hoantat', '', ''),
(108, 'chinguyen', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'cuong09x', 'cuong09x', '2024-04-27 06:11:59', '2024-04-27 06:11:59', 'hoantat', '', ''),
(109, 'datbeo', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'versoscaladosd7', 'shopanhvuanhanhvuauytinquavip!!!', '2024-04-27 08:26:56', '2024-04-27 08:26:56', 'hoantat', '', ''),
(110, 'FLINTT9', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'etingenei', 'etingenei9988vip', '2024-04-27 08:30:48', '2024-04-27 08:30:48', 'hoantat', 'hello shop, hôm nay ủng hộ nè , mong shop gửi đủ số gem ạ', ''),
(111, 'FLINTT9', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'etingenei', 'etingenei9988vip', '2024-04-27 08:31:51', '2024-04-27 08:31:51', 'hoantat', 'mong shop cộng đủ 3000 gem của đợt mua 50k hồi nãy của tui và đợt này 600 gem 10k để đủ 3600 gem nha', ''),
(112, 'Vinhnehaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-27 08:45:51', '2024-04-27 08:45:51', 'hoantat', 'hasaki nè', ''),
(113, 'Hoanganh2310', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'uasarbrymu', 'DungNinh', '2024-04-27 11:06:07', '2024-04-27 11:06:07', 'hoantat', 'ko có 3 game em choi blox fruit boi toilet thoii', ''),
(114, 'Vinhnehaha', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-27 12:11:49', '2024-04-27 12:11:49', 'hoantat', 'hasaki nè', ''),
(115, 'Quyenjuju', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'tomancut34', 'khongcoten', '2024-04-27 12:28:07', '2024-04-27 12:28:07', 'hoantat', 'nam', ''),
(116, 'Hoanganh2310', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'uasarbrymu', 'DungNinh', '2024-04-27 13:22:09', '2024-04-27 13:22:09', 'hoantat', 'hai game blox fruit voi toilet ak shop uy tin mua 2 lan 10 k r bay h choi lon mua 100k vua nay mua 10 k coj dc tang 20 gems nua shop ray uy tin', ''),
(117, 'datbeo', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'versoscaladosd7', 'shop uy tín số 1 việt nam', '2024-04-27 23:34:34', '2024-04-27 23:34:34', 'hoantat', '', ''),
(118, 'skibidihaha', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 275000, 'thai_VN52', 'concuskibidi', '2024-04-28 03:32:59', '2024-04-28 03:32:59', 'hoantat', 'toilet tower defense,jujutsu senanigan,strongest battle ground', ''),
(119, 'skibidihaha', 'Ngvhoang', 'Titan Bunny Man', 19000, 'thai_VN52', 'concuskibidi', '2024-04-28 03:34:19', '2024-04-28 03:34:19', 'hoantat', 'toilet tower defense, jujutsu, the strongest battle ground', ''),
(120, 'Giabao', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'davidngo00', '0346782960', '2024-04-28 03:52:55', '2024-04-28 03:52:55', 'hoantat', 'toilet tower defense', ''),
(121, 'datbeo', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'versoscaladosd7', 'shoput', '2024-04-28 04:32:42', '2024-04-28 04:32:42', 'hoantat', '', ''),
(122, 'datbeo', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'versoscaladosd7', 'shoput', '2024-04-28 04:32:58', '2024-04-28 04:32:58', 'hoantat', '', ''),
(123, 'Sishsh', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'baisunfnsu', 'TinhHauAn', '2024-04-28 07:33:21', '2024-04-28 07:33:21', 'hoantat', 'Blox fruit,toilet,các chiến trường mạnh nhất', ''),
(124, 'Kokoko', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'WSTQIWH7', 'WSTQIWH7', '2024-04-28 08:42:28', '2024-04-28 08:42:28', 'hoantat', '', ''),
(125, 'Bendeptrai', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'jinjinjinjinol', 'kitsune123', '2024-04-28 09:18:24', '2024-04-28 09:18:24', 'hoantat', '', ''),
(126, 'Qua179835', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'qua179835', 'qua179835', '2024-04-28 09:49:49', '2024-04-28 09:49:49', 'hoantat', '', ''),
(127, 'Thienvip', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'AOUTOWO101', '2610971107', '2024-04-28 10:59:42', '2024-04-28 10:59:42', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(128, 'Wibu_god', 'Ngvhoang', '39000 GEMS + 1000 GEMS', 500000, '2vy335', '2vy335', '2024-04-28 11:19:37', '2024-04-28 11:19:37', 'hoantat', '', ''),
(129, 'Vinhnehaha', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-28 12:30:34', '2024-04-28 12:30:34', 'hoantat', 'hasaki nè', ''),
(130, 'Vinhnehaha', 'Ngvhoang', 'Upgraded Titan Cinemaman', 38000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-28 12:38:54', '2024-04-28 12:38:54', 'hoantat', 'hasaki nè', ''),
(131, 'Quyenjuju', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'quyenjuju', '0123456789', '2024-04-28 13:33:15', '2024-04-28 13:33:15', 'hoantat', 'nam', ''),
(132, 'Hiban', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'Cuongbot6', 'siu123456', '2024-04-28 13:42:21', '2024-04-28 13:42:21', 'hoantat', '', ''),
(133, 'ChanHuy', 'Ngvhoang', 'Upgraded Titan Cinemaman', 38000, '8eik1jf', '07072011', '2024-04-29 02:28:43', '2024-04-29 02:28:43', 'hoantat', '', ''),
(134, 'ChanHuy', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, '8eik1jf', '07072011', '2024-04-29 02:29:31', '2024-04-29 02:29:31', 'hoantat', '', ''),
(135, 'Banana', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'PhamhuanHAOmv', 'PhamhuanHAOmv', '2024-04-29 03:24:44', '2024-04-29 03:24:44', 'hoantat', '', ''),
(136, 'Hellotan', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'blineav', 'anhduc345', '2024-04-29 03:26:44', '2024-04-29 03:26:44', 'hoantat', 'blox Fruit, blade ball,skibidi tower defense', ''),
(137, 'Hieuprovip123', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'queptergeoi', '123456789@', '2024-04-29 03:35:54', '2024-04-29 03:35:54', 'hoantat', 'nhanh shop nhé', ''),
(138, 'Hieuprovip123', 'Ngvhoang', 'COMBO GODLY', 119000, 'queptergeoi', '123456789@', '2024-04-29 03:36:06', '2024-04-29 03:36:06', 'hoantat', 'nhanh shop nhé', ''),
(139, 'Hieuprovip123', 'Ngvhoang', 'Flamethrower Cameraman', 25054, 'queptergeoi', '123456789@', '2024-04-29 03:36:26', '2024-04-29 03:36:26', 'hoantat', 'nhanh shop nhé', ''),
(140, 'ChanHuy', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, '8eik1jf', '07072011', '2024-04-29 04:04:27', '2024-04-29 04:04:27', 'hoantat', '', ''),
(141, 'datbeo', 'Ngvhoang', 'Upgraded Titan Speakerman', 199000, 'versoscaladosd7', 'shopuytin', '2024-04-29 05:43:22', '2024-04-29 05:43:22', 'hoantat', '', ''),
(142, 'skibidihaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vbjiaj', '22062015', '2024-04-29 06:19:47', '2024-04-29 06:19:47', 'hoantat', '', ''),
(143, 'skibidihaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vbjiaj', '22062015', '2024-04-29 06:19:48', '2024-04-29 06:19:48', 'hoantat', '', ''),
(144, 'skibidihaha', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'thai_VN52', 'concuskibidi', '2024-04-29 06:20:36', '2024-04-29 06:20:36', 'hoantat', '', ''),
(145, 'Hiban', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'Cuongbot6', 'Siu123456', '2024-04-29 06:37:17', '2024-04-29 06:37:17', 'hoantat', '', ''),
(146, 'Hoanganh2310', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'uasarbrymu', 'DungNinh', '2024-04-29 08:01:28', '2024-04-29 08:01:28', 'hoantat', 'anh gift thêm cho em300 gems đi :))) em choi hoi game nha anh', ''),
(147, 'Vinhnehaha', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-29 08:51:40', '2024-04-29 08:51:40', 'hoantat', 'hasaki nè', ''),
(148, 'ducbk', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'quyenngulon111', '0869985687', '2024-04-29 10:24:48', '2024-04-29 10:24:48', 'hoantat', '', ''),
(149, 'Kokoko', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'WSTQIWH7', 'WSTQIWH7', '2024-04-29 10:31:08', '2024-04-29 10:31:08', 'hoantat', 'toi', ''),
(150, 'Vinhnehaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-29 12:06:34', '2024-04-29 12:06:34', 'hoantat', 'hasaki nè', ''),
(151, 'Vinhnehaha', 'Ngvhoang', 'X1 CLOVER CRATE', 2000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-04-29 12:08:34', '2024-04-29 12:08:34', 'hoantat', 'hasaki nè', ''),
(152, 'Minhphu', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'shskp5j', 'phus2011', '2024-04-29 13:01:37', '2024-04-29 13:01:37', 'hoantat', 'ko có', ''),
(153, 'Hoanganh2310', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'uasarbrymu', 'DungNinh', '2024-04-29 13:53:15', '2024-04-29 13:53:15', 'hoantat', 'mua shop anh hon 15k gems r em ban cho bn em gia cao shop anh uy tin lam a con dc tang them gems chieu em mua xin 300 gems đc luôb shop anh uy tin qua a em xin 600 gems nha :))))))))', ''),
(154, 'Ksjsjsh', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'ib8UvALQ', 'kendepzai2013ak', '2024-04-30 00:43:59', '2024-04-30 00:43:59', 'hoantat', '', ''),
(155, 'Thienvip', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'AOUTOWO101', '2610971107', '2024-04-30 02:25:36', '2024-04-30 02:25:36', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(156, 'Qua179835', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'qua179835', 'qua179835', '2024-04-30 04:47:27', '2024-04-30 04:47:27', 'hoantat', '', ''),
(157, 'Ductri', 'Ngvhoang', 'Titan TV Man', 101000, 'bbigax', '9r5e2_HJQ9D3t8-', '2024-04-30 05:01:17', '2024-04-30 05:01:17', 'huy', '', ''),
(158, 'Ductri', 'Ngvhoang', 'Large Spotlightman', 48542, 'bbigax', '9r5e2_HJQ9D3t8-', '2024-04-30 05:01:53', '2024-04-30 05:01:53', 'huy', 'làm nhanh giúp mình nha!!', ''),
(159, 'anelugo', 'Ngvhoang', 'Large Spotlightman', 48542, 'anelugo', 'dobtmatkhau', '2024-04-30 05:30:18', '2024-04-30 05:30:18', 'hoantat', 'hehe', ''),
(160, 'anelugo', 'Ngvhoang', 'Sonar Woman', 125909, 'anelugo', 'dobtmatkhau', '2024-04-30 05:30:56', '2024-04-30 05:30:56', 'hoantat', 'yes sir', ''),
(161, 'anelugo', 'Ngvhoang', 'Microphone Man', 5000, 'anelugo', 'dobtmatkhau', '2024-04-30 05:31:31', '2024-04-30 05:31:31', 'hoantat', '', ''),
(162, 'Hiban', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'Cuongbot6', 'Siu123456', '2024-04-30 06:45:23', '2024-04-30 06:45:23', 'hoantat', '', ''),
(163, 'Ductri', 'Ngvhoang', 'Titan TV Man', 101000, 'bbigax', '9r5e2_HJQ9D3t8-', '2024-04-30 11:34:00', '2024-04-30 11:34:00', 'hoantat', 'làm nhanh giúp mình nha!', ''),
(164, 'Ductri', 'Ngvhoang', 'Large Spotlightman', 48542, 'bbigax', '9r5e2_HJQ9D3t8-', '2024-04-30 11:34:14', '2024-04-30 11:34:14', 'hoantat', 'làm nhanh giúp mình nha!', ''),
(165, 'Kokokokk', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'napgame24', 'napgame12', '2024-04-30 12:09:19', '2024-04-30 12:09:19', 'hoantat', '', ''),
(166, 'Kokokokk', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, 'napgame24', 'napgame12', '2024-04-30 12:09:29', '2024-04-30 12:09:29', 'hoantat', '', ''),
(167, 'Thienvip', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'AOUTOWO101', '2610971107', '2024-04-30 12:40:00', '2024-04-30 12:40:00', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(168, 'Kokhnnj', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'napgame24', 'napgame12', '2024-04-30 12:46:16', '2024-04-30 12:46:16', 'hoantat', '', ''),
(169, 'Hiban', 'Ngvhoang', '39000 GEMS + 1000 GEMS', 500000, 'Hfjfk2K2', '37473774658', '2024-04-30 12:49:17', '2024-04-30 12:49:17', 'hoantat', '', ''),
(170, 'Hiban', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'Hfjfk2K2', '37473774658', '2024-04-30 12:49:41', '2024-04-30 12:49:41', 'hoantat', '', ''),
(171, 'Hiban', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'Cuongbot6', 'Siu123456', '2024-04-30 12:50:49', '2024-04-30 12:50:49', 'hoantat', '', ''),
(172, 'Vhzvshhxhx', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'giabaodeptroainhattg', 'chubinxaoxaot', '2024-05-01 00:20:22', '2024-05-01 00:20:22', 'hoantat', 'toilet tower defense the strongest battleround skibidi defense', ''),
(173, 'Vhzvshhxhx', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'giabaodeptroainhattg', 'kietlac123', '2024-05-01 00:26:16', '2024-05-01 00:26:16', 'hoantat', 'toilet tower defense the strongest battleround skibidi defense', ''),
(174, 'ChanHuy', 'Ngvhoang', '15000 GEMS + 1000 GEMS', 200000, '8eik1jf', '07072011', '2024-05-01 02:14:47', '2024-05-01 02:14:47', 'hoantat', '', ''),
(175, 'Vinhnehaha', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-05-01 03:57:08', '2024-05-01 03:57:08', 'hoantat', 'hasaki nè', ''),
(176, 'Vinhnehaha', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-05-01 03:57:28', '2024-05-01 03:57:28', 'hoantat', 'hasaki nè', ''),
(177, 'hahahahaha', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, '123dz060', '12345678999', '2024-05-01 07:55:31', '2024-05-01 07:55:31', 'hoantat', '', ''),
(178, 'hahahahaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'blineav', 'anhduc345', '2024-05-01 08:00:36', '2024-05-01 08:00:36', 'hoantat', '', ''),
(179, 'hahahahaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'blineav', 'anhduc345', '2024-05-01 08:01:14', '2024-05-01 08:01:14', 'hoantat', '', ''),
(180, 'Loc7744', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'loc7744', 'loc@7744', '2024-05-01 09:24:58', '2024-05-01 09:24:58', 'hoantat', 'bloxfruit toilet tower defense', ''),
(181, 'Huunghia1055', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'ggaming5671', '567890567', '2024-05-01 09:31:36', '2024-05-01 09:31:36', 'hoantat', 'mong shop duyệt nhanh', ''),
(182, 'BODEPTRAI', 'Ngvhoang', 'COMBO PHÁ ĐẢO ENDLESS VER 1', 139000, 'kitsuneitmy', '0979748479', '2024-05-01 09:59:35', '2024-05-01 09:59:35', 'huy', 'h', ''),
(183, 'BODEPTRAI', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'kitsuneitmy', '0979748479', '2024-05-01 10:00:05', '2024-05-01 10:00:05', 'huy', 'yyu', ''),
(184, 'BODEPTRAI', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'kitsuneitmy', '0979748479', '2024-05-01 10:00:07', '2024-05-01 10:00:07', 'huy', 'yyu', ''),
(185, 'Asucdayne', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'Anhquannbikhung', 'Ditmemay', '2024-05-01 10:48:12', '2024-05-01 10:48:12', 'hoantat', 'MM2,toilet tower defense,chả nhớ', ''),
(186, 'BODEPTRAI', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'jinjinjinjinol', 'b', '2024-05-01 10:50:36', '2024-05-01 10:50:36', 'hoantat', '', ''),
(187, 'BODEPTRAI', 'Ngvhoang', '39000 GEMS + 1000 GEMS', 500000, 'jinjinjinjinol', 'be', '2024-05-01 11:34:42', '2024-05-01 11:34:42', 'hoantat', '', ''),
(188, 'BODEPTRAI', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'jinjinjinjinol', 'b', '2024-05-01 12:30:15', '2024-05-01 12:30:15', 'hoantat', '', ''),
(189, 'BODEPTRAI', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'jinjinjinjinol', 'b', '2024-05-01 12:30:27', '2024-05-01 12:30:27', 'hoantat', '', ''),
(190, 'BODEPTRAI', 'Ngvhoang', 'Titan Bunny Man', 19000, 'jinjinjinjinol', 'b', '2024-05-01 12:31:34', '2024-05-01 12:31:34', 'hoantat', '', ''),
(191, 'Vinhlaypro', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'uksalgs', 'vinh123456789', '2024-05-01 12:44:16', '2024-05-01 12:44:16', 'hoantat', '', ''),
(192, 'phucne924', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'DevilEdit01', '183838', '2024-05-01 12:50:12', '2024-05-01 12:50:12', 'hoantat', '', ''),
(193, 'Iuyhhg', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'frjuu768', 'ididjdjdj', '2024-05-02 01:03:45', '2024-05-02 01:03:45', 'hoantat', 'toilet tower defense skibidi tower defense blox fruit', ''),
(194, 'Iuyhhg', 'Ngvhoang', 'Upgraded Titan Cinemaman', 38000, 'frjuu768', 'ididjdjdj', '2024-05-02 01:04:37', '2024-05-02 01:04:37', 'hoantat', 'toilet tower defense skibidi tower defense blox fruit', ''),
(195, 'Iuyhhg', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'frjuu768', 'ididjdjdj', '2024-05-02 01:05:10', '2024-05-02 01:05:10', 'hoantat', 'toilet tower defense skibidi tower defense blox fruit', ''),
(196, 'Anbatocoms', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'thanhdzcayttd', '01567979', '2024-05-02 03:08:48', '2024-05-02 03:08:48', 'hoantat', 'ttd', ''),
(197, 'Memayjklgd', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'sqlltfg523', '7890uiop', '2024-05-02 03:22:17', '2024-05-02 03:22:17', 'hoantat', 'phi phai', ''),
(198, 'Freefire', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'fkrjfkrhen', 'freefire', '2024-05-02 04:30:25', '2024-05-02 04:30:25', 'hoantat', 'toilet tower defense.realist soccer.volleyball 4.2', ''),
(199, 'Vinhnehaha', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-05-02 11:20:29', '2024-05-02 11:20:29', 'hoantat', 'hasaki nè', ''),
(200, 'Vinhnehaha', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-05-02 11:20:36', '2024-05-02 11:20:36', 'hoantat', 'hasaki nè', ''),
(201, 'Zichnedepzai', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'DevilEdit01', 'đuiuđ', '2024-05-02 12:07:34', '2024-05-02 12:07:34', 'hoantat', '', ''),
(202, 'Zichnedepzai', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'DevilEdit01', 'ueuieru', '2024-05-02 12:07:46', '2024-05-02 12:07:46', 'hoantat', '', ''),
(203, 'trunganh', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'hxycggh', 'hxycggh', '2024-05-02 12:51:20', '2024-05-02 12:51:20', 'hoantat', 'a dus trip , blox fruit , skibidi tower defense', ''),
(204, 'Bincudai1m211', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'bincudai1m211', 'concu1m2', '2024-05-02 13:07:13', '2024-05-02 13:07:13', 'hoantat', 'toilet tower defesnse, king legacy, fruit battle ground ground', ''),
(205, 'trunganh', 'Ngvhoang', 'DJ TV Man', 799000, 'hxycggh', 'hxycggh', '2024-05-02 14:23:29', '2024-05-02 14:23:29', 'hoantat', 'a dus trip , blox fruit , skibidi tower defense', ''),
(206, 'Dogngu5', 'Ngvhoang', 'CHEF TV', 169000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-03 00:53:36', '2024-05-03 00:53:36', 'hoantat', '', ''),
(207, 'Dogngu5', 'Ngvhoang', 'Speaker Repair Drone', 48000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-03 00:58:11', '2024-05-03 00:58:11', 'hoantat', '', ''),
(208, 'Dogngu5', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-03 01:01:21', '2024-05-03 01:01:21', 'hoantat', '', ''),
(209, 'Dogngu5', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-03 02:03:49', '2024-05-03 02:03:49', 'hoantat', '', ''),
(210, 'Dogngu5', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-03 02:55:03', '2024-05-03 02:55:03', 'hoantat', '', ''),
(211, 'Tinh2011', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'GGghhuhh1', '24198034', '2024-05-03 03:06:36', '2024-05-03 03:06:36', 'hoantat', 'làm nhanh giúp em nhé', ''),
(212, 'kkkkk', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'baconca121', '01010101', '2024-05-03 05:46:28', '2024-05-03 05:46:28', 'hoantat', '', ''),
(213, 'kietnenenene', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'toilaflr', '123456790', '2024-05-03 06:29:49', '2024-05-03 06:29:49', 'hoantat', '', ''),
(214, 'Thienvip', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'AOUTOWO101', '2610971107', '2024-05-03 08:21:08', '2024-05-03 08:21:08', 'hoantat', 'toilet tower defense Skibidi tower defense Blox fruit', ''),
(215, 'Freefire', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'fkrjfkrhen', 'freefire', '2024-05-03 09:06:09', '2024-05-03 09:06:09', 'hoantat', 'toilet tower defense.realist soccer.volleyball 4.2', ''),
(216, 'Freefire', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'fkrjfkrhen', 'freefire', '2024-05-03 09:06:21', '2024-05-03 09:06:21', 'hoantat', 'toilet tower defense.realist soccer.volleyball 4.2', ''),
(217, 'ChanHuy', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'taalraadu1', 'taarlraadu', '2024-05-03 11:33:41', '2024-05-03 11:33:41', 'hoantat', '', ''),
(218, 'tony1010', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'KolevLT5903', '10091980', '2024-05-03 11:41:23', '2024-05-03 11:41:23', 'hoantat', 'cho 1 con santa TV fram được không chủ shop đẹp trai', ''),
(219, 'Astikhvineuq', 'Ngvhoang', '3500 GEMS + 500 GEMS', 50000, 'choanhliemlon4', 'cctovccuaanh', '2024-05-03 12:46:20', '2024-05-03 12:46:20', 'hoantat', '', ''),
(220, 'Astikhvineuq', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'choanhliemlon4', 'cctovccuaanh', '2024-05-03 12:46:35', '2024-05-03 12:46:35', 'hoantat', '', ''),
(221, 'taolatien', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'jwdwsrbi3', 'tien4252ne', '2024-05-03 13:49:36', '2024-05-03 13:49:36', 'hoantat', '', ''),
(222, 'Hoanganh2310', 'Ngvhoang', '7000 GEMS + 1050 GEMS', 100000, 'uasarbrymu', 'DungNinh', '2024-05-03 14:20:46', '2024-05-03 14:20:46', 'hoantat', 'em xin theem 300 gems :)', ''),
(223, 'Triomachi', 'Ngvhoang', 'DJ TV Man', 799000, 'trioop12', 'tribonca123', '2024-05-03 15:31:56', '2024-05-03 15:31:56', 'hoantat', 'shop rất uy tín', ''),
(224, 'H1h4_kk1830', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'H1h4_kk1830', '27022013', '2024-05-03 23:23:25', '2024-05-03 23:23:25', 'hoantat', '', ''),
(225, 'H1h4_kk1830', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'H1h4_kk1830', '27022013', '2024-05-03 23:23:36', '2024-05-03 23:23:36', 'hoantat', '', ''),
(226, 'Hungg3333', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'Hungg3333', '1199234567', '2024-05-03 23:43:19', '2024-05-03 23:43:19', 'hoantat', '', ''),
(227, 'Hungg3333', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'Hungg3333', '1199234567', '2024-05-03 23:43:28', '2024-05-03 23:43:28', 'hoantat', '', ''),
(228, 'Hungg3333', 'Ngvhoang', '1400 GEMS + 200 GEMS', 20000, 'nick524j2os', 'shopkouytin', '2024-05-03 23:43:54', '2024-05-03 23:43:54', 'hoantat', '', ''),
(229, 'Hungg3333', 'Ngvhoang', '700 GEMS + 100 GEMS', 10000, 'nick524j2os', 'shopkouytin', '2024-05-03 23:44:00', '2024-05-03 23:44:00', 'hoantat', '', ''),
(230, 'Vinhnehaha', 'Ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'vinhyeungoc09z', 'ngocyeuvinh', '2024-05-04 03:18:56', '2024-05-04 03:18:56', 'hoantat', 'hasaki ne', ''),
(231, 'Ngvhoang', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'jwdwsrbi3', 'tien4252ne', '2024-05-04 04:36:49', '2024-05-04 04:36:49', 'huy', '', ''),
(232, 'Adufflqm', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'tomhg12345', 'tomdepzai', '2024-05-04 05:07:01', '2024-05-04 05:07:01', 'hoantat', 'Không có', ''),
(233, 'Adufflqm', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'tomhg12345', 'tomdepzai', '2024-05-04 05:07:17', '2024-05-04 05:07:17', 'hoantat', 'Không có', ''),
(234, 'Thanhnam101', 'Ngvhoang', 'Mace Camerawoman', 9890, 'MT_GAME0', 'thanhnam1230', '2024-05-04 05:15:23', '2024-05-04 05:15:23', 'hoantat', 'TOILET TOWER DEFENSE', ''),
(235, 'lam2011ok122', 'Ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'blb79e', 'nam2024ok122', '2024-05-04 05:25:15', '2024-05-04 05:25:15', 'huy', 'blox furit tolet vs anime', ''),
(236, 'lam2011ok122', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'blb79e', 'nam2024ok122', '2024-05-04 05:25:45', '2024-05-04 05:25:45', 'huy', 'bloc furit  tolet vs anime', ''),
(237, 'Baisunfnsu', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'baisunfnsu', 'TinhHauAn', '2024-05-04 05:25:58', '2024-05-04 05:25:58', 'hoantat', 'Door,blox fruit , toilet tower', ''),
(238, 'Baisunfnsu', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'baisunfnsu', 'TinhHauAn', '2024-05-04 05:29:06', '2024-05-04 05:29:06', 'hoantat', 'door,blox fruit,toilet tower', ''),
(239, 'lam2011ok122', 'Ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'tripp621qz', 'nam2024ok122', '2024-05-04 05:37:33', '2024-05-04 05:37:33', 'hoantat', '', ''),
(240, 'lam2011ok122', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'tripp621qz', 'nam2024ok122', '2024-05-04 05:38:09', '2024-05-04 05:38:09', 'hoantat', '', ''),
(241, '0944498252', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'trahuykhang1234', 'gửi qua post office cho em', '2024-05-04 05:53:41', '2024-05-04 05:53:41', 'hoantat', 'duyệt đơn nhanh nha', ''),
(242, '0944498252', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'trahuykhang1234', 'gửi qua post office cho em', '2024-05-04 05:53:58', '2024-05-04 05:53:58', 'hoantat', 'duyệt đơn nhanh nha', ''),
(243, '0944498252', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'trahuykhang1234', 'gửi qua post office cho em', '2024-05-04 05:54:10', '2024-05-04 05:54:10', 'hoantat', 'duyệt đơn nhanh nha', ''),
(244, 'Hungg3333', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'ymzvlp', 'T09876112211', '2024-05-04 06:03:11', '2024-05-04 06:03:11', 'hoantat', '', ''),
(245, 'Hungg3333', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'ymzvlp', 'T09876112211', '2024-05-04 06:03:20', '2024-05-04 06:03:20', 'hoantat', '', ''),
(246, 'Thanhnam101', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'MT_GAME0', 'thanhnam1230', '2024-05-04 06:25:17', '2024-05-04 06:25:17', 'hoantat', 'TOILET TOWER DEFENSE', ''),
(247, 'Kietlb', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'kiettolettower', '0908860005', '2024-05-04 07:53:34', '2024-05-04 07:53:34', 'hoantat', 'nhanh nhé', ''),
(248, 'Kietlb', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'kiettolettower', '0908860005', '2024-05-04 07:54:09', '2024-05-04 07:54:09', 'hoantat', 'nhanh nuôn', ''),
(249, 'Qdcgfk4', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'wibuking_vn', '12344321a', '2024-05-04 09:40:30', '2024-05-04 09:40:30', 'hoantat', 'evade dao ball', ''),
(250, 'banthuoc1234', 'Ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'banthuoc1234', 'tomkem78', '2024-05-04 10:00:58', '2024-05-04 10:00:58', 'hoantat', '', ''),
(251, 'Papung', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'kitsuneitmy', 'ji', '2024-05-04 12:27:12', '2024-05-04 12:27:12', 'hoantat', 'jj', ''),
(252, 'Lolicon', 'Ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'cinico9f', 'rip-an505', '2024-05-04 12:29:29', '2024-05-04 12:29:29', 'hoantat', 'tolet', ''),
(253, 'Khoahihi', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'phannhugpdmk', '0373797464', '2024-05-04 12:47:41', '2024-05-04 12:47:41', 'hoantat', '', ''),
(254, 'phatjdjnazwda', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'itelqx2', '11052011', '2024-05-04 13:27:54', '2024-05-04 13:27:54', 'hoantat', 'toilet', ''),
(255, 'Lemmm', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'barwobj', 'tuilamot', '2024-05-04 13:40:08', '2024-05-04 13:40:08', 'hoantat', '', ''),
(256, 'Lemmm', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'PhamngocycHV4', 'ducanhkkk', '2024-05-04 13:43:51', '2024-05-04 13:43:51', 'hoantat', '', ''),
(257, 'Concacm', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'nguoi832', 'ditconmemay', '2024-05-04 13:44:03', '2024-05-04 13:44:03', 'hoantat', 'toilet tower defesnse, king legacy, fruit battle ground ground', ''),
(258, 'Conhhh', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'nguoi832', 'ditconmemay', '2024-05-04 13:49:14', '2024-05-04 13:49:14', 'hoantat', 'toilet tower defesnse, king legacy, fruit battle ground ground', ''),
(259, 'Ngvhoang', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'jwdwsrbi3', 'fuiivd47h', '2024-05-04 23:48:08', '2024-05-04 23:48:08', 'huy', '', ''),
(260, 'Huunghia1055', 'Ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'ggaming5671', '567890567@', '2024-05-05 01:41:36', '2024-05-05 01:41:36', 'hoantat', 'mong shop duyệt nhanh', ''),
(261, 'Huunghia1055', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'ggaming5671', '567890567@', '2024-05-05 01:41:55', '2024-05-05 01:41:55', 'hoantat', 'mong shop duyệt nhanh', ''),
(262, 'Dogngu5', 'Ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'bezumtim85102', 'DUONGTHAIHOC', '2024-05-05 01:54:33', '2024-05-05 01:54:33', 'hoantat', '', ''),
(263, 'Hggjfhl', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'bebihasaki175', 'khoadotai', '2024-05-05 02:12:46', '2024-05-05 02:12:46', 'hoantat', 'toilet tower defent', ''),
(264, 'Andi97', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'rileynolkforme', '091978000a', '2024-05-05 02:14:42', '2024-05-05 02:14:42', 'huy', 'toilet tower defense', ''),
(265, 'Hungg3333', 'Ngvhoang', '800 GEMS + 100 GEMS', 10000, 'hungg3333', '1199234567', '2024-05-05 02:24:20', '2024-05-05 02:24:20', 'hoantat', '', ''),
(266, 'Andi97', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'rileynolkforme', '091978000a', '2024-05-05 03:04:09', '2024-05-05 03:04:09', 'huy', 'toilet tower defense', 'Tên sai'),
(267, 'Hiban', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'Cuongbot6', 'Siu123456', '2024-05-05 03:32:05', '2024-05-05 03:32:05', 'hoantat', '', ''),
(268, 'Hoanganh2310', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'uasarbrymu', 'DungNinh', '2024-05-05 04:27:56', '2024-05-05 04:27:56', 'hoantat', 'acc lien quân ko vo dc anh oi :) em xin 400 gém', ''),
(269, 'Andi97', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'rileynorfolkme', '091978000a', '2024-05-05 04:32:10', '2024-05-05 04:32:10', 'hoantat', 'toilet tower defense', ''),
(270, 'CHUBIN23', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'Vuxgaming1231', 'asimplepass', '2024-05-05 06:47:28', '2024-05-05 06:47:28', 'hoantat', 'em xin 400 gems plsss', ''),
(271, 'buiminhhoang', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'roblox198_good', 'hoang2012', '2024-05-05 07:05:13', '2024-05-05 07:05:13', 'hoantat', 'toilet,toilet modde, cố gắng chết 2', ''),
(272, 'dungkamadu', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'uchiha_vnthai', 'acccuacongvadungbo', '2024-05-05 07:41:30', '2024-05-05 07:41:30', 'hoantat', '', ''),
(273, 'buiminhhoang', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'roblox198_good', 'hoang2012', '2024-05-05 07:41:57', '2024-05-05 07:41:57', 'hoantat', 'toilet,vược qua nó,cố gắng chết2', ''),
(274, 'dungkamadu', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'kolakola_y', '1234567891011121314151617181920', '2024-05-05 07:42:55', '2024-05-05 07:42:55', 'hoantat', '', ''),
(275, 'XCCHU', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'dangcappro12390', '13249798797948585', '2024-05-05 07:50:14', '2024-05-05 07:50:14', 'hoantat', 'em xin 400 gems plsss ;[', ''),
(276, 'XCCHU', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'dangcappro12390', '13249798797948585', '2024-05-05 07:50:15', '2024-05-05 07:50:15', 'hoantat', 'em xin 400 gems plsss ;[', ''),
(277, 'XCCHU', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'dangcappro12390', '13249798797948585', '2024-05-05 07:50:15', '2024-05-05 07:50:15', 'hoantat', 'em xin 400 gems plsss ;[', ''),
(278, 'phatkodz', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'duybao100duybao', 'không có', '2024-05-05 08:10:55', '2024-05-05 08:10:55', 'hoantat', '', ''),
(279, 'Kokoko', 'ngvhoang', '18000 GEMS + 1000 GEMS', 200000, 'WSTQIWH7', 'WSTQIWH7', '2024-05-05 08:23:39', '2024-05-05 08:23:39', 'hoantat', 'toi', ''),
(280, 'Minhdzvailon', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'yyhtrnh', 'NGUYENMINHTRI2012', '2024-05-05 08:31:13', '2024-05-05 08:31:13', 'hoantat', 'king legarcy,toilet tower defense, blox fruit', ''),
(281, 'TBG4B0', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'hdjwiegdg', '11111111q', '2024-05-05 09:12:07', '2024-05-05 09:12:07', 'hoantat', 'toilet tower defens. toilet rng.toilet defense', ''),
(282, 'Hebdbsb', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'hoaikgvn111', 'memaygaycac', '2024-05-05 09:29:40', '2024-05-05 09:29:40', 'hoantat', 'duyệt nhanh nhé a', ''),
(283, 'Huunghia1055', 'ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'ggaming5671', '567890567', '2024-05-05 12:20:24', '2024-05-05 12:20:24', 'hoantat', 'mong shop duyệt nhanh', ''),
(284, 'Huunghia1055', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'ggaming5671', '567890567', '2024-05-05 12:20:54', '2024-05-05 12:20:54', 'hoantat', 'mong shop duyệt nhanh', ''),
(285, 'lam2011ok122', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'driuwerij6a', 'nam098ok122', '2024-05-05 13:51:17', '2024-05-05 13:51:17', 'hoantat', '', ''),
(286, 'tungdepzai', 'Ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'cucucu12300', 'tungdepzai123', '2024-05-05 14:36:05', '2024-05-05 14:36:05', 'hoantat', '', ''),
(287, 'buiminhhoang', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'roblox198_good', 'hoang2012', '2024-05-05 23:38:57', '2024-05-05 23:38:57', 'hoantat', 'toilet,vược qua nó,cố gắng chết2', ''),
(288, 'Huunghia1055', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'ggaming5671', '567890567@', '2024-05-06 01:57:49', '2024-05-06 01:57:49', 'hoantat', 'mong shop duyệt nhanh', ''),
(289, 'Bongu', 'ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'thangnghe098', 'bonguvcl', '2024-05-06 04:58:21', '2024-05-06 04:58:21', 'hoantat', 'toilet tower defense', ''),
(290, 'baodz', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'duybao100duybao', 'koco', '2024-05-06 06:10:50', '2024-05-06 06:10:50', 'hoantat', '', ''),
(291, 'Chothemdcko', 'ngvhoang', '100000 GEMS', 1000000, 'vuongdzhahao_o', 'admindeptrainhat', '2024-05-06 07:36:03', '2024-05-06 07:36:03', 'hoantat', 'cho thêm đi chị:))', ''),
(292, 'baodz', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'duybao100duybao', 'koco', '2024-05-06 09:48:18', '2024-05-06 09:48:18', 'hoantat', '', ''),
(293, 'CHUBIN23', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'bxygzoxf', 'DungNinh', '2024-05-06 10:41:49', '2024-05-06 10:41:49', 'hoantat', 'em moi choi mong anh tang thêm gems am', '');
INSERT INTO `orders_bandv` (`id`, `username`, `receiver`, `dichvu`, `money`, `tk`, `mk`, `createdate`, `updatedate`, `status`, `ghichu`, `reason`) VALUES
(294, 'Nguyenquocan', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'kpjclp', 'shopxenrobloxuytinvaio', '2024-05-06 11:07:15', '2024-05-06 11:07:15', 'hoantat', '', ''),
(295, 'Baisunfnsu', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'baisunfnsu', 'TinhHauAn', '2024-05-06 12:14:46', '2024-05-06 12:14:46', 'hoantat', 'lưỡi bóng , blox fruit , toilet tower', ''),
(296, 'Baisunfnsu', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'baisunfnsu', 'tsyahshah', '2024-05-06 12:43:35', '2024-05-06 12:43:35', 'hoantat', 'lưỡi bóng , blox fruit , toilet tower', ''),
(297, 'Ducks', 'ngvhoang', 'Evil Secret Agent', 419000, 'tomhg12345', 'tomdepzai', '2024-05-06 12:58:40', '2024-05-06 12:58:40', 'hoantat', 'Không có', ''),
(298, 'Ducks', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'tomhg12345', 'tomdepzai', '2024-05-06 13:02:00', '2024-05-06 13:02:00', 'hoantat', '', ''),
(299, 'Andi97', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'rileynorfolkme', '091978000a', '2024-05-06 13:10:39', '2024-05-06 13:10:39', 'hoantat', 'toilet tower defense', ''),
(300, 'lam2011ok122', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'driuwerij6a', '098154718181', '2024-05-06 13:29:20', '2024-05-06 13:29:20', 'hoantat', '', ''),
(301, 'lam2011ok122', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'driuwerij6a', '098154718181', '2024-05-06 13:29:36', '2024-05-06 13:29:36', 'hoantat', '', ''),
(302, 'Triomachi', 'ngvhoang', '49000 GEMS + 1000 GEMS', 500000, 'trioop12', 'TRIBANHTRAI', '2024-05-06 15:35:51', '2024-05-06 15:35:51', 'hoantat', 'tên tôi ghi in hết', ''),
(303, 'buiminhhoang', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'roblox198_good', 'hoang2012', '2024-05-06 23:25:13', '2024-05-06 23:25:13', 'hoantat', '', ''),
(304, 'Baisunfnsu', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'dangcappro12390', '13249798797948585', '2024-05-07 01:52:27', '2024-05-07 01:52:27', 'hoantat', '', ''),
(305, 'Anbatocoms', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'thanhdzcayttd', '01567979', '2024-05-07 04:04:24', '2024-05-07 04:04:24', 'hoantat', 'ttd', ''),
(306, 'Doanmuromm', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'hipstedt8n', '25122014', '2024-05-07 04:10:53', '2024-05-07 04:10:53', 'hoantat', '', ''),
(307, 'Quandepzai11', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'skuyt96', 'skuyt96', '2024-05-07 04:17:35', '2024-05-07 04:17:35', 'hoantat', 'nhanh nha anh', ''),
(308, 'lekien', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'nauturinnkz', 'lekien123', '2024-05-07 05:06:50', '2024-05-07 05:06:50', 'hoantat', '', ''),
(309, 'Ductri', 'ngvhoang', 'Large Spotlightman', 48542, 'bbigax', '09795922920342600530', '2024-05-07 13:45:05', '2024-05-07 13:45:05', 'hoantat', 'làm nhanh giúp mình nha!', ''),
(310, 'Ductri', 'ngvhoang', 'Large Spotlightman', 48542, 'bbigax', '09795922920342600530', '2024-05-07 13:45:07', '2024-05-07 13:45:07', 'hoantat', 'làm nhanh giúp mình nha!', ''),
(311, 'Ducks', 'ngvhoang', '18000 GEMS + 1000 GEMS', 200000, 'tomhg12345', 'tomdepzai', '2024-05-07 14:46:16', '2024-05-07 14:46:16', 'hoantat', 'Không c', ''),
(312, 'Ducks', 'ngvhoang', 'Evil Scientist Cameraman', 36598, 'tomhg12345', 'tomdepzai', '2024-05-07 14:46:40', '2024-05-07 14:46:40', 'hoantat', 'Không có', ''),
(313, 'Ducks', 'ngvhoang', 'Large Spotlightman', 48542, 'tomhg12345', 'tomdepzai', '2024-05-07 14:47:01', '2024-05-07 14:47:01', 'hoantat', 'Không có', ''),
(314, 'Ducks', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'tomhg12345', 'tomdepzai', '2024-05-07 14:47:20', '2024-05-07 14:47:20', 'hoantat', 'Không có', ''),
(315, 'Ductri', 'ngvhoang', 'Titan TV Man', 101000, 'bbigax', '09795922920342600530', '2024-05-07 15:39:47', '2024-05-07 15:39:47', 'hoantat', '', ''),
(316, 'Ductri', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'bbigax', '09795922920342600530', '2024-05-07 15:42:18', '2024-05-07 15:42:18', 'hoantat', '', ''),
(317, 'CHUBIN1234', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'anhlongdeptrai1227', 'anhlongdeptrai1227', '2024-05-07 15:42:55', '2024-05-07 15:42:55', 'hoantat', 'cho em xin 400 gem plssss', ''),
(318, 'hellomoinguoi', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'pVNXDsFplh', 'T09751537566', '2024-05-08 01:32:08', '2024-05-08 01:32:08', 'hoantat', 'blox fruit,toilet tower defen,pls donate', ''),
(319, 'Chubin40', 'ngvhoang', '800 GEMS + 100 GEMS', 10000, 'dangcappro12390', '13249798797948585', '2024-05-08 02:28:37', '2024-05-08 02:28:37', 'hoantat', '', ''),
(320, 'lekien', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'nauturinnkz', 'lekien123', '2024-05-08 03:57:48', '2024-05-08 03:57:48', 'hoantat', '', ''),
(321, 'Skibitoi', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'barwobj', 'tuilamot', '2024-05-08 04:22:18', '2024-05-08 04:22:18', 'hoantat', 'mong admin cho em thêm ít gem ạ em mới chơi mới lại em nghèo lắm', ''),
(322, 'Tuyen19918', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'tuyen19918', 'tuyendeptrai123', '2024-05-08 05:03:26', '2024-05-08 05:03:26', 'hoantat', '', ''),
(323, 'Baisunfnsu', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'baisunfnsu', 'bâhhajajJa', '2024-05-08 05:26:19', '2024-05-08 05:26:19', 'hoantat', 'toilet tower , lưỡi bóng , blox fruit', ''),
(324, 'Ducks', 'ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'tomhg12345', 'tomdepzai', '2024-05-08 05:52:41', '2024-05-08 05:52:41', 'hoantat', 'Không có', ''),
(325, 'Ducks', 'ngvhoang', 'Titan Clover Man', 295000, 'tomhg12345', 'tomdepzai', '2024-05-08 06:07:06', '2024-05-08 06:07:06', 'hoantat', 'Không có', ''),
(326, 'kietnenenene', 'ngvhoang', '8200 GEMS + 1050 GEMS', 100000, 'lazaydoni', '098765431', '2024-05-08 06:18:50', '2024-05-08 06:18:50', 'hoantat', '', ''),
(327, 'Skibitoi', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'barwobj', 'tuilamot', '2024-05-08 07:56:59', '2024-05-08 07:56:59', 'hoantat', 'mong hai đơn 50k của em mong anh admin đẹp trai cho em lên 10k gem ak', ''),
(328, 'Skibitoi', 'ngvhoang', '4200 GEMS + 500 GEMS', 50000, 'barwobj', 'tuilamot', '2024-05-08 07:57:29', '2024-05-08 07:57:29', 'hoantat', 'đơn thứ 2 nha anh admin đẹp trai', ''),
(329, 'Luongvansau1991', 'ngvhoang', '1700 GEMS + 200 GEMS', 20000, 'hk25561', '14325468', '2024-05-08 09:36:31', '2024-05-08 09:36:31', 'hoantat', 'xin đừng bịp', ''),
(330, 'Ducks', 'ngvhoang', 'Scientist Mech', 38000, 'tomhg12345', 'tomdepzai', '2024-05-08 10:05:00', '2024-05-08 10:05:00', 'hoantat', 'Không có', ''),
(331, 'Ducks', 'ngvhoang', 'COMBO PHÁ ĐẢO ENDLESS VER 1', 139000, 'tomhg12345', 'tomdepzai', '2024-05-08 10:05:23', '2024-05-08 10:05:23', 'hoantat', 'Không có', ''),
(332, 'Ducks', 'ngvhoang', 'X10 CLOVER CRATE', 19000, 'tomhg12345', 'tomdepzai', '2024-05-08 10:06:07', '2024-05-08 10:06:07', 'hoantat', 'Không có', ''),
(333, 'Ducks', 'ngvhoang', 'X10 CLOVER CRATE', 19000, 'tomhg12345', 'tomdepzai', '2024-05-08 10:06:08', '2024-05-08 10:06:08', 'hoantat', 'Không có', ''),
(334, 'Ducks', 'ngvhoang', 'X10 CLOVER CRATE', 19000, 'tomhg12345', 'tomdepzai', '2024-05-08 10:06:21', '2024-05-08 10:06:21', 'hoantat', 'Không có', ''),
(335, 'Hebdbsb', 'ngvhoang', 'Hyper Upgraded Titan Speakerman', 249000, 'hoaikgvn111', 'memaygaycac', '2024-05-08 11:28:21', '2024-05-08 11:28:21', 'hoantat', 'duyệt nhanh nhé a', ''),
(336, 'taolatunganh5c2', 'VIETPC', '4200 GEMS + 500 GEMS', 50000, 'taolatunganh5c2ok', '0192837465', '2024-05-08 12:23:24', '2024-05-08 12:23:24', 'hoantat', '', ''),
(337, 'doannhattien', 'Tuananh', '100000 GEMS', 1000000, 'ạhahsj', 'hâjaja', '2024-08-22 20:39:00', '2024-08-22 20:39:00', 'hoantat', '', ''),
(338, 'Tuananh', 'tuananh', 'dfgdsf', 10000, 'adas', 'fsafasfas', '2024-08-27 21:43:32', '2024-08-27 21:43:32', 'huy', 'zbznnznz', 'hết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_caythue`
--

CREATE TABLE `orders_caythue` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `orders_caythue`
--

INSERT INTO `orders_caythue` (`id`, `username`, `receiver`, `dichvu`, `money`, `tk`, `mk`, `createdate`, `updatedate`, `status`, `ghichu`, `reason`) VALUES
(1, 'Lon123cac', 'Ngvhoang', '550 GEMS', 10000, 'vhoangsellttd', 'Vhoang2004', '2024-04-10 06:00:38', '2024-04-10 06:00:38', 'huy', 'Ok', 'NTY'),
(2, 'Phnhan1234', 'Ngvhoang', '1200 GEMS', 20000, 'vijzelenyq', 'taocamthangnaovaoacctao2349934', '2024-04-10 07:06:17', '2024-04-10 07:06:17', 'huy', '', 'vui lòng tắt 2 step nha bạn'),
(3, 'Phnhan1234', 'Ngvhoang', '1200 GEMS', 20000, 'vijzelenyq', 'taocamthangnaovaoacctao2349934', '2024-04-10 11:07:11', '2024-04-10 11:07:11', 'hoantat', '', ''),
(4, 'duongkhang', 'Ngvhoang', '5555 GEMS', 100000, 'GOD_HASAKI24', 'hasaki123', '2024-04-11 08:34:51', '2024-04-11 08:34:51', 'hoantat', 'thêm nha', ''),
(5, 'duongkhang', 'Ngvhoang', '2700 GEMS', 50000, 'GOD_HASAKI24', 'hasaki123', '2024-04-11 08:35:27', '2024-04-11 08:35:27', 'hoantat', 'thêm nha', ''),
(6, 'Indifesom9', 'Ngvhoang', '2700 GEMS', 50000, 'Indifesom9', 'Conglundzai', '2024-04-11 15:25:49', '2024-04-11 15:25:49', 'huy', '', 'sai tk hoặc mk, gift không đc ( 1 số nick gift bị lỗi), rất xin lỗi bạn về vấn đề này'),
(7, 'Indifesom9', 'Ngvhoang', '2700 GEMS', 50000, 'Conglunhehe', '1029384756', '2024-04-11 16:53:28', '2024-04-11 16:53:28', 'hoantat', '', 'Cảm ơn đã ủng hộ nha(gift post)'),
(8, 'Anbatocoms', 'Ngvhoang', '1200 GEMS', 20000, 'thanhdzcayttd', '01567979', '2024-04-12 13:41:05', '2024-04-12 13:41:05', 'hoantat', '', 'Gift post'),
(9, 'Anbatocoms', 'Ngvhoang', '2700 GEMS', 50000, 'Thanhdzcayttd', '01567979', '2024-04-13 12:04:58', '2024-04-13 12:04:58', 'hoantat', '', 'Gift post'),
(10, 'Ngvhoang', 'Ngvhoang', '2700 GEMS', 50000, 'Eusuus', 'Eysyus', '2024-04-13 18:28:07', '2024-04-13 18:28:07', 'hoantat', 'Yys', ''),
(11, 'Lamnek090', 'Ngvhoang', '1200 GEMS', 20000, 'Lamdaynecu', 'Lehoanglam', '2024-04-14 01:26:44', '2024-04-14 01:26:44', 'hoantat', '.', ''),
(12, 'Tuananh', 'doannhattien', '700-1500 LV', 40000, 'fdfdsf', 'fdfdf', '2024-08-24 18:33:55', '2024-08-24 18:33:55', 'hoantat', 'dssdsdf', ''),
(13, 'HoangLe', 'doannhattien', 'LẤY SOUL GUITAR', 28000, 'vLGY9Q', 'lth175659', '2024-08-24 18:38:53', '2024-08-24 18:38:53', 'hoantat', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_gamepass`
--

CREATE TABLE `orders_gamepass` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `orders_gamepass`
--

INSERT INTO `orders_gamepass` (`id`, `username`, `receiver`, `dichvu`, `money`, `tk`, `mk`, `createdate`, `updatedate`, `status`, `ghichu`, `reason`) VALUES
(1, 'tuanhacknha', 'Tuananh', 'YORU/HẮC KIẾM', 150000, 'MagammingTuanvip', 'tuanthienthansanga', '2024-08-26 08:08:35', '2024-08-26 08:08:35', 'hoantat', 'Shop uy tín quá', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_robux`
--

CREATE TABLE `orders_robux` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `dichvu` varchar(255) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `mk` varchar(255) DEFAULT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `reason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_withdraw`
--

CREATE TABLE `orders_withdraw` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `dichvu` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `robux` int(11) NOT NULL,
  `tk` varchar(255) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL,
  `updatedate` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `money` int(11) NOT NULL DEFAULT 0,
  `level` varchar(255) DEFAULT NULL,
  `banned` int(11) NOT NULL DEFAULT 0,
  `createdate` datetime DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `daily` int(11) DEFAULT 0,
  `otp` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `chietkhau` float DEFAULT 0,
  `time` varchar(255) DEFAULT NULL,
  `chitieu` int(11) NOT NULL DEFAULT 0,
  `total_money` int(11) NOT NULL DEFAULT 0,
  `ctv` int(11) DEFAULT 0,
  `ctvacc` int(11) DEFAULT 0,
  `robux` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `token`, `money`, `level`, `banned`, `createdate`, `email`, `ref`, `daily`, `otp`, `ip`, `chietkhau`, `time`, `chitieu`, `total_money`, `ctv`, `ctvacc`, `robux`) VALUES
(16, 'ADMIN', '1610f9808f66b09a479266ac4ee14c24', 'rnZquyfPOvektMImiYGFjlbSxBNzETAwcRdKVCDLagWoQUhXHJsp', 11000, 'admin', 0, '2024-09-12 11:41:05', '', NULL, 0, '', '2a09:bac5:d443:16c8::245:d6', 0, '1726116065', 0, 11000, 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_bandv`
--
ALTER TABLE `category_bandv`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_gamepass`
--
ALTER TABLE `category_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category_robux`
--
ALTER TABLE `category_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_bandv`
--
ALTER TABLE `groups_bandv`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_gamepass`
--
ALTER TABLE `groups_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `groups_robux`
--
ALTER TABLE `groups_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `lichsuvongquay`
--
ALTER TABLE `lichsuvongquay`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mini_game`
--
ALTER TABLE `mini_game`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mini_game_gift`
--
ALTER TABLE `mini_game_gift`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `momo`
--
ALTER TABLE `momo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `momoo`
--
ALTER TABLE `momoo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_bandv`
--
ALTER TABLE `orders_bandv`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_gamepass`
--
ALTER TABLE `orders_gamepass`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_robux`
--
ALTER TABLE `orders_robux`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders_withdraw`
--
ALTER TABLE `orders_withdraw`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bank_auto`
--
ALTER TABLE `bank_auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `category_bandv`
--
ALTER TABLE `category_bandv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `category_caythue`
--
ALTER TABLE `category_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `category_gamepass`
--
ALTER TABLE `category_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category_robux`
--
ALTER TABLE `category_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `groups_bandv`
--
ALTER TABLE `groups_bandv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT cho bảng `groups_caythue`
--
ALTER TABLE `groups_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `groups_gamepass`
--
ALTER TABLE `groups_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `groups_robux`
--
ALTER TABLE `groups_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `lichsuvongquay`
--
ALTER TABLE `lichsuvongquay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `mini_game`
--
ALTER TABLE `mini_game`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `mini_game_gift`
--
ALTER TABLE `mini_game_gift`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `momo`
--
ALTER TABLE `momo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `momoo`
--
ALTER TABLE `momoo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `orders_bandv`
--
ALTER TABLE `orders_bandv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT cho bảng `orders_caythue`
--
ALTER TABLE `orders_caythue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders_gamepass`
--
ALTER TABLE `orders_gamepass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `orders_robux`
--
ALTER TABLE `orders_robux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders_withdraw`
--
ALTER TABLE `orders_withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
