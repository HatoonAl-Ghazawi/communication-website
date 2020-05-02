-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2020 at 12:17 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `com_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

DROP TABLE IF EXISTS `authentication`;
CREATE TABLE IF NOT EXISTS `authentication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `token`, `user_id`) VALUES
(29, 'GTyUiycZpn47c5adfc19409e95868640ba7b47643f7657e38bd081e07ee6f26052b6ccad72', 12),
(28, 'QlV2tBHq6Lcd9f0b7cd8e7df3eaaf2995b3f8f643a0bfdd76927104b99d512eea08f24cf17', 1),
(27, '7QZM9q6qDC831280ceb462d30cce0d37dfc879476e209939d232db8e3a3d6aabe23163ff95', 1),
(26, 'RC7InPFDv6d953ec3f8e40c478ceff1bc39520af484ac4b8b048cdb43b551ee768c6b1fa43', 1),
(25, '4RssfTesuJ9dd1bfc0642bca2bf321ce79eb2b36e4cc2cc72f05bd037f0ece9faf5e2c5b54', 1),
(24, 'NaGZLDzfmqa986fbf7d0c8f183cf829a54f892557cd065927f19b96d94324f3742005f554b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `subscribe_type` int(11) NOT NULL,
  `credit` float NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_number` (`mobile_number`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `mobile_number`, `Email`, `subscribe_type`, `credit`, `username`, `password`) VALUES
(1, '0785050360', 'ha@gmail.com', 1, 10, 'hatoon', '202cb962ac59075b964b07152d234b70'),
(10, '0775050370', 'h@gmail.com', 2, 1.2, 'huda', '202cb962ac59075b964b07152d234b70'),
(12, '0885050360', 'o@gmail.com', 3, 9.8, 'omar', '202cb962ac59075b964b07152d234b70'),
(11, '0775050343', 'e@gmail.com', 3, 21.6, 'eman', '65ded5353c5ee48d0b7d48c591b8f430');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_type` varchar(255) NOT NULL,
  `call_minutes` int(11) NOT NULL,
  `account_data` varchar(255) NOT NULL,
  `recharge_card` varchar(255) NOT NULL,
  `recharge_card_price` float NOT NULL,
  `Tax` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `sub_type`, `call_minutes`, `account_data`, `recharge_card`, `recharge_card_price`, `Tax`) VALUES
(1, 'Turbo mix', 200, '20Gb', 'Mix​5.5 ', 7.8, 0.4),
(2, 'Zain Mish Tabi3i', 300, '40Gb', 'Mix4+4', 8.9, 0.7),
(3, 'Max Line', 300, '65Gb', 'Max 5+5', 10.3, 0.62);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
