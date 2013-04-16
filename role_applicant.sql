-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 11:05 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `salon_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `role_applicant`
--

CREATE TABLE IF NOT EXISTS `role_applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `second_name` varchar(256) NOT NULL,
  `address1` varchar(256) NOT NULL,
  `address2` varchar(256) NOT NULL,
  `address3` varchar(256) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `current_emp` int(11) NOT NULL,
  `current_emp_des` varchar(50) NOT NULL,
  `qual_school` int(11) NOT NULL,
  `qual_non_hair` varchar(120) NOT NULL,
  `adex1` int(11) NOT NULL,
  `adex2` int(11) NOT NULL,
  `adex3` int(11) NOT NULL,
  `adex4` int(11) NOT NULL,
  `adex5` int(11) NOT NULL,
  `adex6` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `current_position` int(11) NOT NULL,
  `client_base` int(11) NOT NULL,
  `qual_hair` int(11) NOT NULL,
  `cutting_skills` int(11) NOT NULL,
  `colour_knowledge` int(11) NOT NULL,
  `colour_skills` int(11) NOT NULL,
  `men` int(11) NOT NULL,
  `extensions_weave` int(11) NOT NULL,
  `extensions_other` int(11) NOT NULL,
  `chem_straighten` int(11) NOT NULL,
  `braz_blow` int(11) NOT NULL,
  `hair_up` int(11) NOT NULL,
  `awards` text NOT NULL,
  `about_you` text NOT NULL,
  `why_hairdressing` text NOT NULL,
  `why_us` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
