-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2022 at 04:54 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astecoke_aste`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `values` text COLLATE utf8mb4_unicode_ci,
  `image_one` text COLLATE utf8mb4_unicode_ci,
  `image_two` text COLLATE utf8mb4_unicode_ci,
  `image_three` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `mission`, `vision`, `values`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.1</p>\r\n\r\n<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accountbalance`
--

CREATE TABLE `accountbalance` (
  `accountBalID` int(11) NOT NULL,
  `WorkingAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FloatAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UtilityAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChargesPaidAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationSettlementAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BOCompletedTime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 12:29:46', '2021-05-10 12:29:46'),
(2, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 12:30:57', '2021-05-10 12:30:57'),
(3, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 12:30:57', '2021-05-10 12:30:57'),
(4, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 12:31:16', '2021-05-10 12:31:16'),
(5, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:08:31', '2021-05-10 13:08:31'),
(6, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:08:41', '2021-05-10 13:08:41'),
(7, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:09:21', '2021-05-10 13:09:21'),
(8, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:09:53', '2021-05-10 13:09:53'),
(9, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:10:05', '2021-05-10 13:10:05'),
(10, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:10:42', '2021-05-10 13:10:42'),
(11, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:11:49', '2021-05-10 13:11:49'),
(12, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:11:59', '2021-05-10 13:11:59'),
(13, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:12:43', '2021-05-10 13:12:43'),
(14, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:14:30', '2021-05-10 13:14:30'),
(15, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:14:32', '2021-05-10 13:14:32'),
(16, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:14:34', '2021-05-10 13:14:34'),
(17, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:15:21', '2021-05-10 13:15:21'),
(18, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:16:15', '2021-05-10 13:16:15'),
(19, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:16:26', '2021-05-10 13:16:26'),
(20, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:16:48', '2021-05-10 13:16:48'),
(21, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:17:18', '2021-05-10 13:17:18'),
(22, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:17:26', '2021-05-10 13:17:26'),
(23, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:18:39', '2021-05-10 13:18:39'),
(24, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:18:51', '2021-05-10 13:18:51'),
(25, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:19:41', '2021-05-10 13:19:41'),
(26, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:22:04', '2021-05-10 13:22:04'),
(27, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:24:25', '2021-05-10 13:24:25'),
(28, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:42:26', '2021-05-10 13:42:26'),
(29, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:44:38', '2021-05-10 13:44:38'),
(30, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:45:03', '2021-05-10 13:45:03'),
(31, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:45:15', '2021-05-10 13:45:15'),
(32, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:45:27', '2021-05-10 13:45:27'),
(33, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:45:39', '2021-05-10 13:45:39'),
(34, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:45:59', '2021-05-10 13:45:59'),
(35, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:46:05', '2021-05-10 13:46:05'),
(36, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:48:24', '2021-05-10 13:48:24'),
(37, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:49:56', '2021-05-10 13:49:56'),
(38, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:50:50', '2021-05-10 13:50:50'),
(39, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 13:53:09', '2021-05-10 13:53:09'),
(40, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:01:25', '2021-05-10 14:01:25'),
(41, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:11:08', '2021-05-10 14:11:08'),
(42, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:18:55', '2021-05-10 14:18:55'),
(43, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:26:30', '2021-05-10 14:26:30'),
(44, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:29:20', '2021-05-10 14:29:20'),
(45, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:29:25', '2021-05-10 14:29:25'),
(46, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:31:23', '2021-05-10 14:31:23'),
(47, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:38:29', '2021-05-10 14:38:29'),
(48, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:38:44', '2021-05-10 14:38:44'),
(49, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:39:39', '2021-05-10 14:39:39'),
(50, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:39:39', '2021-05-10 14:39:39'),
(51, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:39:44', '2021-05-10 14:39:44'),
(52, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:40:41', '2021-05-10 14:40:41'),
(53, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:40:54', '2021-05-10 14:40:54'),
(54, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:41:13', '2021-05-10 14:41:13'),
(55, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:41:21', '2021-05-10 14:41:21'),
(56, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:43:05', '2021-05-10 14:43:05'),
(57, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-10 14:43:15', '2021-05-10 14:43:15'),
(58, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:52:43', '2021-05-11 01:52:43'),
(59, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:52:45', '2021-05-11 01:52:45'),
(60, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:54:27', '2021-05-11 01:54:27'),
(61, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:54:27', '2021-05-11 01:54:27'),
(62, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:54:29', '2021-05-11 01:54:29'),
(63, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:54:45', '2021-05-11 01:54:45'),
(64, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:54:46', '2021-05-11 01:54:46'),
(65, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:55:18', '2021-05-11 01:55:18'),
(66, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:58:49', '2021-05-11 01:58:49'),
(67, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:59:27', '2021-05-11 01:59:27'),
(68, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 01:59:43', '2021-05-11 01:59:43'),
(69, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:00:10', '2021-05-11 02:00:10'),
(70, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:01:11', '2021-05-11 02:01:11'),
(71, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:01:11', '2021-05-11 02:01:11'),
(72, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:29', '2021-05-11 02:02:29'),
(73, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:30', '2021-05-11 02:02:30'),
(74, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:33', '2021-05-11 02:02:33'),
(75, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:38', '2021-05-11 02:02:38'),
(76, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:46', '2021-05-11 02:02:46'),
(77, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:02:51', '2021-05-11 02:02:51'),
(78, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:03:29', '2021-05-11 02:03:29'),
(79, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:03:36', '2021-05-11 02:03:36'),
(80, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:03:54', '2021-05-11 02:03:54'),
(81, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:03:59', '2021-05-11 02:03:59'),
(82, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:03', '2021-05-11 02:04:03'),
(83, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:08', '2021-05-11 02:04:08'),
(84, 'default', 'Evoked an Add Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:15', '2021-05-11 02:04:15'),
(85, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:20', '2021-05-11 02:04:20'),
(86, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:38', '2021-05-11 02:04:38'),
(87, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:04:43', '2021-05-11 02:04:43'),
(88, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:05:23', '2021-05-11 02:05:23'),
(89, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:06:43', '2021-05-11 02:06:43'),
(90, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:06:43', '2021-05-11 02:06:43'),
(91, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(92, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(93, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:19:33', '2021-05-11 02:19:33'),
(94, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:20:04', '2021-05-11 02:20:04'),
(95, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:21:28', '2021-05-11 02:21:28'),
(96, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:23:01', '2021-05-11 02:23:01'),
(97, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:23:30', '2021-05-11 02:23:30'),
(98, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:26:42', '2021-05-11 02:26:42'),
(99, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:29:16', '2021-05-11 02:29:16'),
(100, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:31:10', '2021-05-11 02:31:10'),
(101, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:34:01', '2021-05-11 02:34:01'),
(102, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:34:37', '2021-05-11 02:34:37'),
(103, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:37:25', '2021-05-11 02:37:25'),
(104, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:37:25', '2021-05-11 02:37:25'),
(105, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:38:47', '2021-05-11 02:38:47'),
(106, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:39:33', '2021-05-11 02:39:33'),
(107, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:39:33', '2021-05-11 02:39:33'),
(108, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:40:18', '2021-05-11 02:40:18'),
(109, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:41:38', '2021-05-11 02:41:38'),
(110, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:41:38', '2021-05-11 02:41:38'),
(111, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:42:23', '2021-05-11 02:42:23'),
(112, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:42:23', '2021-05-11 02:42:23'),
(113, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:42:43', '2021-05-11 02:42:43'),
(114, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:42:53', '2021-05-11 02:42:53'),
(115, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:43:12', '2021-05-11 02:43:12'),
(116, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:43:22', '2021-05-11 02:43:22'),
(117, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:46:04', '2021-05-11 02:46:04'),
(118, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:46:07', '2021-05-11 02:46:07'),
(119, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:46:34', '2021-05-11 02:46:34'),
(120, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:47:08', '2021-05-11 02:47:08'),
(121, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:47:22', '2021-05-11 02:47:22'),
(122, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:47:50', '2021-05-11 02:47:50'),
(123, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:48:28', '2021-05-11 02:48:28'),
(124, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:48:32', '2021-05-11 02:48:32'),
(125, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:48:37', '2021-05-11 02:48:37'),
(126, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:49:06', '2021-05-11 02:49:06'),
(127, 'default', 'Access Edit Product ID number 13 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:49:12', '2021-05-11 02:49:12'),
(128, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:49:20', '2021-05-11 02:49:20'),
(129, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:49:30', '2021-05-11 02:49:30'),
(130, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:50:39', '2021-05-11 02:50:39'),
(131, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:51:03', '2021-05-11 02:51:03'),
(132, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:51:13', '2021-05-11 02:51:13'),
(133, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 02:51:36', '2021-05-11 02:51:36'),
(134, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:00:35', '2021-05-11 03:00:35'),
(135, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:01:25', '2021-05-11 03:01:25'),
(136, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:01:54', '2021-05-11 03:01:54'),
(137, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:01:58', '2021-05-11 03:01:58'),
(138, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:02:14', '2021-05-11 03:02:14'),
(139, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:03:22', '2021-05-11 03:03:22'),
(140, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:03:55', '2021-05-11 03:03:55'),
(141, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:06', '2021-05-11 03:04:06'),
(142, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:06', '2021-05-11 03:04:06'),
(143, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:13', '2021-05-11 03:04:13'),
(144, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:13', '2021-05-11 03:04:13'),
(145, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:17', '2021-05-11 03:04:17'),
(146, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:04:17', '2021-05-11 03:04:17'),
(147, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:06:27', '2021-05-11 03:06:27'),
(148, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:06:34', '2021-05-11 03:06:34'),
(149, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:07:05', '2021-05-11 03:07:05'),
(150, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:07:23', '2021-05-11 03:07:23'),
(151, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:09:18', '2021-05-11 03:09:18'),
(152, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:10:06', '2021-05-11 03:10:06'),
(153, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:10:21', '2021-05-11 03:10:21'),
(154, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:10:36', '2021-05-11 03:10:36'),
(155, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:10:42', '2021-05-11 03:10:42'),
(156, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:11:15', '2021-05-11 03:11:15'),
(157, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:11:53', '2021-05-11 03:11:53'),
(158, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:12:24', '2021-05-11 03:12:24'),
(159, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:12:43', '2021-05-11 03:12:43'),
(160, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:12:43', '2021-05-11 03:12:43'),
(161, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:13:12', '2021-05-11 03:13:12'),
(162, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:13:12', '2021-05-11 03:13:12'),
(163, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:14:17', '2021-05-11 03:14:17'),
(164, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:15:10', '2021-05-11 03:15:10'),
(165, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:15:52', '2021-05-11 03:15:52'),
(166, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:16:36', '2021-05-11 03:16:36'),
(167, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:16:53', '2021-05-11 03:16:53'),
(168, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:21:33', '2021-05-11 03:21:33'),
(169, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:21:52', '2021-05-11 03:21:52'),
(170, 'default', 'Evoked Edit Product For Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:21:54', '2021-05-11 03:21:54'),
(171, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:21:54', '2021-05-11 03:21:54'),
(172, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:22:50', '2021-05-11 03:22:50'),
(173, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:24:31', '2021-05-11 03:24:31'),
(174, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:27:00', '2021-05-11 03:27:00'),
(175, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:27:29', '2021-05-11 03:27:29'),
(176, 'default', 'Access Edit Product ID number 12 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:27:50', '2021-05-11 03:27:50'),
(177, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:28:25', '2021-05-11 03:28:25'),
(178, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:28:27', '2021-05-11 03:28:27'),
(179, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:29:03', '2021-05-11 03:29:03'),
(180, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:29:03', '2021-05-11 03:29:03'),
(181, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:29:50', '2021-05-11 03:29:50'),
(182, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:29:53', '2021-05-11 03:29:53'),
(183, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:30:28', '2021-05-11 03:30:28'),
(184, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:30:44', '2021-05-11 03:30:44'),
(185, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:31:31', '2021-05-11 03:31:31'),
(186, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:32:14', '2021-05-11 03:32:14'),
(187, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:32:25', '2021-05-11 03:32:25'),
(188, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:35:16', '2021-05-11 03:35:16'),
(189, 'default', 'Accessed Add Category Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:35:48', '2021-05-11 03:35:48'),
(190, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:36:54', '2021-05-11 03:36:54'),
(191, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:37:05', '2021-05-11 03:37:05'),
(192, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:38:25', '2021-05-11 03:38:25'),
(193, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:38:43', '2021-05-11 03:38:43'),
(194, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:38:52', '2021-05-11 03:38:52'),
(195, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:39:35', '2021-05-11 03:39:35'),
(196, 'default', 'Evoked Edit Product For Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:40:22', '2021-05-11 03:40:22'),
(197, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:40:22', '2021-05-11 03:40:22'),
(198, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:41:03', '2021-05-11 03:41:03'),
(199, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:41:33', '2021-05-11 03:41:33'),
(200, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:41:46', '2021-05-11 03:41:46'),
(201, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:43:31', '2021-05-11 03:43:31'),
(202, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:43:33', '2021-05-11 03:43:33'),
(203, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:43:39', '2021-05-11 03:43:39'),
(204, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:44:28', '2021-05-11 03:44:28'),
(205, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:44:49', '2021-05-11 03:44:49'),
(206, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:46:10', '2021-05-11 03:46:10'),
(207, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:57:16', '2021-05-11 03:57:16'),
(208, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:58:20', '2021-05-11 03:58:20'),
(209, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:58:38', '2021-05-11 03:58:38'),
(210, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 03:59:35', '2021-05-11 03:59:35'),
(211, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:00:16', '2021-05-11 04:00:16'),
(212, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:00:37', '2021-05-11 04:00:37'),
(213, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:01:00', '2021-05-11 04:01:00'),
(214, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:01:05', '2021-05-11 04:01:05'),
(215, 'default', 'Evoked Edit Category For Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:01:19', '2021-05-11 04:01:19'),
(216, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:01:20', '2021-05-11 04:01:20'),
(217, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:02:46', '2021-05-11 04:02:46'),
(218, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:02:48', '2021-05-11 04:02:48'),
(219, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:03:04', '2021-05-11 04:03:04'),
(220, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:03:39', '2021-05-11 04:03:39'),
(221, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:06:36', '2021-05-11 04:06:36'),
(222, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:06:45', '2021-05-11 04:06:45'),
(223, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:07:44', '2021-05-11 04:07:44'),
(224, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:08:03', '2021-05-11 04:08:03'),
(225, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:05', '2021-05-11 04:36:05'),
(226, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:09', '2021-05-11 04:36:09'),
(227, 'default', 'Evoked Edit Category For Category ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:29', '2021-05-11 04:36:29'),
(228, 'default', 'Access Edit Category ID number 4 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:29', '2021-05-11 04:36:29'),
(229, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:33', '2021-05-11 04:36:33'),
(230, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:39', '2021-05-11 04:36:39'),
(231, 'default', 'Evoked Edit Category For Category ID number 5 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:49', '2021-05-11 04:36:49'),
(232, 'default', 'Access Edit Category ID number 5 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:49', '2021-05-11 04:36:49'),
(233, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:51', '2021-05-11 04:36:51'),
(234, 'default', 'Access Edit Category ID number 6 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:54', '2021-05-11 04:36:54'),
(235, 'default', 'Evoked Edit Category For Category ID number 6 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:36:59', '2021-05-11 04:36:59'),
(236, 'default', 'Access Edit Category ID number 6 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:37:00', '2021-05-11 04:37:00'),
(237, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:37:02', '2021-05-11 04:37:02'),
(238, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:37:06', '2021-05-11 04:37:06'),
(239, 'default', 'Evoked Edit Category For Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:37:59', '2021-05-11 04:37:59'),
(240, 'default', 'Access Edit Category ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:37:59', '2021-05-11 04:37:59'),
(241, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:05', '2021-05-11 04:38:05'),
(242, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:10', '2021-05-11 04:38:10'),
(243, 'default', 'Evoked Edit Category For Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:41', '2021-05-11 04:38:41'),
(244, 'default', 'Access Edit Category ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:41', '2021-05-11 04:38:41'),
(245, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:45', '2021-05-11 04:38:45'),
(246, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:38:49', '2021-05-11 04:38:49'),
(247, 'default', 'Evoked Edit Category For Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:39:17', '2021-05-11 04:39:17'),
(248, 'default', 'Access Edit Category ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:39:17', '2021-05-11 04:39:17'),
(249, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:53:04', '2021-05-11 04:53:04'),
(250, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:53:07', '2021-05-11 04:53:07'),
(251, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:53:52', '2021-05-11 04:53:52'),
(252, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-11 04:53:55', '2021-05-11 04:53:55'),
(253, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:42:29', '2021-05-13 11:42:29'),
(254, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:43:32', '2021-05-13 11:43:32'),
(255, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:43:46', '2021-05-13 11:43:46'),
(256, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:44:01', '2021-05-13 11:44:01'),
(257, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:44:46', '2021-05-13 11:44:46'),
(258, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:45:30', '2021-05-13 11:45:30'),
(259, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:45:39', '2021-05-13 11:45:39'),
(260, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:48:58', '2021-05-13 11:48:58'),
(261, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:49:20', '2021-05-13 11:49:20'),
(262, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:51:07', '2021-05-13 11:51:07'),
(263, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:51:11', '2021-05-13 11:51:11'),
(264, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:51:11', '2021-05-13 11:51:11'),
(265, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:52:41', '2021-05-13 11:52:41'),
(266, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:52:53', '2021-05-13 11:52:53'),
(267, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 11:52:53', '2021-05-13 11:52:53'),
(268, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:39:51', '2021-05-13 12:39:51'),
(269, 'default', 'Add Slider Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:40:02', '2021-05-13 12:40:02'),
(270, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:40:07', '2021-05-13 12:40:07'),
(271, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:41:33', '2021-05-13 12:41:33'),
(272, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:41:37', '2021-05-13 12:41:37'),
(273, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:56:10', '2021-05-13 12:56:10'),
(274, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:56:30', '2021-05-13 12:56:30'),
(275, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 12:58:17', '2021-05-13 12:58:17'),
(276, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:05:05', '2021-05-13 13:05:05'),
(277, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:23:04', '2021-05-13 13:23:04'),
(278, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:23:14', '2021-05-13 13:23:14'),
(279, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:23:14', '2021-05-13 13:23:14'),
(280, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:26:12', '2021-05-13 13:26:12'),
(281, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:26:30', '2021-05-13 13:26:30'),
(282, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:27:23', '2021-05-13 13:27:23'),
(283, 'default', 'Edited Slider ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:27:31', '2021-05-13 13:27:31'),
(284, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:27:31', '2021-05-13 13:27:31'),
(285, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:27:37', '2021-05-13 13:27:37'),
(286, 'default', 'Edited Slider ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:28:05', '2021-05-13 13:28:05'),
(287, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:28:05', '2021-05-13 13:28:05'),
(288, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:28:10', '2021-05-13 13:28:10'),
(289, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:29:11', '2021-05-13 13:29:11'),
(290, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:29:48', '2021-05-13 13:29:48'),
(291, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:31:14', '2021-05-13 13:31:14'),
(292, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:31:43', '2021-05-13 13:31:43'),
(293, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:32:30', '2021-05-13 13:32:30'),
(294, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:32:30', '2021-05-13 13:32:30'),
(295, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:32:36', '2021-05-13 13:32:36'),
(296, 'default', 'Edited Slider ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:33:06', '2021-05-13 13:33:06'),
(297, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:33:06', '2021-05-13 13:33:06'),
(298, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:33:09', '2021-05-13 13:33:09'),
(299, 'default', 'Edited Slider ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:33:57', '2021-05-13 13:33:57'),
(300, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:33:57', '2021-05-13 13:33:57'),
(301, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:35:32', '2021-05-13 13:35:32'),
(302, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:36:01', '2021-05-13 13:36:01'),
(303, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:36:10', '2021-05-13 13:36:10'),
(304, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:38:15', '2021-05-13 13:38:15'),
(305, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:38:38', '2021-05-13 13:38:38'),
(306, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:38:44', '2021-05-13 13:38:44'),
(307, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:39:32', '2021-05-13 13:39:32'),
(308, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:39:32', '2021-05-13 13:39:32'),
(309, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:39:47', '2021-05-13 13:39:47'),
(310, 'default', 'Edited Slider ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:39:59', '2021-05-13 13:39:59'),
(311, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:39:59', '2021-05-13 13:39:59'),
(312, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:03', '2021-05-13 13:40:03'),
(313, 'default', 'Edited Slider ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:22', '2021-05-13 13:40:22'),
(314, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:22', '2021-05-13 13:40:22'),
(315, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:38', '2021-05-13 13:40:38'),
(316, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:54', '2021-05-13 13:40:54'),
(317, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:40:54', '2021-05-13 13:40:54'),
(318, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:16', '2021-05-13 13:41:16'),
(319, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:16', '2021-05-13 13:41:16'),
(320, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:49', '2021-05-13 13:41:49'),
(321, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:51', '2021-05-13 13:41:51'),
(322, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:57', '2021-05-13 13:41:57'),
(323, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:41:58', '2021-05-13 13:41:58'),
(324, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:42:34', '2021-05-13 13:42:34'),
(325, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:43:23', '2021-05-13 13:43:23'),
(326, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:43:24', '2021-05-13 13:43:24'),
(327, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:43:31', '2021-05-13 13:43:31'),
(328, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:43:31', '2021-05-13 13:43:31'),
(329, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:44:06', '2021-05-13 13:44:06'),
(330, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:44:06', '2021-05-13 13:44:06'),
(331, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:44:38', '2021-05-13 13:44:38'),
(332, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:44:46', '2021-05-13 13:44:46'),
(333, 'default', 'Edited Slider ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:45:11', '2021-05-13 13:45:11'),
(334, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:45:11', '2021-05-13 13:45:11'),
(335, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:45:36', '2021-05-13 13:45:36'),
(336, 'default', 'Edited Slider ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:46:23', '2021-05-13 13:46:23'),
(337, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 13:46:23', '2021-05-13 13:46:23'),
(338, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:15:29', '2021-05-13 14:15:29'),
(339, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:15:54', '2021-05-13 14:15:54'),
(340, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:16', '2021-05-13 14:17:16'),
(341, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:16', '2021-05-13 14:17:16'),
(342, 'default', 'Edited Slider ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:33', '2021-05-13 14:17:33'),
(343, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:33', '2021-05-13 14:17:33'),
(344, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:34', '2021-05-13 14:17:34'),
(345, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:40', '2021-05-13 14:17:40'),
(346, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:41', '2021-05-13 14:17:41'),
(347, 'default', 'Edited Slider ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:53', '2021-05-13 14:17:53'),
(348, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:53', '2021-05-13 14:17:53'),
(349, 'default', 'Accessed Page Slider With number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:54', '2021-05-13 14:17:54'),
(350, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:57', '2021-05-13 14:17:57'),
(351, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:17:58', '2021-05-13 14:17:58'),
(352, 'default', 'Edited Slider ID number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:13', '2021-05-13 14:18:13'),
(353, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:13', '2021-05-13 14:18:13'),
(354, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:14', '2021-05-13 14:18:14'),
(355, 'default', 'Accessed All Sliders Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:22', '2021-05-13 14:18:22'),
(356, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:30', '2021-05-13 14:18:30'),
(357, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:30', '2021-05-13 14:18:30'),
(358, 'default', 'Accessed Page Slider With number 3 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:18:54', '2021-05-13 14:18:54'),
(359, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:20:52', '2021-05-13 14:20:52'),
(360, 'default', 'Accessed Page Slider With number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:20:53', '2021-05-13 14:20:53'),
(361, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:41:04', '2021-05-13 14:41:04');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `causer_type`, `causer_id`, `properties`, `created_at`, `updated_at`) VALUES
(362, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:42:34', '2021-05-13 14:42:34'),
(363, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:42:34', '2021-05-13 14:42:34'),
(364, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:42:39', '2021-05-13 14:42:39'),
(365, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:42:44', '2021-05-13 14:42:44'),
(366, 'default', 'Evoked Edit Product For Product ID number 15 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:43:06', '2021-05-13 14:43:06'),
(367, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:43:06', '2021-05-13 14:43:06'),
(368, 'default', 'Evoked Edit Product For Product ID number 15 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:43:12', '2021-05-13 14:43:12'),
(369, 'default', 'Access Edit Product ID number 15 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:43:12', '2021-05-13 14:43:12'),
(370, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:43:37', '2021-05-13 14:43:37'),
(371, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:44:24', '2021-05-13 14:44:24'),
(372, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:44:24', '2021-05-13 14:44:24'),
(373, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:45:29', '2021-05-13 14:45:29'),
(374, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:45:29', '2021-05-13 14:45:29'),
(375, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:46:39', '2021-05-13 14:46:39'),
(376, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:46:39', '2021-05-13 14:46:39'),
(377, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:47:02', '2021-05-13 14:47:02'),
(378, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:47:26', '2021-05-13 14:47:26'),
(379, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:48:22', '2021-05-13 14:48:22'),
(380, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 14:48:23', '2021-05-13 14:48:23'),
(381, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-13 15:12:57', '2021-05-13 15:12:57'),
(382, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:28:41', '2021-05-14 07:28:41'),
(383, 'default', 'Accessed Add Blog Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:28:44', '2021-05-14 07:28:44'),
(384, 'default', 'Evoked an add Blog Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(385, 'default', 'Accessed Add Blog Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(386, 'default', 'Evoked an add Blog Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:44:32', '2021-05-14 07:44:32'),
(387, 'default', 'Accessed Add Blog Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 07:44:32', '2021-05-14 07:44:32'),
(388, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:20:34', '2021-05-14 12:20:34'),
(389, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:21:27', '2021-05-14 12:21:27'),
(390, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:22:41', '2021-05-14 12:22:41'),
(391, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:25:39', '2021-05-14 12:25:39'),
(392, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:26:09', '2021-05-14 12:26:09'),
(393, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:27:09', '2021-05-14 12:27:09'),
(394, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:28:05', '2021-05-14 12:28:05'),
(395, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:29:04', '2021-05-14 12:29:04'),
(396, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:34:54', '2021-05-14 12:34:54'),
(397, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:39:36', '2021-05-14 12:39:36'),
(398, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:39:49', '2021-05-14 12:39:49'),
(399, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:40:17', '2021-05-14 12:40:17'),
(400, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:40:19', '2021-05-14 12:40:19'),
(401, 'default', 'Accessed the all blogs page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:40:38', '2021-05-14 12:40:38'),
(402, 'default', 'Accessed Edit Blog For Blog ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:40:39', '2021-05-14 12:40:39'),
(403, 'default', 'Accessed Add Blog Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:40:59', '2021-05-14 12:40:59'),
(404, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:50:46', '2021-05-14 12:50:46'),
(405, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:50:49', '2021-05-14 12:50:49'),
(406, 'default', 'Accessed Edit Banner ID number 2 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:51:03', '2021-05-14 12:51:03'),
(407, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:52:56', '2021-05-14 12:52:56'),
(408, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:53:44', '2021-05-14 12:53:44'),
(409, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:53:54', '2021-05-14 12:53:54'),
(410, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:54:39', '2021-05-14 12:54:39'),
(411, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:57:43', '2021-05-14 12:57:43'),
(412, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:57:58', '2021-05-14 12:57:58'),
(413, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:57:58', '2021-05-14 12:57:58'),
(414, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:58:24', '2021-05-14 12:58:24'),
(415, 'default', 'Evoked Edit Banner For Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:58:56', '2021-05-14 12:58:56'),
(416, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:58:56', '2021-05-14 12:58:56'),
(417, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 12:59:25', '2021-05-14 12:59:25'),
(418, 'default', 'Evoked an update Settings Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:00:02', '2021-05-14 13:00:02'),
(419, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:00:05', '2021-05-14 13:00:05'),
(420, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:02:26', '2021-05-14 13:02:26'),
(421, 'default', 'Accessed All Banners', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:02:28', '2021-05-14 13:02:28'),
(422, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:02:31', '2021-05-14 13:02:31'),
(423, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:02:52', '2021-05-14 13:02:52'),
(424, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:04:23', '2021-05-14 13:04:23'),
(425, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 13:05:52', '2021-05-14 13:05:52'),
(426, 'default', 'Accessed Edit Banner ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 15:54:50', '2021-05-14 15:54:50'),
(427, 'default', 'Accessed the color Variations page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 15:54:59', '2021-05-14 15:54:59'),
(428, 'default', 'Accessed the color Variations page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-14 15:55:18', '2021-05-14 15:55:18'),
(429, 'default', 'Accessed the size Variations page ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 02:59:58', '2021-05-15 02:59:58'),
(430, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:22:31', '2021-05-15 04:22:31'),
(431, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:26:09', '2021-05-15 04:26:09'),
(432, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:26:25', '2021-05-15 04:26:25'),
(433, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:27:15', '2021-05-15 04:27:15'),
(434, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:27:36', '2021-05-15 04:27:36'),
(435, 'default', 'User Accessed The Copyright Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:27:39', '2021-05-15 04:27:39'),
(436, 'default', 'User Accessed The Copyright Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:28:23', '2021-05-15 04:28:23'),
(437, 'default', 'User Accessed The Copyright Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:28:45', '2021-05-15 04:28:45'),
(438, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:29:25', '2021-05-15 04:29:25'),
(439, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:17', '2021-05-15 04:30:17'),
(440, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:22', '2021-05-15 04:30:22'),
(441, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:35', '2021-05-15 04:30:35'),
(442, 'default', 'Accessed The All FAQ Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:37', '2021-05-15 04:30:37'),
(443, 'default', 'Accessed The All FAQ Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:41', '2021-05-15 04:30:41'),
(444, 'default', 'Accessed FAQ Edit ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:48', '2021-05-15 04:30:48'),
(445, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:30:55', '2021-05-15 04:30:55'),
(446, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:18', '2021-05-15 04:31:18'),
(447, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:30', '2021-05-15 04:31:30'),
(448, 'default', 'Update o the copyright page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:32', '2021-05-15 04:31:32'),
(449, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:32', '2021-05-15 04:31:32'),
(450, 'default', 'Update o the copyright page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:43', '2021-05-15 04:31:43'),
(451, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:31:43', '2021-05-15 04:31:43'),
(452, 'default', 'Accessed The All FAQ Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 04:32:36', '2021-05-15 04:32:36'),
(453, 'default', 'Access The Terms and Conditions Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:01:08', '2021-05-15 05:01:08'),
(454, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:01:09', '2021-05-15 05:01:09'),
(455, 'default', 'Terms & Condition Added', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(456, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(457, 'default', 'Terms & Condition Added', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:02:30', '2021-05-15 05:02:30'),
(458, 'default', 'Access The Add  Terms and Conditions Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:02:31', '2021-05-15 05:02:31'),
(459, 'default', 'Accessed The All Privacy Privacy Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:04:48', '2021-05-15 05:04:48'),
(460, 'default', 'Access The Privacy Policy Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:04:50', '2021-05-15 05:04:50'),
(461, 'default', 'Access The Add Privacy Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:05:18', '2021-05-15 05:05:18'),
(462, 'default', 'Access The Privacy Policy Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:05:18', '2021-05-15 05:05:18'),
(463, 'default', 'User Accessed The Copyright Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 05:09:00', '2021-05-15 05:09:00'),
(464, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 08:05:43', '2021-05-15 08:05:43'),
(465, 'default', 'Access Edit Product ID number 1 ', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 08:05:46', '2021-05-15 08:05:46'),
(466, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 09:56:34', '2021-05-15 09:56:34'),
(467, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 09:57:16', '2021-05-15 09:57:16'),
(468, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 09:58:14', '2021-05-15 09:58:14'),
(469, 'default', 'Update Risk Declaration page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 09:58:33', '2021-05-15 09:58:33'),
(470, 'default', 'User Accessed The Risk Declaration Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2021-05-15 09:58:33', '2021-05-15 09:58:33'),
(471, 'default', 'Accessed All Products', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:26:47', '2022-06-06 10:26:47'),
(472, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:26:56', '2022-06-06 10:26:56'),
(473, 'default', 'User Accessed The About Section', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:27:08', '2022-06-06 10:27:08'),
(474, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:27:15', '2022-06-06 10:27:15'),
(475, 'default', 'User Accessed Site Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:27:37', '2022-06-06 10:27:37'),
(476, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:27:49', '2022-06-06 10:27:49'),
(477, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:29:09', '2022-06-06 10:29:09'),
(478, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 10:29:10', '2022-06-06 10:29:10'),
(479, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:08:05', '2022-06-06 11:08:05'),
(480, 'default', 'Accessed Add Category Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:10:44', '2022-06-06 11:10:44'),
(481, 'default', 'Evoked add Category Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:10:51', '2022-06-06 11:10:51'),
(482, 'default', 'Accessed Add Category Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:10:51', '2022-06-06 11:10:51'),
(483, 'default', 'Evoked add Category Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:10:58', '2022-06-06 11:10:58'),
(484, 'default', 'Accessed Add Category Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:10:58', '2022-06-06 11:10:58'),
(485, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:11:15', '2022-06-06 11:11:15'),
(486, 'default', 'Evoked a delete Categorgy Request', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:11:29', '2022-06-06 11:11:29'),
(487, 'default', 'Accessed All Categories', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:11:32', '2022-06-06 11:11:32'),
(488, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:13:26', '2022-06-06 11:13:26'),
(489, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:14:54', '2022-06-06 11:14:54'),
(490, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:14:55', '2022-06-06 11:14:55'),
(491, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:16:06', '2022-06-06 11:16:06'),
(492, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:16:06', '2022-06-06 11:16:06'),
(493, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:17:10', '2022-06-06 11:17:10'),
(494, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:17:10', '2022-06-06 11:17:10'),
(495, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:18:49', '2022-06-06 11:18:49'),
(496, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:18:50', '2022-06-06 11:18:50'),
(497, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:19:59', '2022-06-06 11:19:59'),
(498, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:20:00', '2022-06-06 11:20:00'),
(499, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:21:20', '2022-06-06 11:21:20'),
(500, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:21:21', '2022-06-06 11:21:21'),
(501, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:23:07', '2022-06-06 11:23:07'),
(502, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:23:07', '2022-06-06 11:23:07'),
(503, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:24:09', '2022-06-06 11:24:09'),
(504, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:24:09', '2022-06-06 11:24:09'),
(505, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:25:06', '2022-06-06 11:25:06'),
(506, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:25:06', '2022-06-06 11:25:06'),
(507, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:26:18', '2022-06-06 11:26:18'),
(508, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:26:18', '2022-06-06 11:26:18'),
(509, 'default', 'Evoked add Product Operation', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:27:27', '2022-06-06 11:27:27'),
(510, 'default', 'Accessed Add Product Page', NULL, NULL, 'App\\Models\\User', 1, '[]', '2022-06-06 11:27:27', '2022-06-06 11:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `b2b_api_response`
--

CREATE TABLE `b2b_api_response` (
  `b2bTransactionID` int(11) NOT NULL,
  `TransactionID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatorAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyAffectedAccountBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b2c_api_response`
--

CREATE TABLE `b2c_api_response` (
  `b2bID` int(11) NOT NULL,
  `TransactionReceipt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionAmount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CWorkingAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CUtilityAccountAvailableFunds` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionCompletedDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CChargesPaidAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CRecipientIsRegisteredCustomer` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `link_name`, `title`, `size`, `content`, `link`, `section`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shop Now', 'COLLECTION 2021', '425by680', 'Be The First To Grab This', 'http://localhost:8000/products/women', 'home_first', 'banner-12.jpg', NULL, NULL),
(2, 'Shop Now', '15 % OFF', '425 by 680', 'SEASONAL ESSENTIAL', NULL, 'home_second', 'banner-11.jpg', NULL, NULL),
(3, NULL, 'New Style', '920 by 740', 'New Collection', NULL, 'home_third', 'banner-13.jpg', NULL, NULL),
(4, 'Shop Now', '40% FREE', '920by740', NULL, NULL, 'home_fourth', 'banner-14.jpg', NULL, NULL),
(5, 'Shop Now', 'Amazing Brands', '920by740', 'At Throw Away Prices', NULL, 'home_fifth', 'banner-15.jpg', NULL, NULL),
(6, 'Shop Now', '- 70%', '920by740', 'Fashionable', NULL, 'home_sixth', 'banner-16.jpg', NULL, NULL),
(7, 'Shop Now', 'Spring in Style', '960by555', 'Run collection', NULL, 'home_seventh', 'banner-layout-5.jpg', NULL, NULL),
(8, 'Shop Now', 'OASIS', '960by555', 'Even the<span>hottest</span> day wont’t slow you down', NULL, 'home_eighth', 'banner-layout-6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `active`, `slung`, `title`, `tags`, `video`, `meta`, `content`, `author`, `category`, `image_one`, `image_two`, `image_three`, `image_four`, `created_at`, `updated_at`) VALUES
(1, 1, 'history-so-far', 'History so far', NULL, NULL, 'Aspernatur eos debitis vero quas quis itaque omnis nemo repellat accusamus expedita id ex, provident velit illo dolorum ducimus, aut totam veritatis error fuga ratione, fugiat quasi nesciunt maiores. Esse odit maxime optio tempore?', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '3', '2021-05-1410:30:56imageblog-single-post-02.jpg', NULL, NULL, NULL, '2021-05-14 07:30:56', '2021-05-14 07:30:56'),
(2, 1, 'maxime-veniam-non', 'Maxime veniam non', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '4', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-15 07:44:32', '2021-05-14 07:44:32'),
(5, 3, 'maxime-veniam-noon', 'Maxime veniam noon', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\r\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\r\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\r\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '3', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-16 07:44:32', '2021-05-14 07:44:32'),
(6, 3, 'maxiime-veniam-noon', 'Maxiime veniam noon', 'Stock', NULL, 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', '<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself.</p>\r\n                            <p>Because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee.</p>\r\n                            <p class=\"blockquote\">Unless you’re a still-scarred alum of finishing school, you’ve probably considered a tattoo at one point or another. The former calling card of sailors, punks and rebellious teens has become a hallmark of style setting in 2015—so much so that we’ve seen its impact everywhere from runways to the streets outside fashion week.</p>\r\n                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>', 'Admin', '4', '2021-05-1410:44:32imageblog-single-post-03.jpg', NULL, NULL, NULL, '2021-05-17 07:44:32', '2021-05-14 07:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slung`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dresses', 'dresses', '<p>Decription</p>', 'product-7-2.jpg', '2021-05-10 14:29:20', '2021-05-10 14:29:20'),
(2, 'Sandals', 'sandals', NULL, 'product-men-6.jpg', '2021-05-11 02:02:46', '2021-05-11 02:02:46'),
(3, 'Accessories', 'accessories', NULL, 'product-women-4.jpg', '2021-05-11 02:03:29', '2021-05-11 02:03:29'),
(4, 'Bags', 'bags', NULL, 'product-women-6.jpg', '2021-05-11 02:03:54', '2021-05-11 02:03:54'),
(6, 'Women', 'women', NULL, 'product-20-1.jpg', '2021-05-11 02:04:15', '2021-05-11 02:04:15'),
(7, 'Shoes', 'shoes', NULL, '0', '2022-06-06 11:10:51', '2022-06-06 11:10:51'),
(8, 'Unisex', 'unisex', NULL, '0', '2022-06-06 11:10:58', '2022-06-06 11:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'anonymous ',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `status`, `post_id`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'John Kirimi', 1, 1, 'kirimijg@gmail.com', 'This is a sample comment', '2021-05-14 08:55:24', '2021-05-14 08:55:24'),
(2, 'Albert  Muhatia', 1, 1, 'nektatech@gmail.com', 'Another Comment', '2021-05-14 08:58:01', '2021-05-14 08:58:01'),
(3, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'This is a sample', '2021-05-14 08:58:58', '2021-05-14 08:58:58'),
(4, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'asas', '2021-05-14 08:59:56', '2021-05-14 08:59:56'),
(5, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'aaa', '2021-05-14 09:00:25', '2021-05-14 09:00:25'),
(6, 'Albert  Muhatia', 0, 1, 'nektatech@gmail.com', 'aaa', '2021-05-14 09:00:29', '2021-05-14 09:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Copyright Statement',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `copyrights`
--

INSERT INTO `copyrights` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Copyright Statement', 'The copyright statement goes here\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slung`, `meta`, `content`, `icon`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, '1st Time Learner Approach(With Live Examples)', '1st-time-learner-approachwith-live-examples', 'Beginners course for understanding the financial market(ideal for new traders)', '<ul>\n<li>One of the industry leaders</li>\n<li>Advanced risk management</li>\n<li>Award-winning customer service*</li>\n<li>Low minimum deposit</li>\n</ul>', 'in-section-profit-13a.png', 'in-section-profit-13a.png', 400, '2021-04-16 04:00:00', '2021-04-16 04:00:00'),
(2, '3 Simple Strategies: Beginner to Pro Approach(With Live Examples)', '3-simple-strategies-beginner-to-pro-approachwith-live-examples', 'Receive even deeper knowledge for deeper understanding of the financial markets', '<ul>\n<li>One of the industry leaders</li>\n<li>Advanced risk management</li>\n<li>Award-winning customer service*</li>\n<li>Low minimum deposit</li>\n</ul>', 'in-section-profit-13b.png', 'in-section-profit-13b.png', 600, '2021-04-16 04:00:00', '2021-04-16 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_basic_profiles`
--

CREATE TABLE `dymantic_instagram_basic_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dymantic_instagram_basic_profiles`
--

INSERT INTO `dymantic_instagram_basic_profiles` (`id`, `username`, `created_at`, `updated_at`) VALUES
(1, 'aste.co.ke', '2022-06-05 07:42:59', '2022-06-05 07:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `dymantic_instagram_feed_tokens`
--

CREATE TABLE `dymantic_instagram_feed_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `access_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dymantic_instagram_feed_tokens`
--

INSERT INTO `dymantic_instagram_feed_tokens` (`id`, `profile_id`, `access_code`, `username`, `user_id`, `user_fullname`, `user_profile_picture`, `created_at`, `updated_at`) VALUES
(1, 1, 'IGQVJXbGZAOaXNUOTJReU5WMXBNYnVSdjdxSWR2eFBwNVN1blFzT2gwM1RVOHhxR01ReC01RDdrNW5VUGNkUG5IN2hfWGxCcFRRc1YyY1RoVUVPc2N0MExtSkw0VjVRN0lNR3B0bWVB', 'aste.co.ke', '7722342604472737', 'not available', 'not available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_status` tinyint(4) NOT NULL DEFAULT '0',
  `email_body` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `slung`, `category`, `meta`, `content`, `created_at`, `updated_at`) VALUES
(1, 'How Write FAQs One', 'how-write-faqs-one', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(2, 'How Write FAQs two', 'how-write-faqs-two', '5', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(3, 'How Write FAQs Three', 'how-write-faqs-three', '4', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(4, 'How Write FAQs Four', 'how-write-faqs-four', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(5, 'How Write FAQs Five', 'how-write-faqs-five', '6', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(6, 'How Write FAQs Six', 'how-write-faqs-six', '3', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(7, 'How Write FAQs Seven', 'how-write-faqs-seven', '2', 'Excepteur sint occaecat cupidatat non proident sunt et expedita', '<p>Excepteur sint occaecat cupidatat non proident sunt et expedita. Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita .Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita Excepteur sint occaecat cupidatat non proident sunt et expedita</p>', '2021-04-13 04:00:00', '2021-04-13 04:00:00'),
(9, 'Test FAQ', 'test-faq', '3', 'This is a test FAQ Meta Infomation', '<p>This is a test FAQ Meta description</p>', '2021-04-13 17:45:29', '2021-04-13 17:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `hows`
--

CREATE TABLE `hows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hows`
--

INSERT INTO `hows` (`id`, `title`, `slung`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Register', 'instruction-one', 'Choose your option/level depending on your know how in the financial markets', NULL, '2021-04-14 11:03:15', '2021-04-14 11:03:15'),
(2, 'Fund', 'instruction-two', 'Fund your account using a wide range of funding methods.', NULL, '2021-04-14 11:03:46', '2021-04-14 11:03:46'),
(3, 'Learn', 'instructions-three', 'Get Access to a liftime account with 100+ practical tutorials on financial markets', NULL, '2021-04-14 11:03:56', '2021-04-14 11:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `code` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `price` double NOT NULL,
  `status` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `address`, `price`, `status`, `product`, `ip`) VALUES
(27, 'iYBCr1l16eaIoJ9ei3g2Fyuqs', 'HTTP/1.1 401 Unauthorized\n', 58.6, -1, 4, '154.152.205.154'),
(28, 'T4XJ2VQ91q4FY5OshEWBt4LGJ', '18xREniiKGFg9KPNnwKhSgPPjAcuu6nH7V', 400, -1, 1, '154.152.205.154'),
(29, 'koBfTucsUeYAFii7ehdMDSpEY', '1773nBXJVFT96kJyFEqp9Pfw1bt87rcUiH', 400, -1, 1, '154.152.205.154');

-- --------------------------------------------------------

--
-- Table structure for table `lnmo_api_response`
--

CREATE TABLE `lnmo_api_response` (
  `lnmoID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MpesaReceiptNumber` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionDate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `name`, `email`, `content`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, 'qeqe', 'Albert  Muhatia', 'nektatech@gmail.com', 'sfqd', NULL, 0, '2021-05-15 05:52:26', '2021-05-15 05:52:26'),
(2, 'qeqe', 'Albert  Muhatia', 'nektatech@gmail.com', 'sfqd', NULL, 0, '2021-05-15 05:52:34', '2021-05-15 05:52:34'),
(3, 'Test Contact Form', 'Mark Khamala', 'pilgrimmministry19@gmail.com', 'dsfsf', NULL, 0, '2021-05-15 05:54:04', '2021-05-15 05:54:04'),
(4, 'aaa', 'Albert  Muhatia', 'nektatech@gmail.com', 'aa', NULL, 0, '2021-05-15 06:00:12', '2021-05-15 06:00:12'),
(5, 'asasa', 'Albert  Muhatia', 'nektatech@gmail.com', 'sasasa', NULL, 0, '2021-05-15 06:02:27', '2021-05-15 06:02:27'),
(6, 'Sample Message', 'Albert  Muhatia', 'nektatech@gmail.com', 'This is a sample', NULL, 0, '2021-05-15 06:07:19', '2021-05-15 06:07:19'),
(7, 'Test Subject', 'Albert  Muhatia', 'nektatech@gmail.com', 'This is a test contact form', NULL, 0, '2021-05-15 06:15:13', '2021-05-15 06:15:13');

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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2021_04_21_072753_create__credentials_table', 1),
(30, '2021_04_21_072753_create__site_settings_table', 1),
(31, '2021_04_21_072753_create_abouts_table', 1),
(32, '2021_04_21_072753_create_accountbalance_table', 1),
(33, '2021_04_21_072753_create_activity_log_table', 1),
(34, '2021_04_21_072753_create_b2b_api_response_table', 1),
(35, '2021_04_21_072753_create_b2c_api_response_table', 1),
(36, '2021_04_21_072753_create_banners_table', 1),
(37, '2021_04_21_072753_create_blogs_table', 1),
(38, '2021_04_21_072753_create_categories_table', 1),
(39, '2021_04_21_072753_create_comments_table', 1),
(40, '2021_04_21_072753_create_copyright_table', 1),
(41, '2021_04_21_072753_create_copyrights_table', 1),
(42, '2021_04_21_072753_create_email_settings_table', 1),
(43, '2021_04_21_072753_create_lnmo_api_response_table', 1),
(44, '2021_04_21_072753_create_messages_table', 1),
(45, '2021_04_21_072753_create_mobile_payments_table', 1),
(46, '2021_04_21_072753_create_notifications_table', 1),
(47, '2021_04_21_072753_create_password_resets_table', 1),
(48, '2021_04_21_072753_create_post_views_table', 1),
(49, '2021_04_21_072753_create_privacies_table', 1),
(50, '2021_04_21_072753_create_reverse_transaction_table', 1),
(51, '2021_04_21_072753_create_sessions_table', 1),
(52, '2021_04_21_072753_create_terms_table', 1),
(53, '2021_04_21_072753_create_testimonials_table', 1),
(54, '2021_04_21_072753_create_transaction_status_table', 1),
(57, '2021_05_10_160949_create_products_table', 2),
(58, '2021_05_14_161035_create_variations_table', 3),
(59, '2021_05_15_132551_create_reviews_table', 4),
(60, '2022_06_05_103340_create_instagram_basic_profile_table', 5),
(61, '2022_06_05_103340_create_instagram_feed_token_table', 5),
(62, '2022_06_05_111513_create__credentials_table', 0),
(63, '2022_06_05_111513_create__site_settings_table', 0),
(64, '2022_06_05_111513_create_abouts_table', 0),
(65, '2022_06_05_111513_create_accountbalance_table', 0),
(66, '2022_06_05_111513_create_activity_log_table', 0),
(67, '2022_06_05_111513_create_b2b_api_response_table', 0),
(68, '2022_06_05_111513_create_b2c_api_response_table', 0),
(69, '2022_06_05_111513_create_banners_table', 0),
(70, '2022_06_05_111513_create_blogs_table', 0),
(71, '2022_06_05_111513_create_cart_storage_table', 0),
(72, '2022_06_05_111513_create_categories_table', 0),
(73, '2022_06_05_111513_create_comments_table', 0),
(74, '2022_06_05_111513_create_copyright_table', 0),
(75, '2022_06_05_111513_create_copyrights_table', 0),
(76, '2022_06_05_111513_create_courses_table', 0),
(77, '2022_06_05_111513_create_dymantic_instagram_basic_profiles_table', 0),
(78, '2022_06_05_111513_create_dymantic_instagram_feed_tokens_table', 0),
(79, '2022_06_05_111513_create_email_settings_table', 0),
(80, '2022_06_05_111513_create_failed_jobs_table', 0),
(81, '2022_06_05_111513_create_faq_table', 0),
(82, '2022_06_05_111513_create_hows_table', 0),
(83, '2022_06_05_111513_create_invoices_table', 0),
(84, '2022_06_05_111513_create_lnmo_api_response_table', 0),
(85, '2022_06_05_111513_create_messages_table', 0),
(86, '2022_06_05_111513_create_mobile_payments_table', 0),
(87, '2022_06_05_111513_create_notifications_table', 0),
(88, '2022_06_05_111513_create_orders_table', 0),
(89, '2022_06_05_111513_create_password_resets_table', 0),
(90, '2022_06_05_111513_create_payments_table', 0),
(91, '2022_06_05_111513_create_post_views_table', 0),
(92, '2022_06_05_111513_create_privacies_table', 0),
(93, '2022_06_05_111513_create_products_table', 0),
(94, '2022_06_05_111513_create_reverse_transaction_table', 0),
(95, '2022_06_05_111513_create_reviews_table', 0),
(96, '2022_06_05_111513_create_sessions_table', 0),
(97, '2022_06_05_111513_create_sliders_table', 0),
(98, '2022_06_05_111513_create_terms_table', 0),
(99, '2022_06_05_111513_create_testimonials_table', 0),
(100, '2022_06_05_111513_create_transaction_status_table', 0),
(101, '2022_06_05_111513_create_users_table', 0),
(102, '2022_06_05_111513_create_variations_table', 0),
(103, '2022_06_06_105824_create_rates_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `TransactionType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransTime` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BillRefNumber` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceNumber` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrgAccountBalance` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThirdPartyTransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSISDN` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice` varchar(256) NOT NULL,
  `ip` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `txid` varchar(256) NOT NULL,
  `addr` varchar(256) NOT NULL,
  `value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `titleslug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', '<p>Introduction to privacy policy</p>', '2021-05-15 05:05:18', '2021-05-15 05:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0',
  `trending` tinyint(4) NOT NULL DEFAULT '1',
  `banner_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'In Stock',
  `price_raw` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `pro_condition`, `slung`, `video`, `category`, `featured`, `trending`, `banner_position`, `sku`, `stock`, `price_raw`, `price`, `meta`, `content`, `image_one`, `image_two`, `image_three`, `created_at`, `updated_at`) VALUES
(1, 'LACE BACK MINI DRESS', 'New', 'lace-back-mini-dress', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'SKU-1', 'In Stock', '129', '129', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-20-1.jpg', 'product-20-2.jpg', '0', '2021-05-10 14:39:39', '2021-05-10 14:39:39'),
(2, 'MESH BODYCON DRESS', 'New', 'mesh-bodycon-dress', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'SKU-2', 'In Stock', '130', '130', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-25.jpg', '0', '0', '2021-05-11 01:54:27', '2021-05-11 01:54:27'),
(3, 'LONGLINE ASYMMETRIC MIDI SKIRT', 'New', 'longline-asymmetric-midi-skirt', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'SKU-3', 'Out of Stock', '189', '189', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-10.jpg', '0', '0', '2021-05-11 02:01:11', '2021-05-11 02:01:11'),
(4, 'FLORAL SLEEVELESS DRESS', 'New', 'floral-sleeveless-dress', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'SKU-4', 'In Stock', '176', '176', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-17.jpg', '0', '0', '2021-05-11 02:02:30', '2021-05-11 02:02:30'),
(5, 'LONG SLEEVE OVERALL', 'New', 'long-sleeve-overall', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'SKU-5', 'In Stock', '139', '139', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-16-c1.jpg', '0', '0', '2021-05-11 02:06:43', '2021-05-11 02:06:43'),
(6, 'GREY T-SHIRT FASHION SPORTEX', 'New', 'grey-t-shirt-fashion-sportex', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 1, 0, NULL, 'SKU-6', 'In Stock', '145', '145', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-26.jpg', '0', '0', '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(7, 'ATHLETIC T-SHIRT', 'New', 'athletic-t-shirt', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 1, 0, NULL, 'SKU-7', 'In Stock', '123', '123', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-27.jpg', '0', '0', '2021-05-11 02:21:28', '2021-05-11 02:21:28'),
(9, 'FASHION COTTON JACKETS', 'New', 'fashion-cotton-jackets', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 1, 0, NULL, 'FAS-21954918', 'In Stock', '104', '104', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-9.jpg', '0', '0', '2021-05-11 02:34:37', '2021-05-11 02:34:37'),
(11, 'STYLE DOME MEN\'S SOLID RED COLOR', 'New', 'style-dome-mens-solid-red-color', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 1, 0, NULL, 'STY-61520769', 'In Stock', '165', '165', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-13.jpg', '0', '0', '2021-05-11 02:39:33', '2021-05-11 02:39:33'),
(12, 'VERTICAL STRIPE SHIFT DRESS', 'New', 'vertical-stripe-shift-dress', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 1, 0, NULL, 'VER-68457731', 'In Stock', '125', '125', 'This is a sample Meta description', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-14.jpg', 'product-14-1.jpg', 'product-14-1.jpg', '2021-05-11 02:41:38', '2021-05-11 02:41:38'),
(13, 'BOYFRIEND SHORTS DENIM', 'New', 'boyfriend-shorts-denim', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '6', 1, 0, NULL, 'BOY-89739413', 'In Stock', '89', '89', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-11.jpg', '0', '0', '2021-05-11 02:42:23', '2021-05-11 02:42:23'),
(14, 'GREY T-SHIRT FASHION SPORTEX', 'New', 'grey-t-shirt-fashion-sportex', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 1, 0, NULL, 'SKU-6', 'In Stock', '145', '145', 'dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-26.jpg', '0', '0', '2021-05-11 02:17:08', '2021-05-11 02:17:08'),
(15, 'Boyfriend Short', 'New', 'boyfriend-short', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '3', 0, 1, NULL, 'BOY-35964930', 'In Stock', '149', '149', 'Neque porro quisquam est, qui dolorem ipsum quia', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-1.jpg', 'product-1-1.jpg', 'product-1-2.jpg', '2021-05-13 14:42:34', '2021-05-13 14:42:34'),
(16, 'Floral Print Top', 'New', 'floral-print-top', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '1', 0, 1, NULL, 'FLO-61680225', 'In Stock', '190', '190', 'Tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-2.jpg', '0', '0', '2021-05-13 14:44:24', '2021-05-13 14:44:24'),
(17, 'Strap Pink Top', 'New', 'strap-pink-top', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '6', 0, 1, NULL, 'STR-78365924', 'In Stock', '99', '99', 'Consectetur, adipisci velit', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-3.jpg', '0', '0', '2021-05-13 14:45:29', '2021-05-13 14:45:29'),
(18, 'Denim Jacket', 'New', 'denim-jacket', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '3', 0, 1, NULL, 'DEN-93565011', 'In Stock', '390', '390', 'Neque porro quisquam est qui', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-4.jpg', '0', '0', '2021-05-13 14:46:39', '2021-05-13 14:46:39'),
(19, 'Boys Flex Hat', 'New', 'boys-flex-hat', 'http://www.youtube.com/watch?v=qZeeMm35LXo', '5', 0, 1, NULL, 'BOY-32959360', 'In Stock', '49', '49', 'Modi tempora incidunt ut labore', ' <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>\n                        <div class=\"table-responsive\">\n                            <table class=\"table table-bordered table-striped\">\n                                <tbody>\n                                    <tr>\n                                        <td><strong>PROOF</strong></td>\n                                        <td>PDF Proof</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SAMPLES</strong></td>\n                                        <td>Digital, Printed</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WRAPPING</strong></td>\n                                        <td>Yes, No</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>UV GLOSS COATING</strong></td>\n                                        <td>Yes</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>SHRINK WRAPPING</strong></td>\n                                        <td>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</td>\n                                    </tr>\n                                    <tr>\n                                        <td><strong>WEIGHT</strong></td>\n                                        <td>0.05, 0.06, 0.07ess cards</td>\n                                    </tr>\n                                </tbody>\n                            </table>\n                        </div>', 'product-6.jpg', '0', '0', '2021-05-13 14:48:23', '2021-05-13 14:48:23'),
(20, 'Bucket bag', 'New', 'bucket-bag', NULL, '4', 0, 1, NULL, 'BUC-75481680', NULL, '3500', '3500', 'Bucket bag', NULL, 'product-1-1.jpg', '0', '0', '2022-06-06 11:14:55', '2022-06-06 11:14:55'),
(21, 'Silk-blend kaftan', 'New', 'silk-blend-kaftan', NULL, '1', 0, 1, NULL, 'SIL-41879502', NULL, '6500', '5500', 'Silk-blend kaftan', NULL, 'product-10-1.jpg', '0', '0', '2022-06-06 11:16:06', '2022-06-06 11:16:06'),
(22, 'Linen-blend jumpsuit', 'New', 'linen-blend-jumpsuit', NULL, '6', 0, 1, NULL, 'LIN-26214054', NULL, '9000', '9000', 'Linen-blend jumpsuit', NULL, 'product-2-1.jpg', '0', '0', '2022-06-06 11:17:10', '2022-06-06 11:17:10'),
(23, 'Sandals', 'New', 'sandals', NULL, '2', 0, 1, NULL, 'SAN-10196233', NULL, '3890', '3890', 'Sandals', NULL, 'product-3-1.jpg', '0', '0', '2022-06-06 11:18:49', '2022-06-06 11:18:49'),
(24, 'Hand Bags', 'New', 'hand-bags', NULL, '4', 0, 1, NULL, 'HAN-05849618', NULL, '5600', '5600', 'Sandals', NULL, 'product-4-1.jpg', '0', '0', '2022-06-06 11:20:00', '2022-06-06 11:20:00'),
(25, 'Black Jump Suit', 'New', 'black-jump-suit', NULL, '1', 0, 1, NULL, 'BLA-22839153', NULL, '6000', '6000', 'Black Jump Suit', NULL, 'product-5-1.jpg', '0', '0', '2022-06-06 11:21:20', '2022-06-06 11:21:20'),
(26, 'Sandals with lacing', 'New', 'sandals-with-lacing', NULL, '2', 0, 1, NULL, 'SAN-80353427', NULL, '7500', '6500', 'Sandals with lacing', NULL, 'product-6-1.jpg', '0', '0', '2022-06-06 11:23:07', '2022-06-06 11:23:07'),
(27, 'Paper bag trousers', 'New', 'paper-bag-trousers', NULL, '1', 0, 1, NULL, 'PAP-82101856', NULL, '6800', '6800', 'Paper bag trousers', NULL, 'product-7-1.jpg', '0', '0', '2022-06-06 11:24:09', '2022-06-06 11:24:09'),
(28, 'Yellow Bucket bag', 'New', 'yellow-bucket-bag', NULL, '4', 0, 1, NULL, 'YEL-73946253', NULL, '5600', '5600', 'Yellow Bucket bag', NULL, 'product-9-1.jpg', '0', '0', '2022-06-06 11:25:06', '2022-06-06 11:25:06'),
(29, 'Silk-blend kaftan', 'New', 'silk-blend-kaftan', NULL, '1', 0, 1, NULL, 'SIL-53871850', NULL, '8600', '8600', 'Silk-blend kaftan', NULL, 'product-10-1.jpg', '0', '0', '2022-06-06 11:26:18', '2022-06-06 11:26:18'),
(30, 'Open Sandals', 'New', 'open-sandals', NULL, '2', 0, 1, NULL, 'OPE-31803158', NULL, '8900', '8900', 'Open Sandals', NULL, 'product-12-1.jpg', '0', '0', '2022-06-06 11:27:27', '2022-06-06 11:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `currency`, `symbol`, `rates`, `created_at`, `updated_at`) VALUES
(1, 'USD', '$', '0.008821', '2021-12-15 06:28:49', '2021-12-15 06:28:59'),
(2, 'EUR', '€', '0.007824', '2021-12-15 06:28:54', '2021-12-15 06:29:03'),
(3, 'GBP', '£', '0.006662', '2021-12-15 06:29:12', '2021-12-15 06:29:08'),
(4, 'KES', 'Ksh', '1', '2021-12-15 07:06:30', '2021-12-15 07:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `reverse_transaction`
--

CREATE TABLE `reverse_transaction` (
  `transactionstatusID` int(11) NOT NULL,
  `DebitAccountBalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginalTransactionID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Charge` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `product_id`, `content`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'info@designekta.com', '1', 'Sample Review Here', '5', '2021-05-15 10:35:53', '2021-05-15 10:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `text4` text COLLATE utf8mb4_unicode_ci,
  `text5` text COLLATE utf8mb4_unicode_ci,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `type`, `text1`, `text2`, `text3`, `text4`, `text5`, `action`, `action_name`, `thumbnail`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Asté', 'Season sale', 'popular brands', '70%', 'OFF', 'http://localhost:8000/', 'Shop Now', 'slide-02-thumb.png', 'slide-02.jpg', '2021-04-05 00:19:29', '2021-04-05 00:19:29'),
(2, '2', 'Street', 'Fashion', 'And', 'Urban', 'Subcultures', 'http://localhost:8000/products', 'SHOP NOW', 'slide-03-thumb.png', 'slide-03.jpg', '2021-04-05 00:27:47', '2021-04-05 00:27:47'),
(3, '3', 'Asté', '<strong>New</strong> collection', 'WOMEN\'S <strong>FASHION</strong>', NULL, NULL, 'http://localhost:8000/products', 'MORE', 'slide-01-thumb.png', 'slide-01.jpg', '2021-04-09 17:29:14', '2021-04-09 17:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', '<p>This is an introduction to terms and conditions</p>', '2021-05-15 05:01:29', '2021-05-15 05:01:29'),
(2, '!st Terms and Condition', '<p>Test Terms and Conditions</p>', '2021-05-15 05:02:30', '2021-05-15 05:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_status`
--

CREATE TABLE `transaction_status` (
  `transactionStatusID` int(11) NOT NULL,
  `ReceiptNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConversationID` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FinalisedTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionStatus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReasonType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DebitAccountType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatedTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginatorConversationID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyCharges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT '0',
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `country`, `status`, `image`, `mobile`, `address`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, 1, NULL, NULL, NULL, 'info@aste-aste.com', NULL, '$2y$10$I5zIKS6WaGMp9Bgig.wAZujRmPRKAydAReNeV2o4ltSZlWIeHgnRG', NULL, '2021-05-10 12:27:10', '2021-05-10 12:27:10'),
(2, 'User', 0, NULL, 1, NULL, NULL, NULL, 'user@itsolutionstuff.com', NULL, '$2y$10$Q9I.SQZgUeXnsWzcoY8m4.89.CKqjoLB5YHwZdFewCjB9h5BZgNhu', NULL, '2021-05-10 12:27:10', '2021-05-10 12:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `type`, `status`, `image`, `value`, `price`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'color', '1', '2021-05-1505:53:57imageproduct-color-red.jpg', 'Red', '130', '2', '2021-05-14 16:20:55', '2021-05-14 16:20:55'),
(2, 'color', '1', '2021-05-1505:54:55imageproduct-color-green.jpg', 'Green', '130', '2', '2021-05-15 02:17:25', '2021-05-15 02:17:25'),
(3, 'color', '1', '2021-05-1505:55:10imageproduct-color-violet.jpg', 'Violet', '130', '2', '2021-05-15 02:18:06', '2021-05-15 02:18:06'),
(4, 'color', '1', '2021-05-1505:55:57imageproduct-color-grey.jpg', 'Grey', '130', '2', '2021-05-15 02:18:33', '2021-05-15 02:18:33'),
(5, 'color', '1', '2021-05-1505:56:30imageproduct-color-blue.jpg', 'Blue', '130', '2', '2021-05-15 02:19:18', '2021-05-15 02:19:18'),
(6, 'color', '1', '2021-05-1505:56:54imageproduct-color-yellow.jpg', 'Yellow', '130', '2', '2021-05-15 02:50:29', '2021-05-15 02:50:29'),
(8, 'size', '1', '0', '36', '140', '2', '2021-05-15 03:04:41', '2021-05-15 03:04:41'),
(9, 'size', '1', '0', '38', '140', '2', '2021-05-15 03:05:28', '2021-05-15 03:05:28'),
(10, 'size', '1', '0', '42', '140', '2', '2021-05-15 03:05:04', '2021-05-15 03:05:04'),
(11, 'size', '1', '0', '40', '140', '2', '2021-05-15 03:04:53', '2021-05-15 03:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `_credentials`
--

CREATE TABLE `_credentials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_site_settings`
--

CREATE TABLE `_site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpesa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risks` text COLLATE utf8mb4_unicode_ci,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `tawkTo` text COLLATE utf8mb4_unicode_ci,
  `tawkToStatus` tinyint(4) NOT NULL DEFAULT '1',
  `whatsAppStatus` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_site_settings`
--

INSERT INTO `_site_settings` (`id`, `sitename`, `logo`, `logo_footer`, `logo_two`, `favicon`, `email`, `email_one`, `mobile_one`, `mobile_two`, `mpesa`, `paypal`, `tagline`, `url`, `location`, `map`, `address`, `facebook`, `whatsapp`, `telegram`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `risks`, `welcome`, `tawkTo`, `tawkToStatus`, `whatsAppStatus`, `created_at`, `updated_at`) VALUES
(1, 'Aste', 'logo.png', 'aste w-02.png', NULL, NULL, 'info@aste-aste.com', 'info@aste-aste.com', '+254723014032', '+254723014032', NULL, NULL, NULL, 'https://www.aste-aste.com', NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', NULL, 'https://www.facebook.com/asteapparel/', NULL, NULL, NULL, 'https://www.linkedin.com/company/aste-apparel', 'https://www.instagram.com/aste.co.ke/', NULL, NULL, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Maxime veniam non nisi maiores quam. Quas, impedit ipsa aliquam, perspiciatis sapiente laudantium recusandae quis iste rem quia suscipit deserunt. Obcaecati voluptate consequuntur sed quia ab a magni, minus possimus facere, alias, itaque cum.', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD PRIMARY KEY (`accountBalID`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  ADD PRIMARY KEY (`b2bTransactionID`);

--
-- Indexes for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  ADD PRIMARY KEY (`b2bID`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slung_unique` (`slung`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `cart_storage`
--
ALTER TABLE `cart_storage`
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
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dymantic_instagram_basic_profiles_username_unique` (`username`);

--
-- Indexes for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  ADD PRIMARY KEY (`lnmoID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  ADD PRIMARY KEY (`transactionstatusID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_status`
--
ALTER TABLE `transaction_status`
  ADD PRIMARY KEY (`transactionStatusID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_credentials`
--
ALTER TABLE `_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_site_settings`
--
ALTER TABLE `_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accountbalance`
--
ALTER TABLE `accountbalance`
  MODIFY `accountBalID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

--
-- AUTO_INCREMENT for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  MODIFY `b2bTransactionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  MODIFY `b2bID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart_storage`
--
ALTER TABLE `cart_storage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dymantic_instagram_basic_profiles`
--
ALTER TABLE `dymantic_instagram_basic_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dymantic_instagram_feed_tokens`
--
ALTER TABLE `dymantic_instagram_feed_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  MODIFY `lnmoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  MODIFY `transactionstatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_status`
--
ALTER TABLE `transaction_status`
  MODIFY `transactionStatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_credentials`
--
ALTER TABLE `_credentials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_site_settings`
--
ALTER TABLE `_site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
