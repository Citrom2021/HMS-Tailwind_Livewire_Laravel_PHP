-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 10:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_30_203216_create_products_table', 1),
(7, '2022_03_14_084813_create_sessions_table', 1),
(8, '2022_03_19_130217_add_extra_register_fields', 1),
(9, '2022_03_20_164608_create_rooms_table', 1),
(10, '2022_03_20_183244_create_transactions_table', 1);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(8, 'App\\Models\\User', 1, 'myapptoken', '49ca3c1e8877c128b910b48a0be97df352336848fd769bc3e1cf6a53694ec0ed', '[\"*\"]', '2022-03-23 19:17:34', '2022-03-23 06:49:59', '2022-03-23 19:17:34'),
(9, 'App\\Models\\User', 1, 'myapptoken', 'aebb4f3d05b41859f5dffd256e9a7ba8b9e06159cec388e179582f5fbd7ff6e4', '[\"*\"]', NULL, '2022-03-23 19:16:55', '2022-03-23 19:16:55'),
(10, 'App\\Models\\User', 1, 'myapptoken', 'fb6634cf3b0133db47e7b24ec43cc1245b7c86bd9398e7447ce79e1a483f39d2', '[\"*\"]', '2022-03-27 16:02:10', '2022-03-27 16:01:47', '2022-03-27 16:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Pina Colada', 'Cocktail', 'Pineapple, rum, creamy cocktail', '2000.00', '2022-03-20 18:10:10', '2022-03-27 13:12:51'),
(2, 'Beef steak', 'Food', 'Argentinian beef', '9900.00', NULL, '2022-03-27 13:02:11'),
(3, 'Chicken steak', 'Food', 'Countryside chicken', '3000.00', NULL, NULL),
(4, 'Beef burger', 'Food', '330g meat, salad, mayo, burger', '3999.99', NULL, '2022-03-27 12:46:37'),
(5, 'Long Island', 'Cocktail', 'Rum, Tequila, Vodka, Coke', '3999.00', '2022-03-21 01:03:35', '2022-03-23 07:02:03'),
(8, 'Mliano spaghetti', 'Food', 'Meatballs with pasta', '2699.00', '2022-03-23 06:59:36', '2022-03-23 06:59:36'),
(9, 'Chilli con carne', 'Food', 'Mexican spicy minced meat', '2699.00', '2022-03-23 07:00:06', '2022-03-23 07:00:06'),
(10, 'Tequila Sunrire', 'Cocktail', 'Lemony tequila cocktail', '2999.00', '2022-03-23 07:25:54', '2022-03-23 07:25:54'),
(11, 'Sparkling water', 'Beverage', 'Still water sparkling', '499.00', '2022-03-23 07:34:32', '2022-03-23 07:34:32'),
(13, 'Coca-Cola', 'Beverage', 'Cola 0.5l', '499.00', '2022-03-23 07:35:55', '2022-03-23 07:35:55'),
(14, 'Pepsi Coke', 'Beverage', 'Coke 0.5l', '499.00', '2022-03-23 07:36:09', '2022-03-23 07:36:09'),
(15, 'Fanta Lemon', 'Beverage', 'Lemon drink 0.5l', '499.00', '2022-03-23 07:36:36', '2022-03-23 07:36:36'),
(16, 'Coca-Cola can', 'Beverage', 'Coke drink 0.33l', '499.00', '2022-03-23 07:36:56', '2022-03-23 07:36:56'),
(18, 'Lemonade', 'Beverage', 'Lemon juice 0.33 glass', '499.00', '2022-03-23 07:37:46', '2022-03-23 07:37:46'),
(21, 'Töpörtyű', 'Food', 'Hungarian pork specialty', '1999.00', '2022-03-27 12:52:15', '2022-03-27 12:58:50'),
(22, 'Chicken wings', 'Food', 'Spicy grilled wings', '2350.00', '2022-03-27 12:53:50', '2022-03-27 12:53:50'),
(23, 'Ham and eggs', 'Food', 'Grilled ham and eggs', '2290.00', '2022-03-27 12:56:18', '2022-03-27 13:00:16'),
(24, 'Vodka Soda', 'Cocktail', 'Kalinka Vodka and Soda 2dl', '2999.00', '2022-03-27 13:01:10', '2022-03-27 13:01:22'),
(25, 'Goulash soup', 'Food', 'Pork chops, potato, vegetable, thick soup', '2999.00', '2022-03-27 13:13:49', '2022-03-27 13:13:49'),
(26, 'Ginger tea', 'Drink', 'Hot natural ginger tea', '799.00', '2022-03-27 13:15:24', '2022-03-27 13:15:24'),
(27, 'Black tea', 'Drink', 'Earl gray black tea', '599.00', '2022-03-27 13:16:43', '2022-03-27 13:16:56'),
(28, 'Somloi pancake', 'Food', 'Creamy pancake chocolate', '2450.00', '2022-03-27 16:00:54', '2022-03-27 16:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Single', '40000.00', '2022-03-27 16:05:19', NULL),
(2, 'Double', '50000.00', '2022-03-27 16:06:13', NULL),
(3, 'Luxury', '60000.00', '2022-03-27 16:06:54', NULL),
(4, 'Executive', '70000.00', '2022-03-27 16:08:00', NULL),
(5, 'Budget', '30000.00', '2022-03-27 16:08:40', NULL),
(6, 'Danube view', '55000.00', '2022-03-27 16:10:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a9catqOcABFMgp8PANnNdEHQmjwsc46eqI5Y2UYv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicnMyMnp2c2N2U2ZJQkRKNGoxQjc2UDNoRzhtTVhoaGtTQUZOTE5oaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1648413358);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED DEFAULT NULL,
  `room_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `bill` int(11) NOT NULL,
  `halfboard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `user_name`, `room_id`, `room_name`, `checkin`, `checkout`, `days`, `bill`, `halfboard`, `number_of_guests`, `created_at`, `updated_at`, `email`, `phone`) VALUES
