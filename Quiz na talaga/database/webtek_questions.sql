-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: webtek
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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `quest_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id` int(11) NOT NULL,
  `quest_no` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(75) NOT NULL,
  `option_a` varchar(75) NOT NULL,
  `option_b` varchar(75) NOT NULL,
  `option_c` varchar(75) NOT NULL,
  PRIMARY KEY (`quest_id`),
  KEY `quiz_idx` (`quiz_id`),
  CONSTRAINT `quiz` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,1,1,'Is this the first question','Lorem','One','Two','Three'),(2,1,2,'Is this the second question','Lorem','One','Two','Three'),(3,1,3,'Is this the third question','Lorem','One','Two','Three'),(4,1,4,'Is this the fourth question','Lorem','One','Two','Three'),(5,1,5,'Is this the fifth question','Lorem','One','Two','Three'),(6,2,1,'what','Lorem','One','Two','Three'),(7,2,2,'who','Lorem','One','Two','Three'),(8,2,3,'when','Lorem','One','Two','Three'),(9,2,4,'how','Lorem','One','Two','Three'),(10,2,5,'why','Lorem','One','Two','Three'),(11,3,1,'Sino','Lorem','One','Two','Three'),(12,3,2,'Ano','Lorem','One','Two','Three'),(13,3,3,'Bakit','Lorem','One','Two','Three'),(14,3,4,'Kailan','Lorem','One','Two','Three'),(15,3,5,'Paano','Lorem','One','Two','Three');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-10  6:07:58
