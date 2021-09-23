-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2021 at 12:54 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sliate`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `password` int(8) NOT NULL DEFAULT '123',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `address`, `contact`, `course`, `password`) VALUES
(17, 'Chamara', 'Polgahawela', 'chamara@sliate.com', 'HNDIT', 123),
(16, 'Chaduni', 'Kegalle', 'chaduni@abc.com', 'HNDIT', 123456),
(23, 'Wara', 'Kegalle', 'wara@abc.com', 'HNDIT', 123),
(24, 'Waruna', 'Kurunegala', 'waruna@abc.com', 'HNDIT', 123),
(25, 'Chamara', 'Polgahawela', 'chamara@sliate.com', 'HNDIT', 123),
(26, 'Malan', 'Melsiripura', 'malan@sliate.com', 'HNDIT', 123),
(27, 'Sadun', 'Pothuhera', 'malan@sliate.com', 'HNDIT', 123),
(28, 'Sanika', 'Rambukkana', 'sanika@sliate.com', 'HNDIT', 123),
(29, 'Ishara', 'Melsiripura', 'ishara@sliate.com', 'HNDIT', 123),
(30, 'Manishi', 'Alawwa', 'mani@abc.com', 'HNDIT', 123),
(31, 'Wara', 'Kegalle', 'wara@abc.com', 'HNDIT', 123),
(32, 'Waruna', 'Kurunegala', 'waruna@abc.com', 'HNDIT', 123);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'chamara@abc.com', '123'),
(2, 'malan@abc.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
