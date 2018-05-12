-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `q_title`
--

DROP TABLE IF EXISTS `q_title`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `q_title` (
  `qtitle_id` int(11) NOT NULL AUTO_INCREMENT,
  `qtitle_title` varchar(45) NOT NULL,
  PRIMARY KEY (`qtitle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `q_title`
--

LOCK TABLES `q_title` WRITE;
/*!40000 ALTER TABLE `q_title` DISABLE KEYS */;
INSERT INTO `q_title` VALUES (1,'NodeJS'),(2,'Servlet'),(3,'PHP');
/*!40000 ALTER TABLE `q_title` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_num` int(11) NOT NULL,
  `qtitle_id` int(11) NOT NULL,
  `questions` varchar(75) NOT NULL,
  `answer` varchar(45) NOT NULL,
  `choice_a` varchar(45) NOT NULL,
  `choice_b` varchar(45) NOT NULL,
  `choice_c` varchar(45) NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `quiz_id_idx` (`qtitle_id`),
  CONSTRAINT `qtitle_id` FOREIGN KEY (`qtitle_id`) REFERENCES `q_title` (`qtitle_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,1,1,'First Question','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(2,2,1,'Second Question','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(3,3,1,'Third Question','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(4,1,2,'Unang tanong','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(5,2,2,'Pangalawang tanong','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(6,3,2,'Pangatlong tanong','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(7,1,3,'Question 1','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(8,2,3,'Question 2','eto sagot','hindi to','hindi nga to','hindi nga to kulit'),(9,3,3,'Question 3','eto sagot','hindi to','hindi nga to','hindi nga to kulit');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-11 22:06:21
