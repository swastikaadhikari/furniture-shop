-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 09:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `surName` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstName`, `surName`, `phone_no`, `email`, `username`, `password`) VALUES
(1, 'Swas', 'Adhi', '89999', 'swas@gmail.com', 'swas', '$2y$10$7naqsQb4G9w514Y0IGag8uvx1Zfugk7WGdAP0.3KtUpl/pCsc1nWO'),
(3, 'Rajit', 'Sharma', '8888888888888888', 'rajit@gmail.com', 'rajit', '$2y$10$814KX6dUawlGhIDHTgVxa.VbHXtwYdOAYJfS0vpqsTRPOYHjrzLei'),
(5, 'Anil', 'Ghale', '9841690641', 'anil@gmail.com', 'anil', '$2y$10$4V5dDeu3zQ8tncx67fLueuMKZ6doJ1ieN2/OV.ELKC6kYIUTr0NUu');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Beds'),
(4, 'Sofas'),
(5, 'Wardrobes'),
(6, 'Table'),
(8, 'Cup Board');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contact_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `enquiry` text NOT NULL,
  `completion_status` tinyint(1) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `firstname`, `lastname`, `email`, `phone_no`, `enquiry`, `completion_status`, `admin_id`) VALUES
(1, 'swastika', 'adhiak', 'swastikaa719@gmail.com', '89009900', '', 1, 3),
(2, 'Smir', 'Shahi', 'smir@gmail.com', '9822222222222222', 'hello?', 1, 3),
(3, 'swastika', 'adhikari', 'swastika@gmail.com', '89009900', 'this is nice', 1, 1),
(4, 'swostika', 'karki', 'swostika@gmail.com', '98709089', 'This is nice', 1, 1),
(5, 'saru', 'thapa', 'sarena@gmail.com', '987899090', 'hello', 1, 1),
(6, 'hdkasjl', ' ,msn', 'swostika@gmail.com', '89009900', 'helloaaaaaaaaaaaaaa', 1, 1),
(7, 'haha', 'hihi', 'tsering@gmail.com', '98709090', 'saaasssssssssss ', 1, 1),
(8, 'image', 'bhandari', 'swastika@gmail.com', '980909', 'vjgjhgjkjttttttttttttttttttttttttttt', 1, 1),
(9, 'bipin', 'gc', 'bipin@gmail.com', '9841690632', 'This is nice\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE IF NOT EXISTS `furniture` (
`id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `hide` tinyint(11) NOT NULL,
  `item_type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`id`, `name`, `description`, `price`, `categoryId`, `hide`, `item_type`) VALUES
(1, 'Four Poster', 'A beautiful four poster double bed.', '999.00', 2, 1, 'First Hand'),
(10, 'King', 'A king sized bed with a modern style', '659.00', 2, 1, 'First Hand'),
(11, 'Corner Sofa', 'A modern styled corner sofa', '699.00', 4, 0, 'First Hand'),
(12, 'Black Leather Sofa', 'A stylish classic. A black leather sofa, not out of place in any home!', '499.00', 4, 1, 'First Hand'),
(13, 'Oak Wardrobe', 'An Oak Wardrobe, two drawers and space to hang all your clothes', '399.00', 5, 0, 'Second Hand'),
(14, 'Table', 'this is nice', '200.00', 2, 0, 'First Hand'),
(15, 'Cupboard', 'this is nice', '999.99', 5, 0, 'Second Hand');

-- --------------------------------------------------------

--
-- Table structure for table `specialoffer`
--

CREATE TABLE IF NOT EXISTS `specialoffer` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialoffer`
--

INSERT INTO `specialoffer` (`id`, `title`, `description`, `start_date`, `end_date`) VALUES
(8, 'SALE!!!!!!', 'BED SALE', '2019-01-01', '2019-02-03'),
(9, 'NEW YEAR OFFER', 'SALE!!!!!', '2015-09-08', '2019-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialoffer`
--
ALTER TABLE `specialoffer`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `specialoffer`
--
ALTER TABLE `specialoffer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
