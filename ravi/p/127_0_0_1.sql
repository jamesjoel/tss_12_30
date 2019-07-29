-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2019 at 04:22 AM
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
-- Database: `practice`
--
CREATE DATABASE IF NOT EXISTS `practice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practice`;

-- --------------------------------------------------------

--
-- Table structure for table `pr1`
--

DROP TABLE IF EXISTS `pr1`;
CREATE TABLE IF NOT EXISTS `pr1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr1`
--

INSERT INTO `pr1` (`id`, `full_name`, `username`, `password`, `gender`, `city`, `contact`, `address`) VALUES
(19, 'ravi', 'ravi123@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'male', 'indore', '111111111', 'indore'),
(21, 'raja', 'raja@gmail.com', '7b21848ac9af35be0ddb2d6b9fc3851934db8420', 'male', 'indore', '2222', 'indore'),
(22, 'vishal patel', 'vishal123@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'male', 'indore', '11111', '242');
--
-- Database: `practice1`
--
CREATE DATABASE IF NOT EXISTS `practice1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `practice1`;

-- --------------------------------------------------------

--
-- Table structure for table `pr1`
--

DROP TABLE IF EXISTS `pr1`;
CREATE TABLE IF NOT EXISTS `pr1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr1`
--

INSERT INTO `pr1` (`id`, `full_name`, `username`, `password`, `gender`, `contact`, `city`, `address`) VALUES
(4, 'ram', 'ram@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2222', 'male', 'indore', 'vbvbvb');
--
-- Database: `ravi`
--
CREATE DATABASE IF NOT EXISTS `ravi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ravi`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ravi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `full_name`, `username`, `password`, `address`, `gender`, `contact`, `city`) VALUES
(1, 'ravi patel', 'vishal123@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'adasd', 'male', '1213134', 'indore'),
(4, '', 'rohit@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asdasd', 'male', '222', 'pune'),
(3, 'raj', 'raj@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'xcc', 'male', '123', 'indore'),
(5, '', 'sham@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asasas', 'female', '2222', 'mumbai'),
(6, 'ss', 'ss@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'asas', 'male', '222', 'indore'),
(7, 'rahul', 'rahul@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'ddd', 'male', '11111', 'indore');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `password`, `address`, `gender`, `contact`, `city`, `status`) VALUES
(2, 'raja', 'raj@gmail.com', '17ba0791499db908433b80f37c5fbc89b870084b', 'indore', 'male', '1213134', 'Mumbai', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
