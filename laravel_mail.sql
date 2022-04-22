-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 09:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(191) DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `age`, `position`, `address`, `description`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ye Myat Sandi Oo', '09123456789', 'admin@gmail.com', NULL, '$2y$10$1g1W9wapta8SHdQytElmsezc8ix2mPtMHt1OZTzru7kg3ep0WIGNa', 23, 'Web Developer', 'My Home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', '1641357091.jpg', NULL, NULL, '2022-01-04 22:01:31'),
(3, 'New Admin', '09123456789', 'newadmin@gmail.com', NULL, '$2y$10$1g1W9wapta8SHdQytElmsezc8ix2mPtMHt1OZTzru7kg3ep0WIGNa', 24, 'Web Developer', 'No.1, addiuhfi9sf,iuh98wfh,yuqugdcbu', NULL, '1640975866.png', NULL, NULL, '2021-12-31 12:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `hospital`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'New Doctor', 'H Hospital', 'doctor@gmail.com', NULL, '$2y$10$8UVSdYl1E07Ad7ZTeh4LWuEhzr5eGmNjnK4/anxmU3W3rCpa8gNkC', NULL, '2021-12-20 12:06:42', '2021-12-20 12:06:42'),
(2, 'Testing 123', 'Testing', 'tessting123@gmail.com', NULL, '$2y$10$/lmoT39YVsDXlqs1.qcZyO78oLdhI2TjBQu0umZYaR.DBekp9ntxK', NULL, '2021-12-29 22:39:15', '2021-12-29 22:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2021_12_16_083837_create_verify_users_table', 2),
(8, '2021_12_20_145235_create_admins_table', 3),
(9, '2021_12_20_171649_create_doctors_table', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `email_verified`, `created_at`, `updated_at`) VALUES
(2, 'New User', 'newuser@gmail.com', NULL, '$2y$10$1g1W9wapta8SHdQytElmsezc8ix2mPtMHt1OZTzru7kg3ep0WIGNa', NULL, 0, '2021-12-20 02:43:57', '2021-12-20 02:43:57'),
(3, 'User 2', 'user2@gmail.com', NULL, '$2y$10$TqJSpR1CI6ZOdWsblqPVcu0ndtHEi2wZZx2pXahYIERNwNJcUqkmy', NULL, 0, '2021-12-20 12:33:40', '2021-12-20 12:33:40'),
(15, 'Ye Myat', 'yemyattesting123@yahoo.com', NULL, '$2y$10$zyKcZ9aYuuoUSmmdvQ9d2OMUNPrqh5Vs5EJntu4v0l2yIlT9yg0Ye', NULL, 0, '2021-12-21 08:37:29', '2021-12-21 08:37:29'),
(16, 'Wai Yan', 'waiyan@gmail.com', NULL, '$2y$10$GFGMrOwWO.LqcjOkVOoJKuluBJ6mFFjyM62/3yZmx6rPd7uF6V/ra', NULL, 0, '2021-12-29 22:02:23', '2021-12-29 22:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(4, '4a6b62b5b8958eb1652f44a00e8c70e47d7497a46741df66eec60662b11e97319', '2021-12-20 13:53:29', '2021-12-20 13:53:29'),
(5, '59c654c2f7bd13ee220c071047ee98577e7024806fae48223cfa128ec60f64b61', '2021-12-20 13:55:51', '2021-12-20 13:55:51'),
(6, '63f2c2862d3e77443448f5dda2345e02ea5fcfbcc39fe3e7f04276b09649a352b', '2021-12-20 13:57:05', '2021-12-20 13:57:05'),
(7, '7769033f1a92cc6a8024eb9c2efa928c5474d15243dab2b619af6281c4f9923f9', '2021-12-20 13:57:31', '2021-12-20 13:57:31'),
(8, '811b51aff29eab6c40e0f02b02526ddf4d004cdd9e831809b4c77ca843eea477b', '2021-12-20 20:25:33', '2021-12-20 20:25:33'),
(9, '98c4d4dcf3547f5ced7dca92ec2e03ae3f50479a0a806ce3a103c660109a491e7', '2021-12-20 20:34:04', '2021-12-20 20:34:04'),
(10, '109684c37996d0e515b1762fe04e283d9565e7eb14ecdaaacf4cc5b6a372d23942', '2021-12-20 20:40:19', '2021-12-20 20:40:19'),
(11, '11af91f07dbd4227c9b643f75151e83d491cecd09a8bbbdf7afe8ac2a57b63eee1', '2021-12-20 20:41:44', '2021-12-20 20:41:44'),
(12, '12f24a5276f01c837a535af60fbcde1f59eeb0565142c19618a96da6d51bc6dc94', '2021-12-20 22:28:46', '2021-12-20 22:28:46'),
(13, '13bcb4897ed5275348275ecbe4cd963e1f62def2cc4f5b1ba1e538a62d179e2d9e', '2021-12-20 22:30:25', '2021-12-20 22:30:25'),
(14, '142f1f5b7b95ed630b359bd97ca93ac8871b550b46358b852940fa02dddd43995f', '2021-12-21 01:18:20', '2021-12-21 01:18:20'),
(15, '15d047824264ea48af64351e28ccdde02e0eed31b7ee598a0f66745c6dfc9a5144', '2021-12-21 08:37:29', '2021-12-21 08:37:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
