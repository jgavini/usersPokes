-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: pokeball
-- ------------------------------------------------------
-- Server version	5.6.33

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (13,'Josh','Brown','josh@brown.com','rootroot','1990-03-17','2016-11-22 12:19:45','2016-11-22 12:19:45'),(14,'jun','k','jun@k.com','rootroot','1990-01-01','2016-11-22 12:24:53','2016-11-22 12:24:53'),(15,'Lorenzo','Z','lor@z.com','rootroot','9010-10-10','2016-11-22 12:25:14','2016-11-22 12:25:14'),(16,'Jay','Sub','jay@sub.com','rootroot','2011-11-11','2016-11-22 12:25:42','2016-11-22 12:25:42'),(17,'nina','b','nina@b.com','rootroot','1792-11-11','2016-11-22 12:47:07','2016-11-22 12:47:07'),(18,'Kelvin','L','kelvin@l.com','rootroot','2010-10-10','2016-11-22 12:49:24','2016-11-22 12:49:24'),(19,'nate','d','nate@d.com','rootroot','1987-05-18','2016-11-22 12:51:28','2016-11-22 12:51:28'),(20,'max','m','max@m.com','rootroot','1990-09-19','2016-11-22 12:54:24','2016-11-22 12:54:24'),(21,'danny','l','danny@l.com','rootroot','1989-10-09','2016-11-22 12:55:16','2016-11-22 12:55:16'),(22,'lawrence','not here','lawrence@nothere.com','rootroot','1950-07-18','2016-11-22 13:18:28','2016-11-22 13:18:28'),(23,'Darby','D','Darby@d.com','rootroot','1989-11-23','2016-11-22 13:20:21','2016-11-22 13:20:21'),(24,'Trinity','N','trin@n.com','rootroot','1980-12-17','2016-11-22 13:22:55','2016-11-22 13:22:55'),(25,'someone','else','someone@else.com','rootroot','2010-10-10','2016-11-22 13:27:25','2016-11-22 13:27:25'),(26,'Another','One','another@one.com','rootroot','2012-10-11','2016-11-22 13:28:22','2016-11-22 13:28:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-22 14:04:36
