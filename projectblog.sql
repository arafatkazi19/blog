-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 07:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `blog_image`, `publication_status`, `hit_count`, `created_at`, `updated_at`) VALUES
(11, 25, 'GOAT!!', 'Leo Messi Blog', '<p>ooking for a match that won&rsquo;t bore the living daylights out of you? Fancy some enterprising and expansive football? Is an obstinately boisterous crowd support your cup of tea? Then El Clasico is for you. Fair to say that whenever arch rivals&nbsp;Real Madrid and Barcelona share the same pitch, the stakes are incredibly high and losing is just not an option. Real Madrid are in a rut By the time the referee blew the final whistle at the Santiago Bernab&eacute;u Stadium in Real Madrid&rsquo;s last home fixture against Levante, the home side&rsquo;s poor run of form in La Liga alone had stretched</p>', 'blog-images/5e2b00aa62fa8109474a1ad4.jpg', 1, 6, '2020-04-23 05:22:28', '2020-04-26 10:02:11'),
(12, 27, 'Great Human', 'Angelina Angle', '<p>Angelina Jolie is an American actress, filmmaker, and humanitarian. The recipient of such accolades as an Academy Award and three Golden Globe Awards, she has been named Hollywood&#39;s highest-paid actress multiple times.</p>', 'blog-images/gettyimages-1180089487.jpg', 0, 6, '2020-04-23 05:23:33', '2020-04-26 09:35:57'),
(14, 26, 'Apple', 'Iphone 11 pro', '<p>Super Retina XDR display; 5.8‑inch (diagonal) all‑screen OLED Multi‑Touch display; HDR display; 2436‑by‑1125-pixel resolution at 458 ppi&nbsp;...</p>', 'blog-images/iphone11prolineup.jpg', 1, 0, '2020-04-23 05:36:33', '2020-04-23 05:36:33'),
(15, 25, 'Rahim - A Greatest Cricketer', 'Good player and human as well', '<p>Mushfiqur Rahim is a Bangladeshi cricketer and the former captain of the Bangladesh national cricket team. Between August 2009 and December 2010 Rahim served as Bangladesh&#39;s vice-captain, across all formats. He was ranked as one of the world&#39;s most famous athletes by ESPN in 2019</p>', 'blog-images/mushfiqur-rahim-afp_806x605_71520705090.jpg', 1, 0, '2020-04-23 05:42:12', '2020-04-23 08:48:02'),
(16, 28, 'Battle of Mogadishu', 'About \'Operation Gothic Separant \'', '<p>The Battle of Mogadishu was part of Operation Gothic Serpent. It was fought on 3&ndash;4 October 1993, in Mogadishu, Somalia, between forces of the United States&mdash;supported by UNOSOM II&mdash;and Somali militiamen loyal to the self-proclaimed president-to-be Mohamed Farrah Aidid</p>', 'blog-images/S_d3286c76-6image_story.jpg', 1, 2, '2020-04-23 10:18:49', '2020-04-26 09:21:28'),
(17, 27, 'Greatest Series ever?', 'See what people say about the series', '<p>Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making business to repay his medical debts. His priorities begin to change when he partners with Jesse.</p>', 'blog-images/BB_S5B_004_sm.jpg', 1, 8, '2020-04-23 10:20:58', '2020-04-26 10:02:37'),
(18, 26, 'I am at 6.0', 'Laravel 6 released. See what\'s new. Enjoy the new.', '<p>Laravel 6.0 was released on&nbsp;<strong>September 3, 2019</strong>, shift blueprint code generation, introducing semantic versioning, compatibility with Laravel Vapor, improved authorization responses, improved job middleware, lazy collections, and sub-query improvements.</p>', 'blog-images/laravel6.jpg', 1, 6, '2020-04-24 09:30:36', '2020-04-26 10:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(25, 'Sports', 'Sports news included', 1, '2020-04-23 04:54:59', '2020-04-25 01:37:23'),
(26, 'Technology', 'All the latest news of tech', 1, '2020-04-23 04:55:36', '2020-04-25 01:29:36'),
(27, 'Entertainment', 'Entertainment world', 1, '2020-04-23 04:56:15', '2020-04-25 01:23:59'),
(28, 'History', 'Know your ancestors and their culture', 1, '2020-04-23 10:15:57', '2020-04-23 10:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `visitor_id`, `blog_id`, `comment`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 4, 11, 'Everyone knows Messi is the best while others are not.', 0, '2020-04-25 04:25:32', '2020-04-25 10:43:48'),
(5, 5, 16, 'There is a movie based on this battle. I loved that movie. I watched that too many times!', 0, '2020-04-25 04:43:19', '2020-04-25 04:43:19'),
(6, 1, 11, 'He won more Ballon D\'or than others!!', 0, '2020-04-25 04:58:05', '2020-04-26 06:15:21'),
(7, 5, 16, 'I loved the movie. Want a re-make of this!!', 1, '2020-04-25 05:00:04', '2020-04-25 10:42:06'),
(8, 1, 16, 'The soundtrack was also good.', 1, '2020-04-25 05:00:55', '2020-04-25 10:41:29'),
(9, 1, 18, 'Laravel framework is the best!!', 1, '2020-04-25 05:05:46', '2020-04-25 10:41:16'),
(10, 1, 15, 'Best Cricketer', 0, '2020-04-26 06:11:33', '2020-04-26 06:15:03'),
(11, 5, 16, 'Raw scenes are not good. Too much blood!!', 0, '2020-04-26 09:09:12', '2020-04-26 09:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_20_164245_create_categories_table', 2),
(5, '2020_04_21_153202_create_blogs_table', 3),
(6, '2020_04_24_093243_create_visitors_table', 4),
(7, '2020_04_25_082536_create_comments_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Head Admin', 'admin@blog.com', NULL, '$2y$10$muQpm8vby3fbPnzl2TL34ePsFM6wC.QrD8/BD116i7DamTdJJIG2i', NULL, '2020-04-20 04:22:15', '2020-04-20 04:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'User', 'One', 'user1@blog.com', '$2y$10$gR5S1/tx3I9l3Bx9WcqESOkAOvANg72FDwHrfUTDAvP3jA99DEGB.', '12345', 'Dhaka', '2020-04-24 04:09:45', '2020-04-24 04:09:45'),
(4, 'User', 'Two', 'user2@blog.com', '$2y$10$DiXYmiB9XGPfdqS4E.p.C.c6nlliursc4r9pWCVYB1tD2YaYU9hm6', '54321', 'Cumilla', '2020-04-24 04:18:04', '2020-04-24 04:18:04'),
(5, 'User', 'Three', 'arafatkazi47@gmail.com', '$2y$10$VDIFrSi9ZLmUCcfcsknsl.y.mz3OviNTwMtrSaUXbvXnsicRCWQfS', '24234234', 'Dhaka', '2020-04-24 09:24:20', '2020-04-24 09:24:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
