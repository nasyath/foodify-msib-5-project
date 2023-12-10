-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodify`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_14_131413_create_table_donatur', 1),
(6, '2023_11_14_131735_create_tb_penerima_table', 1),
(7, '2023_11_14_132806_create_tb_jenis_makanan_table', 1),
(8, '2023_11_14_133059_create_tb_donasi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 33, 'auth_token', '202f537e0e3f6daf740f58cbc0d6caa256b606de4dda7600b7c5fe8e3d8d821c', '[\"*\"]', '2023-12-10 08:08:12', NULL, '2023-12-10 08:07:18', '2023-12-10 08:08:12'),
(2, 'App\\Models\\User', 33, 'auth_token', '388c32b07f74704824a1e0f331570bd3d11b6cdbf2786ab6ac6bf14d05c4e7c8', '[\"*\"]', '2023-12-10 08:31:44', NULL, '2023-12-10 08:30:53', '2023-12-10 08:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Diterima','Ditolak','Pending') NOT NULL DEFAULT 'Diterima',
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_donatur` bigint(20) UNSIGNED DEFAULT NULL,
  `id_penerima` bigint(20) UNSIGNED DEFAULT NULL,
  `id_makanan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id`, `status`, `tgl_mulai`, `tgl_akhir`, `jumlah`, `foto`, `keterangan`, `id_donatur`, `id_penerima`, `id_makanan`, `created_at`, `updated_at`) VALUES
