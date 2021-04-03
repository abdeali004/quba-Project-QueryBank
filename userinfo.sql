-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 06:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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

CREATE TABLE `ans` (
  `qid` varchar(1000) NOT NULL,
  `aid` varchar(1000) NOT NULL,
  `usern` varchar(50) NOT NULL,
  `a` varchar(5000) NOT NULL,
  `dandt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`qid`, `aid`, `usern`, `a`, `dandt`) VALUES
('aman771', 'ab0043', 'ab004', 'I will highly recommend you to take Mosh course for Java. He is the best tutor i had ever seen. His videos are so interactive that you will never be bored during learning. Visit Mosh site to purchase it.', '2021-04-03 15:30:03'),
('ab0045', 'aman771', 'aman77', 'As an absolute beginner, you can start by following anyone of the following methods to first build a strong foundation before you go advanced:  Online tutorials(Datacamp, Udemy) Online Blogs(Towardsdatascience, medium) Books(Amazon) After getting a basic idea of Data Science and the concepts involved in it, you need to start working on attaining different skills in order to gain expertise in Data Science such as:  Programming Skills: Python, R, Java, C, or Perl. A good hold of any of these coding languages will be very useful.', '2021-04-03 15:27:39'),
('aman771', 'anjali1211', 'anjali121', 'Yes, Mosh is the best tutor and every course of him is very very innovative and great. You should buy the Java course for the same.', '2021-04-03 15:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `usern` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `about` varchar(251) NOT NULL,
  `hobbies` varchar(251) NOT NULL,
  `follower` int(11) NOT NULL,
  `following` int(11) NOT NULL,
  `street` varchar(151) NOT NULL,
  `city` varchar(51) NOT NULL,
  `pincode` int(10) NOT NULL,
  `chk` tinyint(1) DEFAULT 0,
  `countq` int(11) DEFAULT 0,
  `counta` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`usern`, `image`, `about`, `hobbies`, `follower`, `following`, `street`, `city`, `pincode`, `chk`, `countq`, `counta`) VALUES
('ab004', 'default.png', '', '', 0, 0, '', '', 0, 0, 5, 3),
('aman77', 'download.jpg', '', '', 0, 0, '', '', 0, 0, 1, 1),
('anjali121', 'default.png', '', '', 0, 0, '', '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `qid` varchar(1000) NOT NULL,
  `usern` varchar(50) NOT NULL,
  `q` varchar(500) NOT NULL,
  `dandt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`qid`, `usern`, `q`, `dandt`) VALUES
('ab0045', 'ab004', 'What is the pathway to learn data science?', '2021-04-03 15:22:07'),
('aman771', 'aman77', 'What is the best course to take for Java zero to Advance?', '2021-04-03 15:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `name` varchar(50) NOT NULL,
  `usern` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`name`, `usern`, `mail`, `pass`) VALUES
('abdeali stw', 'ab004', 'ab@gmail.com', 'ab123456'),
('aman sayyed', 'aman77', 'aman@ggmail.com', 'Aman77'),
('Anjali mehras', 'anjali121', 'anju@gmail.com', 'Anjali121');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`usern`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`usern`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
