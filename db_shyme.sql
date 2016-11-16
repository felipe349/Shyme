CREATE DATABASE  IF NOT EXISTS `db_shyme` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_shyme`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_shyme
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB

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
-- Table structure for table `administrador_grupo`
--

DROP TABLE IF EXISTS `administrador_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador_grupo` (
  `cd_administrador` int(11) NOT NULL,
  `cd_grupo` int(10) unsigned NOT NULL,
  `dt_adm_grupo` date DEFAULT NULL,
  KEY `FK_CD_GRUPOADM` (`cd_grupo`),
  CONSTRAINT `FK_CD_GRUPOADM` FOREIGN KEY (`cd_grupo`) REFERENCES `grupo` (`cd_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador_grupo`
--

LOCK TABLES `administrador_grupo` WRITE;
/*!40000 ALTER TABLE `administrador_grupo` DISABLE KEYS */;
INSERT INTO `administrador_grupo` VALUES (10,5,'2016-09-21'),(22,6,'2016-09-21'),(1,7,'2016-09-21'),(15,8,'2016-09-21'),(40,9,'2016-09-21'),(37,10,'2016-09-21');
/*!40000 ALTER TABLE `administrador_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno` (
  `cd_matricula` int(11) NOT NULL,
  `nm_aluno` varchar(50) NOT NULL,
  `cd_rg_aluno` varchar(15) NOT NULL,
  `perfil_aluno` varchar(50) DEFAULT NULL,
  `img_aluno` varchar(300) DEFAULT NULL,
  `vl_moeda` int(10) unsigned DEFAULT NULL,
  `curso_aluno` varchar(45) DEFAULT NULL,
  `senha_aluno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES (1,'JESSE PINKMAN','798465123','PINK5123','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(2,'GUSTAVO FRING','987456321','FRING6321','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(3,'SON GOKU','798465132','GOKU5132','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(4,'SON GOHAN','976431258','GOHAN3258','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(5,'VEGETA BRAVO','134679852','VEGETA9852','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(6,'SEIYA PEGASU','731945628','PEGASU5628','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(7,'SHYRIU DRAGAO','513469870','DRAGAO9870','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(8,'HYOGA CISNEY','852134679','CISNEY4679','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(9,'SHUN ANDROMEDA','987645312','ANDROMEDA5312','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(10,'IKKI FENIX','978645312','FENIX5312','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(11,'AIORIA LEAO','987645321','LEAO5321','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(12,'MU ARIES','978645321','ARIES5321','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(13,'ALDEBARAN TOURO','132465798','TOURO5798','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(14,'SAGA GEMEOS','123456798','GEMEOS6798','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(15,'MASCARA CANCER','852741963','CANCER1963','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',80,NULL,'1'),(16,'SHAKA VIRGEM','7419963852','VIRGEM3852','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(17,'DOHKO LIBRA','714825936','LIBRA5936','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(18,'MILO ESCORPIAO','174852963','MILO2963','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(19,'AIOROS SAGITARIO','84615732','SAGITARIO5732','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(20,'SHURA CAPRICORNIO','11112222','SHURA2222','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(21,'CAMUS AQUARIO','123445566','AQUARIO5566','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(22,'AFRODITE PEIXES','879556412','PEIXES6412','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(23,'BOB ESPONJA','8877994455','ESPONJA4455','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(24,'PATRICK ESTRELA','125463987','ESTRELA3987','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(25,'LULA MOLUSCO','7998554612','MOLUSCO4612','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(26,'SANDY BOCHECHAS','123448829','SANDY6789','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(27,'PAUL STANLEY','644558822','PAUL8822','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(28,'GENE SIMMONS','445239877','GENE9877','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(29,'PETER CRIS','993256788','PETER6788','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(30,'ACE FREHLEY','852113346','ACE3346','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(31,'ROSS GELLER','975213664','GELLER3664','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(32,'MONICA GELLER','799845612','GELLER5612','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(33,'PHEOBE BUFFAY','998877123','BUFFAY7123','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(34,'JOEY TRIBIANNI','88552213','JOEY2213','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(35,'CHANDLER BING','779944662','BING4662','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(36,'RACHEL GREEN','554467891','GREEN7891','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(37,'TED MOSBY','825461237','MOSBY1237','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(38,'MARSHAL ERIKSEN','44567789','MARSHAL7789','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(39,'ROBIN SCHERBATSKY','896654771','ROBIN4771','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(40,'LILY ALDRIN','887642331','LILY2331','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(41,'ROBIN SCHERBATSKY','896654771','ROBIN4771','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1'),(43,'WALTER WHITE','123456789','HEISENBERG','http://www.mascotarios.org/wp-content/uploads/2015/02/Rana-voladora.jpg',50,NULL,'1');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aluno_grupo`
--

DROP TABLE IF EXISTS `aluno_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno_grupo` (
  `cd_aluno_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `cd_matricula` int(11) NOT NULL,
  `cd_grupo` int(10) unsigned NOT NULL,
  `prioridade_grupo` tinyint(1) DEFAULT NULL,
  `ic_aluno_grupo` tinyint(1) NOT NULL DEFAULT '1',
  `adm_aluno_grupo` date DEFAULT NULL,
  PRIMARY KEY (`cd_aluno_grupo`),
  KEY `FK_CD_GRUPO` (`cd_grupo`),
  KEY `cd_matricula` (`cd_matricula`),
  CONSTRAINT `FK_CD_GRUPO` FOREIGN KEY (`cd_grupo`) REFERENCES `grupo` (`cd_grupo`),
  CONSTRAINT `FK_CD_MATRICULAGRU` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=577 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno_grupo`
--

LOCK TABLES `aluno_grupo` WRITE;
/*!40000 ALTER TABLE `aluno_grupo` DISABLE KEYS */;
INSERT INTO `aluno_grupo` VALUES (1,36,2,NULL,1,NULL),(299,1,1,1,1,NULL),(300,1,5,1,1,NULL),(301,1,7,1,1,'2016-11-06'),(302,1,6,0,1,NULL),(303,1,9,0,1,NULL),(304,1,10,0,1,NULL),(305,2,1,1,1,NULL),(306,2,5,1,1,NULL),(307,2,7,0,1,NULL),(308,2,6,1,1,NULL),(309,2,9,0,1,NULL),(310,2,10,0,1,NULL),(311,3,1,1,1,NULL),(312,3,5,0,1,NULL),(313,3,7,1,1,NULL),(314,3,6,0,1,NULL),(315,3,9,0,1,NULL),(316,3,10,1,1,NULL),(317,4,1,1,1,NULL),(318,4,5,1,1,NULL),(319,4,7,1,1,NULL),(320,4,6,0,1,NULL),(321,4,9,0,1,NULL),(322,4,10,0,1,NULL),(323,5,1,1,1,NULL),(324,5,5,1,1,NULL),(325,5,7,1,1,NULL),(326,5,6,0,1,NULL),(327,5,9,0,1,NULL),(328,5,10,0,1,NULL),(329,6,1,1,1,NULL),(330,6,5,0,1,NULL),(331,6,7,0,1,NULL),(332,6,6,0,1,NULL),(333,6,9,1,1,NULL),(334,6,10,1,1,NULL),(335,7,1,1,1,NULL),(336,7,5,1,1,NULL),(337,7,7,1,1,NULL),(338,7,6,0,1,NULL),(339,7,9,0,1,NULL),(340,7,10,0,1,NULL),(341,8,1,1,1,NULL),(342,8,5,1,1,NULL),(343,8,7,1,1,NULL),(344,8,6,0,1,NULL),(345,8,9,0,1,NULL),(346,8,10,0,1,NULL),(347,9,1,1,1,NULL),(348,9,5,1,1,NULL),(349,9,7,0,1,NULL),(350,9,6,0,1,NULL),(351,9,9,1,1,NULL),(352,9,10,0,1,NULL),(353,10,1,1,1,NULL),(354,10,5,0,1,'2016-11-06'),(355,10,7,1,1,NULL),(356,10,6,0,1,NULL),(357,10,9,1,1,'2016-11-06'),(358,10,10,0,1,NULL),(359,11,1,1,1,NULL),(360,11,5,0,1,NULL),(361,11,7,1,1,NULL),(362,11,6,0,1,NULL),(363,11,9,0,1,NULL),(364,11,10,1,1,NULL),(365,21,3,1,1,NULL),(366,21,5,0,1,NULL),(367,21,6,0,1,NULL),(368,21,9,1,1,NULL),(369,21,10,1,1,NULL),(370,22,3,1,1,NULL),(371,22,5,0,1,NULL),(372,22,6,0,1,'2016-11-06'),(373,22,9,1,1,NULL),(374,22,10,1,1,NULL),(375,23,3,1,1,NULL),(376,23,5,0,1,NULL),(377,23,6,0,1,NULL),(378,23,9,1,1,NULL),(379,23,10,1,1,NULL),(380,24,3,1,1,NULL),(381,24,5,0,1,NULL),(382,24,6,1,1,NULL),(383,24,9,0,1,NULL),(384,24,10,1,1,NULL),(385,25,3,1,1,NULL),(386,25,5,0,1,NULL),(387,25,6,1,1,NULL),(388,25,9,0,1,NULL),(389,25,10,1,1,NULL),(390,26,3,1,1,NULL),(391,26,5,1,1,NULL),(392,26,6,1,1,NULL),(393,26,9,0,1,NULL),(394,26,10,0,1,NULL),(395,27,3,1,1,NULL),(396,27,5,1,1,NULL),(397,27,6,1,1,NULL),(398,27,9,0,1,NULL),(399,27,10,0,1,NULL),(400,28,3,1,1,NULL),(401,28,5,0,1,NULL),(402,28,6,0,1,NULL),(403,28,9,1,1,NULL),(404,28,10,1,1,NULL),(405,29,3,1,1,NULL),(406,29,5,0,1,NULL),(407,29,6,0,1,NULL),(408,29,9,1,1,NULL),(409,29,10,1,1,NULL),(410,30,3,1,1,NULL),(411,30,5,0,1,NULL),(412,30,6,0,1,NULL),(413,30,9,1,1,NULL),(414,30,10,1,1,NULL),(415,31,3,1,1,NULL),(416,31,5,1,1,NULL),(417,31,6,0,1,NULL),(418,31,9,0,1,NULL),(419,31,10,1,1,NULL),(420,32,3,1,1,NULL),(421,32,5,0,1,NULL),(422,32,6,0,1,NULL),(423,32,9,1,1,NULL),(424,32,10,1,1,NULL),(425,33,4,1,1,NULL),(426,33,5,0,1,NULL),(427,33,6,0,1,NULL),(428,33,9,1,1,NULL),(429,33,10,1,1,NULL),(430,34,4,1,1,NULL),(431,34,5,0,1,NULL),(432,34,6,0,1,NULL),(433,34,9,1,1,NULL),(434,34,10,1,1,NULL),(435,35,4,1,1,NULL),(436,35,5,0,1,NULL),(437,35,6,0,1,NULL),(438,35,9,1,1,NULL),(439,35,10,1,1,NULL),(440,36,4,1,1,NULL),(441,36,5,0,1,NULL),(442,36,6,0,1,NULL),(443,36,9,1,1,NULL),(444,36,10,1,1,NULL),(445,37,4,1,1,NULL),(446,37,5,0,1,NULL),(447,37,6,1,1,NULL),(448,37,9,0,1,NULL),(449,37,10,1,1,'2016-11-06'),(450,38,4,1,1,NULL),(451,38,5,1,1,NULL),(452,38,6,0,1,NULL),(453,38,9,1,1,NULL),(454,38,10,0,1,NULL),(455,39,4,1,1,NULL),(456,39,5,0,1,NULL),(457,39,6,0,1,NULL),(458,39,9,1,1,NULL),(459,39,10,1,1,NULL),(460,40,4,1,1,NULL),(461,40,5,0,1,NULL),(462,40,6,0,1,NULL),(463,40,9,1,1,NULL),(464,40,10,1,1,NULL),(465,41,4,1,1,NULL),(466,41,5,1,1,NULL),(467,41,6,1,1,NULL),(468,41,9,0,1,NULL),(469,41,10,0,1,NULL),(475,43,4,1,1,NULL),(476,43,5,1,1,NULL),(477,43,6,1,1,NULL),(478,43,9,0,1,NULL),(479,43,10,0,1,NULL),(480,12,2,1,1,NULL),(481,12,5,0,1,NULL),(482,12,6,0,1,NULL),(483,12,8,1,1,NULL),(484,12,9,1,1,NULL),(485,12,10,0,1,NULL),(486,13,2,1,1,NULL),(487,13,5,1,1,NULL),(488,13,6,1,1,NULL),(489,13,8,1,0,NULL),(490,13,9,0,1,NULL),(491,13,10,1,1,NULL),(492,14,2,1,1,NULL),(493,14,5,1,1,NULL),(494,14,6,1,1,NULL),(495,14,8,0,0,NULL),(496,14,9,0,1,NULL),(497,14,10,1,1,NULL),(498,15,2,1,1,NULL),(499,15,5,1,1,NULL),(501,15,8,1,1,'2016-11-06'),(502,15,9,0,0,NULL),(503,15,10,0,0,NULL),(504,16,2,1,1,NULL),(505,16,5,1,1,NULL),(506,16,6,0,1,NULL),(507,16,8,1,1,NULL),(508,16,9,0,1,NULL),(509,16,10,0,1,NULL),(510,17,2,1,1,NULL),(511,17,5,1,1,NULL),(512,17,6,0,1,NULL),(513,17,8,1,0,NULL),(514,17,9,0,1,NULL),(515,17,10,0,1,NULL),(516,18,2,1,1,NULL),(517,18,5,1,1,NULL),(518,18,6,0,1,NULL),(519,18,8,1,1,NULL),(520,18,9,0,1,NULL),(521,18,10,0,1,NULL),(522,19,2,1,1,NULL),(523,19,5,1,1,NULL),(524,19,6,0,1,NULL),(525,19,8,1,1,NULL),(526,19,9,0,1,NULL),(527,19,10,0,1,NULL),(528,20,2,1,1,NULL),(529,20,5,1,1,NULL),(530,20,6,0,1,NULL),(531,20,8,1,0,NULL),(532,20,9,0,1,NULL),(533,20,10,0,1,NULL),(534,1,11,1,1,NULL),(535,2,11,1,1,NULL),(536,3,11,1,1,NULL),(537,4,11,1,1,NULL),(538,5,11,1,1,NULL),(539,6,11,1,1,NULL),(540,7,11,1,1,NULL),(541,8,11,1,1,NULL),(542,9,11,1,1,NULL),(543,10,11,1,1,NULL),(544,11,11,1,1,NULL),(545,12,11,1,1,NULL),(546,13,11,1,1,NULL),(547,14,11,1,1,NULL),(548,15,11,1,1,NULL),(549,16,11,1,1,NULL),(550,17,11,1,1,NULL),(551,18,11,1,1,NULL),(552,19,11,1,1,NULL),(553,20,11,1,1,NULL),(554,21,11,1,1,NULL),(555,22,11,1,1,NULL),(556,23,11,1,1,NULL),(557,24,11,1,1,NULL),(558,25,11,1,1,NULL),(559,26,11,1,1,NULL),(560,27,11,1,1,NULL),(561,28,11,1,1,NULL),(562,29,11,1,1,NULL),(563,30,11,1,1,NULL),(564,31,11,1,1,NULL),(565,32,11,1,1,NULL),(566,33,11,1,1,NULL),(567,34,11,1,1,NULL),(568,35,11,1,1,NULL),(569,36,11,1,1,NULL),(570,37,11,1,1,NULL),(571,38,11,1,1,NULL),(572,39,11,1,1,NULL),(573,40,11,1,1,NULL),(574,41,11,1,1,NULL),(575,43,11,1,1,NULL),(576,43,8,0,1,'2016-11-14');
/*!40000 ALTER TABLE `aluno_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigo`
--

DROP TABLE IF EXISTS `codigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigo` (
  `cd_codigo_dos_codigos` int(10) unsigned NOT NULL,
  `cd_matricula` int(11) NOT NULL,
  `cd_parceiro` int(10) unsigned NOT NULL,
  `ic_validacao` tinyint(1) DEFAULT NULL,
  `dt_codigo` date DEFAULT NULL,
  PRIMARY KEY (`cd_codigo_dos_codigos`),
  KEY `FK_CD_PARCEIROCOD` (`cd_parceiro`),
  KEY `FK_CD_MATRICULACOD` (`cd_matricula`),
  CONSTRAINT `FK_CD_MATRICULACOD` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`),
  CONSTRAINT `FK_CD_PARCEIROCOD` FOREIGN KEY (`cd_parceiro`) REFERENCES `parceiros` (`cd_parceiro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigo`
--

LOCK TABLES `codigo` WRITE;
/*!40000 ALTER TABLE `codigo` DISABLE KEYS */;
/*!40000 ALTER TABLE `codigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `download`
--

DROP TABLE IF EXISTS `download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `download` (
  `cd_download` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cd_postagem` int(10) unsigned NOT NULL,
  `cd_moeda_download` int(10) unsigned NOT NULL,
  `cd_aluno_download` int(10) unsigned DEFAULT NULL,
  `dt_download` date DEFAULT NULL,
  PRIMARY KEY (`cd_download`),
  KEY `FK_CD_POSTAGEMDOWN` (`cd_postagem`),
  KEY `FK_CD_MOEDA_DOWNLOAD` (`cd_moeda_download`),
  CONSTRAINT `FK_CD_MOEDA_DOWNLOAD` FOREIGN KEY (`cd_moeda_download`) REFERENCES `moeda_download` (`cd_moeda_download`),
  CONSTRAINT `FK_CD_POSTAGEMDOWN` FOREIGN KEY (`cd_postagem`) REFERENCES `postagem` (`cd_postagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `download`
--

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `cd_grupo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `TIPO_GRUPO_cd_TIPO` int(10) unsigned NOT NULL,
  `nm_grupo` varchar(50) DEFAULT NULL,
  `img_grupo` varchar(255) DEFAULT NULL,
  `ds_grupo` varchar(500) DEFAULT NULL,
  `ic_privado` tinyint(1) DEFAULT NULL,
  `ic_grupo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cd_grupo`),
  KEY `FK_TIPO_GRUPO` (`TIPO_GRUPO_cd_TIPO`),
  CONSTRAINT `FK_TIPO_GRUPO` FOREIGN KEY (`TIPO_GRUPO_cd_TIPO`) REFERENCES `tipo_grupo` (`cd_TIPO`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,1,'ANALISE E DESENVOLVIMENTO DE SISTEMAS',NULL,NULL,1,1),(2,1,'PROCESSOS QUIMICOS',NULL,NULL,1,1),(3,1,'GESTAO EMPRESARIAL',NULL,NULL,1,1),(4,2,'COMERCIO EXTERIOR',NULL,NULL,1,1),(5,2,'DP NELSON',NULL,NULL,0,1),(6,2,'REFORÇO MAT',NULL,NULL,0,1),(7,2,'ADS PRIMEIRO CICLO',NULL,NULL,1,1),(8,2,'PQ PRIMEIRO CICLO',NULL,'teste',1,1),(9,2,'MALU SEXTA',NULL,'teste',0,1),(10,2,'PRAIA',NULL,NULL,0,1),(11,1,'FATEC PG',NULL,NULL,1,1),(12,2,'feriado',NULL,'ashidabsidba',1,1);
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moeda_download`
--

DROP TABLE IF EXISTS `moeda_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moeda_download` (
  `cd_moeda_download` int(10) unsigned NOT NULL,
  `vl_download` int(10) unsigned DEFAULT NULL,
  `ds_download` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cd_moeda_download`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moeda_download`
--

LOCK TABLES `moeda_download` WRITE;
/*!40000 ALTER TABLE `moeda_download` DISABLE KEYS */;
INSERT INTO `moeda_download` VALUES (1,1,'valor-grupoPrincipal 10/20'),(2,1,'valor-grupoPrincipal 20/40'),(3,1,'valor-grupoPrincipal >40'),(4,1,'valor-grupoSecundario 10/20'),(5,1,'valor-grupoSecundario 20/40'),(6,1,'valor-grupoSecundario >40');
/*!40000 ALTER TABLE `moeda_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parceiros`
--

DROP TABLE IF EXISTS `parceiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parceiros` (
  `cd_parceiro` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cd_cnpj` int(10) unsigned DEFAULT NULL,
  `nm_login_parceiro` varchar(100) DEFAULT NULL,
  `img_parceiro` varchar(300) DEFAULT NULL,
  `pefil_parceiro` varchar(45) DEFAULT NULL,
  `cd_senha_parceiro` varchar(20) DEFAULT NULL,
  `nm_parceiro` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`cd_parceiro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parceiros`
--

LOCK TABLES `parceiros` WRITE;
/*!40000 ALTER TABLE `parceiros` DISABLE KEYS */;
/*!40000 ALTER TABLE `parceiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponto_aluno`
--

DROP TABLE IF EXISTS `ponto_aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponto_aluno` (
  `cd_matricula` int(11) NOT NULL,
  `qt_ponto` int(10) unsigned DEFAULT NULL,
  `dt_ponto` date DEFAULT NULL,
  KEY `FK_CD_MATRICULAPOINT` (`cd_matricula`),
  CONSTRAINT `FK_CD_MATRICULAPOINT` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponto_aluno`
--

LOCK TABLES `ponto_aluno` WRITE;
/*!40000 ALTER TABLE `ponto_aluno` DISABLE KEYS */;
INSERT INTO `ponto_aluno` VALUES (15,15,'2016-11-15'),(10,15,'2016-11-16'),(15,10,'2016-11-16');
/*!40000 ALTER TABLE `ponto_aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postagem`
--

DROP TABLE IF EXISTS `postagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postagem` (
  `cd_postagem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cd_prioridade` int(10) unsigned DEFAULT NULL,
  `cd_aluno_grupo` int(11) NOT NULL,
  `TIPO_POSTAGEM_cd_tipo_postagem` int(10) unsigned NOT NULL,
  `ds_postagem` varchar(1000) NOT NULL,
  `dt_postagem` datetime NOT NULL,
  `nm_arquivo` varchar(700) DEFAULT NULL,
  `img_postagem` varchar(700) DEFAULT NULL,
  `ic_postagem` smallint(1) NOT NULL DEFAULT '1',
  `arquivo_postagem` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`cd_postagem`),
  KEY `FK_TIPO_POSTAGEM_CD_TIPO_POSTAGEM` (`TIPO_POSTAGEM_cd_tipo_postagem`),
  KEY `FK_CD_PRIORIDADE` (`cd_prioridade`),
  KEY `FK_CD_ALUNO_GRUPO_idx` (`cd_aluno_grupo`),
  CONSTRAINT `FK_CD_ALUNO_GRUPO` FOREIGN KEY (`cd_aluno_grupo`) REFERENCES `aluno_grupo` (`cd_aluno_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_CD_PRIORIDADE` FOREIGN KEY (`cd_prioridade`) REFERENCES `prioridade` (`cd_prioridade`),
  CONSTRAINT `FK_TIPO_POSTAGEM_CD_TIPO_POSTAGEM` FOREIGN KEY (`TIPO_POSTAGEM_cd_tipo_postagem`) REFERENCES `tipo_postagem` (`cd_tipo_postagem`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postagem`
--

LOCK TABLES `postagem` WRITE;
/*!40000 ALTER TABLE `postagem` DISABLE KEYS */;
INSERT INTO `postagem` VALUES (13,1,501,33,'teste','2016-10-06 00:54:03','','',1,NULL),(14,1,501,33,'teste','2016-10-06 00:54:07','','',0,NULL),(15,1,482,33,'comunicado','2016-10-06 23:35:17',NULL,'',1,NULL),(16,1,482,26,'duvida','2016-10-06 23:35:24',NULL,'',1,NULL),(17,1,498,33,'oqooqoqoqoq','2016-10-10 22:49:17',NULL,'',1,NULL),(18,1,464,33,'eduardo','2016-10-11 23:52:38',NULL,'',1,NULL),(19,1,499,33,'1','2016-10-12 01:32:13',NULL,'',1,NULL),(20,1,499,26,'duvida','2016-10-12 21:22:34',NULL,'',1,NULL),(21,1,428,33,'olaaaaaa\r\n','2016-11-01 00:30:51',NULL,'',0,NULL),(22,1,428,33,'asdasdasd','2016-11-01 00:30:55',NULL,'',0,NULL),(23,1,428,26,'fsdfsdf','2016-11-01 00:30:58',NULL,'',0,NULL),(24,1,502,33,'asdfasdf','2016-11-01 00:31:24',NULL,'',0,NULL),(25,1,502,33,'fffff','2016-11-01 00:31:31',NULL,'',0,NULL),(26,1,503,33,'teste','2016-11-01 00:50:43',NULL,'',0,NULL),(27,1,483,33,'asd','2016-11-04 00:15:25',NULL,'',0,NULL),(28,1,483,33,'dsa','2016-11-04 00:15:29',NULL,'',0,NULL),(29,1,481,33,'aswdasd','2016-11-06 18:59:01',NULL,'',1,NULL),(30,1,483,10,'olha o chrome aí!','2016-11-10 11:22:06',NULL,NULL,1,'0B6iVxbFTc7MEd1RZMjEwODJQUGs'),(31,1,484,10,'olha o windows aí!','2016-11-10 11:22:44',NULL,NULL,1,'0B6iVxbFTc7MEZGN5OXZjUDVpTnM'),(32,1,484,10,'olha a apple aí!','2016-11-10 11:23:08',NULL,NULL,1,'0B6iVxbFTc7MEcFBfYm5pQkFKeWc'),(33,1,484,10,'olha o android aí!','2016-11-10 11:23:31',NULL,NULL,1,'0B6iVxbFTc7MEUW0yQVNaZDk2a0U'),(34,1,483,10,'olha o github aí!','2016-11-10 11:24:13',NULL,NULL,1,'0B6iVxbFTc7MEZkd0Tk1rZl9neFU'),(35,1,483,10,'olha o java aí!','2016-11-10 11:24:54',NULL,NULL,1,'6iVxbFTc7MEZWZIRVpoSFk0cm8'),(55,1,482,33,'asasa','2016-11-16 04:44:13',NULL,'',1,NULL),(56,1,482,33,'asasa','2016-11-16 04:44:27',NULL,'',1,NULL),(57,1,483,33,'dddddddddddddddddddd','2016-11-16 04:46:12',NULL,'',1,NULL),(58,1,483,33,'dddddddddddddddddddd','2016-11-16 04:46:19',NULL,'',1,NULL),(59,1,483,33,'dddddddddddddddddddd','2016-11-16 04:47:17',NULL,'',1,NULL),(60,1,483,33,'dddddddddddddddddddd','2016-11-16 04:47:22',NULL,'',1,NULL),(61,1,481,33,'asdas','2016-11-16 04:47:31',NULL,'',1,NULL),(63,1,481,26,'ASDAS','2016-11-16 05:02:23',NULL,'',1,NULL);
/*!40000 ALTER TABLE `postagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prioridade`
--

DROP TABLE IF EXISTS `prioridade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prioridade` (
  `cd_prioridade` int(10) unsigned NOT NULL,
  `vl_tempo` time DEFAULT NULL,
  `vl_prioridade` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`cd_prioridade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prioridade`
--

LOCK TABLES `prioridade` WRITE;
/*!40000 ALTER TABLE `prioridade` DISABLE KEYS */;
INSERT INTO `prioridade` VALUES (1,'24:00:00',40),(2,'72:00:00',100),(3,'168:00:00',250);
/*!40000 ALTER TABLE `prioridade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocao`
--

DROP TABLE IF EXISTS `promocao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promocao` (
  `cd_promocao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cd_parceiro` int(10) unsigned NOT NULL,
  `ds_promocao` varchar(300) DEFAULT NULL,
  `dt_promocao` date DEFAULT NULL,
  `img_promocao` varchar(300) DEFAULT NULL,
  `ic_principal` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cd_promocao`),
  KEY `FK_CD_PARCEIRO` (`cd_parceiro`),
  CONSTRAINT `FK_CD_PARCEIRO` FOREIGN KEY (`cd_parceiro`) REFERENCES `parceiros` (`cd_parceiro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocao`
--

LOCK TABLES `promocao` WRITE;
/*!40000 ALTER TABLE `promocao` DISABLE KEYS */;
/*!40000 ALTER TABLE `promocao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resposta`
--

DROP TABLE IF EXISTS `resposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resposta` (
  `cd_resposta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_resposta` varchar(1000) DEFAULT NULL,
  `cd_resposta_aluno` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cd_resposta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resposta`
--

LOCK TABLES `resposta` WRITE;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teste`
--

DROP TABLE IF EXISTS `teste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste` (
  `a` varchar(45) DEFAULT NULL,
  `b` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste`
--

LOCK TABLES `teste` WRITE;
/*!40000 ALTER TABLE `teste` DISABLE KEYS */;
INSERT INTO `teste` VALUES ('Adicionar Material','0B6BdoHwPKchJQkVpdWJPX2dyemc'),('Anexar Arquivo','0B6BdoHwPKchJXzVVaUt6YmluNE0'),('Atribuir pontuacao','0B6BdoHwPKchJZnpSbkhJM1ZEa2s');
/*!40000 ALTER TABLE `teste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teste2`
--

DROP TABLE IF EXISTS `teste2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teste2` (
  `c` varchar(40) DEFAULT NULL,
  `d` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teste2`
--

LOCK TABLES `teste2` WRITE;
/*!40000 ALTER TABLE `teste2` DISABLE KEYS */;
/*!40000 ALTER TABLE `teste2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_grupo`
--

DROP TABLE IF EXISTS `tipo_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_grupo` (
  `cd_TIPO` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_tipo_grupo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`cd_TIPO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_grupo`
--

LOCK TABLES `tipo_grupo` WRITE;
/*!40000 ALTER TABLE `tipo_grupo` DISABLE KEYS */;
INSERT INTO `tipo_grupo` VALUES (1,'MANUAL'),(2,'AUTOMATICO');
/*!40000 ALTER TABLE `tipo_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_postagem`
--

DROP TABLE IF EXISTS `tipo_postagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_postagem` (
  `cd_tipo_postagem` int(10) unsigned NOT NULL,
  `nm_tipo` varchar(50) NOT NULL,
  `vl_tipo_postagem` int(10) unsigned DEFAULT NULL,
  `ic_tipo_postagem` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cd_tipo_postagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_postagem`
--

LOCK TABLES `tipo_postagem` WRITE;
/*!40000 ALTER TABLE `tipo_postagem` DISABLE KEYS */;
INSERT INTO `tipo_postagem` VALUES (10,'upload-grupoprimario-10/20',5,0),(11,'upload-grupoprimario-20/40',15,0),(12,'upload-grupoprimario- >40',20,0),(13,'upload-gruposecundario-10/20',5,0),(14,'upload-gruposecundario-20/40',5,0),(15,'upload-gruposecundario- >40',10,0),(16,'Resposta-Grupoprincipal 10/20',NULL,NULL),(17,'Resposta-Grupoprincipal 20/40',NULL,NULL),(18,'Resposta-Grupoprincipal - >40',NULL,NULL),(19,'Resposta-Gruposecundario 10/20',NULL,NULL),(20,'Resposta-Gruposecundario 20/40',NULL,NULL),(21,'Resposta-Gruposecundario - >40',NULL,NULL),(25,'Nota-grupoPrincipal/Secundario',30,1),(26,'duvida-grupoPrincipal',5,0),(27,'duvida-grupoSecundario',0,NULL),(28,'DP-grupoPrincipal/Secundario',50,0),(29,'avaliaçãoRespota-grupoPrincipal/Secundario 10/20',5,1),(30,'avaliaçãoRespota-grupoPrincipal/Secundario 20/40',10,1),(31,'avaliaçãoRespota-grupoPrincipal/Secundario >40',15,1),(32,'comunicado-grupoPrimario',20,0),(33,'comunicado-grupoSecundario',10,0);
/*!40000 ALTER TABLE `tipo_postagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treplica`
--

DROP TABLE IF EXISTS `treplica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treplica` (
  `cd_resposta` int(10) unsigned NOT NULL,
  `cd_postagem` int(10) unsigned NOT NULL,
  KEY `FK_CD_POSTAGEM` (`cd_postagem`),
  KEY `FK_CD_RESPOSTA` (`cd_resposta`),
  CONSTRAINT `FK_CD_POSTAGEM` FOREIGN KEY (`cd_postagem`) REFERENCES `postagem` (`cd_postagem`),
  CONSTRAINT `FK_CD_RESPOSTA` FOREIGN KEY (`cd_resposta`) REFERENCES `resposta` (`cd_resposta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treplica`
--

LOCK TABLES `treplica` WRITE;
/*!40000 ALTER TABLE `treplica` DISABLE KEYS */;
/*!40000 ALTER TABLE `treplica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-16  6:25:19
