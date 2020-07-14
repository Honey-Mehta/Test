-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 04:47 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlessons`
--

CREATE TABLE `addlessons` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `projectname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `projectno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `projectmilestone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keyissue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `framework` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addlessons`
--

INSERT INTO `addlessons` (`id`, `email`, `projectname`, `projectno`, `projectmilestone`, `title`, `keyissue`, `description`, `category`, `framework`, `file_name`, `uploaded_on`, `status`) VALUES
(35, 'honey.mehta@ardentinfotech.com', '1.Web Design ', '  1', 'CSS3 ', 'q', '	q', '	q', 'Low', '', 'Honey_Mehta _Bank_Passbook_Detail.jpg', '2020-07-13 18:24:59', '1'),
(36, 'honey.mehta@ardentinfotech.com', '1.Web Design ', '  1', 'CSS3 ', 'q', '	q', '	q', 'Low', '', 'Honey_Mehta _Bank_Passbook_Detail.jpg', '2020-07-13 18:26:46', '1'),
(37, 'honey.mehta@ardentinfotech.com', '1.Web Design ', '  1', 'HTML 5', 'sdsd', '	dsds', '	dsd', 'Low', 'Laravel', 'images123.png', '2020-07-13 18:31:35', '1'),
(38, 'honey.mehta@ardentinfotech.com', '1.Web Design ', '  1', 'HTML 5', 'fsd', '	fdsdff', '	fd', 'Advance', 'Codeigniter,CakePHP', 'images123.png', '2020-07-13 18:33:21', '1');

-- --------------------------------------------------------

--
-- Table structure for table `projectmilestone`
--

CREATE TABLE `projectmilestone` (
  `id` int(50) NOT NULL,
  `project_id` int(50) NOT NULL,
  `projectmilestone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectmilestone`
--

INSERT INTO `projectmilestone` (`id`, `project_id`, `projectmilestone`) VALUES
(1, 1, 'HTML 5'),
(2, 1, 'CSS3 '),
(3, 1, 'JAVASCRIPT');

-- --------------------------------------------------------

--
-- Table structure for table `project_name`
--

CREATE TABLE `project_name` (
  `id` int(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_name`
--

INSERT INTO `project_name` (`id`, `project_name`, `project_no`) VALUES
(1, 'Web Design', '1'),
(2, 'Web Development', '2'),
(3, 'Software Development', '3');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `password`) VALUES
(1, 'honey.mehta@ardentinfotech.com', '123'),
(4, 'honey.mehta@ardentinfotech.com', '123'),
(5, 'honey.mehta@ardentinfotech.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addlessons`
--
ALTER TABLE `addlessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectmilestone`
--
ALTER TABLE `projectmilestone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_name`
--
ALTER TABLE `project_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addlessons`
--
ALTER TABLE `addlessons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `projectmilestone`
--
ALTER TABLE `projectmilestone`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_name`
--
ALTER TABLE `project_name`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projectmilestone`
--
ALTER TABLE `projectmilestone`
  ADD CONSTRAINT `projectmilestone_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project_name` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
