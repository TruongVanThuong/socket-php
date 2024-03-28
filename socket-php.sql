-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th3 28, 2024 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `socket-php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ho_va_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_bam_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` int(11) NOT NULL,
  `loai_tai_khoan` int(20) NOT NULL DEFAULT 0,
  `ma_bam_quen_mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ho_va_ten`, `email`, `password`, `so_dien_thoai`, `dia_chi`, `ma_bam_email`, `ngay_sinh`, `gioi_tinh`, `loai_tai_khoan`, `ma_bam_quen_mat_khau`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'phu hung', 'bhoome22@gmail.com', 'btEk8Z4KK0nNw', '0123456789', 'abcabc', '4c9ebf5a-442b-496f-865a-ec38703fdaaa', '2023-11-02', 1, -1, NULL, NULL, '2023-11-05 07:26:49', '2023-12-05 10:09:10'),
(4, 'hunghung', 'hcoone22@gmail.com', '$2y$10$oAFZGx2Dn98GUgsCnKSjfu4hpgMKw6fT5fVn9mJR.bwNQ1uuwz9Ry', '0123456789', 'abcabc', NULL, '2023-11-08', 1, 1, NULL, NULL, '2023-11-06 04:55:12', '2023-12-17 10:19:14'),
(5, 'tvt230101@gmail.com', 'tvt230101@gmail.com', '4.kMdKnRBFGDk', '1231231231', '123123123', NULL, '2023-12-04', 0, 1, '29ffe7ee-1870-4bef-a818-c5f68e689088', NULL, NULL, '2023-12-18 13:40:21'),
(6, '123123', '123@123.123', '$2y$10$ais138SCXBYKYvogBCIJ7u3c86WiGiQrx.gr3RNzIymzuEEwkl1Xq', '1231231231', '123123123', NULL, '2023-12-07', 1, 1, NULL, NULL, '2023-12-05 10:18:42', '2023-12-15 15:59:21'),
(7, '123123123123123', 'tvt2301011@gmail.com', '$2y$10$uyubBSkHgJBJyHSr8gprUeAJSC026HG5.qgb9ydfnMoYAtI6sPY2W', '1231231231', '12312312312312', '7b3d4412-3bc1-49c1-b84c-b4a16e8f49c0', '2023-11-30', 1, 1, NULL, NULL, '2023-12-08 23:47:17', '2023-12-08 23:47:17'),
(8, 'Khách Hàng từ hoá đơn', 'hoadon@gmail.com', '$2y$10$6hE6hqjwOOX1dbPBNjXKweqMHqVfbO2pwYm8CoUtQLgUju2d8fTKG', '1231231231', '123123 123123', NULL, '2023-12-09', 0, 1, NULL, NULL, '2023-12-10 08:40:34', '2024-02-21 09:55:39'),
(9, 'Thêm Khách Hàng', 'tkh@tkg.sdv', '$2y$10$RmfPFxUtsvPsCk259cIn6eIkyPTx1LNPc6zwkswE5NzuzrpajalOa', '1231231231', 'sdfg da nang', NULL, '2023-11-30', 1, 0, NULL, NULL, '2023-12-16 04:01:35', '2023-12-16 04:01:35'),
(10, 'Khách Hàng', 'KhchHng@123.123', '$2y$10$wcnjDNu2DY8aJfRHeOgvbueEIXGkiAscnChrptns8L7.ww7KKeSiS', '1231231231', '123 abc xyz', NULL, '2023-12-10', 0, 0, NULL, NULL, '2023-12-17 12:48:21', '2023-12-17 12:48:21');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_27_144523_create_san_pham_table', 1),
(3, '2023_08_27_162902_create_loai_san_pham_table', 1),
(4, '2023_08_27_162933_create_loai_danh_muc_table', 1),
(5, '2023_09_12_130117_create_hinh_anh_table', 1),
(8, '2023_10_14_104540_create_binh_luan_table', 1),
(10, '2023_10_14_104733_create_phan_quyen_table', 1),
(11, '2023_10_14_104803_create_bai_viet_table', 1),
(13, '2023_10_14_104923_create_lien_he_table', 1),
(14, '2023_10_14_104940_create_banner_table', 1),
(15, '2023_10_17_144113_create_khach_hangs_table', 1),
(16, '2023_10_26_150731_creat_table_binh_luanbaiviet', 1),
(17, '2023_11_30_090754_create_san_pham_yeu_thiches_table', 2),
(18, '2023_10_14_104848_create_gio_hang_table', 3),
(19, '2023_10_14_104708_create_user_table', 4),
(20, '2023_12_05_121502_create_ma_giam_gias_table', 5),
(21, '2023_10_14_104157_create_hoa_don_chi_tiet_table', 6),
(22, '2023_10_14_104432_create_hoa_don_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_phan_quyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_phan_quyen` int(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`id`, `ten_phan_quyen`, `role_phan_quyen`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Vô Hiệu Hóa Tài Khoản', -1, NULL, '2023-11-24 21:35:54', '2023-11-24 21:35:54'),
(2, 'Chưa Kích Hoạt', 0, NULL, '2023-11-24 21:36:14', '2023-11-24 21:36:14'),
(3, 'Khách hàng', 1, NULL, '2023-11-24 21:36:29', '2023-11-24 21:36:29'),
(4, 'Nhân viên 2', 2, NULL, '2023-11-24 14:36:43', '2023-11-24 14:36:43'),
(5, 'Nhân viên 1', 3, NULL, '2023-11-24 14:37:00', '2023-11-24 14:37:00'),
(6, 'Quản lý nhân viên', 4, NULL, NULL, NULL),
(7, 'Quản trị viên', 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loai_tai_khoan` bigint(20) UNSIGNED NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_bam_quen_mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_tai_khoan`, `password`, `email`, `hinh_anh`, `loai_tai_khoan`, `so_dien_thoai`, `dia_chi`, `ma_bam_quen_mat_khau`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'nhan vien bán hàng', '$2y$10$AzsZ.hAW3aICmyX89E4Euu6SmN801wTcM9eaTmlgmL/.OVcNGLbrS', 'tvt230101@gmail.com', 'http://127.0.0.1:8000/storage/photos/shares/z5175773172781_c3eb5ed7e07ccd4815e5727bbe604074.jpg', 2, '9876543210', '1233 abcc', '', NULL, '2023-12-05 13:45:10', '2024-03-27 18:43:06'),
(2, 'admin nèe', '$2y$10$ODhwUbgvga/ZeUb5Pi6Cl.Q8dOcGjVitU.EZDw8Jnuj.VGaIfY/kC', '123@123.123', 'http://127.0.0.1:8000/storage/photos/shares/z3807503636900_ab9f57b96c8ef27ce3b8f7514194a6c8.jpg', 5, '9876543210', '123123123', '', NULL, NULL, '2023-12-20 07:59:50'),
(3, '123123123', '$2y$10$0eDt2aKkb7iigz5z5iLh8.xqUgxHEJDeabv8x/gqxyFmiRCtb8v26', '123123@123.123', NULL, 3, '1231231231', '1231231231', '', NULL, '2023-12-15 04:38:14', '2023-12-18 16:45:10'),
(4, '123123123123', '$2y$10$r5xRjPp69VML33L8m0ibYu9eilVhzW8xVHRx5tk/KDjEPeFhakTxy', '123123@123.123', NULL, 4, '1231231313', '123123123123', '', NULL, '2023-12-15 06:14:43', '2023-12-18 16:46:05'),
(5, 'quản lý nhân viên', '$2y$10$NvnUuy5bQ0KnFwUhPqLEWuX.UAvxZ4uTsUrbM49j0xkZdThUGiFAS', 'qlny@123.123', NULL, 4, '1231231231', '123 123n1mmm', NULL, NULL, '2023-12-15 10:56:40', '2023-12-15 14:23:30'),
(6, 'admin nè', '$2y$10$N0EvTy4dnzKJ1TSSNQ2/QusmoYmB1iR01kgJ.x2q61W1jXsrWazXy', '123321@123.123', NULL, 5, '987654321', '123123123', NULL, NULL, '2023-12-15 18:42:12', '2023-12-18 12:18:43'),
(7, 'Thêm tài khoản', '$2y$10$wMbKPjG3Xs5WfFWw9Ft31u6OK8taTLNXRApHoRXecKGtKMJHwyMiO', 'thuong@123.123', 'http://127.0.0.1:8000/storage/photos/shares/z3807503636900_ab9f57b96c8ef27ce3b8f7514194a6c8.jpg', 4, '1231231231', '123 czxc ad', NULL, NULL, '2023-12-19 10:29:00', '2023-12-19 10:29:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loai_tai_khoan` (`loai_tai_khoan`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_phan_quyen` (`role_phan_quyen`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`loai_tai_khoan`) REFERENCES `phan_quyen` (`role_phan_quyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
