-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 09:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--
CREATE DATABASE IF NOT EXISTS `placement` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `placement`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `adminlogin`
--

TRUNCATE TABLE `adminlogin`;
--
-- Dumping data for table `adminlogin`
--

INSERT DELAYED IGNORE INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `aid` int(2) NOT NULL AUTO_INCREMENT,
  `answers` varchar(200) NOT NULL,
  `ans_id` int(2) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `answers`
--

TRUNCATE TABLE `answers`;
--
-- Dumping data for table `answers`
--

INSERT DELAYED IGNORE INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Home Tool Markup Language', 1),
(2, 'Hyperlinka and Text Markup language', 1),
(3, 'Hyper Text Markup Language', 1),
(4, 'none of the above', 1),
(5, 'the first div element', 2),
(6, 'all div elements', 2),
(7, 'the last div element', 2),
(8, 'none of the above', 2),
(9, 'the head section', 3),
(10, 'the body section', 3),
(11, 'both', 3),
(12, 'none of the above', 3),
(13, 'function myFunction()', 4),
(14, 'function.myfunction()', 4),
(15, 'function=myfunction()', 4),
(16, 'none of above', 4),
(17, 'container', 5),
(18, 'container-fixed', 5),
(19, 'container-fluid', 5),
(20, 'none of the above', 5);

-- --------------------------------------------------------

--
-- Table structure for table `apply4comp`
--

