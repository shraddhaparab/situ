-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 01:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_20_050930_create_mst_im_regs_table', 2),
('2017_04_20_121350_create_mst_trn_owner_details_table', 2),
('2017_04_21_111917_create_mst_im_regs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mst_im_regs`
--

CREATE TABLE `mst_im_regs` (
  `im_user_id` int(10) UNSIGNED NOT NULL,
  `im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `im_unit_name` text COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_add` text COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_tal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_dist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_pin` int(11) NOT NULL,
  `im_unit_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_mob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_ssi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_for` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_cat` int(11) NOT NULL,
  `im_unit_firm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shraddhaparab@digimarketmoz.com', '55a35cbf17df8effc6bfe3cc94feee8907f1dfa0499ded33ba56bf3674db41df', '2017-04-21 01:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `trn_owner_details`
--

CREATE TABLE `trn_owner_details` (
  `own_id` int(10) UNSIGNED NOT NULL,
  `own_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `own_gen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `own_rel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `own_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `own_im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `own_im_user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_name` text COLLATE utf8_unicode_ci NOT NULL,
  `co_add` text COLLATE utf8_unicode_ci NOT NULL,
  `co_cont_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_cont_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_adhar_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `co_name`, `co_add`, `co_cont_name`, `co_cont_no`, `co_adhar_no`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ABCDE1234F', 'shraddhaparab@digimarketmoz.com', '$2y$10$8OHpQgbOE8kzJrm0oMyVuuHZ7F/xV32b561FQozhXIjBPJzaK0z16', 'test', 'test add', 'test name', '9876543211', '123456789123', 'user', 'RPKo9nhT8hpToC9ZkUuyujPw7wK58ctPaq1JV5DqqZSzZ0CG1JSUB7xFUraa', '2017-04-21 01:12:36', '2017-04-21 05:22:47'),
(2, 'admin', 'admin@gmail.com', '$2y$10$8OHpQgbOE8kzJrm0oMyVuuHZ7F/xV32b561FQozhXIjBPJzaK0z16', '', '', '', '', '', 'RO', 'xwzJsWBNzqVdC7nN2Vf2euWgtqxM3iF9N7bpS5oECELQ9Pu8vCsDY381c0g6', NULL, '2017-04-21 05:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_im_regs`
--
ALTER TABLE `mst_im_regs`
  ADD PRIMARY KEY (`im_user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `trn_owner_details`
--
ALTER TABLE `trn_owner_details`
  ADD PRIMARY KEY (`own_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_co_cont_no_unique` (`co_cont_no`),
  ADD UNIQUE KEY `users_co_adhar_no_unique` (`co_adhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_im_regs`
--
ALTER TABLE `mst_im_regs`
  MODIFY `im_user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trn_owner_details`
--
ALTER TABLE `trn_owner_details`
  MODIFY `own_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
