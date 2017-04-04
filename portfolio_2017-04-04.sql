# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.16)
# Database: portfolio
# Generation Time: 2017-04-04 11:35:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table descs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `descs`;

CREATE TABLE `descs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `home_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `descs_user_id_foreign` (`user_id`),
  CONSTRAINT `descs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `descs` WRITE;
/*!40000 ALTER TABLE `descs` DISABLE KEYS */;

INSERT INTO `descs` (`id`, `user_id`, `home_desc`, `about_desc`, `contact_desc`, `created_at`, `updated_at`)
VALUES
	(5,6,'Hello there! I\'m Heejae Heidi Hong Currently Web designer & developer  in Auckland, New Zealand.','I\'m a web developer who aims to combine the beauty of design with the logical perfection of coding. Training myself every day and pushing my own limits to discover new ways of creating a great experience for the users.','Estimates, questions, information? Don\'t hesitate to contact me.',NULL,'2017-03-12 04:10:21');

/*!40000 ALTER TABLE `descs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_work_id_foreign` (`work_id`),
  CONSTRAINT `images_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `work_id`, `slug`, `created_at`, `updated_at`)
VALUES
	(2,1,'img/work.jpg',NULL,NULL),
	(3,2,'img/work.jpg',NULL,NULL);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_02_09_074844_create_navs_table',1),
	(4,'2017_02_09_074916_create_profiles_table',1),
	(5,'2017_02_09_074950_create_works_table',1),
	(6,'2017_02_09_075001_create_images_table',1),
	(7,'2017_02_09_075010_create_skills_table',1),
	(8,'2017_02_09_075021_create_descs_table',1),
	(9,'2017_02_11_055043_add_position_to_users_table',2),
	(10,'2017_03_18_002820_create_slideimages_table',3);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table navs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `navs`;

CREATE TABLE `navs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('unpublished','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `navs` WRITE;
/*!40000 ALTER TABLE `navs` DISABLE KEYS */;

INSERT INTO `navs` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Home','2','published',NULL,'2017-03-12 05:12:39'),
	(2,'About','2','published',NULL,'2017-03-12 05:12:44'),
	(3,'Work','','published',NULL,NULL),
	(4,'Contact','','published',NULL,NULL);

/*!40000 ALTER TABLE `navs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table profiles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;

INSERT INTO `profiles` (`id`, `user_id`, `phone`, `address`, `facebook`, `twitter`, `linkedin`, `created_at`, `updated_at`)
VALUES
	(1,6,'02104099958','Auckland','bong','bong','bong',NULL,'2017-02-24 22:39:50'),
	(2,4,'0219997777','Sunnynook','www.facebook.com/Heidi','www.twitter.com/Heidi','www.linkedin.com/Heidi',NULL,NULL);

/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table skills
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;

INSERT INTO `skills` (`id`, `title`, `description`, `percent`, `created_at`, `updated_at`)
VALUES
	(1,'HTML5 & CSS3','Responsive web design & development with bootstrap, sass, html5 and css3','90',NULL,'2017-02-25 22:27:53'),
	(2,'Javascript','Javascript & jQuery ','68',NULL,NULL),
	(5,'Laravel','PHP framework Laravel','60','2017-03-01 03:49:12','2017-03-01 03:49:12'),
	(6,'Vue.js & React.js','Javascript framework','40',NULL,NULL);

/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table slideimages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `slideimages`;

CREATE TABLE `slideimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `work_id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `slideimages_work_id_foreign` (`work_id`),
  CONSTRAINT `slideimages_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `slideimages` WRITE;
/*!40000 ALTER TABLE `slideimages` DISABLE KEYS */;

INSERT INTO `slideimages` (`id`, `work_id`, `slug`, `created_at`, `updated_at`)
VALUES
	(3,1,'busbee_detail_1.jpg','2017-03-20 01:30:50','2017-03-20 01:30:50'),
	(8,2,'Jaytronics_home.png',NULL,NULL),
	(11,2,'Jaytronics_camera.png',NULL,NULL),
	(12,2,'Jaytronics_headphone.png',NULL,NULL),
	(13,2,'Jaytronics_carspeaker.png',NULL,NULL),
	(14,2,'Jaytronics_keyboard.png',NULL,NULL),
	(25,4,'website_Home.jpg',NULL,NULL),
	(26,4,'website_About.jpg',NULL,NULL),
	(27,4,'website_Contact.jpg',NULL,NULL),
	(28,4,'website_Portfolio.jpg',NULL,NULL),
	(29,1,'busbee_detail_2.jpg',NULL,NULL),
	(30,1,'busbee_detail_3.jpg',NULL,NULL);

/*!40000 ALTER TABLE `slideimages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `position`)
VALUES
	(3,'test','test@gmail.com','1234',NULL,NULL,NULL,'user'),
	(4,'hi','','1234',NULL,NULL,NULL,'user'),
	(5,'Heejae Heidi Hong','hi@gmail.com','$2y$10$26e3efFumR7ZjOhWKPyMA.0fi2VcSNFctO5Rn7Xva/CO5RKb8iORC','RUOpRGcnOo7OEtPB5kWTEihRsBs5n0hYpIR8oZcqGtMQQYTMVdoDnjkeNC2C','2017-02-12 01:54:02','2017-02-12 01:54:02','user'),
	(6,'Heejae Heidi Hong','Heidi@gmail.com','$2y$10$o99ZVZjVUECbGBIFBjd8QOYNhipVtBBKalJF0krv.o1NN0fAkULSi','eWmhlOoJZ8c5ZF0mFq8NPqAXwhj7kysViU99bOzXY4rUNFqfivOnpGap2aan','2017-02-12 02:05:52','2017-02-12 02:05:52','admin');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table works
# ------------------------------------------------------------

DROP TABLE IF EXISTS `works`;

CREATE TABLE `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order` int(11) NOT NULL DEFAULT '7',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('complete','processing') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'complete',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `works` WRITE;
/*!40000 ALTER TABLE `works` DISABLE KEYS */;

INSERT INTO `works` (`id`, `order`, `title`, `description`, `slug`, `title_image`, `status`, `created_at`, `updated_at`, `link`)
VALUES
	(1,1,'BusBee(Real time NZ bus web app)','Using HTML5, CSS3, javascript and jQuery, React.js and laravel','','busbee.jpg','complete',NULL,NULL,'https://github.com/leefecu/busbee-fe'),
	(2,2,'Jaytronics(Electronic shop web page)','Using opencart','','Jaytronics.png','complete',NULL,NULL,'https://github.com/heejaehong/Heejae/tree/master/Opencart'),
	(4,3,'Personal portfolio web site','Using HTML5/CSS3/Javascript','','website.jpg','complete',NULL,NULL,'https://github.com/heejaehong/Heejae/tree/master/personal_portfolio');

/*!40000 ALTER TABLE `works` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
