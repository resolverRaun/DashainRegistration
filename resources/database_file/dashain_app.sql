-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2015 at 12:29 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dashain_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_09_16_171118_add_participant_table', 1),
('2015_09_16_172806_add_participator_type_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost_amt` double(8,2) DEFAULT '0.00',
  `received_amt` double(8,2) DEFAULT '0.00',
  `return_amt` double(8,2) DEFAULT '0.00',
  `is_member` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `name`, `cost_amt`, `received_amt`, `return_amt`, `is_member`, `created_at`, `updated_at`) VALUES
(1, 'ram', 76.00, 76.00, 0.00, 0, '2015-09-19 09:07:45', '2015-09-19 09:07:45'),
(2, 'Dinesh Rauniyar', 84.00, 100.00, 16.00, 0, '2015-09-19 09:48:53', '2015-09-19 09:48:53'),
(3, 'test', 68.00, 68.00, 0.00, 1, '2015-09-19 12:29:26', '2015-09-19 12:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `participant_type`
--

CREATE TABLE IF NOT EXISTS `participant_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) DEFAULT '0',
  `adult` int(11) DEFAULT '0',
  `children` int(11) DEFAULT '0',
  `senior` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `participant_type`
--

INSERT INTO `participant_type` (`id`, `participant_id`, `adult`, `children`, `senior`) VALUES
(1, 1, 2, 2, 2),
(2, 2, 3, 1, 2),
(3, 3, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loginMethod` tinyint(4) NOT NULL DEFAULT '1',
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profileImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pushNotification` tinyint(4) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstLogin` datetime DEFAULT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `selling` tinyint(4) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `loginMethod`, `password`, `firstName`, `lastName`, `gender`, `telephone`, `profileImage`, `pushNotification`, `language`, `firstLogin`, `lastLogin`, `selling`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'bittu1028@gmail.com', 1, '$2y$10$nlnd2gies.NhM6AeiD.Sse7IXclHaz09fY5eWl6.AM/xJoYnE2Gkm', 'bitturauniyar', 'asdrauniyaraaaa', 1, '332', '', 0, 'de', '2015-07-26 03:38:33', NULL, 1, 1, '8O5GVFI8TNpKR0gytoXw2AoYHvxybGBaWjvOUcmZkOagFfCbZvfePl0Hs8sE', '2015-07-26 01:38:33', '2015-09-17 04:31:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
