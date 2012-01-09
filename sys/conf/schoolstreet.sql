-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2012 at 01:21 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolstreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE IF NOT EXISTS `contests` (
  `contestid` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `winner` int(11) NOT NULL,
  PRIMARY KEY (`contestid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contests`
--


-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `link` varchar(255) NOT NULL,
  `uploadedby` int(11) NOT NULL,
  `uploaddate` bigint(20) NOT NULL,
  `expiry` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--


-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `examid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` int(11) NOT NULL,
  `examtime` bigint(20) NOT NULL,
  `examname` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(11) NOT NULL,
  `msgid` int(11) NOT NULL,
  `maxmarks` int(11) NOT NULL,
  `smsid` int(11) NOT NULL,
  `publishstatus` int(11) NOT NULL,
  `approvalstatus` int(11) NOT NULL,
  PRIMARY KEY (`examid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `exams`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msgid` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `msgdate` bigint(20) NOT NULL,
  `msgtype` varchar(255) NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `newstime` bigint(20) NOT NULL,
  `newsexpiry` bigint(20) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `noticeid` int(11) NOT NULL AUTO_INCREMENT,
  `noticetime` bigint(20) NOT NULL,
  `noticeexpiry` bigint(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `htmlcontent` text,
  `nonhtmlcontent` text,
  `smsid` int(11) NOT NULL,
  PRIMARY KEY (`noticeid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notices`
--


-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `parentid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `dob` bigint(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualifications` varchar(255) DEFAULT NULL,
  `school` int(11) NOT NULL,
  PRIMARY KEY (`parentid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `parents`
--


-- --------------------------------------------------------

--
-- Table structure for table `registeredschools`
--

CREATE TABLE IF NOT EXISTS `registeredschools` (
  `schoolid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `schooladmin` int(11) NOT NULL,
  PRIMARY KEY (`schoolid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `registeredschools`
--


-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `resultid` int(11) NOT NULL AUTO_INCREMENT,
  `examid` int(11) NOT NULL,
  `stuid` int(11) NOT NULL,
  `marksobtained` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`resultid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `results`
--


-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE IF NOT EXISTS `schooladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `schoolid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `schooladmin`
--


-- --------------------------------------------------------

--
-- Table structure for table `smslog`
--

CREATE TABLE IF NOT EXISTS `smslog` (
  `smsid` int(11) NOT NULL AUTO_INCREMENT,
  `totalno` int(11) NOT NULL,
  `smstime` bigint(20) NOT NULL,
  `sender` int(11) NOT NULL,
  `receivers` int(11) NOT NULL,
  PRIMARY KEY (`smsid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smslog`
--


-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `stuid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rollno` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` bigint(20) DEFAULT NULL,
  `school` int(11) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `address` text,
  `parentid` int(11) NOT NULL,
  `image` blob,
  `fbid` varchar(255) DEFAULT NULL,
  `awards` varchar(255) DEFAULT NULL,
  `keypositions` varchar(255) DEFAULT NULL,
  `updatedate` bigint(20) NOT NULL,
  `approvalstatus` int(11) NOT NULL,
  PRIMARY KEY (`stuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `students`
--


-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `approvalstatus` int(11) NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subjects`
--


-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacherid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` bigint(20) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `address` text,
  `awards` varchar(255) DEFAULT NULL,
  `keypositions` varchar(255) DEFAULT NULL,
  `designation` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `image` blob,
  `fbid` varchar(255) DEFAULT NULL,
  `approvalstatus` int(11) NOT NULL,
  `ctclass` int(11) NOT NULL,
  `ctsection` varchar(11) NOT NULL,
  `pfclassteacher` int(11) NOT NULL,
  PRIMARY KEY (`teacherid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `teachers`
--


-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `tutid` int(11) NOT NULL AUTO_INCREMENT,
  `tuttime` bigint(20) NOT NULL,
  `tutexpiry` bigint(20) NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `webpublishing` int(11) NOT NULL,
  `content` text,
  PRIMARY KEY (`tutid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tutorials`
--

