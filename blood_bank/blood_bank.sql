-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2024 at 12:50 PM
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
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_information`
--

CREATE TABLE `s_information` (
  `S_Name` varchar(50) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Blood_Group` varchar(3) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Total_Donate` int(11) NOT NULL,
  `Last_Donate` varchar(100) NOT NULL,
  `Reg_Date` varchar(100) NOT NULL,
  `S_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_information`
--

INSERT INTO `s_information` (`S_Name`, `Department`, `ID`, `Age`, `Gender`, `Blood_Group`, `City`, `Total_Donate`, `Last_Donate`, `Reg_Date`, `S_Password`) VALUES
('Alukha', 'CSE', 'CS 2102020', 24, 'male', 'a-', 'Dhaka', 2, '2024-11-19', '2024-11-19T11:42:09.416Z', '1234'),
('Oni', 'CSE', 'CS 2102065', 23, 'female', 'b+', 'Dhaka', 1, '2024-11-01', '2024-11-19T11:30:46.175Z', '1234'),
('Shohag', 'CSE', 'CS16', 23, 'M', 'B+', 'Savar', 2, '2024-10-24', '2005-11-24', 'CS16'),
('Israt', 'CSE', 'CS21', 24, 'F', 'A-', 'Savar', 0, '2002-01-24', '2005-11-24', 'CS21'),
('Afia', 'CSE', 'CS23', 23, 'F', 'AB-', 'Savar', 1, '2002-01-24', '2005-10-24', 'CS23'),
('Laboni', 'CSE', 'CS26', 23, 'F', 'AB+', 'Savar', 0, '2002-01-24', '2005-04-24', 'CS26'),
('Ashik', 'CSE', 'CS32', 23, 'M', 'B-', 'Savar', 1, '2002-01-24', '2005-01-24', 'CS32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_information`
--
ALTER TABLE `s_information`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
