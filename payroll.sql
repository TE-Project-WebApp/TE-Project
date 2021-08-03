-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 04:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `isAdmin` varchar(3) NOT NULL DEFAULT 'No',
  `isHr` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`username`, `pass`, `isAdmin`, `isHr`) VALUES
('jaraxxx', '12345', 'Yes', 'Yes'),
('Jay', '12345', 'no', 'no'),
('JayRathod', '12345', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `hr_table`
--

CREATE TABLE `hr_table` (
  `username` varchar(30) NOT NULL,
  `rate` int(3) DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_table`
--

INSERT INTO `hr_table` (`username`, `rate`) VALUES
('jaraxxx', 10),
('JayRathod', 15);

-- --------------------------------------------------------

--
-- Table structure for table `jaraxxx`
--

CREATE TABLE `jaraxxx` (
  `date` date NOT NULL,
  `latitude` int(20) DEFAULT NULL,
  `longitude` int(20) DEFAULT NULL,
  `count` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jaraxxx`
--

INSERT INTO `jaraxxx` (`date`, `latitude`, `longitude`, `count`) VALUES
('2021-08-01', 19, 73, '0'),
('2021-08-01', 19, 73, '0'),
('2021-08-01', 0, 0, '0'),
('2021-08-01', 19, 73, '0'),
('2021-08-01', 19, 73, '0'),
('2021-08-01', 19, 73, 'NULL'),
('2021-08-01', 19, 73, 'NULL'),
('2021-08-01', 0, 0, 'NULL'),
('2021-08-01', 19, 73, 'NULL'),
('2021-08-02', 0, 0, 'NULL'),
('2021-08-02', 19, 73, 'NULL'),
('2021-08-02', 19, 73, 'NULL'),
('2021-08-02', 19, 73, 'NULL'),
('2021-08-02', 19, 73, 'NULL'),
('2021-08-02', 0, 0, 'NULL'),
('2021-08-02', 0, 0, 'NULL'),
('2021-08-02', 19, 73, 'NULL'),
('2021-08-02', 0, 0, 'NULL'),
('2021-08-02', 0, 0, 'NULL'),
('2021-08-02', 0, 0, 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `jay`
--

CREATE TABLE `jay` (
  `date_` date NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `pic` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jay`
--

INSERT INTO `jay` (`date_`, `latitude`, `longitude`, `pic`) VALUES
('2021-08-02', '19.2561943', '72.86335199999999', 'NULL'),
('2021-08-02', 'NA', 'NA', 'NULL'),
('2021-08-02', '19.2561943', '72.86335199999999', 'NULL'),
('2021-08-02', '19.2561943', '72.86335199999999', 'NULL'),
('2021-08-02', 'NA', 'NA', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `hr_table`
--
ALTER TABLE `hr_table`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
