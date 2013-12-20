-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Jun 04, 2013 at 09:26 PM
=======
-- Generation Time: Jun 05, 2013 at 07:08 PM
>>>>>>> staff-person-link
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

<<<<<<< HEAD
INSERT INTO `client` (`id`, `first_name`, `second_name`, `mobile`, `email`) VALUES
(1, 'Test Client 1', 'Test client1', 2147483647, 'araquach@yahoo.co.uk'),
(2, 'Test Client 2', 'Test Client 2', 2147483647, 'adamcarter@jakatasalon.co.uk'),
(3, 'Test Client 3', 'Test Client 3', 2147483647, 'adam@paulkemphairdressing.com');
=======
>>>>>>> staff-person-link

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

<<<<<<< HEAD
INSERT INTO `feedback` (`id`, `salon_id`, `stylist_id`, `date`, `client_first`, `client_second`, `mobile`, `intro`, `consultation`, `styling_area`, `stylist_appearance`, `prod_advice`, `styling_advice`, `internal_marketing`, `value_for_money`, `whole_experience`, `end_result`, `extra`, `allow`) VALUES
(9, 1, 2, '2013-04-16 19:05:31', 'Adam', 'Carter', '239587', 2, 1, 3, 2, 3, 1, 1, 2, 1, 6, 'WIckeeeeeeeeeed', 0),
(10, 1, 1, '2013-04-16 22:52:58', 'Izzy', 'Lamb', '0583202', 3, 3, 3, 3, 3, 3, 2, 3, 3, 6, 'Adam was the most awesome stylist I ever had!!', 0),
(11, 1, 5, '2013-05-27 17:44:13', 'Jerry', 'Slobob', '9879', -2, -2, -2, -2, -2, -2, -2, -2, -2, -6, 'hgkj', 0),
(12, 1, 2, '2013-05-27 18:04:02', 'dg', 'dfgg', '453', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'fds', 0),
(13, 2, 6, '2013-05-27 18:06:41', 'dkh', 'dsfd', '3443', -2, 3, 1, 2, -1, 3, 1, 1, 1, 1, 'rrsff', 1);
=======
>>>>>>> staff-person-link

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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
>>>>>>> staff-person-link

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`id`, `staff_id`, `hours_requested`, `prebooked`, `request_date_from`, `request_date_to`, `approved`, `requested_on_date`, `saturday`) VALUES
<<<<<<< HEAD
(1, 1, '16', 0, '2013-05-09 00:00:00', '2013-05-10 00:00:00', 2, '2013-05-08 22:34:52', 0),
(2, 1, '40', 0, '2013-05-11 00:00:00', '2013-05-18 00:00:00', 2, '2013-05-08 22:35:25', 2),
(3, 5, '8', 0, '2013-05-15 00:00:00', '2013-05-16 00:00:00', 2, '2013-05-08 22:38:59', 0),
(4, 6, '24', 0, '2013-05-09 00:00:00', '2013-05-11 00:00:00', 2, '2013-05-08 22:51:00', 1),
(5, 7, '16', 1, '2013-05-24 00:00:00', '2013-05-25 00:00:00', 2, '2013-05-08 22:53:15', 1);
=======
(6, 16, '32', 0, '2013-06-11 00:00:00', '2013-06-14 00:00:00', 0, '2013-06-05 19:29:43', 0);
>>>>>>> staff-person-link

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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
>>>>>>> staff-person-link

--
-- Dumping data for table `lieu`
--

