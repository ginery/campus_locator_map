# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.38-MariaDB)
# Database: cml
# Generation Time: 2021-02-02 08:18:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tbl_building
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_building`;

CREATE TABLE `tbl_building` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `building_name` varchar(50) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_building` WRITE;
/*!40000 ALTER TABLE `tbl_building` DISABLE KEYS */;

INSERT INTO `tbl_building` (`id`, `building_name`, `desc`)
VALUES
	(2,'Stgb Building','a');

/*!40000 ALTER TABLE `tbl_building` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_messages`;

CREATE TABLE `tbl_messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_subject` varchar(50) DEFAULT NULL,
  `msg_status` varchar(1) DEFAULT NULL,
  `msg_messages` text,
  `msg_date` date DEFAULT NULL,
  `msg_time` time DEFAULT NULL,
  `msg_to` varchar(25) DEFAULT NULL,
  `msg_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_messages` WRITE;
/*!40000 ALTER TABLE `tbl_messages` DISABLE KEYS */;

INSERT INTO `tbl_messages` (`msg_id`, `msg_subject`, `msg_status`, `msg_messages`, `msg_date`, `msg_time`, `msg_to`, `msg_user_id`)
VALUES
	(1,'test','S','this is a test','2021-01-01','19:07:05',NULL,NULL),
	(2,'test','S','a','2021-01-29','11:23:30','09152674300',68),
	(3,'test','S','a','2021-01-29','11:27:22','09152674300',68);

/*!40000 ALTER TABLE `tbl_messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_room
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_room`;

CREATE TABLE `tbl_room` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(50) DEFAULT NULL,
  `desc` varchar(50) DEFAULT NULL,
  `building_id` int(11) DEFAULT NULL,
  `distance_g1` float DEFAULT NULL,
  `distance_g2` float DEFAULT NULL,
  `no_steps_1` int(11) DEFAULT NULL,
  `no_steps_2` int(11) DEFAULT NULL,
  `no_stairs` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_room` WRITE;
/*!40000 ALTER TABLE `tbl_room` DISABLE KEYS */;

INSERT INTO `tbl_room` (`id`, `room_name`, `desc`, `building_id`, `distance_g1`, `distance_g2`, `no_steps_1`, `no_steps_2`, `no_stairs`)
VALUES
	(30,'rewqr','asffadsfa',1,4124,41234,43124,4312,4124),
	(31,'rewqr','asffadsfa',1,4124,41234,43124,4312,4124),
	(32,'$room_name','$desc',0,0,0,0,0,0),
	(33,'$room_name','$desc',0,0,0,0,0,0);

/*!40000 ALTER TABLE `tbl_room` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tbl_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `username`, `password`, `role`, `image`, `date_added`, `status`, `purpose`)
VALUES
	(68,'Lorem','Ipsum','admin','0cc175b9c0f1b6a831c399e269772661','1','','2019-10-03','Active',''),
	(101,'Happy','Mon','bb@gmsil.com','','3','','0000-00-00','Inactive','cashier'),
	(102,'vanessa','belleza','Bvt11200300','dbddb6317a673c5df571fbff7c997471','4','','0000-00-00','',''),
	(103,'aldion','vargas','aldionvargas','d0ef15f4765f786a928572bbab7f9456','4','','0000-00-00','Inactive',''),
	(104,'happy joy','montano','hj','1f28e49f34e2406fdb6d6158eebd793b','4','','0000-00-00','','');

/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
