-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2018 lúc 10:36 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `timelinedb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `idad` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageline`
--

CREATE TABLE `imageline` (
  `id` int(11) NOT NULL,
  `Place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img5` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imageline`
--

INSERT INTO `imageline` (`id`, `Place`, `Date`, `Description`, `img`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'viet nam', '2018-05-16', 'dadgasdgasdgasgdasdg', 'img/hinh1.jpg', 'img/small_picture01.jpg', 'img/small_picture02.jpg', 'img/small_picture03.jpg', 'img/small_picture04.jpg', 'img/small_picture05.jpg'),
(2, 'sai gon ', '2018-05-23', 'fffffffffffffffffffffffffffffffffffffffffffdasf', 'img/hinh1.jpg', '', '', '', '', ''),
(3, 'Singapore', '2016-11-04', 'Road To Singapore', 'img/hinh1.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idus` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idad`);

--
-- Chỉ mục cho bảng `imageline`
--
ALTER TABLE `imageline`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idus`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `imageline`
--
ALTER TABLE `imageline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idus` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
