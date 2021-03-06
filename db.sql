-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: localhost    Database: homeshopping
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Current Database: `homeshopping`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `homeshopping` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `homeshopping`;

--
-- Table structure for table `consumidor`
--

DROP TABLE IF EXISTS `consumidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consumidor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rg` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DB272CCDB38439E` (`usuario_id`),
  KEY `IDX_2DB272CC1BB76823` (`endereco_id`),
  CONSTRAINT `FK_2DB272CC1BB76823` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`),
  CONSTRAINT `FK_2DB272CCDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consumidor`
--

LOCK TABLES `consumidor` WRITE;
/*!40000 ALTER TABLE `consumidor` DISABLE KEYS */;
INSERT INTO `consumidor` VALUES (2,'l','l l','m','2017-04-22','4013-2664',3,3,'l'),(3,'l','l l','m','2017-04-22','4013-2664',8,8,'l'),(4,'l','l l','m','2017-04-22','4013-2664',9,9,'l'),(5,'l','l l','m','2017-04-22','4013-2664',10,10,'l'),(6,'l','l l','m','2017-04-22','4013-2664',11,11,'l'),(7,'l','l l','m','2017-04-22','4013-2664',12,12,'l'),(8,'44447092X','Leonardo Ims','m','1995-07-21','13311200',13,15,'42666762807'),(9,'44447092X','Leonardo Ims','m','1995-07-21','13311200',14,16,'42666762807'),(10,'44447092X','Leonardo Ims','m','1995-07-21','1140132664',15,17,'42666762087'),(11,'4','l l','f','1999-06-09','4',16,18,'4'),(12,'44444444','Guilherme Cardoso','f','1996-07-16','1140131313',18,20,'42666762800'),(13,'44444444','Guilherme Cardoso','f','1996-07-16','1140131313',17,19,'42666762800'),(14,'987635598','Vitor Nata','m','1990-03-21','1140132666',19,21,'42626457921'),(15,'44445695','Guilherme Nat├ú','m','1997-12-20','1140112366',20,22,'32665987410');
/*!40000 ALTER TABLE `consumidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` smallint(5) unsigned NOT NULL,
  `complemento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (2,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(3,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(4,'Rua Nahor Leite Gomes',70,'','Jardim Alberto Gomes','Itu','SP','13311200'),(5,'Rua Nahor Leite Gomes',70,'','Jardim Alberto Gomes','Itu','SP','13311200'),(6,'Rua Assun├º├úo',72,'','Jardim Alberto Gomes','Itu','SP','13311220'),(7,'Rua das Flores',72,'','Jardim Santa Tereza','Itu','SP','13311240'),(8,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(9,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(10,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(11,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(12,'Rua Nahor Leite Gomes',63,'33','Jardim Conven├º├úo','Itu','SP','13311200'),(13,'Rua nahor leite gomes',63,NULL,'Jardim Conven├º├úo','Itu','63','13311200'),(14,'Rua Nahor Leite Gomes',63,NULL,'Jardim Conven├º├úo','Itu','SP','13311200'),(15,'Rua Nahor Leite Gomes',63,NULL,'Jardim Conven├º├úo','Itu','SP','13311200'),(16,'Rua Nahor Leite Gomes',22,NULL,'Jardim Conven├º├úo','Itu','SP','13311200'),(17,'Rua Nahor Leite Gomes',63,NULL,'Jardim Conven├º├úo','Itu','SP','13311200'),(18,'Rua Nahor Leite Gomes',63,NULL,'Jardim Conven├º├úo','Itu','SP','13311200'),(19,'Rua Corintho Luiz D\'On├│frio',66,NULL,'Jardim Alberto Gomes','Itu','SP','13311220'),(20,'Rua Corintho Luiz D\'On├│frio',66,'','Jardim Alberto Gomes','Itu','SP','13311220');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pagamento`
--

DROP TABLE IF EXISTS `forma_pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_58C6854854653A` (`pedido_id`),
  CONSTRAINT `FK_58C6854854653A` FOREIGN KEY (`pedido_id`) REFERENCES `varejo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pagamento`
--

LOCK TABLES `forma_pagamento` WRITE;
/*!40000 ALTER TABLE `forma_pagamento` DISABLE KEYS */;
INSERT INTO `forma_pagamento` VALUES (1,'Cart├úo de Cr├⌐dito',1),(2,'Cart├úo de D├⌐bito',1),(3,'Dinheiro',1);
/*!40000 ALTER TABLE `forma_pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_pedido`
--

DROP TABLE IF EXISTS `item_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) DEFAULT NULL,
  `produto_id` int(11) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_421563014854653A` (`pedido_id`),
  KEY `IDX_42156301105CFD56` (`produto_id`),
  CONSTRAINT `FK_42156301105CFD56` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`),
  CONSTRAINT `FK_421563014854653A` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_pedido`
--

LOCK TABLES `item_pedido` WRITE;
/*!40000 ALTER TABLE `item_pedido` DISABLE KEYS */;
INSERT INTO `item_pedido` VALUES (8,5,4,2,16.99),(9,5,3,3,2.99),(10,5,2,4,1.32),(11,6,4,2,16.99),(12,6,3,3,2.99),(13,7,1,3,2.99),(14,7,2,3,1.32),(15,8,4,4,16.99),(16,9,1,3,2.99),(17,9,4,2,16.99),(18,9,2,3,1.32);
/*!40000 ALTER TABLE `item_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20180315210612'),('20180316015738'),('20180316042838'),('20180316044101'),('20180316044131'),('20180316060908'),('20180316061112'),('20180316062443'),('20180316065820'),('20180316070554'),('20180415030229'),('20180422221058'),('20180423000633'),('20180423000937'),('20180609193852'),('20180610053716'),('20180610054316'),('20180612024518'),('20180612024637'),('20180616214207'),('20180616214312');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `troco` decimal(10,2) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagamento`
--

LOCK TABLES `pagamento` WRITE;
/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
INSERT INTO `pagamento` VALUES (1,20.00,20.00),(3,0.02,34.00),(4,0.23,170.00),(5,0.04,12.00),(6,1.77,50.00),(7,0.05,43.00),(8,0.07,13.00),(9,2.04,70.00),(10,0.09,47.00);
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `consumidor_id` int(11) DEFAULT NULL,
  `forma_pagamento_id` int(11) DEFAULT NULL,
  `pagamento_id` int(11) DEFAULT NULL,
  `data_pedido` datetime NOT NULL,
  `varejo_id` int(11) DEFAULT NULL,
  `data_entrega` datetime DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C4EC16CEE06F81F7` (`pagamento_id`),
  KEY `IDX_C4EC16CEC69263ED` (`consumidor_id`),
  KEY `IDX_C4EC16CE79AFB555` (`forma_pagamento_id`),
  KEY `IDX_C4EC16CE73F8C5A4` (`varejo_id`),
  CONSTRAINT `FK_C4EC16CE73F8C5A4` FOREIGN KEY (`varejo_id`) REFERENCES `varejo` (`id`),
  CONSTRAINT `FK_C4EC16CE79AFB555` FOREIGN KEY (`forma_pagamento_id`) REFERENCES `forma_pagamento` (`id`),
  CONSTRAINT `FK_C4EC16CEC69263ED` FOREIGN KEY (`consumidor_id`) REFERENCES `consumidor` (`id`),
  CONSTRAINT `FK_C4EC16CEE06F81F7` FOREIGN KEY (`pagamento_id`) REFERENCES `pagamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES (5,8,3,6,'2018-06-16 21:49:43',1,NULL,48.23,0),(6,8,3,7,'2018-06-16 21:51:12',1,NULL,42.95,0),(7,8,3,8,'2018-06-16 22:13:34',1,NULL,12.93,0),(8,12,3,9,'2018-06-16 22:38:10',1,NULL,67.96,0),(9,15,3,10,'2018-06-20 00:13:20',1,NULL,46.91,0);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `varejo_id` int(11) DEFAULT NULL,
  `codigo_barras` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `unidade` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5CAC49D773F8C5A4` (`varejo_id`),
  CONSTRAINT `FK_5CAC49D773F8C5A4` FOREIGN KEY (`varejo_id`) REFERENCES `varejo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,1,'7835687952365','Toddynho 200ml','UN',2.99,'https://www.extra-imagens.com.br/Alimentos/Matinais/chocolateempo/10898440/654893360/Achocolatado-Pronto-Toddynho-200ml---Quaker-10898440.jpg','PepsiCo','Leite',1,20),(2,1,'7835687952360','Mini Bolo de Brigadeiro 40g','UN',1.32,'https://static.carrefour.com.br/medias/sys_master/images/images/h92/h69/h00/h00/9446673383454.jpg','Bauducco','Bolo',1,20),(3,1,'783568795236','Leite Integral UHT Danone Paulista 1 Litro','UN',2.99,'https://static.carrefour.com.br/medias/sys_master/images/images/h90/h78/h00/h00/9319730053150.jpg','Danone','Leite',1,35),(4,1,'7830987952366','Azeite Portugu├¬s Extra Virgem Tradicional Andorinha Dorinha 500g','UN',16.99,'https://static.carrefour.com.br/medias/sys_master/images/images/h94/hf2/h00/h00/9476906811422.jpg','Sovena','Azeite',1,40);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (2,'l','l','l','consumer'),(3,'l','l','l','consumer'),(4,'varejo','varejo','varejo@email.com','retail'),(5,'varejo','varejo','varejo@email.com','retail'),(6,'saovicente','vicente123','varejo@email.com','retail'),(7,'extrahiper','extra123','varejo@email.com','retail'),(8,'l','l','l','consumer'),(9,'l','l','l','consumer'),(10,'l','l','l','consumer'),(11,'l','l','l','consumer'),(12,'l','l','l','consumer'),(15,'leonardo123','leoleo','leonardo@hotmail.com','consumer'),(16,'leonardo123','leoleo','leonardo@hotmail.com','consumer'),(17,'leonardo123','111','leonardo@hotmail.com','consumer'),(18,'l','l','l','consumer'),(19,'guigui','guigui123','guilherme@hotmail.com','consumer'),(20,'guigui','guigui123','guilherme@hotmail.com','consumer'),(21,'vitornata','vitor','vitornata@gmail.com','consumer'),(22,'guilherme123','guigui','guilherme@gmail.com','consumer');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `varejo`
--

DROP TABLE IF EXISTS `varejo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `varejo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fantasia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `responsavel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `foto` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_5DE8FBADB38439E` (`usuario_id`),
  KEY `IDX_5DE8FBA1BB76823` (`endereco_id`),
  CONSTRAINT `FK_5DE8FBA1BB76823` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`),
  CONSTRAINT `FK_5DE8FBADB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `varejo`
--

LOCK TABLES `varejo` WRITE;
/*!40000 ALTER TABLE `varejo` DISABLE KEYS */;
INSERT INTO `varejo` VALUES (1,'12354687951426','Paulist├úo LTDA','Paulist├úo Supermercados','4013-2664','Roberto','',4,4,'https://1.kekantoimg.com/CqJL37e08QhZFVjrXKEhIHqvyEo=/300x300/s3.amazonaws.com/kekanto_pics/pics/417/686417.jpg'),(3,'12354687955550','S├úo Vicente','Supermercados S├úo Vicente','40222222','Maur├¡cio','Geral',6,6,'https://ofertasnosupermercado.com/wp-content/uploads/2017/06/S%C3%A3o-Vicente.jpg'),(4,'12354687955560','Extra Mercado','Extra Supermercados e Hipermercados','40131313','Jo├úo','Geral',7,7,'https://www.extra-imagens.com.br/html/logo/logo_extra.jpg');
/*!40000 ALTER TABLE `varejo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-04 22:14:55
