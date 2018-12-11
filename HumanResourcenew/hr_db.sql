-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 06:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_employee`
--

CREATE TABLE `list_employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_employee`
--

INSERT INTO `list_employee` (`id`, `firstname`, `lastname`, `contact_no`, `address`, `gender`, `age`, `username`, `password`) VALUES
(5, 'Ian Ireneo', 'Oropesa Jr.', '', '', 'Male', 18, 'Ian Ireneo', 'Ian Ireneo'),
(6, 'Adrian', 'Lopez', '', '', 'Male', 50, 'Adrian', 'Adrian'),
(7, 'Ian', 'Alcaraz', '', '', 'Female', 45, 'Ian', 'Ian'),
(8, 'Ruel', 'Villarobin', '+639752777861', 'qwe', 'Male', 18, 'Stib', 'Stib');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `table_timelog`
--

CREATE TABLE `table_timelog` (
  `id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `g_date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_timelog`
--

INSERT INTO `table_timelog` (`id`, `g_id`, `g_date`, `time_in`, `time_out`) VALUES
(1, 1, '2017-12-19', '11:09:31', '23:18:24'),
(3, 2, '2017-12-19', '11:17:55', '20:18:12'),
(4, 1, '2017-12-20', '11:25:21', '11:27:15'),
(5, 2, '2017-12-20', '01:51:41', '01:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_employee`
--
ALTER TABLE `list_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_timelog`
--
ALTER TABLE `table_timelog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_employee`
--
ALTER TABLE `list_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_timelog`
--
ALTER TABLE `table_timelog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
