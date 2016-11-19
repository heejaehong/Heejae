-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: laravelproject
-- ------------------------------------------------------
-- Server version	5.7.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `images_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `href` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `button2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `href2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `beauty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,6,'ut','Ut est aspernatur excepturi error deleniti ut omnis id velit fuga vel ullam id.','slider3.jpg','OUR SERVICES',NULL,'2015-07-28 13:15:56','2015-01-28 00:34:07','header','GET A QUOTE',NULL,NULL),(2,4,'temporibus','Facere velit est in tempora delectus voluptas corporis asperiores neque.','statementV4.jpg',NULL,NULL,'2015-02-14 22:55:33','2015-09-17 17:03:07','workingwith','GET A QUOTE',NULL,NULL),(3,1,'ut','Esse nobis culpa et soluta quisquam delectus ut illum quia.','40ConstructionLogos_10.jpg',NULL,NULL,'2015-01-22 00:53:29','2015-01-08 22:29:53','client',NULL,NULL,'client_contents_box_1'),(4,5,'est','Cum aut minus cupiditate et consequatur error beatae voluptas aut voluptates ea pariatur.','Blue-Oak-Construction-Logo-Design.png',NULL,NULL,'2015-01-26 04:12:34','2015-08-18 04:08:12','client',NULL,NULL,'client_contents_box_2'),(5,2,'explicabo','Repudiandae sint et omnis necessitatibus amet et ad officiis in placeat velit laborum.','crew.jpg',NULL,NULL,'2015-05-20 19:10:06','2015-05-15 02:05:01','client',NULL,NULL,'client_contents_box_3'),(6,6,'assumenda','Minus molestiae dolor delectus voluptatum incidunt libero nemo ut est tenetur omnis et.','hammer.jpg',NULL,NULL,'2015-10-18 17:07:38','2015-01-09 21:01:53','client',NULL,NULL,'client_contents_box_4'),(7,5,'aut','Officia ipsam odio veniam eaque et est laboriosam.','jackhammer.jpg',NULL,NULL,'2015-10-28 19:17:36','2015-08-21 23:19:53','client',NULL,NULL,'client_contents_box_5'),(8,5,'velit','Est earum quibusdam iusto et qui eius cumque.','progressive.jpg',NULL,NULL,'2015-07-10 11:50:49','2015-02-18 14:49:19','client',NULL,NULL,NULL),(9,4,'vitae','Commodi natus vitae repellat quia omnis commodi voluptatem laudantium quisquam numquam.',NULL,NULL,NULL,'2014-12-06 13:40:39','2015-11-14 00:03:08',NULL,NULL,NULL,NULL),(10,4,'qui','Necessitatibus nihil eligendi corporis magnam dolores provident eum.',NULL,NULL,NULL,'2015-03-28 08:47:22','2015-08-12 17:25:30',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-19 21:24:07
