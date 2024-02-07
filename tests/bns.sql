-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2024 at 03:18 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bns`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Bookname` text NOT NULL,
  `ISBN` int NOT NULL,
  `Category` text NOT NULL,
  `year` year NOT NULL,
  `Author` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `Bookname`, `ISBN`, `Category`, `year`, `Author`, `updated_at`, `created_at`) VALUES
(1, 'aa', 2132442, 'aa', '1997', 'saro', '2024-02-06', '2024-02-06'),
(2, 'aa', 2132442, 'aa', '1997', 'saro', '2024-02-06', '2024-02-06'),
(3, 'saravanan', 3535313, 'aarr', '1997', 'gfh543', '2024-02-06', '2024-02-06'),
(4, 'divyaew', 53267654, 'aarr', '1998', 'dsvsvsd', '2024-02-06', '2024-02-06'),
(5, 'divyaew', 53267654, 'aarr', '1998', 'dsvsvsd', '2024-02-06', '2024-02-06'),
(6, 'divyadwdd', 323424344, 'dsf', '1997', 'dsvsvsd', '2024-02-06', '2024-02-06'),
(7, 'saravanan', 332232, 'aarr', '1966', 'dsgshdshdshd', '2024-02-06', '2024-02-06'),
(8, 'english story', 967565443, 'travel', '2000', 'john willam', '2024-02-06', '2024-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `bookslist`
--

DROP TABLE IF EXISTS `bookslist`;
CREATE TABLE IF NOT EXISTS `bookslist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Bookname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `User_Id` int DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookslist`
--

INSERT INTO `bookslist` (`id`, `Bookname`, `User_Id`, `updated_at`, `created_at`) VALUES
(1, NULL, NULL, '2024-02-06', '2024-02-06'),
(2, NULL, NULL, '2024-02-06', '2024-02-06'),
(3, NULL, NULL, '2024-02-06', '2024-02-06'),
(4, NULL, NULL, '2024-02-06', '2024-02-06'),
(5, 'divya', NULL, '2024-02-06', '2024-02-06'),
(6, 'saravanan', NULL, '2024-02-06', '2024-02-06'),
(7, 'goos', NULL, '2024-02-06', '2024-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_02_06_064016_create_userinfos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userinfos`
--

DROP TABLE IF EXISTS `userinfos`;
CREATE TABLE IF NOT EXISTS `userinfos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinfos`
--

INSERT INTO `userinfos` (`id`, `name`, `Username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Saravanan', 'saro@1997', 'saravananit10297@gmail.com', 'a123', '2024-02-06 01:59:24', '2024-02-06 01:59:24'),
(2, 'Saravanan', 'nandy@93', 'saravananit10297@gmail.com', 'a123', '2024-02-06 01:59:33', '2024-02-06 01:59:33'),
(3, 'Saravanan', 'nandy@93', 'saravananit10297@gmail.com', 'a123', '2024-02-06 02:30:11', '2024-02-06 02:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
