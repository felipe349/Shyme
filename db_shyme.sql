CREATE DATABASE  IF NOT EXISTS `db_shyme_2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_shyme_2`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_shyme_2
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
  `dt_adm_grupo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador_grupo`
--

LOCK TABLES `administrador_grupo` WRITE;
/*!40000 ALTER TABLE `administrador_grupo` DISABLE KEYS */;
INSERT INTO `administrador_grupo` VALUES (12,5,'2016-09-21'),(12,6,'2016-09-21'),(1,7,'2016-09-21'),(15,8,'2016-09-21'),(40,9,'2016-09-21'),(37,10,'2016-09-21');
/*!40000 ALTER TABLE `administrador_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS `aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno` (
  `cd_matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nm_aluno` varchar(50) NOT NULL,
  `cd_rg_aluno` varchar(15) NOT NULL,
  `perfil_aluno` varchar(50) DEFAULT NULL,
  `img_aluno` varchar(300) DEFAULT NULL,
  `vl_moeda` int(10) unsigned DEFAULT NULL,
  `senha_aluno` varchar(45) DEFAULT NULL,
  `curso_aluno` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno`
--

LOCK TABLES `aluno` WRITE;
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` VALUES (1,'JESSE PINKMAN','798465123','PINK5123','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(2,'GUSTAVO FRING','987456321','FRING6321','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(3,'SON GOKU','798465132','GOKU5132','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(4,'SON GOHAN','976431258','GOHAN3258','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(5,'VEGETA BRAVO','134679852','VEGETA9852','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(6,'SEIYA PEGASU','731945628','PEGASU5628','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(7,'SHYRIU DRAGAO','513469870','DRAGAO9870','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(8,'HYOGA CISNEY','852134679','CISNEY4679','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(9,'SHUN ANDROMEDA','987645312','ANDROMEDA5312','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(10,'IKKI FENIX','978645312','FENIX5312','',50,'1','ANALISE E DESENVOLVIMENTO DE SISTEMAS'),(11,'AIORIA LEAO','987645321','LEAO5321','',50,'1','PROCESSOS QUIMICOS'),(12,'MU ARIES','978645321','ARIES5321','http://migre.me/v7zGt',50,'1','PROCESSOS QUIMICOS'),(13,'ALDEBARAN TOURO','132465798','TOURO5798','',50,'1','PROCESSOS QUIMICOS'),(14,'SAGA GEMEOS','123456798','GEMEOS6798','',50,'1','PROCESSOS QUIMICOS'),(15,'MASCARA CANCER','852741963','CANCER1963','',50,'1','PROCESSOS QUIMICOS'),(16,'SHAKA VIRGEM','7419963852','VIRGEM3852','',50,'1','PROCESSOS QUIMICOS'),(17,'DOHKO LIBRA','714825936','LIBRA5936','',50,'1','PROCESSOS QUIMICOS'),(18,'MILO ESCORPIAO','174852963','MILO2963','',50,'1','PROCESSOS QUIMICOS'),(19,'AIOROS SAGITARIO','84615732','SAGITARIO5732','',50,'1','PROCESSOS QUIMICOS'),(20,'SHURA CAPRICORNIO','11112222','SHURA2222','',50,'1','COMERCIO EXTERIOR'),(21,'CAMUS AQUARIO','123445566','AQUARIO5566','',50,'1','COMERCIO EXTERIOR'),(22,'AFRODITE PEIXES','879556412','PEIXES6412','',50,'1','COMERCIO EXTERIOR'),(23,'BOB ESPONJA','8877994455','ESPONJA4455','',50,'1','COMERCIO EXTERIOR'),(24,'PATRICK ESTRELA','125463987','ESTRELA3987','',50,'1','COMERCIO EXTERIOR'),(25,'LULA MOLUSCO','7998554612','MOLUSCO4612','',50,'1','COMERCIO EXTERIOR'),(26,'SANDY BOCHECHAS','123448829','SANDY6789','',50,'1','COMERCIO EXTERIOR'),(27,'PAUL STANLEY','644558822','PAUL8822','',50,'1','COMERCIO EXTERIOR'),(28,'GENE SIMMONS','445239877','GENE9877','',50,'1','COMERCIO EXTERIOR'),(29,'PETER CRIS','993256788','PETER6788','',50,'1','COMERCIO EXTERIOR'),(30,'ACE FREHLEY','852113346','ACE3346','',50,'1','COMERCIO EXTERIOR'),(31,'ROSS GELLER','975213664','GELLER3664','',50,'1','COMERCIO EXTERIOR'),(32,'MONICA GELLER','799845612','GELLER5612','',50,'1','COMERCIO EXTERIOR'),(33,'PHEOBE BUFFAY','998877123','BUFFAY7123','',50,'1','COMERCIO EXTERIOR'),(34,'JOEY TRIBIANNI','88552213','JOEY2213','',50,'1','GESTAO EMPRESARIAL'),(35,'CHANDLER BING','779944662','BING4662','',50,'1','GESTAO EMPRESARIAL'),(36,'RACHEL GREEN','554467891','GREEN7891','',50,'1','GESTAO EMPRESARIAL'),(37,'TED MOSBY','825461237','MOSBY1237','',50,'1','GESTAO EMPRESARIAL'),(38,'MARSHAL ERIKSEN','44567789','MARSHAL7789','',50,'1','GESTAO EMPRESARIAL'),(39,'ROBIN SCHERBATSKY','896654771','ROBIN4771','',50,'1','GESTAO EMPRESARIAL'),(40,'LILY ALDRIN','887642331','LILY2331','',50,'1','GESTAO EMPRESARIAL'),(41,'ROBIN SCHERBATSKY','896654771','ROBIN4771',' ',50,'1','GESTAO EMPRESARIAL'),(43,'WALTER WHITE','123456789','HEISENBERG','',50,'1','GESTAO EMPRESARIAL');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aluno_grupo`
--

DROP TABLE IF EXISTS `aluno_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aluno_grupo` (
  `cd_aluno_grupo` int(11) NOT NULL,
  `cd_matricula` int(10) unsigned NOT NULL,
  `cd_grupo` int(10) unsigned NOT NULL,
  `prioridade_grupo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cd_aluno_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aluno_grupo`
--

LOCK TABLES `aluno_grupo` WRITE;
/*!40000 ALTER TABLE `aluno_grupo` DISABLE KEYS */;
INSERT INTO `aluno_grupo` VALUES (299,1,1,1),(300,1,5,1),(301,1,7,1),(302,1,6,0),(303,1,9,0),(304,1,10,0),(305,2,1,1),(306,2,5,1),(307,2,7,0),(308,2,6,1),(309,2,9,0),(310,2,10,0),(311,3,1,1),(312,3,5,0),(313,3,7,1),(314,3,6,0),(315,3,9,0),(316,3,10,1),(317,4,1,1),(318,4,5,1),(319,4,7,1),(320,4,6,0),(321,4,9,0),(322,4,10,0),(323,5,1,1),(324,5,5,1),(325,5,7,1),(326,5,6,0),(327,5,9,0),(328,5,10,0),(329,6,1,1),(330,6,5,0),(331,6,7,0),(332,6,6,0),(333,6,9,1),(334,6,10,1),(335,7,1,1),(336,7,5,1),(337,7,7,1),(338,7,6,0),(339,7,9,0),(340,7,10,0),(341,8,1,1),(342,8,5,1),(343,8,7,1),(344,8,6,0),(345,8,9,0),(346,8,10,0),(347,9,1,1),(348,9,5,1),(349,9,7,0),(350,9,6,0),(351,9,9,1),(352,9,10,0),(353,10,1,1),(354,10,5,0),(355,10,7,1),(356,10,6,0),(357,10,9,1),(358,10,10,0),(359,11,1,1),(360,11,5,0),(361,11,7,1),(362,11,6,0),(363,11,9,0),(364,11,10,1),(365,21,3,1),(366,21,5,0),(367,21,6,0),(368,21,9,1),(369,21,10,1),(370,22,3,1),(371,22,5,0),(372,22,6,0),(373,22,9,1),(374,22,10,1),(375,23,3,1),(376,23,5,0),(377,23,6,0),(378,23,9,1),(379,23,10,1),(380,24,3,1),(381,24,5,0),(382,24,6,1),(383,24,9,0),(384,24,10,1),(385,25,3,1),(386,25,5,0),(387,25,6,1),(388,25,9,0),(389,25,10,1),(390,26,3,1),(391,26,5,1),(392,26,6,1),(393,26,9,0),(394,26,10,0),(395,27,3,1),(396,27,5,1),(397,27,6,1),(398,27,9,0),(399,27,10,0),(400,28,3,1),(401,28,5,0),(402,28,6,0),(403,28,9,1),(404,28,10,1),(405,29,3,1),(406,29,5,0),(407,29,6,0),(408,29,9,1),(409,29,10,1),(410,30,3,1),(411,30,5,0),(412,30,6,0),(413,30,9,1),(414,30,10,1),(415,31,3,1),(416,31,5,1),(417,31,6,0),(418,31,9,0),(419,31,10,1),(420,32,3,1),(421,32,5,0),(422,32,6,0),(423,32,9,1),(424,32,10,1),(425,33,4,1),(426,33,5,0),(427,33,6,0),(428,33,9,1),(429,33,10,1),(430,34,4,1),(431,34,5,0),(432,34,6,0),(433,34,9,1),(434,34,10,1),(435,35,4,1),(436,35,5,0),(437,35,6,0),(438,35,9,1),(439,35,10,1),(440,36,4,1),(441,36,5,0),(442,36,6,0),(443,36,9,1),(444,36,10,1),(445,37,4,1),(446,37,5,0),(447,37,6,1),(448,37,9,0),(449,37,10,1),(450,38,4,1),(451,38,5,1),(452,38,6,0),(453,38,9,1),(454,38,10,0),(455,39,4,1),(456,39,5,0),(457,39,6,0),(458,39,9,1),(459,39,10,1),(460,40,4,1),(461,40,5,0),(462,40,6,0),(463,40,9,1),(464,40,10,1),(465,41,4,1),(466,41,5,1),(467,41,6,1),(468,41,9,0),(469,41,10,0),(470,42,4,1),(471,42,5,1),(472,42,6,1),(473,42,9,0),(474,42,10,0),(475,43,4,1),(476,43,5,1),(477,43,6,1),(478,43,9,0),(479,43,10,0),(480,12,2,1),(481,12,5,1),(482,12,6,1),(483,12,8,0),(484,12,9,0),(485,12,10,0),(486,13,2,1),(487,13,5,1),(488,13,6,1),(489,13,8,1),(490,13,9,0),(491,13,10,1),(492,14,2,1),(493,14,5,1),(494,14,6,1),(495,14,8,0),(496,14,9,0),(497,14,10,1),(498,15,2,1),(499,15,5,1),(500,15,6,0),(501,15,8,1),(502,15,9,0),(503,15,10,0),(504,16,2,1),(505,16,5,1),(506,16,6,0),(507,16,8,1),(508,16,9,0),(509,16,10,0),(510,17,2,1),(511,17,5,1),(512,17,6,0),(513,17,8,1),(514,17,9,0),(515,17,10,0),(516,18,2,1),(517,18,5,1),(518,18,6,0),(519,18,8,1),(520,18,9,0),(521,18,10,0),(522,19,2,1),(523,19,5,1),(524,19,6,0),(525,19,8,1),(526,19,9,0),(527,19,10,0),(528,20,2,1),(529,20,5,1),(530,20,6,0),(531,20,8,1),(532,20,9,0),(533,20,10,0),(534,1,11,0),(535,2,11,0),(536,3,11,0),(537,4,11,0),(538,5,11,0),(539,6,11,0),(540,7,11,0),(541,8,11,0),(542,9,11,0),(543,10,11,0),(544,11,11,0),(545,12,11,0),(546,13,11,0),(547,14,11,0),(548,15,11,0),(549,16,11,0),(550,17,11,0),(551,18,11,0),(552,19,11,0),(553,20,11,0),(554,21,11,0),(555,22,11,0),(556,23,11,0),(557,24,11,0),(558,25,11,0),(559,26,11,0),(560,27,11,0),(561,28,11,0),(562,29,11,0),(563,30,11,0),(564,31,11,0),(565,32,11,0),(566,33,11,0),(567,34,11,0),(568,35,11,0),(569,36,11,0),(570,37,11,0),(571,38,11,0),(572,39,11,0),(573,40,11,0),(574,41,11,0),(575,43,11,0);
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
  `cd_matricula` int(10) unsigned NOT NULL,
  `cd_parceiro` int(10) unsigned NOT NULL,
  `ic_validacao` tinyint(1) DEFAULT NULL,
  `dt_codigo` date DEFAULT NULL,
  PRIMARY KEY (`cd_codigo_dos_codigos`)
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
  PRIMARY KEY (`cd_download`)
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
  PRIMARY KEY (`cd_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,1,'ANALISE E DESENVOLVIMENTO DE SISTEMAS',NULL,NULL,1),(2,1,'PROCESSOS QUIMICOS',NULL,NULL,1),(3,1,'GESTAO EMPRESARIAL',NULL,NULL,1),(4,2,'COMERCIO EXTERIOR',NULL,NULL,1),(5,2,'DP NELSON',NULL,NULL,0),(6,2,'REFORÇO MAT',NULL,NULL,0),(7,2,'ADS PRIMEIRO CICLO',NULL,NULL,1),(8,2,'PQ PRIMEIRO CICLO',NULL,NULL,1),(9,2,'MALU SEXTA',NULL,NULL,0),(10,2,'PRAIA',NULL,NULL,0),(11,1,'FATEC PG',NULL,NULL,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parceiros`
--

LOCK TABLES `parceiros` WRITE;
/*!40000 ALTER TABLE `parceiros` DISABLE KEYS */;
INSERT INTO `parceiros` VALUES (1,0,NULL,NULL,NULL,NULL,NULL),(2,0,NULL,NULL,NULL,NULL,NULL),(3,0,NULL,NULL,NULL,NULL,NULL),(4,0,NULL,NULL,NULL,NULL,NULL),(5,0,NULL,NULL,NULL,NULL,NULL),(6,0,NULL,NULL,NULL,NULL,NULL),(7,0,NULL,NULL,NULL,NULL,NULL),(8,0,NULL,NULL,NULL,NULL,NULL),(9,0,NULL,NULL,NULL,NULL,NULL),(10,0,NULL,NULL,NULL,NULL,NULL),(11,0,NULL,NULL,NULL,NULL,NULL),(12,0,NULL,NULL,NULL,NULL,NULL),(13,0,NULL,NULL,NULL,NULL,NULL),(14,0,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `parceiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponto_aluno`
--

DROP TABLE IF EXISTS `ponto_aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponto_aluno` (
  `cd_matricula` int(10) unsigned NOT NULL,
  `qt_ponto` int(10) unsigned DEFAULT NULL,
  `dt_ponto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponto_aluno`
--

LOCK TABLES `ponto_aluno` WRITE;
/*!40000 ALTER TABLE `ponto_aluno` DISABLE KEYS */;
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
  `cd_prioridade` int(10) unsigned NOT NULL,
  `cd_aluno_grupo` int(10) unsigned NOT NULL,
  `TIPO_POSTAGEM_cd_tipo_postagem` int(10) unsigned NOT NULL,
  `ds_postagem` varchar(1000) NOT NULL,
  `dt_postagem` datetime NOT NULL,
  `nm_arquivo` varchar(700) DEFAULT NULL,
  `img_postagem` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`cd_postagem`),
  KEY `cd_aluno_grupo_idx` (`cd_aluno_grupo`),
  KEY `fk_tipo_postagem_idx` (`TIPO_POSTAGEM_cd_tipo_postagem`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postagem`
--

LOCK TABLES `postagem` WRITE;
/*!40000 ALTER TABLE `postagem` DISABLE KEYS */;
INSERT INTO `postagem` VALUES (14,0,10,1,'teste','0000-00-00 00:00:00',NULL,NULL),(15,0,481,1,'teste','0000-00-00 00:00:00',NULL,NULL),(16,0,481,1,'TESTE NOVO','2016-10-02 19:28:18','',''),(17,0,481,1,'TESTE NOVO','2016-10-02 19:28:23','',''),(18,0,481,1,'POSTANDO AQUI NA DP','2016-10-02 21:33:51','',''),(19,0,482,1,'CAGUEI PRA MATEMATICA','2016-10-02 21:34:14','',''),(20,0,494,1,'AAAAAAAAAAAAAAAAAAAAAAAAAA','2016-10-02 22:17:41','',''),(21,0,481,32,'GRUPO PRIMA','2016-10-04 18:11:16','',''),(22,0,484,32,'GRUPO SEC','2016-10-04 18:12:13','',''),(23,0,484,32,'GRUPO SEC','2016-10-04 18:12:17','',''),(24,0,484,32,'GRUPO AECJASOJDASD','2016-10-04 18:13:16','',''),(25,0,484,32,'1234','2016-10-04 18:16:35','',''),(26,0,484,32,'1234','2016-10-04 18:16:39','',''),(27,0,484,32,'sadasdas','2016-10-04 18:18:41','',''),(28,0,484,33,'sadasdas','2016-10-04 18:19:18','',''),(29,0,481,33,'twsad','2016-10-04 18:20:32','',''),(30,0,481,32,'twsad','2016-10-04 18:21:27','',''),(31,0,481,32,'twsad','2016-10-04 18:26:14','',''),(32,0,481,32,'teste final','2016-10-04 18:26:39','',''),(33,0,483,32,'teste final','2016-10-04 18:27:38','',''),(34,0,483,32,'teste final','2016-10-04 18:27:42','',''),(35,0,483,32,'teste final','2016-10-04 18:28:43','',''),(36,1,482,33,'refres','2016-10-06 13:47:00',NULL,''),(37,1,481,33,'teste','2016-10-06 13:51:55',NULL,'');
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
  PRIMARY KEY (`cd_promocao`)
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
INSERT INTO `tipo_grupo` VALUES (1,'AUTOMATICO'),(2,'MANUAL');
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
  `cd_postagem` int(10) unsigned NOT NULL
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

-- Dump completed on 2016-11-01  1:08:01
