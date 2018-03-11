-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 08:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `registerstudent`
--

CREATE TABLE `registerstudent` (
  `stuName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `stuIndex` int(11) NOT NULL,
  `Stuid` int(100) NOT NULL,
  `stuAddress` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerstudent`
--

INSERT INTO `registerstudent` (`stuName`, `username`, `stuIndex`, `Stuid`, `stuAddress`, `password`, `updated_at`, `created_at`) VALUES
('Vinod Perera', 'vinoooo', 12346, 0, '69/B,St.Theresa Lane,', 'cbjsb', '2017-09-21 22:13:01', '2017-09-20 23:03:52'),
('Asheni Perera', 'ash7', 22045, 16, '69/B, St.Theresa Lane,', 'ash7P', '2017-09-21 22:12:46', '2017-09-18 21:13:56'),
('Marie Fernando', 'marieT', 456782, 0, 'No:36, 3rd Lane.', '789412', '2017-09-22 02:24:45', '2017-09-22 02:24:22'),
('Hiridu Hasini', 'hasiChox', 462138, 0, 'Madampe Road, Ambalangoda', 'ghtybnnmhj', '2017-09-25 22:03:20', '2017-09-25 22:03:20'),
('Semuthu Fernando', 'semu', 567892, 0, 'No:5, Dummaladeniya', '456789', '2017-09-25 21:53:05', '2017-09-21 22:33:25'),
('Asheni Perera', 'dshj', 1553232, 0, '69/B, St.Theresa Lane,', 'ghgj,ljl', '2017-09-25 23:58:27', '2017-09-25 23:58:27'),
('Hasini Fernando', 'hasi', 2014223, 7, '69/C, Wennappuwa', '12345', '2017-09-18 04:45:13', '2017-09-18 04:45:13'),
('Asheni Perera', 'asheni', 2015337, 6, '69/B,St.Theresa Lane,', '12345', '2017-09-21 22:11:43', '2017-09-18 04:44:08'),
('Jenny Cruse', 'jinnyC', 4567892, 0, 'Park Lane,Melbourne.', '1234568', '2017-09-25 21:51:33', '2017-09-24 23:18:40'),
('Dewni Perera', 'dew15', 4568237, 0, 'Negombo', 'jbjssbvjds', '2017-09-25 22:00:57', '2017-09-25 22:00:10'),
('Sung Hoon', 'sung', 45892314, 0, 'Marine Drive, Colombo 06', 'gjhkhkfgfcv', '2017-09-25 21:52:33', '2017-09-24 23:40:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registerstudent`
--
ALTER TABLE `registerstudent`
  ADD PRIMARY KEY (`stuIndex`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
