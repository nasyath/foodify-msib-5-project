-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 03:33 PM
-- Server version: 10.4.17-MariaDB
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id`, `status`, `tgl_mulai`, `tgl_akhir`, `jumlah`, `foto`, `keterangan`, `id_donatur`, `id_penerima`, `id_makanan`, `created_at`, `updated_at`) VALUES
(4, 'Diterima', '2023-11-18', '2023-11-20', 10, '', 'Makanan 10 paket', 1, 1, 1, NULL, NULL),
(5, 'Ditolak', '2023-11-22', '2023-11-23', 5, '', 'makanan', 2, 3, 1, NULL, NULL),
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_donatur`
--

INSERT INTO `tb_donatur` (`id`, `nama_donatur`, `alamat`, `no_hp`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Irgi Rama', 'Bogor', '08989482924', 'Organisasi pembantu keluarga miskin', '', NULL, NULL),
(2, 'PT. Aspor', 'Jakarta', '089453895833', 'Membantu anak yatim dan dhuafa', '', NULL, NULL),
(3, 'hezkia', 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', '0892839223', 'Bogor kota hebat', NULL, NULL, NULL),
(4, 'bambang', 'Jakarta', '08928392343', 'Punya 100 makanan', NULL, NULL, NULL),
(5, 'anggi', 'Jakarta', '0892839343', 'Menerima Santunan anak Yatim', NULL, NULL, NULL),
(9, 'irgi sulistio', 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', '08928392342', 'Memberikan makanan', 'backend/assets/images/users/yxjyMye3JjJT1eh2UZeDVK6wInF6pJJ8jMBjoWrr.jpg', NULL, NULL),
(10, 'tio', 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', '08928392342', 'Memberikan uang dan makanan', 'backend/assets/images/users/1PTvEZyYqSpHWCiFpo34qmyJeX78qnqMWi05gmId.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_makanan`
--

CREATE TABLE `tb_jenis_makanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penerima`
--

INSERT INTO `tb_penerima` (`id`, `nama_penerima`, `alamat`, `no_hp`, `deskripsi`, `status`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Andi', 'Bogor', '0893821732', 'Membutuhkan untuk keluarga kekurangan', 'Open', '', NULL, NULL),
(2, 'Kucai', 'Jakarta', '0849389334', 'Keluarga membutuhkan', 'Close', '', NULL, NULL),
(3, 'Lucy', 'Jakarta', '0983583343', 'Anak membutuhkan', 'Close', '', NULL, NULL),
(4, 'Poby', 'Jakarta', '08968585675', 'orang fakir', 'Open', '', NULL, NULL),
(5, 'ucok', 'Bogor', '08928392232', 'Makan butuh', 'Open', NULL, NULL, NULL),
(6, 'heri', 'Jakarta', '08928392231', 'Menerima Makanan', 'Open', NULL, NULL, NULL),
(7, 'arap', 'Bekasi', '08928392342', 'Menerima santunan', 'Open', NULL, NULL, NULL),
(8, 'rama', 'Jakarta', '08928392231', 'Menerima makanan', 'Open', 'backend/assets/images/users/o7uxn5PHpRCrqioqIpeYRwuaDcPMLJwJuKdyGQJU.png', NULL, NULL),
(9, 'amar', 'Jakarta', '08928392232', 'Menerima santunan', 'Open', 'backend/assets/images/users/aIUHb6GlzOWTwI7Bb2u7a7pGnV0eyzY45Bec9tf8.jpg', NULL, NULL);

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
  `penerima_id` bigint(20) UNSIGNED DEFAULT NULL,
  `donatur_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`, `penerima_id`, `donatur_id`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$12$lZoJtCouwek5tOmjWRKEkOGopIAxKmdVhDEFxFWihn3xESZcztfdK', 'Admin', NULL, NULL, '2023-12-01 06:24:14', '2023-12-01 06:24:14'),
(9, 'arap@gmail.com', 'arap', '$2y$12$.9qJI9cfiWOwyaoBL1Rp.uCCuWpyqtDSwsX65V.ok3PEumn7qpude', 'Penerima', 7, NULL, '2023-12-01 06:19:37', '2023-12-01 06:19:37'),
(13, 'irgisulistio@gmail.com', 'irgi sulistio', '$2y$12$vuxYrLhg4ykV9HFl0FDJ6u5lZuNlAIxv6Fzq758l4s7w/.ZDZ92ji', 'Donatur', NULL, 9, '2023-12-01 06:47:56', '2023-12-01 06:47:56'),
(14, 'tio@gmail.com', 'tio', '$2y$12$VtmZa5DqLT49okectYyxJuH4aFI9dxORaHs4JAakrXV7G8Vm/dVui', 'Donatur', NULL, 10, '2023-12-01 06:55:59', '2023-12-01 06:55:59'),
(15, 'rama@gmail.com', 'rama', '$2y$12$WhpEqwlTOsRMTTP1NdVxAes7FI5zP7x8VJ0c8AZ9RBtJH2TXa3IxK', 'Penerima', 8, NULL, '2023-12-01 07:02:11', '2023-12-01 07:02:11'),
(16, 'amar@gmail.com', 'amar', '$2y$12$drgmotpgVMVsE99khIwBBOO/30IdE7aAAA/Kmb9Sr.RfoIy1UAuwy', 'Penerima', 9, NULL, '2023-12-01 07:05:42', '2023-12-01 07:05:42');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_makanan`
--
ALTER TABLE `tb_jenis_makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `donatur_id` (`donatur_id`),
  ADD KEY `penerima_id` (`penerima_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jenis_makanan`
--
ALTER TABLE `tb_jenis_makanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`donatur_id`) REFERENCES `tb_donatur` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`penerima_id`) REFERENCES `tb_penerima` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
