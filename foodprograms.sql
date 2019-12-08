-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 04:01 AM
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
-- Database: `CampusEats-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodprograms`
--

CREATE TABLE `foodprograms` (
  `programID` int(11) NOT NULL,
  `programName` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `addressDetails` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hours` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `foodprograms`
--

INSERT INTO `foodprograms` (`programID`, `programName`, `password`, `email`, `description`, `address`, `addressDetails`, `city`, `phone`, `hours`, `image`) VALUES
(11, 'Sheridan Food First', 'foodshare', 'ssui.trc@sheridancollege.ca', 'Helping students access food and essentials.', '1430 Trafalgar Road\r\nOakville, Ontario, Canada\r\nL6H 2L1', 'Student Centre (Union Square) 2nd Floor\r\nSC200', 'Oakville', '905.845.9430 x 2304', 'Monday - Thursday 9:00 a.m. - 5:00 p.m.\r\nFriday - 9:00 a.m. - 5:00 p.m.', ''),
(12, 'FoodShare', 'foodshare', 'share@foodshare.ca', 'YOUR SUPPORT MAKES FOOD ACCESS AND FOOD JUSTICE ADVOCACY HAPPEN', '120 Industry St, York, ON M6M 4L8', '', 'Toronto', '(416) 363-6441', 'Saturday Closed\r\nSunday	Closed\r\nMonday	9a.m.–5p.m.\r\nTuesday	9a.m.–5p.m.\r\nWednesday 9a.m.–5p.m.\r\nThursday 9a.m.–5p.m.\r\nFriday	9a.m.–5p.m.', ''),
(13, 'Food First (Brampton Campus)', 'foodfirst', 'ssui.dav@sheridancollege.ca', 'Located upstairs in Union Square right next to the Coffee Loft ', '4180 Duke of York Boulevard Mississauga, Ontario, Canada L5B 0G5', 'Davis (Brampton) Campus - upstairs in Union Square above The Den (Student Centre)', 'Brampton', '905.459.7533 x 5005', 'Monday - Thursday 9:00 a.m. - 5:00 p.m.\r\nFriday - 9:00 a.m. - 5:00 p.m.', ''),
(14, 'Food First (Mississauga)', 'missisauga', 'ssui.hmc@sheridancollege.ca', '', '4180 Duke of York Boulevard \r\nMississauga, Ontario, Canada\r\nL5B 0G5', 'A Wing 3rd Floor \r\nA308', 'Mississauga', '905.845.9430', 'Monday - Thursday 9:00 a.m. - 5:00 p.m.\r\nFriday - 9:00 a.m. - 5:00 p.m.', ''),
(15, '123', '123', '123@mail.com', '                        2321', '124', '23', '123', '111-111-1111', '123', ''),
(16, '123', '123', '123@mail.com', '                        123213', '123', '123', '123', '111-111-1111', '2312', ''),
(17, '123', '123', '123@mail.com', '                        123213', '123', '123', '123', '111-111-1111', '123', NULL),
(18, '123', '123', '123@mail.com', '                        123213', '123', '123', '123', '111-111-1111', '123', 'assets/'),
(19, '12', '123123', '123@mail.com', '                        123213', '123', '123', '123', '111-111-1111', '123', 'assets/'),
(20, '123', '123', '123@mail.com', '                        123123', '123', '123', '123', '111-111-1111', '123', 'assets/'),
(21, '321', '123', '123@mail.com', '                        321', '312', '321', '321', '111-111-1111', '321', 'assets/'),
(22, '123', '123', '123@mail.com', '                   1232     ', '123', '123', '123', '111-111-1111', '123', 'assets/Monica.jpg'),
(28, '321', '321', '123@mail.com', '                        123', '321', '321', '321', '111-111-1111', '321', 'assets/WechatIMG1.jpeg'),
(29, '321', '321', '123@mail.com', '                        3213123', '321', '321', '321', '111-111-1111', '321', 'assets/_DSC1921.jpg'),
(30, '123', '123', '123@mail.com', '123', '123', '123', '123', '111-111-1111', '123', 'assets/_DSC1921.jpg'),
(31, '321', '123', '123@mail.com', '123', '312', '123', '123', '111-111-1111', '123', 'assets/_DSC1921.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodprograms`
--
ALTER TABLE `foodprograms`
  ADD PRIMARY KEY (`programID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodprograms`
--
ALTER TABLE `foodprograms`
  MODIFY `programID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
