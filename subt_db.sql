-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 07:30 AM
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
('2017_04_21_114733_create_trn_cats_table', 1),
('2017_04_27_094138_create_trn_applicant_details', 1),
('2017_04_27_094602_create_trn_attachments_details', 1),
('2017_04_27_100128_create_mst_im_regs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_im_regs`
--

CREATE TABLE `mst_im_regs` (
  `im_no` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
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
  `im_reg_auth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_prems` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im__bank_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_mob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_acc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_ifsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_im_regs`
--

INSERT INTO `mst_im_regs` (`im_no`, `user_id`, `im_status`, `im_unit_name`, `im_unit_add`, `im_unit_tal`, `im_unit_dist`, `im_unit_state`, `im_unit_pin`, `im_unit_fax`, `im_unit_mob`, `im_unit_email`, `im_unit_web`, `im_unit_ssi`, `im_unit_for`, `im_unit_cat`, `im_unit_firm`, `im_reg_auth`, `im_prems`, `im_bank_name`, `im_bank_branch`, `im__bank_add`, `im_bank_pin`, `im_bank_mob`, `im_bank_acc`, `im_bank_ifsc`, `created_at`, `updated_at`) VALUES
(1, 1, 'active', 'test1', 'test1 add', 'test1 tal', 'Mumbai', 'Maharashtra', 400023, '7656656', '987876677', 'test1@gmail.com', 'test1.com', 'SSI', 'New Unit', 0, 'Pvt.Ltd', '', '', '', '', '', '', '', '', '', '2017-04-27 04:37:39', '2017-04-27 04:37:39'),
(2, 1, 'pending', 'test2', 'test2 add', 'test2 tal', 'Mumbai', 'Maharashtra', 3434, '5434343', '877564554', 'test2@gmail.com', 'test2.com', 'Non SSI', 'New Unit', 0, 'Proprietorship', '', '', '', '', '', '', '', '', '', '2017-04-27 04:38:26', '2017-04-27 04:38:26'),
(3, 1, 'pending', 'test3', 'test3 add', 'test3 tal', 'Pune', 'Maharashtra', 434343, '45454545', '87878665', 'test3@gmail.com', 'test3.com', 'SSI', 'New Unit', 0, 'Pvt.Ltd', '', '', '', '', '', '', '', '', '', '2017-04-27 04:39:11', '2017-04-27 04:39:11'),
(4, 1, 'pending', 'test4', 'test4 add', 'test4 tal', 'Mumbai', 'Maharashtra', 434344, '654454', '987867677', 'test4@gmail.com', 'test4.com', 'SSI', 'Existing Unit', 0, 'Proprietorship', '', '', '', '', '', '', '', '', '', '2017-04-29 03:06:13', '2017-04-29 03:06:13'),
(20, 1, 'pending', 'test5', 'test5', 'test5', 'Mumbai', 'Maharashtra', 65454, '343434', '8767', 'test5@gm.com', 'test5.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 04:41:22', '2017-04-29 04:41:22'),
(21, 1, 'pending', 'testa', 'testa', 'testa', 'Mumbai', 'Maharashtra', 543434, '7566', '6767556', 'testa@gm.com', 'testa.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 04:49:06', '2017-04-29 04:49:06'),
(22, 1, 'pending', 'tesa', 'tesa', 'tesa', 'Mumbai', 'Maharashtra', 545, '75656', '878676', 'tesa@gm.com', 'tesa.com', 'Non SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 04:50:52', '2017-04-29 04:50:52'),
(23, 1, 'pending', 'tesa1', 'tesa1', 'tesa1', 'Mumbai', 'Maharashtra', 5451, '756561', '8786761', 'tesa1@gm.com', 'tesa1.com', 'Non SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:00:42', '2017-04-29 05:00:42'),
(24, 1, 'pending', 'tesa2', 'test2', 'test2', 'Mumbai', 'Maharashtra', 1212342141, '241242314231', '214313412341', 'test2@test.com', 'test.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:02:19', '2017-04-29 05:02:19'),
(25, 1, 'pending', 'test31', 'test31', 'test31', 'Mumbai', 'Maharashtra', 1231231, '4325252', '35356345', 'test31@test.com', 'test31.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:03:37', '2017-04-29 05:03:37'),
(26, 1, 'pending', 'test121', 'test121', 'test121', 'Mumbai', 'Maharashtra', 213313, '3131313', '43243241', 'test121@gmail.com', 'www.test121.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:08:18', '2017-04-29 05:08:18'),
(28, 1, 'pending', 'test111', 'test111', 'test111', 'Mumbai', 'Maharashtra', 2313, '21332', '21321414', 'test111@i.in', 'test111.i', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:14:10', '2017-04-29 05:14:10'),
(31, 1, 'pending', 'test122', 'test122', 'test122', 'Pune', 'Maharashtra', 23131, '21312341', '2414325252', 'test122@in.in', 'test122.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:27:46', '2017-04-29 05:27:46'),
(38, 1, 'pending', 'test123', 'test123', 'test123', 'Mumbai', 'Maharashtra', 64646, '45454', '8765454', 'test123@in.in', 'test.cm', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:56:28', '2017-04-29 05:56:28'),
(39, 1, 'pending', 'testsh1', 'testsh1', 'testsh1', 'Mumbai', 'Maharashtra', 5333, '6454', '8788676', 'testsh1@gm.com', 'testsh1.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 05:58:54', '2017-04-29 05:58:54'),
(40, 1, 'pending', 'testsh2', 'testsh2', 'testsh2', 'Mumbai', 'Maharashtra', 53334, '64544', '878867632', 'testsh2@gm.com', 'testsh2.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 06:00:25', '2017-04-29 06:00:25'),
(42, 1, 'pending', 'test10', 'test10', 'test10', 'Mumbai', 'Maharashtra', 64454, '7755', '897867', 'test10@in.in', 'test10.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-04-29 06:08:23', '2017-04-29 06:08:23'),
(43, 1, 'pending', 'test20', 'test20test20', 'test20test20test20', 'Pune', 'Maharashtra', 43444, '877565', '878765654', 'test20@gmail.com', 'test20.com', 'Non SSI', 'Existing Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:45:47', '2017-05-01 23:45:47'),
(44, 1, 'pending', 'test21', 'test21test21', 'test21test21test21', 'Mumbai', 'Maharashtra', 55454, '9676565', '0878656565', 'test21@gmail.com', 'test21.com', 'SSI', 'Existing Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:48:06', '2017-05-01 23:48:06'),
(45, 1, 'pending', 'test22', 'test22test22', 'test22test22test22', 'Mumbai', 'Maharashtra', 434343, '765656454', '9776564545', 'test22@gmail.com', 'test22.com', 'Non SSI', 'Existing Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:49:19', '2017-05-01 23:49:19'),
(46, 1, 'pending', 'test23', 'test23test23', 'test23test23test23', 'Mumbai', 'Maharashtra', 44343, '656454', '867656544', 'test23@gmail.com', 'test23.com', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:51:34', '2017-05-01 23:51:34'),
(47, 1, 'pending', 'test24', 'test24test24', 'test24test24test24', 'Mumbai', 'Maharashtra', 43443, '465666', '8767767', 'test24@in.in', 'test24.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:57:26', '2017-05-01 23:57:26'),
(48, 1, 'pending', 'test25', 'test25test25', 'test25test25test25', 'Pune', 'Maharashtra', 34353, '755656', '97876777', 'test25@in.in', 'test25.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-01 23:59:27', '2017-05-01 23:59:27'),
(49, 1, 'pending', 'test26', 'test26test26', 'test26test26test26', 'Mumbai', 'Maharashtra', 5455454, '76566', '8778787667', 'test26@in.in', 'test26.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-02 00:10:30', '2017-05-02 00:10:30'),
(50, 1, 'pending', 'test27', 'test27test27', 'test27test27test27', 'Mumbai', 'Maharashtra', 43434, '765656', '97876767', 'test27@in.in', 'test27.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-02 00:27:29', '2017-05-02 00:27:29'),
(51, 1, 'pending', 'test28', 'test28test28', 'test28test28test28', 'Pune', 'Maharashtra', 75454, '65545', '9878676767', 'test28@in.in', 'test28.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-02 00:38:44', '2017-05-02 00:38:44'),
(52, 1, 'pending', 'test29', 'test29test29', 'test29test29test29', 'Mumbai', 'Maharashtra', 4443, '6454545', '5455677887', 'test29@in.in', 'test29.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-02 00:42:16', '2017-05-02 00:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trn_applicant_details`
--

CREATE TABLE `trn_applicant_details` (
  `app_id` int(10) UNSIGNED NOT NULL,
  `im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_gen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_rel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trn_applicant_details`
--

INSERT INTO `trn_applicant_details` (`app_id`, `im_no`, `app_name`, `app_gen`, `app_rel`, `app_cat`, `created_at`, `updated_at`) VALUES
(1, '', 'on', '', 'Hindu', 'SC/ ST', NULL, NULL),
(2, '', 'Female', '', 'Hindu', 'OBC', NULL, NULL),
(3, '', 'test demo1', 'on', 'Hindu', 'SC/ ST', NULL, NULL),
(4, '', 'test demo2', 'Male', 'Hindu', 'OPEN', NULL, NULL),
(5, '', 'fefdf', 'on', 'Hindu', 'OBC', NULL, NULL),
(6, '', 'ggfgf', 'Female', 'Hindu', 'SC/ ST', NULL, NULL),
(7, '', 'test51', 'Others', 'Hindu', 'SC/ ST', NULL, NULL),
(8, '', 'test52', 'Male', 'Hindu', 'SC/ST', NULL, NULL),
(9, '', 'testa1', 'Female', 'Hindu', 'SC/ ST', NULL, NULL),
(10, '', 'testa2', 'Female', 'Hindu', 'OBC', NULL, NULL),
(11, '', '', 'Female', 'Select', 'Select', '2017-05-02 00:27:29', '2017-05-02 00:27:29'),
(12, '', 'test28_1', 'Female', 'Hindu', 'SC/ ST', '2017-05-02 00:38:44', '2017-05-02 00:38:44'),
(13, '', 'test28_2', 'Male', 'Hindu', 'OBC', '2017-05-02 00:38:44', '2017-05-02 00:38:44'),
(14, '52', 'test29_1', 'Female', 'Hindu', 'SC/ ST', '2017-05-02 00:42:16', '2017-05-02 00:42:16'),
(15, '52', 'test29_1', 'Female', 'Hindu', 'SC/ST', '2017-05-02 00:42:16', '2017-05-02 00:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `trn_attachments_details`
--

CREATE TABLE `trn_attachments_details` (
  `inprinc_no` int(10) UNSIGNED NOT NULL,
  `im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quant` int(11) NOT NULL,
  `rate_unit` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trn_cats`
--

CREATE TABLE `trn_cats` (
  `caste_id` int(10) UNSIGNED NOT NULL,
  `caste_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caste_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caste_rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, 'ABCDE1234F', 'demo@gmail.com', '$2y$10$LkC2OVjy3wthHxyaN5ZoGuFlWWmVcCnEW3LxW3FHHQn40gxDgSG3.', 'demo', 'demodemo', 'demodemodemo', '9876543211', '123456789123', 'user', 'bET00rtl4HCQVCtsiWO7s35qq8ApnsVR5sVhlXclPm2fgsltRmE3pdxADrK1', '2017-04-27 04:36:47', '2017-05-02 01:04:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_im_regs`
--
ALTER TABLE `mst_im_regs`
  ADD PRIMARY KEY (`im_no`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `trn_applicant_details`
--
ALTER TABLE `trn_applicant_details`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `trn_attachments_details`
--
ALTER TABLE `trn_attachments_details`
  ADD PRIMARY KEY (`inprinc_no`);

--
-- Indexes for table `trn_cats`
--
ALTER TABLE `trn_cats`
  ADD PRIMARY KEY (`caste_id`);

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
  MODIFY `im_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `trn_applicant_details`
--
ALTER TABLE `trn_applicant_details`
  MODIFY `app_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `trn_attachments_details`
--
ALTER TABLE `trn_attachments_details`
  MODIFY `inprinc_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trn_cats`
--
ALTER TABLE `trn_cats`
  MODIFY `caste_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
