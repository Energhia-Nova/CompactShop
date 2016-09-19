CREATE DATABASE  IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;
-- MySQL dump 10.13  Distrib 5.6.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.6.28-0ubuntu0.15.04.1

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'brand-one','Brand  1','...'),(2,'brand-two','Brand 2','...');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=142 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `currency` varchar(2) NOT NULL,
  `on` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','',0),(2,'Albania','',0),(3,'Algeria','',0),(4,'Andorra','',0),(5,'Angola','',0),(6,'Anitgua and Barbuda','',0),(7,'Argentina','',0),(8,'Armenia','',0),(9,'Australia','',0),(10,'Azerbaijan','',0),(11,'Bahamas','',0),(12,'Bahrain','',0),(13,'Bangladesh','',0),(14,'Barbados','',0),(15,'Belarus','',0),(16,'Belize','',0),(17,'Benin','',0),(18,'Bhutan','',0),(19,'Bolivia','',0),(20,'Bosnia and Herzegovina','',0),(21,'Botswana','',0),(22,'Brazil','',0),(23,'Brunei','',0),(24,'Burkina Faso','',0),(25,'Burma','',0),(26,'Burundi','',0),(27,'Cambodia','',0),(28,'Cameroon','',0),(29,'Canada','',0),(30,'Cape Verde','',0),(31,'Central African Republic','',0),(32,'Chad','',0),(33,'Chile','',0),(34,'China','',0),(35,'Colombia','',0),(36,'Comoros','',0),(37,'Congo, Democratic Republic of the','',0),(38,'Congo, Repubblic of the','',0),(39,'Cook Islands','',0),(40,'Costa Rica','',0),(41,'Cote Divoire','',0),(42,'Cuba','',0),(43,'Djibouti','',0),(44,'Dominica','',0),(45,'Dominican Republic','',0),(46,'East Timor','',0),(47,'Ecuador','',0),(48,'Egypt','',0),(49,'El Salvador','',0),(50,'Equatorial Guinea','',0),(51,'Eritrea','',0),(52,'Ethiopia','',0),(53,'Fiji','',0),(54,'Gabon','',0),(55,'Gambi','',0),(56,'Georgia','',0),(57,'Ghana','',0),(58,'Grenada','',0),(59,'Guatemala','',0),(60,'Guinea','',0),(61,'Guinea-Bissau','',0),(62,'Guyana','',0),(63,'Haiti','',0),(64,'Honduras','',0),(65,'Iceland','',0),(66,'India','',0),(67,'Indonesia','',0),(68,'Iran','',0),(69,'Israel','',0),(70,'Ivory Coast','',0),(71,'Jamaica','',0),(72,'Japan','',0),(73,'Jordan','',0),(74,'Kazakhstan','',0),(75,'Kenya','',0),(76,'Kiribati','',0),(77,'Korea, North','',0),(78,'Korea, South','',0),(79,'Kuwait','',0),(80,'Kyrgyzstan','',0),(81,'Laos','',0),(82,'Lebanon','',0),(83,'Lesotho','',0),(84,'Liberia','',0),(85,'Libya','',0),(86,'Liechtenstein','',0),(87,'Macedonia','',0),(88,'Madagascar','',0),(89,'Malawi','',0),(90,'Malaysia','',0),(91,'Maldives','',0),(92,'Mali','',0),(93,'Marshall Islands','',0),(94,'Mauritania','',0),(95,'Mauritius','',0),(96,'Mexico','',0),(97,'Micronesia, Federal States of','',0),(98,'Moldova','',0),(99,'Monaco','',0),(100,'Mongolia','',0),(101,'Montenegro','',0),(102,'Morocco','',0),(103,'Mozambique','',0),(104,'Myanmar','',0),(105,'Nagorno-Karabakh','',0),(106,'Namibia','',0),(107,'Nauru','',0),(108,'Nepal','',0),(109,'New Zealand','',0),(110,'Nicaragua','',0),(111,'Niger','',0),(112,'Nigeria','',0),(113,'Norway','',0),(114,'Oman','',0),(115,'Pakistan','',0),(116,'Palestine','',0),(117,'Panama','',0),(118,'Papua New Guinea','',0),(119,'Paraguay','',0),(120,'Peru','',0),(121,'Philippines','',0),(122,'Qatar','',0),(123,'Russia','',0),(124,'Rwanda','',0),(125,'Saint Kitts and Nevis','',0),(126,'Saint Lucia','',0),(127,'Saint Vincent and the Grenadines','',0),(128,'Samoa','',0),(129,'San Marino','',0),(130,'Sao Tome and Principe','',0),(131,'Saudi Arabia','',0),(132,'Senegal','',0),(133,'Serbia','',0),(134,'Seychelles','',0),(135,'Sierra Leone','',0),(136,'Singapore','',0),(137,'Solomon Islands','',0),(138,'Somalia','',0),(139,'South Africa','',0),(140,'South Sudan','',0),(141,'Sri Lanka','',0),(142,'Sudan','',0),(143,'Suriname','',0),(144,'Swaziland','',0),(145,'Switzerland','',0),(146,'Syria','',0),(147,'Tajikistan','',0),(148,'Tanzania','',0),(149,'Thailand','',0),(150,'Togo','',0),(151,'Tonga','',0),(152,'Trinidad and Tobago','',0),(153,'Tunisia','',0),(154,'Turkey','',0),(155,'Turkmenistand','',0),(156,'Tuvalu','',0),(157,'Uganda','',0),(158,'United Arab Emirates','',0),(159,'European Union','€',1),(160,'United States of America','$',0),(161,'Uruguay','',0),(162,'Uzbekistan','',0),(163,'Vanuatu','',0),(164,'Vatican City','',0),(165,'Venezuela','',0),(166,'Vietnam','',0),(167,'Yemen','',0),(168,'Zambia','',0),(169,'Zimbabwe','',0),(170,'Austria','',0),(171,'Belgium','',0),(172,'Bulgaria','',0),(173,'Croatia','',0),(174,'Cyprus','',0),(175,'Czech Republic','',0),(176,'Denmark','',0),(177,'Estonia','',0),(178,'Finland','',0),(179,'France','',0),(180,'Germany','',0),(181,'Greece','',0),(182,'Hungary','',0),(183,'Ireland','',0),(184,'Italy','',0),(185,'Latvia','',0),(186,'Lithuania','',0),(187,'Luxemburgh','',0),(188,'Malta','',0),(189,'Netherlands','',0),(190,'Poland','',0),(191,'Portugal','',0),(192,'Slovakia','',0),(193,'Slovenia','',0),(194,'Spain','',0),(195,'Sweden','',0),(196,'United Kingdom','',0),(197,'Ukraine','',0),(198,'Romania','',0);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `on` tinyint(1) DEFAULT NULL,
  `short` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'english',1,'en'),(2,'deutsch',0,'de');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `classes` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,0,'meat-and-dairy','meat and dairy','',1),(3,0,'bakery','Bakery','',2),(4,1,'meat-and-dairy/meat','Meat','',2),(5,1,'meat-and-dairy/milky','Milky','',1),(6,0,'other','other','',4),(7,0,'drinks','Drinks','',3),(9,7,'drinks/cola','Cola (Mineral Water)','',0),(10,7,'drinks/alcohol','Alkohol','',0),(13,7,'drinks/teas','Teas','',0),(14,7,'drinks/juices','Juice','',0),(15,10,'drinks/alcohol/wine','Wine','',0);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `alias` varchar(256) NOT NULL,
  `value` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'Store  Name','store-name','CompShop');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,18,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `ru_name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Face.','face',0,'Login.'),(2,'Orders.','orders',0,'Orders.'),(3,'Archive.','archive',0,'Archive.'),(4,'Profile.','profile',0,'Profile.'),(5,'Contact.','contact',0,'Contact.'),(6,'Projects.','projects',0,'Projects.'),(7,'Follow.','follow',0,'Social Nets.'),(8,'Sign Up.','sign-up',0,'Registration'),(9,'Artwork','artwork',6,'Art.'),(10,'Page. The Store','magazin',6,'Store.'),(11,'Twitter.','twitter',7,'Twitter.'),(12,'Facebook.','facebook',7,'Facebook.'),(13,'Behance.','behance',7,'Behance.');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `alias` varchar(2555) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,10,'Product 1','bakery/product-1','',20,0,1,0,'1286910894_bulochka.jpg'),(2,10,'Product 2','product-2','',20,0,1,0,''),(3,10,'Product 3','product-3','',20,0,1,0,''),(4,10,'Product 4','product-4','',20,0,0,0,''),(5,10,'Product 5','product-5','',20,0,0,0,''),(6,10,'Product 6','product-6','',20,0,0,0,''),(7,10,'Product 7','product-7','',20,0,0,0,''),(8,10,'Product 8','product-8','',20,0,0,0,''),(9,10,'Product 9','product-9','',20,0,0,0,''),(10,10,'Product 10','product-10','',20,0,0,0,''),(11,10,'Product-11','product-11','',20,6,0,0,''),(12,10,'Product 12','meat-and-dairy/meat/product-12','',20,4,0,0,'1286910894_bulochka.jpg'),(13,10,'Product 13','other/product-13','',20,0,0,0,''),(14,10,'Product 14','product-14','',20,6,0,0,''),(15,10,'Product 15','product-15','',20,0,0,0,''),(16,10,'Product 16','drinks/product-16','',0,0,0,0,'1286910894_bulochka.jpg'),(17,10,'Product 17','drinks/juice/product-17','',20,14,0,0,''),(18,10,'Product 18','meat-and-dairy/meat/product-18','',20,0,0,0,''),(19,10,'Product 19','drinks/product-19','',20,6,0,0,''),(20,10,'Product 20','drinks/juice/product-20','',20,14,0,0,''),(21,10,'Product 21','drinks/product-21','',20,6,0,0,'');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `contacts` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (9,17,25,'','skype[login]');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchases`
