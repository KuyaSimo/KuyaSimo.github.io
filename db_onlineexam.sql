-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 12:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `numbah` int(11) NOT NULL,
  `ansq` varchar(50) NOT NULL,
  `IDans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`numbah`, `ansq`, `IDans`) VALUES
(1, '15', 3),
(2, '2', 1),
(3, '9', 1),
(4, '2', 1),
(5, '6', 1),
(6, '0', 3),
(7, '5', 2),
(8, '18', 3),
(9, '11', 1),
(10, '25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `numbah` int(11) NOT NULL,
  `choice` varchar(50) NOT NULL,
  `idchoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`numbah`, `choice`, `idchoice`) VALUES
(1, '0', 1),
(1, '5', 2),
(1, '1', 3),
(1, '15', 4),
(2, '2', 1),
(2, '3', 2),
(2, '4', 3),
(2, '5', 4),
(3, '9', 1),
(3, '14', 2),
(3, '15', 3),
(3, '71', 4),
(4, '2', 1),
(4, '3', 2),
(4, '5', 3),
(4, '6', 4),
(5, '6', 1),
(5, '9', 2),
(5, '14', 3),
(5, '61', 4),
(6, '51', 1),
(6, '52', 2),
(6, '7', 3),
(6, '4', 4),
(7, '10', 1),
(7, '5', 2),
(7, '20', 3),
(7, '8', 4),
(8, '19', 1),
(8, '20', 2),
(8, '18', 3),
(8, '17', 4),
(9, '11', 1),
(9, '20', 2),
(9, '15', 3),
(9, '17', 4),
(10, '25', 1),
(10, '15', 2),
(10, '20', 3),
(10, '10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ques1`
--

CREATE TABLE `ques1` (
  `numbah` int(11) NOT NULL,
  `question` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques1`
--

INSERT INTO `ques1` (`numbah`, `question`) VALUES
(1, 'What is 5-5?'),
(2, 'What is 1+1?'),
(3, 'What is the 3 raise to 2 '),
(4, 'What is a square root of 4?'),
(5, 'What is 3+3?'),
(6, 'What is the 5+2-7'),
(7, 'What is the value of x in 2+3 = x?'),
(8, 'What is 8+10?'),
(9, 'What is 5 + 6?'),
(10, 'What is 5-20?');

-- --------------------------------------------------------

--
-- Table structure for table `studinfo`
--

CREATE TABLE `studinfo` (
  `StudentID` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `DateT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studinfo`
--

INSERT INTO `studinfo` (`StudentID`, `Password`, `Fname`, `Mname`, `Lname`, `Gender`, `Course`, `DateT`) VALUES
('2015-10366', '12345', 'Mark', 'osij', 'qowiej', 'male', 'IT', '2018-04-05'),
('2015-10456', 'simo', 'Junelle', 'Cabrera', 'Dela Cruz', 'female', 'IT', '2018-04-04'),
('2015-1234', 'simo', 'mark', 'evangelista', 'manzanilla', 'male', 'IT', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `studscore`
--

CREATE TABLE `studscore` (
  `student` varchar(20) NOT NULL,
  `score` int(11) NOT NULL,
  `raw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studscore`
--

INSERT INTO `studscore` (`student`, `score`, `raw`) VALUES
('2015-10456', 5, 75),
('2015-10456', 3, 65),
('2015-10456', 0, 50),
('2015-10456', 2, 60),
('2015-10456', 3, 65),
('2015-10456', 3, 65),
('2015-10456', 0, 50),
('2015-10456', 0, 50),
('2015-10456', 0, 50),
('2015-10456', 0, 50),
('2015-10456', 0, 50),
('2015-10456', 4, 70),
('2015-10456', 1, 55),
('2015-10456', 1, 55),
('2015-1234', 6, 80);

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `IDlog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`username`, `password`, `level`, `IDlog`) VALUES
('admin', '123', 2, 0),
('stud', '456', 1, 0),
('Simo', '12345', 2, 0),
('2015-10456', 'simo', 1, 1),
('2015-1234', 'simo', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`numbah`);

--
-- Indexes for table `ques1`
--
ALTER TABLE `ques1`
  ADD PRIMARY KEY (`numbah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
