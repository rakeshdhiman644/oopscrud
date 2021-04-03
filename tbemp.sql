-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2021 at 04:27 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rakeshdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbemp`
--

DROP TABLE IF EXISTS `tbemp`;
CREATE TABLE IF NOT EXISTS `tbemp` (
  `empno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`empno`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbemp`
--

INSERT INTO `tbemp` (`empno`, `name`, `adress`, `salary`) VALUES
(21, 'Rahul', 'Delhi', 30000),
(22, 'Ridham', 'Chandigarh', 10000),
(24, 'Ridham', 'Chandigarh', 50000),
(45, 'Abhi', 'Mulana', 35000),
(46, 'users', 'cantt', 100000),
(52, 'ridham', 'delhi', 20000),
(53, 'vikas', 'pune', 30000),
(54, 'sahil', 'kotta', 34000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