--

LOCK TABLES `purchases` WRITE;
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
INSERT INTO `purchases` VALUES (20,20,1,1),(19,20,8,1),(18,20,2,1),(17,20,3,1),(16,19,3,1),(15,19,1,3),(14,19,2,2),(21,20,7,1),(22,20,6,1),(23,20,4,1),(24,20,5,1),(25,21,7,3),(26,21,6,1),(27,21,5,1),(28,21,4,1),(29,21,3,1),(30,21,2,1),(31,21,1,1);
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` VALUES (10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(17,2),(18,1),(19,1),(19,2);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,'wait'),(2,'ready'),(3,'done');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(128) NOT NULL,
  `description` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'Supplier','supplier','Supplier  Art.');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tokens`
--

LOCK TABLES `user_tokens` WRITE;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `accepted` varchar(128) NOT NULL,
  `confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`),
  UNIQUE KEY `accepted` (`accepted`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (18,'progeram@gmail.com','prostouser','adf9b94ea7d63641c2bcf172eec71c0e9c38342e7f7c3e29877ada9769083b50',6,1394800185,'a64a80bd75197036000e9eda4bbd0c5dabd35cab',1,94322),(19,'admin@gmail.com','admin','7d06c120f94ccc2bca7ad4e3cc703a16c1fdd075caf54784d1cf459732f4b8cc',0,NULL,'1',1,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-14 11:09:13
