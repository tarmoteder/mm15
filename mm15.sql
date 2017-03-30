-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 04:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm15`
--

-- --------------------------------------------------------

--
-- Table structure for table `isik`
--

CREATE TABLE `isik` (
  `ID` int(10) NOT NULL,
  `Nimi` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Perenimi` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Isikukood` char(11) CHARACTER SET utf16 COLLATE utf16_bin DEFAULT NULL,
  `Aeg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isik`
--

INSERT INTO `isik` (`ID`, `Nimi`, `Perenimi`, `Isikukood`, `Aeg`) VALUES
(1, '\0T\0a\0r\0m\0o', '\0T\0e\0d\0e\0r', '37403310210', '2017-03-23 13:48:04'),
(2, 'Peeter', 'Üksjalgvärav', '36902012512', '2017-03-23 14:45:03'),
(3, 'Peeter', 'šksjalgv„rav', '36902012512', '2017-03-23 14:46:06'),
(7, 'Juhan', 'Juurikas', '36801015847', '2017-03-30 12:53:47'),
(8, 'Juhan', 'Juurikas', '36801015847', '2017-03-30 13:12:48'),
(9, 'Juhan', 'Juurikas', '36801015847', '2017-03-30 13:12:49'),
(10, 'Mari', 'Maasikas', '456684656', '2017-03-30 13:33:08'),
(11, 'Enn', 'Esimene', '14758466', '2017-03-30 13:37:46'),
(12, '', '', '', '2017-03-30 13:38:12'),
(13, '', '', '', '2017-03-30 13:38:19'),
(14, 'Oskar', '', '', '2017-03-30 13:39:14'),
(15, '1', '', '', '2017-03-30 13:42:46'),
(16, '1', '', '', '2017-03-30 13:42:48'),
(17, '1', '', '', '2017-03-30 13:42:48'),
(18, '1', '', '', '2017-03-30 13:42:48'),
(19, '1', '', '', '2017-03-30 13:42:48'),
(20, '123', '', '', '2017-03-30 13:43:20'),
(21, 'DÃ¶rbert', '', '', '2017-03-30 13:47:09'),
(22, 'Loll Ivan', '', '', '2017-03-30 13:50:59'),
(23, 'Loll Ivan', 'Puudub', 'Puudub', '2017-03-30 13:51:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isik`
--
ALTER TABLE `isik`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isik`
--
ALTER TABLE `isik`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
