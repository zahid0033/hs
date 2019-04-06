-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 02:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `docinfo`
--

CREATE TABLE `docinfo` (
  `docId` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docinfo`
--

INSERT INTO `docinfo` (`docId`, `fName`, `mName`, `lName`, `status`) VALUES
(2, 'Abdul', 'Hasan', 'Alim', 'Register'),
(7, 'karim', 'Hasan', 'zahid', 'Register'),
(8, 'saiful', 'Hasan', 'Alim', 'duty doctor'),
(9, 'zihad', 'Akbar', 'khan', 'duty doctor');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docId` int(11) NOT NULL DEFAULT '0',
  `jobTitle` varchar(50) NOT NULL,
  `Jfrom` int(11) NOT NULL,
  `Jto` int(11) NOT NULL,
  `org` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docId`, `jobTitle`, `Jfrom`, `Jto`, `org`, `degree`, `board`, `year`, `position`) VALUES
(1, 'Duty doctor', 1994, 1996, 'Dhaka medical college', 'ssc', 'dhaka', 1986, '1st'),
(1, 'Duty doctor', 1996, 2000, 'Chittagong medical college', 'ssc', 'dhaka', 1986, '2nd'),
(1, 'Duty doctor', 2000, 2001, 'Shylet medical college', 'MBBS', 'dhaka', 1990, '1st'),
(2, 'Duty doctor', 1994, 1996, 'Comilla medical college', 'ssc', 'dhaka', 1986, '1st'),
(2, '-', 0, 0, '-', 'hsc', 'dhaka', 1986, '1st'),
(2, '-', 0, 0, '-', 'MBBS', 'dhaka', 1992, '1st');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `mfc` varchar(50) NOT NULL,
  `exr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `type`, `unitPrice`, `quantity`, `mfc`, `exr`) VALUES
(1, 'Napa', 'Paracitamol', 5, 50, '12/11/2016', '11/11/2018'),
(2, 'cipro-s', 'Paracitamol', 10, 50, '12/11/2016', '11/11/2018'),
(3, 'napa extra ', 'Capsule', 6, 50, '12/11/2016', '11/11/2018'),
(4, '--', '--', 0, 0, '0-0-0', '0-0-0');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `nId` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nId`, `fName`, `mName`, `lName`, `dob`, `status`, `id`) VALUES
(1, 'Kanij', '--', 'Fatema', '', 'nurse', 1),
(3, 'Shayla', 'binte', 'alam', '', 'superviser', 101);

-- --------------------------------------------------------

--
-- Table structure for table `nurseinfo`
--

CREATE TABLE `nurseinfo` (
  `nid` int(11) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `Jfrom` int(11) NOT NULL,
  `Jto` int(11) NOT NULL,
  `Jtype` varchar(50) NOT NULL,
  `org` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurseinfo`
--

INSERT INTO `nurseinfo` (`nid`, `degree`, `board`, `year`, `Jfrom`, `Jto`, `Jtype`, `org`) VALUES
(1, 'ssc', 'chittagong', 1995, 2001, 2007, 'nurse', 'Ibna Sina'),
(3, 'ssc', 'chittagong', 1995, 2001, 2007, 'nurse', 'Ibna Sina'),
(3, 'hsc', 'chittagong', 1997, 2008, 2012, 'nurse', 'Sqaure hospital');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `doa` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `pn1` varchar(50) NOT NULL,
  `pn2` varchar(50) DEFAULT NULL,
  `streetNo` int(11) NOT NULL,
  `streetName` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `thana` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `PstreetNo` int(11) NOT NULL,
  `PstreetName` varchar(50) NOT NULL,
  `Parea` varchar(50) NOT NULL,
  `Pthana` varchar(50) NOT NULL,
  `Pdist` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `job` varchar(50) NOT NULL,
  `room` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `fName`, `mName`, `lName`, `doa`, `dob`, `pn1`, `pn2`, `streetNo`, `streetName`, `area`, `thana`, `dist`, `PstreetNo`, `PstreetName`, `Parea`, `Pthana`, `Pdist`, `amount`, `job`, `room`) VALUES
