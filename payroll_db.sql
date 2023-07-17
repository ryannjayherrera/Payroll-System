-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 03:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `Fld_RecID` varchar(50) NOT NULL,
  `Fld_UserID` varchar(50) NOT NULL,
  `Fld_Name` varchar(50) NOT NULL,
  `Fld_Type` varchar(20) NOT NULL,
  `Fld_TimeStamp` time NOT NULL DEFAULT current_timestamp(),
  `Fld_StationNumber` varchar(11) NOT NULL,
  `Fld_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`Fld_RecID`, `Fld_UserID`, `Fld_Name`, `Fld_Type`, `Fld_TimeStamp`, `Fld_StationNumber`, `Fld_Date`) VALUES
('01157ad5-10b1-4998-a604-17420f338f94', '012', 'RYANN JAY HERRERA', 'TIME - IN', '09:38:12', '06', '2023-07-11'),
('081c16d3-34a9-4510-8a8c-7fc69533cec6', '012', 'RYANN JAY HERRERA', 'TIME - IN', '08:46:14', '06', '2023-07-11'),
('0ac501b5-8c05-4976-a2d2-7af2100582e4', '012', 'RYANN JAY HERRERA', 'TIME - IN', '08:19:41', '06', '2023-07-11'),
('124bd67d-afda-489a-9fbc-699c732825c4', '012', 'RYANN JAY HERRERA', 'MORNING - IN', '10:32:16', '06', '2023-07-11'),
('28b92862-7577-40ba-a9c9-8699a157c978', '012', 'RYANN JAY HERRERA', 'AM BREAK - IN', '11:11:16', '06', '2023-07-11'),
('2ab51c5a-d52f-4636-af00-567c79cda99f', '012', 'RYANN JAY HERRERA', 'TIME - OUT', '10:11:32', '06', '2023-07-06'),
('34f2f6ab-8dc7-4d31-ac4b-ef573aea9137', '012', 'RYANN JAY HERRERA', 'TIME - IN', '10:25:21', '06', '2023-07-06'),
('3d466eae-8938-4612-95ac-f27e080675a8', '012', 'RYANN JAY HERRERA', 'TIME - OUT', '11:31:17', '06', '2023-07-06'),
('409c69e6-799f-4393-92dd-cc0e5b9dee6d', '012', 'RYANN JAY HERRERA', 'AM BREAK - OUT', '10:11:00', '06', '2023-07-06'),
('513a3c4a-1d3c-4981-8f21-7d0690206afe', '012', 'RYANN JAY HERRERA', 'TIME - IN', '10:10:34', '06', '2023-07-06'),
('60ee3926-6be1-44d9-919b-add3fd5e9b51', '012', 'RYANN JAY HERRERA', 'TIME - IN', '09:39:52', '06', '2023-07-11'),
('6d640b86-9d81-432c-8573-9b92411b2a9f', '012', 'RYANN JAY HERRERA', 'TIME - IN', '12:52:06', '06', '2023-07-06'),
('710bbf6e-4c8a-4353-8223-643df38ea1ee', '012', 'RYANN JAY HERRERA', 'TIME - OUT', '11:31:24', '06', '2023-07-06'),
('80ace759-aa96-41f2-bd38-97e5912525f3', '012', 'RYANN JAY HERRERA', 'TIME - OUT', '11:31:21', '06', '2023-07-06'),
('888edfe9-d0e8-4b1d-9219-f90470181007', '012', 'RYANN JAY HERRERA', 'MORNING - IN', '10:55:11', '06', '2023-07-11'),
('88aa375c-3334-4781-bb42-d4499e72bf0a', '012', 'RYANN JAY HERRERA', 'MORNING - IN', '10:54:18', '06', '2023-07-11'),
('98803091-3d4a-4903-992e-24b74de0d2a7', '012', 'RYANN JAY HERRERA', 'PM BREAK - OUT', '09:01:42', '06', '2023-07-11'),
('9dd6474e-5a97-4368-8ad5-fe9003355e19', '012', 'RYANN JAY HERRERA', 'TIME - IN', '08:21:51', '06', '2023-07-11'),
('bd49a37e-3a5a-4a1a-bc1c-08c1060e3c5c', '012', 'RYANN JAY HERRERA', 'PM BREAK - IN', '10:11:24', '06', '2023-07-06'),
('e6bc50bd-1607-4d03-ad8d-5556a712c224', '012', 'RYANN JAY HERRERA', 'PM BREAK - OUT', '10:11:18', '06', '2023-07-06'),
('e96cc109-85c8-4f7a-ad78-3ac83a592693', '012', 'RYANN JAY HERRERA', 'TIME - IN', '08:27:52', '06', '2023-07-11'),
('f1d6091f-5046-4778-917e-1e0e5c5b32eb', '012', 'RYANN JAY HERRERA', 'AM BREAK - IN', '10:11:08', '06', '2023-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance_time_table`
--

