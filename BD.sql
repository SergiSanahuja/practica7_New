-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para practica7
DROP DATABASE IF EXISTS `practica7`;
CREATE DATABASE IF NOT EXISTS `practica7` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `practica7`;

-- Volcando estructura para tabla practica7.articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcio` varchar(50) DEFAULT NULL,
  `usuari` varchar(50) DEFAULT NULL,
  `Titul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla practica7.articles: ~7 rows (aproximadamente)
REPLACE INTO `articles` (`id`, `descripcio`, `usuari`, `Titul`) VALUES
	(3, 'tal', '2', 'Loro'),
	(4, 'Yo soy tu padre', '3', 'Armadillo'),
	(5, 'No lo eres', '3', 'Suricato'),
	(6, 'que si', '3', 'Adri'),
	(7, 'tt', '1', 'KLK'),
	(8, '123', '2', '134'),
	(9, 'Le encanta romper cosas', '1', 'Gato');

-- Volcando estructura para tabla practica7.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla practica7.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.migrations: ~4 rows (aproximadamente)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- Volcando estructura para tabla practica7.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.password_reset_tokens: ~1 rows (aproximadamente)
REPLACE INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('s.sanahuja@sapalomera.cat', '$2y$12$f3RJFqMGt8p6nkHP4A4WIe3lzUovbrQzyb1EAgl20BL/bdvBa9wny', '2024-03-20 13:48:08');

-- Volcando estructura para tabla practica7.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla practica7.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla practica7.users: ~5 rows (aproximadamente)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'sergi7', 'sergi@gmail.com', NULL, '$2y$12$ISeCNmROu2kiEgBhKe1O4OClzq6eLrJhMMwtXnaQ/MaCApPLIfheW', 'o08VeUWiKR1lXHlGoqCcRL7yEiM30cm3KyXmDAjzCziz48V2Wdhnx6FY2szp', '2024-03-06 13:34:35', '2024-03-22 14:50:02'),
	(2, 'adri', 'adri@gmail.com', NULL, '$2y$12$L80uweDQN/3fwiZuOUxY0OJzS32JPUdWDpovZwMXw1hD6yVlGMKam', NULL, '2024-03-06 13:41:04', '2024-04-02 14:33:22'),
	(3, 'Abel', 'abel@gmail.com', NULL, '$2y$12$BirOXj1f5kqpNuF7xL2b7.linx056/0T/1tD0Xmd4PhK61zhepMJW', NULL, '2024-03-08 13:37:08', '2024-03-08 13:37:08'),
	(4, 'sre', 's.sanahuja@sapalomera.cat', NULL, '$2y$12$nn5HWUn.uZDvhfXOx10qpeV62CeKtYzIkFj9Vaq.0PN9g86U5nBOC', NULL, '2024-03-20 13:37:46', '2024-03-20 13:37:46'),
	(5, 'pedri', 'pedri@gmail.com', NULL, '$2y$12$sBEv6PR46QeAa4qZQR2DHOt6IOZGAwuxg848Uqbc.8O548SktbwLO', NULL, '2024-03-24 11:53:08', '2024-03-24 11:53:08');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
