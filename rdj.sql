-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 06:40 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdj`
--

-- --------------------------------------------------------

--
-- Table structure for table `training_forklift`
--

CREATE TABLE `training_forklift` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_lineoperator`
--

CREATE TABLE `training_lineoperator` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Position` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_lineoperator`
--

INSERT INTO `training_lineoperator` (`Indx`, `TrainingName`, `Link`, `Position`, `TimeStamp`) VALUES
(1, 'sdacsczx', 'Cover_letter.pdf', '', '2018-08-24 12:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `training_maintenance`
--

CREATE TABLE `training_maintenance` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_manager`
--

CREATE TABLE `training_manager` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_mixer`
--

CREATE TABLE `training_mixer` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_oven`
--

CREATE TABLE `training_oven` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_packer`
--

CREATE TABLE `training_packer` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_s/r`
--

CREATE TABLE `training_s/r` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_sheeter`
--

CREATE TABLE `training_sheeter` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_super_be`
--

CREATE TABLE `training_super_be` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_super_packing`
--

CREATE TABLE `training_super_packing` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_super_sr`
--

CREATE TABLE `training_super_sr` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_teamlead`
--

CREATE TABLE `training_teamlead` (
  `Indx` int(11) NOT NULL,
  `TrainingName` text NOT NULL,
  `Link` text NOT NULL,
  `Record` text NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Indx` int(11) NOT NULL,
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Position` int(11) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`Indx`, `Id`, `Name`, `Position`, `Password`) VALUES
(2, 1, 'Akem', 9, '$2y$10$LdNfPPtDkmQw0GUhp7nw3OIm1u9zX45l4l/YdxsqaihUc2EW.6ujG'),
(3, 2, 'Akem', 3, '$2y$10$Uw2cB8KmzU2vqJcyrwez2.nEz4Wddzb5th3b7aAQca6rEBj1EkGGm'),
(4, 3, 'Akem', 13, '$2y$10$FtkAZOzif.VBqiGdj9GdFuzlSQ9tUQU9dhS2c/Tmvb5wMMdU/34Bi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training_forklift`
--
ALTER TABLE `training_forklift`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_lineoperator`
--
ALTER TABLE `training_lineoperator`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_maintenance`
--
ALTER TABLE `training_maintenance`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_manager`
--
ALTER TABLE `training_manager`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_mixer`
--
ALTER TABLE `training_mixer`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_oven`
--
ALTER TABLE `training_oven`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_packer`
--
ALTER TABLE `training_packer`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_s/r`
--
ALTER TABLE `training_s/r`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_sheeter`
--
ALTER TABLE `training_sheeter`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_super_be`
--
ALTER TABLE `training_super_be`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_super_packing`
--
ALTER TABLE `training_super_packing`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_super_sr`
--
ALTER TABLE `training_super_sr`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `training_teamlead`
--
ALTER TABLE `training_teamlead`
  ADD PRIMARY KEY (`Indx`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Indx`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training_forklift`
--
ALTER TABLE `training_forklift`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_lineoperator`
--
ALTER TABLE `training_lineoperator`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_maintenance`
--
ALTER TABLE `training_maintenance`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_manager`
--
ALTER TABLE `training_manager`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_mixer`
--
ALTER TABLE `training_mixer`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_oven`
--
ALTER TABLE `training_oven`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_packer`
--
ALTER TABLE `training_packer`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_s/r`
--
ALTER TABLE `training_s/r`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_sheeter`
--
ALTER TABLE `training_sheeter`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_super_be`
--
ALTER TABLE `training_super_be`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_super_packing`
--
ALTER TABLE `training_super_packing`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_super_sr`
--
ALTER TABLE `training_super_sr`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_teamlead`
--
ALTER TABLE `training_teamlead`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Indx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
