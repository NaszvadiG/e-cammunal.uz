-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 15, 2017 at 07:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_communal`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `fish` varchar(50) NOT NULL,
  `tuman` varchar(50) NOT NULL,
  `manzil` mediumtext NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefon` varchar(50) NOT NULL,
  `tugil_yil` int(11) NOT NULL,
  `matn` mediumtext NOT NULL,
  `date1` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `date2` datetime DEFAULT NULL,
  `maqom` varchar(50) DEFAULT NULL,
  `maxfiy` varchar(50) NOT NULL,
  `mazmun` varchar(50) NOT NULL,
  `file` varchar(250) DEFAULT NULL,
  `date3` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `fish`, `tuman`, `manzil`, `email`, `telefon`, `tugil_yil`, `matn`, `date1`, `status`, `date2`, `maqom`, `maxfiy`, `mazmun`, `file`, `date3`) VALUES
(1, 'Элёр Латипов', 'Бектемир', 'Чилонзор 26/23-99', '', '+998977111770', 1989, 'dsfdsfsd', '2017-02-13 10:09:19', 0, NULL, '1', '1', 'Сув', NULL, NULL),
(2, 'Элёр Латипов', 'Бектемир', 'Чилонзор 26/23-99', 'elyor@outlook.com', '+998977111770', 1989, 'asdffsdfsdfsd', '2017-02-13 10:19:07', 0, NULL, '1', '0', 'Сув', NULL, NULL),
(3, 'asdsd', 'Бектемир', 'Чилонзор 26/23-99', 'elyor@outlook.com', '+998977111770', 1989, 'asd', '2017-02-13 13:28:36', 0, NULL, '1', '0', 'Газ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
