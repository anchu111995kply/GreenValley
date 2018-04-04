-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 07:40 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greenvalley`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE IF NOT EXISTS `crop` (
  `cropid` int(10) NOT NULL AUTO_INCREMENT,
  `cropname` varchar(30) NOT NULL,
  PRIMARY KEY (`cropid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`cropid`, `cropname`) VALUES
(1, 'Rubber'),
(2, 'Rice'),
(3, 'Brinjal'),
(4, 'Banana'),
(5, 'Pappaya'),
(6, 'Chilies'),
(7, 'Coconut'),
(8, 'Cardomom'),
(9, 'Pumpkin');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `Did` int(11) NOT NULL AUTO_INCREMENT,
  `Distname` varchar(50) NOT NULL,
  `Sid` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`Did`, `Distname`, `Sid`, `status`) VALUES
(1, 'Idukki', 1, 0),
(2, 'Chennai', 2, 0),
(3, 'wayanad', 1, 0),
(4, 'Kannur', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `landregister`
--

CREATE TABLE IF NOT EXISTS `landregister` (
  `Landid` int(11) NOT NULL AUTO_INCREMENT,
  `State` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Village` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Wresource` varchar(50) NOT NULL,
  `Scrop` varchar(50) NOT NULL,
  `Apyear` varchar(30) NOT NULL,
  `Noyear` varchar(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  PRIMARY KEY (`Landid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `landregister`
--

INSERT INTO `landregister` (`Landid`, `State`, `District`, `Village`, `Area`, `Wresource`, `Scrop`, `Apyear`, `Noyear`, `Username`) VALUES
(1, 'Kerala', 'Idukki', 'Chakkupallam', '1', 'Bore well', 'Cardomom', '200000', '6', 'swasabu@gmail.com'),
(2, 'Kerala', 'Idukki', 'Chakkupallam', '4', 'River', 'Rubber', '400000', '15', 'reshma@gmail.com'),
(3, 'Kerala', 'Idukki', 'Chakkupallam', '2', 'dam', 'Cardomom', '17000', '5', 'swasabu@gmail.com'),
(4, 'Kerala', 'Trivandrum', 'Trivandrum', '-67', 'ttr', 'yy', '9000', '8', 'reshma@gmail.com'),
(5, 'Kerala', 'Idukki', 'Chakkupallam', '3', 'Bore well', '', '20000', '5', 'reshma@gmail.com'),
(6, 'Kerala', 'Idukki', 'Chakkupallam', '3', 'Bore well', '', '20000', '5', 'reshma@gmail.com'),
(7, 'Kerala', 'Idukki', 'Chakkupallam', '4', 'Bore well', 'Rubber', '200000', '15', 'swasabu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Loginid` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL,
  `Regid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL,
  PRIMARY KEY (`Loginid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Loginid`, `Username`, `Password`, `Status`, `Regid`, `roleid`) VALUES
(3, 'anchusabu82@gmail.com', 'anchu', 0, 0, 1),
(4, 'neenujoseph@gmail.com', 'neenu', 0, 0, 1),
(5, 'neenujoseph@gmail.com', 'neenu', 0, 0, 1),
(6, 'neenujoseph@gmail.com', 'neenu', 0, 0, 1),
(7, 'neenujoseph@gmail.com', 'neenu', 0, 0, 1),
(8, 'aneene@gmail.com', 'aneena', 0, 0, 1),
(9, 'haritha@gmail.com', 'qwe', 0, 0, 1),
(10, 'aswathy@gmail.com', 'aswathy', 0, 14, 1),
(11, 'aswathy1@gmail.com', 'aswathy1', 0, 15, 1),
(12, 'neethu@gmail.com', 'neethu', 0, 16, 1),
(13, 'swasabu@gmail.com', 'swathy', 0, 17, 1),
(14, 'reshma@gmail.com', 'reshma123', 0, 18, 1),
(15, 'Admin', 'admin', 0, 0, 2),
(16, 'amal@gmail.com', 'amal', 0, 19, 1),
(17, 'amal@gmail.com', 'amal', 0, 20, 1),
(18, 'anu@gmail.com', '123', 0, 21, 1),
(19, 'neethu@gmail.com', '123', 0, 22, 1),
(20, 'qwe@gmail.com', 'qwe', 0, 23, 1),
(21, 'qwe@gmail.com', 'qwe', 0, 24, 1),
(22, 'qwe@gmail.com', 'qwe', 0, 25, 1),
(23, 'anu@gmail.com', '1123', 0, 26, 1),
(24, 'qwe@gmail.com', 'qwe', 0, 27, 1),
(25, 'anchusabu82@gmail.com', '1995', 0, 22, 1),
(26, 'anchusabu82@gmail.com', '1995', 0, 23, 1),
(27, 'cg@gmail.com', '777', 0, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notid` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`notid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `notification`, `date`) VALUES
(1, 'New Seeds are available ', '2017-08-30'),
(2, 'New Fertiliser is availablein market', '2017-09-23'),
(3, 'wegrjhdsfkl', '2017-09-26'),
(4, 'nbvhjfdvhkj', '2017-09-27'),
(5, 'yusgdysu', '2017-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Regid` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Housename` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `State` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Village` varchar(50) NOT NULL,
  `Pin` int(11) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  PRIMARY KEY (`Regid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Regid`, `Fname`, `Lname`, `Housename`, `Place`, `State`, `District`, `Village`, `Pin`, `Phno`, `Photo`, `Username`) VALUES
(17, 'Swathy', 'Sabu', 'Chethimattom', 'Chakkupallam', 'Kerala', 'Idukki', 'Chakkupallam', 685509, '7034865147', '3.jpg', 'swasabu@gmail.com'),
(18, 'Reshma', 'PR', 'Kattumattom', 'Kattappana', 'Kerala', 'Idukki', 'Trivandrum', 685512, '9961313402', 'farmer-with-laptop.jpg', 'reshma@gmail.com'),
(20, 'Amal', 'Sabu', 'Chethimattom(h)', 'Chakkupallam', 'Kerala', 'Idukki', 'Chakkupallam', 685509, '242745', 'amal.png', 'amal@gmail.com'),
(21, 'Anu', 'ewtw', 'ewyyyyg', 'fgfhg', 'Kerala', 'Kozhikode', 'Trivandrum', 68, '5657', '3.png', 'anu@gmail.com'),
(22, 'Anchu', 'Sabu', 'Chethimattom', 'Chakkupallam', '1', '1', '', 685509, '7034865147', 'IMG_20161030_145731.jpg', 'anchusabu82@gmail.com'),
(24, 'ann', 'u', 'hg', 'guuhg', '1', '1', '1', 75888787, '4532134788', 'download2.jpg', 'cg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `rolename`, `status`) VALUES
(1, 'admin', 1),
(2, 'user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `Sid` int(11) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Sid`, `Sname`, `status`) VALUES
(1, 'Kerala', 0),
(2, 'TamilNadu', 0),
(3, 'Goa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE IF NOT EXISTS `village` (
  `Vid` int(11) NOT NULL AUTO_INCREMENT,
  `Vname` varchar(50) NOT NULL,
  `Did` int(11) NOT NULL,
  PRIMARY KEY (`Vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`Vid`, `Vname`, `Did`) VALUES
(1, 'Anakkara', 1),
(2, 'Chakkupallam', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
