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
-- Table structure for table `AdminLTE`
--

DROP TABLE IF EXISTS `AdminLTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AdminLTE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `State` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `AccountNumber` varchar(45) DEFAULT NULL,
  `Socialite_ID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AdminLTE`
--

LOCK TABLES `AdminLTE` WRITE;
/*!40000 ALTER TABLE `AdminLTE` DISABLE KEYS */;
INSERT INTO `AdminLTE` VALUES (1,'Naveen Kumar Goud',NULL,NULL,NULL,NULL,'naveen.goud@karmanya.co.in','7bf4932395e53962067ef9b0180b2bf2',NULL,'110715580093127055274'),(2,'Naveen Goud',NULL,NULL,NULL,NULL,'navvi84.ng@gmail.com','7bf4932395e53962067ef9b0180b2bf2',NULL,'1007785395995715'),(3,'pawan','Sangareddy','hyderabad','telangana','(957)394-3029','pawankumar.s@karmanya.co.in','7bf4932395e53962067ef9b0180b2bf2','b62b7a78db0d701722d492d992ebb163',NULL),(4,'pawan','H.No:-4-8,hyderabad','hyderabad','telangana','9545654565','navvi84@gmail.com','87d1e91719a937c2491bfd580181e9a8','72b66b213d33040c28ceb0c47ccc140c',NULL);
/*!40000 ALTER TABLE `AdminLTE` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-06 19:13:48
