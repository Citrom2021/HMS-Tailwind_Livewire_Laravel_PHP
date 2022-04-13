-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 09:52 AM
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
(10, '2022_03_20_183244_create_transactions_table', 1),
(11, '2022_04_08_184438_update_products_slug', 2);

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
(14, 'App\\Models\\User', 6, 'myapptoken', '18a285f0b33853946d13ac6deaeafbdde866527798327b9bce3f95486d5a4c50', '[\"*\"]', NULL, '2022-04-08 17:39:02', '2022-04-08 17:39:02'),
(16, 'App\\Models\\User', 7, 'myapptoken', 'e177e113e60c13ac99ad2d1c258f6e87771fe76ce6333eb40c9ac6c87828d34a', '[\"*\"]', NULL, '2022-04-08 18:01:04', '2022-04-08 18:01:04'),
(18, 'App\\Models\\User', 1, 'myapptoken', 'aeafb84c64a3778dfaeab42feb3d597f7c8546e25d3dde1867b2f1a18663439d', '[\"*\"]', '2022-04-08 18:06:41', '2022-04-08 18:03:37', '2022-04-08 18:06:41'),
(19, 'App\\Models\\User', 3, 'myapptoken', 'eee93089d90d4209fdb2de27e0dff2a4a0412040a9f81c71251c06069747701a', '[\"*\"]', NULL, '2022-04-09 16:18:35', '2022-04-09 16:18:35'),
(20, 'App\\Models\\User', 3, 'myapptoken', '498385a56d980cbbc049af50aef1ed0ce796403fd508b6a053db6de40229aa16', '[\"*\"]', NULL, '2022-04-09 16:22:51', '2022-04-09 16:22:51'),
(21, 'App\\Models\\User', 3, 'myapptoken', 'de8309867f1d509ee038a0353adf4b40919aaff9613a66921766755b73f558dc', '[\"*\"]', NULL, '2022-04-09 16:24:49', '2022-04-09 16:24:49'),
(22, 'App\\Models\\User', 3, 'myapptoken', '8475aeb87604523615f15f234b03292dbd09a666d0c2262a2f8a9f9ecccf24bb', '[\"*\"]', NULL, '2022-04-09 16:33:33', '2022-04-09 16:33:33'),
(23, 'App\\Models\\User', 3, 'myapptoken', '9498aa682659eb4cbd46d6b1e37d9f518b7670c3c3e5e733c159b5da238fd9c1', '[\"*\"]', NULL, '2022-04-09 16:33:51', '2022-04-09 16:33:51'),
(24, 'App\\Models\\User', 1, 'myapptoken', '6368adf554d8e669f6f615c7d72a97c9152a7a633168ea3be91b08356cd7a3cb', '[\"*\"]', '2022-04-09 16:39:12', '2022-04-09 16:35:08', '2022-04-09 16:39:12'),
(25, 'App\\Models\\User', 3, 'myapptoken', '4f9aa6236eb9ad53a4a271e2a0124024d8fd4ffb9db8b93de80b1ef0c8742988', '[\"*\"]', '2022-04-09 16:40:34', '2022-04-09 16:38:57', '2022-04-09 16:40:34'),
(26, 'App\\Models\\User', 1, 'myapptoken', '0c56bd2f616ebd0bf2000455bfe9a1bf1bd829ff66a9e1f052bb71bf688908a6', '[\"*\"]', '2022-04-12 20:37:41', '2022-04-09 16:41:45', '2022-04-12 20:37:41'),
(27, 'App\\Models\\User', 1, 'myapptoken', 'a878698eb910db99b8c3ccb8e505d686599ce7c4f1c1dc803cdc9e76068df39f', '[\"*\"]', NULL, '2022-04-09 17:02:03', '2022-04-09 17:02:03'),
(28, 'App\\Models\\User', 1, 'myapptoken', '021a563a5c28e12edb1ded00d654590bf886efd9c6ec32a0d718d6ea451c8cb3', '[\"*\"]', '2022-04-12 20:38:48', '2022-04-12 20:38:09', '2022-04-12 20:38:48'),
(29, 'App\\Models\\User', 1, 'myapptoken', '014fc70de1dfe649c789c815bd2877bd86ff37c0705e58624882ca5d955ad78b', '[\"*\"]', NULL, '2022-04-12 21:11:57', '2022-04-12 21:11:57'),
(30, 'App\\Models\\User', 1, 'myapptoken', '3699f00eb8c4e1306afb96b824f0f2eb22f36913ea1e54b62f7e2bc098896a91', '[\"*\"]', '2022-04-12 21:30:07', '2022-04-12 21:14:39', '2022-04-12 21:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(7,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Pina Colada', 'Cocktail', 'Pineapple, rum, creamy cocktail', '2100.00', '2022-03-20 18:10:10', '2022-04-11 14:50:16'),
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
(29, 'Grilled chicken', 'Food', 'Spicy chicken grilled', '2850.00', '2022-04-08 17:07:48', '2022-04-08 17:07:48'),
(32, 'Acacia honey', 'Food', 'Sweet acacia huney', '1195.00', '2022-04-09 16:42:02', '2022-04-12 21:30:07'),
(33, 'Honey', 'Food', 'Small portion of honey', '799.00', '2022-04-09 16:42:15', '2022-04-09 16:42:15'),
(34, 'Gingerbread', 'Food', 'Sweet bread, allergic', '955.00', '2022-04-09 16:42:49', '2022-04-09 16:42:49'),
(35, 'Chicken soup', 'food', 'Hot spicy soup by chicken', '1499.00', '2022-04-10 16:54:26', '2022-04-10 16:54:26');

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
('n2vzGjn6F9imIUEUTO96kW3IfOPBivNEunj9rCk7', 1, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVDhmUUlrY0c2ajRDR1BIT3hkdDVMYURGeDZicG9oaVhRODNoanlhdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ2TlptcEpiaWxlRUgvS1dNdXpYTm5lWHJmMEw0YWZmQ09ZVTIvdGM2NldBTnVGZ2RnSVgvdSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkNk5abXBKYmlsZUVIL0tXTXV6WE5uZVhyZjBMNGFmZkNPWVUyL3RjNjZXQU51RmdkZ0lYL3UiO30=', 1649836335);

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
(4, NULL, 'user44', NULL, '', '2022-03-31', '2022-04-01', 1, 55000, '', 2, '2022-03-27 18:11:24', '2022-03-27 18:11:24', 'user123@gmail.com', '06206652342'),
(5, NULL, 'anyad', NULL, 'Luxury', '2022-03-25', '2022-03-31', 5, 123000, 'Yes', 4, '2022-03-29 16:56:21', '2022-03-29 16:58:14', 'joseph@gmail.com', '06206652342'),
(9, NULL, 'Toth Zsolt', NULL, 'Single', '2022-04-09', '2022-04-16', 7, 280000, 'Yes', 2, '2022-04-08 17:13:22', '2022-04-08 17:13:22', 'zsoltika@gmail.com', '+44123456789'),
(13, 10, 'Kiss Miska', 4, 'Executive', '2022-04-16', '2022-04-23', 7, 490000, 'Yes', 2, '2022-04-09 07:04:57', '2022-04-09 07:04:57', 'miska@gmail.com', '364512356894'),
(14, 11, 'Csizmar Joska', 6, 'Danube view', '2022-04-10', '2022-04-15', 5, 275000, 'Yes', 4, '2022-04-09 08:03:29', '2022-04-09 08:03:29', 'csizmar@gmail.com', '3620456789'),
(16, 14, 'sassaas assdadsasad', 5, 'Budget', '2022-04-12', '2022-04-13', 1, 30000, 'Yes', 2, '2022-04-11 17:07:28', '2022-04-11 17:07:28', 'asasdasasasddasd@gmail.com', '06206652342'),
(17, 3, 'user', 1, 'Single', '2022-04-16', '2022-04-19', 3, 120000, 'Yes', 2, '2022-04-12 16:10:17', '2022-04-12 16:10:17', 'user@gmail.com', '+36201345678'),
(18, 3, 'user', 1, 'Single', '2022-04-19', '2022-04-20', 1, 40000, 'Yes', 1, '2022-04-12 16:14:44', '2022-04-12 16:14:44', 'user@gmail.com', '+36201345678'),
(19, 94, 'Kiss ramona', 1, 'Single', '2022-04-20', '2022-04-24', 4, 160000, 'Yes', 2, '2022-04-12 19:06:13', '2022-04-12 19:06:13', 'ramona@yahoo.com', '06203456789');

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
(1, 'admin', 'admin@gmail.com', 'Admin', '2022-03-20 18:07:07', '$2y$10$6NZmpJbileEH/KWMuzXNneXrf0L4affCOYU2/tc66WANuFgdgIX/u', NULL, NULL, 'Lbats3pmrUq3yPLkqXQMe5oJ0wThGZM6D8gzW2XKxwrmOkDopS0p5sRutEH0', NULL, NULL, '2022-03-20 18:06:58', '2022-04-11 15:25:21', 'Sunset street 123, Miami, Florida', '+36201111111'),
(3, 'user', 'user@gmail.com', 'User', '2022-03-20 21:46:17', '$2y$10$RNQ6HoPo2.pnJIqLfE.hOOC9G/4LEdZZgfuJYoe4GBvZh5YjVHXYi', NULL, NULL, 'DdtJ7mU4KGZyB8Yc0TxFFqfAhMCPHoO6c7nC8AaKnqxNT9vVAhkAhGV1Ivlv', NULL, NULL, '2022-03-20 21:45:28', '2022-04-12 15:29:31', 'Rakoczi utca 85, Budapest, Hungary', '+36201345678'),
(4, 'user2', 'user2@gmail.com', 'User', '2022-03-23 23:05:36', '$2y$10$EcQJnRvnNuDwp.jJ1V2.3.fq5dn85RZefZfnjrxp/mTxS1CE.ntdm', 'eyJpdiI6IitIQmtja0RPQ1FsamdxQVhWSG1NMmc9PSIsInZhbHVlIjoid0VXWTQwMDdPOVY3TGp0TWtjRzN6Qnk4MGFzYnY4SGNENDV4MHlsbHRiUT0iLCJtYWMiOiI2NjM4N2E4YTk3ZTJkNjE2YjQ0MTY4MmM0MTZhODUzM2QxODMwZTdiOTEzNjRkN2ViMWRkZjRkZTJiNmE1YTBhIiwidGFnIjoiIn0=', 'eyJpdiI6IkorMVdrbkliM0NLajNoY1RlQUkyL1E9PSIsInZhbHVlIjoidHdWbmJ6WkU3aTJBT2VvZEdKV3pZUFdzTTUyL01CME9SQ2NDdUZhUlAvVWo3WDZJYjR2bzY1SjVPNG4xWTVXTjcrSUNWRFN3dkdIVTdXNTk4MGt1bitZNTJLc3N2Yzl1RGNRdEZqeDgwM0xqbE9CYmovRm9pcmlnVjNuMXNLVWpROVFHT0ZiUVpBZlpkNHdqS3NJbHVTUlNvS1p1Y3JOSldUbFg5dWROVXZkcFpXeFJ2cXpjcW1YZVIwV1ptV1d0THpnWTVrcTJEOE11Yks3Y1VERFVHanhnZGlQZGdHMG5RdlluVXhHb2xRWE1UdkpWMzdOeDF2SmxWVXhmclRYWDhNOWhVcVlWZndQa2I0YTRJMTlJYlE9PSIsIm1hYyI6IjA1ZGU5NjY1Y2ZiZmNlMjE3YjU1ZDA2MjVmMTZkMjRiYjdlYmZjYjRjMDhmYWE2YjY5ZjRhYWQ0YjQyOWU0NjgiLCJ0YWciOiIifQ==', NULL, NULL, NULL, '2022-03-23 23:04:31', '2022-03-23 23:06:50', 'user street 69, Miami,  Florida, USA', '+14563456999'),
(5, 'Toth Zsolt', 'zsoltika@gmail.com', 'User', '2022-04-07 03:02:23', '$2y$10$VciGxA03dovgcSAomaDi3O1a7jmbYOf3jKlFeHc9g7M10KnuHHzia', NULL, NULL, NULL, NULL, NULL, '2022-04-07 03:01:41', '2022-04-07 03:02:23', '1234 Trafalgar Sqaure, London, UK', '+44123456789'),
(7, 'tester', 'tester1234@gmail.com', 'User', NULL, '$2y$10$KpofoWyPNem4eEyb9EGWFumWFONnaMx1WWOPT70/GmnOe0uFr2dqy', NULL, NULL, NULL, NULL, NULL, '2022-04-08 18:01:04', '2022-04-11 15:40:14', '123 Miles street, Lincoln, UK', '+44123456789'),
(9, 'Kiss Réka', 'reka22@gmail.com', 'User', NULL, '$2y$10$cNjnhavqjDTwWI0DKOAOvO4AhHLE4YAodKG9VtptT.uZ0N3lac2m.', NULL, NULL, NULL, NULL, NULL, '2022-04-09 05:41:11', '2022-04-12 15:25:26', '1132 Miami MAlibu', '11123123123'),
(10, 'Kiss Miska', 'miska@gmail.com', 'User', NULL, '$2y$10$IecFSa7Yh9UvW7Fnwk/KGuR9fz0KzRXaySxn0hqEldwmQGhSp6Mia', NULL, NULL, NULL, NULL, NULL, '2022-04-09 07:04:57', '2022-04-09 07:04:57', NULL, NULL),
(11, 'Csizmar Joska', 'csizmar@gmail.com', 'User', NULL, '$2y$10$DnW8BfMBcIWGZfgo8QR0nuyG8JvGqrTYUpUPPSwNZBaG5pd0Ffe46', NULL, NULL, NULL, NULL, NULL, '2022-04-09 08:03:29', '2022-04-11 16:59:37', 'Alkotas utca 12', '+36201111111'),
(12, 'ramona tekla', 'tekla@gmail.com', 'User', NULL, '$2y$10$1mQjrT0hGvQdEjO8h2UicuaupvN2Kb80UaLbys1nNrJYB/saHLXl6', NULL, NULL, NULL, NULL, NULL, '2022-04-10 18:04:04', '2022-04-11 17:00:05', 'Rakoczi utca 85', '+36204567864'),
(13, 'kiss milan', 'milnak@yahoo.com', 'User', NULL, '$2y$10$yz//rAjxtb7XOz6LW/T3p.7mixwDgux/J80m59QcNjlIIi621ZjBS', NULL, NULL, NULL, NULL, NULL, '2022-04-11 17:03:34', '2022-04-11 17:03:34', 'Rakoczi utca 85', '+36201111111'),
(14, 'sassaas assdadsasad', 'asasdasasasddasd@gmail.com', 'User', NULL, '$2y$10$1qZqU9PGj17BzNVg.wIRhuh0AHMJohUibYgv5y3qc2/4VNBipZiXi', NULL, NULL, NULL, NULL, NULL, '2022-04-11 17:07:28', '2022-04-11 17:07:28', NULL, NULL),
(73, 'Dr. Sister Moen', 'ekirlin@yahoo.com', 'User', NULL, '$2y$10$d5ceJ2skF.zdUwzRUXelPO9fM5nzUz6wBFr5cBQ/02x3cUrWtVCPi', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:37:19', NULL, '316 Volkman Club\nHanetown, CO 59620', '936.313.3061'),
(74, 'Prof. Elise Kunde', 'wzemlak@gulgowski.com', 'User', NULL, '$2y$10$eGdplSw0gg7ZIklYJcWsHuKy5gmIthTwdQXNwx9Z.LW2cqg28FgZG', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:46:38', NULL, '9538 Leannon Flats Apt. 846\nRebaburgh, DE 30840', '919-295-8340'),
(75, 'Ruby Gaylord', 'amalia19@hotmail.com', 'User', NULL, '$2y$10$ne4MbeZzUkAlIe1POztMGO2YtcPMaZSVPHV0hHobi18Ah3I1.2hR2', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:33:31', NULL, '6858 Vinnie Plain\nAuerland, AZ 90922', '239.874.5855'),
(76, 'Newton Jakubowski', 'heathcote.anahi@gmail.com', 'User', NULL, '$2y$10$PZN8v4KlA3n2ngJim9bY2e7avpt0gcbupjYI7Wjiai6nuAElxEuAi', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:46:23', NULL, '961 Dylan Road\nEast Chelsie, MO 22689', '+1 (575) 352-7176'),
(77, 'Dr. Ahmad McKenzie Jr.', 'arnulfo.langosh@yahoo.com', 'User', NULL, '$2y$10$y1RNmjYQzjLXjJrS4G/SjuwLkB4rlqecpPMH4tfp914bYgUPm.3W6', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:26:37', NULL, '28200 Veum Fork\nO\'Connerhaven, DE 26485', '(507) 573-4729'),
(78, 'Rubye Abshire III', 'marguerite75@mccullough.com', 'User', NULL, '$2y$10$egnGSPL19elwgyYGRzT4bOeUbBtMsHI.Jg5pguSOzNN0gv8jT0Hn.', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:28:37', NULL, '257 Eladio Roads\nEast Luisa, AZ 91613', '351-209-6410'),
(79, 'Prof. Audrey Carter', 'mathias.hackett@kub.info', 'User', NULL, '$2y$10$CdrBcWY5hygVUHfFq2Ul1OQH.CA.YQ/15CYW.PBpHmEYlED1nYhz2', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:34:38', NULL, '7144 Brannon Brooks Suite 060\nIsaiahmouth, SD 94783', '(830) 993-6468'),
(80, 'Mr. Lon VonRueden IV', 'winifred.prohaska@gmail.com', 'User', NULL, '$2y$10$CYP91Pehm4SMbigO0LYxc.MDYxu/cbm54OBsw0icF8PdXj4NGvuG2', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:44:26', NULL, '23825 Kiera Shores Apt. 690\nSierraland, CO 02089', '854.861.2294'),
(82, 'Madalyn Daniel', 'wnolan@abernathy.info', 'User', NULL, '$2y$10$FIVmgucmLUUKmMu9mtPoG.zBxIu0ExK3VoHAUP9gvltFC3Gx2WOI6', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:25:35', NULL, '268 Bayer Fields Suite 552\nNorth Fabianbury, DE 00382-4040', '530-428-8426'),
(83, 'Elena Kris', 'altenwerth.esther@pagac.com', 'User', NULL, '$2y$10$RgJKPK4yhvnAnsgNk2pP7OmR5ZjKrYcB3ByoBq9Bofmt9jbh8xpE2', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:51:57', NULL, '849 Annamarie Terrace\nLysanneborough, WY 57463-2035', '(209) 530-0762'),
(84, 'Jovanny Rogahn', 'jaylin.rosenbaum@heathcote.org', 'User', NULL, '$2y$10$aX0FXXKK3TIA9cegzVHTFuwk72m5f.Tsi662nASU.x4owtKD250.y', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:39:12', NULL, '867 Zena Prairie\nNew Roma, UT 81663', '1-534-651-3007'),
(85, 'Anissa Stehr', 'amurazik@yahoo.com', 'User', NULL, '$2y$10$ZtY4dn48Krt4.hUep3aHSeb3OYqs90SslKZfxAD9jFJmyFItX4ARm', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:31:47', NULL, '262 Davis Port Suite 233\nBrisaton, GA 92558-4603', '(315) 914-7139'),
(86, 'Prof. Eric Bogan', 'renner.christina@green.com', 'User', NULL, '$2y$10$F/VrLkniahpvqiCG66nIXelub9JZUP.iT71j8loH97D1BneihB3US', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:59:53', NULL, '706 Beahan Corner\nBergstrombury, SC 73339', '571.763.3864'),
(87, 'Prof. Raphael Aufderhar I', 'ehuels@yahoo.com', 'User', NULL, '$2y$10$gkMk501JfFMdJSwGK3RZfOsceNHRghaWj.PBxVk7k1N3.LTzcyHwW', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:31:41', NULL, '92960 Turner Ville\nDellmouth, OR 46844', '+1 (725) 716-7248'),
(88, 'Heber Von', 'willa29@hotmail.com', 'User', NULL, '$2y$10$mKpc0oKOqQJCy47SeyL1duPOZ3B.Yq1y6GB/A3olsQD9dHbntHg7S', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:15:21', NULL, '17153 Collier Dale\nKuhlmanchester, OR 93835-7679', '(319) 505-9039'),
(89, 'Gene Hyatt', 'osborne.marvin@skiles.info', 'User', NULL, '$2y$10$thWGzgWtrJJoHiZ.v0EkXexDcswn.o/U8WhEWgfrgHJfvHLCYPlDe', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:40:46', NULL, '6000 Katheryn Ports\nEast Grant, MD 45709-1662', '336.782.5469'),
(90, 'Lisette Prohaska', 'joesph.mills@schneider.org', 'User', NULL, '$2y$10$NImwrnOhe4hr8raSXjuFJ.Ha9NvusezvrPryE9rXcc0V0YBP9/sSO', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:13:58', NULL, '60158 Abel Green Apt. 149\nSchimmelfurt, CA 11193-2459', '+1.732.314.3612'),
(91, 'Lisandro Brekke', 'xschmitt@ward.com', 'User', NULL, '$2y$10$PJc3K4K8TBw3CM5O0aX9vufN7q3E7IKnm/OKv9OpBlGDY0ZFnygUC', NULL, NULL, NULL, NULL, NULL, '2022-04-11 19:53:04', NULL, '5481 Golden Extensions Apt. 279\nMetzhaven, MT 80598-7749', '+1-832-345-2719'),
(92, 'Prof. Demarcus Murray II', 'roderick79@okon.com', 'User', NULL, '$2y$10$9K./bLRMEIHuEUcrEfVXsusTWoEvp/sp3ZiKG.jjKMHm3OpkD.THK', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:48:00', NULL, '6757 Marquise Crossroad\nSouth Justus, UT 26156', '425-896-2114'),
(93, 'Mr. Garnet Gibson', 'astrid.nader@heaney.com', 'User', NULL, '$2y$10$y.6CLz.IO4b10WQ9UQjCZeIbUr5FHtaPBEf6COBPdhy9zgpyj3NLy', NULL, NULL, NULL, NULL, NULL, '2022-04-11 18:22:46', NULL, '1509 Macie Harbor Apt. 382\nNaomichester, AL 82783-4392', '316.517.3840'),
(94, 'Kiss ramona', 'ramona@yahoo.com', 'User', NULL, '$2y$10$rchOmPwyzcC6hm7fqqWwAOyUhwLUyfYE.sXnQ.Ec25dWuSUcds1Ma', NULL, NULL, NULL, NULL, NULL, '2022-04-12 19:06:13', '2022-04-12 19:06:13', NULL, NULL);

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
  ADD KEY `transactions_room_id_foreign` (`room_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
