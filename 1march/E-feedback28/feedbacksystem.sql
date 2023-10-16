-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 10:12 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedbacksystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `id` int(10) NOT NULL,
  `academic_id` int(25) NOT NULL DEFAULT 1,
  `year` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `standard` varchar(25) NOT NULL,
  `courseId` varchar(25) NOT NULL,
  `facultyId` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`id`, `academic_id`, `year`, `branch`, `semester`, `standard`, `courseId`, `facultyId`) VALUES
(3, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(4, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(5, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(6, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(7, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(8, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(9, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(10, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(11, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(12, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(13, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(14, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(15, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(16, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(17, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(18, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(19, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(20, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(21, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(22, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(23, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(24, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(25, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(26, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(27, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(28, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(29, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(30, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(31, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(32, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(33, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(34, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(35, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(36, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(37, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(38, 1, '2022', 'CSE', '1', 'TY', 'CS01', ''),
(39, 1, '2022', 'CSE', '1', 'TY', 'CS02', ''),
(40, 1, '2022', 'CSE', '1', 'TY', 'CS03', ''),
(41, 1, '2022', 'CSE', '1', 'TY', 'CS04', ''),
(42, 1, '2022', 'CSE', '1', 'TY', 'CS05', ''),
(43, 1, '2024', 'cse', 'first', 'ty', 'CS03', 'CS04'),
(44, 1, '2024', 'cse', 'first', 'ty', 'CS01', 'CS01');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseId` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `standard` varchar(25) NOT NULL,
  `fullForm` varchar(25) NOT NULL,
  `shortForm` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `totalWeightage` varchar(25) NOT NULL,
  `theory` tinyint(1) NOT NULL,
  `practical` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseId`, `branch`, `standard`, `fullForm`, `shortForm`, `semester`, `totalWeightage`, `theory`, `practical`) VALUES
(15, 'CS01', 'CSE', 'TY', 'Database Engineering', 'DE', '1', '150', 1, 1),
(16, 'CS02', 'CSE', 'TY', 'Design Analysis and Algo', 'DAA', '1', '150', 1, 1),
(17, 'CS03', 'CSE', 'TY', 'Artifitial Intelligence', 'AI', '1', '125', 1, 0),
(18, 'CS04', 'CSE', 'TY', 'Operating System', 'OS', '1', '125', 1, 1),
(19, 'CS05', 'CSE', 'TY', 'Mobile Application Develo', 'MAD', '1', '100', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courseallocation`
--

CREATE TABLE `courseallocation` (
  `id` int(10) NOT NULL,
  `course_id` varchar(25) NOT NULL,
  `faculty_id` varchar(25) NOT NULL,
  `academic_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseallocation`
--

INSERT INTO `courseallocation` (`id`, `course_id`, `faculty_id`, `academic_id`) VALUES
(2, 'CS01', 'SKN002', 1),
(3, 'CS02', 'SKN003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `highest_qualification` varchar(25) NOT NULL,
  `experience` varchar(25) NOT NULL,
  `joining_date` date NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `fname`, `mname`, `lname`, `address`, `mobile_no`, `email`, `password`, `highest_qualification`, `experience`, `joining_date`, `dateOfBirth`, `gender`, `designation`) VALUES
('CS01', 'Balkrushna', 'B', 'Jagadale', 'Taushi', '1234567894', 'jagadale@gmail.com', 'Jagadale@123', 'Mtech', '5', '0000-00-00', '0000-00-00', 'male', 'Asst. Professor'),
('CS02', 'Uday', 'mname', 'Phule', 'Akluj', '1234567894', 'phule@gmail.com', 'Phule@123', 'Mtech', '5', '2023-02-14', '2023-02-08', 'Male', 'Asst. Professor'),
('CS03', 'Sanddep', 'mname', 'Linge', 'Taushi', '1234567894', 'linge@gmail.com', 'Linge@123', 'Mtech', '5', '2021-02-11', '1196-10-10', 'Male', 'Asst. Professor'),
('CS04', 'Anuradha', 'A', 'More', 'Pandharpur', '1234567895', 'More123@gmail.com', 'More@123', 'Mtech', '5', '2023-02-01', '2023-02-01', 'Female', 'Asst. Professor'),
('CS05', 'Shivaji', 'mname', 'Pawar', 'sangola', '1234567894', 'Pavar@gmail.com', 'Pavar@123', 'Mtech', '8', '2023-02-02', '2023-02-09', 'Male', 'Asst. Professor'),
('CS06', 'Ramesh', 'mname', 'Yevale', 'satara', '1234567894', 'Yevale@gmail.com', 'Yevale@123', 'Mtech', '5', '0000-00-00', '0000-00-00', 'male', 'Asst. Professor');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `beforeInsertFaculty` BEFORE INSERT ON `faculty` FOR EACH ROW BEGIN
  insert into users values(new.email,new.password,new.mobile_no,"2");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_update_users` BEFORE UPDATE ON `faculty` FOR EACH ROW BEGIN
  IF NEW.email <> OLD.email THEN
    SET NEW.email = OLD.email;
  END IF;
  IF NEW.password <> OLD.password THEN
    SET NEW.password = OLD.password;
  END IF;
  IF NEW.mobile_no <> OLD.mobile_no THEN
    SET NEW.mobile_no = OLD.mobile_no;
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `practicalfeedback`
--

CREATE TABLE `practicalfeedback` (
  `id` int(10) NOT NULL,
  `emailId` varchar(25) NOT NULL,
  `subjectName` varchar(25) NOT NULL,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practicalfeedback`
--

INSERT INTO `practicalfeedback` (`id`, `emailId`, `subjectName`, `comment`) VALUES
(1, 'vinodasabe35@gmail.com', 'Database Engineering', 'No Doubt ');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(25) NOT NULL,
  `token` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `mobile_no` bigint(25) NOT NULL,
  `prn_no` bigint(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `academic_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `email`, `password`, `mobile_no`, `prn_no`, `gender`, `branch`, `class`, `dob`, `academic_id`) VALUES
(61, 'Vinod', 'Shivaji ', 'Asabe', 'vinodasabe35@gmail.com', 'Vinod@123', 2147483647, 2020032500156100, 'Male', 'CSE', 'TY', '5/17/2002', 1),
(62, 'Prashant', 'Shahaji', 'Hatekar', 'prashanthatekar5585@gmail', 'Prashant@123', 2147483647, 2020032500154300, 'Male', 'CSE', 'TY', '8/10/2002', 1),
(63, 'Anjana', 'Ramchandra', 'Godase', 'anjanagodase1908@gmail.co', 'Anjana@123', 2147483647, 2021032500009400, 'Female', 'CSE', 'TY', '8/19/2001', 1),
(64, 'Prashila', 'Prakash ', 'Mali', 'prashilamali123@gmail.com', 'Prashila@123', 2147483647, 2021032500009400, 'Female', 'CSE', 'TY', '6/8/2003', 1),
(65, 'Vaishnavi', 'Satish ', 'Ghadage', 'vaishnavighadage@gmail.co', 'Vaishnavi@123', 2147483647, 2147483647, 'Female', 'CSE', 'TY', '10/6/2003', 1),
(66, 'Vishakha', 'Vilas ', 'Pawar', 'pawarvishakha2003@gmial.c', 'Vishakha@123', 1122334455, 2147483647, 'Female', 'CSE', 'TY', '2/26/2003', 1),
(67, 'Rutuja', 'Prakash', 'Asabe', 'rutujaasabe@gmail.com', 'Rutuja@123', 2147483647, 2021032500009400, 'Female', 'CSE', 'TY', '1/12/2001', 1),
(68, 'Rupali', 'Babaso', 'Gajare', 'rupali@gmail.com', 'Ruplai@123', 2147483647, 2021032500009400, 'Female', 'CSE', 'TY', '1/4/2003', 1),
(69, 'Pratiksha', 'Navanath', 'Danake', 'danakepratiksha1020@gmail', 'Pratiksha@123', 7875661674, 2021032500009400, 'Female', 'CSE', 'TY', '13/12/2001', 1);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `beforeInsertStudent` BEFORE INSERT ON `student` FOR EACH ROW BEGIN
  insert into users values(new.email,new.password,new.mobile_no,3);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `theoryfeedback`
--

CREATE TABLE `theoryfeedback` (
  `id` int(25) NOT NULL,
  `emailId` varchar(25) NOT NULL,
  `subjectName` varchar(25) NOT NULL,
  `noProblem` int(1) NOT NULL,
  `lowVoice` int(1) NOT NULL,
  `impBoard` int(1) NOT NULL,
  `FastSyllabus` int(1) NOT NULL,
  `pEnglish` int(1) NOT NULL,
  `pPreparation` int(1) NOT NULL,
  `lSyllabus` int(1) NOT NULL,
  `lackInteraction` int(1) NOT NULL,
  `wrongPro` int(1) NOT NULL,
  `doubtNotClear` int(1) NOT NULL,
  `lessExplanation` int(1) NOT NULL,
  `FastSpeaking` int(1) NOT NULL,
  `comment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theoryfeedback`
--

INSERT INTO `theoryfeedback` (`id`, `emailId`, `subjectName`, `noProblem`, `lowVoice`, `impBoard`, `FastSyllabus`, `pEnglish`, `pPreparation`, `lSyllabus`, `lackInteraction`, `wrongPro`, `doubtNotClear`, `lessExplanation`, `FastSpeaking`, `comment`) VALUES
(3, 'vinodasabe35@gmail.com', 'Database Engineering', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Gooooood'),
(4, 'vinodasabe35@gmail.com', 'Design Analysis and Algo', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Good'),
(5, 'vinodasabe35@gmail.com', 'Artifitial Intelligence', 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 'Not Good'),
(6, 'vinodasabe35@gmail.com', 'Operating System', 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 'Too Much Writting'),
(7, 'vinodasabe35@gmail.com', 'Mobile Application Develo', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Gooooood'),
(8, 'dhalechandrika@gmail.com', 'Database Engineering', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'No Doubt '),
(9, 'dhalechandrika@gmail.com', 'Design Analysis and Algo', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 'Very Gooooood'),
(10, 'dhalechandrika@gmail.com', 'Artifitial Intelligence', 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 'Not Good'),
(11, 'dhalechandrika@gmail.com', 'Operating System', 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 'Not Good'),
(12, 'dhalechandrika@gmail.com', 'Mobile Application Develo', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Good'),
(13, 'rutujaasabe@gmail.com', 'Database Engineering', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'VeryGood'),
(14, 'rutujaasabe@gmail.com', 'Design Analysis and Algo', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Gooooooooooooooooooo'),
(15, 'rutujaasabe@gmail.com', 'Artifitial Intelligence', 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 'No Doubt '),
(16, 'rutujaasabe@gmail.com', 'Operating System', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 'Not Good'),
(17, 'rutujaasabe@gmail.com', 'Mobile Application Develo', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `mobile_no` int(25) NOT NULL,
  `user_role` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `mobile_no`, `user_role`) VALUES
('email', 'password', 0, 2),
('jagadale@gmail.com', 'Jagadale@123', 1234567894, 2),
('phule@gmail.com', 'Phule@123', 1234567894, 2),
('linge@gmail.com', 'Linge@123', 1234567894, 2),
('More@gmail.com', 'More@123', 1234567895, 2),
('Pavar@gmail.com', 'Pavar@123', 1234567894, 2),
('Yevale@gmail.com', 'Yevale@123', 1234567894, 2),
('prashanthatekar5585@gmail', 'Prashant@123', 2147483647, 3),
('anjanagodase1908@gmail.co', 'Anjana@123', 2147483647, 3),
('prashilamali123@gmail.com', 'Prashila@123', 2147483647, 3),
('vaishnavighadage@gmail.co', 'Vaishnavi@123', 2147483647, 3),
('pawarvishakha2003@gmial.c', 'Vishakha@123', 1122334455, 3),
('rutujaasabe@gmail.com', 'Rutuja@123', 2147483647, 3),
('rupali@gmail.com', 'Ruplai@123', 2147483647, 3),
('danakepratiksha1020@gmail', 'Pratiksha@123', 2147483647, 3),
('cse@gmail.com', 'Cse@1234', 1234567890, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject_id` (`courseId`);

--
-- Indexes for table `courseallocation`
--
ALTER TABLE `courseallocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practicalfeedback`
--
ALTER TABLE `practicalfeedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailId` (`emailId`,`subjectName`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theoryfeedback`
--
ALTER TABLE `theoryfeedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailId` (`emailId`,`subjectName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courseallocation`
--
ALTER TABLE `courseallocation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `practicalfeedback`
--
ALTER TABLE `practicalfeedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `theoryfeedback`
--
ALTER TABLE `theoryfeedback`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