INSERT INTO `lieu` (`id`, `staff_id`, `lieu_hours`, `description`, `date_regarding`, `requested_on`, `approved`) VALUES
<<<<<<< HEAD
(1, 4, '2', 'lm,', '2013-05-07 00:00:00', '2013-05-08 22:55:03', 2),
(2, 1, '3', 'm,n,', '2013-05-06 00:00:00', '2013-05-08 22:56:00', 2),
(3, 1, '2', 'kjhfsa', '2013-05-02 00:00:00', '2013-05-08 22:57:34', 2),
(4, 3, '2', 'kh,mn', '2013-05-02 00:00:00', '2013-05-08 22:58:44', 2);
=======
(5, 16, '3', 'Going Home', '2013-06-04 00:00:00', '2013-06-05 19:52:44', 2);
>>>>>>> staff-person-link

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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
>>>>>>> staff-person-link

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `first_name`, `second_name`, `address1`, `address2`, `address3`, `postcode`, `email`, `phone`, `mobile`) VALUES
<<<<<<< HEAD
(1, 'Adam', 'Cater', '', '', '', '', '', '', ''),
(2, 'Adam', 'Cater', '', '', '', '', '', '', ''),
(3, 'ad', 'sd', '', '', '', '', '', '', ''),
(4, 'ad', 'sd', '', '', '', '', '', '', ''),
(5, 'ad', 'ada', '', '', '', '', '', '', ''),
(6, 'ADam', 'Carter', '', '', '', '', '', '', ''),
(7, 'idfds', 'sfssdf', '', '', '', '', '', '', ''),
(8, 'gdsdg', 'gsg', '', '', '', '', '', '', '');
=======
(9, 'Adam', 'Carter', '27 Eastford Road', 'Walton', 'Warrington', 'WA1 2RF', 'araquach@yahoo.co.uk', '01925 242960', '07921806884'),
(10, 'Jimmy', 'Sharpe', '4235 rjhrgiw', 'fsfw', 'egrqge', 'eeggergre', 'egrerg@sfdkjhfse.com', '3454353', '252434242'),
(11, 'Isobelle', 'Lamb', '24 Blandford Road', 'wekjhfw', 'wgrgew', 'WA1 2RF', 'sfkdjhsd@skdfjh.com', '0235802', '3458534987');
>>>>>>> staff-person-link

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
<<<<<<< HEAD
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

INSERT INTO `role_applicant` (`id`, `salon_id`, `role_id`, `date`, `first_name`, `second_name`, `address1`, `address2`, `address3`, `postcode`, `email`, `phone`, `mobile`, `current_emp`, `current_emp_des`, `qual_school`, `qual_non_hair`, `adex1`, `adex2`, `adex3`, `adex4`, `adex5`, `adex6`, `experience`, `current_position`, `client_base`, `qual_hair`, `cutting_skills`, `colour_knowledge`, `colour_skills`, `men`, `extensions_weave`, `extensions_other`, `chem_straighten`, `braz_blow`, `hair_up`, `awards`, `about_you`, `why_hairdressing`, `why_us`) VALUES
(1, 1, 4, '2013-04-16 17:00:35', 'Adam', 'Carter', 'strete', '', 'etrrt', 'bcvb', 'vxgf@fskjfh.com', '', '4323', 2, '', 2, '', 0, 0, 0, 0, 0, 0, 8, 3, 0, 0, 4, 2, 3, 5, 2, 3, 5, 2, 4, '', 'werwe', 'wrwer', 'werwe'),
(2, 1, 1, '2013-04-16 17:31:29', 'Jake', 'Gibson', '12987 sdkjhf', '', 'wefwje', 'wa4', 'sfkjh@kjhef.com', '', '92138741', 2, '', 2, '', 0, 0, 0, 0, 0, 0, 3, 4, 2, 0, 2, 3, 4, 4, 4, 1, 4, 3, 2, '', 'lkjfsd', 'fskjfal', 'kjfjlas');

-- --------------------------------------------------------

--
=======
>>>>>>> staff-person-link
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

INSERT INTO `salon` (`id`, `salon`) VALUES
(1, 'Jakata'),
(2, 'Paul Kemp Hairdressing');

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
<<<<<<< HEAD
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
>>>>>>> staff-person-link

--
-- Dumping data for table `sick`
--

<<<<<<< HEAD
=======
INSERT INTO `sick` (`id`, `staff_id`, `sick_hours`, `description`, `date_sick_from`, `date_deducted`) VALUES
(1, 15, '8', 'Pooing badly', '2013-06-05 00:00:00', '0000-00-00 00:00:00');
>>>>>>> staff-person-link

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
<<<<<<< HEAD
  `iris` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `staff_role_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` datetime NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
