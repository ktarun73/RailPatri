-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 08:11 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

DROP TABLE IF EXISTS `accomodation`;
CREATE TABLE `accomodation` (
  `acc_id` int NOT NULL,
  `acc_type` varchar(35) NOT NULL,
  `acc_price` double NOT NULL,
  `acc_slot` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`acc_id`, `acc_type`, `acc_price`, `acc_slot`) VALUES
(1, 'Sitting', 350, 30),
(2, 'Economy A', 390, 30),
(3, 'Economy B', 390, 30),
(4, 'Tourist', 490, 30),
(5, 'Cabin', 600, 30),
(6, 'Deluxe', 700, 30);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `Sr` int NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Sr`, `Name`, `Email`, `Mobile_No`, `Subject`, `Message`) VALUES
(1, 'Abhinav Verma', 'Abhinavv218@gmail.com', '9044653235', 'Regarding Services', 'Great Service!'),
(2, 'Satyam Kumar', 'Abhinavv448@gmail.com', '9044653235', 'Regarding Webpage', 'Nice Work!'),
(4, 'abhinav', 'abhinav@123', '9044653235', 'abhi', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `from2`
--

DROP TABLE IF EXISTS `from2`;
CREATE TABLE `from2` (
  `origin_id` int NOT NULL,
  `Source` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `from2`
--

INSERT INTO `from2` (`origin_id`, `Source`, `user_id`) VALUES
(12, 'KOP', 'Abhinavv21'),
(13, 'TEN', 'Abhinavv21'),
(14, 'DR', 'Abhinavv21'),
(15, 'KOP', 'Abhinavv44'),
(16, 'MYS', 'Abhinavv44');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_info`
--

