CREATE DATABASE  IF NOT EXISTS `rhgonzal_dbvrequest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rhgonzal_dbvrequest`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: rhgonzal_dbvrequest
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `request_information_table`
--

DROP TABLE IF EXISTS `request_information_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_information_table` (
  `request_id` int(9) NOT NULL AUTO_INCREMENT,
  `requestor_id` int(9) NOT NULL,
  `requestor_name` varchar(255) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_plate_no` varchar(25) NOT NULL,
  `request_location` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `location_coordinates` varchar(255) NOT NULL,
  `request_date` datetime NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_information_table`
--

LOCK TABLES `request_information_table` WRITE;
/*!40000 ALTER TABLE `request_information_table` DISABLE KEYS */;
INSERT INTO `request_information_table` VALUES (5,1,'Ramil Gonzales','dawd','dawda','dawdwa','2015-06-28 04:38:14','','2015-06-30 00:00:00'),(6,1,'Ramil Gonzales','dawd','dawda','dawdwa','2015-06-28 04:40:59','','2015-06-30 00:00:00'),(7,1,'Ramil Gonzales','dawd','dawd','dawd','2015-06-28 04:55:33','','2015-06-30 00:00:00'),(8,1,'Ramil Gonzales','Mazda 3','29382q','Tacloban ','2015-06-28 05:07:13','','2015-06-30 00:00:00'),(9,1,'Ramil Gonzales','CRV','GTF-212','PaLo Leyte','2015-06-28 06:05:57','','2015-07-23 00:00:00'),(10,1,'Ramil Gonzales','Toyota Innova','TRE453','Sta. Fe Leyte','2015-06-28 16:59:15','','2015-08-28 00:00:00'),(11,1,'Ramil Gonzales','','','','2015-06-29 05:42:47','','0000-00-00 00:00:00'),(12,1,'Ramil Gonzales','','','','2015-07-04 14:33:30','','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `request_information_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request_logs`
--

DROP TABLE IF EXISTS `request_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request_logs` (
  `log_id` int(9) NOT NULL AUTO_INCREMENT,
  `request_id` int(9) NOT NULL,
  `request_status` int(9) NOT NULL,
  `details` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  KEY `request_id` (`request_id`),
  CONSTRAINT `request_logs_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request_information_table` (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request_logs`
--

LOCK TABLES `request_logs` WRITE;
/*!40000 ALTER TABLE `request_logs` DISABLE KEYS */;
INSERT INTO `request_logs` VALUES (3,8,1,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"Mazda 3\",\"vehicle_plate_no\":\"29382q\",\"request_date\":\"2015-06-30\",\"request_location\":\"Tacloban \",\"location_coordinates\":\"\"}','2015-06-28 05:07:14'),(4,8,2,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"Mazda 3\",\"vehicle_plate_no\":\"29382q\",\"request_date\":\"2015-06-30\",\"request_location\":\"Tacloban \",\"location_coordinates\":\"\"}','2015-06-28 06:07:14'),(5,9,1,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"CRV\",\"vehicle_plate_no\":\"GTF-212\",\"request_date\":\"2015-07-23\",\"request_location\":\"PaLo Leyte\",\"location_coordinates\":\"\"}','2015-06-28 06:05:57'),(6,9,3,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"CRV\",\"vehicle_plate_no\":\"GTF-212\",\"request_date\":\"2015-07-23\",\"request_location\":\"PaLo Leyte\",\"location_coordinates\":\"\"}','2015-06-28 09:05:57'),(7,10,1,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"Toyota Innova\",\"vehicle_plate_no\":\"TRE453\",\"request_date\":\"2015-08-28\",\"request_location\":\"Sta. Fe Leyte\",\"location_coordinates\":\"\"}','2015-06-28 16:59:18'),(8,11,1,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"\",\"vehicle_plate_no\":\"\",\"request_date\":\"\",\"request_location\":\"\",\"location_coordinates\":\"\"}','2015-06-29 05:42:47'),(9,12,1,'{\"requestor_id\":\"1\",\"requestor_name\":\"Ramil Gonzales\",\"vehicle_name\":\"\",\"vehicle_plate_no\":\"\",\"request_date\":\"\",\"request_location\":\"\",\"location_coordinates\":\"\"}','2015-07-04 14:33:30');
/*!40000 ALTER TABLE `request_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_employee`
--

DROP TABLE IF EXISTS `t_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_employee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `auth` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `isActive` tinyint(1) unsigned DEFAULT '0',
  `idRole` int(11) unsigned NOT NULL,
  `idDepartment` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idRole_idx` (`idRole`),
  CONSTRAINT `fk_idRole` FOREIGN KEY (`idRole`) REFERENCES `t_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_employee`
--

LOCK TABLES `t_employee` WRITE;
/*!40000 ALTER TABLE `t_employee` DISABLE KEYS */;
INSERT INTO `t_employee` VALUES (3,'gdfgd','gdfg',NULL,'gdfg','dfgdf','','2015-07-07 00:00:00',0,1,0),(19,'alvin','espejo','misagal','San Jose','Web Developer','','2015-07-07 00:00:00',0,2,NULL);
/*!40000 ALTER TABLE `t_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_roles`
--

DROP TABLE IF EXISTS `t_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(75) NOT NULL,
  `code` varchar(45) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_roles`
--

LOCK TABLES `t_roles` WRITE;
/*!40000 ALTER TABLE `t_roles` DISABLE KEYS */;
INSERT INTO `t_roles` VALUES (1,'Administrator','Admin','adasd'),(2,'Employee','EMP','Ordinary users');
/*!40000 ALTER TABLE `t_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_status`
--

DROP TABLE IF EXISTS `t_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_status`
--

LOCK TABLES `t_status` WRITE;
/*!40000 ALTER TABLE `t_status` DISABLE KEYS */;
INSERT INTO `t_status` VALUES (4,'rer','ere','rer'),(5,'hhhh','hhh','hhh');
/*!40000 ALTER TABLE `t_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_users`
--

DROP TABLE IF EXISTS `t_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idEmployee` int(11) unsigned NOT NULL,
  `username` varchar(75) NOT NULL,
  `password` varchar(120) NOT NULL,
  `date_created` datetime NOT NULL,
  `isLoggedIn` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_idEmployee_idx` (`idEmployee`),
  CONSTRAINT `fk_idEmployee` FOREIGN KEY (`idEmployee`) REFERENCES `t_employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_users`
--

LOCK TABLES `t_users` WRITE;
/*!40000 ALTER TABLE `t_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_vehicles`
--

DROP TABLE IF EXISTS `t_vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_vehicles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `plate_number` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `inUsed` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_vehicles`
--

LOCK TABLES `t_vehicles` WRITE;
/*!40000 ALTER TABLE `t_vehicles` DISABLE KEYS */;
INSERT INTO `t_vehicles` VALUES (1,'Toyota','RTE-123','Black','asdasd',0),(4,'Toyota','RTE-128','asda','sadasd',0),(6,'dasd','RTE-1236','asdadd','dasd',0);
/*!40000 ALTER TABLE `t_vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_information`
--

DROP TABLE IF EXISTS `user_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_information` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `employee_id` int(9) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` int(3) NOT NULL,
  `role` int(3) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_information`
--

LOCK TABLES `user_information` WRITE;
/*!40000 ALTER TABLE `user_information` DISABLE KEYS */;
INSERT INTO `user_information` VALUES (1,1990,'Ramil','Gonzales','Jaro,Leyte','Staff','5f05b6f966568941be28dfc16b9fd062','','2015-06-28 02:02:52',1,2);
/*!40000 ALTER TABLE `user_information` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-07 19:45:33