(1, 4, 'user2', 1, 'Single', '2022-04-07', '2022-04-08', 1, 40000, '', 1, NULL, '2022-03-27 17:57:36', NULL, NULL),
(4, NULL, 'user44', NULL, '', '2022-03-31', '2022-04-01', 1, 55000, '', 2, '2022-03-27 18:11:24', '2022-03-27 18:11:24', 'user123@gmail.com', '06206652342');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `address`, `phone_number`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin', '2022-03-20 18:07:07', '$2y$10$6NZmpJbileEH/KWMuzXNneXrf0L4affCOYU2/tc66WANuFgdgIX/u', NULL, NULL, 'Vsj4gOJEVbZaw57K4baKSBZtcCviDja30VvvjIufiVOmxlHJQ3VzfdIX7u1U', NULL, NULL, '2022-03-20 18:06:58', '2022-03-20 18:07:07', 'Rakoczi utca 85', '+36201111111'),
(3, 'user', 'user@gmail.com', 'User', '2022-03-20 21:46:17', '$2y$10$4JZ2y7vxZstikTt9T/GrGOkisTbJ35qvgh0ZpQzqkKUgNfxy3HreG', NULL, NULL, NULL, NULL, NULL, '2022-03-20 21:45:28', '2022-03-21 00:59:21', 'Rakoczi utca 85, Budapest, Hungary', '+36201345678'),
(4, 'user2', 'user2@gmail.com', 'User', '2022-03-23 23:05:36', '$2y$10$EcQJnRvnNuDwp.jJ1V2.3.fq5dn85RZefZfnjrxp/mTxS1CE.ntdm', 'eyJpdiI6IitIQmtja0RPQ1FsamdxQVhWSG1NMmc9PSIsInZhbHVlIjoid0VXWTQwMDdPOVY3TGp0TWtjRzN6Qnk4MGFzYnY4SGNENDV4MHlsbHRiUT0iLCJtYWMiOiI2NjM4N2E4YTk3ZTJkNjE2YjQ0MTY4MmM0MTZhODUzM2QxODMwZTdiOTEzNjRkN2ViMWRkZjRkZTJiNmE1YTBhIiwidGFnIjoiIn0=', 'eyJpdiI6IkorMVdrbkliM0NLajNoY1RlQUkyL1E9PSIsInZhbHVlIjoidHdWbmJ6WkU3aTJBT2VvZEdKV3pZUFdzTTUyL01CME9SQ2NDdUZhUlAvVWo3WDZJYjR2bzY1SjVPNG4xWTVXTjcrSUNWRFN3dkdIVTdXNTk4MGt1bitZNTJLc3N2Yzl1RGNRdEZqeDgwM0xqbE9CYmovRm9pcmlnVjNuMXNLVWpROVFHT0ZiUVpBZlpkNHdqS3NJbHVTUlNvS1p1Y3JOSldUbFg5dWROVXZkcFpXeFJ2cXpjcW1YZVIwV1ptV1d0THpnWTVrcTJEOE11Yks3Y1VERFVHanhnZGlQZGdHMG5RdlluVXhHb2xRWE1UdkpWMzdOeDF2SmxWVXhmclRYWDhNOWhVcVlWZndQa2I0YTRJMTlJYlE9PSIsIm1hYyI6IjA1ZGU5NjY1Y2ZiZmNlMjE3YjU1ZDA2MjVmMTZkMjRiYjdlYmZjYjRjMDhmYWE2YjY5ZjRhYWQ0YjQyOWU0NjgiLCJ0YWciOiIifQ==', NULL, NULL, NULL, '2022-03-23 23:04:31', '2022-03-23 23:06:50', 'user street 69, Miami,  Florida, USA', '+14563456999');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_room_id_foreign` (`room_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
