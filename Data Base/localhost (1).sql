-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2020 at 06:23 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_library_managment`
--
CREATE DATABASE `e_library_managment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_library_managment`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `age`, `pic`, `pass`) VALUES
(1, 'Manish Yadav', 'admin@gmail.com', '19 year', '1.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book_stock`
--

CREATE TABLE IF NOT EXISTS `book_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(60) NOT NULL,
  `bookcode` varchar(60) NOT NULL,
  `author` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `rackno` varchar(10) NOT NULL,
  `bookno` varchar(10) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `date` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `book_stock`
--

INSERT INTO `book_stock` (`id`, `bookname`, `bookcode`, `author`, `price`, `rackno`, `bookno`, `subcode`, `pic`, `date`) VALUES
(1, 'Scince', '2214', 'Arya Bhat', '255', '17', '17', '1655', 'b4.jpg', 2020),
(2, 'Scince', '2214', 'Arya Bhat', '255', '17', '17', '1655', 'b9.jpg', 2020),
(4, 'Scince', '2214', 'Arya Bhat', '255', '22', '17', '563', 'b2.jpg', 2020),
(5, 'english', '558', 'williomson', '212', '5', '22', '963', 'b7.jpg', 2020),
(6, 'Math', '5578', 'A.K.Jain', '250', '12', '10', '123', 'b5.jpg', 2020),
(7, 'Computer C++', '5979', 'A.K.Jain', '250', '5', '2', '235', 'b3.jpg', 2020),
(8, 'Spoken English', '4587', 'Williomson', '320', '5', '4', '5789', 'b10.jpg', 2020),
(9, 'english 650+', '650', 'M. Kumar', '423', '8', '6', '48622', 'b9.jpg', 2020),
(10, 'How to speak english', '254', 'S.K Jain', '560', '7', '5', '45896', 'b8.jpg', 2020),
(11, 'Rocket Scince', '5478', 'A.K.Jain', '560', '19', '12', '2548', 'b1.jpg', 2020),
(12, 'Math', '2222', 'A.K.Jain', '560', '12', '5', '123', 'b4.jpg', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE IF NOT EXISTS `return_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `book_name` varchar(60) NOT NULL,
  `bookcode` varchar(60) NOT NULL,
  `author` varchar(60) NOT NULL,
  `price` varchar(6) NOT NULL,
  `rackno` varchar(10) NOT NULL,
  `bookno` varchar(10) NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `pic` varchar(120) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`id`, `book_name`, `bookcode`, `author`, `price`, `rackno`, `bookno`, `subcode`, `pic`, `date`) VALUES
(1, 'Math', '5578', 'A.K.Jain', '560', '555', '5', '131', 'b6.jpg', '2020-09-03 11:13:07'),
(2, 'Math', '5578', 'A.K.Jain', '560', '555', '5', '131', 'b6.jpg', '2020-09-03 11:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(60) NOT NULL,
  `class` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pin` int(8) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `st_name`, `class`, `gender`, `age`, `mobile`, `address`, `pin`, `date`) VALUES
(1, 'Manish Yadav', 'C.S.E 3rd year', 'male', 19, '7388305101', 'nunihai', 282006, '10/07/2020'),
(2, 'ram Yadav', 'C.S.E 3rd year', 'male', 21, '7388305101', 'nunihai', 282006, '10/07/2020'),
(4, 'Parvej Ali', 'c.s.e', 'male', 18, '22', ' ', 0, '2020-09-03 00:31:21'),
(5, 'Parvej Ali', 'c.s.e', 'male', 18, '123456789', ' nunihai', 282006, '2020-09-03 00:31:54'),
(6, '', '', '', 0, '', '', 0, '2020-09-03 00:44:46'),
(7, '', '', '', 0, '', ' ', 0, '2020-09-03 00:45:23');
