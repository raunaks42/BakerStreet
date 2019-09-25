-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 08:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at`
--

-- --------------------------------------------------------

--
-- Table structure for table `clues`
--

CREATE TABLE `clues` (
  `c_no` int(6) UNSIGNED NOT NULL,
  `Clue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clues`
--

INSERT INTO `clues` (`c_no`, `Clue`) VALUES
(1, 'gard'),
(2, 'maid'),
(3, 'sonx'),
(4, 'cook');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `dob` varchar(30) NOT NULL,
  `imgsrc` varchar(100) NOT NULL,
  `place` varchar(50) DEFAULT NULL,
  `height` int(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `SSN` varchar(30) NOT NULL,
  `Criminal_Record` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `job`, `gender`, `dob`, `imgsrc`, `place`, `height`, `bloodgroup`, `SSN`, `Criminal_Record`) VALUES
(1, 'Kate Bekket', 'Detective', 'Female', '20 April 1964', 'person.jpg', '12th Precient', 5, 'o+ve', '172-07-146', 'Nil');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `reg_no` int(6) UNSIGNED NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`reg_no`, `code`) VALUES
(3, 'sher');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(11) NOT NULL,
  `para` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `para`) VALUES
(1, 'START YOUR INVESTIGATION BY GOING THROUGH THE PROFILES OF THE SUSPECTS AND INTERROGATING THEM'),
(2, 'SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br> GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br> GARDENER: HI SHERLOCK<br>SHERLOCK: HI GARDENER<br>GARDENER: HI SHERLOCK<br>'),
(3, 'COOK: HI SHERLOCK . DO YOU WANT PALAK PANNER\r\n\r\n\r\n\r\nSHERLOCK: SORRY CANT EAT WITHOUT WATSON'),
(4, 'MAID: FOR CLEANING, I CHARGE 2000 RUPEES PER MONTH\r\nSHERLOCK: OK THATS COOL'),
(5, 'SON: HI SHERLOCK I AM A BIG FAN\'\r\n\r\n\r\nSHERLOCK: SORRY I PREFER AC OVER FANS');

-- --------------------------------------------------------

--
-- Table structure for table `story_text`
--

CREATE TABLE `story_text` (
  `story_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story_text`
--

INSERT INTO `story_text` (`story_content`) VALUES
('This is the actual story....should be displayed on all pages....<br>His body lay like ghoulish mannequin, the esophagus and arteries sticking out like so much corrugated and rubber tubing.It looked as if a special effects team had worked over time for some Friday the thirteenth movie set,but that smell...<br>That smell could only come from recently slaughtered animals.In this case the animals were human and their corpses were still warm, the blood thickening but not yet dried on their waxy skin.Some cases took a while to decide if foul play was involved. His body lay like ghoulish mannequin, the esophagus and arteries sticking out like so much corrugated and rubber tubing.It looked as if a special effects team had worked over time for some Friday the thirteenth movie set,but that smell...<br>That smell could only come from recently slaughtered animals.\r\nIn this case the animals were human and their corpses were still warm, the blood thickening but not yet dried on their waxy skin.Some cases took a while to decide if foul play was involved.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clues`
--
ALTER TABLE `clues`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clues`
--
ALTER TABLE `clues`
  MODIFY `c_no` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `reg_no` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