(6, 'Pending', '2023-11-28', '2023-11-30', 5, '', '10', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_donatur` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_donatur`
--

INSERT INTO `tb_donatur` (`id`, `nama_donatur`, `alamat`, `no_hp`, `deskripsi`, `foto`, `users_id`, `created_at`, `updated_at`) VALUES
(10, 'tio', 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', '08928392342', 'Memberikan uang dan makanan', NULL, 14, NULL, NULL),
(12, 'kopi1', 'kopi', '0892839234', 'kopi', 'backend/assets/images/users/xkg4824bbRCp4NpliAYTKPHwqcn3Ohcp87AHBzce.jpg', 21, NULL, NULL),
(13, 'kopi2', 'kopi 2', '0892839223', 'kopi 2', 'backend/assets/images/users/Pb72mmXy0xf3D0yGI3oqOyiVmshulL5Nw1lLwvbk.png', 22, NULL, NULL),
(14, 'nail', 'Bogor', '0892839223', 'Jakarta', 'backend/assets/images/users/paper-background.jpg', 27, NULL, NULL),
(15, 'Steven', 'Jakarta', '0892839223223', 'Memberikan makanan kepada anak yatim dan dhuafa', 'backend/assets/images/users/latihan sepatu.png', 29, NULL, NULL),
(17, 'Test1', 'test1', '80809809', 'test1', 'backend/assets/images/users/user_photo_1702208244.png', 31, NULL, NULL),
(18, 'fay', 'Tirto', '08880786872', 'Nasyath Faykar From Tirto', 'backend/assets/images/users/user_photo_1702219894.jpg', 33, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_makanan`
--

CREATE TABLE `tb_jenis_makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jenis_makanan`
--

INSERT INTO `tb_jenis_makanan` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Makanan berat', NULL, NULL),
(2, 'Minuman', NULL, NULL),
(12, 'Kopi Panas', '2023-11-27 23:50:44', '2023-11-27 23:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerima`
--

CREATE TABLE `tb_penerima` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status` enum('Open','Close') DEFAULT 'Open',
  `foto` varchar(255) DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penerima`
--

INSERT INTO `tb_penerima` (`id`, `nama_penerima`, `alamat`, `no_hp`, `deskripsi`, `status`, `foto`, `users_id`, `created_at`, `updated_at`) VALUES
(7, 'arap', 'Bekasi', '08928392342', 'Menerima santunan', 'Open', NULL, 9, NULL, NULL),
(8, 'rama', 'Jakarta', '08928392231', 'Menerima makanan', 'Open', 'backend/assets/images/users/o7uxn5PHpRCrqioqIpeYRwuaDcPMLJwJuKdyGQJU.png', 15, NULL, NULL),
(9, 'amar', 'Jakarta', '08928392232', 'Menerima santunan', 'Open', 'backend/assets/images/users/aIUHb6GlzOWTwI7Bb2u7a7pGnV0eyzY45Bec9tf8.jpg', 16, NULL, NULL),
(10, 'juli', 'Bogor', '0892234223', 'Penerima yang membutuhkan', 'Open', 'backend/assets/images/users/gMSuKlTFWkK7KYXg5yB2MKWExTTY8Gbza8gKqFf7.png', 17, NULL, NULL),
(11, 'Sucipto', 'Bogor', '08928392342', 'Menerima donasi', 'Open', 'backend/assets/images/users/UOPMQ5u4DwNn3caC5Z0EdWs2fU796C9DB5fuJC8S.jpg', 23, NULL, NULL),
(12, 'sulis', 'Bogor', '08928392342', 'Menerima makanan', 'Open', NULL, 24, NULL, NULL),
(14, 'Huri', 'Bogor', '08928392231', 'Menerima makanan', 'Open', NULL, 26, NULL, NULL),
(15, 'Guritno', 'Bekasi', '089283923422', 'Menerima makanan sehat', 'Open', 'backend/assets/images/users/29e522e01dbcedeaf93a820681f653df.png', 28, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Donatur','Penerima') NOT NULL DEFAULT 'Donatur',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$12$lZoJtCouwek5tOmjWRKEkOGopIAxKmdVhDEFxFWihn3xESZcztfdK', 'Admin', '2023-12-01 06:24:14', '2023-12-01 06:24:14'),
(9, 'arap@gmail.com', 'arap', '$2y$12$.9qJI9cfiWOwyaoBL1Rp.uCCuWpyqtDSwsX65V.ok3PEumn7qpude', 'Penerima', '2023-12-01 06:19:37', '2023-12-01 06:19:37'),
(14, 'tio@gmail.com', 'tio', '$2y$12$VtmZa5DqLT49okectYyxJuH4aFI9dxORaHs4JAakrXV7G8Vm/dVui', 'Donatur', '2023-12-01 06:55:59', '2023-12-01 06:55:59'),
(15, 'rama@gmail.com', 'rama', '$2y$12$WhpEqwlTOsRMTTP1NdVxAes7FI5zP7x8VJ0c8AZ9RBtJH2TXa3IxK', 'Penerima', '2023-12-01 07:02:11', '2023-12-01 07:02:11'),
(16, 'amar@gmail.com', 'amar', '$2y$12$drgmotpgVMVsE99khIwBBOO/30IdE7aAAA/Kmb9Sr.RfoIy1UAuwy', 'Penerima', '2023-12-01 07:05:42', '2023-12-01 07:05:42'),
(17, 'juli@gmail.com', 'juli', '$2y$12$8HARzOipbFh0th4Gpu66qe4ZrxiXm26LzYeUwnXp0HxeCnsBa3.cO', 'Penerima', '2023-12-03 09:12:57', '2023-12-03 09:12:57'),
(21, 'kopi1@gmail.com', 'kopi1', '$2y$12$mjlwRvYRorv5qimSNNXwBOCYXbutCf0LD8yNBRy3hi8ChFOQvd66C', 'Donatur', '2023-12-04 00:59:33', '2023-12-04 00:59:33'),
(22, 'kopi2@gmail.com', 'kopi2', '$2y$12$oOfEp8he8jSv4ldzZhE4EO91328touGpPCxe8M29ZX4ozhTptv0hq', 'Donatur', '2023-12-04 01:23:22', '2023-12-04 01:23:23'),
(23, 'sucipto@gmail.com', 'Sucipto', '$2y$12$yCaBAh0YXK7.URGTVGBD3uPOV3VqWWzMxKG01IEa/wBbBVFVWjS3a', 'Penerima', '2023-12-04 01:28:56', '2023-12-04 01:28:56'),
(24, 'sulis@gmail.com', 'sulis', '$2y$12$Q33IynFFkJciH/Ort7yqKuExRTdNnijefDmqEolzNoyULWsXY3l2S', 'Penerima', '2023-12-04 02:17:59', '2023-12-04 02:17:59'),
(26, 'huri@gmail.com', 'Huri', '$2y$12$O3HEXqBb1RYdH0KqifX6OuCPcvcnbmfxO0FcjXp37xRm2gzNKabSq', 'Penerima', '2023-12-04 02:35:46', '2023-12-04 02:35:46'),
(27, 'nail@gmail.com', 'nail', '$2y$12$kpRHS9Huj5sxFAbm2NP9WOZsUbMY3TR0kkNe0nW0D/qiX/a1WFC2i', 'Donatur', '2023-12-04 02:54:46', '2023-12-04 02:54:46'),
(28, 'guritno@gmail.com', 'Guritno', '$2y$12$zFZ5iWsy1i.6yhQ/eGtEz.KcBXNI6.r8ZE1mu.6Nj0L5lxNQQcDj.', 'Penerima', '2023-12-04 03:21:59', '2023-12-04 03:21:59'),
(29, 'steven@gmail.com', 'Steven', '$2y$12$6rK8ywJFPFJ845nhAKANAe1q.uqVy86IcDSzA4nSnDYf0rlvEkj5O', 'Donatur', '2023-12-05 19:51:55', '2023-12-05 19:51:55'),
(31, 'test1@gmail.com', 'Test1', '$2y$12$qThwS2D7tzKeQ2KbiwzH0ebisAMbvSQLBfOgKx8hZivYkb4YxXzKS', 'Donatur', '2023-12-10 04:37:24', '2023-12-10 04:37:24'),
(33, 'faykar@gmail.com', 'fay', '$2y$12$QwPeZHGmsEub2aIPM0emtOzHcoeGlCDoUwdEOk4V.bak4Y23.gN.e', 'Donatur', '2023-12-10 07:51:34', '2023-12-10 07:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_donasi_id_donatur_foreign` (`id_donatur`),
  ADD KEY `tb_donasi_id_penerima_foreign` (`id_penerima`),
  ADD KEY `tb_donasi_id_makanan_foreign` (`id_makanan`);

--
-- Indexes for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `tb_jenis_makanan`
--
ALTER TABLE `tb_jenis_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_jenis_makanan`
--
ALTER TABLE `tb_jenis_makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD CONSTRAINT `tb_donasi_id_donatur_foreign` FOREIGN KEY (`id_donatur`) REFERENCES `tb_donatur` (`id`),
  ADD CONSTRAINT `tb_donasi_id_makanan_foreign` FOREIGN KEY (`id_makanan`) REFERENCES `tb_jenis_makanan` (`id`),
  ADD CONSTRAINT `tb_donasi_id_penerima_foreign` FOREIGN KEY (`id_penerima`) REFERENCES `tb_penerima` (`id`);

--
-- Constraints for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD CONSTRAINT `tb_donatur_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD CONSTRAINT `tb_penerima_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
