-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 04, 2023 at 05:00 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sub_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(16, 'Et laborum dolor ut ', 'Excepteur consequatu', 'Cumque autem vero au', 1, '2023-07-08 15:19:43', '2023-07-08 15:19:43'),
(15, 'Quam error enim et m', 'Adipisci dicta sit s', 'Autem magna magnam c', 1, '2023-07-08 15:19:33', '2023-07-08 15:19:33'),
(12, 'Dolor et officiis co', 'Magni qui voluptatib', 'Assumenda sint debit', 1, '2023-07-08 15:19:00', '2023-07-08 15:19:00'),
(13, 'Excepteur tempore q', 'Reprehenderit obcaec', 'Laboris numquam plac', 1, '2023-07-08 15:19:08', '2023-07-08 15:19:08'),
(14, 'Aliquid rerum fuga ', 'Qui et ullam in laud', 'Non rem cupiditate s', 1, '2023-07-08 15:19:22', '2023-07-08 15:19:22'),
(11, 'Veniam nemo pariatu', 'Necessitatibus duis ', 'In ab et corrupti a', 1, '2023-07-08 15:18:48', '2023-07-08 15:18:48'),
(17, 'Lorem nisi ea possim', 'Quis in sit eos ame', 'Rerum labore quasi a', 1, '2023-07-08 15:19:55', '2023-07-08 15:19:55'),
(18, 'Minus omnis enim odi', 'Aut consequat Dolor', 'Soluta lorem elit s', 1, '2023-07-08 15:20:03', '2023-07-08 15:20:03'),
(19, 'Sunt et aliqua Aut', 'Dolorem ad dolore ha', 'Commodo magni volupt', 1, '2023-07-08 15:36:57', '2023-07-08 15:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `img`, `status`, `created_at`, `updated_at`) VALUES
(7, 'tilak', '117816377_1001406643633389_5666042486828613703_n1688838750.jpg', 1, '2023-07-08 17:52:30', '2023-07-08 17:52:30'),
(8, 'krishna', 'kpphoto1688839865.jpg', 1, '2023-07-08 18:11:05', '2023-07-08 18:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `title`, `status`, `created_at`, `updated_at`) VALUES
(5, '117816377_1001406643633389_5666042486828613703_n1688882470.jpg', 'Illum in nobis id n', 1, '2023-07-09 06:01:10', '2023-07-09 06:01:10'),
(2, '117816377_1001406643633389_5666042486828613703_n1688870554.jpg', 'tilak', 1, '2023-07-09 02:42:34', '2023-07-09 02:42:34'),
(3, 'kpphoto.jpg1688871064.jpg', 'Tempora autem cum ne', 1, '2023-07-09 02:42:54', '2023-07-09 02:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '117816377_1001406643633389_5666042486828613703_n.jpg1689052809.jpg', 'Eu rem eos ut odit', '          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, mollitia laudantium consequatur sequi minima necessitatibus praesentium iste laboriosam unde ducimus.', 1, '2023-07-09 03:24:57', '2023-07-09 03:24:57'),
(4, '273122416_946585519311931_6749500234298626439_n1689052699.jpg', 'egrgrgerg', 'egerger', 1, '2023-07-11 05:18:19', '2023-07-11 05:18:19'),
(3, '117816377_1001406643633389_5666042486828613703_n1689052673.jpg', 'fa-facebook', 'sgsdgsdg', 1, '2023-07-11 05:17:53', '2023-07-11 05:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `site_value` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`) VALUES
(4, 'logo', 'COMPAMY', 1, '2023-07-12 05:08:53', '2023-07-12 05:08:53'),
(7, 'insta', 'https://www.instagram.com/', 1, '2023-07-12 05:22:45', '2023-07-12 05:22:45'),
(6, 'fb', 'https://www.facebook.com/', 1, '2023-07-12 05:20:46', '2023-07-12 05:20:46'),
(8, 'twitter', 'https://twitter.com/i/flow/login?redirect_after_login=%2F', 1, '2023-07-23 06:31:08', '2023-07-23 06:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(150) NOT NULL,
  `top_description` varchar(255) NOT NULL,
  `skill_title` varchar(150) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `top_title`, `top_description`, `skill_title`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Officiis reprehender', 'Numquam ullamco quo ', 'Cupidatat reprehende', 1, '2023-07-08 15:46:20', '2023-07-08 15:46:20'),
(9, 'Aute velit nemo qui', 'Incididunt consequat', 'Sequi id voluptatem', 1, '2023-07-08 15:46:30', '2023-07-08 15:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(150) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, '273102289_946580122645804_5819032848160435006_n1689051931.jpg', 'dgsdgf', 'dgdf', 1, '2023-07-11 05:05:31', '2023-07-11 05:05:31'),
(2, '117816377_1001406643633389_5666042486828613703_n.jpg1688881234.jpg', 'This is first website', 'Eiusmod in aliquam s', 1, '2023-07-09 01:53:38', '2023-07-09 01:53:38'),
(6, 'kpphoto1688881423.jpg', 'This is second slider', 'srgdsfg', 1, '2023-07-09 05:43:43', '2023-07-09 05:43:43'),
(8, '274116413_951445492159267_205435482443344779_n1689052071.jpg', 'dfgfgdfg', 'sfsdfsdf', 1, '2023-07-11 05:07:51', '2023-07-11 05:07:51'),
(9, '273122416_946585519311931_6749500234298626439_n1690167470.jpg', 'Adipisci eu maiores ', 'Magna aliquam doloru', 1, '2023-07-24 02:57:50', '2023-07-24 02:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(150) NOT NULL,
  `top_description` varchar(255) NOT NULL,
  `img` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `top_title`, `top_description`, `img`, `name`, `position`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Connor Slater', 'Clio Powell', 'kpphoto.jpg1689097138.jpg', 'Shay Contreras', 'Adena Merritt', 1, '2023-07-11 17:16:47', '2023-07-11 17:16:47'),
(3, 'Carlos Reyes', 'Joy Heath', '117816377_1001406643633389_5666042486828613703_n1689097518.jpg', 'Asher White', 'Joshua Bentley', 1, '2023-07-11 17:45:18', '2023-07-11 17:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(41, 'Ariel Kidd', '+1 (396) 299-7057', 'webeq@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-17 06:08:57', '2023-07-17 06:08:57'),
(40, 'Krishna Prasad Parajuli', '9806641906', 'tilak@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2023-07-11 11:10:17', '2023-07-11 11:10:17'),
(38, 'Lacy Mcguire', '+1 (605) 177-4821', 'qobovovew@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-11 10:59:12', '2023-07-11 10:59:12'),
(39, 'Cassady Wong', '+1 (567) 519-6027', 'buvusagip@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-11 10:59:50', '2023-07-11 10:59:50'),
(36, 'Alfonso Oneal', '+1 (913) 788-4472', 'renyc@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-11 10:56:14', '2023-07-11 10:56:14'),
(37, 'Forrest Bass', '+1 (779) 778-6958', 'wyly@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-11 10:58:27', '2023-07-11 10:58:27'),
(28, 'tilak parajuli', '+1 (128) 958-4315', 'xekunimedi@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 08:48:19', '2023-07-08 08:48:19'),
(29, 'Asher Nolan', '+1 (709) 243-9361', 'qozag@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 08:48:33', '2023-07-08 08:48:33'),
(30, 'Pascale Clarke', '+1 (642) 949-9954', 'cydusup@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 09:09:15', '2023-07-08 09:09:15'),
(32, 'Nayda Potter', '+1 (767) 205-7034', 'kovajinoba@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 09:10:35', '2023-07-08 09:10:35'),
(33, 'Germaine Peterson', '+1 (414) 504-4539', 'hekoly@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 13:21:53', '2023-07-08 13:21:53'),
(34, 'Remedios Carson', '+1 (539) 538-6212', 'muhyfapeh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 13:22:50', '2023-07-08 13:22:50'),
(35, 'Remedios Carson', '+1 (539) 538-6212', 'muhyfapeh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 1, '2023-07-08 13:34:32', '2023-07-08 13:34:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