DROP TABLE IF EXISTS `apply4comp`;
CREATE TABLE IF NOT EXISTS `apply4comp` (
  `id` varchar(200) NOT NULL,
  `sid` varchar(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `dateofapply` date NOT NULL,
  `approve` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `apply4comp`
--

TRUNCATE TABLE `apply4comp`;
--
-- Dumping data for table `apply4comp`
--

INSERT DELAYED IGNORE INTO `apply4comp` (`id`, `sid`, `name`, `cname`, `domain`, `dateofapply`, `approve`) VALUES
('18dco03wiproNetwork Administration2021-05-15', '18dco03', 'Zishan Yusuf Bandar', 'wipro', 'Network Administration', '2021-05-07', '0'),
('18dco13appleiOS Development2021-07-21', '18dco13', 'Aamir Sattar Patni', 'apple', 'iOS Development', '2021-05-09', 'yes'),
('18dco20samsungSoftware Testing2021-05-21', '18dco20', 'zara anjum shaikh', 'samsung', 'Software Testing', '2021-04-29', '0'),
('18dco20samsungWeb Development2021-04-30', '18dco20', 'zara anjum shaikh', 'samsung', 'Web Development', '2021-04-29', '0'),
('18dco20tech mahindraSoftware Development2021-04-30', '18dco20', 'zara anjum shaikh', 'tech mahindra', 'Software Development', '2021-04-29', 'yes'),
('18dco20unisoftSoftware Development2021-04-30', '18dco20', 'zara anjum shaikh', 'unisoft', 'Software Development', '2021-04-29', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bemarks`
--

DROP TABLE IF EXISTS `bemarks`;
CREATE TABLE IF NOT EXISTS `bemarks` (
  `id` varchar(7) NOT NULL,
  `sem1` float NOT NULL,
  `sem2` float NOT NULL,
  `sem3` float NOT NULL,
  `sem4` float NOT NULL,
  `sem5` float NOT NULL,
  `sem6` float NOT NULL,
  `sem7` float NOT NULL,
  `sem8` float NOT NULL,
  `p` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `bemarks`
--

TRUNCATE TABLE `bemarks`;
--
-- Dumping data for table `bemarks`
--

INSERT DELAYED IGNORE INTO `bemarks` (`id`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `p`) VALUES
('12co27', 5.52, 5.69, 5.79, 4.54, 5.74, 6.92, 8.88, 404, 2),
('15co27', 6.5, 5.2, 7.8, 8, 8.2, 8.9, 9.5, 9.3, 2),
('18dco02', 6.9, 7.4, 6.3, 5.7, 6.8, 8, 9.19, 404, 2),
('18dco03', 7, 7, 6.42, 5.48, 6.44, 7.54, 9.27, 404, 2),
('18dco13', 7, 7, 6.7, 7.5, 7.12, 7.5, 7.5, 404, 2),
('18dco18', 7, 7, 6.04, 6.07, 6.85, 8.15, 9.27, 404, 2),
('18dco20', 7, 7, 6, 6, 7, 8, 9, 404, 2),
('18dco60', 7, 7, 8.2, 8, 7.12, 7.54, 7.5, 404, 2);

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE IF NOT EXISTS `certificate` (
  `loc` varchar(300) NOT NULL,
  `course` varchar(100) NOT NULL,
  `coursedate` date NOT NULL,
  `id` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `certificate`
--

TRUNCATE TABLE `certificate`;
--
-- Dumping data for table `certificate`
--

INSERT DELAYED IGNORE INTO `certificate` (`loc`, `course`, `coursedate`, `id`) VALUES
('Certificates/18dco03/python-zishan.jpg', 'Python', '2020-11-09', '18dco03'),
('Certificates/18dco60/fed.jpg', 'Front End-Developement', '2021-05-19', '18dco60');

-- --------------------------------------------------------

--
-- Table structure for table `companylist`
--

DROP TABLE IF EXISTS `companylist`;
CREATE TABLE IF NOT EXISTS `companylist` (
  `cid` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `companylist`
--

TRUNCATE TABLE `companylist`;
--
-- Dumping data for table `companylist`
--

INSERT DELAYED IGNORE INTO `companylist` (`cid`, `cname`) VALUES
(10203, 'samsung'),
(21212, 'facebook'),
(30369, 'apple'),
(50007, 'HCL'),
(50070, 'unisoft'),
(55577, 'microsoft'),
(55775, 'Reliance Jio'),
(55777, 'tech mahindra'),
(57575, 'infosys'),
(57775, 'bitwise'),
(70005, 'intel'),
(75557, 'wipro'),
(75757, 'TCS'),
(77555, 'L&T'),
(77557, 'Cap gemini'),
(77755, 'google'),
(80009, 'Activision'),
(90005, 'oracle');

-- --------------------------------------------------------

--
-- Table structure for table `companyplaced`
--

DROP TABLE IF EXISTS `companyplaced`;
CREATE TABLE IF NOT EXISTS `companyplaced` (
  `cid` int(5) NOT NULL,
  `id` varchar(200) NOT NULL,
  `year` date NOT NULL,
  `seats` int(2) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `cutoff` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `companyplaced`
--

TRUNCATE TABLE `companyplaced`;
--
-- Dumping data for table `companyplaced`
--

INSERT DELAYED IGNORE INTO `companyplaced` (`cid`, `id`, `year`, `seats`, `domain`, `cutoff`) VALUES
(10203, '10203Software Testing2021-05-21', '2021-05-21', 2, 'Software Testing', 6.5),
(10203, '10203System Analyst2021-05-28', '2021-05-28', 3, 'System Analyst', 8),
(21212, '21212Data Scientist2021-06-30', '2021-06-30', 5, 'Data Scientist', 9),
(30369, '30369iOS Development2021-05-25', '2021-05-25', 2, 'iOS Development', 6.5),
(30369, '30369iOS Development2021-06-18', '2021-06-18', 5, 'iOS Development', 8.9),
(30369, '30369iOS Development2021-07-21', '2021-07-21', 5, 'iOS Development', 7),
(50007, '50007IT architect2021-05-28', '2021-05-28', 7, 'IT architect', 6.5),
(50007, '50007Mobile Application Development2021-05-28', '2021-05-28', 5, 'Mobile Application Development', 7.5),
(50007, '50007Software Testing2021-05-28', '2021-05-28', 23, 'Software Testing', 6.5),
(50070, '50070Software Development2021-04-30', '2021-04-30', 2, 'Software Development', 6.5),
(55577, '55577UI designer2021-06-23', '2021-06-23', 5, 'UI designer', 5),
(55775, '55775Mobile Application Development2021-05-31', '2021-05-31', 5, 'Mobile Application Development', 7),
(55777, '55777Software Development2021-04-30', '2021-04-30', 2, 'Software Development', 6.5),
(55777, '55777System Administration2021-05-22', '2021-05-22', 5, 'System Administration', 6.9),
(57775, '57775Computer Hardware Engineer2021-05-09', '2021-05-09', 2, 'Computer Hardware Engineer', 6.5),
(70005, '70005IT architect2021-06-29', '2021-06-29', 3, 'IT architect', 8),
(75557, '75557Network Administration2021-05-15', '2021-05-15', 2, 'Network Administration', 6),
(75757, '75757Network Administration2021-06-11', '2021-06-11', 2, 'Network Administration', 7),
(77555, '77555AI and ML2021-05-27', '2021-05-27', 10, 'AI and ML', 9),
(77555, '77555Cyber Security2021-07-21', '2021-07-21', 7, 'Cyber Security', 7),
(77557, '77557Software Testing2021-05-07', '2021-05-07', 5, 'Software Testing', 9.5),
(77557, '77557UI designer2021-05-29', '2021-05-29', 5, 'UI designer', 7.5),
(77755, '77755AI and ML2021-07-21', '2021-07-21', 7, 'AI and ML', 7.5),
(77755, '77755AI and ML2021-07-22', '2021-07-22', 2, 'AI and ML', 8.5),
(90005, '90005Ethical Hacking2021-06-29', '2021-06-29', 3, 'Ethical Hacking', 7);

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

DROP TABLE IF EXISTS `dataset`;
CREATE TABLE IF NOT EXISTS `dataset` (
  `uni` varchar(500) NOT NULL,
  `comp` varchar(100) NOT NULL,
  `cutoff` float NOT NULL,
  `domain` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `req` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `dataset`
--

TRUNCATE TABLE `dataset`;
-- --------------------------------------------------------

--
-- Table structure for table `deptlogin`
--

DROP TABLE IF EXISTS `deptlogin`;
CREATE TABLE IF NOT EXISTS `deptlogin` (
  `id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `deptlogin`
--

TRUNCATE TABLE `deptlogin`;
--
-- Dumping data for table `deptlogin`
--

INSERT DELAYED IGNORE INTO `deptlogin` (`id`, `username`, `password`) VALUES
('computer', 'codept', 'co123');

-- --------------------------------------------------------

--
-- Table structure for table `domainin`
--

DROP TABLE IF EXISTS `domainin`;
CREATE TABLE IF NOT EXISTS `domainin` (
  `did` varchar(50) NOT NULL,
  `domainin` varchar(50) NOT NULL,
  `sid` varchar(7) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `domainin`
--

TRUNCATE TABLE `domainin`;
--
-- Dumping data for table `domainin`
--

INSERT DELAYED IGNORE INTO `domainin` (`did`, `domainin`, `sid`) VALUES
('12co27Application Development', 'Application Development', '12co27'),
('12co27Computer VFX', 'Computer VFX', '12co27'),
('12co27UI designer', 'UI designer', '12co27'),
('12co27Web Development', 'Web Development', '12co27'),
('15co27Core Programming', 'Core Programming', '15co27'),
('15co27Software Development', 'Software Development', '15co27'),
('15co27Testing and Automation', 'Testing and Automation', '15co27'),
('18dco02AI and ML', 'AI and ML', '18dco02'),
('18dco02Cyber Security', 'Cyber Security', '18dco02'),
('18dco02Database Administration', 'Database Administration', '18dco02'),
('18dco02Network Administration', 'Network Administration', '18dco02'),
('18dco02Software Testing', 'Software Testing', '18dco02'),
('18dco03Cyber Security', 'Cyber Security', '18dco03'),
('18dco03Ethical Hacking', 'Ethical Hacking', '18dco03'),
('18dco03Network Administration', 'Network Administration', '18dco03'),
('18dco03System Administration', 'System Administration', '18dco03'),
('18dco13AI and ML', 'AI and ML', '18dco13'),
('18dco13Data Scientist', 'Data Scientist', '18dco13'),
('18dco13iOS Development', 'iOS Development', '18dco13'),
('18dco13Software Development', 'Software Development', '18dco13'),
('18dco18Cyber Security', 'Cyber Security', '18dco18'),
('18dco18Network Administration', 'Network Administration', '18dco18'),
('18dco18Software Testing', 'Software Testing', '18dco18'),
('18dco20Database Administration', 'Database Administration', '18dco20'),
('18dco20Ethical Hacking', 'Ethical Hacking', '18dco20'),
('18dco20iOS Development', 'iOS Development', '18dco20'),
('18dco20Software Development', 'Software Development', '18dco20'),
('18dco60iOS Development', 'iOS Development', '18dco60');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

DROP TABLE IF EXISTS `profileimg`;
CREATE TABLE IF NOT EXISTS `profileimg` (
  `sid` varchar(7) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `profileimg`
--

TRUNCATE TABLE `profileimg`;
--
-- Dumping data for table `profileimg`
--

INSERT DELAYED IGNORE INTO `profileimg` (`sid`, `image`) VALUES
('12co27', 'profileimg/Picture.png'),
('15co27', 'profileimg/crop.jpg'),
('18dco02', 'profileimg/IMG_20200621_223828_666.jpg'),
('18dco03', 'profileimg/ZishanCV.png'),
('18dco13', 'profileimg/IMG_20210207_003006_449.jpg'),
('18dco18', 'profileimg/Screenshot_20210506-144737_Gallery.jpg'),
('18dco20', 'profileimg/IMG_6662.JPG'),
('18dco60', 'profileimg/crop.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `questions` varchar(200) NOT NULL,
  `ans_id` int(2) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `questions`
--

TRUNCATE TABLE `questions`;
--
-- Dumping data for table `questions`
--

INSERT DELAYED IGNORE INTO `questions` (`qid`, `questions`, `ans_id`) VALUES
(1, 'what does HTML stand for ?', 1),
(2, 'Look at the following selector $(\"div\"). what does it select ?', 5),
(3, 'where is the correct place to insert a javascript ?', 9),
(4, 'How do you create a function in javascript ?', 13),
(5, 'which class provides a responsive fixed width container?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE IF NOT EXISTS `studentinfo` (
  `id` varchar(7) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `class` varchar(4) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilepic` mediumblob DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `studentinfo`
--

TRUNCATE TABLE `studentinfo`;
--
-- Dumping data for table `studentinfo`
--

INSERT DELAYED IGNORE INTO `studentinfo` (`id`, `fname`, `mname`, `lname`, `email`, `mobile`, `dept`, `class`, `dob`, `address`, `password`, `profilepic`) VALUES
('12co27', 'Saif Ali', 'Naushad', 'Chogle', 'saifchogle@gmail.com ', '9372373809', 'CO', ' BE', '1995-08-31', 'Nerul,Navi Mumbai										', '123456', 0x20),
('15co27', 'David', 'John', 'James', 'Davidjames07@gmail.com', '9800000000', 'CO', ' BE', '1998-10-27', 'mumbai\r\n												', '12345', 0x20),
('18dco02', 'Hoida', 'Naeem', 'Ansari', 'hoidanaeem@gmail.com', '7506923733', 'CO', ' BE', '1998-06-22', '  Mumbra,thane-400612\r\n												', '1234567', 0x20),
('18dco03', 'Zishan', 'Yusuf', 'Bandar', 'zishantofa@gmail.com', '7021344259', 'CO', ' BE', '1998-10-13', ' Mumbra, Thane 400612\r\n												', '123456789', 0x20),
('18dco13', 'Aamir', 'Sattar', 'Patni', 'patniaamir5.ap@gmail.com', '9819792115', 'CO', ' BE', '1998-04-08', '  New Panvel,Navi Mumbai 410206\r\n												', '1234567', 0x20),
('18dco18', 'Nousheen', 'Sadique', 'Shaikh', 'snoushin30@gmail.com', '7758044888', 'CO', ' BE', '1999-10-30', '  Mumbra Thane 400612\r\n												', '123456', 0x20),
('18dco20', 'zara', 'anjum', 'shaikh', 'zarashaikh@gmail.com', '8169406874', 'CO', ' BE', '2020-11-16', 'kalyan west,421601									', '12345', 0x20),
('18dco60', 'mark', 'steve', 'rogers', 'mark@gmmail.com', '7021854666', 'CO', ' BE', '1999-11-06', '  \r\nnerul												', '123456', 0x20);

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

DROP TABLE IF EXISTS `studentlogin`;
CREATE TABLE IF NOT EXISTS `studentlogin` (
  `id` varchar(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `studentlogin`
--

TRUNCATE TABLE `studentlogin`;
--
-- Dumping data for table `studentlogin`
--

INSERT DELAYED IGNORE INTO `studentlogin` (`id`, `username`, `password`) VALUES
('12co27', 'saifchogle@gmail.com ', '123456789'),
('15co27', 'Davidjames07@gmail.com', '12345'),
('18dco02', 'hoidanaeem@gmail.com', '1234567'),
('18dco03', 'zishantofa@gmail.com', '123456789'),
('18dco13', 'patniaamir5.ap@gmail.com', '1234567'),
('18dco18', 'snoushin30@gmail.com', '123456'),
('18dco20', 'zarashaikh@gmail.com', '123456'),
('18dco60', 'mark@gmmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

DROP TABLE IF EXISTS `studentmarks`;
CREATE TABLE IF NOT EXISTS `studentmarks` (
  `id` varchar(7) NOT NULL,
  `ssc` float NOT NULL,
  `hsc` float DEFAULT NULL,
  `diploma` float NOT NULL,
  `be` float NOT NULL,
  `p` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `studentmarks`
--

TRUNCATE TABLE `studentmarks`;
-- --------------------------------------------------------

--
-- Table structure for table `studentschooling`
--

DROP TABLE IF EXISTS `studentschooling`;
CREATE TABLE IF NOT EXISTS `studentschooling` (
  `id` varchar(7) NOT NULL,
  `ssc` float NOT NULL,
  `sscpyear` varchar(10) NOT NULL,
  `hsc` float NOT NULL,
  `hscpyear` varchar(10) NOT NULL,
  `diploma` float NOT NULL,
  `dippyear` varchar(10) NOT NULL,
  `p` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `studentschooling`
--

TRUNCATE TABLE `studentschooling`;
--
-- Dumping data for table `studentschooling`
--

INSERT DELAYED IGNORE INTO `studentschooling` (`id`, `ssc`, `sscpyear`, `hsc`, `hscpyear`, `diploma`, `dippyear`, `p`) VALUES
('12co27', 73.27, 'march-2010', 61.3, 'feb-2012', 0, '0', 2),
('15co27', 74, 'March-2013', 69, 'Feb-2015', 0, '0', 2),
('18dco02', 62.4, 'march-2014', 54, 'Feb-2016', 72, 'april-2018', 2),
('18dco03', 78, 'march-2014', 49, 'feb-2016', 76, 'april-2018', 2),
('18dco13', 49.5, 'march-2015', 0, '0', 78.69, 'april-2018', 2),
('18dco18', 84, 'march-2015', 0, '0', 82.75, 'april 2018', 2),
('18dco21', 50, 'march-2015', 0, '0', 60, 'april-2018', 2),
('18dco60', 78, 'March-2013', 70, 'Feb-2015', 78.69, 'april-2018', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tempapply`
--

DROP TABLE IF EXISTS `tempapply`;
CREATE TABLE IF NOT EXISTS `tempapply` (
  `id` varchar(50) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `cutoff` float NOT NULL,
  `domain` varchar(100) NOT NULL,
  `year` date NOT NULL,
  `sid` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `tempapply`
--

TRUNCATE TABLE `tempapply`;
--
-- Dumping data for table `tempapply`
--

INSERT DELAYED IGNORE INTO `tempapply` (`id`, `cname`, `cutoff`, `domain`, `year`, `sid`) VALUES
('18dco03L&TCyber Security2021-07-21', 'L&T', 7, 'Cyber Security', '2021-07-21', '18dco03'),
('18dco03oracleEthical Hacking2021-06-29', 'oracle', 7, 'Ethical Hacking', '2021-06-29', '18dco03'),
('18dco03tech mahindraSystem Administration2021-05-2', 'tech mahindra', 6.9, 'System Administration', '2021-05-22', '18dco03'),
('18dco18L&TCyber Security2021-07-21', 'L&T', 7, 'Cyber Security', '2021-07-21', '18dco18'),
('18dco18samsungSoftware Testing2021-05-21', 'samsung', 6.5, 'Software Testing', '2021-05-21', '18dco18'),
('18dco18wiproNetwork Administration2021-05-15', 'wipro', 6, 'Network Administration', '2021-05-15', '18dco18'),
('18dco20appleiOS Development2021-07-21', 'apple', 7, 'iOS Development', '2021-07-21', '18dco20'),
('18dco20oracleEthical Hacking2021-06-29', 'oracle', 7, 'Ethical Hacking', '2021-06-29', '18dco20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(7) NOT NULL,
  `username` varchar(250) NOT NULL,
  `totalquestion` int(4) NOT NULL,
  `answercorrect` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`id`, `username`, `totalquestion`, `answercorrect`) VALUES
('18dco03', 'zishan', 5, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD CONSTRAINT `studentinfo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `studentlogin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `studentlogin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
