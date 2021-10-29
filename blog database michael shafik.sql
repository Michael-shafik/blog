-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 03:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `Comment` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Comment`, `project_id`, `user_id`, `created_at`, `updated_at`) VALUES
(43, 'dddddddddddddd', 12, 16, '2021-03-23 14:29:39', '2021-03-23 14:29:39'),
(46, 'zmalek', 12, 16, '2021-03-23 18:03:01', '2021-03-23 18:03:01'),
(48, 'This is my comment', 11, 16, '2021-03-23 18:59:42', '2021-03-23 20:33:33'),
(49, 'Hello world', 11, 16, '2021-03-23 18:59:54', '2021-03-23 18:59:54'),
(59, 'This is another comment from milad', 11, 19, '2021-03-23 20:36:20', '2021-03-23 20:36:34'),
(60, 'This is another comment fro milad', 12, 19, '2021-03-23 20:37:29', '2021-03-23 20:37:29');

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
(4, '2021_03_18_210827_create_projects_table', 1),
(5, '2021_03_18_215900_change_createpost_table', 2),
(6, '2021_03_18_224821_change_create_post_comment', 3),
(7, '2021_03_20_105329_change__comment_table', 4),
(8, '2021_03_20_113416_change_comment_user', 5),
(9, '2021_03_20_115719_change__comment_table2', 6),
(10, '2021_03_20_121159_change__comment_table3', 7),
(11, '2021_03_20_201200_add_photo_to_post', 8),
(12, '2021_03_21_195350_update_user_table', 9);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `Description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `Description`, `photo`, `created_at`, `updated_at`) VALUES
(11, 'Traveling is a very crucial part of life as it is the best way to get out of the busy schedule. It is also to experience life in different ways . Traveling is actually a good r', 'Cancun1 (3).jpg', '2021-03-22 09:48:09', '2021-03-23 20:19:19'),
(12, 'The reason why photography is important is that it freezes memories. It captures a moment in time that you\'ll be able to remember and cherish years from now. If you look at the images that people save, usually it\'s photos of theirdfffffffffffffffffffff\r\nfddddd', 'download (1).jpg', '2021-03-22 09:49:52', '2021-03-23 14:29:22'),
(13, 'Sports are a crucial part of a student\'s growth and development. They help in the development of mental health and physical fitness of the body. Through participation in sports and games, a student gains various skills, experience and', 'download (3).jpg', '2021-03-22 09:51:02', '2021-03-22 09:51:02'),
(18, 'dgffffffffffffffffffffffffffffffffffg', 's-l500.jpg', '2021-03-23 14:29:03', '2021-03-23 14:29:03'),
(19, 'bdgsgd', 's-l500.jpg', '2021-03-23 18:40:52', '2021-03-23 18:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `firstName`, `lastName`, `photo`, `created_at`, `updated_at`) VALUES
(15, 'michael shafik mansour', '$2y$10$Iv0YkfSAcCPf/ppKLJ6AKOYPwsfT9U5e5Ue9cFvX.sIlXICHpn.lC', 'michaelshafik599@gmail.com', 'Milad', 'Shafik', 'milad.jpg', '2021-03-23 05:57:31', '2021-03-23 19:57:32'),
(16, 'michael shafik', '$2y$10$z9fY.bua9vQT3y1E0yhJPO9JgfhjbxVzulmQ5cYGmRJjk95Mqntc2', 'michaelshafi2@gmail.com', 'Michael', 'shafik', 'michael.jpg', '2021-03-23 14:28:48', '2021-03-23 19:58:41'),
(17, 'michael shafik', '$2y$10$6j1He.bs13DPmdROMko4LOiSNHAXiilVz8oTMHrVkd1PudVbV03DG', 'michaelshafik598@gmail.com', '', '', '', '2021-03-23 20:10:45', '2021-03-23 20:10:45'),
(18, 'michael shafik', '$2y$10$XGAIYDaVYkQDCi2celDKiOUnqRaXS4YoNv5NRGoAf7yA35Bk7JcGe', 'michaelshafik597@gmail.com', '', '', '', '2021-03-23 20:30:27', '2021-03-23 20:30:27'),
(19, 'Milad', '$2y$10$ZsU.AmDPtZyjvF3BAbW1FeeePE/zIcsP6wBxVAUuRXHvIxJmQZ20S', 'miladshafik3@gmail.com', 'Milad', 'shafik', 'milad.jpg', '2021-03-23 20:36:00', '2021-03-23 20:37:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_project_id_foreign` (`project_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
