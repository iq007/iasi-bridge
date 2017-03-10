-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 03:04 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridgeiasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cazari`
--

CREATE TABLE `cazari` (
  `ID` int(11) NOT NULL,
  `Nume` text NOT NULL,
  `Telefon` text NOT NULL,
  `Email` text,
  `OptiuneID` int(11) NOT NULL DEFAULT '0',
  `Start` date NOT NULL,
  `Stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `echipa`
--

CREATE TABLE `echipa` (
  `ID` int(3) NOT NULL,
  `IDJucator1` int(3) NOT NULL,
  `IDJucator2` int(3) NOT NULL,
  `IDJucator3` int(3) NOT NULL,
  `IDJucator4` int(3) NOT NULL,
  `Confirmat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jucator`
--

CREATE TABLE `jucator` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `optiunicazare`
--

CREATE TABLE `optiunicazare` (
  `ID` int(11) NOT NULL,
  `Hotel` varchar(100) DEFAULT NULL,
  `Camera` varchar(100) DEFAULT NULL,
  `Pret` decimal(10,0) DEFAULT '0',
  `Valuta` varchar(3) DEFAULT 'RON'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `optiunicazare`
--

INSERT INTO `optiunicazare` (`ID`, `Hotel`, `Camera`, `Pret`, `Valuta`) VALUES
  (1, 'Motel Bucium ****', 'Dubla cu mic dejun', '165', 'RON'),
  (2, 'Motel Bucium ****', 'Single cu mic dejun', '130', 'RON');

-- --------------------------------------------------------

--
-- Table structure for table `pereche`
--

CREATE TABLE `pereche` (
  `ID` int(3) NOT NULL,
  `IDJucator1` int(3) NOT NULL,
  `IDJucator2` int(3) NOT NULL,
  `Confirmat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cazari`
--
ALTER TABLE `cazari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `echipa`
--
ALTER TABLE `echipa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fkJucator1E` (`IDJucator1`),
  ADD KEY `fkJucator2E` (`IDJucator2`),
  ADD KEY `fkJucator3E` (`IDJucator3`),
  ADD KEY `fkJucator4E` (`IDJucator4`);

--
-- Indexes for table `jucator`
--
ALTER TABLE `jucator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `optiunicazare`
--
ALTER TABLE `optiunicazare`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pereche`
--
ALTER TABLE `pereche`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fkJucator1` (`IDJucator1`),
  ADD KEY `fkJucator2` (`IDJucator2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cazari`
--
ALTER TABLE `cazari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `echipa`
--
ALTER TABLE `echipa`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jucator`
--
ALTER TABLE `jucator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `optiunicazare`
--
ALTER TABLE `optiunicazare`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pereche`
--
ALTER TABLE `pereche`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `echipa`
--
ALTER TABLE `echipa`
  ADD CONSTRAINT `fkJucator1E` FOREIGN KEY (`IDJucator1`) REFERENCES `jucator` (`ID`),
  ADD CONSTRAINT `fkJucator2E` FOREIGN KEY (`IDJucator2`) REFERENCES `jucator` (`ID`),
  ADD CONSTRAINT `fkJucator3E` FOREIGN KEY (`IDJucator3`) REFERENCES `jucator` (`ID`),
  ADD CONSTRAINT `fkJucator4E` FOREIGN KEY (`IDJucator4`) REFERENCES `jucator` (`ID`);

--
-- Constraints for table `pereche`
--
ALTER TABLE `pereche`
  ADD CONSTRAINT `fkJucator1` FOREIGN KEY (`IDJucator1`) REFERENCES `jucator` (`ID`),
  ADD CONSTRAINT `fkJucator2` FOREIGN KEY (`IDJucator2`) REFERENCES `jucator` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
