# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: portfolio
# Generation Time: 2019-03-15 16:39:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paragraph` varchar(500) NOT NULL DEFAULT '',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `paragraph`, `deleted`)
VALUES
	(1,'My name is Richard and I am aspiring to become a full stack developer. I am currently studying at the Mayden Academy in Bath and have been recently certified as a Scrum Master.',0),
	(2,'In addition to my growing web development skills, I have a Bachelor of Arts degree in Architecture and have been working as an Architectural Technician for the last 3 years. During that time I have acquired skills that are similar in nature to being a developer as well as soft skills that makes me an excellent addition to a team. In my free time, I enjoy photography, cooking and creating digital artworks using architectural software.',0);

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
