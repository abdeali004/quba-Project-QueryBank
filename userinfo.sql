-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2020 at 04:55 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

DROP TABLE IF EXISTS `ans`;
CREATE TABLE IF NOT EXISTS `ans` (
  `qid` varchar(1000) NOT NULL,
  `aid` varchar(1000) NOT NULL,
  `usern` varchar(50) NOT NULL,
  `a` varchar(5000) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`qid`, `aid`, `usern`, `a`) VALUES
('fairy751', 'ab0041', 'ab004', 'om birla'),
('fairy751', 'ab0042', 'ab004', 'OMBIRLA'),
('ab0041', 'ab0043', 'ab004', 'abde ali'),
('ab0042', 'ab0044', 'ab004', 'abde is student'),
('ab0041', 'ab0045', 'ab004', 'Abde Ali Stationwala'),
('ab0042', 'ab0046', 'ab004', 'abde is fake person'),
('ab0043', 'ab0047', 'ab004', 'SCHOOL OF COMPUTERS');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `usern` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `about` varchar(251) NOT NULL,
  `hobbies` varchar(251) NOT NULL,
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL,
  `street` varchar(151) NOT NULL,
  `city` varchar(51) NOT NULL,
  `pincode` int(10) NOT NULL,
  `chk` tinyint(1) DEFAULT '0',
  `countq` int(11) DEFAULT '0',
  `counta` int(11) DEFAULT '0',
  PRIMARY KEY (`usern`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`usern`, `image`, `about`, `hobbies`, `follower`, `following`, `street`, `city`, `pincode`, `chk`, `countq`, `counta`) VALUES
('ab004', 'Abdeali (1).jpg', '', '', 0, 0, '', '', 0, 0, 3, 7),
('alifiya', 'mac ps.jpg', '', '', 0, 0, '', '', 0, 0, 0, 0),
('aman1212', 'blue_starry_sky_half_moon_scene_4k.jpg', '', '', 0, 0, '', '', 0, 0, 0, 0),
('fairy75', '', '', '', 0, 0, '', '', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

DROP TABLE IF EXISTS `ques`;
CREATE TABLE IF NOT EXISTS `ques` (
  `qid` varchar(1000) NOT NULL,
  `usern` varchar(50) NOT NULL,
  `q` varchar(500) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`qid`, `usern`, `q`) VALUES
('ab0041', 'ab004', 'what is my name?'),
('ab0042', 'ab004', 'who is abde ali?'),
('ab0043', 'ab004', 'full form of SOC'),
('fairy751', 'fairy75', 'Who is the speaker of Lok sabha?');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `name` varchar(50) NOT NULL,
  `usern` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`usern`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`name`, `usern`, `mail`, `pass`) VALUES
('abdeali stationwala', 'ab004', 'ab@gmail.com', 'ab123456'),
('Alifiya', 'alifiya', 'al@gmail.com', 'alifiyawts'),
('aman', 'aman1212', 'ab@gmail.com', 'aman12345'),
('farida', 'fairy75', 'f@gmail.com', 'fairy123'),
('pankaj', 'pankhudi', 'pan@gmail.com', 'pan12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
