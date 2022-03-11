-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 01:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kodeku`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', '445bde9449c0a1c1c8d9efba75e1fbbc', '2022-01-19 20:10:59'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'a10fd4ba509c7622db4990eb3a4896ea', '2022-01-19 22:39:29'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', '702744a732e0eddd42bef4181036ebaf', '2022-01-20 07:58:59'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'a3bbda45dac79cbfdd89131ea56e9b49', '2022-01-24 16:00:55'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'a3bbda45dac79cbfdd89131ea56e9b49', '2022-01-24 16:01:17'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', '57fe9f79735e9ecebe3f8623eec84055', '2022-01-24 16:08:08'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'c0f74f4abac51de8d8fb44489c6b2847', '2022-01-24 18:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 3),
(1, 8),
(2, 17),
(2, 18),
(2, 25),
(2, 26);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'yusrilihzra@gmail.com', NULL, '2022-01-18 06:38:18', 0),
(2, '::1', 'yusrilihzra@gmail.com', NULL, '2022-01-18 06:40:54', 0),
(3, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 07:10:02', 1),
(4, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 07:17:42', 1),
(5, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 15:34:34', 1),
(6, '::1', 'tes@gmail.com', 4, '2022-01-18 15:46:29', 1),
(7, '::1', 'tes@gmail.com', 4, '2022-01-18 16:03:28', 1),
(8, '::1', 'tes@gmail.com', 4, '2022-01-18 16:08:16', 1),
(9, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 16:08:34', 1),
(10, '::1', 'tes@gmail.com', 4, '2022-01-18 16:12:08', 1),
(11, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 16:31:42', 1),
(12, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-18 17:11:44', 1),
(13, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 16:12:19', 1),
(14, '::1', 'tes@gmail.com', 4, '2022-01-19 17:10:58', 1),
(15, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:11:21', 1),
(16, '::1', 'tes@gmail.com', 4, '2022-01-19 17:15:29', 1),
(17, '::1', 'tes@gmail.com', 4, '2022-01-19 17:17:52', 1),
(18, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:17:59', 1),
(19, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:18:06', 1),
(20, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:19:11', 1),
(21, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:22:04', 1),
(22, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 17:26:38', 1),
(23, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 19:22:10', 1),
(24, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 19:22:21', 1),
(25, '::1', 'tes1@gmail.com', 5, '2022-01-19 19:30:37', 1),
(26, '::1', 'tes1', NULL, '2022-01-19 19:31:03', 0),
(27, '::1', 'hendra', NULL, '2022-01-19 19:31:12', 0),
(28, '::1', 'tes@gmail.com', 4, '2022-01-19 19:31:34', 1),
(29, '::1', 'tes1@gmail.com', 5, '2022-01-19 19:31:59', 1),
(30, '::1', 'tes1@gmail.com', 5, '2022-01-19 19:32:12', 1),
(31, '::1', 'tes1@gmail.com', NULL, '2022-01-19 19:49:23', 0),
(32, '::1', 'farhamfauzan@gmail.com', 7, '2022-01-19 20:11:10', 1),
(33, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', NULL, '2022-01-19 20:38:09', 0),
(34, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', NULL, '2022-01-19 20:38:21', 0),
(35, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-19 20:38:25', 1),
(36, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', NULL, '2022-01-19 20:39:18', 0),
(37, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', NULL, '2022-01-19 20:42:10', 0),
(38, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', NULL, '2022-01-19 20:42:55', 0),
(39, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', 8, '2022-01-19 20:43:06', 1),
(40, '::1', 'farhamfauzan@gmail.com', 12, '2022-01-19 22:39:32', 1),
(41, '::1', 'farhamfauzan@gmail.com', 12, '2022-01-19 23:11:07', 1),
(42, '::1', 'ogame2394@gmail.com', 15, '2022-01-19 23:11:44', 0),
(43, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-20 07:59:07', 1),
(44, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-20 08:05:36', 1),
(45, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 05:18:13', 1),
(46, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 06:11:07', 1),
(47, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-21 06:11:15', 1),
(48, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-21 06:30:09', 1),
(49, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 06:55:01', 1),
(50, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 07:04:42', 1),
(51, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 07:31:13', 1),
(52, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-21 07:31:44', 1),
(53, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 07:34:39', 1),
(54, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 21:30:44', 1),
(55, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-21 21:31:14', 1),
(56, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 21:31:24', 1),
(57, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-21 21:38:18', 1),
(58, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-21 21:38:26', 1),
(59, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-22 02:17:24', 1),
(60, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-22 02:18:28', 1),
(61, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 02:18:43', 1),
(62, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-22 02:19:10', 1),
(63, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 02:19:27', 1),
(64, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 04:06:17', 1),
(65, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 04:08:51', 1),
(66, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 04:09:21', 1),
(67, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-22 06:26:41', 1),
(68, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-22 16:40:50', 1),
(69, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 00:36:50', 1),
(70, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 05:34:00', 1),
(71, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:45:46', 1),
(72, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 08:46:42', 1),
(73, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:46:53', 1),
(74, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:48:58', 1),
(75, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 08:53:28', 1),
(76, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 08:54:03', 1),
(77, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:54:11', 1),
(78, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:55:46', 1),
(79, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 08:59:09', 1),
(80, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 08:59:15', 1),
(81, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 09:23:02', 1),
(82, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-23 17:52:07', 1),
(83, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 17:55:19', 1),
(84, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-23 18:00:50', 1),
(85, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 02:36:12', 1),
(86, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 05:40:26', 1),
(87, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 14:26:41', 1),
(88, '::1', 'arhan', 18, '2022-01-24 16:01:07', 0),
(89, '::1', 'semangat45.me@gmail.com', NULL, '2022-01-24 16:01:46', 0),
(90, '::1', 'semangat45.me@gmail.com', 19, '2022-01-24 16:01:55', 1),
(91, '::1', 'semangat45.me@gmail.com', 20, '2022-01-24 16:08:12', 1),
(92, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 16:12:19', 1),
(93, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 16:42:19', 1),
(94, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 16:48:00', 1),
(95, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 16:56:12', 1),
(96, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-24 17:47:14', 1),
(97, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 17:51:12', 1),
(98, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-24 17:51:52', 1),
(99, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', 8, '2022-01-24 17:59:39', 1),
(100, '::1', 'farhamfauzan@gmail.com', 17, '2022-01-24 18:01:47', 1),
(101, '::1', 'animasiy4@gmail.com', NULL, '2022-01-24 18:11:53', 0),
(102, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', 8, '2022-01-24 18:12:24', 1),
(103, '::1', 'semangat45.me@gmail.com', 26, '2022-01-24 18:16:12', 1),
(104, '::1', 'yusrilihzra@gmail.com', 3, '2022-01-24 18:23:35', 1),
(105, '::1', 'yonatanbenyaminyonatanbenyamin@gmail.com', 8, '2022-01-25 00:33:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', '77687d8230e421113515d036500f374a', '2022-01-20 08:33:42'),
(2, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'ffe27fcfa59bac5c3335ca8dd3ae41bb', '2022-01-20 08:38:23'),
(3, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'e6729e77987e6fe64e8c1625a31dd6b8', '2022-01-21 06:18:24'),
(4, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'e6729e77987e6fe64e8c1625a31dd6b8', '2022-01-21 06:22:28'),
(5, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'e6729e77987e6fe64e8c1625a31dd6b8', '2022-01-21 06:22:49'),
(6, 'farhamfauzan@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'e6729e77987e6fe64e8c1625a31dd6b8', '2022-01-21 06:24:18'),
(7, 'yusrilihzra@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62', 'e6729e77987e6fe64e8c1625a31dd6b8', '2022-01-21 07:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1642492626, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `judul`, `slug`, `detail`, `link`, `sampul`, `created_at`, `updated_at`) VALUES
(39, 'Login dan register menggunakan codeigniter 4', 'login-dan-register-menggunakan-codeigniter-4', '<p>Php version 8.1.1</p>\r\n<p>Code igniter 4 version 4.1.7</p>\r\n<p>Tanpa menggunakan library myth auth</p>\r\n<p>Database ada di dalam paket unduhan</p>', 'https://www47.zippyshare.com/v/RTUt3Fi4/file.html', '1643092553_477a9c0568ed16381416.png', NULL, '2022-01-23 14:49:38'),
(43, 'chat spam menggunakan bahasa python', 'chat-spam-menggunakan-bahasa-python', ' <p>Penggunaan :</p>\r\n<p>1. Buka file pada aplikasi editor seperti vs code</p>\r\n<p>2. Atur jeda, isi pesan dan juga jumlah spam</p>\r\n<p>3. Arahkan kursor pada kolom chat, kemudian klick F5 untuk run pyhton</p>', 'https://www33.zippyshare.com/v/JvRLtG1c/file.html', '1643092746_367de7243c206226f37e.png', NULL, '2022-01-25 14:39:06'),
(44, 'cisco packet tracer rangkaian topologi jaringan unidayan', 'cisco-packet-tracer-rangkaian-topologi-jaringan-unidayan', ' <p>Ini adalah gambaran garis besar alur jaringan universitas dayanu ikhsanuddin baubau yang di update tahun 2021</p>', 'https://www52.zippyshare.com/v/ovFLKrXb/file.html', '1643092865_81a44384b6ccebd75800.png', NULL, '2022-01-25 14:41:05'),
(45, 'Menampilkan bidang warna RGB di Matlab dan Octave', 'menampilkan-bidang-warna-rgb-di-matlab-dan-octave', ' <p>silahkan ubah likasi filecitra pada script sebelum menjalankannya.</p>', 'https://www46.zippyshare.com/v/Az9g49Du/file.html', '1643092948_9da15e0b07579388d237.png', NULL, '2022-01-25 14:42:28'),
(46, 'Menampilkan bidang warna CMY dan CMYK di Matlab dan Octave', 'menampilkan-bidang-warna-cmy-dan-cmyk-di-matlab-dan-octave', ' <p>Harap ubah lokasi file citra atau gambar pada script sebelum menjalankannya</p>', 'https://www46.zippyshare.com/v/jJ3IHmEZ/file.html', '1643093236_0a5cc98d1c71780fbecb.png', NULL, '2022-01-25 14:47:16'),
(47, 'E-book gratis HTML dan CSS dasar', 'e-book-gratis-html-dan-css-dasar', ' <p>Berisi pengenalan dasar dalam HTML dan CSS. Sangat berguna bagi pemula yang tertarik di dunia website</p>', 'https://www86.zippyshare.com/v/9Yl8JlXe/file.html', '1643093349_c7e5f1da877fca5ddd4f.png', NULL, '2022-01-25 14:49:09'),
(48, 'Menampilkan bidang warna HSIdi Matlab dan Octave', 'menampilkan-bidang-warna-hsidi-matlab-dan-octave', ' <p>Harap ubah lokasi penyimpanan file citra atau gambar terlebih dahulu pada script sebelum menjalankannya</p>', 'https://www13.zippyshare.com/v/JjYnNytj/file.html', '1643093428_a41b78b76fc8ce18cae9.png', NULL, '2022-01-25 14:50:28'),
(49, 'Mempertajam bidang warna RGB menggunakan teknik Histogram Equalization pada Matlab dan Octave', 'mempertajam-bidang-warna-rgb-menggunakan-teknik-histogram-equalization-pada-matlab-dan-octave', ' <p>Harap ubah lokasi penyimpanan file citra atau gambar sebelum menjalankan script</p>', 'https://www86.zippyshare.com/v/o22qPAdF/file.html', '1643093527_53823ec255c379e927b2.png', NULL, '2022-01-25 14:52:07'),
(50, 'CRUD lengkap menggunakan PHP dan MYsql', 'crud-lengkap-menggunakan-php-dan-mysql', ' <p>Database telah include di dalam file unduhan</p>', 'https://www39.zippyshare.com/v/NUWXlUQH/file.html', '1643093801_b1d5a6cf77800e542f6b.png', NULL, '2022-01-25 14:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT 'default.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'yusrilihzra@gmail.com', 'hendra', 'Hendra', '1643068304_24a44c4d386a7e1591fb.jpg', '$2y$10$TJRJsrdglf0vQx3Ae4w7veTrnhrN5a0OTojR46JMaIkFceTKLi4v2', '98313bd2ea71f6d03164b634bd62d0df', NULL, '2022-01-19 21:13:51', NULL, NULL, NULL, 1, 0, '2022-01-18 07:09:52', '2022-01-19 20:13:51', NULL),
(8, 'yonatanbenyaminyonatanbenyamin@gmail.com', 'Natan', 'yonatan Benyamin', '1643068951_9eb4266e3980812de303.jpeg', '$2y$10$TJRJsrdglf0vQx3Ae4w7veTrnhrN5a0OTojR46JMaIkFceTKLi4v2', '98313bd2ea71f6d03164b634bd62d0df', NULL, '2022-01-20 03:34:41', NULL, NULL, NULL, 1, 0, '2022-01-20 03:34:41', '2022-01-20 03:34:41', NULL),
(17, 'farhamfauzan@gmail.com', 'farham', 'Farham Fauzan', '1643068755_bd43ef9c7446cc7ad311.jpeg', '$2y$10$qCbminpNpbCH5h8y5heXYewQJx1U7wLR9HLgs.U9hv7kSeOiTZo9S', 'e6729e77987e6fe64e8c1625a31dd6b8', NULL, '2022-01-21 07:17:08', NULL, NULL, NULL, 1, 0, '2022-01-20 07:58:17', '2022-01-21 06:17:08', NULL),
(18, 'semangat45@gmail.com', 'arhan', NULL, 'default.png', '$2y$10$nXrTuo6j7tO20xAisaNq2.cMZFlidCvoYzeKPbgHvfJ5NDdthqcmC', NULL, NULL, NULL, '9aac4f4bcd7e6aca4a66043ec268af82', NULL, NULL, 0, 0, '2022-01-24 15:59:21', '2022-01-24 15:59:21', NULL),
(25, 'animasiy4@gmail.com', 'Andi', NULL, 'default.png', '$2y$10$Q9J87mp.mgt9jClN.XAJeuW6ZSj4jQ9XoWJVRidb6SrSgKSswAGiu', NULL, NULL, NULL, '4624187df087a9c49286cceacd31e9ad', NULL, NULL, 0, 0, '2022-01-24 18:12:15', '2022-01-24 18:12:15', NULL),
(26, 'semangat45.me@gmail.com', 'Riko', 'Riko Saputra', '1643069852_3bfb30d1d9347f8d9d2c.png', '$2y$10$Pgn5C0O8ospFysSn.DJRIO3y2cWTUww5k6tSiRnv8NWYigzcvrgue', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-24 18:15:55', '2022-01-24 18:16:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
