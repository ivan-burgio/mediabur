CREATE DATABASE  IF NOT EXISTS `mediabur` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mediabur`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: mediabur
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `analisis`
--

DROP TABLE IF EXISTS `analisis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `analisis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activo` int DEFAULT '0',
  `texto` longtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analisis`
--

LOCK TABLES `analisis` WRITE;
/*!40000 ALTER TABLE `analisis` DISABLE KEYS */;
/*!40000 ALTER TABLE `analisis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articulos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activo` int DEFAULT '0',
  `texto` longtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guias`
--

DROP TABLE IF EXISTS `guias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activo` int DEFAULT '0',
  `texto` longtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guias`
--

LOCK TABLES `guias` WRITE;
/*!40000 ALTER TABLE `guias` DISABLE KEYS */;
/*!40000 ALTER TABLE `guias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activo` int DEFAULT '0',
  `texto` longtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `todo`
--

DROP TABLE IF EXISTS `todo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `todo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_publicacion` int DEFAULT NULL,
  `titulo_publicacion` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo_publicacion` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `categoria_publicacion` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `activo_publicacion` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `todo`
--

LOCK TABLES `todo` WRITE;
/*!40000 ALTER TABLE `todo` DISABLE KEYS */;
/*!40000 ALTER TABLE `todo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@ivan-burgio.com','$2y$10$oBGA57U1X5MkZHSWocxbEePd/aTrkiXkumhZetLbN2NThtrrBaRd6','Ivan Burgio','0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-19 11:21:57