(2, 'Md.Minhaz', 'Uddin', 'Nihal', '2011-08-19', '1995-02-11', '+8801537038980', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 3000, 'Government Job', 'Cabin'),
(3, 'Md.Hasan', 'Uddin', 'Mahmud', '2011-08-19', '1995-02-11', '+8801537038985', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 3000, 'Government Job', 'Cabin'),
(4, 'Md.Mahfuzur', 'Rahman', 'Himel', '2011-08-19', '1995-02-11', '+880153700496', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(5, 'Md.Mahfuzur', 'Rahman', 'Himel', '2011-08-19', '1995-02-11', '+880153700496', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(6, 'Md.Mahfuzur', 'Rahman', 'Himel', '2011-08-19', '1995-02-11', '+880153700496', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(7, 'Md.Mahfuzurfff', 'Rahmanff', 'Himelfff', '2011-08-19', '1995-02-11', '+8801537004964', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(8, 'Md.', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+8801647004964', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(9, 'Md.billal', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+8801697004964', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(10, 'Md.billaldgnd', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+8801697074964', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(11, 'Md.billaldgnd', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+880133697074964', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(12, 'Md.billaldgnd', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+880133697074966744', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(13, 'Md.billaldgnd', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+880133697074966744', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(14, 'Md.billaldgnd', 'Ahmed', 'Parvez', '2011-08-19', '1995-02-11', '+880133697074966744', '+8801763819827', 0, '', '', '', '', 0, '', '', '', '', 8000, 'Business', 'Cabin'),
(15, 'dd', 'dd', 'aa', '2011-08-19', '', '+880123c', '+880123', 34, 'dd', 'dd', 'dd', 'dd', 31, 'vv', 'vv', 'vv', 'vv', 2000, 'Farmer', 'Wards'),
(16, 'dd', 'dd', 'aa', '2011-08-19', '', '+880123cr', '+880123', 34, 'dd', 'dd', 'dd', 'dd', 31, 'vv', 'vv', 'vv', 'vv', 2000, 'Farmer', 'Wards'),
(17, 'd', 'd', 'd', '2011-08-19', '2222-02-22', '+88022', '+88022', 22, '22', '22', '22', '22', 22, '22', '22', '22', '22', 2000, 'Business', 'Wards'),
(18, 'd', 'a', 'b', '2011-08-19', '', '+880s4', '+880gg', 22, '33', '11', 'gg', 'aa', 9, ' x', 's', 'b', 'a', 2000, 'Private Job', 'Cabin');

-- --------------------------------------------------------

--
-- Table structure for table `patientdata`
--

CREATE TABLE `patientdata` (
  `pid` int(11) NOT NULL,
  `docId` int(11) NOT NULL,
  `nusId` int(11) NOT NULL,
  `wardId` int(11) NOT NULL,
  `mId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `testId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientinv`
--

CREATE TABLE `patientinv` (
  `pid` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `sd1` varchar(100) NOT NULL,
  `sd2` varchar(100) NOT NULL,
  `sd3` varchar(100) NOT NULL,
  `sd4` varchar(100) NOT NULL,
  `sd5` varchar(100) NOT NULL,
  `sd6` varchar(100) NOT NULL,
  `break1` varchar(100) NOT NULL,
  `break2` varchar(100) NOT NULL,
  `break3` varchar(100) NOT NULL,
  `lunch1` varchar(100) NOT NULL,
  `lunch2` varchar(100) NOT NULL,
  `lunch3` varchar(100) NOT NULL,
  `dinner1` varchar(100) NOT NULL,
  `dinner2` varchar(100) NOT NULL,
  `dinner3` varchar(100) NOT NULL,
  `bpLow` int(11) NOT NULL,
  `bpHigh` int(11) NOT NULL,
  `game` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `diseaName` varchar(100) NOT NULL,
  `docId` int(11) NOT NULL,
  `docName` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinv`
--

INSERT INTO `patientinv` (`pid`, `height`, `weight`, `sd1`, `sd2`, `sd3`, `sd4`, `sd5`, `sd6`, `break1`, `break2`, `break3`, `lunch1`, `lunch2`, `lunch3`, `dinner1`, `dinner2`, `dinner3`, `bpLow`, `bpHigh`, `game`, `hobby`, `diseaName`, `docId`, `docName`, `designation`) VALUES
(14, 4, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', '', 1234, 'gsb', 'ssgr'),
(14, 4, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', '', 1234, 'gsb', 'ssgr'),
(14, 4, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', '', 1234, 'gsb', 'ssgr'),
(14, 4, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', '', 1234, 'gsb', 'ssgr'),
(14, 4, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', '', 1234, 'gsb', 'ssgr'),
(14, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0, '', ''),
(14, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0, '', ''),
(14, 11, 11, 'klfff', 'vs', 'svsf', 'sfb', 'fbfb', 'sbf', 'sfvs', 'dvsv', 'sfvs', 'sfv', 'sfvsf', 'svfs', 'sfv', 'sfv', 'sfv', 33, 33, 'Volyball', 'Writing', 'sfvsf', 11, 'sv', 'sdvs'),
(14, 11, 11, 'klfff', 'vs', 'svsf', 'sfb', 'fbfb', 'sbf', 'sfvs', 'dvsv', 'sfvs', 'sfv', 'sfvsf', 'svfs', 'sfv', 'sfv', 'sfv', 33, 33, 'Volyball', 'Writing', 'sfvsf', 11, 'sv', 'sdvs'),
(0, 0, 0, 'kl', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', 0, '', ''),
(16, 33, 33, 'kl33', '33e', 'ew', 'dw', 'ds', 's', 'qq', 'dd', 'zz', '  vv', 'cc', 'vv', 'ww', 'rr', 'ww', 33, 33, 'Hockey', 'Writing', 'dd', 2, 'Abdul', '1'),
(17, 2, 2, 'kld', 'd', 'd', 'd', 'd', 'c', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 1, 1, 'Chess', 'Writing', 'f', 12, 'dd', 'dd'),
(17, 2, 2, 'kld', 'd', 'd', 'd', 'd', 'c', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 1, 1, 'Chess', 'Writing', 'f', 12, 'dd', 'dd'),
(17, 4, 4, 'kl4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 4, 4, 'All', 'Writing', '4', 4, '4', '4'),
(18, 2, 2, 'klc', 'c', 'c', 'c', 'q', '3', 'f', 'g', 'b', 'a', 'd', 'e', 'b', 'rrr', 'qa', 3, 3, 'Chess', 'Writing', 'vs', 333, 'ca', 'va');

-- --------------------------------------------------------

--
-- Table structure for table `specaladvice`
--

CREATE TABLE `specaladvice` (
  `pid` int(11) NOT NULL,
  `docId` int(11) NOT NULL,
  `bedNo` int(11) NOT NULL,
  `wardNo` int(11) NOT NULL,
  `slNo` int(11) NOT NULL DEFAULT '0',
  `mId` int(11) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `perDay` int(11) NOT NULL DEFAULT '0',
  `morning` int(11) NOT NULL DEFAULT '0',
  `noon` int(11) NOT NULL DEFAULT '0',
  `evening` int(11) NOT NULL DEFAULT '0',
  `testId` int(11) NOT NULL DEFAULT '0',
  `AdmitDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specaladvice`
--

INSERT INTO `specaladvice` (`pid`, `docId`, `bedNo`, `wardNo`, `slNo`, `mId`, `quantity`, `perDay`, `morning`, `noon`, `evening`, `testId`, `AdmitDate`) VALUES
(14, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 11, 2, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 11, 2, 101, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 11, 2, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 11, 2, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 2, 1, 111, 0, 1, 1, 1, 1, 0, 0, 0, 0),
(16, 2, 1, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 12, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0),
(17, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 0, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 0, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 0, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 0, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 1, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 2, 1, 1, 1, 1, 1, 0, 0, 0),
(17, 4, 0, 0, 1, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 2, 1, 1, 1, 1, 1, 0, 1, 0),
(17, 4, 0, 0, 1, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 2, 1, 1, 1, 1, 1, 0, 1, 0),
(17, 4, 0, 0, 1, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 2, 1, 1, 1, 1, 1, 0, 1, 0),
(17, 4, 0, 0, 1, 2, 2, 2, 2, 2, 0, 1, 0),
(17, 4, 0, 0, 2, 1, 1, 1, 1, 1, 0, 1, 0),
(18, 333, 4, 0, 2, 2, 2, 2, 22, 2, 2, 5, 0),
(18, 333, 4, 0, 1, 11, 1, 1, 1, 1, 1, 5, 0),
(18, 333, 4, 0, 2, 2, 2, 2, 22, 2, 2, 5, 0),
(18, 333, 4, 0, 1, 11, 1, 1, 1, 1, 1, 5, 0),
(18, 333, 4, 0, 2, 2, 2, 2, 22, 2, 2, 5, 0),
(18, 333, 4, 0, 1, 11, 1, 1, 1, 1, 1, 5, 0),
(18, 0, 4, 0, 2, 2, 2, 2, 22, 2, 2, 5, 0),
(18, 0, 4, 0, 1, 11, 1, 1, 1, 1, 1, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wId` int(11) NOT NULL,
  `wardName` varchar(50) NOT NULL,
  `regiId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `nusId` int(11) NOT NULL,
  `nusName` varchar(50) NOT NULL,
  `bedNo` int(11) NOT NULL,
  `bedType` varchar(50) NOT NULL,
  `rent` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`wId`, `wardName`, `regiId`, `Name`, `nusId`, `nusName`, `bedNo`, `bedType`, `rent`, `status`) VALUES
(111, 'Cardiology', 2, 'Abdul', 3, 'Shayla', 5, 'cabin', 2000, 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docinfo`
--
ALTER TABLE `docinfo`
  ADD PRIMARY KEY (`docId`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docinfo`
--
ALTER TABLE `docinfo`
  MODIFY `docId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nurse`
--
ALTER TABLE `nurse`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
