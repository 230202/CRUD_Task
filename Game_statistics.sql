-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 01:07 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Game_statistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `Game_Records`
--

CREATE TABLE IF NOT EXISTS `Game_Records` (
  `Match_Index` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Game_Name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Team_1` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Team_2` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Victor` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `Score` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Match_Index`),
  UNIQUE KEY `Match_Index` (`Match_Index`),
  KEY `Score_2` (`Score`),
  KEY `Score_3` (`Score`),
  KEY `Score_4` (`Score`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Game_Records`
--

INSERT INTO `Game_Records` (`Match_Index`, `First_Name`, `Last_Name`, `Game_Name`, `Team_1`, `Team_2`, `Victor`, `Score`) VALUES
(1, 'Test', 'Testing', 'Madden 19', 'Packers', 'Vikings', 'Packers', '100-0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
