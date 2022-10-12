-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 02:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Name` varchar(20) NOT NULL,
  `Age` int(2) NOT NULL,
  `Phoneno` bigint(10) NOT NULL,
  `emailid` varchar(35) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `PlanType` varchar(25) NOT NULL,
  `JoinDate` date NOT NULL DEFAULT current_timestamp(),
  `fees` varchar(10) NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Name`, `Age`, `Phoneno`, `emailid`, `Gender`, `PlanType`, `JoinDate`, `fees`) VALUES
('Vyasaray Kamath', 22, 8296294734, 'vyasaraykamath661@gmail.com', 'Male', 'Premium', '2022-09-12', 'paid'),
('Isha Nithya', 28, 9515824626, 'IshaNithya@gmail.com', 'Female', 'Basic', '2022-09-12', 'paid'),
('Pushpa Raj', 37, 9667985173, 'PushpaRaj@gmail.com', 'Male', 'Premium', '2022-09-12', 'paid'),
('Rajkumari Mridula', 35, 9685362987, 'RajkumariMridula@gmail.com', 'Female', 'Value', '2022-09-12', 'paid'),
('Mohinder Kumar', 22, 9754508132, 'MohinderKumar@gmail.com', 'Male', 'Value', '2022-09-12', 'paid'),
('Sheela Gurpreet', 28, 9777116133, 'SheelaGurpreet@gmail.com', 'Female', 'Basic', '2022-09-12', 'unpaid'),
('Harendra Rajiv', 35, 9814169476, 'HarendraRajiv@gmail.com', 'Male', 'Value', '2022-09-12', 'unpaid'),
('Dileep Madhukar', 34, 9868942526, 'DileepMadhukar@gmail.com', 'Male', 'Premium', '2022-09-12', 'unpaid'),
('Narendra Manisha', 30, 9895302128, 'NarendraManisha@gmail.com', 'Male', 'Premium', '2022-09-12', 'unpaid'),
('Nirupama Indrani', 27, 9898493973, 'NirupamaIndrani@gmail.com', 'Female', 'Value', '2022-09-12', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Mobileno` bigint(10) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Name`, `Email`, `Mobileno`, `Message`) VALUES
('Vyasaray', 'vyasaraykamath661@gmail.com', 8296294734, 'Can I put my membership on hold?'),
('Bipin Upasana', 'BipinUpasana@gmail.com', 9291494768, 'What if I want to cancel my membership?\r\n'),
('Anant Sashi', 'AnantSashi001@gmail.com', 9936784021, 'How old do I have to be to join Fitness?');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `Planname` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`Planname`, `Price`) VALUES
('Basic', 600),
('Premium', 1600),
('Value', 1100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Phoneno`),
  ADD KEY `plan` (`PlanType`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Mobileno`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`Planname`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `plan` FOREIGN KEY (`PlanType`) REFERENCES `plans` (`Planname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
