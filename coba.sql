-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 03:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_keluarga`
--

CREATE TABLE `anggota_keluarga` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `baptis`
--

CREATE TABLE `baptis` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `hari_bap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_bap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglbap` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baptis`
--

INSERT INTO `baptis` (`id`, `jemaat_id`, `hari_bap`, `waktu_bap`, `tglbap`, `created_at`, `updated_at`) VALUES
(1, 1, 'Minggu', '10:00', '1998-05-10', NULL, NULL);

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
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `daftar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `kode_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namalengkap_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk_jem` enum('P','W') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_jem` date DEFAULT NULL,
  `status_jem` enum('Belum','Menikah','Janda','Duda') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_jem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statusgereja` enum('Jemaat','Simpatisan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` enum('TK','SD','SMP','SMA','SMK','D1','D3','D4','S1','S2','S3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`daftar`, `id`, `kode_jem`, `namalengkap_jem`, `jk_jem`, `tempat`, `tanggal_jem`, `status_jem`, `alamat_jem`, `kelurahan_jem`, `kecamatan_jem`, `kota_jem`, `provinsi_jem`, `nohp_jem`, `statusgereja`, `kerja`, `pendidikan`, `created_at`, `updated_at`) VALUES
('2021-05-21', 1, 'BULU001', 'Prengky Wijaya', 'P', 'Jakarta Barat', '1997-09-21', 'Belum', 'Perumahan cengkeh', 'Sayur', 'Cikarang', NULL, 'Jawa Tengah', '0822567890100', 'Jemaat', 'Wiraswasta', 'S1', NULL, '2022-05-12 23:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `gerejadituju` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hub_anggota` enum('Ortu','Anak','Suami','Istri','Keponakan','Menantu','Mertua','Saudara','Sepupu') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `gereja_asal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_gereja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mati`
--

CREATE TABLE `mati` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `usia_mati` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wafat` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2022_04_16_165841_create_jemaat', 1),
(6, '2022_04_16_170051_create_sidi', 1),
(7, '2022_04_16_170110_create_baptis', 1),
(8, '2022_04_16_170134_create_nikah', 1),
(9, '2022_04_16_170146_create_mati', 1),
(10, '2022_04_16_170204_create_kk', 1),
(11, '2022_04_16_170220_create_anggota_keluarga', 1),
(12, '2022_04_18_043009_create_keluar', 1),
(13, '2022_05_13_040735_create_masuk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nikah`
--

CREATE TABLE `nikah` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `nama_calon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_calon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari_nikah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menikah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglnikah` date DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendeta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `sidi`
--

CREATE TABLE `sidi` (
  `id` int(10) UNSIGNED NOT NULL,
  `jemaat_id` int(10) UNSIGNED NOT NULL,
  `tempat_sidi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hari_sidi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_sidi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tglsidi` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidi`
--

INSERT INTO `sidi` (`id`, `jemaat_id`, `tempat_sidi`, `hari_sidi`, `waktu_sidi`, `tglsidi`, `created_at`, `updated_at`) VALUES
(1, 1, 'GKJ BULU', 'Minggu', '12:00', '2022-05-22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'cici', 'cici89@gmail.com', NULL, '$2y$10$nPib70Qti.cOqV2P1h0vyePRVOrhf05VATf/6ZIIHUbousptF5yra', NULL, '2022-05-17 02:28:15', '2022-05-17 02:28:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_keluarga_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `baptis`
--
ALTER TABLE `baptis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baptis_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keluar_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kk_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masuk_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `mati`
--
ALTER TABLE `mati`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mati_jemaat_id_foreign` (`jemaat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nikah_jemaat_id_foreign` (`jemaat_id`);

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
-- Indexes for table `sidi`
--
ALTER TABLE `sidi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sidi_jemaat_id_foreign` (`jemaat_id`);

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
-- AUTO_INCREMENT for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `baptis`
--
ALTER TABLE `baptis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mati`
--
ALTER TABLE `mati`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidi`
--
ALTER TABLE `sidi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_keluarga`
--
ALTER TABLE `anggota_keluarga`
  ADD CONSTRAINT `anggota_keluarga_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `baptis`
--
ALTER TABLE `baptis`
  ADD CONSTRAINT `baptis_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `keluar`
--
ALTER TABLE `keluar`
  ADD CONSTRAINT `keluar_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kk`
--
ALTER TABLE `kk`
  ADD CONSTRAINT `kk_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `masuk`
--
ALTER TABLE `masuk`
  ADD CONSTRAINT `masuk_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mati`
--
ALTER TABLE `mati`
  ADD CONSTRAINT `mati_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nikah`
--
ALTER TABLE `nikah`
  ADD CONSTRAINT `nikah_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sidi`
--
ALTER TABLE `sidi`
  ADD CONSTRAINT `sidi_jemaat_id_foreign` FOREIGN KEY (`jemaat_id`) REFERENCES `jemaat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
