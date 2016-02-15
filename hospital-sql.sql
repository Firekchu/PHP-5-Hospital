-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for hospital
CREATE DATABASE IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hospital`;


-- Dumping structure for table hospital.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Dumping data for table hospital.clients: ~3 rows (approximately)
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `client`) VALUES
	(11, 'Satan'),
	(12, 'Hagrid'),
	(17, 'Dank Vader');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;


-- Dumping structure for table hospital.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `status` text,
  `client` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table hospital.patient: ~5 rows (approximately)
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` (`id`, `name`, `gender`, `species`, `status`, `client`) VALUES
	(1, 'Bobbie', 'male', 'Dog', 'Fever, doesn\'t eat, barks too much', 'Hagrid'),
	(2, 'Minoes', 'female', 'Cat', 'Fat', 'Satan'),
	(3, 'Kees', 'male', 'Dog', 'Eats too much, vomits', 'Dank Vader'),
	(5, 'Aquaman', 'female', 'Snake', 'Dried up', 'Dank Vader'),
	(6, 'Harry', 'male', 'Hamster', 'Casts magic, can\'t pronounce leviosaaaahhhh', 'Hagrid');
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;


-- Dumping structure for table hospital.species
CREATE TABLE IF NOT EXISTS `species` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `species` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table hospital.species: ~4 rows (approximately)
/*!40000 ALTER TABLE `species` DISABLE KEYS */;
INSERT INTO `species` (`id`, `species`) VALUES
	(11, 'Dog'),
	(12, 'Cat'),
	(13, 'Snake'),
	(14, 'Hamster');
/*!40000 ALTER TABLE `species` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
