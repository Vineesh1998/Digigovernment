-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 11:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digi`
--

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE IF NOT EXISTS `death` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `dead_id` varchar(15) NOT NULL,
  `cause` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `doc_id` varchar(15) NOT NULL,
  `police` varchar(15) NOT NULL,
  `panchayat` varchar(15) NOT NULL,
  `relative_id` varchar(15) NOT NULL,
  `doc_status` int(3) NOT NULL,
  `rel_status` int(3) NOT NULL,
  `pol_status` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `death_ibfk_1` (`dead_id`),
  KEY `doc_id` (`doc_id`),
  KEY `panchayat` (`panchayat`),
  KEY `police` (`police`),
  KEY `relative_id` (`relative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`id`, `dead_id`, `cause`, `date`, `time`, `doc_id`, `police`, `panchayat`, `relative_id`, `doc_status`, `rel_status`, `pol_status`, `status`) VALUES
(1, 'KLM2000kpzha111', 'Normal', '2022-05-06', '00:03:00', 'KLM1997kpzha555', 'PS_01', 'KPZHA', 'KLM1997kpzha001', 1, 1, 1, 1),
(3, 'KLM1997kpzha002', 'Normal', '2022-05-05', '03:14:00', 'KLM1997kpzha555', 'PS_01', 'KPZHA', 'KLM1997kpzha001', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `hospital`, `qualification`, `age`, `address`, `phone_no`, `email`) VALUES
('KLM1997kpzha555', 'Vineesh A U', 'Kims Kollam', 'MBBS', 25, 'Poovam House\r\nAyathail P O\r\nKollam', '9048552136', 'vineesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` int(3) NOT NULL,
  `civil_id` varchar(25) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `civil_id`) VALUES
(1, 'KLM1997kpzha555', 'garu@123', 1, 'KLM1997kpzha555'),
(2, 'pan_kpzha', 'pass_2', 4, 'KPZHA'),
(3, 'ps_kpzha', '123456_ps', 3, 'PS_01'),
(4, 'KLM1997kpzha001', 'unni8799', 2, 'KLM1997kpzha001'),
(6, 'KLM2000kpzha111', 'karthi', 2, 'KLM2000kpzha111');

-- --------------------------------------------------------

--
-- Table structure for table `panchayat`
--

CREATE TABLE IF NOT EXISTS `panchayat` (
  `pan_id` varchar(15) NOT NULL,
  `panchayat_name` varchar(30) NOT NULL,
  `holder_name` varchar(30) NOT NULL,
  `holder_pos` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  PRIMARY KEY (`pan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panchayat`
--

INSERT INTO `panchayat` (`pan_id`, `panchayat_name`, `holder_name`, `holder_pos`, `district`) VALUES
('KPZHA', 'Kulathupuzha', 'Subilash Kumar', 'Secretary', 'Kollam');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
  `police_id` varchar(15) NOT NULL,
  `station_place` varchar(30) NOT NULL,
  `pan_id` varchar(15) NOT NULL,
  `officer_name` varchar(30) NOT NULL,
  PRIMARY KEY (`police_id`),
  KEY `pan_id` (`pan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`police_id`, `station_place`, `pan_id`, `officer_name`) VALUES
('PS_01', 'Kulathupuzha', 'KPZHA', 'Vaisakh T');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `civil_id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `addhar_no` varchar(15) NOT NULL,
  `house_no` int(3) NOT NULL,
  `ward_no` int(3) NOT NULL,
  `local_body` varchar(25) NOT NULL,
  `pan_id` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`civil_id`),
  KEY `pan_id` (`pan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`civil_id`, `name`, `age`, `gender`, `addhar_no`, `house_no`, `ward_no`, `local_body`, `pan_id`, `district`, `phone_no`, `status`) VALUES
('KLM1995kpzha110', 'Sreya Prince', 27, 'Female', '123456789123', 812, 10, 'panchayat', 'KPZHA', 'Kollam', 9856231599, 1),
('KLM1997kpzha001', 'Shiyas Shajahan', 22, 'Male', '225465894512', 756, 3, 'panchayat', 'KPZHA', 'Kollam', 9946043409, 1),
('KLM1997kpzha002', 'Meera P', 21, 'Female', '112345686955', 756, 3, 'panchayat', 'KPZHA', 'Kollam', 7593060309, 2),
('KLM1998kpzha120', 'Abhilash M Nair', 23, 'Male', '562325361425', 812, 10, 'panchayat', 'KPZHA', 'Kollam', 8136861884, 1),
('KLM2000kpzha111', 'Karthik H', 22, 'Male', '111122223333', 756, 3, 'panchayat', 'KPZHA', 'Kollam', 5564823478, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `death`
--
ALTER TABLE `death`
  ADD CONSTRAINT `death_ibfk_1` FOREIGN KEY (`dead_id`) REFERENCES `user` (`civil_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `death_ibfk_2` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `death_ibfk_3` FOREIGN KEY (`panchayat`) REFERENCES `panchayat` (`pan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `death_ibfk_4` FOREIGN KEY (`police`) REFERENCES `police` (`police_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `death_ibfk_5` FOREIGN KEY (`relative_id`) REFERENCES `user` (`civil_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `police`
--
ALTER TABLE `police`
  ADD CONSTRAINT `police_ibfk_1` FOREIGN KEY (`pan_id`) REFERENCES `panchayat` (`pan_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`pan_id`) REFERENCES `panchayat` (`pan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
