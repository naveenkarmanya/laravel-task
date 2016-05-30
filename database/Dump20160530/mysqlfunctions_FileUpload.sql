-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: mysqlfunctions
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `FileUpload`
--

DROP TABLE IF EXISTS `FileUpload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FileUpload` (
  `FileID` int(11) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(45) DEFAULT NULL,
  `FileType` varchar(45) DEFAULT NULL,
  `FileSize` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`FileID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FileUpload`
--

LOCK TABLES `FileUpload` WRITE;
/*!40000 ALTER TABLE `FileUpload` DISABLE KEYS */;
INSERT INTO `FileUpload` VALUES (1,'2.png','image/png','203125'),(2,'2.png','image/png','203125'),(3,'off.png','image/png','52088'),(4,'on1.png','image/png','88053'),(5,'on.png','image/png','20771'),(6,'canvas.png','image/png','421'),(7,'4.png','image/png','133931'),(8,'signlogo.png','image/png','282'),(9,'color.png','image/png','99'),(10,'image5.jpg','image/jpeg','87343'),(11,'image3.jpg','image/jpeg','479699'),(12,'image2.jpg','image/jpeg','407394'),(13,'images.jpeg','image/jpeg','5392'),(14,'image9.jpg','image/jpeg','28002'),(15,'image7.jpg','image/jpeg','81228'),(16,'image10.png','image/png','18062'),(17,'image10.png','image/png','18062'),(18,'image10.png','image/png','18062'),(19,'image10.png','image/png','18062'),(20,'image8.jpg','image/jpeg','887628'),(21,'image1.jpg','image/jpeg','355567'),(22,'image10.png','image/png','18062');
/*!40000 ALTER TABLE `FileUpload` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-30 11:45:20
