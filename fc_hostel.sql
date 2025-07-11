-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:27 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fc_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf32 NOT NULL,
  `password` varchar(100) CHARACTER SET utf32 NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`, `date_time`) VALUES
(1, 'Obeng Francis', 'app5926', '2019-01-17 19:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `CustomerID` int(1) NOT NULL,
  `Full_Name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Phone_Number` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Relative_Number` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Check_In_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Check_Out_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Room_Type` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Company_Name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Number_Of_Person` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Number_Of_Room` varchar(100) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`CustomerID`, `Full_Name`, `Email`, `Phone_Number`, `Relative_Number`, `Check_In_Date`, `Check_Out_Date`, `Room_Type`, `Company_Name`, `Number_Of_Person`, `Number_Of_Room`) VALUES
(1, 'Obeng Francis', 'appeartus58@gmail.com', '0206139034', '0547178456', '2019-01-18 20:30:00', '2019-01-19 20:30:00', 'EXECUTIVE', 'FTCB', '3', '3'),
(2, 'Yeboah Comfort', 'yeboahcomfort@gmail.com', '0244558899', '0241663322', '2019-01-21 19:00:00', '2019-01-23 19:00:00', 'STANDARD', 'WAM', '5', '5'),
(3, 'Olivia Mensah', 'olimensah2020@gmail.com', '0245112233', '0247336644', '2019-01-25 22:47:00', '2019-01-26 22:47:00', 'STANDARD', 'Ucom', '5', '5'),
(4, 'Yeboah Comfort', 'www.dada.org.gh', '124562215', '0215547758', '2019-03-02 19:27:00', '2019-03-04 19:27:00', 'EXECUTIVE', 'wam', '3', '3'),
(5, 'Yeboah Comfort', 'yeboahcomfort@gmail.com', '012457892213', '0124578895', '2019-03-09 21:59:00', '2019-03-11 20:59:00', 'EXECUTIVE', 'UEWK', '2', '3'),
(6, 'Yeboah Comfort', 'yeboahcomfort@gmail.com', '0243996655', '021458887', '2019-05-04 00:49:00', '2019-05-05 00:49:00', 'suite', 'wam', '5', '5'),
(7, 'Ama Ghana', 'Amagh@gmail.com', '0206139034', '0554718596', '2019-08-30 23:42:00', '2019-08-31 23:42:00', 'EXECUTIVE', 'nabco', '4', '4'),
(8, 'Ama Ghana', 'Amagh@gmail.com', '0206139034', '0552039123', '2019-11-02 21:58:00', '2019-11-03 07:00:00', 'STANDARD', 'O, sec', '4', '3'),
(9, 'ama yaw', 'an@gmail.com', '02458963', '0247889966', '2019-11-10 00:21:00', '2019-11-16 00:20:00', 'EXECUTIVE', '', '3', '3'),
(10, 'Bob yaw', 'Amagh@gmail.com', '0552039123', '0206139034', '2019-11-10 00:30:00', '2019-11-11 00:31:00', 'Suit', 'O sec', '2', '3'),
(11, 'Ama Ghana', 'obengfrancis991@gmail.com', '0552039123', '0206985647', '2020-08-09 01:45:00', '2020-08-11 01:45:00', 'SUITE', 'nabco', '2', '2'),
(12, 'Bob yaw', 'obengfrancis991@gmail.com', '1214554545', '454535435', '2020-08-05 23:38:00', '2020-08-07 23:38:00', 'SUITE', 'O, sec', '-1', '2'),
(13, 'Ama Ghana', 'obengfrancis991@gmail.com', '0206139034', '0207569836', '2020-09-23 20:48:00', '2020-09-24 20:49:00', 'SUITE', 'nabco', '2', '3'),
(14, 'Ama Ghana', 'obengfrancis991@gmail.com', '0254876985', '21547517', '2020-09-26 18:39:00', '2020-09-26 18:39:00', 'SUITE', 'nabco', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentId` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf32 NOT NULL,
  `email` varchar(100) CHARACTER SET utf32 NOT NULL,
  `comment` longtext CHARACTER SET utf32 NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `username`, `email`, `comment`, `Date_Time`) VALUES
(1, 'Obeng Francis', 'appeartus58@gmail.com', 'great', '2019-01-17 22:24:59'),
(2, 'Olivia Mensah', 'olimensah2020@gmail.com', 'You are doing great job, keep on keeping on', '2019-01-18 20:17:24'),
(3, 'Yeboah Comfort', 'yeboahcomfort@gmail.com', 'Infact, this is a good work done from your outfit, please keep it up', '2019-01-21 19:04:09'),
(4, 'Ama rose', 'Amarose@gmail.com', 'Well done', '2019-11-09 00:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `ID` int(11) NOT NULL,
  `Company_Name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Phone_Number` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Address` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Check_In_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Check_Out_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Hall_Type` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Location` varchar(100) CHARACTER SET utf32 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`ID`, `Company_Name`, `Email`, `Phone_Number`, `Address`, `Check_In_Date`, `Check_Out_Date`, `Hall_Type`, `Location`) VALUES
(1, 'DOMA', 'www.doma.com.gh', '0206139034', 'P.O.BOX 14, Kumasi', '2019-01-19 21:32:00', '2019-01-21 21:32:00', 'CONFERENCE HALL', 'Kumasi'),
(2, 'Daba', 'www.dada.org.gh', '0244789954', 'P. O. BOX 55, ACCRA', '2019-01-22 19:05:00', '2019-01-26 19:05:00', 'AUDIO-VISUAL HALL', 'ACCRA'),
(3, 'nabco', 'obengfrancis991@gmail.com', '0552039123', 'Plot 6 Block  D', '2021-11-24 04:37:00', '2021-11-25 04:37:00', 'MINI CONFERENCE HALL', 'ADADIETEM');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `phone` varchar(100) CHARACTER SET utf32 NOT NULL,
  `message` longtext NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` int(11) NOT NULL,
  `staff_name` varchar(100) CHARACTER SET utf32 NOT NULL,
  `password` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Phone_Number` varchar(100) CHARACTER SET utf32 NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `staff_name`, `password`, `Phone_Number`, `Date_Time`) VALUES
(5, 'Obeng Francis', 'app5926', '0206139034', '2019-11-09 00:19:13'),
(9, 'Miracle Obeng', 'mo', '0552039123', '2020-08-15 19:28:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentId`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`),
  ADD UNIQUE KEY `staff_name` (`staff_name`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `Phone_Number` (`Phone_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `CustomerID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
