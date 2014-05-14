-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2014 at 10:36 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `piwheel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activationTokens`
--

CREATE TABLE IF NOT EXISTS `activationTokens` (
  `UserID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Token` varchar(255) COLLATE utf8_bin NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `activationTokens`
--

INSERT INTO `activationTokens` (`UserID`, `Token`, `CreationDate`, `status`) VALUES
('5295dcd1064b1', '2e673f9b98ace549c2b361571c227ef11625edc4', '2014-01-12 06:04:07', 0),
('5295dcd1064b1', 'eed4548e92b2272e66129480c8528b1405369e59', '2014-01-12 06:04:22', 0),
('5295dcd1064b1', '3219575700f1c2adfc923c27502c01d332cd9810', '2014-01-12 06:09:51', 0),
('5295dcd1064b1', '414c086542a4aef1b947f805abef8baf16d0b711', '2014-01-12 06:24:54', 0),
('5295dcd1064b1', '403a74ce7ac96143eb4395984c933900b0de1072', '2014-01-12 06:28:32', 0),
('5295dcd1064b1', '7fc60ebe87c54b3e219b64b70401d9a4a98a4dce', '2014-01-12 06:28:40', 0),
('5295dcd1064b1', '7eeac6f6341ed30be2c6de3b0b208bce9219e076', '2014-01-12 06:29:09', 0),
('5295dcd1064b1', 'ee60a0f17da50395442bec87621cc2b95efac4e0', '2014-01-12 06:29:17', 0),
('5295dcd1064b1', '17855e75474f1c66bff0f9439f22223ecd242d8d', '2014-01-12 06:30:02', 0),
('5295dcd1064b1', '8b9e6c68e50f49fe24192b79041091389aabefda', '2014-01-12 06:31:27', 0),
('5295dcd1064b1', '1ff5ec8e847ce47c89b422834d12a01c2c667d3f', '2014-01-12 06:37:11', 0),
('5295dcd1064b1', 'e1efb3ed178755e90ec700e432fca47601213c89', '2014-01-12 06:38:07', 0),
('5295dcd1064b1', 'ddf64afa15981a4561002be1ba7c24b0773ac84e', '2014-01-12 06:38:55', 0),
('5295dcd1064b1', 'd53768ffcdaee328d470f92614ea5d36c65fe33b', '2014-01-12 09:49:38', 0),
('5295dcd1064b1', 'dddd6336bd2fe721fea2484d4d1e3dbc1e77bc9b', '2014-01-12 09:52:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Chapter_Exam`
--

CREATE TABLE IF NOT EXISTS `Chapter_Exam` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ChapterID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Type` varchar(100) COLLATE utf8_bin NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Chapter_Lesson`
--

CREATE TABLE IF NOT EXISTS `Chapter_Lesson` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ChapterID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Type` varchar(100) COLLATE utf8_bin NOT NULL,
  `Content` varchar(255) COLLATE utf8_bin NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=152 ;

--
-- Dumping data for table `Chapter_Lesson`
--

INSERT INTO `Chapter_Lesson` (`ID`, `ChapterID`, `Name`, `Type`, `Content`, `StartDate`, `EndDate`) VALUES
(105, '52c29b7d5144d', 'lesson 1', 'video', 'amamama.com', '2014-01-02 11:41:14', '0000-00-00 00:00:00'),
(106, '52c29b7d5144d', 'lesson 2', 'video', 'slslss.com', '2014-01-02 11:41:26', '0000-00-00 00:00:00'),
(107, '52c29b7d5144d', 'lesson 4', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c29b7d5144d_lesson 4/Amr_Bakr1.pdf', '2014-01-02 11:41:42', '0000-00-00 00:00:00'),
(109, '52c5575c76e8c', 'lesson 1', 'video', 'sss.com', '2014-01-02 12:11:08', '0000-00-00 00:00:00'),
(110, '52c5575c76e8c', 'lesson 2', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c5575c76e8c_lesson 2/Amr_Bakr.pdf', '2014-01-02 12:23:15', '0000-00-00 00:00:00'),
(111, '52c5575c76e8c', 'sssss', 'video', 'sssss', '2014-01-02 12:29:49', '0000-00-00 00:00:00'),
(112, '52c561766b766', 'sssss', 'video', 'sssss', '2014-01-02 12:54:14', '0000-00-00 00:00:00'),
(113, '52c561766b766', 'lesson 1', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c561766b766_lesson 1/Amr_Bakr.pdf', '2014-01-02 12:54:40', '0000-00-00 00:00:00'),
(114, '52c563c5e8828', 'lesson 1', 'video', 'sssss', '2014-01-02 13:04:06', '0000-00-00 00:00:00'),
(115, '52c563c5e8828', 'lesson new', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c563c5e8828_lesson new/Amr_Bakr.pdf', '2014-01-02 13:20:46', '0000-00-00 00:00:00'),
(116, '52c567d847780', 'less', 'video', 'ssssss', '2014-01-02 13:21:28', '0000-00-00 00:00:00'),
(117, '52c567d847780', 'lesson 1', 'video', 'www.video.com', '2014-01-02 13:45:38', '0000-00-00 00:00:00'),
(118, '52c56db1468e4', 'lesson 1', 'video', 'ssssssss', '2014-01-02 13:46:25', '0000-00-00 00:00:00'),
(119, '52c56ef7c747c', 'lesson1', 'video', 'wwwwwww', '2014-01-02 13:51:52', '0000-00-00 00:00:00'),
(120, '52c56ef7c747c', 'lesson  2', 'document', '/var/www/html/PiWheel/application/uploads/material/52c56ef7c747c_lesson  2/Amr_Bakr.pdf', '2014-01-02 13:52:28', '0000-00-00 00:00:00'),
(121, '52c57197f41bd', 'new', 'video', 'sssss', '2014-01-02 14:03:04', '0000-00-00 00:00:00'),
(122, '52c571b61f8cd', 'new', 'video', 'sssss', '2014-01-02 14:03:34', '0000-00-00 00:00:00'),
(123, '52c571b61f8cd', 'new lesson', 'video', 'ssss', '2014-01-02 14:04:21', '0000-00-00 00:00:00'),
(124, '52c571b61f8cd', 'lesson 1', 'video', 'sssss', '2014-01-02 14:04:40', '0000-00-00 00:00:00'),
(125, '52c57302e3303', 'lesson 1', 'video', 'sssss', '2014-01-02 14:09:07', '0000-00-00 00:00:00'),
(126, '52c57302e3303', 'lesson 2', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c57302e3303_lesson 2/Amr_Bakr.pdf', '2014-01-02 14:09:29', '0000-00-00 00:00:00'),
(128, '52c5732de6b99', 'lesson 1', 'video', 'sslslsls', '2014-01-02 14:37:54', '0000-00-00 00:00:00'),
(129, '52c5732de6b99', 'lesson 2 ', 'exam', '52c57d6adfbf0', '2014-01-02 14:53:30', '0000-00-00 00:00:00'),
(132, '52c922247d7fd', 'Document', 'document', '/var/www/html/PiWheel/application/uploads/material/52c922247d7fd_Document/Amr_Bakr.pdf', '2014-01-05 09:13:08', '0000-00-00 00:00:00'),
(133, '52c922247d7fd', 'Slides', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c922247d7fd_Slides/Amr_Bakr.pdf', '2014-01-05 09:13:17', '0000-00-00 00:00:00'),
(134, '52c922247d7fd', 'Video', 'video', 'www.video.com', '2014-01-05 09:13:42', '0000-00-00 00:00:00'),
(135, '52c922247d7fd', 'Exam', 'exam', '52c9228090c8c', '2014-01-05 09:14:40', '0000-00-00 00:00:00'),
(136, '52c922a45f7d1', 'Document', 'document', '/var/www/html/PiWheel/application/uploads/material/52c922a45f7d1_Document/Amr_Bakr.pdf', '2014-01-05 09:15:16', '0000-00-00 00:00:00'),
(137, '52c922a45f7d1', 'Slides', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c922a45f7d1_Slides/Amr_Bakr.pdf', '2014-01-05 09:15:25', '0000-00-00 00:00:00'),
(138, '52c922a45f7d1', 'Video', 'video', 'www.video.com', '2014-01-05 09:15:34', '0000-00-00 00:00:00'),
(139, '52c922a45f7d1', 'Exam', 'exam', '52c922c930681', '2014-01-05 09:15:53', '0000-00-00 00:00:00'),
(140, '52c9398eee7f2', 'Document', 'document', '/var/www/html/PiWheel/application/uploads/material/52c9398eee7f2_Document/Amr_Bakr.pdf', '2014-01-05 10:53:03', '0000-00-00 00:00:00'),
(141, '52c9398eee7f2', 'Slides', 'slides', '/var/www/html/PiWheel/application/uploads/material/52c9398eee7f2_Slides/Amr_Bakr.pdf', '2014-01-05 10:53:12', '0000-00-00 00:00:00'),
(142, '52c9398eee7f2', 'Video', 'video', 'www.video.com', '2014-01-05 10:53:21', '0000-00-00 00:00:00'),
(143, '52c9398eee7f2', 'Exam', 'exam', '52c939b04cf51', '2014-01-05 10:53:36', '0000-00-00 00:00:00'),
(144, '52d2573b59798', 'pdf', 'document', '/var/www/html/PiWheel/application/uploads/material/52d2573b59798_pdf/Amr_Bakr.pdf', '2014-01-12 08:50:03', '0000-00-00 00:00:00'),
(145, '52d26045a452f', 'pdf', 'document', '/var/www/html/PiWheel/application/uploads/material/52d26045a452f_pdf/Amr_Bakr.pdf', '2014-01-12 09:28:37', '0000-00-00 00:00:00'),
(146, '52d26045a452f', 'slides', 'slides', '/var/www/html/PiWheel/application/uploads/material/52d26045a452f_slides/Amr_Bakr.pdf', '2014-01-12 09:29:00', '0000-00-00 00:00:00'),
(147, '52d26045a452f', 'exam', 'slides', '/var/www/html/PiWheel/application/uploads/material/52d26045a452f_exam/UX_Design_as_a_concept.ppt', '2014-01-12 09:32:00', '0000-00-00 00:00:00'),
(148, '52d2622a8bb71', 'slides', 'slides', '/var/www/html/PiWheel/application/uploads/material/52d2622a8bb71_slides/Amr_Bakr.pdf', '2014-01-12 09:36:42', '0000-00-00 00:00:00'),
(149, '52d2622a8bb71', 'ppt', 'slides', '/var/www/html/PiWheel/application/uploads/material/52d2622a8bb71_ppt/UX_Design_as_a_concept.ppt', '2014-01-12 09:37:01', '0000-00-00 00:00:00'),
(150, '52d2624d060b3', 'lesson 1', 'video', 'www.video.com', '2014-01-12 09:37:17', '0000-00-00 00:00:00'),
(151, '52d2624d060b3', 'pdf', 'document', '/var/www/html/PiWheel/application/uploads/material/52d2624d060b3_pdf/Amr_Bakr.pdf', '2014-01-12 09:37:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE IF NOT EXISTS `Course` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Image` varchar(255) COLLATE utf8_bin NOT NULL,
  `Brief` text COLLATE utf8_bin NOT NULL,
  `UniveristyID` int(11) NOT NULL,
  `Tags` varchar(255) COLLATE utf8_bin NOT NULL,
  `Rating` int(11) NOT NULL,
  `Level` int(11) NOT NULL,
  `Duration` varchar(100) COLLATE utf8_bin NOT NULL,
  `Price` float NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `InstructorID` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Language` varchar(10) COLLATE utf8_bin NOT NULL,
  `Video` varchar(255) COLLATE utf8_bin NOT NULL,
  `Done` tinyint(4) NOT NULL DEFAULT '0',
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CourseID` (`CourseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=48 ;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`ID`, `CourseID`, `Name`, `Image`, `Brief`, `UniveristyID`, `Tags`, `Rating`, `Level`, `Duration`, `Price`, `StartDate`, `InstructorID`, `Language`, `Video`, `Done`, `publish`) VALUES
(14, '527f5aaec1dec', 'CSEN 102 Introduction to Computer Science', '527f5aaec1dec.jpg', ' CSEN102 is an introduction to fundamentals of Computer Science. The purpose of this course is to gain a broad oversight of the discipline of formal computer science. This will allow the students to, not only use computers and software efficiently, but to understand the ideas underlying their creation and implementation. Students will be able to understand fundamental issues as algorithms, hardware design, computer organization and system software', 1, 'software,programming', 1, 3, '30', 1000, '2013-11-19 22:00:00', '5295dcd1064b1', '', '', 1, 0),
(15, '52820ad086851', 'Digital Media ', '52820ad086851.jpg', 'A digital media course', 2, 'media,software', 0, 3, '50', 200, '2013-11-29 22:00:00', '5295dcd1064b1', 'en', '', 1, 0),
(16, '528c78823a268', 'HTML Basics', '528c78823a268.jpg', 'This course explains the first basics of implementing an HTML Page', 2, 'Software,Programming', 0, 4, '30', 1500, '2013-11-29 22:00:00', '5295dcd1064b1', 'en', '', 0, 0),
(17, '528c795162b2e', 'MySQL ', '528c795162b2e.jpg', 'Nothing ', 2, 'Development,Programming', 0, 1, '30', 100, '2013-11-29 22:00:00', '5295dcd1064b1', 'en', '', 0, 0),
(18, '528c80732a8a0', 'PHP 5', '528c80732a8a0.png', 'Nothing', 1, 'Development,Programming', 0, 4, '40', 350, '2013-11-29 22:00:00', '5295dcd1064b1', 'en', '', 1, 0),
(20, '52a5a3822696a', 'Computer Networks', '52a5a3822696a.jpg', 'A computer network or data network is a telecommunications network that allows computers to exchange data. In computer networks, networked computing devices pass data to each other along data connections. The connections (network links) between nodes are established using either cable media or wireless media. The best-known computer network is the Internet.\nNetwork computer devices that originate, route and terminate the data are called network nodes.[1] Nodes can include hosts such as servers and personal computers, as well as networking hardware. Two devices are said to be networked when a device is able to exchange information with another device.\nComputer networks support applications such as access to the World Wide Web, shared use of application and storage servers, printers, and fax machines, and use of email and instant messaging applications. Computer networks differ in the physical media used to transmit their signals, the communications protocols to organize network traffic, the network''s size, topology and organizational intent.', 27, 'computer,networks', 0, 3, '55.00', 750, '2013-12-09 11:03:30', '5295dcd1064b1', '', '', 0, 0),
(35, '52ad7b8453048', 'Course Name', '52ad7b8453048.jpg', 'Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm Course smsmsm', 5, 'mechanics', 0, 4, '50.00', 1500, '2013-12-15 09:51:00', '5295dcd1064b1', '', '', 0, 0),
(46, '52b025f147241', 'Test TEst', '52b025f147241.jpg', 'TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst TEst', 2, '', 0, 3, '30.00', 1200, '2013-12-17 10:22:41', '5295dcd1064b1', '', '', 0, 0),
(47, '52d26028815ad', 'New Course', '52d26028815ad.png', 'Desc of the new course Desc of the new course Desc of the new course Desc of the new course Desc of the new course', 39, '', 0, 3, '99.00', 500, '2014-01-12 09:28:08', '5295dcd1064b1', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Course_Chapter`
--

CREATE TABLE IF NOT EXISTS `Course_Chapter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ChapterID` varchar(255) COLLATE utf8_bin NOT NULL,
  `saved` tinyint(4) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ChapterID` (`ChapterID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=61 ;

--
-- Dumping data for table `Course_Chapter`
--

INSERT INTO `Course_Chapter` (`ID`, `CourseID`, `Name`, `StartDate`, `EndDate`, `ChapterID`, `saved`, `count`) VALUES
(42, '52b025f147241', 'chapter 1', '2013-12-31 10:25:01', '0000-00-00 00:00:00', '52c29b7d5144d', 1, 0),
(43, '52b025f147241', 'chapter 2', '2014-01-02 12:11:08', '0000-00-00 00:00:00', '52c5575c76e8c', 1, 1),
(44, '52b025f147241', 'chapter 3', '2014-01-02 12:54:14', '0000-00-00 00:00:00', '52c561766b766', 1, 2),
(45, '52b025f147241', 'chapter 4', '2014-01-02 13:04:05', '0000-00-00 00:00:00', '52c563c5e8828', 1, 3),
(46, '52b025f147241', 'chapter 5', '2014-01-02 13:21:28', '0000-00-00 00:00:00', '52c567d847780', 1, 4),
(47, '52b025f147241', 'chapter 6', '2014-01-02 13:46:25', '0000-00-00 00:00:00', '52c56db1468e4', 1, 5),
(48, '52b025f147241', 'chapter 7', '2014-01-02 13:51:51', '0000-00-00 00:00:00', '52c56ef7c747c', 1, 6),
(49, '52b025f147241', 'chapter 8', '2014-01-02 14:03:04', '0000-00-00 00:00:00', '52c57197f41bd', 1, 7),
(50, '52b025f147241', 'chapter 9', '2014-01-02 14:03:34', '0000-00-00 00:00:00', '52c571b61f8cd', 1, 8),
(51, '52b025f147241', 'chapter 10', '2014-01-02 14:09:06', '0000-00-00 00:00:00', '52c57302e3303', 1, 9),
(52, '52b025f147241', 'chapter 11', '2014-01-02 14:09:49', '0000-00-00 00:00:00', '52c5732de6b99', 1, 10),
(53, '52b025f147241', 'chapter 12', '2014-01-02 14:53:44', '0000-00-00 00:00:00', '52c57d78c63fa', 1, 11),
(54, '527f5aaec1dec', 'Introduction', '2014-01-05 09:13:08', '0000-00-00 00:00:00', '52c922247d7fd', 1, 0),
(55, '527f5aaec1dec', 'Basics', '2014-01-05 09:15:16', '0000-00-00 00:00:00', '52c922a45f7d1', 1, 1),
(56, '527f5aaec1dec', 'Recursion', '2014-01-05 10:53:02', '0000-00-00 00:00:00', '52c9398eee7f2', 0, 2),
(57, '528c80732a8a0', 'Introduction', '2014-01-12 08:50:03', '0000-00-00 00:00:00', '52d2573b59798', 0, 0),
(58, '52d26028815ad', 'Intro', '2014-01-12 09:28:37', '0000-00-00 00:00:00', '52d26045a452f', 1, 0),
(59, '52d26028815ad', 'Basics', '2014-01-12 09:36:42', '0000-00-00 00:00:00', '52d2622a8bb71', 1, 1),
(60, '52d26028815ad', 'Chapter 3', '2014-01-12 09:37:17', '0000-00-00 00:00:00', '52d2624d060b3', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Course_Comment`
--

CREATE TABLE IF NOT EXISTS `Course_Comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Text` text COLLATE utf8_bin NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` varchar(50) COLLATE utf8_bin NOT NULL,
  `Flag` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Course_Languages`
--

CREATE TABLE IF NOT EXISTS `Course_Languages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Code` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`,`Code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=185 ;

--
-- Dumping data for table `Course_Languages`
--

INSERT INTO `Course_Languages` (`ID`, `Name`, `Code`) VALUES
(2, 'Abkhazian', 'ab'),
(1, 'Afar', 'aa'),
(4, 'Afrikaans', 'af'),
(5, 'Akan', 'ak'),
(149, 'Albanian', 'sq'),
(6, 'Amharic', 'am'),
(8, 'Arabic', 'ar'),
(7, 'Aragonese', 'an'),
(63, 'Armenian', 'hy'),
(9, 'Assamese', 'as'),
(10, 'Avaric', 'av'),
(3, 'Avestan', 'ae'),
(11, 'Aymara', 'ay'),
(12, 'Azerbaijani', 'az'),
(18, 'Bambara', 'bm'),
(13, 'Bashkir', 'ba'),
(42, 'Basque', 'eu'),
(14, 'Belarusian', 'be'),
(19, 'Bengali', 'bn'),
(16, 'Bihari', 'bh'),
(17, 'Bislama', 'bi'),
(22, 'Bosnian', 'bs'),
(21, 'Breton', 'br'),
(15, 'Bulgarian', 'bg'),
(110, 'Burmese', 'my'),
(23, 'Catalan', 'ca'),
(25, 'Chamorro', 'ch'),
(24, 'Chechen', 'ce'),
(121, 'Chichewa', 'ny'),
(183, 'Chinese', 'zh'),
(29, 'Church Slavic', 'cu'),
(30, 'Chuvash', 'cv'),
(90, 'Cornish', 'kw'),
(26, 'Corsican', 'co'),
(27, 'Cree', 'cr'),
(60, 'Croatian', 'hr'),
(28, 'Czech', 'cs'),
(32, 'Danish', 'da'),
(34, 'Divehi', 'dv'),
(116, 'Dutch', 'nl'),
(35, 'Dzongkha', 'dz'),
(38, 'English', 'en'),
(39, 'Esperanto', 'eo'),
(41, 'Estonian', 'et'),
(36, 'Ewe', 'ee'),
(47, 'Faroese', 'fo'),
(46, 'Fijian', 'fj'),
(45, 'Finnish', 'fi'),
(48, 'French', 'fr'),
(44, 'Fulah', 'ff'),
(52, 'Galician', 'gl'),
(94, 'Ganda', 'lg'),
(77, 'Georgian', 'ka'),
(33, 'German', 'de'),
(37, 'Greek', 'el'),
(53, 'Guarani', 'gn'),
(54, 'Gujarati', 'gu'),
(61, 'Haitian', 'ht'),
(56, 'Hausa', 'ha'),
(57, 'Hebrew', 'he'),
(64, 'Herero', 'hz'),
(58, 'Hindi', 'hi'),
(59, 'Hiri Motu', 'ho'),
(62, 'Hungarian', 'hu'),
(72, 'Icelandic', 'is'),
(71, 'Ido', 'io'),
(68, 'Igbo', 'ig'),
(66, 'Indonesian', 'id'),
(65, 'Interlingua (International Auxiliary Language Association)', 'ia'),
(67, 'Interlingue', 'ie'),
(74, 'Inuktitut', 'iu'),
(70, 'Inupiaq', 'ik'),
(50, 'Irish', 'ga'),
(73, 'Italian', 'it'),
(75, 'Japanese', 'ja'),
(76, 'Javanese', 'jv'),
(82, 'Kalaallisut', 'kl'),
(84, 'Kannada', 'kn'),
(86, 'Kanuri', 'kr'),
(87, 'Kashmiri', 'ks'),
(81, 'Kazakh', 'kk'),
(83, 'Khmer', 'km'),
(79, 'Kikuyu', 'ki'),
(137, 'Kinyarwanda', 'rw'),
(91, 'Kirghiz', 'ky'),
(134, 'Kirundi', 'rn'),
(89, 'Komi', 'kv'),
(78, 'Kongo', 'kg'),
(85, 'Korean', 'ko'),
(88, 'Kurdish', 'ku'),
(80, 'Kwanyama', 'kj'),
(97, 'Lao', 'lo'),
(92, 'Latin', 'la'),
(100, 'Latvian', 'lv'),
(95, 'Limburgish', 'li'),
(96, 'Lingala', 'ln'),
(98, 'Lithuanian', 'lt'),
(99, 'Luba-Katanga', 'lu'),
(93, 'Luxembourgish', 'lb'),
(104, 'Macedonian', 'mk'),
(101, 'Malagasy', 'mg'),
(108, 'Malay', 'ms'),
(105, 'Malayalam', 'ml'),
(109, 'Maltese', 'mt'),
(55, 'Manx', 'gv'),
(103, 'Maori', 'mi'),
(107, 'Marathi', 'mr'),
(102, 'Marshallese', 'mh'),
(106, 'Mongolian', 'mn'),
(111, 'Nauru', 'na'),
(120, 'Navajo', 'nv'),
(115, 'Ndonga', 'ng'),
(114, 'Nepali', 'ne'),
(113, 'North Ndebele', 'nd'),
(141, 'Northern Sami', 'se'),
(118, 'Norwegian', 'no'),
(112, 'Norwegian Bokmal', 'nb'),
(117, 'Norwegian Nynorsk', 'nn'),
(122, 'Occitan', 'oc'),
(123, 'Ojibwa', 'oj'),
(125, 'Oriya', 'or'),
(124, 'Oromo', 'om'),
(126, 'Ossetian', 'os'),
(128, 'Pali', 'pi'),
(127, 'Panjabi', 'pa'),
(130, 'Pashto', 'ps'),
(43, 'Persian', 'fa'),
(129, 'Polish', 'pl'),
(131, 'Portuguese', 'pt'),
(132, 'Quechua', 'qu'),
(133, 'Raeto-Romance', 'rm'),
(135, 'Romanian', 'ro'),
(136, 'Russian', 'ru'),
(146, 'Samoan', 'sm'),
(142, 'Sango', 'sg'),
(138, 'Sanskrit', 'sa'),
(139, 'Sardinian', 'sc'),
(51, 'Scottish Gaelic', 'gd'),
(150, 'Serbian', 'sr'),
(147, 'Shona', 'sn'),
(69, 'Sichuan Yi', 'ii'),
(140, 'Sindhi', 'sd'),
(143, 'Sinhala', 'si'),
(144, 'Slovak', 'sk'),
(145, 'Slovenian', 'sl'),
(148, 'Somali', 'so'),
(119, 'South Ndebele', 'nr'),
(152, 'Southern Sotho', 'st'),
(40, 'Spanish', 'es'),
(153, 'Sundanese', 'su'),
(155, 'Swahili', 'sw'),
(151, 'Swati', 'ss'),
(154, 'Swedish', 'sv'),
(162, 'Tagalog', 'tl'),
(169, 'Tahitian', 'ty'),
(158, 'Tajik', 'tg'),
(156, 'Tamil', 'ta'),
(167, 'Tatar', 'tt'),
(157, 'Telugu', 'te'),
(159, 'Thai', 'th'),
(20, 'Tibetan', 'bo'),
(160, 'Tigrinya', 'ti'),
(164, 'Tonga', 'to'),
(166, 'Tsonga', 'ts'),
(163, 'Tswana', 'tn'),
(165, 'Turkish', 'tr'),
(161, 'Turkmen', 'tk'),
(168, 'Twi', 'tw'),
(170, 'Uighur', 'ug'),
(171, 'Ukrainian', 'uk'),
(172, 'Urdu', 'ur'),
(173, 'Uzbek', 'uz'),
(174, 'Venda', 've'),
(175, 'Vietnamese', 'vi'),
(176, 'Volapuk', 'vo'),
(177, 'Walloon', 'wa'),
(31, 'Welsh', 'cy'),
(49, 'Western Frisian', 'fy'),
(178, 'Wolof', 'wo'),
(179, 'Xhosa', 'xh'),
(180, 'Yiddish', 'yi'),
(181, 'Yoruba', 'yo'),
(182, 'Zhuang', 'za'),
(184, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Table structure for table `Enrollment`
--

CREATE TABLE IF NOT EXISTS `Enrollment` (
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `StudentID` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `active` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Enrollment`
--

INSERT INTO `Enrollment` (`StartDate`, `EndDate`, `ID`, `CourseID`, `StudentID`, `active`) VALUES
('2013-10-24 10:22:11', '0000-00-00 00:00:00', 1, '528c78823a268', '5293206a36ebc', 1),
('2013-10-24 10:22:32', '0000-00-00 00:00:00', 2, '5268e4d9de02e', '524d58b217f93', 1),
('2013-10-24 11:04:57', '0000-00-00 00:00:00', 4, '5268fdeecf3aa', '524d58b217f93', 1),
('2013-10-24 12:33:08', '0000-00-00 00:00:00', 5, '5268e4d9de02e', '524d5c300cdcf', 1),
('2013-10-29 14:47:44', '0000-00-00 00:00:00', 6, '5268fdeecf3aa', '', 0),
('2013-11-12 08:40:02', '0000-00-00 00:00:00', 7, '527f5aaec1dec', '524d5d2a0ea7e', 1),
('2013-11-12 08:40:45', '0000-00-00 00:00:00', 8, '527f5aaec1dec', '524d5d13eadc3', 1),
('2013-11-12 08:40:53', '0000-00-00 00:00:00', 9, '527f5aaec1dec', '525430a9918fe', 0),
('2013-11-12 11:12:15', '0000-00-00 00:00:00', 10, '527f5aaec1dec', '5293206a36ebc', 0),
('2013-11-12 11:36:36', '0000-00-00 00:00:00', 11, '52820ad086851', '524d58b217f93', 0),
('2013-11-20 11:27:53', '0000-00-00 00:00:00', 12, '528c80732a8a0', '524d5deb82b75', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Exam_Answer`
--

CREATE TABLE IF NOT EXISTS `Exam_Answer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExamID` int(11) NOT NULL,
  `Desc` text COLLATE utf8_bin NOT NULL,
  `Mark` varchar(10) COLLATE utf8_bin NOT NULL,
  `QuestionID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=56 ;

--
-- Dumping data for table `Exam_Answer`
--

INSERT INTO `Exam_Answer` (`ID`, `ExamID`, `Desc`, `Mark`, `QuestionID`) VALUES
(32, 37, '12', '0', 32),
(33, 37, '20', '0', 32),
(34, 37, '24', '1', 32),
(35, 37, '30', '0', 32),
(36, 38, '1', '0', 35),
(37, 38, '2', '0', 35),
(38, 38, '3', '0', 35),
(39, 38, '4', '0', 35),
(40, 38, '-20', '0', 35),
(41, 38, '14', '0', 35),
(42, 38, '16', '0', 35),
(43, 38, '210', '1', 35),
(44, 42, 'shsh', '0', 36),
(45, 42, 'ssssss', '0', 36),
(46, 42, 'sssss', '1', 36),
(47, 42, 'sss', '0', 36),
(48, 45, '1', '0', 37),
(49, 45, '2', '0', 37),
(50, 45, '3', '1', 37),
(51, 45, '4', '0', 37),
(52, 45, '', '0', 37),
(53, 45, '', '0', 37),
(54, 45, '', '0', 37),
(55, 45, '', '0', 37);

-- --------------------------------------------------------

--
-- Table structure for table `Exam_Question`
--

CREATE TABLE IF NOT EXISTS `Exam_Question` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ExamID` int(11) NOT NULL,
  `Type` varchar(100) COLLATE utf8_bin NOT NULL,
  `Desc` text COLLATE utf8_bin NOT NULL,
  `Mark` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=40 ;

--
-- Dumping data for table `Exam_Question`
--

INSERT INTO `Exam_Question` (`ID`, `ExamID`, `Type`, `Desc`, `Mark`) VALUES
(32, 37, 'MultipleChoice', 'How old are you ?', ''),
(33, 37, 'EssayQuestion', 'The sun is bigger than Earth ?', ''),
(34, 38, 'RightWrong', 'is it true ?', 'false'),
(35, 38, 'MultipleChoice', 'What is the largest of the following ?', ''),
(36, 42, 'MultipleChoice', 'shshshsh', ''),
(37, 45, 'MultipleChoice', 'aflkhafklh', ''),
(38, 45, 'EssayQuestion', 'Thiafklhafklahf', ''),
(39, 45, 'RightWrong', 'aklfhalfkhafklaflk', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `Lesson_types`
--

CREATE TABLE IF NOT EXISTS `Lesson_types` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `Lesson_types`
--

INSERT INTO `Lesson_types` (`ID`, `Name`) VALUES
(5, 'Document'),
(6, 'Exam'),
(3, 'Slides'),
(4, 'Video');

-- --------------------------------------------------------

--
-- Table structure for table `Level`
--

CREATE TABLE IF NOT EXISTS `Level` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Level`
--

INSERT INTO `Level` (`ID`, `Name`) VALUES
(1, 'Hobby'),
(2, 'Beginner '),
(3, 'Intermediate'),
(4, 'Professional'),
(5, 'Genius');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Text` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Type` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE IF NOT EXISTS `Role` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `RoleName` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `RoleID` (`RoleName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`ID`, `RoleName`) VALUES
(1, 'admin'),
(4, 'guest'),
(3, 'instructor'),
(2, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `University`
--

CREATE TABLE IF NOT EXISTS `University` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `About` text COLLATE utf8_bin NOT NULL,
  `Image` varchar(255) COLLATE utf8_bin NOT NULL,
  `ImageID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=40 ;

--
-- Dumping data for table `University`
--

INSERT INTO `University` (`ID`, `description`, `About`, `Image`, `ImageID`, `Name`) VALUES
(1, 'German University in Cairo', 'The German University in Cairo, GUC, is an Egyptian Private University founded by the presidential decree 27/2002, according to the law number 101/1992 and its executive regulations number 355/1996.\n\nGUC is established in cooperation with the State Universities of Ulm and Stuttgart, under the patronage of the Egyptian Ministry of Higher Education, the Ministry of Science, Research and Arts, State of Baden-Wuerttemberg, Germany, and supported by the German Academic Exchange Service (DAAD), the German Embassy in Cairo, the Arab/German Chamber of Industry and Commerce (AHK), the Federal Ministry of Education and Research, Germany, The State University of Tuebingen and The State University of Mannheim.', '', '', ''),
(2, 'American Univeristy in Cairo', 'The German University in Cairo, GUC, is an Egyptian Private University founded by the presidential decree 27/2002, according to the law number 101/1992 and its executive regulations number 355/1996.\n\nGUC is established in cooperation with the State Universities of Ulm and Stuttgart, under the patronage of the Egyptian Ministry of Higher Education, the Ministry of Science, Research and Arts, State of Baden-Wuerttemberg, Germany, and supported by the German Academic Exchange Service (DAAD), the German Embassy in Cairo, the Arab/German Chamber of Industry and Commerce (AHK), the Federal Ministry of Education and Research, Germany, The State University of Tuebingen and The State University of Mannheim.', '', '', ''),
(3, 'Misr International University', 'The German University in Cairo, GUC, is an Egyptian Private University founded by the presidential decree 27/2002, according to the law number 101/1992 and its executive regulations number 355/1996.\n\nGUC is established in cooperation with the State Universities of Ulm and Stuttgart, under the patronage of the Egyptian Ministry of Higher Education, the Ministry of Science, Research and Arts, State of Baden-Wuerttemberg, Germany, and supported by the German Academic Exchange Service (DAAD), the German Embassy in Cairo, the Arab/German Chamber of Industry and Commerce (AHK), the Federal Ministry of Education and Research, Germany, The State University of Tuebingen and The State University of Mannheim.', '', '', ''),
(4, 'Canadian International College', 'The German University in Cairo, GUC, is an Egyptian Private University founded by the presidential decree 27/2002, according to the law number 101/1992 and its executive regulations number 355/1996.\n\nGUC is established in cooperation with the State Universities of Ulm and Stuttgart, under the patronage of the Egyptian Ministry of Higher Education, the Ministry of Science, Research and Arts, State of Baden-Wuerttemberg, Germany, and supported by the German Academic Exchange Service (DAAD), the German Embassy in Cairo, the Arab/German Chamber of Industry and Commerce (AHK), the Federal Ministry of Education and Research, Germany, The State University of Tuebingen and The State University of Mannheim.', '', '', ''),
(5, 'Misr International School', 'descccccccccccccccccccc', '52a075c1c0309.jpg', '52a075c1c0309', ''),
(31, 'test1', 'desc test1', '52a9a96c74451.jpg', '52a9a96c74451', ''),
(32, 'test2', 'test2 desccc', '52a9a9c809236.53.13 PM (1).png', '52a9a9c809236', ''),
(33, 'test 3', 'test3 desccc', '52a9aa0216677.jpg', '52a9aa0216677', ''),
(34, 'test4', 'test444 desc', '52a9ac231e96b.jpg', '52a9ac231e96b', ''),
(35, 'test5', 'test444 desc', '', '', ''),
(36, 'samouni', '', '', '', ''),
(37, 'saaaa', '', '', '', ''),
(38, 'samo', '', '', '', ''),
(39, 'New University', 'description of the new uni', '52d25f8727d97.jpg', '52d25f8727d97', '');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` varchar(255) COLLATE utf8_bin NOT NULL,
  `Username` varchar(255) COLLATE utf8_bin NOT NULL,
  `Password` varchar(32) COLLATE utf8_bin NOT NULL,
  `Pass_Salt` varchar(10) COLLATE utf8_bin NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `LastLoginDate` datetime NOT NULL,
  `FailureTrials` smallint(6) NOT NULL,
  `RoleID` varchar(255) COLLATE utf8_bin NOT NULL,
  `StartDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `EndDate` datetime NOT NULL,
  `Prefix` varchar(10) COLLATE utf8_bin NOT NULL,
  `Fullname` varchar(255) COLLATE utf8_bin NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Birthdate` date NOT NULL,
  `About` text COLLATE utf8_bin NOT NULL,
  `Title` varchar(50) COLLATE utf8_bin NOT NULL,
  `Image` varchar(255) COLLATE utf8_bin NOT NULL,
  `language` varchar(100) COLLATE utf8_bin NOT NULL,
  `IsLoggedIn` tinyint(1) NOT NULL,
  `tmp_email` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `UserID`, `Username`, `Password`, `Pass_Salt`, `IsActive`, `LastLoginDate`, `FailureTrials`, `RoleID`, `StartDate`, `EndDate`, `Prefix`, `Fullname`, `Gender`, `Birthdate`, `About`, `Title`, `Image`, `language`, `IsLoggedIn`, `tmp_email`) VALUES
(11, '5293206a36ebc', 'amrsamo@hotmail.com', 'b5e9066249ace838ad50cd856170a4c1', 'GHGWAX0l', 0, '2014-01-15 10:10:03', 0, '2', '2013-11-25 10:03:22', '0000-00-00 00:00:00', '', 'Amr Samo', 1, '1989-09-01', '', '', '', '', 1, 'amr@amr.com'),
(12, '52932fbb2e0da', 'admin@admin.com', '12a893dcc458a9b01a640f0c5cc5a52f', '96zSRiRh', 0, '0000-00-00 00:00:00', 0, '1', '2013-11-25 11:08:43', '0000-00-00 00:00:00', '', 'admin', 1, '2013-11-30', '', '', '', 'english', 0, ''),
(13, '529483054518b', 'rockane10@hotmail.com', '1807d31fc3be2857fd9fb4b9caf31cd4', 'FMtbSH24', 1, '2013-11-27 12:08:44', 0, '2', '2013-11-26 11:16:21', '0000-00-00 00:00:00', '', 'Ahmed Assem', 1, '1950-01-01', '', '', '', '', 0, ''),
(15, '5295dcd1064b1', 'instructor@hotmail.com', 'a9a0075cdc109c416df1c29cdbaa1531', 'HHAmBb5C', 1, '2014-01-12 09:55:07', 0, '3', '2013-11-27 11:51:45', '0000-00-00 00:00:00', 'Mr', 'James Dean', 0, '0000-00-00', 'PHD Holder, Course professional. quite elaborate and efficient in how to deliver the information to all of my students.', 'PHD', '5295dcd1064b1.jpg', '', 0, ''),
(16, '529713fe52754', 'slim@slim.com', 'ba16d4eda8490295dc84cfb155c2196f', 'mCNkumfA', 0, '2013-11-28 09:59:26', 0, '3', '2013-11-28 09:59:26', '0000-00-00 00:00:00', 'Mr', 'Slim AbdelNader', 0, '0000-00-00', 'A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor A computer science professional instructor', 'Abd', '529713fe52754.jpg', '', 0, ''),
(17, '5297157f25f7e', 'mohamed@inst.com', 'fb275e6f5da7e8ebba1015522e935312', 'zOj97VoD', 0, '2013-11-28 10:05:51', 0, '3', '2013-11-28 10:05:51', '0000-00-00 00:00:00', 'Mr', 'Mohamed Ahmed', 0, '0000-00-00', 'Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed', 'Prof. PHD', '5297157f25f7e.jpg', '', 0, ''),
(18, '529715e6a1eb7', 'mohamed@instructor.com', '7cdca137eec18bc29c6d99e60f9ff0ca', 'qZzsk2UV', 0, '2013-11-28 10:07:34', 0, '3', '2013-11-28 10:07:34', '0000-00-00 00:00:00', 'Mr', 'Mohamed Mohamed', 0, '0000-00-00', 'Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed Mohamed Ahmed', 'Prof. PHD', '529715e6a1eb7.jpg', '', 0, ''),
(19, '52975d8cc4584', 'Julia@instructor.com', '293ec666eb9437937d8568fa4b8ee3c0', 'T4ej1qWP', 0, '2013-12-05 10:29:31', 0, '3', '2013-11-28 15:13:16', '0000-00-00 00:00:00', 'Mrs', 'Julia Andresson', 0, '0000-00-00', 'Caroline Cole received her doctorate in the Center for Writing Studies at the University of Illinois, Urbana.\n\nIn addition to having taught business writing courses since 1989, Cole has taught courses in technical writing and desktop publishing and has led professional writing workshops in both university and industry settings.\n\nAs a faculty member at the University of California, Berkeley, she teaches writing courses for the College Writing Programs and the Walter A. Haas School of Business. In 1999, she designed, proposed, and launched College Writing 151 to help students communicate more appropriately and effectively in non-academic contexts; its follow-up course, College Writing 152: Advanced Professional Communication, launched in Spring 2012.\n\nWorking primarily with students, she also has developed and led professional writing workshops for faculty and staff and serves as a consultant for businesses and individuals', 'PHD', '52975d8cc4584.jpg', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Omnia create table to link between User table and Course table
--


CREATE TABLE User_Courses (
user_id INT NOT NULL,  
course_id INT NOT NULL,  
PRIMARY KEY (user_id,course_id),  
FOREIGN KEY (user_id) REFERENCES User(ID) ON UPDATE CASCADE,  
FOREIGN KEY (course_id) REFERENCES Course(ID) ON UPDATE CASCADE);

INSERT INTO `User_Courses` (`user_id`, `course_id`) VALUES
(11, '14');