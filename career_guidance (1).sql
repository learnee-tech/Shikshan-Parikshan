-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 09:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_guidance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Id` int(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Id`, `username`, `password`) VALUES
(1, 'ruturaj', 'ruturaj');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(45) NOT NULL,
  `career_name` varchar(45) NOT NULL,
  `career_code` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `career_name`, `career_code`) VALUES
(1, 'reeg', '55'),
(2, 'Marketing', '101'),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, 'Computer Science', 'CS101');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Id` int(45) NOT NULL,
  `que_code` varchar(45) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `opt1` varchar(45) NOT NULL,
  `opt2` varchar(45) NOT NULL,
  `opt3` varchar(45) NOT NULL,
  `opt4` varchar(45) NOT NULL,
  `w1` varchar(45) NOT NULL,
  `w2` varchar(45) NOT NULL,
  `w3` varchar(45) NOT NULL,
  `w4` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Id`, `que_code`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `w1`, `w2`, `w3`, `w4`) VALUES
(30, '101', 'v', '3', 'vv', 'v', 'v', '3', '2', '1', '0'),
(31, '102', 'how are you?', '0', 'fine', 'fine', 'fine', '0', '2', '1', '3'),
(32, '101', 'finefinefine', '3', 'fine', 'fine', 'fine', '3', '3', '2', '1'),
(33, '101', 'Do You Like Coding?', 'Deeply Interested', 'Partially Interest', 'Not Much', 'Hate it...!', '3', '2', '1', '0'),
(34, '55', 'que', 'opt1w', 'opt2w', 'opt3w', 'opt4w', '0', '1', '2', '3'),
(35, '55', 'oppp', 'j', 'jj', 'jjj', 'jjjj', '3', '2', '1', '0'),
(36, '101', 'Do You Like Coding?', 'Deeply Interested', 'Partially Interest', 'Not Much', 'Hate it...!', '3', '2', '1', '0'),
(37, 'CS101', 'Select the sessions configuration in the Navi', 'Select the sessions', 'Select the sessions', 'Select the sessions', 'Select the sessions', '0', '1', '2', '3'),
(38, 'CS101', 'Select the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a sessionSelect the sessions configuration in the Navigator window in which you want to create a session', 'Select the sessions ', 'Select the sessions ', 'Select the sessions ', 'Select the sessions ', '0', '1', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
