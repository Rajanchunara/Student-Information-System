-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `c_id` int(20) NOT NULL,
  `c_code` varchar(50) NOT NULL,
  `c_title` varchar(50) NOT NULL,
  `c_credit` int(50) NOT NULL,
  `c_program` int(20) NOT NULL,
  `c_sem` int(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  `flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`c_id`, `c_code`, `c_title`, `c_credit`, `c_program`, `c_sem`, `file`, `flag`) VALUES
(46, ' 121', ' EEM', 3, 1, 2, '', 0),
(47, ' 434', 'DSA', 3, 1, 7, '', 1),
(48, ' 123', ' EEM', 6, 1, 2, '', 1),
(49, ' 234', ' DBMS', 1, 6, 5, '', 0),
(50, '  1234', ' asc', 2, 7, 6, '', 0),
(51, ' 123', ' sdd', 4, 8, 5, '', 0),
(52, ' 2343', ' sdfsdf', 23, 6, 5, '', 0),
(53, ' 123', ' EEM', 3, 6, 5, '', 0),
(54, ' 123', ' EEM', 3, 1, 4, 'nast.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_tbl`
--

CREATE TABLE `faculty_tbl` (
  `f_id` int(20) NOT NULL,
  `f_code` varchar(50) NOT NULL,
  `f_title` varchar(50) NOT NULL,
  `flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty_tbl`
--

INSERT INTO `faculty_tbl` (`f_id`, `f_code`, `f_title`, `flag`) VALUES
(1, 'sci', 'Science ', 0),
(2, 'MGT.112', 'Management', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice_tbl`
--

CREATE TABLE `notice_tbl` (
  `n_id` int(20) NOT NULL,
  `date` date NOT NULL,
  `notice` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice_tbl`
--

INSERT INTO `notice_tbl` (`n_id`, `date`, `notice`, `file`) VALUES
(1, '2024-07-23', 'Collage program', ''),
(3, '2024-07-24', 'College band', 'IMG20231219131256.jpg'),
(4, '2024-07-25', 'College open', 'nast.jpg'),
(5, '2024-07-02', 'collage program', 'IMG20231219131256.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `program_tbl`
--

CREATE TABLE `program_tbl` (
  `p_id` int(20) NOT NULL,
  `p_code` varchar(50) NOT NULL,
  `p_title` varchar(100) NOT NULL,
  `flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_tbl`
--

INSERT INTO `program_tbl` (`p_id`, `p_code`, `p_title`, `flag`) VALUES
(1, '12234', 'BE Computer', 0),
(6, '456', 'BE Civil', 0),
(7, '789', 'BCA', 0),
(8, '987', 'BBA', 1),
(9, '1235', 'BCA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sem_tbl`
--

CREATE TABLE `sem_tbl` (
  `s_id` int(20) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem_tbl`
--

INSERT INTO `sem_tbl` (`s_id`, `sem`, `flag`) VALUES
(1, 'I', 0),
(2, 'II', 0),
(3, 'III', 0),
(4, 'IV', 0),
(5, 'V', 0),
(6, 'VI', 0),
(7, 'VII', 0),
(8, 'VIII', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `s_id` int(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `roll` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `faculty` int(50) NOT NULL,
  `program` int(11) NOT NULL,
  `semester` int(20) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `t_address` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `f_contact` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `l_relation` varchar(50) NOT NULL,
  `l_contact` varchar(20) NOT NULL,
  `sc_name` varchar(100) NOT NULL,
  `board` varchar(50) NOT NULL,
  `p_year` varchar(20) NOT NULL,
  `cgpa` int(20) NOT NULL,
  `m_subject` varchar(50) NOT NULL,
  `flag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`s_id`, `s_name`, `roll`, `email`, `contact`, `dob`, `gender`, `faculty`, `program`, `semester`, `p_address`, `t_address`, `f_name`, `m_name`, `f_contact`, `l_name`, `l_relation`, `l_contact`, `sc_name`, `board`, `p_year`, `cgpa`, `m_subject`, `flag`) VALUES
(2, 'Hari', 12343431413, 'hari@gmail.com', 1231414123213, '2024-07-24', 'Male', 2, 8, 4, 'qweqewe', 'waeqwe', 'ewfdwefw', 'fwefw', '12312323', 'zdfsfdf', 'sadfwfwe', '123123', 'fdaeqde', 'fewfqe', '2018', 4, 'asdsfwef', 0),
(3, 'Puskar', 20070256, 'prakriti@123.com', 9812232332, '2024-07-02', 'Male', 1, 1, 8, 'Dhangadi', 'Dhangadi', 'Bir sir', 'Mata ji', '987634423', 'Rajan dai', 'Big brother', '98765422467', 'nast', 'NEB', '2020', 4, 'Science', 0),
(5, 'dfsdf', 234234, 'xvxfvfv@gmail.com', 5233244, '2024-07-09', 'Others', 1, 6, 4, 'asasd', 'asdad', 'sasdda', 'sdfsfg', '2312132', 'sdgssr', 'dsfsdfd', '1231314', 'dgsg', 'NEB', '2323', 2, 'dsfsdgr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Rajan', 'rajan0762115@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(16, 'Prakriti', 'prakriti@123.com', '2d7acadf10224ffdabeab505970a8934', 'user'),
(17, 'Manisha', 'manisha@1234.com', '9de37a0627c25684fdd519ca84073e34', 'user'),
(18, 'Hari', 'hari@gmail.com', 'e61e7de603852182385da5e907b4b232', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_program` (`c_program`),
  ADD KEY `c_sem` (`c_sem`);

--
-- Indexes for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `notice_tbl`
--
ALTER TABLE `notice_tbl`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `program_tbl`
--
ALTER TABLE `program_tbl`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sem_tbl`
--
ALTER TABLE `sem_tbl`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `program` (`program`),
  ADD KEY `faculty` (`faculty`),
  ADD KEY `semester` (`semester`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `faculty_tbl`
--
ALTER TABLE `faculty_tbl`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice_tbl`
--
ALTER TABLE `notice_tbl`
  MODIFY `n_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_tbl`
--
ALTER TABLE `program_tbl`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sem_tbl`
--
ALTER TABLE `sem_tbl`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD CONSTRAINT `course_tbl_ibfk_1` FOREIGN KEY (`c_program`) REFERENCES `program_tbl` (`p_id`),
  ADD CONSTRAINT `course_tbl_ibfk_2` FOREIGN KEY (`c_sem`) REFERENCES `sem_tbl` (`s_id`);

--
-- Constraints for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD CONSTRAINT `student_tbl_ibfk_1` FOREIGN KEY (`program`) REFERENCES `program_tbl` (`p_id`),
  ADD CONSTRAINT `student_tbl_ibfk_2` FOREIGN KEY (`faculty`) REFERENCES `faculty_tbl` (`f_id`),
  ADD CONSTRAINT `student_tbl_ibfk_3` FOREIGN KEY (`semester`) REFERENCES `sem_tbl` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
