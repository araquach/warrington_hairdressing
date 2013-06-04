-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2013 at 09:45 PM
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
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `second_name` varchar(256) NOT NULL,
  `mobile` int(26) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `client`
--


-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`),
  KEY `client_id` (`client_id`),
  KEY `staff_id_2` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `email`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salon_id` int(11) NOT NULL,
  `stylist_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `client_first` varchar(50) NOT NULL,
  `client_second` varchar(50) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `intro` int(11) NOT NULL COMMENT 'intro How was the introduction to your stylist did they make you feel welcome and comfortable ( 1-5)rating  1 being poor -2pts  5 being excellent 2pts  ',
  `consultation` int(11) NOT NULL COMMENT 'Consultation rate the consultation on these factors.. did the stylist listen to you?  were they understanding?  did they offer you professional advice and differering ideas?  did you feel comfortable with them?  did you both come to a decision on what to ',
  `styling_area` int(11) NOT NULL COMMENT 'Station How satisfied were you with the cleanlyness of the styling station you were sat on. use these factors to make your judgement.  clean and clear from other peoples hair cuttings  clean shelving unit  clean mirrors  clear of clutter and tools  clean ',
  `stylist_appearance` int(11) NOT NULL COMMENT 'rate your stylists appearance (1-5)  1 being poor -2pts  5 being excellent 2pts ',
  `prod_advice` int(11) NOT NULL COMMENT 'was product advice given to you by your stylist 1 never -2pts 2 very little-1pt 3 being some 0pt 4 being good advice 1pt 5 being lots of really good advice 2pts',
  `styling_advice` int(11) NOT NULL COMMENT 'was styling advice given to you by your stylist 1 never -2pts 2 very little -1pt 3 being some 0pts 4 being good advice 1pt 5 being lots of really good advice 2pts',
  `internal_marketing` int(11) NOT NULL COMMENT 'was you informed about the 3 keys schemes we have inplace to save you money on your visits to the salon we have a Recommend a freind scheme 10percent prebooking discount and a rewards points card if you havnt been told about these please mention this in t',
  `value_for_money` int(11) NOT NULL COMMENT 'how do you rate the pricing of your stylists pricing and value for money 1to5 1 being poor -2pts 3 being average 0pts 5 being excellent 2pts',
  `whole_experience` int(11) NOT NULL COMMENT 'how do you rate the experience as a whole on your last visit 1to5 1poor -2pts 3 average 0pts 5 being excellent 2pts',
  `end_result` int(11) NOT NULL COMMENT 'how happy were you with the end result of your hair 1to10 1 being poor -5pts 5 average 0pts 10 extremely satisfied 5pts',
  `extra` varchar(300) NOT NULL COMMENT 'any extra comments you would like to make (text format for admin use only)',
  `allow` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `salon_id` (`salon_id`),
  KEY `stylist_id` (`stylist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `hours_requested` decimal(11,0) NOT NULL,
  `prebooked` int(11) NOT NULL,
  `request_date_from` datetime NOT NULL,
  `request_date_to` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `requested_on_date` datetime NOT NULL,
  `saturday` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `holiday`
--


-- --------------------------------------------------------

--
-- Table structure for table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `lieu_hours` decimal(11,0) NOT NULL,
  `description` varchar(256) NOT NULL,
  `date_regarding` datetime NOT NULL,
  `requested_on` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lieu`
--


-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(256) NOT NULL,
  `second_name` varchar(256) NOT NULL,
  `address1` varchar(256) NOT NULL,
  `address2` varchar(256) DEFAULT NULL,
  `address3` varchar(256) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `second_name`, `address1`, `address2`, `address3`, `postcode`, `email`, `phone`, `mobile`) VALUES
(9, 'Adam', 'Carter', '27 Eastford Road', 'Walton', 'Warrington', 'WA1 2RF', 'araquach@yahoo.co.uk', '01925 242960', '07921806884');

-- --------------------------------------------------------

--
-- Table structure for table `recruit_stylist`
--

CREATE TABLE IF NOT EXISTS `recruit_stylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
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
  PRIMARY KEY (`id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `recruit_stylist`
--


-- --------------------------------------------------------

--
-- Table structure for table `role_applicant`
--

CREATE TABLE IF NOT EXISTS `role_applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salon_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `role_applicant`
--


-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salon` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salon`
--


-- --------------------------------------------------------

--
-- Table structure for table `sick`
--

CREATE TABLE IF NOT EXISTS `sick` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `sick_hours` decimal(11,0) NOT NULL,
  `description` varchar(256) NOT NULL,
  `date_sick_from` datetime NOT NULL,
  `date_deducted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sick`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `iris` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `staff_role_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` datetime NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(44) NOT NULL,
  `working_hours_week` enum('16','24','32','40') NOT NULL,
  `working_hours_month` int(11) NOT NULL,
  `holiday_entitlement` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `role` enum('guest','staff','manager','admin') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`iris`,`salon_id`,`staff_role_id`),
  KEY `salon_id` (`salon_id`),
  KEY `staff_role_id` (`staff_role_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `staff`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff_role`
--

CREATE TABLE IF NOT EXISTS `staff_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_description` varchar(80) NOT NULL,
  `target` int(11) NOT NULL,
  `commision` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff_role`
--


-- --------------------------------------------------------

--
-- Table structure for table `turnover`
--

CREATE TABLE IF NOT EXISTS `turnover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `service_rev` int(11) NOT NULL,
  `product_rev` int(11) NOT NULL,
  `product_voucher` int(22) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `turnover`
--


-- --------------------------------------------------------

--
-- Table structure for table `wage`
--

CREATE TABLE IF NOT EXISTS `wage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `hourly_wage` int(11) NOT NULL,
  `additional_wage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wage`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `email_ibfk_4` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`salon_id`) REFERENCES `salon` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`stylist_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `holiday`
--
ALTER TABLE `holiday`
  ADD CONSTRAINT `holiday_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `lieu_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `recruit_stylist`
--
ALTER TABLE `recruit_stylist`
  ADD CONSTRAINT `recruit_stylist_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sick`
--
ALTER TABLE `sick`
  ADD CONSTRAINT `sick_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`salon_id`) REFERENCES `salon` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`staff_role_id`) REFERENCES `staff_role` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `turnover`
--
ALTER TABLE `turnover`
  ADD CONSTRAINT `turnover_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `wage`
--
ALTER TABLE `wage`
  ADD CONSTRAINT `wage_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`) ON UPDATE CASCADE;
