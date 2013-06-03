-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2013 at 01:11 PM
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
-- Table structure for table `recruit_applicant`
--

CREATE TABLE IF NOT EXISTS `recruit_applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`),
  KEY `salon_id` (`salon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `recruit_applicant`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `recruit_applicant`
--
ALTER TABLE `recruit_applicant`
  ADD CONSTRAINT `recruit_applicant_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recruit_applicant_ibfk_2` FOREIGN KEY (`salon_id`) REFERENCES `salon` (`id`) ON DELETE CASCADE;
