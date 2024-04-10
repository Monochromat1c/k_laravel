-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `gender_id` int(11) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gender_id`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Male', '2024-03-29 07:58:17', '2024-03-29 07:58:17'),
(2, 'Female', '2024-03-29 07:58:17', '2024-03-29 07:58:17'),
(3, 'Otter', '2024-03-29 07:58:17', '2024-03-29 00:00:07'),
(4, 'Asexual', '2024-03-29 00:00:14', '2024-03-29 00:00:14'),
(5, 'Homosexual', '2024-03-29 00:00:20', '2024-03-29 00:00:20'),
(6, 'Nonbinary', '2024-03-29 00:00:52', '2024-03-29 00:00:52'),
(7, 'Heterosexual', '2024-03-29 00:01:14', '2024-03-29 00:01:14'),
(9, 'Monkey', '2024-03-29 00:01:37', '2024-03-29 00:01:37'),
(10, 'Lizard', '2024-03-29 00:01:53', '2024-03-29 00:01:53'),
(11, 'Fan', '2024-03-29 00:02:02', '2024-03-29 00:02:02'),
(12, 'Crab', '2024-03-31 03:05:03', '2024-03-31 03:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(58, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(59, '2024_03_11_082154_create_genders_table', 1),
(60, '2024_03_11_082724_create_users_table', 1),
(61, '2024_03_13_090138_create_user_controllers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `user_id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) DEFAULT NULL,
  `birthday` date NOT NULL,
  `gender_id` int(11) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contact_number` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `suffix_name`, `birthday`, `gender_id`, `address`, `contact_number`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Charles Manuel', NULL, 'Diestro', NULL, '2024-03-15', 12, 'Sesame Street', '09987654321', 'cmdiestro+1@gmail.com', 'user', '$2y$12$lkOnSWwcRt9kPCP6DwVOKOGFHITEVEYLGjZH5DNzScdSnKT3Etr.m', '2024-03-29 00:03:11', '2024-03-31 05:26:11'),
(3, 'Kezia', NULL, 'Dolor', NULL, '2024-03-14', 2, 'Abc, 123', '09423546875', 'kdolor@gmail.com', 'kezzz', '$2y$12$9PrfmEaS7tRJn/MoTgeuJ.rZmi4FxraK3AX7gRuzhws8kyhVCkJAa', '2024-03-29 03:27:38', '2024-03-29 03:27:38'),
(5, 'Lorem', 'Lorem', 'Lorem', 'Lorem', '2024-03-22', 7, 'Abc, 123', '09473829432', 'cmdiestro+3@gmail.com', 'sdf', '$2y$12$VZxlhzvOTqLS.66sS5yY.uou1j0AW0KMuJ.6CrLATW9VvC2ZZrOW2', '2024-03-31 03:04:45', '2024-03-31 03:04:45'),
(6, 'Stanly', NULL, 'Kinnes', 'Junior', '2024-04-24', 5, 'Abc, 123', '09123457482', 'skinnes@gmail.com', 'skinnes', '$2y$12$flx6uoGa6aSMOBg2tVRhgub0pzbL23qhJ/vEOzrfUYmpXr5bNXW2e', '2024-03-31 23:58:59', '2024-03-31 23:58:59'),
(7, 'Ian Gabriel', NULL, 'Dichosa', NULL, '2024-04-25', 3, 'Abc, 123', '09987634321', 'igdichosa@gmail.com', 'igdichosa', '$2y$12$6uxBKqRf6ESBvmGfSrp46.SzkuMKw5efXUPOCFvWUqWM1J.Weu54O', '2024-04-01 00:04:09', '2024-04-01 00:04:09'),
(8, 'Ralph Lionel', 'Asdf', 'Bides', 'Senior', '2024-05-06', 4, 'Abc, 123', '09423246475', 'rlbides@gmail.com', 'rlbidess', '$2y$12$vSvAkpPhhDMunIHY4sifN.WQES33eHQHiYzgOdqsF5fp/NQqsW7ly', '2024-04-01 00:05:20', '2024-04-01 00:40:43'),
(9, 'Charles', 'Selrahc', 'Selrahc', 'Selrahc', '2024-04-12', 12, 'Sa iya nga heart', '09123456789', 'cmdiestro@gmail.com', 'Charlesss', '$2y$12$1pWn4qM64h0QKscjheDzk.q6GkABpw0x0W0Wv4h75fitXAZsiSx6O', '2024-04-01 00:07:24', '2024-04-01 01:09:32'),
(10, 'Tlnats', 'Boi', 'Kinnes', NULL, '2024-04-05', 1, 'Abc, 123', '09423146875', 'skinnes+1@gmail.com', 'skinnes+1', '$2y$12$p39Ev1ONQ5GzJhUfSFxIdeRDznv4xSB1fFFQhyGXl1a5ODrsMctGO', '2024-04-01 00:18:47', '2024-04-01 00:18:47'),
(11, 'John', NULL, 'Doe', NULL, '2024-04-11', 9, 'Abc, 123', '09985654321', 'mail+1@gmail.com', 'mail+1', '$2y$12$NAa8xnVIt3yIej2ve/Spm.Qyr0iDP/v19u6drH2D7F3W8h4Q/fbum', '2024-04-01 00:22:40', '2024-04-01 00:22:40'),
(13, 'Dan', NULL, 'Asdsa', NULL, '2024-04-11', 10, 'Abc, 123', '09987653321', 'mail+2@gmail.com', 'mail+2', '$2y$12$HSBznZXJEJcDOgT/gsOtdOlBaOvrYvCR7WVqeXxX29CTaM9Z1vw6S', '2024-04-01 00:53:34', '2024-04-01 00:53:34'),
(14, 'Kurt', NULL, 'Akfdf', NULL, '2024-05-01', 10, 'Abc, 123', '09173457483', 'mail+3@gmail.com', 'mail+3', '$2y$12$sNTRst2y11VKVtuWL7N4SO3jSMC1/8pcZag88zjPp3lwVSKsusznC', '2024-04-01 00:54:35', '2024-04-01 01:03:42'),
(15, 'Daniel', 'Shcmidt', 'Sanchez', NULL, '2024-04-20', 9, 'Abc, 123', '09123457453', 'mail+4@gmail.com', 'mail+4', '$2y$12$QoMShoi6vJt/Ed9Zgt.Ix.FqnSsVrpgmntrIiJPH4fIkZJY3WiXC2', '2024-04-01 01:00:58', '2024-04-01 01:00:58'),
(19, 'Nox', NULL, 'Siderea', NULL, '2024-04-25', 1, 'Abc, 123', '09473829385', 'nox.siderea@gmail.com', 'admin123', '$2y$12$NBHxXt7CU0u8Z/.nyZibF.XYtsBmDrUz3DnegEBj6IgRjdzyR63yy', '2024-04-05 02:41:32', '2024-04-05 02:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_controllers`
--

CREATE TABLE `user_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `contact_number` (`contact_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `user_controllers`
--
ALTER TABLE `user_controllers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_controllers`
--
ALTER TABLE `user_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`gender_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
