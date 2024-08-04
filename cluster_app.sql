-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 11:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cluster_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `centroids`
--

CREATE TABLE `centroids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `centroid_1` decimal(10,3) NOT NULL,
  `centroid_2` decimal(10,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `centroids`
--

INSERT INTO `centroids` (`id`, `year`, `centroid_1`, `centroid_2`, `created_at`, `updated_at`) VALUES
(1, 2019, 600000.000, 1000000.000, '2024-08-02 11:47:08', '2024-08-02 11:47:08'),
(2, 2020, 700000.000, 1100000.000, '2024-08-02 11:47:08', '2024-08-02 11:47:08'),
(3, 2021, 750000.000, 1150000.000, '2024-08-02 11:47:08', '2024-08-02 11:47:08'),
(4, 2022, 720000.000, 1120000.000, '2024-08-02 11:47:08', '2024-08-02 11:47:08'),
(5, 2023, 730000.000, 1140000.000, '2024-08-02 11:47:08', '2024-08-02 11:47:08');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_02_110913_create_provinsis_table', 1),
(6, '2024_08_02_110914_create_centroids_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `year_2019` decimal(10,3) NOT NULL,
  `year_2020` decimal(10,3) NOT NULL,
  `year_2021` decimal(10,3) NOT NULL,
  `year_2022` decimal(10,3) NOT NULL,
  `year_2023` decimal(10,3) NOT NULL,
  `cluster` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `provinsi`, `year_2019`, `year_2020`, `year_2021`, `year_2022`, `year_2023`, `cluster`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', 806483.000, 802312.000, 822990.000, 794961.000, 797039.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(2, 'Bali', 161394.000, 177877.000, 201993.000, 200887.000, 184644.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(3, 'Banten', 638258.000, 747609.000, 793647.000, 759624.000, 769399.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(4, 'Bengkulu', 297150.000, 305023.000, 301479.000, 298302.000, 294572.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(5, 'DI Yogyakarta', 447597.000, 460055.000, 458914.000, 429609.000, 410941.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(6, 'DKI Jakarta', 362391.000, 486913.000, 498656.000, 496620.000, 503388.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(7, 'Gorontalo', 181401.000, 180559.000, 183173.000, 184511.000, 187434.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(8, 'Jambi', 269605.000, 276050.000, 282506.000, 278142.000, 285029.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(9, 'Jawa Barat', 3367894.000, 3939175.000, 3995279.000, 3962345.000, 3802379.000, 2, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(10, 'Jawa Tengah', 3693662.000, 4246811.000, 4232736.000, 4058751.000, 4106083.000, 2, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(11, 'Kalimantan Barat', 372877.000, 390378.000, 382956.000, 375153.000, 372893.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(12, 'Kalimantan Selatan', 190155.000, 187793.000, 193762.000, 190286.000, 181648.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(13, 'Kalimantan Tengah', 129840.000, 134568.000, 139434.000, 143908.000, 140681.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(14, 'Kalimantan Timur', 214648.000, 239894.000, 244106.000, 246255.000, 244873.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(15, 'Kalimantan Utara', 45631.000, 49898.000, 50666.000, 49636.000, 48208.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(16, 'Kep. Bangka Belitung', 66170.000, 68563.000, 70566.000, 67705.000, 68782.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(17, 'Kep. Riau', 131134.000, 124495.000, 125821.000, 133840.000, 129845.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(18, 'Lampung', 1053817.000, 1130479.000, 1103439.000, 1056227.000, 1005617.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(19, 'Maluku', 312494.000, 327625.000, 318318.000, 302954.000, 313941.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(20, 'Maluku Utara', 84522.000, 88264.000, 86267.000, 83116.000, 88185.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(21, 'Nusa Tenggara Barat', 732671.000, 750134.000, 754061.000, 752634.000, 778294.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(22, 'Nusa Tenggara Timur', 1134200.000, 1121571.000, 1116331.000, 1100913.000, 1119566.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(23, 'Papua', 905056.000, 1149949.000, 1181212.000, 1178882.000, 1315532.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(24, 'Papua Barat', 210450.000, 244285.000, 252529.000, 252990.000, 115933.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(25, 'Riau', 477773.000, 443111.000, 458448.000, 450441.000, 458331.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(26, 'Sulawesi Barat', 149376.000, 158808.000, 166238.000, 172698.000, 166795.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(27, 'Sulawesi Selatan', 761123.000, 803912.000, 791481.000, 798032.000, 817825.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(28, 'Sulawesi Tengah', 405512.000, 387842.000, 380457.000, 377744.000, 391473.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(29, 'Sulawesi Tenggara', 296736.000, 297926.000, 311126.000, 303131.000, 314749.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(30, 'Sulawesi Utara', 189302.000, 201886.000, 199742.000, 194409.000, 196339.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(31, 'Sumatera Barat', 348496.000, 355315.000, 353785.000, 337308.000, 342144.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(32, 'Sumatera Selatan', 1074046.000, 1085521.000, 1096225.000, 1032780.000, 1047232.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(33, 'Sumatera Utara', 1278020.000, 1324546.000, 1306918.000, 1266654.000, 1260934.000, 1, '2024-08-04 08:08:51', '2024-08-04 08:08:51'),
(34, 'Jawa Timur', 4089740.000, 4587091.000, 4541635.000, 4296060.000, 4310164.000, 2, '2024-08-04 01:10:17', '2024-08-04 01:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centroids`
--
ALTER TABLE `centroids`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `centroids`
--
ALTER TABLE `centroids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
