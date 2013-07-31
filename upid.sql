-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2013 at 02:50 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upid`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `alertId` int(11) NOT NULL AUTO_INCREMENT,
  `alertType` int(11) NOT NULL,
  `alertDateTime` datetime NOT NULL,
  `alertContent` text NOT NULL,
  `alertLocation` int(11) NOT NULL,
  PRIMARY KEY (`alertId`),
  KEY `alertType` (`alertType`,`alertLocation`),
  KEY `alertLocation` (`alertLocation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `constituencies`
--

CREATE TABLE IF NOT EXISTS `constituencies` (
  `constituency_id` int(11) NOT NULL AUTO_INCREMENT,
  `constituency_name` varchar(1000) NOT NULL,
  `constituency_population` int(11) NOT NULL,
  PRIMARY KEY (`constituency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `constituencies`
--

INSERT INTO `constituencies` (`constituency_id`, `constituency_name`, `constituency_population`) VALUES
(1, 'hurlingham', 0),
(2, 'westlands', 0),
(3, 'Madaraka', 80000),
(4, 'Langata', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` int(11) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(1000) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `county_name`) VALUES
(1, 'kiambu'),
(2, 'nairobi'),
(3, 'Kibra'),
(4, 'Karen');

-- --------------------------------------------------------

--
-- Table structure for table `filed_reports`
--

CREATE TABLE IF NOT EXISTS `filed_reports` (
  `reportID` int(11) NOT NULL,
  `reportTitle` varchar(255) NOT NULL,
  `reportUrl` varchar(255) NOT NULL,
  `dateModified` date NOT NULL,
  PRIMARY KEY (`reportID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `income_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_average` int(11) NOT NULL,
  PRIMARY KEY (`income_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `life_expectancy`
--

CREATE TABLE IF NOT EXISTS `life_expectancy` (
  `life_id` int(11) NOT NULL AUTO_INCREMENT,
  `life_expectancy` varchar(250) NOT NULL,
  PRIMARY KEY (`life_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resourceId` int(11) NOT NULL AUTO_INCREMENT,
  `resourceName` varchar(255) NOT NULL,
  PRIMARY KEY (`resourceId`),
  UNIQUE KEY `resourceName` (`resourceName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resourceId`, `resourceName`) VALUES
(4, 'Correction Facilities'),
(2, 'Emergency Medical Services'),
(1, 'Fire Stations'),
(3, 'Police Stations'),
(5, 'Service Industries');

-- --------------------------------------------------------

--
-- Table structure for table `resource_map`
--

CREATE TABLE IF NOT EXISTS `resource_map` (
  `resourceMapId` int(11) NOT NULL AUTO_INCREMENT,
  `resourceId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  `resourceCount` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  PRIMARY KEY (`resourceMapId`),
  KEY `resourceId` (`resourceId`,`locationId`),
  KEY `locationId` (`locationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`) VALUES
(1, 'strathmore high school'),
(2, 'jahmu high school');

-- --------------------------------------------------------

--
-- Table structure for table `school_enrolments`
--

CREATE TABLE IF NOT EXISTS `school_enrolments` (
  `se_id` int(11) NOT NULL AUTO_INCREMENT,
  `se_enrolments` varchar(250) NOT NULL,
  PRIMARY KEY (`se_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_enrolments`
--

INSERT INTO `school_enrolments` (`se_id`, `se_enrolments`) VALUES
(1, '20'),
(2, '50');

-- --------------------------------------------------------

--
-- Table structure for table `security_incidencies`
--

CREATE TABLE IF NOT EXISTS `security_incidencies` (
  `security_incident_id` int(11) NOT NULL AUTO_INCREMENT,
  `security_dor` date NOT NULL,
  `security_reporter_contact` varchar(250) NOT NULL,
  `security_incident_description` text NOT NULL,
  PRIMARY KEY (`security_incident_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `security_incidencies`
--

INSERT INTO `security_incidencies` (`security_incident_id`, `security_dor`, `security_reporter_contact`, `security_incident_description`) VALUES
(1, '2013-06-06', 'Gabriel Kamau', 'Mugged by 5 Assailants'),
(2, '2013-07-02', 'Rufus Mbugua', 'Robbed of Phone and Valuables'),
(3, '2013-06-20', 'Adams Opiyo', 'Kidnapped and Held for Ransom'),
(4, '2013-07-12', 'Kelvin Mwangi', 'Murdered by Stubbing'),
(5, '2013-04-13', 'Kevin Marete', 'Missing Person'),
(6, '2013-05-07', 'Anne Njeri', 'Road Accident victim'),
(7, '2013-07-13', 'Rufus Ndungu', 'Kinyongwa na Kamba'),
(8, '2013-07-12', 'Alice kamau', 'Kunifiwa			\r\n		'),
(9, '2013-07-10', 'Charlie Black', 'Wacha Tu			\r\n		'),
(10, '2013-07-10', 'Wilson Kichwa', 'Deaf			\r\n		'),
(11, '2013-07-10', 'Wilson Kichwa', 'Deaf			\r\n		'),
(12, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(13, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(14, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(15, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(16, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(17, '2013-07-02', 'wetryuio', 'wertyuiop			\r\n		'),
(18, '2013-07-10', 'Marete Device', 'dvjlfb'),
(19, '2013-07-03', 'Gregg marshal', 'Why		'),
(20, '2013-07-16', 'Jack Bauer', 'Blackspot			\r\n		');

-- --------------------------------------------------------

--
-- Table structure for table `security_incident_types`
--

CREATE TABLE IF NOT EXISTS `security_incident_types` (
  `incident_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `incident_type_name` varchar(250) NOT NULL,
  PRIMARY KEY (`incident_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `security_incident_types`
--

INSERT INTO `security_incident_types` (`incident_type_id`, `incident_type_name`) VALUES
(1, 'Robbery'),
(2, 'Kidnapping'),
(3, 'Theft'),
(4, 'Road Accident'),
(5, 'Carjacking'),
(6, 'Missing Persons');

-- --------------------------------------------------------

--
-- Table structure for table `security_summary`
--

CREATE TABLE IF NOT EXISTS `security_summary` (
  `ss_id` int(11) NOT NULL AUTO_INCREMENT,
  `ss_time_id` date NOT NULL,
  `ss_incident_type` int(11) NOT NULL,
  `ss_location_id` int(11) NOT NULL,
  `ss_incident_id` int(11) NOT NULL,
  `ss_county_id` int(11) NOT NULL,
  `ss_constituency_id` int(11) NOT NULL,
  `ss_station_id` int(11) NOT NULL,
  PRIMARY KEY (`ss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `security_summary`
--

INSERT INTO `security_summary` (`ss_id`, `ss_time_id`, `ss_incident_type`, `ss_location_id`, `ss_incident_id`, `ss_county_id`, `ss_constituency_id`, `ss_station_id`) VALUES
(1, '2013-07-10', 2, 1, 18, 2, 3, 1),
(2, '2013-07-03', 3, 1, 19, 3, 1, 2),
(3, '2013-07-16', 4, 3, 20, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE IF NOT EXISTS `stations` (
  `station_id` int(11) NOT NULL AUTO_INCREMENT,
  `station_name` varchar(255) NOT NULL,
  `station_officers` int(11) NOT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`station_id`, `station_name`, `station_officers`) VALUES
(1, 'Central Police Station', 1000),
(2, 'Kilimani Police Station', 500),
(3, 'Lanagata Police Station', 300),
(4, 'Madaraka Police Station', 350),
(5, 'Karen Police Station', 200);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resource_map`
--
ALTER TABLE `resource_map`
  ADD CONSTRAINT `resource_map_ibfk_1` FOREIGN KEY (`resourceId`) REFERENCES `resources` (`resourceId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
