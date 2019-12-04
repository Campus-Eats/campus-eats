-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2019 at 05:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CampusEats`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `foodID` int(11) NOT NULL,
  `programID` int(11) NOT NULL,
  `itemName` text COLLATE utf8_unicode_ci NOT NULL,
  `itemType` text COLLATE utf8_unicode_ci NOT NULL,
  `itemImage` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`foodID`, `programID`, `itemName`, `itemType`, `itemImage`) VALUES
(1, 1, 'Standard Package', 'We give a little bit of everything from oatmeal, soup, beans & pasta to canned fruits & veggies!', 'assets/standard.png'),
(2, 1, 'Vegetarian Package', 'Similar to our Standard Package. Just let us know and we\'ll make sure your package is meat free!', 'assets/vegetarian.png'),
(3, 1, 'Gluten Free Package', 'You\'ll get everything in your standard or vegetarian package, but sans gluten! ', 'assets/standard.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`foodID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `foodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
