-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pap
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `ementas`
--

DROP TABLE IF EXISTS `ementas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ementas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Sopa` varchar(75) NOT NULL,
  `Prato` varchar(75) NOT NULL,
  `Sobremesa` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ementas`
--

LOCK TABLES `ementas` WRITE;
/*!40000 ALTER TABLE `ementas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ementas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refeicoes`
--

DROP TABLE IF EXISTS `refeicoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `refeicoes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ementa` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Hora` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKEmenta` (`Ementa`),
  CONSTRAINT `FKEmenta` FOREIGN KEY (`Ementa`) REFERENCES `ementas` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refeicoes`
--

LOCK TABLES `refeicoes` WRITE;
/*!40000 ALTER TABLE `refeicoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `refeicoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `ID` int(11) DEFAULT NULL,
  `Cliente` int(11) NOT NULL,
  `Refeicao` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Hora` varchar(5) NOT NULL,
  `Confirmar` int(11) NOT NULL,
  KEY `FKRefeicao` (`Refeicao`),
  KEY `FKCliente` (`Cliente`),
  CONSTRAINT `FKCliente` FOREIGN KEY (`Cliente`) REFERENCES `utilizadores` (`ID`),
  CONSTRAINT `FKRefeicao` FOREIGN KEY (`Refeicao`) REFERENCES `refeicoes` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_utilizador`
--

DROP TABLE IF EXISTS `tipo_utilizador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_utilizador` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Designacao` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_utilizador`
--

LOCK TABLES `tipo_utilizador` WRITE;
/*!40000 ALTER TABLE `tipo_utilizador` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_utilizador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilizadores` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TipoUtilizador` int(11) NOT NULL,
  `Nome` varchar(75) NOT NULL,
  `Telefone` int(9) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Passe` varchar(250) NOT NULL,
  `Ativo` int(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TipoUtilizador` (`TipoUtilizador`),
  CONSTRAINT `utilizadores_ibfk_1` FOREIGN KEY (`TipoUtilizador`) REFERENCES `tipo_utilizador` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilizadores`
--

LOCK TABLES `utilizadores` WRITE;
/*!40000 ALTER TABLE `utilizadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilizadores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-27  9:27:27
