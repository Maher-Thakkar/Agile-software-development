-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 07:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asd`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `Series` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Series`, `Name`, `Author`) VALUES
(1, 'ACOTAR', 'A Court of Thorns and Roses', 'Sarah J. Maas'),
(2, 'ACOTAR', 'A Court of Mist and Fury', 'Sarah J. Maas'),
(3, 'ACOTAR', 'A Court of Wings and Ruin', 'Sarah J. Maas'),
(4, 'Throne of Glass', 'Throne of Glass', 'Sarah J. Maas'),
(5, 'Throne of Glass', 'Crown of Midnight', 'Sarah J. Maas'),
(6, 'Throne of Glass', 'The Assassin\'s Blade', 'Sarah J. Maas'),
(7, 'Throne of Glass', 'Heir of Fire', 'Sarah J. Maas'),
(8, 'Throne of Glass', 'Queen of Shadows', 'Sarah J. Maas'),
(9, 'Throne of Glass', 'Empire of Storms', 'Sarah J. Maas'),
(10, 'Throne of Glass', 'Tower of Dawn', 'Sarah J. Maas'),
(11, 'Throne of Glass', 'Kingdom of Ash', 'Sarah J. Maas'),
(12, 'TimeRiders', 'TimeRiders', 'Alex Scarrow'),
(13, 'TimeRiders', 'Day of the Predator', 'Alex Scarrow'),
(14, 'TimeRiders', 'The Doomsday Code', 'Alex Scarrow'),
(15, 'TimeRiders', 'The Eternal War', 'Alex Scarrow'),
(16, 'TimeRiders', 'Gates of Rome', 'Alex Scarrow'),
(17, 'TimeRiders', 'City of Shadows', 'Alex Scarrow'),
(18, 'TimeRiders', 'The Pirate Kings', 'Alex Scarrow'),
(19, 'TimeRiders', 'The Mayan Prophecy', 'Alex Scarrow'),
(20, 'TimeRiders', 'The Infinity Cage', 'Alex Scarrow');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(3) NOT NULL,
  `Password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Stud_Teach` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`ID`, `Name`, `Username`, `Email`, `Age`, `Password`, `Stud_Teach`) VALUES
(2, 'Krittika', 'K123', 'k123@gmail.com', 20, 'k@1234', 'Student'),
(3, 'Labdhi', 'L123', 'Labs@gmail.com', 20, 'L@1234', 'Student'),
(4, 'Maya', 'maya1234', 'maya@gmail.com', 21, 'm@1234', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
