-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2017 at 11:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artistdetails`
--

CREATE TABLE `artistdetails` (
  `username` varchar(100) NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `landline` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `onProbation` tinyint(1) DEFAULT '0',
  `clearedMid` tinyint(1) DEFAULT '0',
  `modifyDate` datetime DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artistgroups`
--

CREATE TABLE `artistgroups` (
  `groupID` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artistgroups`
--

INSERT INTO `artistgroups` (`groupID`, `Name`, `Description`) VALUES
(1, 'SPOT', 'Stage Productions and Operations Team'),
(2, 'SBRDC', 'Saint Benilde Romancon Dance Company'),
(3, 'CPT', 'Communication and Promotions Team'),
(4, 'DF', 'Dulaang Filipino'),
(5, 'Karilyo', 'Karilyo'),
(6, 'Coro', 'Coro San Benildo');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityID` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `regionID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityID`, `name`, `regionID`) VALUES
(1, 'Antipolo City', 1),
(2, 'Caloocan City', 1),
(3, 'Las Piñas City', 1),
(4, 'Makati City', 1),
(5, 'Malabon City', 1),
(6, 'Mandaluyong City', 1),
(7, 'Manila', 1),
(8, 'Marikina City', 1),
(9, 'Muntinlupa City', 1),
(10, 'Navotas City', 1),
(11, 'Paranaque City', 1),
(12, 'Pasay City', 1),
(13, 'Pasig City', 1),
(14, 'Pateros City', 1),
(15, 'Quezon City', 1),
(16, 'Rizal', 1),
(17, 'San Juan City', 1),
(18, 'Taguig', 1),
(19, 'Valenzuela City', 1),
(20, 'Abra', 2),
(21, 'Apayao', 2),
(22, 'Baguio', 2),
(23, 'Benguet', 2),
(24, 'Ifugao', 2),
(25, 'Kalinga', 2),
(26, 'Mountain Province', 2),
(27, 'Ilocos Norte', 3),
(28, 'Ilocos Sur', 3),
(29, 'La Union', 3),
(30, 'Pangasinan', 3),
(31, 'Batanes', 4),
(32, 'Cagayan', 4),
(33, 'Isabela', 4),
(34, 'Nueva Vizcaya', 4),
(35, 'Quirino', 4),
(36, 'Aurora', 5),
(37, 'Bataan', 5),
(38, 'Bulacan', 5),
(39, 'Nueva Ecija', 5),
(40, 'Pampanga', 5),
(41, 'Tarlac', 5),
(42, 'Zambales', 5),
(43, 'Batangas', 6),
(44, 'Cavite', 6),
(45, 'Laguna', 6),
(46, 'Quezon', 6),
(47, 'Rizal', 6),
(48, 'Tagaytay', 6),
(49, 'Marinduque', 7),
(50, 'Occidental Mindoro', 7),
(51, 'Oriental Mindoro', 7),
(52, 'Palawan', 7),
(53, 'Albay', 8),
(54, 'Camarines Norte', 8),
(55, 'Camaerines Sur', 8),
(56, 'Catanduanes', 8),
(57, 'Masbate', 8),
(58, 'Sorsogon', 8),
(59, 'Aklan', 9),
(60, 'Antique', 9),
(61, 'Boracay', 9),
(62, 'Capiz', 9),
(63, 'Guimaras', 9),
(64, 'Iloilo', 9),
(65, 'Negros Occidental', 9),
(66, 'Bohol', 10),
(67, 'Cebu', 10),
(68, 'Negros Oriental', 10),
(69, 'Siquijor', 10),
(70, 'Biliran', 11),
(71, 'Eastern Samar', 11),
(72, 'Leyte', 11),
(73, 'Northern Samar', 11),
(74, 'Samar', 11),
(75, 'Southern Leyte', 11),
(76, 'Zamboanga Del Norte', 12),
(77, 'Zamboanga Del Sur', 12),
(78, 'Zamboanga Sibugay', 12),
(79, 'Bukidnon', 13),
(80, 'Cagayan De Oro', 13),
(81, 'Camiguin', 13),
(82, 'Iligan City', 13),
(83, 'Lanao Del Norte', 13),
(84, 'Misamis Occidental', 13),
(85, 'Misamis Oriental', 13),
(86, 'Compostela Valley', 14),
(87, 'Davao Del Norte', 14),
(88, 'Davao Del Sur', 14),
(89, 'Davao Oriental', 14),
(90, 'Northen Cotabato', 15),
(91, 'Sarangani', 15),
(92, 'South Cotabato', 15),
(93, 'Sultan Kudarat', 15),
(94, 'Agusan del Norte', 16),
(95, 'Agusan del Sur', 16),
(96, 'Surigao del Norte', 16),
(97, 'Surigao del Sur', 16),
(98, 'Basilan', 17),
(99, 'Lanao del Sur', 17),
(100, 'Maguindanao', 17),
(101, 'Sulu', 17),
(102, 'Tawi-tawi', 17),
(103, 'name', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eparticipants`
--

CREATE TABLE `eparticipants` (
  `eventID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `dateModified` datetime NOT NULL,
  `addedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `timeStart` time NOT NULL,
  `timeEnd` time NOT NULL,
  `location` varchar(50) NOT NULL,
  `Participants` int(11) NOT NULL,
  `Attendance` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `artistGroup` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `scholarID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scholarID`, `Name`, `Description`) VALUES
(1, 'BEST', 'Benildean Excellence in Scholastics and Talents Scholarship'),
(2, 'ENTRACA', 'Entrance Academic Scholarship'),
(3, 'HONORS', 'Honors Scholarship awarded to freshmen applicants who are in the top ten of their graduating batch.'),
(4, 'VATEL', 'Aawarded to the best-ranking BS-IHM students who have completed five academic terms in SHRIM.'),
(5, 'SDA', 'School of Design and Arts Scholarship, awarded to students who show exceptional talent in the fields'),
(6, 'Top 10 Honors', 'Top 10 Honors awarded to students who are in the top ten honors list for three consecutive terms or '),
(7, 'Athletic Recruit Scholarship', 'Available to freshmen with superior athletic abilities fit to represent the College in sports compet'),
(8, 'OCA', 'Office of Culture and Arts Scholarship, granted to students who are gifted in the field of performan'),
(9, 'BHG', 'Benildean Hope Grant'),
(10, 'BASAP', 'Blessed Arnould Study Assistance Program'),
(11, 'SDEAS', 'School of Deaf Education and Applied Studies Grant'),
(12, 'Pierre Romançon Grant', 'Yes'),
(13, 'Kapitbahay Grant', 'Given to financially challenged students residing in barangays in the vicinity of Benilde.'),
(14, 'BPSP', 'Brother President Scholarship Program'),
(15, 'PD 577', 'Presidential Decree 577'),
(16, 'PD 1687', 'Presidential Decree'),
(17, 'CIC', 'Center for Institutional Communications Scholarship'),
(18, 'SPS-B', 'Student Publication Scholarship - Benildean'),
(19, 'SPS-Y', 'Student Publication Scholarship-Yearbook'),
(20, 'BSE', 'Benildean Student Envoy'),
(21, '--NONE--', 'No Scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `groupID` int(11) NOT NULL,
  `subCat` int(11) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `trainor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`groupID`, `subCat`, `Description`, `trainor`) VALUES