=======
  `person_id` int(11) NOT NULL,
  `iris` int(11) NOT NULL,
  `salon_id` int(11) NOT NULL,
  `staff_role_id` int(11) NOT NULL,
  `dob` datetime NOT NULL,
>>>>>>> staff-person-link
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
<<<<<<< HEAD
  KEY `staff_role_id` (`staff_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
=======
  KEY `staff_role_id` (`staff_role_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;
>>>>>>> staff-person-link

--
-- Dumping data for table `staff`
--

<<<<<<< HEAD
INSERT INTO `staff` (`id`, `iris`, `salon_id`, `staff_role_id`, `first_name`, `last_name`, `dob`, `mobile`, `email`, `username`, `password`, `working_hours_week`, `working_hours_month`, `holiday_entitlement`, `active`, `role`) VALUES
(1, 101, 1, 5, 'Adam', 'Carter', '2012-02-16 00:00:00', '07921806884', 'aarter@jaklon.co.uk', 'adamcarter', 'blonde123', '40', 0, 26, 1, 'admin'),
(2, 119, 1, 5, 'Jimmy', 'Sharpe', '0000-00-00 00:00:00', '07363632732', 'jimmy@jakatasalon.co.uk', 'jimmy', 'jimmy123', '40', 0, 26, 1, 'admin'),
(3, 106, 2, 4, 'Isobelle', 'Lamb', '1987-11-21 00:00:00', '07921806884', 'izzy@lamb.com', 'izzylamb', 'izzy123', '40', 0, 28, 1, 'staff'),
(4, 147, 1, 5, 'Michelle', 'French', '2012-12-18 00:00:00', '08358052829', 'shelly@kjfshfa.com', 'shelly', 'shelly123', '16', 0, 30, 1, 'staff'),
(5, 156, 1, 4, 'Katie', 'Littlemore', '2012-12-04 00:00:00', '042983492', 'katie@skjhfs.com', 'katiel', 'katiel123', '16', 0, 10, 1, 'staff'),
(6, 102, 1, 4, 'Laura', 'Crumplin', '2012-12-19 00:00:00', '09320348', 'laura@shf.com', 'laura', 'laura123', '16', 0, 30, 1, 'staff'),
(7, 158, 1, 5, 'Maisie', 'Thompson', '2012-12-26 00:00:00', '329875389', 'maisie@dfsjhfe.com', 'maisie', 'maisie123', '40', 0, 28, 1, 'staff'),
(8, 106, 1, 5, 'Michelle', 'Ash', '2012-12-27 00:00:00', '02437093', 'michelle@ksdjhfs.com', 'michelle', 'michell123', '40', 0, 28, 1, 'staff'),
(9, 151, 1, 3, 'Mikala', 'Sutcliffe', '2012-12-04 00:00:00', '20983750937', 'mikala@dskjhs.com', 'mikala', 'mikala123', '40', 0, 28, 1, 'staff');
=======
INSERT INTO `staff` (`id`, `person_id`, `iris`, `salon_id`, `staff_role_id`, `dob`, `username`, `password`, `working_hours_week`, `working_hours_month`, `holiday_entitlement`, `active`, `role`) VALUES
(15, 10, 3, 2, 2, '2013-06-12 19:16:03', 'jimmy', 'jimmy123', '40', 160, 28, 1, 'admin'),
(16, 9, 3, 1, 2, '2013-06-28 19:28:04', 'adamcarter', 'blonde123', '40', 160, 28, 1, 'admin');
>>>>>>> staff-person-link

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

INSERT INTO `staff_role` (`id`, `job_description`, `target`, `commision`) VALUES
<<<<<<< HEAD
(1, 'Junior', 600, 0),
(2, 'Junior Stylist', 1800, 5),
(3, 'Graduate Stylist', 2600, 25),
(4, 'Stylist', 3200, 25),
(5, 'Senior Stylist', 4000, 25);
=======
(1, 'Junior', 100, 5),
(2, 'Stylist', 500, 10);
>>>>>>> staff-person-link

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
<<<<<<< HEAD
=======
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON UPDATE CASCADE,
>>>>>>> staff-person-link
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
