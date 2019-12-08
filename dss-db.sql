-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 10:16 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dss`
--

-- --------------------------------------------------------

--
-- Table structure for table `cure`
--

CREATE TABLE `cure` (
  `diseaseID` int(8) NOT NULL,
  `medicineID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cure`
--

INSERT INTO `cure` (`diseaseID`, `medicineID`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 2),
(3, 3),
(3, 5),
(4, 7),
(4, 6),
(5, 9),
(5, 10),
(6, 13),
(6, 12),
(6, 11),
(7, 14),
(7, 15),
(8, 16),
(9, 16),
(10, 17),
(10, 18),
(10, 19);

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `diseaseID` int(8) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`diseaseID`, `name`) VALUES
(1, 'alergi rinitis'),
(2, 'asthma'),
(3, 'asthma akut'),
(4, 'kanker'),
(5, 'kolesterol'),
(6, 'nyeri'),
(7, 'Eczema'),
(8, 'Eczema mulut'),
(9, 'Eczema tenggorokan'),
(10, 'Diabetes');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospitalID` int(8) NOT NULL,
  `name` varchar(64) NOT NULL,
  `class` varchar(4) NOT NULL,
  `city` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospitalID`, `name`, `class`, `city`) VALUES
(1, 'RSU Sukapura', 'C', 'Bandung'),
(2, 'RSU St. Boromeus', 'B', 'Bandung'),
(3, 'RSU Sartika Asih', 'C', 'Bandung'),
(4, 'RSU Sariningsih', 'D', 'Bandung'),
(5, 'RSU Santosa', 'E', 'Bandung'),
(6, 'RSU Santo Yusuf', 'C', 'Bandung'),
(7, 'RSU Rajawali', 'C', 'Bandung'),
(8, 'RSU Pindad', 'D', 'Bandung'),
(9, 'RSU Muhammadiyah', 'C', 'Bandung'),
(10, 'RSU Kebonjati', 'C', 'Bandung'),
(11, 'RSU Immanuel', 'B', 'Bandung'),
(12, 'RSU dr. Salamun', 'B', 'Bandung'),
(13, 'RSU Bungsu', 'D', 'Bandung'),
(14, 'RSU Al-Islam', 'C', 'Bandung'),
(15, 'RSU Advent', 'C', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineID` int(8) NOT NULL,
  `name` varchar(8) NOT NULL,
  `price` int(8) NOT NULL,
  `isPregnantOK` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicineID`, `name`, `price`, `isPregnantOK`) VALUES
(1, 'Cetirizi', 5000, 0),
(2, 'Singulai', 6000, 1),
(3, 'Monteluk', 7200, 0),
(4, 'Dulera', 4800, 1),
(5, 'Predniso', 9500, 0),
(6, 'Adriamyc', 10600, 1),
(7, 'Carbopla', 7900, 0),
(8, 'Adriamyc', 23000, 1),
(9, 'Atorvast', 24500, 0),
(10, 'Simvasta', 18000, 1),
(11, 'Ibuprofe', 17900, 0),
(12, 'Acetamin', 6000, 1),
(13, 'Tramadol', 4000, 0),
(14, 'Memetazo', 5700, 1),
(15, 'Elidel', 9800, 0),
(16, 'Triamcin', 4700, 1),
(17, 'Victoza', 6250, 0),
(18, 'Januvia', 22700, 1),
(19, 'Metformi', 27900, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`diseaseID`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospitalID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