(6, 7, 'Tenor', 'Lorenzo.Malamug'),
(6, 8, 'Bass', 'Lorenzo.Malamug'),
(6, 9, 'Soprano', 'Lorenzo.Malamug'),
(6, 10, 'Alto', 'Lorenzo.Malamug'),
(3, 11, 'Production', 'Julia.Enriquez'),
(3, 12, 'Design', 'Julia.Enriquez'),
(3, 13, 'Sales and Marketing', 'Julia.Enriquez'),
(4, 14, 'Actor', 'Riki.Benedicto'),
(4, 15, 'Writer', 'Riki.Benedicto'),
(4, 16, 'Company Manager', 'Riki.Benedicto'),
(4, 17, 'Director', 'Riki.Benedicto'),
(5, 18, 'Props', 'Theta.Tulay'),
(5, 19, 'Company Manager', 'Theta.Tulay'),
(5, 20, 'Animator', 'Theta.Tulay'),
(5, 21, 'Performer', 'Theta.Tulay'),
(2, 22, 'Hiiphop', 'Mix.Kidlat'),
(2, 23, 'Contemporary', 'Mix.Kidlat'),
(2, 24, 'Company Manager', 'Mix.Kidlat'),
(1, 25, 'Light Design', 'Aries.Alcayaga'),
(1, 26, 'Stage Management', 'Aries.Alcayaga'),
(1, 27, 'Set Design', 'Aries.Alcayaga'),
(1, 28, 'Production Management', 'Aries.Alcayaga'),
(1, 29, 'Costume Design', 'Aries.Alcayaga'),
(1, 30, 'Company Manager', 'Aries.Alcayaga');

-- --------------------------------------------------------

--
-- Table structure for table `usercat`
--