DROP TABLE IF EXISTS `passenger_info`;
CREATE TABLE `passenger_info` (
  `sr` int NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `Source` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Passenger_Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Age` int NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Contact` bigint NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Accomodation` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Preference` varchar(100) NOT NULL,
  `PNR_num` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `passenger_info`
--

INSERT INTO `passenger_info` (`sr`, `user_id`, `Source`, `Destination`, `Passenger_Name`, `Age`, `Gender`, `Contact`, `Address`, `Accomodation`, `Date`, `Preference`, `PNR_num`) VALUES
(12, 'Abhinavv21', 'KOP', 'CSMT', 'Abhinav Verma', 20, 'Male', 9044653235, '43-E', 'Sitting', '2021-07-22', 'Lower Berth', 20218014),
(13, 'Abhinavv21', 'TEN', 'DR', 'Sai Jeevan', 19, 'Female', 6391319139, '44-R', 'Deluxe', '2021-07-22', 'Upper Berth', 20218015),
(14, 'Abhinavv21', 'DR', 'TEN', 'Satyam Kumar', 20, 'Male', 9900223344, 'Lucknow', 'Tourist', '2021-07-22', 'Side Upper Berth', 20218016),
(15, 'Abhinavv44', 'KOP', 'CSMT', 'Snehashis Samanta', 20, 'Male', 1122005577, 'Kolkata', 'Economy A', '2021-07-19', 'Side Lower Berth', 20218017),
(16, 'Abhinavv44', 'MYS', 'DR', 'Abhi', 20, 'Male', 9044667788, 'Stp', 'Economy B', '2021-07-19', 'Upper Berth', 20218018);

-- --------------------------------------------------------

--
-- Table structure for table `to2`
--

DROP TABLE IF EXISTS `to2`;
CREATE TABLE `to2` (
  `sr` int NOT NULL,
  `dest_id` int NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `to2`
--

INSERT INTO `to2` (`sr`, `dest_id`, `Destination`, `user_id`) VALUES
(12, 12, 'CSMT', 'Abhinavv21'),
(13, 13, 'DR', 'Abhinavv21'),
(14, 14, 'TEN', 'Abhinavv21'),
(15, 15, 'CSMT', 'Abhinavv44'),
(16, 16, 'DR', 'Abhinavv44');

-- --------------------------------------------------------

--
-- Table structure for table `train_info`
--

DROP TABLE IF EXISTS `train_info`;
CREATE TABLE `train_info` (
  `Sr` int NOT NULL,
  `Train_No` varchar(5) NOT NULL,
  `Train_Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Owing_Rly` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Source` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Departure_Time` time NOT NULL,
  `Destination` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Arrival_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `train_info`
--

INSERT INTO `train_info` (`Sr`, `Train_No`, `Train_Name`, `Owing_Rly`, `Source`, `Departure_Time`, `Destination`, `Arrival_Time`) VALUES
(1, '00113', 'CSMT-SHM COVID SPL', 'CR', 'CSMT', '22:35:00', 'SHM', '11:35:00'),
(2, '00123', 'SGLA-SHIM PCET', 'CR', 'SGLA', '00:15:00', 'SHM', '15:00:00'),
(3, '00158', 'ANDI-SAV KISAN SPL', 'CR', 'ANDI', '11:00:00', 'SAV', '07:00:00'),
(4, '00160', 'ANDI-RV SPL', 'CR', 'ANDI', '11:00:00', 'RV', '07:00:00'),
(5, '02163', 'LTT-MAS SF SPL', 'CR', 'LTT', '18:45:00', 'MAS', '16:30:00'),
(6, '02164', 'CHENNAI EXP', 'CR', 'MAS', '18:25:00', 'LTT', '15:40:00'),
(7, '11001', 'SNSI-PVR EXP', 'CR', 'SNSI', '05:00:00', 'PVR', '12:15:00'),
(8, '11002', 'PVR-SNSI EXP', 'CR', 'PVR', '13:00:00', 'SNSI', '20:25:00'),
(9, '11004', 'SWV-DR TUTARI EXP', 'CR', 'SWV', '17:30:00', 'DR', '06:30:00'),
(10, '11005', 'DR-PDY EXPRESS', 'CR', 'DR', '21:30:00', 'PDY', '07:15:00'),
(11, '11006', 'CHALUKYA EXP', 'CR', 'PDY', '20:45:00', 'DR', '05:40:00'),
(12, '11007', 'DECCAN EXPRESS', 'CR', 'CSMT', '07:00:00', 'PUNE', '11:05:00'),
(13, '11008', 'DECCAN EXPRESS', 'CR', 'PUNE', '15:15:00', 'CSMT', '19:17:00'),
(14, '11020', 'KONARK EXPRESS', 'CR', 'BBS', '15:25:00', 'CSMT', '03:55:00'),
(15, '11021', 'DR-TEN EXPRESS', 'CR', 'DR', '21:30:00', 'TEN', '11:45:00'),
(16, '11022', 'TEN-DR EXPRESS', 'CR', 'TEN', '15:00:00', 'DR', '05:40:00'),
(17, '11023', 'SAHYADRI EXPRESS', 'CR', 'CSMT', '17:50:00', 'KOP', '06:05:00'),
(18, '11024', 'SAHYADRI EXP', 'CR', 'KOP', '22:50:00', 'CSMT', '12:05:00'),
(19, '11027', 'CSMT-MAS MAIL', 'CR', 'CSMT', '23:45:00', 'MAS', '03:30:00'),
(20, '11028', 'MAS-CSMT MUMBAI MAIL', 'CR', 'MAS', '23:55:00', 'CSMT', '03:45:00'),
(21, '11033', 'PUNE-DBG EXPRESS', 'CR', 'PUNE', '16:15:00', 'DBG', '06:50:00'),
(22, '11034', 'DBG-PUNE EXPRESS', 'CR', 'DBG', '16:45:00', 'PUNE', '06:05:00'),
(23, '11035', 'SHARAVATHI EXP', 'CR', 'DR', '21:30:00', 'MYS', '21:40:00'),
(24, '11036', 'SHARAVATI EXP', 'CR', 'MYS', '06:15:00', 'DR', '05:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `Sr` int NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Address2` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` int NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Sr`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Gender`, `Address`, `Address2`, `City`, `Pincode`, `State`) VALUES
(1, 'Abhinav', 'Verma', 'Abhinavv21', 'Abhinavv112@gmail.com', 'Abhinavv123@', 'Male', '43-E, Swaroop Nagar, Sitapur', '', 'Sitapur', 261001, 'Uttar Pradesh'),
(3, 'satyam', 'kumar', 'satyam22', 'abhinavv448@gmail.com', 'Abhinavv123@', 'Male', '45-E, Swaroop, Nagar, Sitapur', '', 'Haridwar', 241001, 'Uttar Pradesh'),
(7, 'Abhinav', 'Verma', 'Abhinavv44', 'Abhinavv2180@gmail.com', 'Abhinavv123@', 'Male', '43-E, Swaroop Nagar', '', 'Sitapur', 261001, 'Uttar Pradesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `from2`
--
ALTER TABLE `from2`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `passenger_info`
--
ALTER TABLE `passenger_info`
  ADD PRIMARY KEY (`PNR_num`);

--
-- Indexes for table `to2`
--
ALTER TABLE `to2`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `train_info`
--
ALTER TABLE `train_info`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`Sr`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodation`
--
ALTER TABLE `accomodation`
  MODIFY `acc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `from2`
--
ALTER TABLE `from2`
  MODIFY `origin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `passenger_info`
--
ALTER TABLE `passenger_info`
  MODIFY `PNR_num` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20218019;

--
-- AUTO_INCREMENT for table `to2`
--
ALTER TABLE `to2`
  MODIFY `sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `train_info`
--
ALTER TABLE `train_info`
  MODIFY `Sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `Sr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
