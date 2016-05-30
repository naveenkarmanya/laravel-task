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
-- Table structure for table `Logs`
--

DROP TABLE IF EXISTS `Logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Logs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(45) DEFAULT NULL,
  `BrowserDetails` varchar(255) DEFAULT NULL,
  `IPAddress` varchar(15) DEFAULT NULL,
  `TimeStamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `BrowserName` varchar(45) DEFAULT NULL,
  `BrowserPlateform` varchar(45) DEFAULT NULL,
  `BrowserVersion` varchar(45) DEFAULT NULL,
  `BrowserPattern` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Logs`
--

LOCK TABLES `Logs` WRITE;
/*!40000 ALTER TABLE `Logs` DISABLE KEYS */;
INSERT INTO `Logs` VALUES (1,'pawankumar.s@karmanya.co.in','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-27 13:31:03','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(2,'pawankumar.s@karmanya.co.in','{\"userAgent\":\"Mozilla\\/5.0 (X11; Ubuntu; Linux x86_64; rv:46.0) Gecko\\/20100101 Firefox\\/46.0\",\"name\":\"Mozilla Firefox\",\"version\":\"46.0\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Firefox|other)[\\/ ]+(?<version>[0-9.|a-zA-Z.]*)#\"}','192.168.100.1','2016-05-27 13:57:28','Mozilla Firefox','linux','46.0','#(?<browser>Version|Firefox|other)[/ ]+(?<ver'),(3,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-28 14:29:10','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(4,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-28 15:24:55','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(5,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-28 16:05:02','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(6,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-28 16:19:09','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(7,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-29 02:43:22','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(8,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-29 13:27:56','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(9,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/50.0.2661.102 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"50.0.2661.102\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[','192.168.100.1','2016-05-29 13:30:02','Google Chrome','linux','50.0.2661.102','#(?<browser>Version|Chrome|other)[/ ]+(?<vers'),(10,'navvi84@gmail.com','{\"userAgent\":\"Mozilla\\/5.0 (X11; Linux x86_64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/51.0.2704.63 Safari\\/537.36\",\"name\":\"Google Chrome\",\"version\":\"51.0.2704.63\",\"platform\":\"linux\",\"pattern\":\"#(?<browser>Version|Chrome|other)[\\/ ]+(?<version>[0-','192.168.100.1','2016-05-30 06:09:33','Google Chrome','linux','51.0.2704.63','#(?<browser>Version|Chrome|other)[/ ]+(?<vers');
/*!40000 ALTER TABLE `Logs` ENABLE KEYS */;
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
