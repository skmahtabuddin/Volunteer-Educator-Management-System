-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 09:06 PM
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
(104, 'Khilbarirtek School', 'Mohakhali', '', '', 'Booked', 'mustarisuma@gmail.com'),
(109, '', 'Mohakhali', '2019-12-12', '17:30', 'Booked', 'mustarisuma@gmail.com'),
(110, 'Durbar School', 'Mohakhali', '2019-02-08', '12:30', 'Booked', 'akash@vems.com'),
(111, 'Shunte ki paw', 'Mohakhali', '2019-09-09', '11:30', 'Booked', 'admin@vems.com'),
(112, 'Na paina', 'Mohakhali', '2019-10-09', '12:30', 'Booked', 'sk.aakash@yahoo.com'),
(113, '', 'Mohakhali', '2019-12-09', '', 'Booked', 'admin@vems.com');

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donator` (
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_no` int(255) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `account` varchar(30) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donator`
--

INSERT INTO `donator` (`Date`, `Name`, `Email`, `Mobile_no`, `payment_type`, `account`, `amount`) VALUES
('2019-07-28 18:37:24', '', '', 0, 'Credit Card', '153', 50000),
('2019-07-28 18:41:08', '0', '1', 0, 'Credit Card', '258', 50000),
('2019-07-28 18:42:18', '', '', 0, 'Credit Card', '2342342', 200),
('2019-07-28 18:44:02', '', '', 0, 'Credit Card', '14225', 50000),
('2019-07-28 18:44:58', '1', 'admin@vems.com', 1777777777, 'dfsdf', '12', 2),
('2019-07-28 18:52:12', 'admin', 'admin@vems.com', 1521333245, 'Credit Card', '153', 200),
('2019-07-28 18:59:50', 'Sk Aakash', 'sk.aakash@yahoo.com', 1688288111, 'Credit Card', '159753258654', 10000),
('2019-07-28 19:02:58', 'admin', 'admin@vems.com', 1521333245, 'Credit Card', '7865768', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `age` int(10) NOT NULL,
  `Inst` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `mobile`, `age`, `Inst`) VALUES
('admin', 'admin@vems.com', '12345', 1521333245, 15, 'fgdfgsdgsdg'),
('hfh', 'akash@vems.com', '1452', 1521333245, 5, 'ghfg'),
('Jomidarer baccha', 'jamin@vems.com', '96321', 174582335, 25, 'jamindar@vems.com'),
('Mushtari Suma', 'mustarisuma@gmail.com', '1598741', 1676171657, 22, 'BRAC University'),
('Sk Aakash', 'sk.aakash@yahoo.com', '951263', 1688288111, 25, 'BRAC University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
