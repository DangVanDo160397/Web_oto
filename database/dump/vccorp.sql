-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2018 lúc 02:53 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vccorp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `level`, `password`, `created_at`, `updated_at`) VALUES
(6, '1111q', 'daochinh@gmail.com', '0', '$2y$10$H9LFR6X089gGGOLDDdpSm.4h8LbL2/GbFo15uiQOz/kL/Tz1dYwW6', '2018-02-05 21:26:24', '2018-02-06 00:21:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(12, 'Xe Tải HOWO', '2018-03-01 19:44:58', '2018-03-01 19:44:58'),
(13, 'Xe Tải Shacman', '2018-03-01 19:45:25', '2018-03-01 19:45:25'),
(14, 'Xe Tải Jac', '2018-03-01 19:45:42', '2018-03-01 19:45:42'),
(15, 'Xe Tải DongFeng', '2018-03-01 19:46:19', '2018-03-01 19:46:19'),
(16, 'Xe Tải HyunDai', '2018-03-01 19:47:08', '2018-03-01 19:47:08'),
(17, 'Xe Tải Gắn Cẩu', '2018-03-01 19:47:50', '2018-03-01 19:47:50'),
(18, 'Xe cứu hộ giao thông', '2018-03-01 19:48:15', '2018-03-01 19:48:15'),
(19, 'Xe Đông Lạnh', '2018-03-01 19:48:45', '2018-03-01 19:48:45'),
(20, 'Xe Chuyên Dụng', '2018-04-04 22:15:21', '2018-04-04 22:15:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `decription` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `view` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `fk_product` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `detail`
--

INSERT INTO `detail` (`id`, `name`, `title`, `decription`, `content`, `view`, `masp`, `fk_product`, `image`, `created_at`, `updated_at`) VALUES
(1, '1111', 'dao duc chinh', 'dao duc chinh', '<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:780px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Loại xe</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"http://otogiaiphong.com/\">Xe &ocirc; t&ocirc; tải&nbsp;</a></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Số loại</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Dothanh Mighty HD120S</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Số người cho ph&eacute;p chở (người)</p>\r\n			</td>\r\n			<td>\r\n			<p>03</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&ocirc;ng thức b&aacute;nh xe</p>\r\n			</td>\r\n			<td>\r\n			<p>4x2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Th&ocirc;ng số về khối lượng (kg)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trọng lượng bản th&acirc;n</p>\r\n			</td>\r\n			<td>\r\n			<p>2640</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ph&acirc;n bố : - Cầu trước</p>\r\n			</td>\r\n			<td>\r\n			<p>1670</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>- Cầu sau</p>\r\n			</td>\r\n			<td>\r\n			<p>970</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tải trọng cho ph&eacute;p chở</p>\r\n			</td>\r\n			<td>\r\n			<p>8.000 kg (xe th&ugrave;ng khung mui phủ bạt)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trọng lượng to&agrave;n bộ</p>\r\n			</td>\r\n			<td>\r\n			<p>11.620</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Th&ocirc;ng số về k&iacute;ch thước (mm)</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>K&iacute;ch thước xe : D&agrave;i x Rộng x Cao</p>\r\n			</td>\r\n			<td>\r\n			<p>6580 x 2000 x 2310</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>K&iacute;ch thước l&ograve;ng th&ugrave;ng h&agrave;ng</p>\r\n			</td>\r\n			<td>\r\n			<p>&nbsp;4.88&nbsp;x 2.050 x 660/1.850 ( K&iacute;ch thước th&ugrave;ng mui bạt)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Khoảng c&aacute;ch trục</p>\r\n			</td>\r\n			<td>\r\n			<p>4035</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Vết b&aacute;nh xe trước / sau</p>\r\n			</td>\r\n			<td>\r\n			<p>1650/1495</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Số trục</p>\r\n			</td>\r\n			<td>\r\n			<p>2</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Động cơ</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nh&atilde;n hiệu động cơ</p>\r\n			</td>\r\n			<td>\r\n			<p>D4DB</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Loại động cơ</p>\r\n			</td>\r\n			<td>\r\n			<p>4 kỳ, 4 xi lanh thẳng h&agrave;ng, tăng &aacute;p</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Loại nhi&ecirc;n liệu</p>\r\n			</td>\r\n			<td>\r\n			<p>Diesel</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Thể t&iacute;ch</p>\r\n			</td>\r\n			<td>\r\n			<p>3907 &nbsp;&nbsp; &nbsp;&nbsp; cm3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&ocirc;ng suất lớn nhất /tốc độ quay</p>\r\n			</td>\r\n			<td>\r\n			<p>96 kW/ 2900 v/ph</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Lốp xe</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Số lượng lốp tr&ecirc;n trục I/II/</p>\r\n			</td>\r\n			<td>\r\n			<p>02/04/</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Lốp trước / sau</p>\r\n			</td>\r\n			<td>\r\n			<p>8.25 - 16 /8.25 - 16</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Hệ thống phanh</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phanh trước /Dẫn động</p>\r\n			</td>\r\n			<td>\r\n			<p>Tang trống /thuỷ lực trợ lực ch&acirc;n kh&ocirc;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phanh sau /Dẫn động</p>\r\n			</td>\r\n			<td>\r\n			<p>Tang trống /thuỷ lực trợ lực ch&acirc;n kh&ocirc;ng</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Phanh tay /Dẫn động</p>\r\n			</td>\r\n			<td>\r\n			<p>T&aacute;c động l&ecirc;n hệ thống truyền lực /Cơ kh&iacute;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\">\r\n			<p><strong>Hệ thống l&aacute;i</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Kiểu hệ thống l&aacute;i /Dẫn động</p>\r\n			</td>\r\n			<td>\r\n			<p>Trục v&iacute;t - &ecirc; cu bi /Cơ kh&iacute; c&oacute; trợ lực thuỷ lực</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'dao duc chinh', '1a', 12, 'oqMT_22539910_1096203537183899_1317808679670766705_n.jpg', '2018-04-14 02:35:15', '2018-04-13 19:35:15'),
(2, '3333', 'sss', 'sssssssss', '<p>sssssssssss</p>', 'sssss', 'sssssssss', 13, 'RT7w_31495214753_IMG_20170424_110237.jpg', '2018-04-13 10:43:33', '2018-04-13 10:43:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_30_073224__create__category_table', 1),
(4, '2018_01_31_023640_create_product_table', 2),
(5, '2018_02_01_041525_create_users_table', 3),
(9, '2018_02_05_030726_create_slide_table', 5),
(10, '2018_02_05_083340_create_admin_table', 6),
(11, '2014_10_12_000000_create_users_table', 7),
(13, '2018_03_30_095859_create_khachhang_table', 9),
(14, '2018_03_31_105430_create_users_table', 10),
(15, '2018_03_31_105745_create_users_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameproduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `nameproduct`, `fk_category_id`, `created_at`, `updated_at`) VALUES
(12, 'Xe Đông Lanh 3 chân', 12, '2018-03-01 20:26:41', '2018-03-01 20:26:41'),
(13, 'Xe Ben Howo 4 chân', 12, '2018-03-01 19:50:36', '2018-03-01 19:50:36'),
(17, 'Xe kéo Shacman', 12, '2018-03-01 19:56:30', '2018-03-01 19:56:30'),
(18, 'Xe Tải Shacman 7 chân', 12, '2018-03-01 19:57:04', '2018-03-01 19:57:33'),
(19, 'Xe Tải Jac 5 chân 8 tấn', 14, '2018-03-01 19:58:32', '2018-03-01 19:58:32'),
(20, 'Xe Tải Jac 2 cầu máy', 14, '2018-03-01 20:01:30', '2018-03-01 20:01:30'),
(21, 'Xe Tải Jac 7 chân', 14, '2018-03-01 20:02:40', '2018-03-01 20:02:40'),
(22, 'Xe Tải Thùng Kín', 15, '2018-03-01 20:03:39', '2018-03-01 20:03:39'),
(23, 'Xe Tải 5 tạ thùng kín', 15, '2018-03-01 20:04:10', '2018-03-01 20:04:10'),
(24, 'Bán xe tải 3 chân', 15, '2018-03-01 20:04:46', '2018-03-01 20:04:46'),
(25, 'Xe Tải HyunDai 3 chân', 16, '2018-03-01 20:05:25', '2018-03-01 20:05:25'),
(26, 'Xe Đầu kéo', 16, '2018-03-01 20:05:57', '2018-03-01 20:05:57'),
(27, 'Xe tải thùng kín 5 chân', 16, '2018-03-01 20:06:27', '2018-03-01 20:06:27'),
(28, 'Xe Tải Thaco', 17, '2018-03-01 20:07:24', '2018-03-01 20:07:24'),
(29, 'Xe tải Thaco 3 chân', 17, '2018-03-01 20:07:57', '2018-03-01 20:07:57'),
(30, 'Xe tải gắn cẩu 5 tấn', 17, '2018-03-01 20:17:17', '2018-03-01 20:17:17'),
(31, 'Xe cứu hộ cẩu kéo sàn trượt', 18, '2018-03-01 20:22:05', '2018-03-01 20:22:05'),
(32, 'Xe cứu hộ giao thông kéo', 18, '2018-03-01 20:22:46', '2018-03-01 20:22:46'),
(33, 'Xe cứu hộ 8 tấn', 18, '2018-03-01 20:25:53', '2018-03-01 20:25:53'),
(34, 'Xe Đông Lạnh 2 chân', 19, '2018-03-01 20:26:24', '2018-03-01 20:26:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageslide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `imageslide`, `created_at`, `updated_at`) VALUES
(4, '2', '2jWh_banner3.jpg', '2018-02-26 08:57:25', '2018-02-26 08:57:25'),
(5, '1', 'fMHo_slide-04 (1).jpg', '2018-03-29 02:46:09', '2018-03-29 02:46:09'),
(6, '11', 'ptRX_slider_3.jpg', '2018-03-29 02:47:02', '2018-03-29 02:47:02'),
(7, 'An ddepj trai', 'js5u_slider_4.jpg', '2018-03-29 02:47:22', '2018-03-29 02:47:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Đào Chính', 'daochinh@gmail.com', '$2y$10$uK68GMyHDjILjvDoqqkeIuGViFNuoh48CKS/MV8J0DMpavS2TenRa', '1', '1aNlxLVH0lNKUtLT60oJSJO6X76iihSZKLoxZtqFwdDT12bZjw5gYMu2nbB3', NULL, NULL),
(3, 'Chinhcn1', 'daochinh12021996@gmail.com', '$2y$10$wy2GcZyDuLx9tw8mplrSrunGX5AW/qWLdC/0E6y0zIr7/UkRSPGvi', '0', 'RtM2MiUiomCDYztUqzfxjyaJ1DB4W5fdV5mntjKrplU8F0AdjU5E28A6N8UR', '2018-02-08 00:10:08', '2018-04-14 00:48:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_fk_category_id_foreign` (`fk_category_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_fk_category_id_foreign` FOREIGN KEY (`fk_category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
