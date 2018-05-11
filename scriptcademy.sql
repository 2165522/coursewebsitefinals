CREATE DATABASE  IF NOT EXISTS `scriptcademy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `scriptcademy`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: scriptcademy
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `choice1` varchar(45) DEFAULT 'null',
  `choice2` varchar(45) DEFAULT 'null',
  `choice3` varchar(45) DEFAULT 'null',
  `choice4` varchar(45) DEFAULT 'null',
  `answer` varchar(45) NOT NULL,
  PRIMARY KEY (`q_id`),
  UNIQUE KEY `q_id_UNIQUE` (`q_id`),
  KEY `topic_id_idx` (`topic_id`),
  CONSTRAINT `topic_id` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topid_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,1,'Servlets are included in what platform of Java Development Kit?','Standard Edition','Enterprise Edition','Micro Edition','Web Edition','Enterprise Edition'),(2,1,2,'A servlet is instantiated in the class Constructor.','TRUE','FALSE','null','null','TRUE'),(3,1,3,'In what method is the Servlet initialized?','start() method','init() method','build() method','service() method','init() method'),(4,1,4,'In what method is the Servlet dropped?','destroy() method','drop() method','remove() method','delete() method','destroy() method'),(5,1,5,'The service() method is used in ________?','client requests','server responses','null','null','client requests'),(6,1,6,'One example of an application server which runs HTTPServlets','Internet Information Services','WAMP Server','Apache Tomcat','null','Apache Tomcat');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `topid_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` varchar(45) NOT NULL,
  PRIMARY KEY (`topid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'Servlets'),(2,'PHP'),(3,'NodeJS');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_accounts`
--

DROP TABLE IF EXISTS `user_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_accounts` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_accounts`
--

LOCK TABLES `user_accounts` WRITE;
/*!40000 ALTER TABLE `user_accounts` DISABLE KEYS */;
INSERT INTO `user_accounts` VALUES (1,'Earl','Rimando','earlcapitan','ejamrimando@gmail.com','password'),(2,'Ray','Servidad','benz','sfasd@gmail.com','password'),(3,'Vincent','Ibalio','beanie','dafs@gmail.com','password'),(4,'Test','Lang','testlang','test@gmail.com','password'),(5,'Ray','Servidad','benzservidad','dasdsa@gmail.com','password');
/*!40000 ALTER TABLE `user_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'scriptcademy'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-12  5:24:55
