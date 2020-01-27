-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2020 at 09:06 AM
-- Server version: 5.6.42
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q` varchar(50) NOT NULL,
  `o1` varchar(50) NOT NULL,
  `o2` varchar(50) NOT NULL,
  `03` varchar(50) NOT NULL,
  `o4` varchar(50) NOT NULL,
  `o5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q`, `o1`, `o2`, `03`, `o4`, `o5`) VALUES
('a', 'a', 'b', 'a', 'a', 'a'),
('a', 'a', 'a', 'b', 'a', 'a'),
('a', 'a', 'a', 'a', 'b', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `sample1`
--

CREATE TABLE `sample1` (
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sample1`
--

INSERT INTO `sample1` (`name`, `age`, `mobile`, `email`) VALUES
('thilak', '54', '957463210', 'gsgas@jbha.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
