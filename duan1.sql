-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 10:42 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(20) NOT NULL,
  `iduser` int(20) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(250) NOT NULL,
  `bill_email` varchar(250) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp 2.Chuyển khoản 3.Thanh toán ',
  `ngaydathang` varchar(60) DEFAULT NULL,
  `total` int(20) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang chờ 2.Đang giao hàng 3.Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(1, 0, '', '', '', '', 0, '11:09:06am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(2, 0, '', '', '', '', 0, '11:10:48am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(3, 0, '', '', '', '', 0, '11:10:54am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(4, 0, '', '', '', '', 0, '11:13:55am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(5, 0, '', '', '', '', 0, '11:14:14am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(6, 0, '', '', '', '', 0, '11:16:06am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(7, 0, '', '', '', '', 0, '11:17:04am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(8, 0, '', '', '', '', 0, '11:18:05am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(9, 0, '', '', '', '', 0, '11:21:10am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(10, 0, '', '', '', '', 0, '11:25:14am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(11, 0, '', '', '', '', 0, '11:29:20am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(12, 0, '', '', '', '', 0, '11:32:38am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(13, 0, '', '', '', '', 0, '11:34:53am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(14, 0, '', '', '', '', 0, '11:35:11am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(15, 0, '', '', '', '', 0, '11:35:20am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(16, 0, '', '', '', '', 0, '11:35:47am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(17, 0, '', '', '', '', 0, '11:42:42am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(18, 0, '', '', '', '', 0, '11:42:57am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(19, 0, '', '', '', '', 0, '11:44:40am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(20, 0, '', '', '', '', 0, '11:44:59am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(21, 0, '', '', '', '', 0, '11:45:47am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(22, 0, '', '', '', '', 0, '11:46:10am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(23, 0, '', '', '', '', 0, '11:46:31am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(24, 0, '', '', '', '', 0, '11:46:55am 25/11/2023', 40000036, 0, NULL, NULL, NULL),
(25, 1, 'tienhung02', '', '', 'nguyentienhung125@gmail.com', 0, '09:55:48am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(26, 0, '', '', '', '', 0, '10:26:14am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(27, 0, '', '', '', '', 0, '10:26:58am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(28, 0, '', '', '', '', 0, '10:27:35am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(29, 0, '', '', '', '', 0, '10:32:01am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(30, 0, '', '', '', '', 0, '10:33:24am 28/11/2023', 24000000, 0, NULL, NULL, NULL),
(31, 1, 'tienhung02', '', '', 'nguyentienhung125@gmail.com', 0, '10:36:39am 28/11/2023', 48000000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(20) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(20) NOT NULL,
  `idpro` int(20) NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'adasd', 0, 3, '03:27:17pm 20/11/2023'),
(2, 'đấ', 0, 3, '03:27:56pm 20/11/2023'),
(3, 'adasdaw', 0, 3, '03:28:03pm 20/11/2023'),
(4, 'adaw', 0, 3, '03:28:06pm 20/11/2023'),
(5, 'lmkkonk', 0, 11, '10:43:42am 21/11/2023'),
(6, 'lmkkonk', 0, 9, '11:40:35am 21/11/2023'),
(7, 'lmkkonk', 0, 6, '11:46:24am 21/11/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `iduser` int(20) NOT NULL,
  `idpro` int(20) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(60) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(60) NOT NULL,
  `idbill` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 1),
(2, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 1),
(3, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 1),
(4, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 1),
(5, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 1),
(6, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 1),
(7, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 2),
(8, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 2),
(9, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 2),
(10, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 2),
(11, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 2),
(12, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 2),
(13, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 3),
(14, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 3),
(15, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 3),
(16, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 3),
(17, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 3),
(18, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 3),
(19, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 4),
(20, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 4),
(21, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 4),
(22, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 4),
(23, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 4),
(24, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 4),
(25, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 5),
(26, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 5),
(27, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 5),
(28, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 5),
(29, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 5),
(30, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 5),
(31, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 6),
(32, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 6),
(33, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 6),
(34, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 6),
(35, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 6),
(36, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 6),
(37, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 7),
(38, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 7),
(39, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 7),
(40, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 7),
(41, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 7),
(42, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 7),
(43, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 8),
(44, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 8),
(45, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 8),
(46, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 8),
(47, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 8),
(48, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 8),
(49, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 9),
(50, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 9),
(51, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 9),
(52, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 9),
(53, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 9),
(54, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 9),
(55, 0, 5, '24000000', '1', 24000000, 9, 0, 10),
(56, 0, 0, '2000000', '1', 2000000, 3, 0, 10),
(57, 0, 3, '3500009', '1', 3500009, 11, 0, 10),
(58, 0, 0, '3500009', '1', 3500009, 10, 0, 10),
(59, 0, 0, '3500009', '1', 3500009, 7, 0, 10),
(60, 0, 0, '3500009', '1', 3500009, 10, 0, 10),
(61, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 11),
(62, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 11),
(63, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 11),
(64, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 11),
(65, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 11),
(66, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 11),
(67, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 12),
(68, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 12),
(69, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 12),
(70, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 12),
(71, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 12),
(72, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 12),
(73, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 13),
(74, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 13),
(75, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 13),
(76, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 13),
(77, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 13),
(78, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 13),
(79, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 14),
(80, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 14),
(81, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 14),
(82, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 14),
(83, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 14),
(84, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 14),
(85, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 15),
(86, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 15),
(87, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 15),
(88, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 15),
(89, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 15),
(90, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 15),
(91, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 16),
(92, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 16),
(93, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 16),
(94, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 16),
(95, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 16),
(96, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 16),
(97, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 17),
(98, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 17),
(99, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 17),
(100, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 17),
(101, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 17),
(102, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 17),
(103, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 18),
(104, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 18),
(105, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 18),
(106, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 18),
(107, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 18),
(108, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 18),
(109, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 19),
(110, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 19),
(111, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 19),
(112, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 19),
(113, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 19),
(114, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 19),
(115, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 20),
(116, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 20),
(117, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 20),
(118, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 20),
(119, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 20),
(120, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 20),
(121, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 21),
(122, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 21),
(123, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 21),
(124, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 21),
(125, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 21),
(126, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 21),
(127, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 22),
(128, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 22),
(129, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 22),
(130, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 22),
(131, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 22),
(132, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 22),
(133, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 23),
(134, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 23),
(135, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 23),
(136, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 23),
(137, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 23),
(138, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 23),
(139, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 24),
(140, 0, 3, 'images (1).jpg', 'Nitro 5', 2000000, 1, 2000000, 24),
(141, 0, 11, '3.jpg', 'nokia ', 3500009, 1, 3500009, 24),
(142, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 24),
(143, 0, 7, 's3.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 24),
(144, 0, 10, 's11.jpg', 'Áo Mùa Đông nam', 3500009, 1, 3500009, 24),
(145, 1, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 25),
(146, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 26),
(147, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 27),
(148, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 28),
(149, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 29),
(150, 0, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 30),
(151, 1, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 31),
(152, 1, 9, '5.jpg', 'Áo Mùa Hè nam', 24000000, 1, 24000000, 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(2, 'iphon'),
(4, 'nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(200) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(20) NOT NULL,
  `iddm` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(3, 'Nitro 5', 2000000, 'images (1).jpg', 'deop', 0, 4),
(4, 'dien thoai', 3500009, 's6.jpg', 'hay', 0, 2),
(5, 'dien thoai', 2000000, 's7.jpg', 'amdlkas', 0, 2),
(6, 'dien thoai', 2000000, '9.jpg', 'adsad ', 0, 4),
(7, 'Áo Mùa Đông nam', 3500009, 's3.jpg', 'gguygiugiu', 0, 4),
(8, 'Áo Mùa Đông nam', 2147483647, 's1.jpg', 'opkoij', 0, 4),
(9, 'Áo Mùa Hè nam', 24000000, '5.jpg', 'gygyuguy', 0, 4),
(10, 'Áo Mùa Đông nam', 3500009, 's11.jpg', 'gguygiugiu', 0, 4),
(11, 'nokia ', 3500009, '3.jpg', '\r\n65465', 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tell` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tell`, `role`) VALUES
(1, 'tienhung02', '123456', 'nguyentienhung125@gmail.com', NULL, NULL, 1),
(24, 'duy1', '123456', 'dovanquan20062004@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
