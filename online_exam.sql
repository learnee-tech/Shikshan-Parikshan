-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 02:16 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(110) NOT NULL,
  `admin_name` varchar(225) COLLATE utf8_bin NOT NULL,
  `admin_email_address` varchar(220) COLLATE utf8_bin NOT NULL,
  `admin_password` varchar(220) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(1, 'prathmesh', 'admin@gmail.com', 'p123');

-- --------------------------------------------------------

--
-- Table structure for table `online_exam_table`
--

CREATE TABLE `online_exam_table` (
  `online_exam_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `online_exam_title` varchar(250) NOT NULL,
  `online_exam_datetime` datetime NOT NULL,
  `online_exam_duration` varchar(30) NOT NULL,
  `total_question` int(5) NOT NULL,
  `marks_per_right_answer` varchar(30) NOT NULL,
  `marks_per_wrong_answer` varchar(30) NOT NULL,
  `online_exam_created_on` date NOT NULL,
  `online_exam_status` enum('Pending','Created','Started','Completed') NOT NULL,
  `online_exam_code` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_exam_table`
--

INSERT INTO `online_exam_table` (`online_exam_id`, `teacher_id`, `online_exam_title`, `online_exam_datetime`, `online_exam_duration`, `total_question`, `marks_per_right_answer`, `marks_per_wrong_answer`, `online_exam_created_on`, `online_exam_status`, `online_exam_code`) VALUES
(2, 1, 'DCC', '2020-03-24 20:00:00', '60', 10, '2', '2', '2020-02-26', 'Pending', '22418'),
(4, 1, 'MIC', '2020-03-24 11:40:00', '60', 10, '2', '2', '2020-03-01', 'Pending', '22155'),
(5, 1, 'ETI', '2020-03-25 10:00:00', '30', 5, '1', '1', '2020-03-09', 'Pending', '22145');

-- --------------------------------------------------------

--
-- Table structure for table `option_table`
--

CREATE TABLE `option_table` (
  `option_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `option_number` int(2) NOT NULL,
  `option_title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `question_id` int(11) NOT NULL,
  `online_exam_id` int(11) NOT NULL,
  `question_title` text NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `answer_option` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_table`
--

INSERT INTO `question_table` (`question_id`, `online_exam_id`, `question_title`, `option1`, `option2`, `option3`, `option4`, `answer_option`) VALUES
(50, 1, 'Q1', 'OP11', 'OP12', 'OP13', 'OP14', 'OP11'),
(51, 1, 'Q2', 'OP21', 'OP22', 'OP23', 'OP24', 'OP21'),
(52, 1, 'Q3', 'OP31', 'OP32', 'OP33', 'OP34', 'OP31'),
(53, 1, 'Q4', 'OP41', 'OP42', 'OP43', 'OP44', 'OP41'),
(54, 1, 'Q5', 'OP51', 'OP52', 'OP53', 'OP54', 'OP51'),
(55, 2, 'q1', 'op1', 'op2', 'op3', 'op4', 'op1'),
(56, 2, 'q2', 'op1', 'op2', 'op3', 'op4', 'op1'),
(57, 2, 'q3', 'op1', 'op2', 'op3', 'op4', 'op1'),
(58, 2, 'q4', 'op1', 'op2', 'op3', 'op4', 'op1'),
(59, 2, 'q5', 'op1', 'op2', 'op3', 'op4', 'op1'),
(60, 2, 'q6', 'op1', 'op2', 'op3', 'op4', 'op1'),
(61, 2, 'q7', 'op1', 'op2', 'op3', 'op4', 'op1'),
(62, 2, 'q8', 'op1', 'op2', 'op3', 'op4', 'op1'),
(63, 2, 'q9', 'op1', 'op2', 'op3', 'op4', 'op1'),
(64, 2, 'q10', 'op1', 'op2', 'op3', 'op4', 'op1'),
(67, 4, ' jhb', ' bhk', ' b', ' bh', ' bh', ' bhk'),
(69, 4, 'jn', 'jn', 'jn51', 'j', 'ln', 'jn'),
(74, 4, 'hn', 'iun', 'ibjn', 'iuj', 'iub', 'iun');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `student_enroll` varchar(222) COLLATE utf8_bin NOT NULL,
  `student_password` varchar(222) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `student_enroll`, `student_password`) VALUES
(3, 'Prathmesh', 'Sarate', '101', '101'),
(4, 'Ruturaj', 'Vasudev', '102', '102');

-- --------------------------------------------------------

--
-- Table structure for table `student_enroll_exam`
--

CREATE TABLE `student_enroll_exam` (
  `student_enroll_exam_id` int(11) NOT NULL,
  `exam_code` int(11) NOT NULL,
  `student_enroll` int(11) NOT NULL,
  `attendece` enum('absent','present','','') COLLATE utf8_bin NOT NULL,
  `total_mark` int(11) NOT NULL,
  `student_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_enroll_exam`
--

INSERT INTO `student_enroll_exam` (`student_enroll_exam_id`, `exam_code`, `student_enroll`, `attendece`, `total_mark`, `student_mark`) VALUES
(1, 22418, 102, 'present', 20, 0),
(2, 22145, 102, 'absent', 0, 0),
(3, 22155, 102, 'absent', 0, 0),
(4, 22418, 101, 'present', 20, 0),
(5, 22155, 101, 'present', 6, 6),
(6, 22145, 101, 'absent', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `teacher_id` int(100) NOT NULL,
  `teacher_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `teacher_email_address` varchar(225) COLLATE utf8_bin NOT NULL,
  `teacher_password` varchar(225) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`teacher_id`, `teacher_name`, `teacher_email_address`, `teacher_password`) VALUES
(1, 'Rushikesh', 'r@gmail.com', 'r123'),
(2, 'Anil', 'anil@gmail.com', 'anil123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `online_exam_table`
--
ALTER TABLE `online_exam_table`
  ADD PRIMARY KEY (`online_exam_id`),
  ADD UNIQUE KEY `online_exam_code` (`online_exam_code`);

--
-- Indexes for table `option_table`
--
ALTER TABLE `option_table`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `student_enroll_exam`
--
ALTER TABLE `student_enroll_exam`
  ADD PRIMARY KEY (`student_enroll_exam_id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_exam_table`
--
ALTER TABLE `online_exam_table`
  MODIFY `online_exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `option_table`
--
ALTER TABLE `option_table`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_enroll_exam`
--
ALTER TABLE `student_enroll_exam`
  MODIFY `student_enroll_exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `teacher_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
