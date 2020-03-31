-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2020 at 05:13 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- Database: `admin1`



CREATE TABLE IF NOT EXISTS `register` (
  `fullname` mediumtext NOT NULL,
  `dob` date NOT NULL,
  `gender` mediumtext NOT NULL,
  `education` mediumtext NOT NULL,
  `institution` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `dob`, `gender`, `education`, `institution`) VALUES
('rizwana', '2000.02.23', 'female', 'bsc', 'msn')
('shabana','1999.03.04','female','bsc','npr');




CREATE TABLE IF NOT EXISTS 'user_login'(
   'user_id' mediumtext NOT NULL,
   'user_pass' mediumtext NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
--Dumping data for table 'user_login'
--

INSERT INTO 'user_login' ('user_id','user_pass') VALUES
('admin','123');
