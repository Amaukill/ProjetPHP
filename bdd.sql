-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour projet
CREATE DATABASE IF NOT EXISTS `projet` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `projet`;

-- Listage de la structure de la table projet. article
CREATE TABLE IF NOT EXISTS `article` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_categorie_id_foreign` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet.article : ~9 rows (environ)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `name`, `price`, `description`, `categorie_id`) VALUES
	(1, 'Ryzen 5 5600X', '350', 'Le Ryzen 5 5600X est un processeur', 1),
	(2, 'Ryzen 5 5800X', '450', 'Le Ryzen 5 5800X est un processeur', 1),
	(3, 'RTX 3070', '800', 'La RTX 3070 est une carte graphique', 2),
	(4, 'RTX 3080', '1500', 'La RTX 3080 est une carte graphique', 2),
	(5, 'GTX 730', '100', 'La GTX 730 est une carte graphique', 2),
	(6, 'MSI B450', '100', 'La MSI B450 est une carte mère', 3),
	(7, 'WD 1To', '50', 'Un disque dur Western Digital 1To', 4),
	(8, 'Samsung 970 EVO ', '100', 'Le Samsung 970 EVO est un SSD', 5),
	(9, 'HyperX 2x16Go', '120', '2x16Go de ram de la marque HyperX', 6),
	(11, 'Intel I7 9400k', '150', 'processeur efficace', 1);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Listage de la structure de la table projet. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table projet.categorie : ~6 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `name`) VALUES
	(1, 'Processeur'),
	(2, 'Carte graphique'),
	(3, 'Carte mère'),
	(4, 'HDD'),
	(5, 'SSD'),
	(6, 'RAM');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
