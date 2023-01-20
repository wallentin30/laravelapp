-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.epizy.com
-- Generation Time: Jan 20, 2023 at 12:38 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32176456_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `order_id`, `prod_id`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '100', '2022-01-21 21:09:00', '2022-01-21 21:09:00'),
(2, '2', '2', '250', '2022-01-21 21:09:19', '2022-01-21 21:09:19'),
(3, '3', '3', '400', '2022-01-21 21:09:44', '2022-01-21 21:09:44'),
(4, '4', '1', '100', '2022-01-21 21:10:11', '2022-01-21 21:10:11'),
(5, '5', '2', '250', '2022-01-21 21:11:10', '2022-01-21 21:11:10'),
(6, '6', '3', '400', '2022-01-21 21:11:37', '2022-01-21 21:11:37'),
(7, '7', '2', '250', '2022-01-23 21:46:45', '2022-01-23 21:46:45'),
(8, '8', '2', '250', '2022-01-23 22:01:58', '2022-01-23 22:01:58'),
(9, '9', '2', '250', '2022-02-17 09:07:42', '2022-02-17 09:07:42'),
(10, '10', '2', '250', '2022-02-17 12:40:50', '2022-02-17 12:40:50');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_12_01_064623_create_products_table', 2),
(5, '2022_01_02_094026_create_orders_table', 3),
(6, '2022_01_02_094746_create_items_table', 3),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(14, '2022_01_22_093002_create_jobs_table', 4),
(15, '2022_01_30_154940_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `title`, `price`, `status`, `note`, `tracking`, `created_at`, `updated_at`) VALUES
(1, '3', 'Test', 'test@test.com', '0743366981', 'Basic', '100', 1, 'vreau sa fiu sunat', '6611', '2022-01-21 21:09:00', '2022-02-17 12:42:15'),
(2, '3', 'Test', 'test@test.com', '0743366981', 'Standard', '250', 1, 'testare servicii', '2423', '2022-01-21 21:09:19', '2022-01-23 23:49:01'),
(3, '3', 'Test', 'test@test.com', '0743366981', 'Plus', '400', 0, 'test', '5641', '2022-01-21 21:09:44', '2022-01-21 21:09:44'),
(4, '2', 'Contact', 'contact@valentincojocaru.com', '0747819925', 'Basic', '100', 0, 'test dev', '3051', '2022-01-21 21:10:11', '2022-01-21 21:10:11'),
(5, '2', 'Contact', 'contact@valentincojocaru.com', '0747819925', 'Standard', '250', 0, 'testare produs', '6419', '2022-01-21 21:11:10', '2022-01-21 21:11:10'),
(6, '2', 'Contact', 'contact@valentincojocaru.com', '0747819925', 'Plus', '400', 1, 'www.domeniu.tld', '7707', '2022-01-21 21:11:37', '2022-01-23 23:49:14'),
(7, '3', 'Test', 'test@test.com', '0743366981', 'Standard', '250', 0, 'test', '8789', '2022-01-23 21:46:45', '2022-01-23 21:46:45'),
(8, '3', 'Test', 'test@test.com', '0743366981', 'Standard', '250', 0, NULL, '9429', '2022-01-23 22:01:58', '2022-01-23 22:01:58'),
(9, '3', 'Test', 'test@test.com', '0743366983', 'Standard', '250', 0, NULL, '9261', '2022-02-17 09:07:42', '2022-02-17 09:07:42'),
(10, '3', 'Test', 'test@test.com', '0743366983', 'Standard', '250', 0, 'test', '900', '2022-02-17 12:40:50', '2022-02-17 12:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test@test.com', '$2y$10$s9cjUCOB89SsLygoRxeF.evx8CgGDucgp7vyRMODkkPvj2276PTWu', '2022-01-23 22:45:45'),
('wallentin30@yahoo.com', '$2y$10$RD8TTfz80pOos6Afi9G3Au7dH3IXevotkxxqby1sNv85O3NCdIaXK', '2022-01-23 22:51:02'),
('contact@valentincojocaru.com', '$2y$10$a1rmURg/TJLxREe1eH3jBOIr7XOIurpX77gqdtCvtMfo4vha8SHw2', '2022-01-29 19:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 100.00, '<li><i class=\"fas fa-check-circle textx fa-li\"></i> Monitorizare uptime</li>\r\n\r\n <li><i class=\"fas fa-check-circle textx fa-li\"></i> Actualizări esențiale</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Depanare erori</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Securizare site</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Verificări periodice</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Modificări în site ( 1h )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx  fa-li\"></i> Modificări extra ( 50/1h</b> )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Suport prin email</li>\r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Optimizare viteză site</del></li>\r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Creare pagini noi</del></li>  \r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del> Administrare cPanel</del></li>\r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Modificări zonă DNS</del></li>  \r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Migrare website </del></li>', '2021-12-02 04:16:24', '2022-01-12 21:33:44'),
(2, 'Standard', 250.00, '<li><i class=\"fas fa-check-circle textx fa-li\"></i> Monitorizare uptime</li>\r\n\r\n <li><i class=\"fas fa-check-circle textx fa-li\"></i> Actualizări esențiale</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Depanare erori</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Securizare site</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Verificări periodice</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Modificări în site ( 2.5h )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx  fa-li\"></i> Modificări extra ( 50/1h</b> )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Suport prin email</li>\r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Optimizare viteză site</li>\r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Creare pagini noi</li>  \r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del> Administrare cPanel</del></li>\r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Modificări zonă DNS</del></li>  \r\n\r\n<li ><i class=\"fas fa-times-circle text-danger fa-li\"></i> <del>Migrare website </del></li>', '2021-12-01 14:31:24', '2022-01-12 21:16:46'),
(3, 'Plus', 400.00, '<li><i class=\"fas fa-check-circle textx fa-li\"></i> Monitorizare uptime</li>\r\n\r\n <li><i class=\"fas fa-check-circle textx fa-li\"></i> Actualizări esențiale</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Depanare erori</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Securizare site</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Verificări periodice</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Modificări în site ( 4h )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx  fa-li\"></i> Modificări extra ( 50/1h</b> )</li>\r\n\r\n<li><i class=\"fas fa-check-circle textx fa-li\"></i> Suport prin email</li>\r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Optimizare viteză site</li>\r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Creare pagini noi</li>  \r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Administrare cPanel</li>\r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Modificări zonă DNS</li>  \r\n\r\n<li ><i class=\"fas fa-check-circle textx fa-li\"></i> Migrare website</li>', '2021-12-05 12:29:36', '2022-01-23 04:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Valentin', 'wallentin30@yahoo.com', '0747819981', '$2y$10$WS/qLj53gn86v/IjbDm9YunQ2.hImZA/t4Yy.N06kAlgVyo6K8MUm', 1, 'YWcHhScOj3bTemrltj3LEAmHj98XlPERUMrbHwL1BuLG4nQ1TYTBDbCWFswx', '2022-01-18 08:13:49', '2022-01-22 13:26:13'),
(2, 'Contacts Valentin', 'contact@valentincojocaru.com', '0747819925', '$2y$10$rPTA1KiJv00YmVFX.uZU8uHSyNmf51fU2HhrRSVRqMngDyF7r3aCC', 0, 'd2JVhz00B6o7XrgQkLV4oxH6TBOpd6sw3T4MKJwpE7rEqLkxrqeDzpdDs1VF', '2022-01-18 08:19:58', '2022-02-02 14:18:51'),
(3, 'Test', 'test@test.com', '0743366983', '$2y$10$a9kCHO2P8E2JQ5zq3H9qMeJ5sQtqABfGSI8NlYusm.GyuNny504lm', 0, NULL, '2022-01-18 16:09:01', '2022-02-10 04:39:53'),
(4, 'Tester', 'test@test.ro', '0747819985', '$2y$10$QLUOmxRbIloaMuLh/D8HbuaZ/AoL8TYAXC7Nhmhd9vwjMtXhuSptW', 0, NULL, '2022-02-17 11:27:58', '2022-02-17 11:27:58'),
(5, 'WebDev', 'webdevpassion@gmail.com', '0747819981', '$2y$10$X76JeKK0cNZVk/BfWy7QBe8buNLq3Z87z.LxGiD8MbAtxssIFlB.K', 0, 'Z49gr5m0856OFUNY6P5EHaJEfe0IRD6l8PY8PyiYFstLRmVCs1Ildm7eJerP', '2022-11-13 17:06:20', '2022-11-13 17:06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
