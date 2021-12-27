-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2021 lúc 02:16 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

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
(1, 'ssunman0', '5NOj7oqe5', NULL),
(2, 'bbattrick1', 'C6tH62mNE1GK', NULL),
(3, 'gpessler2', 'u3O5lDnn', NULL),
(4, 'cmorrowe3', 'TGvXGkOq', NULL),
(5, 'ekaygill4', 'LclTxhHuOWf8', NULL),
(6, 'sdomonkos5', 'prLyi44xek', NULL),
(7, 'okevane6', '2bs6YdqGvBR', NULL),
(8, 'lmcellen7', '8Kqzcq', NULL),
(9, 'rbrandhardy8', 'r00eXUBh', NULL),
(10, 'trubinovitsch9', 'D02H0PhHOV', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_author` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_add`
--

CREATE TABLE `image_add` (
  `imageAdd_id` int(11) NOT NULL,
  `imageAdd_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageAdd_link` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `registation_date` date DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`users_id`, `first_name`, `last_name`, `email`, `password`, `age`, `registation_date`, `address`) VALUES
(1, 'Roana', 'How', 'rhow0@reuters.com', '4FrtFdDYIyX', NULL, NULL, '8 Towne Parkway'),
(2, 'Karia', 'Farady', 'kfarady1@linkedin.com', 'yteTbq4y8hg', NULL, NULL, '1254 Ridgeview Place'),
(3, 'Gerri', 'Harmeston', 'gharmeston2@arizona.edu', 'MN9iM0rZH8Fm', NULL, NULL, '2 Del Mar Circle'),
(4, 'Evita', 'Lilburne', 'elilburne3@reference.com', '5wq6wBhulf', NULL, NULL, '35 Ridge Oak Trail'),
(5, 'Augustine', 'Gossan', 'agossan4@engadget.com', 'HcUmw76nv0r', NULL, NULL, '79 Jay Alley'),
(6, 'Evan', 'Duffield', 'eduffield5@buzzfeed.com', 'PYQjHiWkgS', NULL, NULL, '0 Nevada Lane'),
(7, 'Auguste', 'De Rechter', 'aderechter6@t.co', '8mnqeeGUTm', NULL, NULL, '890 Graedel Lane'),
(8, 'Modesty', 'Haddick', 'mhaddick7@bluehost.com', 'ff2WidMgY', NULL, NULL, '32934 Ridgeway Parkway'),
(9, 'Horatia', 'Stallwood', 'hstallwood8@macromedia.com', '2nvbFp', NULL, NULL, '4305 Morning Street'),
(10, 'Breena', 'Boughtflower', 'bboughtflower9@canalblog.com', 'NkZNE0QuxTe1', NULL, NULL, '195 Hallows Plaza');

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
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Chỉ mục cho bảng `image_add`
--
ALTER TABLE `image_add`
  ADD PRIMARY KEY (`imageAdd_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `categories_id` (`categories_id`);

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
  MODIFY `administrator_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_add`
--
ALTER TABLE `image_add`
  MODIFY `imageAdd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`administrator_id`) REFERENCES `administrators` (`administrator_id`);

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`),
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`);

--
-- Các ràng buộc cho bảng `image_add`
--
ALTER TABLE `image_add`
  ADD CONSTRAINT `image_add_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`),
  ADD CONSTRAINT `image_add_ibfk_2` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`categories_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
