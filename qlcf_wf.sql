-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 03:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlcf_wf`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `mamuc` int(11) NOT NULL,
  `tenmuc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`mamuc`, `tenmuc`) VALUES
(1, 'Cà Phê Truyền Thống'),
(2, 'Cà Phê Tươi');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongia` double(13,2) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maloai` int(11) NOT NULL,
  `ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `mota`, `anh`, `maloai`, `ngaylap`) VALUES
(70, 'Cà phê hạt VIETBEANS - ROMA', 300000.00, 'Cà phê hạt VIETBEANS - ROMA', 'public/assets/images\\1647093217_1.jpg', 3, '2022-03-12'),
(71, 'Cà phê hạt VIETBEANS', 200000.00, 'Cà phê hạt VIETBEANS FOR HORECA', 'public/assets/images\\1647093257_2.jpg', 1, '2022-03-12'),
(72, 'THE COFFEE HOUSE B2 TRUYỀN THỐNG', 300000.00, 'THE COFFEE HOUSE B2 TRUYỀN THỐNG', 'public/assets/images\\1647093275_4.jpg', 2, '2022-03-12'),
(73, 'M1 PHA PHIN & PHA MÁY', 400000.00, 'M1 PHA PHIN & PHA MÁY', 'public/assets/images\\1647093297_3.jpg', 4, '2022-03-12'),
(74, 'K6 PHA PHIN BƠ PHÁP', 550000.00, 'K6 PHA PHIN BƠ PHÁP', 'public/assets/images\\1647093320_4.jpg', 5, '2022-03-12'),
(75, 'M6 PHA MÁY CHUYÊN NGHIỆP', 600000.00, 'M6 PHA MÁY CHUYÊN NGHIỆP', 'public/assets/images\\1647093350_5.jpg', 1, '2022-03-12'),
(76, 'M5 PHA PHIN CHUYÊN NGHIỆP', 700000.00, 'M5 PHA PHIN CHUYÊN NGHIỆP', 'public/assets/images\\1647093376_7.jpg', 1, '2022-03-12'),
(77, 'THE COFFEE HOUSE CHỒN', 220000.00, 'THE COFFEE HOUSE CHỒN', 'public/assets/images\\1647093397_1.jpg', 1, '2022-03-12'),
(78, 'Cà phê hạt VIETBEANS - ROME', 100000.00, 'Cà phê hạt VIETBEANS - ROMA', 'public/assets/images\\1647093565_1.jpg', 2, '2022-03-12'),
(79, 'M2 PHA PHIN & PHA MÁY', 3000000.00, NULL, 'public/assets/images\\1647093702_1.jpg', 2, '2022-03-12'),
(80, 'K7 PHA PHIN BƠ PHÁP', 4000000.00, NULL, 'public/assets/images\\1647093727_2.jpg', 2, '2022-03-12'),
(81, 'M8 PHA MÁY CHUYÊN NGHIỆP', 200000.00, NULL, 'public/assets/images\\1647093771_3.jpg', 2, '2022-03-12'),
(82, 'M8 PHA PHIN CHUYÊN NGHIỆP', 3999999.00, NULL, 'public/assets/images\\1647093807_5.jpg', 2, '2022-03-12'),
(83, 'THE COFFEE HOUSE CHỒN 1', 4000000.00, NULL, 'public/assets/images\\1647093842_6.jpg', 2, '2022-03-12'),
(84, 'Cà phê hạt VIETBEANS - ROMO', 300000.00, 'Cà phê hạt VIETBEANS - ROMO', 'public/assets/images\\1647140822_1.jpg', 1, '2022-03-13'),
(85, 'Cà phê hạt VIETBEANS FOR HOREC', 230000.00, 'Cà phê hạt VIETBEANS FOR HOREC', 'public/assets/images\\1647140855_2.jpg', 1, '2022-03-13'),
(86, 'THE COFFEE HOUSE B2', 222000.00, 'THE COFFEE HOUSE B2', 'public/assets/images\\1647140886_5.jpg', 1, '2022-03-13'),
(87, 'M10 PHA MÁY CHUYÊN NGHIỆP', 230000.00, 'M10 PHA MÁY CHUYÊN NGHIỆP', 'public/assets/images\\1647140965_5.jpg', 1, '2022-03-13'),
(88, 'M2 PHA MÁY CAO CẤP', 220000.00, 'M8 PHA MÁY CAO CẤP', 'public/assets/images\\1647141036_2.jpg', 2, '2022-03-13'),
(89, 'THE COFFEE HOUSE B3', 2000000.00, 'THE COFFEE HOUSE B3', 'public/assets/images\\1647141178_7.jpg', 3, '2022-03-13'),
(90, 'M5 PHA MÁY CHUYÊN NGHIỆP', 2000000.00, 'M5 PHA MÁY CHUYÊN NGHIỆP', 'public/assets/images\\1647141204_5.jpg', 1, '2022-03-13'),
(91, 'M5 PHA MÁY CAO CẤP', 222000.00, 'M8 PHA MÁY CAO CẤP', 'public/assets/images\\1647141237_7.jpg', 3, '2022-03-13'),
(92, 'M5 PHA MÁY CHẤT LƯỢNG', 333000.00, 'M8 PHA MÁY CAO CẤP', 'public/assets/images\\1647141282_7.jpg', 3, '2022-03-13'),
(93, 'M5 CHỒN NGUYÊN SINH', 999999.00, 'M5 CHỒN NGUYÊN SINH', 'public/assets/images\\1647141331_2.jpg', 3, '2022-03-13'),
(94, 'M5 ĐỈNH CAO', 220000.00, 'M5 ĐỈNH CAO', 'public/assets/images\\1647141361_5.jpg', 1, '2022-03-13'),
(95, 'M5 ĐẲNG CẤP THÁI LAN', 230000.00, 'M5 ĐỈNH CAO', 'public/assets/images\\1647141388_2.jpg', 1, '2022-03-13'),
(96, 'M5 TRUNG NGUYÊN', 222222.00, 'M5 ĐỈNH CAO', 'public/assets/images\\1647141421_5.jpg', 3, '2022-03-13'),
(97, 'M5 CHẤT LƯỢNG VIỆT', 222333.00, 'M5 CHẤT LƯỢNG VIỆT', 'public/assets/images\\1647141508_4.jpg', 3, '2022-03-13'),
(98, 'M5 HƯƠNG VIỆT', 444444.00, 'M5 CHẤT LƯỢNG VIỆT', 'public/assets/images\\1647141532_3.jpg', 1, '2022-03-13'),
(99, 'M5 CHẤT LƯỢNG VIỆT NAM', 200000.00, 'M5 CHẤT LƯỢNG VIỆT NAM', 'public/assets/images\\1647141632_6.jpg', 3, '2022-03-13'),
(100, 'M1 PHA PHIN', 2000000.00, 'M1 PHA PHIN & PHA MÁY', 'public/assets/images\\1647141701_1.jpg', 4, '2022-03-13'),
(101, 'M1 PHA PHIN SANG TRỌNG', 200000.00, 'M1 PHA PHIN SANG TRỌNG', 'public/assets/images\\1647141727_2.jpg', 1, '2022-03-13'),
(102, 'M1 PHA PHIN THƠM NGON', 300000.00, 'M1 PHA PHIN THƠM NGON', 'public/assets/images\\1647141754_3.jpg', 4, '2022-03-13'),
(103, 'M1 PHA PHIN ĐẲNG CẤP', 300000.00, 'M1 PHA PHIN ĐẲNG CẤP', 'public/assets/images\\1647141775_4.jpg', 1, '2022-03-13'),
(104, 'M1 PHA TAO NHÃ', 200000.00, 'M1 PHA TAO NHÃ', 'public/assets/images\\1647141804_5.jpg', 4, '2022-03-13'),
(105, 'M1 PHA PHIN TƯƠI MỚI', 2000000.00, 'M1 PHA PHIN TƯƠI MỚI', 'public/assets/images\\1647141825_6.jpg', 4, '2022-03-13'),
(106, 'M1 PHA THƠM NGON', 300000.00, 'M1 PHA PHIN TƯƠI MỚI', 'public/assets/images\\1647141848_7.jpg', 4, '2022-03-13'),
(107, 'M6 PHA MÁY SANG TRỌNG', 300000.00, 'M6 PHA MÁY SANG TRỌNG', 'public/assets/images\\1647141885_1.jpg', 5, '2022-03-13'),
(108, 'M6 PHA NHANH GỌN', 1000000.00, 'M6 PHA NHANH GỌN', 'public/assets/images\\1647141910_2.jpg', 5, '2022-03-13'),
(109, 'M6 PHA MÁY ĐẲNG CẤP', 340000.00, 'M6 PHA NHANH GỌN', 'public/assets/images\\1647141945_3.jpg', 5, '2022-03-13'),
(110, 'M6 PHA MÁY NGHIỆP DƯ', 210000.00, 'M6 PHA NHANH GỌN', 'public/assets/images\\1647141972_4.jpg', 5, '2022-03-13'),
(111, 'M6 PHA MÁY ĐẸP', 230000.00, 'M6 PHA NHANH GỌN', 'public/assets/images\\1647141997_5.jpg', 5, '2022-03-13'),
(112, 'M6 PHA MÁY NHANH CHÓNG', 320000.00, 'M6 PHA MÁY NHANH CHÓNG', 'public/assets/images\\1647142019_6.jpg', 5, '2022-03-13'),
(113, 'M6 PHA MÁY NGHỆ THUẬT', 2000000.00, 'M6 PHA MÁY NGHỆ THUẬT', 'public/assets/images\\1647142050_7.jpg', 5, '2022-03-13'),
(114, 'M1  PHA PHIN CẤP CAO', 320000.00, 'M1  PHA PHIN CẤP CAO', 'public/assets/images\\1647142136_2.jpg', 4, '2022-03-13'),
(115, 'M1  PHA PHIN CAO CẤP', 320000.00, 'M1  PHA PHIN CẤP CAO', 'public/assets/images\\1647142154_5.jpg', 4, '2022-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 1, '2022-03-08', 415000),
(2, 1, '2022-03-08', 523000),
(3, 1, '2022-03-09', 773000),
(4, 1, '2022-03-09', 773000),
(5, 1, '2022-03-09', 773000),
(6, 3, '2022-03-12', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `mamuc`) VALUES
(1, 'THE COFFEE HOUSE B2', 1),
(2, 'K6 PHA PHIN', 1),
(3, 'M5 PHA PHIN', 1),
(4, 'M1 PHA PHIN', 2),
(5, 'M6 PHA MÁY', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_02_054437_create_danhmuc_table', 1),
(6, '2022_03_02_055549_create_loai_table', 1),
(7, '2022_03_02_055644_create_hanghoa_table', 1),
(8, '2022_03_02_055813_create_hoadon_table', 1),
(9, '2022_03_02_055840_create_cthoadon_table', 1),
(10, '2022_03_02_055919_create_binhluan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bảo Huỳnh', 'huynhthaibao.it@gmail.com', NULL, '$2y$10$eh2t3uDrv5A2xIJk02Kg2.QQrj7Kih.ilB12PzVBSTXoWhah08LD2', 0, 'efCNxvWTYbKjDkvviSQBXl5CTooSeFeJ9DPTkZTBow2RmdtJE5eRGhDOiHmn', '2022-03-02 09:04:56', '2022-03-02 09:04:56'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$H..Pt.A0vZ/409EkEOzOGO1qXFzzF.LqF9dJ2AFdof92Y4UqWxN3y', 1, NULL, '2022-03-12 00:37:24', '2022-03-12 00:37:24'),
(3, 'Khachhang', 'khachang123@gmail.com', NULL, '$2y$10$d1iIQm.h392L2GAzmiJe1uPaf5hGj5d9kAechB4KjCKGYK9yTYYWu', 0, NULL, '2022-03-12 07:30:04', '2022-03-12 07:30:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `binhluan_mahh_foreign` (`mahh`),
  ADD KEY `binhluan_makh_foreign` (`makh`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`),
  ADD KEY `cthoadon_mahh_foreign` (`mahh`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`mamuc`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `hanghoa_maloai_foreign` (`maloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `hoadon_makh_foreign` (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `loai_mamuc_foreign` (`mamuc`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `mamuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_mahh_foreign` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`),
  ADD CONSTRAINT `binhluan_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `users` (`id`);

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `cthoadon_mahh_foreign` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`),
  ADD CONSTRAINT `cthoadon_masohd_foreign` FOREIGN KEY (`masohd`) REFERENCES `hoadon` (`masohd`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_maloai_foreign` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `users` (`id`);

--
-- Constraints for table `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `loai_mamuc_foreign` FOREIGN KEY (`mamuc`) REFERENCES `danhmuc` (`mamuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
