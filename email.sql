-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 08:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `email`, `register_date`) VALUES
(531, 'alise@inbox.lv', '2020-11-29 18:30:22'),
(539, 'zakusalasdome@gmail.com', '2020-11-29 20:04:23'),
(543, 'saulesnami@gmail.com', '2020-11-30 11:23:39'),
(551, 'elizabete@inbox.lv', '2020-11-30 18:18:22'),
(554, 'faliguuu@inbox.lv', '2020-11-30 18:18:55'),
(560, 'lavandasnami@gmail.com', '2020-12-01 12:01:15'),
(561, 'rigas_nami@gmail.com', '2020-12-01 12:01:40'),
(565, 'krikumi@yali.com', '2020-12-01 20:39:37'),
(566, 'alibaba@cikipiki.ya', '2020-12-01 20:40:01'),
(567, 'santaore@inbox.lv', '2020-12-02 14:06:25'),
(570, 'dalmacietis@inbox.lv', '2020-12-02 16:50:12'),
(575, 'paliknis@gmail.com', '2020-12-02 16:51:42'),
(585, 'yala@ya.ya', '2020-12-03 19:03:32'),
(586, 'kristine@yahoo.com', '2020-12-03 19:04:52'),
(588, 'kristians@yahoo.com', '2020-12-03 19:05:05'),
(589, 'incis114@inbox.lv', '2020-12-03 19:20:20'),
(590, 'poiuytre@inbox.lv', '2020-12-03 19:20:28'),
(591, 'cvgtredsawq@inbox.lv', '2020-12-03 19:20:36'),
(592, 'nanna4@inbox.lv', '2020-12-04 10:19:11'),
(595, 'dincis@inbox.lv', '2020-12-06 13:03:40'),
(596, 'ielugumi.allure@gmail.com', '2020-12-06 14:29:48'),
(597, 'nanna4@inbox.lv', '2020-12-06 18:07:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=598;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
