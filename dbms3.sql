-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 04, 2024 at 12:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `o_id` int(11) NOT NULL,
  `o_Full_Name` varchar(255) NOT NULL,
  `o_Gender` varchar(10) NOT NULL,
  `o_Age` int(11) NOT NULL,
  `o_Phone` varchar(15) NOT NULL,
  `o_Email_ID` varchar(255) NOT NULL,
  `o_Enrollment_No` varchar(50) NOT NULL,
  `o_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`o_id`, `o_Full_Name`, `o_Gender`, `o_Age`, `o_Phone`, `o_Email_ID`, `o_Enrollment_No`, `o_password`) VALUES
(1, 'akshaya', 'female', 19, '123445', 'aka@gmail.com', '123356', '123'),
(2, 'akshayag', 'female', 19, '9827456', 'akshayagsk@123', '264747874', '78');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `P_ID` int(11) NOT NULL,
  `P_Full_Name` varchar(255) NOT NULL,
  `P_Gender` varchar(10) NOT NULL,
  `P_Age` int(11) NOT NULL,
  `P_Phone` varchar(15) NOT NULL,
  `P_Email_ID` varchar(255) NOT NULL,
  `P_Enrollment_No` varchar(20) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `P_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`P_ID`, `P_Full_Name`, `P_Gender`, `P_Age`, `P_Phone`, `P_Email_ID`, `P_Enrollment_No`, `event_name`, `P_password`) VALUES
(1, 'akshaya', 'female', 19, '1267236', 'akshaya@gmail.com', 'gffdghj5124', 'Food Fest\r\n', '123'),
(2, 'johanna', 'female', 19, '73667647', 'johanna@gmail.com', 'gfgshh17567', 'Mehandi art', '12'),
(3, 'ananya', 'female', 19, '172643678', 'ananya@gmail.com', 'dfahsgyud613', 'Music festival', '56'),
(4, 'Ananya Nair ', 'female', 19, '654678539', 'anu@gmail.com', '22STUCHH010456', 'Food Fest', 'anu@123'),
(5, 'Ananya Nair ', 'female', 19, '36552467', 'anu@gmail.com', '22STUCHH010456', '', '167'),
(6, 'Ananya Nair ', 'female', 19, '36552467', 'anu@gmail.com', '22STUCHH010456', 'music festival', '34');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `v_id` int(11) NOT NULL,
  `v_Full_Name` varchar(255) NOT NULL,
  `v_Gender` varchar(10) NOT NULL,
  `v_Age` int(11) NOT NULL,
  `v_Phone` varchar(15) NOT NULL,
  `v_Email_ID` varchar(255) NOT NULL,
  `v_Enrollment_No` varchar(50) NOT NULL,
  `v_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_name`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