CREATE TABLE `usercat` (
  `catID` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercat`
--

INSERT INTO `usercat` (`catID`, `Description`) VALUES
(1, 'Administrator'),
(2, 'Trainor'),
(3, 'Student Artist'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `groupID` int(11) NOT NULL,
  `subCat` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `schoolID` int(11) NOT NULL,
  `cityAddress` varchar(100) NOT NULL,
  `cmobile` int(11) NOT NULL,
  `clandline` int(11) NOT NULL,
  `provincialAddress` varchar(100) DEFAULT NULL,
  `pmobile` int(11) DEFAULT NULL,
  `plandline` int(11) DEFAULT NULL,
  `zip` int(11) NOT NULL,
  `cityID` int(11) NOT NULL,
  `birthDate` datetime NOT NULL,
  `scholarID` int(11) NOT NULL,
  `joinDate` datetime DEFAULT NULL,
  `modifyDate` datetime DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `onProbation` tinyint(1) DEFAULT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `groupID`, `subCat`, `firstName`, `lastName`, `middleName`, `gender`, `religion`, `nickname`, `username`, `password`, `email`, `schoolID`, `cityAddress`, `cmobile`, `clandline`, `provincialAddress`, `pmobile`, `plandline`, `zip`, `cityID`, `birthDate`, `scholarID`, `joinDate`, `modifyDate`, `status`, `onProbation`, `userType`) VALUES
(1, 1, 26, 'Gardo', 'Putik', 'Dela', 'M', 'Muslim', 'Puta', 'Gardo.Putik', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'pogalats1@gmail.com', 1123123, 'asdf asdf ', 123123, 123123, 'asdf asdf ', 123123, 123123, 123, 20, '0000-00-00 00:00:00', 21, '0000-00-00 00:00:00', '2017-08-09 23:19:00', 'Active', NULL, 1),
(2, 3, 12, 'user', 'name', 'gardo', 'M', 'cath', 'cath', 'user.name', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'pogalats1@gmail.com', 123123, 'asdf', 123, 123, 'asdf', 123, 123, 123, 95, '0000-00-00 00:00:00', 10, '0000-00-00 00:00:00', '2017-08-10 02:47:26', 'Active', NULL, 1),
(3, 2, 24, 'user', 'one', 'dal', 'F', 'ca', 'ca', 'user.one', 'tae', 'andreimishael.santos@gmail.com', 12312, '3123123', 123, 123, '123', 123, 123, 123, 94, '0000-00-00 00:00:00', 7, '0000-00-00 00:00:00', '2017-08-10 02:52:32', 'Pending', NULL, 1),
(4, 2, 23, 'user', 'two', 'asdf', 'H', 'asdf', 'asdf', 'user.two', '865ec76b33caab67fe6d09b4f0c8e8187b1c06c3cae4a5f4d71c7935285f33af', 'andreimishael.santos@benilde.edu.ph', 123, '123', 123, 123, '123', 123, 123, 123, 20, '0000-00-00 00:00:00', 10, '0000-00-00 00:00:00', '2017-08-10 03:11:15', 'Pending', NULL, 2),
(6, 2, 23, 'user', 'three', 'asdf', 'H', 'asdf', 'asdf', 'user.three', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855', 'andreimishael.santos@benilde.edu.ph', 123, '123', 123, 123, '123', 123, 123, 123, 20, '0000-00-00 00:00:00', 10, '0000-00-00 00:00:00', '2017-08-10 03:11:57', 'Active', NULL, 1),
(7, 1, 26, 'user', 'four', 'Dela', 'M', 'Muslim', 'Puta', 'user.four', '865ec76b33caab67fe6d09b4f0c8e8187b1c06c3cae4a5f4d71c7935285f33af', 'pogalats1@gmail.com', 1123123, 'asdf asdf ', 123123, 123123, 'asdf asdf ', 123123, 123123, 123, 20, '0000-00-00 00:00:00', 21, '0000-00-00 00:00:00', '2017-08-10 03:18:06', 'Active', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `typeID` int(11) NOT NULL,
  `Description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`typeID`, `Description`) VALUES
(1, 'Administrator'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artistdetails`
--
ALTER TABLE `artistdetails`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `userID` (`username`);

--
-- Indexes for table `artistgroups`
--
ALTER TABLE `artistgroups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityID`);

--
-- Indexes for table `eparticipants`
--
ALTER TABLE `eparticipants`
  ADD PRIMARY KEY (`eventID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`scholarID`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subCat`);

--
-- Indexes for table `usercat`
--
ALTER TABLE `usercat`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`typeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artistgroups`
--
ALTER TABLE `artistgroups`
  MODIFY `groupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `scholarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `usercat`
--
ALTER TABLE `usercat`
  MODIFY `catID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
