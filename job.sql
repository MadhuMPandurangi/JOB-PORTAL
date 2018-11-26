-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 12:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `drive`
--

DROP TABLE IF EXISTS `drive`;
CREATE TABLE IF NOT EXISTS `drive` (
  `company_name` varchar(50) DEFAULT NULL,
  `posted_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `package` varchar(50) DEFAULT NULL,
  `cgpa` varchar(50) DEFAULT NULL,
  `disc` varchar(10000) DEFAULT NULL,
  `desig` varchar(100) DEFAULT NULL,
  UNIQUE KEY `company_name` (`company_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drive`
--

INSERT INTO `drive` (`company_name`, `posted_date`, `package`, `cgpa`, `disc`, `desig`) VALUES
('TEK System', '2018-11-18 07:48:50', '6lpa', '70%', ' TEK System Campus Recruitment Drive is schedule at HKBK College of Engineering Bangalore on 24th Nov 2018. All the eligible and placed students can attend as package is 6.00 lakh. Refer the attachment and mail.  Please don\'t share the details with any other college students.', 'Trainee Engineer'),
('M/S Health Asyst Pooled Campus drive', '2018-11-18 08:53:23', '4lpa', '7.00 CGPA in BE, 10th & 12th No Criteria', 'Work Location : Bangalore........................Target Hires: B.E- CSE, ISE & ECE        Reporting Time: - 9.00 am(Sharp)     Date:- 16th November 2018     Venue:- DBIT New Seminar Hall     Note:  1) Last date for Registration is on 14th November 2018 before 10.00 PM     2) Photocopies of Marks cards, Resume,  passport size photos, Copy of Govt ID Proof, College ID should be produced during the drive.        All the very best!!', 'Software Trainee');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login`
--

DROP TABLE IF EXISTS `staff_login`;
CREATE TABLE IF NOT EXISTS `staff_login` (
  `uid` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(100) NOT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `sem1` varchar(100) DEFAULT NULL,
  `sem2` varchar(100) DEFAULT NULL,
  `sem3` varchar(100) DEFAULT NULL,
  `sem4` varchar(100) DEFAULT NULL,
  `sem5` varchar(100) DEFAULT NULL,
  `sem6` varchar(100) DEFAULT NULL,
  `sem7` varchar(100) DEFAULT NULL,
  `sem8` varchar(100) DEFAULT NULL,
  `avg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `pwd`, `fname`, `lname`, `branch`, `company`, `email`, `phone`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `avg`) VALUES
('1KS15CS052', '123', 'MADHU', 'PANDURANGI', 'CS', 'INFOSYS', 'madhumpandurangi@gmail.com', '9066774590', '5', '5', '8', '9', '63', '7', '3', '4', '7'),
('t', 'yhj', 'gh', 'gh', 'gh', 'sdf', 'fghj', 'gh', 'ghn', 'gh', 'n', '85', '854', '25', '4', '54', '4'),
('', '', '', '', '', 'xyz', '', '', '', '', '', '', '', '', '', '', ''),
('fgh', 'dfg', 'sdf', 'df', 'df', 'sdfgh', 'sd', 'df', 'df', 'dfg', 'sdf', 'df', 'df', 'qerf', 'sdf', 'wedf', 'swdf');

-- --------------------------------------------------------

--
-- Table structure for table `tpo_login`
--

DROP TABLE IF EXISTS `tpo_login`;
CREATE TABLE IF NOT EXISTS `tpo_login` (
  `uid` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo_login`
--

INSERT INTO `tpo_login` (`uid`, `pwd`) VALUES
('abc', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
