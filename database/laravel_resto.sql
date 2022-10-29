-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 12:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mejas`
--

CREATE TABLE `daftar_mejas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_meja` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_mejas`
--

INSERT INTO `daftar_mejas` (`id`, `nomor_meja`, `status`) VALUES
(1, 1, 'kosong'),
(2, 2, 'kosong'),
(3, 3, 'kosong'),
(4, 4, 'kosong'),
(5, 5, 'kosong'),
(6, 6, 'kosong'),
(7, 7, 'kosong'),
(8, 8, 'kosong'),
(9, 9, 'kosong'),
(10, 10, 'kosong'),
(11, 11, 'kosong'),
(12, 12, 'kosong'),
(13, 13, 'kosong'),
(14, 14, 'kosong'),
(15, 15, 'kosong'),
(16, 16, 'kosong'),
(17, 17, 'kosong'),
(18, 18, 'kosong'),
(19, 19, 'kosong'),
(20, 20, 'kosong'),
(21, 21, 'kosong'),
(22, 22, 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_menus`
--

CREATE TABLE `daftar_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_menus`
--

INSERT INTO `daftar_menus` (`id`, `Nama_Menu`, `harga`, `gambar`, `deskripsi`, `status`) VALUES
(1, 'ayam geprek oke', 32000, '/static/products/geprek mantap.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(2, 'ayam geprek cihuy', 34999, '/static/products/geprek_mantap2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(3, 'ayam geprek ambar', 35000, '/static/products/geprek_mantap3.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(4, 'ayam geprek ibu onah', 36000, '/static/products/geprek2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(5, 'ayam geprek pak mansur', 37000, '/static/products/ayam_kres.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(6, 'ayam geprek ujang bihin', 21000, '/static/products/geprek3.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(7, 'bebek betutu', 55000, '/static/products/betutu1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(8, 'ayam kalasan', 35000, '/static/products/kalasan1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(9, 'ayam kalasan keren', 45000, '/static/products/kalasan2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(10, 'minuman segar', 15000, '/static/products/minuman1.webp', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(11, 'minuman oke', 17000, '/static/products/minuman2.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(12, 'minuman keren', 19000, '/static/products/minuman3.jpeg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(13, 'minuman empat', 21000, '/static/products/minuman4.webp', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(14, 'lima drink', 23000, '/static/products/minuman5.jpeg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(15, 'minuman six', 25000, '/static/products/minuman6.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(16, 'nine cloud drink', 27000, '/static/products/minuman9.webp', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready'),
(17, 'tahu lada garam', 21000, '/static/products/tahu1.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim nesciunt sed iusto similique quasi iste aperiam repudiandae. Perferendis, consequuntur minima!', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanans`
--

CREATE TABLE `daftar_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Tanggal` date NOT NULL,
  `qty` int(11) NOT NULL,
  `nomormeja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorpesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahItemMenu` int(11) NOT NULL,
  `TotalNominalPembelanjaan` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanans`
--

CREATE TABLE `detail_pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pesanan` bigint(20) UNSIGNED DEFAULT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `waktu_transaksi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(85, '2014_10_12_000000_create_users_table', 1),
(86, '2014_10_12_100000_create_password_resets_table', 1),
(87, '2019_08_19_000000_create_failed_jobs_table', 1),
(88, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(89, '2022_10_28_074015_create_user_activities_table', 1),
(90, '2022_10_28_074148_create_daftar_menus_table', 1),
(91, '2022_10_28_074341_create_daftar_pesanans_table', 1),
(92, '2022_10_28_074505_create_detail_pesanans_table', 1),
(93, '2022_10_29_001042_create_daftar_mejas_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('kasir','pelayan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelayan',
  `foto_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `role`, `foto_profile`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zahrah puspita', 'pelayan', '/static/avatars/005f.jpg', 'zahrahp@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(2, 'boy will I am', 'pelayan', '/static/avatars/004m.jpg', 'william@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(3, 'Petty Dona', 'pelayan', '/static/avatars/006f.jpg', 'dona@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(4, 'Jhonny Dafoe', 'kasir', '/static/avatars/008m.jpg', 'dafoe@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(5, 'Pevita sweet', 'kasir', '/static/avatars/009f.jpg', 'sweetpevita@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(6, 'Jane Darlin', 'pelayan', '/static/avatars/020f.jpg', 'ohdarlin@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(7, 'jonathan smile', 'pelayan', '/static/avatars/016m.jpg', 'iwantyoutosmile@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL),
(8, 'mona sweet mom', 'pelayan', '/static/avatars/019f.jpg', 'sweetmom@gmail.com', NULL, '$2y$10$oRRabton6eOK90tcfpIZmepr2R6A1s3p5KDSbi5lXbvyAK0MA0Hky', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activities`
--

CREATE TABLE `user_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `aktifitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_aktifitas` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mejas`
--
ALTER TABLE `daftar_mejas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_menus`
--
ALTER TABLE `daftar_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pesanans`
--
ALTER TABLE `daftar_pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pesanans_id_pesanan_foreign` (`id_pesanan`),
  ADD KEY `detail_pesanans_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activities_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mejas`
--
ALTER TABLE `daftar_mejas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `daftar_menus`
--
ALTER TABLE `daftar_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `daftar_pesanans`
--
ALTER TABLE `daftar_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_activities`
--
ALTER TABLE `user_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD CONSTRAINT `detail_pesanans_id_pesanan_foreign` FOREIGN KEY (`id_pesanan`) REFERENCES `daftar_pesanans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_pesanans_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `daftar_menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_activities`
--
ALTER TABLE `user_activities`
  ADD CONSTRAINT `user_activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
