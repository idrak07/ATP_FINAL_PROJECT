-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 07:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(50) NOT NULL,
  `organizationname` varchar(100) NOT NULL,
  `offererusername` varchar(100) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `degree` varchar(100) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `universityname` varchar(100) NOT NULL,
  `totalseat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `organizationname`, `offererusername`, `title`, `description`, `degree`, `startdate`, `deadline`, `percentage`, `universityname`, `totalseat`) VALUES
(25, 'The Organization of American State', 'usaorg', 'MSC offer scholarship', 'Louisiana State University is a public research university in Baton Rouge, Louisiana. The university was founded in 1853 in what is now known as Pineville, Louisiana, under the name Louisiana State Seminary of Learning & Military Academy', 'Masters', '2019-12-20', '2020-01-22', '100%', 'Louisiana State University', '0'),
(26, 'The Organization of American State', 'usaorg', 'BSC offer Scholarship', 'Harvard University is a private Ivy League research university in Cambridge, Massachusetts, with about 6,800 undergraduate students and about 14,000 postgraduate students', 'Bachelor', '2019-12-20', '2020-01-01', '50%', 'Harvard University', '14'),
(27, 'The Organization of American State', 'usaorg', 'Phd offer scholarship.', 'The University of Southern California is a private research university in Los Angeles, California. Founded in 1880, it is the oldest private research university in California. For the 2018–19 academic year, there were 20,000 students enrolled in four-year undergraduate programs.', 'PHD', '2020-01-15', '2020-01-23', '80%', 'University of Southern California', '10'),
(28, 'The Organization of American State', 'usaorg', 'MSC offer scholarship', 'The University of Notre Dame du Lac is a private Catholic research university in Notre Dame, Indiana, outside the city of South Bend. It was founded in 1842 by Rev. Edward Sorin', 'Masters', '2020-01-25', '2020-02-13', '50%', 'University of Notre Dame', '7'),
(30, 'unspokensmilesfoundation.org', 'unspoken', 'MSC offer scholarship', 'fb dfnggfn', 'Masters', '2019-12-24', '2019-12-31', '50%', 'University of Notre Dame', '8'),
(31, 'The Organization of American State', 'usaorg', 'MSC offer scholarship', 'Harvard University is a private Ivy League research university in Cambridge, Massachusetts, with about 6,800 undergraduate students and about 14,000 postgraduate students', 'Masters', '2019-12-23', '2020-01-29', '80%', 'Harvard University', '5'),
(32, 'unspokensmilesfoundation.org', 'unspoken', 'MSC offer scholarship', 'The University of Southern California is a private research university in Los Angeles, California.', 'Masters', '2019-12-25', '2020-01-18', '90%', 'University of Southern California', '12'),
(33, 'unspokensmilesfoundation.org', 'unspoken', 'Phd offer scholarship', 'Harvard University is a private Ivy League research university in Cambridge, Massachusetts, with about 6,800 undergraduate students and about 14,000 postgraduate students.', 'PHD', '2019-12-21', '2019-12-26', '100%', 'Harvard University', '2'),
(34, 'unspokensmilesfoundation.org', 'unspoken', 'BSC offer Scholarship', 'Notre Dame reached international fame at the beginning of the 20th century, aided by the success of its football team under coach Knute Rockne. Major improvements to the university occurred during the administration of Theodore Hesburgh between 1952 and 1987,', 'Bachelor', '2019-12-21', '2019-12-31', '70%', 'University of Notre Dame', '12'),
(35, 'unspokensmilesfoundation.org', 'unspoken', 'MSC offer scholarship', 'vfb', 'Masters', '2019-12-21', '2019-12-25', '70%', 'Louisiana State University', '10'),
(36, 'The Organization of American State', 'usaorg', 'MSC offer scholarship', 'vchggfmghfgh', 'Masters', '2019-12-26', '2019-12-31', '60%', 'Louisiana State University', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
