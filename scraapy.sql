-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scraapy`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_types`
--

CREATE TABLE `category_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `scrap_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_types`
--

INSERT INTO `category_types` (`id`, `scrap_type`, `price`, `created_at`, `updated_at`) VALUES
(1, 'WIRE SCRAP 6063 SCRAP', '444', '2021-04-16 12:53:39', '2021-04-16 12:53:39'),
(2, '6061SCR AP UBC SCRAP', '44', '2021-04-16 12:54:06', '2021-04-16 12:54:06'),
(3, 'ALLOY WHEELS SCRAP', '27', '2021-04-16 12:54:16', '2021-04-16 12:54:16'),
(4, 'AUTO TENS SCRAP', '88', '2021-04-16 12:54:24', '2021-04-16 12:54:24'),
(5, 'DEEEEE', '35', '2021-04-16 12:54:30', '2021-04-16 12:54:30'),
(6, 'TRTRTTRTE', '96', '2021-04-16 12:54:35', '2021-04-16 12:54:35'),
(7, 'TTTTTTTTTTT', '222', '2021-04-17 02:32:02', '2021-04-17 02:32:02'),
(8, 'QQQQQ', '111', '2021-04-17 02:32:25', '2021-04-17 02:32:25'),
(9, 'RRRFFFFFFFFFFFF', '2224', '2021-04-20 17:13:00', '2021-04-20 17:13:00'),
(10, 'Copper', '100', '2021-04-24 17:35:21', '2021-04-24 17:35:21');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_22_065840_create_users_table', 2);

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
-- Table structure for table `scrap_categories`
--

CREATE TABLE `scrap_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scrap_categories`
--

INSERT INTO `scrap_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'test', '2021-04-16 01:45:35', '2021-04-16 01:45:35'),
(2, 'ALUMINUM GENERAL', '2021-04-16 01:47:32', '2021-04-16 01:47:32'),
(3, 'CUPPER GENERAL', '2021-04-16 01:47:43', '2021-04-16 01:47:43'),
(4, 'IRON & STEEL GENERAL', '2021-04-16 01:48:24', '2021-04-16 01:48:24'),
(5, 'STAINLESS STEEL GENERAL', '2021-04-16 01:48:35', '2021-04-16 01:48:35'),
(6, 'PLASTIC GENERAL', '2021-04-16 01:48:44', '2021-04-16 01:48:44'),
(7, 'ELECTRICAL & ELECTRONIC WASTE(WEEE)', '2021-04-16 01:48:55', '2021-04-16 01:48:55'),
(8, 'CAR SCRAP', '2021-04-16 01:49:02', '2021-04-16 01:49:02'),
(9, 'BIKE SCRAP', '2021-04-16 01:49:12', '2021-04-16 01:49:12'),
(10, 'C', '2021-04-16 01:54:20', '2021-04-16 01:54:20'),
(11, 'kIM KIN SCRAP', '2021-04-16 01:59:06', '2021-04-16 01:59:06'),
(12, 'DEMO', '2021-04-16 03:32:30', '2021-04-16 03:32:30'),
(13, 'TESTTTTTT', '2021-04-20 17:12:29', '2021-04-20 17:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `upload_scraps`
--

CREATE TABLE `upload_scraps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(25) NOT NULL,
  `scrap_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scrap_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collector_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sold` int(25) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_scraps`
--

INSERT INTO `upload_scraps` (`id`, `user_id`, `scrap_category`, `scrap_type`, `weight`, `price`, `time`, `images`, `collector_code`, `approval_code`, `sold`, `created_at`, `updated_at`) VALUES
(5, 10, 'BIKE SCRAP', '4', '15', '1320', '55', '[\"16191163276081c127601df.webp\",\"16191163276081c12760aae.jpg\",\"16191163276081c1276123b.jpg\",\"16191163276081c12761a3b.jpg\"]', '', '', 1, '2021-04-22 13:02:07', '2021-04-22 13:02:07'),
(6, 13, 'STAINLESS STEEL GENERAL', '2', '1', '44', '55', '[\"16191170686081c40ce4ffc.webp\",\"16191170686081c40ce5643.jpg\",\"16191170686081c40ce5aeb.jpg\",\"16191170686081c40ce5e8a.jpg\"]', '', '', 0, '2021-04-22 13:14:28', '2021-04-22 13:14:28'),
(7, 10, 'ALUMINUM GENERAL', '1', '12', '5328', '2', '[\"16191192976081ccc17c986.webp\",\"16191192976081ccc17d01c.jpg\",\"16191192976081ccc17d500.jpg\",\"16191192976081ccc17d90a.jpg\"]', '16191192976081ccc17dcef.col', '1619119297app6081ccc17dcf5', 0, '2021-04-22 13:51:37', '2021-04-22 13:51:37'),
(8, 13, 'DEMO', '8', '11', '1221', '2', '[\"16191197786081cea200bb0.webp\",\"16191197786081cea201414.jpg\",\"16191197786081cea2018d1.jpg\",\"16191197786081cea2023ff.jpg\"]', '16191197786081cea202a92.col', '1619119778app6081cea202a9d', 1, '2021-04-22 13:59:38', '2021-04-22 13:59:38'),
(9, 10, 'ELECTRICAL & ELECTRONIC WASTE(WEEE)', '4', '12', '1056', '22', '[\"16193714536085a5bd65424.jpg\",\"16193714536085a5bd6640d.webp\",\"16193714536085a5bd66ca7.jpg\",\"16193714536085a5bd673b3.jpg\"]', '16193714536085a5bd67bf4.col', '1619371453app6085a5bd67bfe', 0, '2021-04-25 11:54:13', '2021-04-25 11:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_c_r_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `i_ban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port_of_discharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_final_destination` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_of_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `mobile`, `region`, `city`, `district`, `user_name`, `company_name`, `business_type`, `logo`, `company_c_r_number`, `i_ban`, `buyer`, `address`, `location`, `landline`, `company_website`, `port_of_discharge`, `country_of_final_destination`, `terms_of_delivery`, `payment_terms`, `currency`, `created_at`, `updated_at`) VALUES
(10, '2', 'gfgf', 'fdgdfg', 'bulbul@gmail.com', NULL, '$2y$10$5VP957BenvJq5TcO3qzIlOuIkdrxgXODe4EMKMHgn9p6XZU570Wfa', NULL, 'gdfgdf', 'gdfgff', 'cityyyyy', 'district', 'gdfgdfgfd', 'egg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-26 12:54:02', '2021-04-05 14:32:55'),
(13, '1', 'harmeet', 'yyyyyyyyyyyy', 'harm1t.virk@gmail.com', NULL, '$2y$10$Qr/i3YZCPWk/lXnbRc8hguchQtBbGdy1y5JlL7lhf0qtLuipszqdm', NULL, '7743742738423747', 'rert', 'mohali', 'ddddd', 'tertert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-26 13:07:21', '2021-04-24 03:10:08'),
(14, '1', 'testing', 'lastname', 'testing@gmail.com', NULL, '$2y$10$z68HxnP8JNDA8RLfqT0Bs.3DfYD8dqoDER3TzMi2cmJnky1iIbpL2', NULL, '158852979', 'india', 'chandigarh', 'chandigarh', 'testinguser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-05 06:47:00', '2021-04-05 06:48:35'),
(15, '3', 'fdsf', 'fsdfsdd', 'sahil.blueberry@gmail.com', NULL, '$2y$10$YcJjudVAM9s3zvU0Lgn9q.kotScFZG330dxIDuhTeiFfIG20sSdTS', NULL, '23323223423', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ff', 'fsd', NULL, 'sdfsdf', 'dfdsfsdf', 'sdfsdfdf', 'dfsdfsd', 'fsdfsd', NULL, NULL, '2021-04-05 14:40:47', '2021-04-08 11:34:58'),
(17, '4', 'gfgdf', NULL, 'delhi@gmail.com', NULL, '$2y$10$hHiBtMuayPIHiYWAzWcij.jNP8oFKJDVVy3CxeBluqX6OXivjWXeq', NULL, '324234324', NULL, NULL, NULL, NULL, 'company name', 'fdsfdsf', '1617868282.jpg', 'dasdddddddd', 'ererwerer', NULL, NULL, 'weerew', '111111111', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-08 00:09:45', '2021-04-08 02:06:22'),
(18, '1', 'fdfdf', 'fefwerwe', 'garry@gmail.com', NULL, '$2y$10$/ye1cCEQIMGqFe4z1ygUnuvEGZmzKnl2q/fVrNxts.la81uyjOmci', NULL, '34343', 'region', 'city you dont know', 'retertre', 'retertert', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-08 03:14:29', '2021-04-08 03:15:21'),
(19, '4', 'dsfsdfd', NULL, 'fafa@gmail.com', NULL, '$2y$10$3QMy1Qx4i8N.z7Wbc0JMZuScL4xIjmFMIy568VXgzdG0NKp3HhFXe', NULL, '4234', NULL, NULL, NULL, NULL, 'fdfsds', 'dsfsdf', '1617985986.jpg', 'ddsfsdfsd', 'fgdfgdfg', NULL, NULL, 'fsdfdsf', '32332', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-09 11:03:08', '2021-04-09 11:03:08'),
(21, 'admin', NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$9uaKoqEdDEbCD9F.AfYKIux25.Sonn.Z9xpvgY8eTTCSJY1aMErVO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-10 01:31:54', '2021-04-10 01:31:54'),
(22, '1', 'ttttttt', 'ttttt', 't@gmail.com', NULL, '$2y$10$ogP0JHjKF653NvoMZKZpH.7XqIn.2GhzSUhWuVqOKiRWzbhCp1H0S', NULL, '4545345', '4534543', '45345345', '43534', 'ffsdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 03:10:56', '2021-04-24 03:10:56'),
(23, '1', 'vcvxcv', 'vxcvcv', 'cccxvc@gmail.com', NULL, '$2y$10$jcCrKN7FojywbfGVmjS58OaFrAGTW12u7IwGE78V7Dw7lCnujQe2q', NULL, '343423', 'erwere', 'rere', 'rwr', 'rwerwerwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-24 16:25:04', '2021-04-24 16:25:04'),
(24, '1', 'fsdfdfdfdf', 'fdfsdf', 'dfsdf@gmail.com', NULL, '$2y$10$N9b.QfMVX2eHz9uMMhupIOHZpOOSLBG8Ps37ws.RbZTQk53sx6f1G', NULL, '43434', 'rrere', 'rwerewr', 'erwerr', 'erwerwe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-26 19:57:55', '2021-04-26 19:57:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_types`
--
ALTER TABLE `category_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrap_categories`
--
ALTER TABLE `scrap_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_scraps`
--
ALTER TABLE `upload_scraps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_types`
--
ALTER TABLE `category_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scrap_categories`
--
ALTER TABLE `scrap_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upload_scraps`
--
ALTER TABLE `upload_scraps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
