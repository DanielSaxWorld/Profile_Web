-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2022 at 08:35 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsax`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `audio` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `link`, `date`, `audio`) VALUES
(2, '<iframe src=\"https://audiomack.com/embed/tsaxmaestro/song/santa-cruise-2021?background=1\" scrolling=\"no\" width=\"100%\" height=\"252\" scrollbars=\"no\" frameborder=\"0\"></iframe>', '2022-04-27 22:37:00', 'Aimasiko.mp3'),
(3, '<iframe src=\"https://audiomack.com/embed/tsaxmaestro/song/mosorire-saxophone-cover?background=1\" scrolling=\"no\" width=\"100%\" height=\"252\" scrollbars=\"no\" frameborder=\"0\"></iframe>', '2022-04-27 22:43:00', 'Adekunle_Gold_-_Mama.mp3'),
(4, '<iframe src=\"https://audiomack.com/embed/tsaxmaestro/song/olufunmi-sax-cover?background=1\" scrolling=\"no\" width=\"100%\" height=\"252\" scrollbars=\"no\" frameborder=\"0\"></iframe>', '2022-04-27 22:45:00', 'AUD-20180817-WA0002.mp3'),
(5, '<iframe src=\"https://audiomack.com/embed/tsaxmaestro/song/in-christ-alone-cover?background=1\" scrolling=\"no\" width=\"100%\" height=\"252\" scrollbars=\"no\" frameborder=\"0\"></iframe>', '2022-04-27 22:47:00', 'Davido-Ft.-Perruzi-Yonda-FreshVDM-â€“-Aje.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `sub_title` varchar(500) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `details` varchar(10000) DEFAULT NULL,
  `event_type` varchar(100) DEFAULT NULL,
  `regular` varchar(100) DEFAULT NULL,
  `vip` varchar(100) DEFAULT NULL,
  `vvip` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `sub_title`, `address`, `state`, `country`, `date`, `details`, `event_type`, `regular`, `vip`, `vvip`, `image`) VALUES
(1, 'love', 'VAL', 'Block 24, Oba-ile Estate', 'Ondo', 'Nigeria', '2022-11-02 14:27:00', 'COME AND HAVE FUN', 'paid', '200', '300', '400', 'TsaxMaestro Agbada Head.JPG'),
(2, 'jazz', 'musicc', 'Block 55, Oke Odu', 'Lagos', 'Ghana', '2022-05-07 18:30:00', 'come and dance', 'free', NULL, NULL, NULL, 'tst.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `date`, `fullname`, `phone`, `email`) VALUES
(2, '2022-05-11 23:00:00', 'Ayodeji Olatunde', '07030214933', 'tsaxmaestro@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `owner_id`
--

DROP TABLE IF EXISTS `owner_id`;
CREATE TABLE IF NOT EXISTS `owner_id` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `passport` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner_id`
--

INSERT INTO `owner_id` (`id`, `fullname`, `email`, `password`, `passport`) VALUES
(1, 'Ajayi Daniel', 'ajayidaniel94@gmail.com', '*00C1AA7831FA5C78F3A2A99F03130EC94B04B1C2', 'IMG-20210825-WA0011.jpg'),
(2, 'Ayodeji Olatunde', 'tsaxmaestro@gmail.com', '*05A4391523A59F938A0156DDB5969B1CC4464BE2', 'Ayodeji Olatunde F.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `uin` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ticket_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `uin`, `name`, `phone`, `email`, `ticket_type`) VALUES
(1, 'TSAX/C5619', 'Ajayi Daniel', '08130045043', 'ajayidaniel94@gmail.com', '200'),
(2, 'TSAX/C38216', '', '', '', '200');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `sub_title` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `youtubeid` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `sub_title`, `link`, `youtubeid`, `date`, `image`) VALUES
(1, 'food', 'eat', '', 'dkdmkdkdldld', '2022-05-07 18:21:00', 'tst.JPG'),
(2, 'FISH', 'eat fish', '', 'dlkjrhugh', '2022-05-07 18:28:00', 'tst.JPG'),
(3, 'BEANS', 'EAT BEANS', '', 'slkffnflk', '2022-05-07 18:28:00', 'tst.JPG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
