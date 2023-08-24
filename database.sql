-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: srv-pleskdb50.ps.kz    Database: akkokz_battery
-- ------------------------------------------------------
-- Server version	10.6.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `batteries`
--

DROP TABLE IF EXISTS `batteries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `batteries` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `discount_price` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `batteries`
--

LOCK TABLES `batteries` WRITE;
/*!40000 ALTER TABLE `batteries` DISABLE KEYS */;
INSERT INTO `batteries` VALUES (30,'Next 190','90000','8adc611dcad4cffc7fe2a8321e8c03e5 (1).jpg','1250','Казахстан ','kazakhstan-flag-png-large.png','1 год',72000),(31,'Inci aku 72','72000','inci72.jpg','700','Турция','turkey.png','3 года',65000),(34,'BARS 100','54000','bars 100 jis.jpg','800','Казахстан ','kazakhstan-flag-png-large.png','1 год',46000),(38,'Inci aku 100','94000','inci100.jpg','760','Турция','kazakhstan-flag-png-large.png','3 года',86000),(39,'Inci aku 60','65000','inci60.jpg','540','Турция','turkey.png','3 года',59000),(40,'NEXT 60','35000','next60.jpg','530','Казахстан ','kazakhstan-flag-png-large.png','1 год',29000),(41,'BARS 75','40000','bars75.jpg','650','Казахстан ','kazakhstan-flag-png-large.png','1 год',33000),(42,'BARS 75','49000','bars75 jis.jpg','650','Казахстан ','kazakhstan-flag-png-large.png','1 год',42000),(43,'Racer 60','30000','racer 60.jpg','500','Казахстан ','kazakhstan-flag-png-large.png','1 год',24000),(44,'VARTA 70','76000','varta70.jpg','630','Чехия','cz.png','3 года',69000),(46,'CRONA 60','30000','WhatsApp Image 2022-09-04 at 23.28.16 (7).jpeg','500','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',24000),(47,'BARS 190','90000','bars190.jpg','1250','Казахстан ','kazakhstan-flag-png-large.png','1 год',72000),(48,'CRONA 90','47000','WhatsApp Image 2022-09-04 at 23.43.22.jpeg','700','Казахстан','kazakhstan-flag-png-large.png','1 год',39000),(49,'BARS 190','90000','bars190 eu.jpg','1250','Казахстан ','kazakhstan-flag-png-large.png','1 год',72000),(50,'NEXT 75','40000','WhatsApp Image 2022-09-04 at 23.43.40.jpeg','650','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',33000),(51,'NEXT 100','54000','WhatsApp Image 2022-09-04 at 23.43.48.jpeg','800','Казахстан','kazakhstan-flag-png-large.png','1 год',46000),(52,'DETA 95 AGM','157000','deta-dk950-95ah-microhybrid-agm-battery.jpg','850','Германия','Germany-flag.jpg','3 года',149000),(53,'NEXT 75','49000','30b5e2f9c91ec12d0a803718ce51930e.png.jpg','640','Казахстан','kazakhstan-flag-png-large.png','1 год',42000),(55,'VARTA 70 AGM','127000','WhatsApp Image 2022-09-04 at 23.44.24.jpeg','650','Чехия ','WhatsApp Image 2022-09-04 at 23.28.16 (9).jpeg','3 год',120000),(56,'VARTA 95','92000','WhatsApp Image 2022-09-04 at 23.44.30.jpeg','830','Чехия ','WhatsApp Image 2022-09-04 at 23.28.16 (9).jpeg','3 год',84000),(57,'NEXT 230','102000','WhatsApp Image 2022-09-04 at 23.44.42.jpeg','1300','Казахстан','kazakhstan-flag-png-large.png','1 год',82000),(58,'BARS 50','30000','WhatsApp Image 2022-09-05 at 00.03.44.jpeg','450','Казахстан','kazakhstan-flag-png-large.png','1 год',27000),(59,'BARS 140','71000','WhatsApp Image 2022-09-05 at 00.03.44 (1).jpeg','920','Казахстан','kazakhstan-flag-png-large.png','1 год',59000),(60,'VARTA 72','75000','WhatsApp Image 2022-09-05 at 00.03.45.jpeg','650','Чехия ','WhatsApp Image 2022-09-04 at 23.28.16 (9).jpeg','3 год',68000),(61,'VARTA 12','35000','WhatsApp Image 2022-09-05 at 00.03.32 (18).jpeg','215','Чехия','WhatsApp Image 2022-09-04 at 23.28.16 (9).jpeg','3 года',33000),(62,'BARS 132','68000','WhatsApp Image 2022-09-05 at 00.03.45 (1).jpeg','890','Казахстан','kazakhstan-flag-png-large.png','1 год',56000),(63,'VARTA 60','70000','varta60.jpg','540','Чехия','kazakhstan-flag-png-large.png','3 года',64000),(64,'NEXT 132','66000','WhatsApp Image 2022-09-05 at 00.03.45 (2).jpeg','890','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',54000),(65,'Racer 132','66000','WhatsApp Image 2022-09-05 at 00.03.45 (3).jpeg','820','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',54000),(68,'Teyko 50','26000','WhatsApp Image 2022-09-05 at 00.03.45 (6).jpeg','450','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','2 года',24000),(70,'VARTA 18','72000','WhatsApp Image 2022-09-05 at 00.03.45 (8).jpeg','250','Чехия ','WhatsApp Image 2022-09-04 at 23.28.16 (9).jpeg','3 год',70000),(71,'Racer 132','66000','WhatsApp Image 2022-09-05 at 00.03.45 (9).jpeg','820','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',54000),(73,'BARS 60','35000','WhatsApp Image 2022-09-05 at 00.03.45 (11).jpeg','530','Казахстан','kazakhstan-flag-png-large.png','1 год',29000),(74,'BARS 100','48000','WhatsApp Image 2022-09-05 at 00.03.45 (12).jpeg','800','Казахстан','1624391660_7-phonoteka_org-p-flag-kazakhstana-oboi-na-telefon-krasivo-13.png','1 год',40000),(77,'VARTA 74','76000','WhatsApp Image 2022-09-05 at 00.03.45 (13).jpeg','680','Чехия ','kazakhstan-flag-png-large.png','3 год',69000),(78,'REX 7','11000','WhatsApp Image 2022-09-05 at 00.03.45 (14).jpeg','190','Тайвань','Тайвань.jpg','6 месяцeв',10000),(79,'REX 18','20000','WhatsApp Image 2022-09-05 at 00.03.45 (5).jpeg','200','Тайвань','Тайвань.jpg','6 месяцeв',18000),(80,'VARTA 100','96000','WhatsApp Image 2022-09-05 at 00.03.45 (15).jpeg','830','Чехия ','kazakhstan-flag-png-large.png','3 год',88000);
/*!40000 ALTER TABLE `batteries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `add_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `battery` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (60,'Danial','87089683810','','','','2023-08-13 23:20:05',''),(61,'даниал','87089683810','','','','2023-08-15 23:14:56',''),(62,'Алексей','+77478573146','','','','2023-08-17 14:54:20',''),(63,'Даниал','87089683810','','','','2023-08-22 21:19:44','');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `old_price` decimal(10,0) DEFAULT NULL,
  `new_price` decimal(10,0) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'akb_center','$2y$10$Ak/ufctYAFYZXNyRNq3qKuwuUFheRt6cWF1EJA1rmOTL/AFFAtKpy');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'akkokz_battery'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-24 18:53:19
