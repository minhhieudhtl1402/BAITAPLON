-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 05, 2022 lúc 03:08 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `flickr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrators`
--

CREATE TABLE `administrators` (
  `administrator_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `administrators`
--

INSERT INTO `administrators` (`administrator_id`, `name`, `pass`) VALUES
(1, 'a', 'a'),
(2, '1', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrator_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `pass`, `administrator_id`) VALUES
(11, 'abc', '$2y$10$5bpYMcLFMpZ7BtFY0rjNtuLAFmVnf8k550hZvj3EOdIT1UJeRdiUa', NULL),
(12, 'gpessler2', '$2y$10$QoekHUxE/5RuwXwZ9mD.H.dvJEtOZGAu7NDAXCqXg.CW72uVF/8/C', NULL),
(13, 'b', '$2y$10$o.Mot7r/STDX7hHHnAOvwuCS3i6wc96U4Zp09wEsnQUTQCi6OhlWS', NULL),
(14, 'thoa', '$2y$10$iXraQ5XhcbD6AgRzuaNGiOP7wirACtMRbIt0kGs8Vy/q1OwJxw90.', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`) VALUES
(1, 'cover'),
(2, 'avatar'),
(3, 'post');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_add`
--

CREATE TABLE `image_add` (
  `imageAdd_id` int(11) NOT NULL,
  `imageAdd_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageAdd_link` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `uploaded_on` datetime DEFAULT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isAvatar` bit(1) DEFAULT NULL,
  `isCover` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_add`
--

INSERT INTO `image_add` (`imageAdd_id`, `imageAdd_title`, `imageAdd_link`, `categories_id`, `uploaded_on`, `user_email`, `isAvatar`, `isCover`) VALUES
(107, NULL, 'pexels-julius-silver-753626.jpg', 2, '2022-01-14 15:03:19', 'hoangthoa2k1@gmail.com', b'0', NULL),
(108, NULL, 'pexels-bob-clark-21492.jpg', 1, '2022-01-14 15:03:24', 'hoangthoa2k1@gmail.com', b'0', b'1'),
(109, 't', 'pexels-eberhard-grossgasteiger-443446.jpg', 3, '2022-01-14 15:03:36', 'hoangthoa2k1@gmail.com', b'0', NULL),
(110, NULL, 'pexels-pixabay-36717.jpg', 2, '2022-01-14 15:07:10', 'vmhieu1402@gmail.com', b'1', NULL),
(111, NULL, 'pexels-jv-buenconcejo-2719301.jpg', 1, '2022-01-14 15:07:17', 'vmhieu1402@gmail.com', NULL, b'1'),
(112, 'gr', 'pexels-spencer-davis-4388290.jpg', 3, '2022-01-14 15:07:28', 'vmhieu1402@gmail.com', NULL, NULL),
(113, NULL, 'pexels-george-desipris-760984.jpg', 2, '2022-01-14 15:11:19', 'phamdinh@gmail.com', b'1', NULL),
(114, NULL, 'pexels-steve-johnson-845242.jpg', 1, '2022-01-14 15:11:25', 'phamdinh@gmail.com', NULL, b'1'),
(115, 'damcuoi', 'pexels-irina-iriser-1393478.jpg', 3, '2022-01-14 15:11:38', 'phamdinh@gmail.com', NULL, NULL),
(116, NULL, 'pexels-porapak-apichodilok-348520.jpg', 2, '2022-01-14 15:13:09', 'nhamducmanh@gmail.com', b'1', NULL),
(117, NULL, 'pexels-zhang-kaiyv-1139556.jpg', 1, '2022-01-14 15:13:16', 'nhamducmanh@gmail.com', NULL, b'1'),
(118, 'ggg', 'pexels-pixabay-247431.jpg', 3, '2022-01-14 15:13:25', 'nhamducmanh@gmail.com', NULL, NULL),
(119, NULL, 'pexels-max-andrey-1366630.jpg', 2, '2022-01-14 15:18:01', 'dovanthang@gmail.com', b'1', NULL),
(120, NULL, 'pexels-giorgio-de-angelis-1413412.jpg', 1, '2022-01-14 15:18:10', 'dovanthang@gmail.com', NULL, b'1'),
(121, 'nai', 'pexels-pixabay-52961.jpg', 3, '2022-01-14 15:18:23', 'dovanthang@gmail.com', NULL, NULL),
(122, NULL, 'pexels-flickr-145939.jpg', 2, '2022-01-14 15:19:09', 'huonggiang@gmail.com', b'1', NULL),
(123, NULL, 'pexels-steve-johnson-1266808.jpg', 1, '2022-01-14 15:19:16', 'huonggiang@gmail.com', NULL, b'1'),
(124, 'gg', 'pexels-jovana-nesic-593655.jpg', 3, '2022-01-14 15:19:26', 'huonggiang@gmail.com', NULL, NULL),
(125, NULL, 'pexels-pixabay-459203.jpg', 2, '2022-01-14 15:21:02', 'ducminh@gmail.com', b'1', NULL),
(126, NULL, 'pexels-maxime-francis-2246476.jpg', 1, '2022-01-14 15:21:10', 'ducminh@gmail.com', NULL, b'1'),
(127, 'tt', 'pexels-leah-kelley-2090645.jpg', 3, '2022-01-14 15:21:18', 'ducminh@gmail.com', NULL, NULL),
(128, NULL, 'pexels-rachel-xiao-772429.jpg', 2, '2022-01-14 15:22:10', 'vankhai@gmail.com', b'1', NULL),
(129, NULL, 'pexels-george-desipris-760984.jpg', 1, '2022-01-14 15:22:17', 'vankhai@gmail.com', NULL, b'0'),
(130, 'g', 'pexels-george-desipris-760984.jpg', 3, '2022-01-14 15:22:25', 'vankhai@gmail.com', NULL, NULL),
(131, NULL, 'pexels-asad-photo-maldives-1456291.jpg', 1, '2022-01-14 15:22:36', 'vankhai@gmail.com', NULL, b'1'),
(132, NULL, 'pexels-mohamed-sarim-1033729.jpg', 2, '2022-01-14 15:24:49', 'nhatlinh@gmail.com', b'1', NULL),
(133, NULL, 'pexels-paul-ijsendoorn-33041.jpg', 1, '2022-01-14 15:24:53', 'nhatlinh@gmail.com', NULL, b'1'),
(134, 'hg', 'pexels-pixabay-302549.jpg', 3, '2022-01-14 15:25:52', 'nhatlinh@gmail.com', NULL, NULL),
(135, NULL, 'thoa.jpg', 2, '2022-01-14 16:16:24', 'hoangthoa2k1@gmail.com', b'0', NULL),
(136, NULL, 'thoa.jpg', 2, '2022-01-14 16:34:58', 'hoangthoa2k1@gmail.com', b'1', NULL),
(137, 'tháp', 'pexels-eugene-dorosh-739407.jpg', 3, '2022-01-15 10:05:55', 'phamdinh@gmail.com', NULL, NULL),
(138, 'cây lá đỏ', 'pexels-pixabay-33109.jpg', 3, '2022-01-15 10:06:46', 'phamdinh@gmail.com', NULL, NULL),
(139, 'car', 'pexels-vlad-alexandru-popa-1402787 (1).jpg', 3, '2022-01-15 10:48:14', 'hoangthoa2k1@gmail.com', NULL, NULL),
(140, 'lá', 'pexels-pixabay-33109.jpg', 3, '2022-01-17 11:21:24', 'hoangthoa2k1@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT NULL,
  `registation_date` date DEFAULT current_timestamp(),
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_describe` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`users_id`, `first_name`, `last_name`, `email`, `password`, `age`, `registation_date`, `address`, `users_describe`) VALUES
(27, 'Thỏa', 'Hoàng Thị', 'hoangthoa2k1@gmail.com', '$2y$10$NJIRiK/NLe/S2AVi1A8qXu76taHWuSLoPWilVWPIDy2lIH29AeRBu', 20, '2021-12-30', 'Nam Định', 'thoa'),
(29, 'Vũ Hoàng', 'Long', 'vmhieu1402@gmail.com', '$2y$10$O48q6I8hOHBwEGwsiLqdnuJq4MQHJNs0yNV7HuNrSIqoZ/om6S7dK', 25, '2022-01-08', NULL, 'aaaabbbb'),
(35, 'Phạm', ' Định', 'phamdinh@gmail.com', '$2y$10$yyxUm9H8/Bw3ALoQTGd9sunhOqQ7rIvzOK18CdD7LNcI4GPgCyAE2', 20, '2022-01-14', NULL, NULL),
(36, 'Nhâm Đức', ' Mạnh', 'nhamducmanh@gmail.com', '$2y$10$ILkVdJifILpDwBiOGIfWL.1oShy2QFHaLx2UXRrPMwMEg3Nc4rxY.', 20, '2022-01-14', NULL, NULL),
(37, 'Đỗ Văn', ' Thắng', 'dovanthang@gmail.com', '$2y$10$ARZogCAPI1oh11/dH1dq0ekScvi8Znm4zxU.Pj4Bo5JSmtDvj6ndm', 20, '2022-01-14', NULL, NULL),
(38, 'Hương', ' Giang', 'huonggiang@gmail.com', '$2y$10$9fZHJh8BpGj5LUOytsHmXubW340FVZQ5XRtVs1rGQnMaogBjUHLTu', 20, '2022-01-14', NULL, NULL),
(39, 'Đức ', ' Minh', 'ducminh@gmail.com', '$2y$10$9JjGBM/b5Bg9Pj30KlAvceishz3pimrFDgHoev1a6v4Aqt.Wsf9Ne', 20, '2022-01-14', NULL, NULL),
(40, 'Văn ', ' Khải', 'vankhai@gmail.com', '$2y$10$84HogO1TqNEiUtokzTWqwu7eSx99GeDMbyhtOiCg5DSce/eOsCkQq', 21, '2022-01-14', NULL, NULL),
(41, 'Nhật', ' Linh', 'nhatlinh@gmail.com', '$2y$10$APynEgP./pKFsfuUi7d/rOVCu/uucZIMJCmS3d/UDMNrB3/ug.J7a', 23, '2022-01-14', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`administrator_id`);

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `administrator_id` (`administrator_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Chỉ mục cho bảng `image_add`
--
ALTER TABLE `image_add`
  ADD PRIMARY KEY (`imageAdd_id`),
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `administrators`
--
ALTER TABLE `administrators`
  MODIFY `administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `image_add`
--
ALTER TABLE `image_add`
  MODIFY `imageAdd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`administrator_id`) REFERENCES `administrators` (`administrator_id`);

--
-- Các ràng buộc cho bảng `image_add`
--
ALTER TABLE `image_add`
  ADD CONSTRAINT `image_add_ibfk_2` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`),
  ADD CONSTRAINT `image_add_ibfk_3` FOREIGN KEY (`user_email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
