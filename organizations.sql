-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 10:21 PM
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
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `addressline` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `approval` varchar(100) DEFAULT NULL,
  `information` varchar(100) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `addressline`, `city`, `postal`, `country`, `email`, `contact`, `username`, `password`, `approval`, `information`, `description`) VALUES
(2, 'OrgFounder', 'road:12,bock:A', 'Dhaka', '1111', 'Bangladesh', 's1@gmail.com', '01716165845', 'organization', '1234', 'approval_organization_1576351197129.pdf', 'information_organization_1576351197598.pdf', 'dadxacxfaxcafscxfcasfd'),
(3, 'Likhon', 'road:12,bock:A', 'Dhaka', '764', 'Bangladesh', 'sad.likhon52@gmail.com', '01716165845', 'org', '1111', 'approval_org_1576354399633.pdf', 'information_org_1576354399747.pdf', 'xwdwedwe'),
(4, 'Likhon', 'road:12,bock:A', 'sirajganj', '765', 'Bangladesh', 'sad52@gmail.com', '01716165845', 'organ', '0123', 'approval_organ_1576355076651.pdf', 'information_organ_1576355076102.pdf', 'asxhsx'),
(5, 'leon', 'road:12,bock:A', 'sirajganj', '765', 'Bangladesh', 'sad.likhon52@gmail.com', '01716165845', 'org12', '0123', 'approval_org12_1576356564530.pdf', 'information_org12_1576356564139.pdf', '554');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
