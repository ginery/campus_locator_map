-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2020 at 11:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dev_ginx`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `encoded_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `branch_name`, `date_added`, `encoded_by`) VALUES
(1, 'Bacolod Main', '2019-10-04', '89'),
(6, 'Makati', '2019-10-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE IF NOT EXISTS `tbl_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_num` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_num` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `date_hire` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `encoded_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `ref_num`, `name`, `contact_num`, `address`, `classification`, `date_hire`, `status`, `encoded_by`) VALUES
(1, 'ED-01-20191007', 'Ginery Songaling', '09955965031', 'Brgy. Canjusa', 'Information Technology', '2017-06-21', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `encoded_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `position_name`, `date_added`, `encoded_by`) VALUES
(5, 'Information Technology (IT)', '2019-10-27', ''),
(6, 'Human Resource (HR)', '2019-10-27', ''),
(7, 'Accounting Staff', '2019-10-27', ''),
(8, 'President', '2019-10-27', ''),
(9, 'Vice President', '2019-10-27', ''),
(10, 'Purchaser', '2019-10-27', ''),
(11, 'Warehouse Man', '2019-10-27', ''),
(12, 'Biling And Collection Staff', '2019-10-27', ''),
(13, 'Quantifier', '2019-10-27', ''),
(14, 'Sales Man', '2019-10-27', ''),
(15, 'Auditor', '2019-10-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `encoded_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role_name`, `date_added`, `encoded_by`) VALUES
(1, 'Developer', '2019-09-30', ''),
(9, 'Owner', '2019-10-03', ''),
(12, 'Administrator', '2019-10-03', ''),
(19, 'Staff', '2019-10-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `encoded_by` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `branch_id`, `position_id`, `fname`, `lname`, `username`, `password`, `role`, `image`, `date_added`, `status`, `encoded_by`) VALUES
(68, 0, 0, 'Ginery', 'Songaling', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '', '2019-10-03', 'Active', ''),
(89, 0, 0, 'Miljan', 'Jonota', 'mj25', '827ccb0eea8a706c4c34a16891f84e7b', '9', '', '2019-10-03', 'Active', ''),
(90, 1, 5, 'Rosemarie', 'Canoy', 'usr_Rosemarie', '827ccb0eea8a706c4c34a16891f84e7b', '19', '', '2020-02-23', 'Inactive', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
