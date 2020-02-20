-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 05:08 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `FullName`, `Email`, `password`) VALUES
(0, 'Deejay Deejay', 'dj@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `assistance`
--

CREATE TABLE `assistance` (
  `id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `Assistance_Date` date NOT NULL,
  `Assistance_Type` varchar(255) NOT NULL,
  `Invoice` varchar(255) NOT NULL,
  `Not_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblexpense`
--

CREATE TABLE `tblexpense` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) DEFAULT NULL,
  `ExpenseCost` varchar(200) DEFAULT NULL,
  `NoteDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(11, 'remember c gweshe', 'rgchenge@gmail.com', 784631051, '4befd1a5b75ef52a55e545aa36e29d54', '2019-08-24 10:17:04'),
(12, 'kudzanai kapishe', 'kudzanaikapishe@gmail.com', 778925243, '81dc9bdb52d04dc20036dbd8313ed055', '2019-10-06 07:28:54'),
(13, 'kapishe kudzanai', 'kpishekudzanai@gmail.com', 778925243, 'd93591bdf7860e1e4ee2fca799911215', '2019-10-12 23:39:08'),
(14, 'CHEM', 'c@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2019-10-13 00:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brkdwn_details`
--

CREATE TABLE `tbl_brkdwn_details` (
  `UserId` int(11) NOT NULL,
  `date_brkdwn` date NOT NULL DEFAULT current_timestamp(),
  `location` varchar(50) NOT NULL,
  `truck_desc` varchar(29) NOT NULL,
  `truck_co` varchar(25) NOT NULL,
  `problem` varchar(200) NOT NULL,
  `dr_name` varchar(56) NOT NULL,
  `reference` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brkdwn_details`
--

INSERT INTO `tbl_brkdwn_details` (`UserId`, `date_brkdwn`, `location`, `truck_desc`, `truck_co`, `problem`, `dr_name`, `reference`) VALUES
(12, '2019-11-21', 'hjbhjh', 'uygiuhy', 'gjhggjhn', 'hbvhb', '25389622', 20190002),
(12, '2019-10-13', 'senga shops', 'white long nose ', 'CA', 'engine failure', 'shingi', 20190001),
(12, '2019-10-04', 'steyr', 'fsdgh', 'gfhgjku', 'xfhgjhk', '12345679', 20190005);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblexpense`
--
ALTER TABLE `tblexpense`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_brkdwn_details`
--
ALTER TABLE `tbl_brkdwn_details`
  ADD PRIMARY KEY (`location`),
  ADD UNIQUE KEY `reference` (`reference`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblexpense`
--
ALTER TABLE `tblexpense`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_brkdwn_details`
--
ALTER TABLE `tbl_brkdwn_details`
  MODIFY `reference` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20190006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