CREATE TABLE `tbl_attendance_time_table` (
  `Fld_RecID` varchar(50) NOT NULL,
  `Fld_UserName` varchar(50) NOT NULL,
  `Fld_UserID` varchar(50) NOT NULL,
  `Fld_TimeIN` time NOT NULL DEFAULT current_timestamp(),
  `Fld_TimeOut` time DEFAULT NULL,
  `Fld_AM_B_IN` time DEFAULT NULL,
  `Fld_AM_B_OUT` time DEFAULT NULL,
  `Fld_PM_B_IN` time DEFAULT NULL,
  `Fld_PM_B_OUT` time DEFAULT NULL,
  `Fld_DateStamp` datetime NOT NULL DEFAULT current_timestamp(),
  `Fld_StationNumber` int(11) NOT NULL,
  `Fld_DeviceIP` text NOT NULL,
  `Fld_DeviceName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `Fld_RecID` varchar(50) NOT NULL DEFAULT '',
  `Fld_EmployeeID` char(10) NOT NULL,
  `Fld_FirstName` varchar(30) NOT NULL,
  `Fld_MiddleName` varchar(30) NOT NULL,
  `Fld_LastName` varchar(30) NOT NULL,
  `Fld_Gender` char(10) NOT NULL,
  `Fld_Age` int(2) NOT NULL,
  `Fld_Birthday` date NOT NULL,
  `Fld_Address` varchar(255) NOT NULL,
  `Fld_ContactNumber` char(15) NOT NULL,
  `Fld_DateHired` date NOT NULL,
  `Fld_Position` varchar(50) NOT NULL,
  `Fld_Status` text NOT NULL,
  `Fld_DateStamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`Fld_RecID`, `Fld_EmployeeID`, `Fld_FirstName`, `Fld_MiddleName`, `Fld_LastName`, `Fld_Gender`, `Fld_Age`, `Fld_Birthday`, `Fld_Address`, `Fld_ContactNumber`, `Fld_DateHired`, `Fld_Position`, `Fld_Status`, `Fld_DateStamp`) VALUES
('72e0d899-2151-11ee-8d3f-a036bcac7667', '012', 'Ryann Jay', 'E', 'Herrera', 'Male', 32, '2023-07-13', 'Cavite City', '9999', '2023-07-12', 'Software Developer', 'Provi', '2023-07-13 15:46:59'),
('a9ea149a-21ea-11ee-8f3b-a036bcac7667', '013', 'Jay Ryann', 'Herrera', 'Esguerra', 'Male', 23, '2023-07-13', 'Manila', '4234', '2023-07-12', 'Software Developer', 'Regular', '2023-07-14 10:03:45');

--
-- Triggers `tbl_employee`
--
DELIMITER $$
CREATE TRIGGER `insert_uuid` BEFORE INSERT ON `tbl_employee` FOR EACH ROW BEGIN
    SET NEW.Fld_RecID = UUID();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `Fld_RecID` int(11) NOT NULL,
  `Fld_UserName` text NOT NULL,
  `Fld_Status` int(11) NOT NULL,
  `Fld_DateInserted` datetime NOT NULL DEFAULT current_timestamp(),
  `Fld_IDnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`Fld_RecID`);

--
-- Indexes for table `tbl_attendance_time_table`
--
ALTER TABLE `tbl_attendance_time_table`
  ADD PRIMARY KEY (`Fld_RecID`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`Fld_RecID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`Fld_RecID`),
  ADD UNIQUE KEY `Fld_RecID` (`Fld_RecID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `Fld_RecID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
