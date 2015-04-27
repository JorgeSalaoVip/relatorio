CREATE DATABASE  IF NOT EXISTS `relatorio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `relatorio`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: relatorio
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `relatorios`
--

DROP TABLE IF EXISTS `relatorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relatorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `QA` varchar(40) DEFAULT NULL,
  `QB` varchar(20) DEFAULT NULL,
  `QC` varchar(20) DEFAULT NULL,
  `QD` varchar(20) DEFAULT NULL,
  `QE` varchar(40) DEFAULT NULL,
  `outro` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relatorios`
--

LOCK TABLES `relatorios` WRITE;
/*!40000 ALTER TABLE `relatorios` DISABLE KEYS */;
INSERT INTO `relatorios` VALUES (1,2,'A2A3A7','B1','7','2','E3E5','legal'),(2,3,'A2,A3,A7','B1','7','2','E3,E5','legal'),(3,4,'A3,A6,A7','B3','4','1','E2,E6','apenas um teste'),(4,5,'A2,A4','B2','7','1','E4,E5,E6,E',''),(5,6,'A2,A6','B1','8','2','E2,E3,E4',''),(6,7,'A2,A3','B1','1','2','E1,E3',''),(7,8,'A2','B2','4','2','E3,E5',''),(8,9,'A2,A3','B2','5','1','E1,E2,E3,E6,E7',''),(9,10,'A7','B3','5','1','E1,E2,E3,E6,E7',''),(10,11,'A7','B3','5','1','E9','');
/*!40000 ALTER TABLE `relatorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Jorge','jorge@salaovip.com.br','(11) 9287-23872'),(2,'July','jorge@salaovip.com.br','(11) 9993-23222'),(3,'July','jorge@salaovip.com.br','(11) 9993-23222'),(4,'Adriano','jorge@salaovip.com.br','(11) 9383-83838'),(5,'Severino','jorge@salaovip.com.br','(11) 8348-7534'),(6,'Wesleywords','jorge@salaovip.com.br','(11) 9383-83823'),(7,'dsgffdg','jorge@salaovip.com.br','(34) 2342-34234'),(8,'Um cara do teste','jorge@salaovip.com.br','(11) 9383-83487'),(9,'Fernanda','fernanda.greggio@gmail.com','(11) 9947-27470'),(10,'Fernanda','fernanda.gregg@mail.com','(11) 9947-27470'),(11,'victor','victor@wiklive.com.br','(11) 1111-11111');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-27 17:27:27
