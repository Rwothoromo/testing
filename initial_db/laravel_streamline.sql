-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 03:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_streamline`
--
CREATE DATABASE IF NOT EXISTS `laravel_streamline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel_streamline`;

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE IF NOT EXISTS `demographics` (
  `Patient_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Last_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_Birth` date DEFAULT NULL,
  `Age_Years` int(11) DEFAULT NULL,
  `Age_Months` int(11) DEFAULT NULL,
  `District` int(11) DEFAULT NULL,
  `Parish` int(11) DEFAULT NULL,
  `Subcounty` int(11) DEFAULT NULL,
  `Village` int(11) DEFAULT NULL,
  `Sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Marital_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Next_Kin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Relationship_Next_Kin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobile_No` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mobile_Owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Insurance_Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LC1_Contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Any_Kisiizi_Contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kisiizi_Contact_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Patient_Number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `County_Id` int(11) DEFAULT NULL,
  `National_Id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Patient_Category` int(11) DEFAULT NULL,
  `Religion` int(11) DEFAULT NULL,
  `Staff_Id` int(11) DEFAULT NULL,
  `Language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Patient_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`Patient_Id`, `First_Name`, `Last_Name`, `Date_Birth`, `Age_Years`, `Age_Months`, `District`, `Parish`, `Subcounty`, `Village`, `Sex`, `Marital_Status`, `Occupation`, `Next_Kin`, `Relationship_Next_Kin`, `Mobile_No`, `Mobile_Owner`, `Insurance_Status`, `LC1_Contact`, `Any_Kisiizi_Contact`, `Kisiizi_Contact_Name`, `Patient_Number`, `Status`, `County_Id`, `National_Id`, `Patient_Category`, `Religion`, `Staff_Id`, `Language`, `Position`, `Department`, `created_at`, `updated_at`) VALUES
(4, 'mhguy', NULL, '1992-04-11', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', 'Single', NULL, 'mhgi', 'Brother', '0702246015', 'Self', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kgi98i00', NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-26 02:44:19', '2017-06-26 02:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_members`
--

CREATE TABLE IF NOT EXISTS `insurance_members` (
  `Insurance_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Relationship_To_Head` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Group_Id` int(11) NOT NULL,
  `Family_Id` int(11) NOT NULL,
  `max_number` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Staff_Incharge` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Insurance_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_14_063912_create_links_table', 1),
(4, '2017_06_17_070618_create_demographics_table', 2),
(5, '2017_06_17_083546_create_insurancemembers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Group_Id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Council_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Registration_Number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Expiry_Date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Active` smallint(6) DEFAULT NULL,
  `Staff_Id` int(11) DEFAULT NULL,
  `Blood_Group_Id` int(11) DEFAULT NULL,
  `Willing_To_Donate` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `First_Name`, `Last_Name`, `User_Name`, `Password`, `Mobile_Number`, `User_Group_Id`, `Position`, `Photo`, `Council_Name`, `Registration_Number`, `Expiry_Date`, `Email`, `Pin`, `Active`, `Staff_Id`, `Blood_Group_Id`, `Willing_To_Donate`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'a', 'b', 'c', '$2y$10$ESW1g3jM..WAoQIWe/7lm.BnhFlrxt6XnHsvBosNfIlvgEVcxP/vO', '0702 246015', NULL, NULL, NULL, NULL, NULL, NULL, 'rwothoromoelijah@gmail.com', NULL, NULL, NULL, NULL, NULL, '65lRuCTda9o6OagkHkXp3VyUBFUh7JwIotqudW3Xvp5Q4hZLbfjXZWeGTiTQ', '2017-07-15 00:17:50', '2017-07-15 00:17:50'),
(2, 'e', 'f', 'g', '$2y$10$Jbhs86i5iL0n9WssXrw89.9/3YiHiWfJP7HsPfcPOp6iUU0ijWCsi', '0702 246015', NULL, NULL, NULL, NULL, NULL, NULL, 'g@gmail.com', NULL, NULL, NULL, NULL, NULL, 'H1Gsj3O4VtJ3zPnQgna8myxEJZLq4hMsJBKNPmwsIrnaKZFPAvNliN4I5B09', '2017-07-15 00:34:09', '2017-07-15 00:34:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
