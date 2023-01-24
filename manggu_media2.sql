-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 10:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manggu_media2`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'onprocess',
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `status`, `gambar`, `tanggal`, `judul`, `slug`, `body`, `kategori_id`, `penulis`, `created_at`, `updated_at`) VALUES
(3, 'published', '2023-01-14-JaOEehiMAixUUsG40kki.jpg', '2023-01-14', 'Judul test 1', 'judul-tes-1', '<h2>Heading 1</h2><h3>Heading 2</h3><h4>Heading 3</h4><p>paragraph</p><p><strong>Bold</strong></p><p><i>Italic</i></p><p><i><strong>Bold Italic</strong></i></p><ul><li>UL List 1</li><li>UL List 2</li></ul><ol><li>OL List 1</li><li>OL lIST 2</li></ol><blockquote><p>Quotes</p></blockquote><figure class=\"table\"><table><tbody><tr><td>1,1</td><td>1,2</td></tr><tr><td>2,1</td><td>2,2</td></tr></tbody></table></figure>', 1, 'Admin', '2023-01-14 08:31:09', '2023-01-15 07:23:36'),
(4, 'published', '2023-01-14-YMcZ4Fbt4106MVtjp38R.jpg', '2023-01-14', 'Judul test 2', 'judul-tes-2', '<p>Text Body Content</p>', 1, 'Penulis', '2023-01-14 08:51:46', '2023-01-14 08:51:46'),
(5, 'onproccess', '2023-01-14-GqDLnKkjCSrnLuPNV5yj.jpg', '2023-01-14', 'EXO KONSER DI JAKARTA', 'exo-konser-di-jakarta', '<p>LKJLKJLKJLKJL</p>', 9, 'Admin', '2023-01-14 13:58:31', '2023-01-14 13:58:31'),
(6, 'onproccess', '2023-01-15-rRGC0FnVYA1lkyY81Cle.JPG', '2023-01-15', 'Teknologi Eye Tracker sebagai pendeteksi sensor', 'teknologi-eye-tracker-sebagai-pendeteksi-sensor', '<p>asdasdasd</p>', 1, 'Admin', '2023-01-14 17:40:06', '2023-01-15 05:31:00'),
(7, 'onproccess', '2023-01-15-vuc8C1kHPhbDUHbolQtR.jpg', '2023-01-15', 'Trend Fashion Pakaian di tahun 2023', 'trend-fashion-pakaian-di-tahun-2023', '<p>Trend asdasdasdasd</p>', 4, 'Admin', '2023-01-14 17:50:53', '2023-01-15 07:23:37'),
(8, 'onproccess', '2023-01-15-rXjvv3Wfc2BQDKjBK6Ja.jpg', '2023-01-15', 'Sneaker Keren Minggu Ini', 'sneaker-keren-minggu-ini', '<p>Sepatu</p>', 4, 'Admin', '2023-01-14 23:49:32', '2023-01-16 05:04:25'),
(9, 'rejected', '2023-01-15-JEjnHEqftDjyGdnHueVF.png', '2023-01-15', 'Qurban Sebentar lagi', 'qurban-sebentar-lagi', '<p>asdasdasd</p>', 9, 'admin', '2023-01-15 05:09:26', '2023-01-16 05:08:53'),
(10, 'published', '2023-01-16-o1TZ35A5HEMjApjm4NKg.JPG', '2023-01-16', 'nabhan', 'nabhan', '<p>lorem ipsum</p>', 1, 'hanggit', '2023-01-16 05:07:55', '2023-01-16 05:08:54');

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi', 'teknologi', NULL, NULL),
(4, 'Fashion', 'fashion', '2023-01-14 12:58:56', '2023-01-14 12:58:56'),
(5, 'Olahraga', 'olahraga', '2023-01-14 13:48:59', '2023-01-14 13:48:59'),
(6, 'Edukasi', 'edukasi', '2023-01-14 13:50:43', '2023-01-14 13:50:43'),
(7, 'Militer', 'militer', '2023-01-14 13:50:53', '2023-01-14 13:50:53'),
(8, 'Otomotif', 'otomotif', '2023-01-14 13:51:11', '2023-01-14 13:51:11'),
(9, 'Ragam', 'ragam', '2023-01-14 13:51:23', '2023-01-14 13:51:23'),
(10, 'Travel', 'travel', '2023-01-14 13:51:44', '2023-01-14 13:51:44'),
(11, 'Kuliner', 'kuliner', '2023-01-14 13:51:56', '2023-01-14 13:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2023_01_08_110005_create_articles_table', 1),
(6, '2023_01_08_142923_create_kategoris_table', 1),
(7, '2023_01_08_143306_create_komentars_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'penulis',
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'penulis', 'Hanggitya Raharjo', 'hanggitya86@gmail.com', NULL, '$2y$10$oPW7ZsHZCdRjf6/ftZxche7SiFo6z1UDHLjzSPFnpopeniL3iodkS', NULL, '2023-01-23 11:03:19', '2023-01-23 11:03:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
