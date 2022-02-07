-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ingles
CREATE DATABASE IF NOT EXISTS `ingles` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ingles`;

-- Volcando estructura para tabla ingles.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `register` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ingles.users: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `register`, `password`, `created_at`) VALUES
	(2, 'pepe', '', '$2y$10$oUt3Fa1lMRdL3uledTBP9e1VKKI7DjuknswUu7CS5AxHH6d5PXKay', '2021-03-11 05:54:41'),
	(4, 'admin', 'true', '$2y$10$HPvB2YTjKlEpd1DVhxS4NeZ19wXDnqKYm7xZGQlsR.1Rxf.jXD/gy', '2021-03-26 11:41:07'),
	(8, 'marvinero', '', '$2y$10$6ou1/l8sfvvKjfmoJd4oDe03mfUf3BotLXBEax.kubpfF5yph5Aey', '2021-03-25 22:06:53'),
	(9, 'janito', 'true', '$2y$10$kzmrFNxH1oxw81BnOIBN1OYfXKde5KoAcOdh678mIlMW6cdf1PrAa', '2021-03-25 22:18:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
