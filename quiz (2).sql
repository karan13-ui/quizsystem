-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 07:20 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--
CREATE DATABASE IF NOT EXISTS `quiz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'karan', 'rustagi', 'rustagi.karan191@gmail.com', 'karan@12345'),
(2, 'pooja', 'rustagi', 'rustagi.pooja@gmail.com', 'pooja@123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'html'),
(3, 'python'),
(4, 'java'),
(5, 'javascript'),
(6, 'machine learning');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(100) NOT NULL,
  `opt1` varchar(80) NOT NULL,
  `opt2` varchar(80) NOT NULL,
  `opt3` varchar(80) NOT NULL,
  `opt4` varchar(80) NOT NULL,
  `ans` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`, `cat_id`) VALUES
(1, 'What does PHP stand for?', 'private homepage', 'personal hypertext processor', 'PHP: hypertext prerocessor', 'none of these', 2, 1),
(2, 'How do you write "Hello World" in PHP ?', 'echo "Hello World"', 'print "Hello World"', 'document.write("Hello World")', 'none of these', 0, 1),
(3, 'The PHP syntax is most similar to:', 'perl and c', 'vb script', 'javascript', 'none of these', 2, 1),
(4, 'How do you get information from a form that is submitted using the "get" method?', 'request.form', '$_get[]', 'request.getString', 'none of these', 1, 1),
(5, 'What is the correct way to end a PHP statement?', 'newline', '.', ';', '&lt;/php&gt;', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'karan', 'rustagi', 'rustagi.karan191@gmail.com', 'karan@12345'),
(3, 'mithilesh', 'singh', 'singh.mithilesh1@gmail.com', 'mithilesh1'),
(4, 'rajat', 'kumar', 'kumar.rajat@gmail.com', 'rebel123'),
(7, 'pooja', 'rustagi', 'rustagi.pooja@gmail.com', 'pooja@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
