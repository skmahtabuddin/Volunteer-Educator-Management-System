-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 12:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vems`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `School` varchar(1000) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Booker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `School`, `Area`, `Date`, `Time`, `Status`, `Booker`) VALUES
(62, '', 'Mohakhali', '', '', 'Booked', 'admin@vems.com'),
(84, '', 'Mohakhali', '', '', 'Booked', 'admin@vems.com'),
(91, '', 'Motijheel', '', '', 'Booked', 'admin@vems.com'),
(92, '', 'Badda', '', '', 'Booked', 'admin@vems.com'),
(93, '', 'Mirpur', '', '', 'Booked', 'admin@vems.com'),
(94, '', 'Mohakhali', '', '', 'Booked', 'admin@vems.com'),
(98, 'Durbar School', 'Mohakhali', '', '', 'Booked', 'admin@vems.com'),
(99, 'Durbar School', 'Mohakhali', '', '', 'Booked', 'mustarisuma@gmail.com'),
(100, 'Khilbarirtek School', 'Mohakhali', '', '', 'Booked', 'admin@vems.com'),
(101, 'lalalal', 'Mohakhali', '', '', 'Booked', 'mustarisuma@gmail.com'),
(102, '', 'Mohakhali', '', '', 'Booked', 'mustarisuma@gmail.com'),
(103, 'Durbar School', 'Mohakhali', '', '', 'Available', ''),
(104, 'Khilbarirtek School', 'Mohakhali', '', '', 'Booked', 'mustarisuma@gmail.com'),
(105, '', 'Mohakhali', '2019-05-15', '', 'Available', ''),
(106, '', 'Mohakhali', '2019-05-13', '', 'Available', ''),
(107, '', 'Badda', '', '12:30', 'Available', ''),
(108, '', 'Badda', '', '13:40', 'Available', ''),
(109, '', 'Mohakhali', '2019-12-12', '17:30', 'Booked', 'mustarisuma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_no` int(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `account` varchar(30) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`Name`, `Email`, `Mobile_no`, `payment_type`, `account`, `amount`) VALUES
('SHEIKH', 'admin@vems.com', 34234234, 'Credit Card', '2342342', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nid` int(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `age` int(10) NOT NULL,
  `Inst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `nid`, `mobile`, `age`, `Inst`) VALUES
('admin', 'admin@vems.com', '12345', 0, 1521333245, 15, 'fgdfgsdgsdg'),
('hfh', 'akash@vems.com', '1452', 0, 1521333245, 5, 'ghfg'),
('Jomidarer baccha', 'jamin@vems.com', '96321', 0, 174582335, 25, 'jamindar@vems.com'),
('Mushtari Suma', 'mustarisuma@gmail.com', '1598741', 0, 1676171657, 22, 'BRAC University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donator`
--
ALTER TABLE `donator`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
