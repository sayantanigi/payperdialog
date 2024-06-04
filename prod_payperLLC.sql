-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: srv867.hstgr.io    Database: u610141606_payperdialog
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.7-MariaDB-cll-lve

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `profile` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `edited` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` smallint(6) DEFAULT 1 COMMENT '1(Active), 0(Deactive)',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Super Admin','admin','test@gmail.com','e10adc3949ba59abbe56e057f20f883e','2841_a1.png','2018-06-19 02:01:31','2023-06-01 13:23:23',1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appointment_scheduling`
--

DROP TABLE IF EXISTS `appointment_scheduling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointment_scheduling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `description` text NOT NULL,
  `event_color` varchar(50) NOT NULL,
  `event_icon` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointment_scheduling`
--

LOCK TABLES `appointment_scheduling` WRITE;
/*!40000 ALTER TABLE `appointment_scheduling` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointment_scheduling` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` text NOT NULL,
  `heading` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (2,'Home Top','Home Top','2546_7.png','Active','2023-05-29 03:14:59','2023-08-23 05:52:30'),(3,'Home Middle','Home Middle','5008_2.png','Active','2023-05-30 07:18:49','2023-08-23 05:50:07'),(4,'Vendors','Vendors','8291_8.png','Active','2023-06-11 05:20:06','2023-08-23 05:55:10'),(5,'Freelancers','Freelancers','7545_9.png','Active','2023-06-11 05:21:41','2023-08-23 05:56:55'),(6,'Our Jobs','Our Jobs','3659_5.png','Active','2023-06-11 05:21:54','2023-08-23 05:53:52'),(7,'Pricing','Pricing','6220_10.png','Active','2023-06-11 05:22:21','2023-08-23 05:59:04'),(8,'About Us Top','About Us Top','542_11.png','Active','2023-06-11 05:22:31','2023-08-23 06:14:56'),(9,'About Us Middle','About Us Middle','424_11.png','Active','2023-06-11 05:22:46','2023-08-23 06:00:26'),(10,'Contact Us','Contact Us','6895_13.png','Active','2023-06-11 05:23:01','2023-08-23 06:19:20'),(11,'Privacy policy','Privacy Policy','6293_4.png','Active','2023-06-11 05:23:16','2023-08-23 06:14:29'),(12,'Term and conditions','Term and Conditions','3969_14.png','Active','2023-06-11 05:23:32','2023-08-23 06:21:11'),(13,'Sign Up','Sign Up','3693_15.png','Active','2023-06-14 08:17:45','2023-08-23 06:23:34'),(14,'Login','Login','5021_16.png','Active','2023-06-14 08:18:04','2023-08-23 06:24:31'),(15,'Post Jobs','Post Jobs','323_17.png','Active','2023-06-14 08:18:20','2023-08-23 06:25:26'),(16,'Vendor Details','Vendor Details','9656_19.png','Active','2023-06-14 08:18:35','2023-08-23 06:32:46'),(17,'Frelancer Details','Frelancer Details','542_18.png','Active','2023-06-14 08:18:50','2023-08-23 06:32:37'),(18,'Post Job Details','Post Job Details','8844_5.png','Active','2023-06-14 08:19:01','2023-08-23 06:33:01');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `career_tips`
--

DROP TABLE IF EXISTS `career_tips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `career_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` enum('Active','inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career_tips`
--

LOCK TABLES `career_tips` WRITE;
/*!40000 ALTER TABLE `career_tips` DISABLE KEYS */;
INSERT INTO `career_tips` VALUES (2,'Why do we use it?','7876_eye.png','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n','Active','2023-05-28 22:33:32','2023-05-28 22:33:32'),(3,'Where does it come from?','4506_x icon.png','<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n','Active','2023-05-28 22:33:55','2023-05-28 22:33:55');
/*!40000 ALTER TABLE `career_tips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Agriculture','6837_100673704.jpg','Active','2023-10-05 14:48:14','2023-10-09 08:21:22'),(2,'Aerospace & Defense','9302_istockphoto-1437721777-612x612.jpg','Active','2023-10-05 14:48:35','2023-10-09 08:19:54'),(3,'Arts, Entertainment & Recreation','714_download.png','Active','2023-10-09 13:52:24','2023-10-09 11:52:24'),(4,'Construction, Repair & Maintenance Services','1482_maintenance-repair-service-tools-icon-blue-color-vector-37325355.jpg','Active','2023-10-09 13:53:24','2023-10-09 11:53:24'),(5,'Education','7022_3197967.png','Active','2023-10-09 13:54:05','2023-10-09 11:54:05'),(6,'Energy, Mining & Utilities','9662_download (1).png','Active','2023-10-09 13:55:18','2023-10-09 11:55:18');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userfrom_id` int(11) NOT NULL,
  `userto_id` int(11) NOT NULL,
  `postjob_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `is_delete` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,2,1,1,'hi','','2023-12-28 05:17:39','1',0),(2,1,2,1,'hello','','2024-03-20 12:41:16','1',0);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_logo`
--

DROP TABLE IF EXISTS `company_logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_logo`
--

LOCK TABLES `company_logo` WRITE;
/*!40000 ALTER TABLE `company_logo` DISABLE KEYS */;
INSERT INTO `company_logo` VALUES (2,'Partner Company','5065_1487_cc5.jpg','2023-08-31 08:45:31','Active','2023-08-31 08:45:31'),(3,'Partner Company','1773_2280_7634_cc1.jpg','2023-08-31 08:45:47','Active','2023-08-31 08:45:47');
/*!40000 ALTER TABLE `company_logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'leonice','cmcbdwwbq.qc@monochord.xyz','leonice schlee','leonice schlee',NULL,'2024-03-21 02:52:43'),(2,'Mike Keat\r\n','mikeAcceta@gmail.com','NEW: Semrush Backlinks','Hi \r\n \r\nThis is Mike Keat\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your payperdialog.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Keat\r\n \r\nmike@strictlydigital.net',NULL,'2024-03-25 08:07:26'),(3,'Kristie Malley','malley.kristie@gmail.com','Today Only','Hi,\r\n\r\nWant thousands of clients? We have compiled a list of all consumers and business\'s across 149 countries for you.\r\n\r\nWe have a special that is running today and valid till the end of the day. Come check us out:\r\n\r\nhttps://payperdialog.leadsmax.biz/\r\n\r\nConsumer Records: 294,582,351\r\nBusiness Records: 25,215,278\r\n\r\nSelling at $99 today only.',NULL,'2024-03-25 09:39:30'),(4,'Mike Evans\r\n','mikeDensnuch@gmail.com','Collaboration request','Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Evans\r\n \r\nMonkey Digital',NULL,'2024-03-30 20:18:11'),(5,'Mike Donovan\r\n','mikeAttagmatrady@gmail.com','Increase sales for your local business','This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/ranking-in-the-maps-means-sales/ \r\n \r\n \r\nThanks and Regards \r\nMike Donovan\r\n \r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/',NULL,'2024-04-08 00:44:10'),(6,'Aliaksahdrhr','sugarwork78@gmail.com','Optimize Your Website\'s Performance with Real-Time Alerts!','Stay informed about your site\'s availability with instant notifications sent directly to Telegram, Slack, or your preferred messenger. Effortless monitoring, maximum reliability https://array.surge.sh/posts/uptime-kuma/',NULL,'2024-04-09 18:00:06'),(7,'Philip Norman','philipnorman777@yahoo.com','USD172million Mutual Investment Funds','Greetings \r\nI hope this mail finds you well. I am Mr. Philip Norman a private Funds Manager for high-net-worth individuals. \r\n \r\nI hold a mandate from a Russian Client who wants his funds reinvested using 3rd party due to the current sanctions against Russians, which means all aspect of this transaction will remain confidential, we will discuss details of investment including investing in your company if it’s for expansion only. \r\n \r\nPlease note that there is no risk involved as funds are legal and currently in a Bank without encumbrances, all details will be available as soon as you indicate interest by contacting me via the email or phone number bellow to discuss this opportunity in more detail. \r\n \r\nSincerely, \r\n \r\nMr. Philip Norman \r\nEmail:philipnorman30@gmail.com',NULL,'2024-04-10 14:46:59'),(8,'Mike Waller\r\n','mikeAttagmatrady@gmail.com','FREE fast ranks for payperdialog.com','Hi there \r\n \r\nJust checked your payperdialog.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Waller\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/',NULL,'2024-04-12 09:10:25'),(9,'Romeo Oakley','romeo.oakley89@googlemail.com','payperdialog.com on the internet','Hello,\r\n\r\nWe noticed your domain: payperdialog.com is listed in very few directories.\r\n\r\nDirectories have a very high Page Rank Score and provide really good back links\r\n\r\nCompany visit us on Company Registar and list your domain in all the directories.\r\n\r\nhttps://payperdialog.companyregistar.org/payperdialog.com',NULL,'2024-04-16 09:55:45'),(10,'Mike Elmers\r\n','mikeAcceta@gmail.com','Domain Authority of your payperdialog.com','Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Elmers\r\n',NULL,'2024-04-17 23:44:04'),(11,'Mike Forman\r\n','peterDensnuch@gmail.com','Whitehat SEO for payperdialog.com','Hello \r\n \r\nI have just took a look on your SEO for  payperdialog.com for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Forman\r\n \r\nDigital X SEO Experts',NULL,'2024-04-19 21:41:06'),(12,'Mike Miller\r\n','mikeDensnuch@gmail.com','Collaboration request','Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Miller\r\n \r\nMonkey Digital',NULL,'2024-04-23 05:24:43'),(13,'Silke Lyke','order@pcxresponder.com','Contact your website visitors','Hi,\r\n\r\nIf I can tell you exactly who visited your website today - would you be interested?\r\n\r\nHere is what I mean.\r\n\r\nYou get 100 visitors today.\r\n\r\n2 of them fill out your form.\r\n1 of them calls you.\r\n97 of them are gone forever... Until Now.\r\n\r\nOur software can track:\r\n\r\n    -Who was on your website\r\n    -How they got there\r\n    -What keyword they searched\r\n    -Their Name, Phone and Email address.\r\n\r\nDon\'t lose any more leads or sales opportunities.\r\n\r\nWe\'ve been in business since 2015 with clients around the world.\r\n\r\nInterested? Send me your name and number for a no cost demo on YOUR website.\r\n\r\nLeadsMax.biz\r\n\r\n\r\nRegards,\r\nWebsite Detective\r\nDon\'t Miss Any Opportunity.',NULL,'2024-04-23 14:51:53'),(14,'Mike Oldman\r\n','mikeAcceta@gmail.com','NEW: Semrush Backlinks','Greetings \r\n \r\nThis is Mike Oldman\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your payperdialog.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Oldman\r\n \r\nmike@strictlydigital.net',NULL,'2024-04-24 11:49:10'),(15,'Ivey Girdlestone','ivey.girdlestone28@gmail.com','payperdialog.com is listed in 9/2,500 directories','Hi payperdialog.com\r\n\r\nWe noticed your website payperdialog.com is only listed in 9/2,500 directories.\r\n\r\nWe have a service that lists your company in all the directories globally.\r\n\r\nIt supports all countries, all services, to boost your SEO and get you those high quality back links that directories offer.\r\n\r\nWe have a promo running for a one time fee of $99\r\n\r\nVisit us on https://payperdialog.companyregistar.org/payperdialog.com to get listed.',NULL,'2024-04-29 21:58:22'),(16,'Mike Holmes\r\n','mikeAttagmatrady@gmail.com','Increase sales for your local business','This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/ranking-in-the-maps-means-sales/ \r\n \r\n \r\nThanks and Regards \r\nMike Holmes\r\n \r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/',NULL,'2024-04-30 18:07:45'),(17,'Jannes','jannes@pcxresponder.com','Do you need clients','Hi,\r\n\r\nWe are a provider of premium databases for companies.\r\n\r\nI want to know if you need any sort of data for your business?\r\n\r\nPlease respond to this email and let us know what you are looking for.\r\n\r\nRegards\r\nJannes',NULL,'2024-05-06 16:58:53'),(18,'Mike Holiday\r\n','mikeAttagmatrady@gmail.com','FREE fast ranks for payperdialog.com','Hi there \r\n \r\nJust checked your payperdialog.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Holiday\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/',NULL,'2024-05-09 19:16:43'),(19,'Mike Milton\r\n','peterDensnuch@gmail.com','Add WhatsApp Marketing channel for payperdialog.com','Hi there \r\n \r\nThe Internet is full with false Whatsapp advertising methods which promise: “Marketing automation using your own WhatsApp Number”. \r\n \r\nIt’s a total scam and will only get your number banned in whatsapp in seconds. \r\n \r\nThe only way to do this legally and safely is by our researched methods. \r\nWe will set up everything for you and you will be able to send Whatsapp Marketing messages legally and attract local audience for your business. \r\n \r\nCheck all details below. \r\nhttps://www.onlinelocalmarketing.org/product/local-whatsapp-marketing/ \r\n \r\nRegards \r\nMike Milton\r\n https://www.onlinelocalmarketing.org',NULL,'2024-05-11 01:13:41'),(20,'Mike Chapman\r\n','peterDensnuch@gmail.com','Whitehat SEO for payperdialog.com','Howdy \r\n \r\nI have just verified your SEO on  payperdialog.com for the ranking keywords and saw that your website could use an upgrade. \r\n \r\nWe will enhance your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Chapman\r\n \r\nDigital X SEO Experts',NULL,'2024-05-14 18:47:16'),(21,'Mike Michaelson\r\n','mikeAcceta@gmail.com','Domain Authority of your payperdialog.com','Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Michaelson\r\n',NULL,'2024-05-15 18:19:00'),(22,'Michael Yoshioka','crypto.adviser00004@gmail.com','Vorstellung einer unverzichtbaren VISA-Debitkarte für Kryptowährungsnutzer','Hallo, ich bin Michael Y. von Crypto Adviser LTD. Hier ist eine Wallet und Debitkarte für Kryptowährungen. \r\n \r\nRedotPay WALLET: \r\nRedotPay bietet in Partnerschaft mit Binance eine Krypto-Wallet und VISA-Debitkarte. Bezahlen Sie direkt mit Krypto. Beantragen Sie die Karte über die Wallet-App. \r\n \r\nWallet-Gebühr: Kostenlos \r\nKartengebühr: Virtuelle VISA $5 / Physische VISA $100 \r\nURL: https://redotpay.cards/register/ \r\nOCTPASS WALLET: \r\nDie JDB Bank in Laos arbeitet mit der \"Octopus\" Wallet zusammen. Beantragen Sie eine VISA-Debitkarte, heben Sie Bargeld ab und tätigen Sie internationale Überweisungen. \r\n \r\nWallet-Gebühr: Kostenlos \r\nBankkontogebühr: $800 ($300 Kaution) \r\nURL: JDB Bank](https://laos-bank.jp/en/ \r\nVerwenden Sie diese Karten weltweit bei VISA-Akzeptanzstellen. Erhalten Sie ein Affiliate-Konto über die oben genannten URLs. \r\n \r\nAffiliate-Belohnungen: Bis zu $40/Karte + bis zu 0,25% Gebühr für RedotPay und bis zu $150/Karte für JDB Bank. \r\nBei Fragen kontaktieren Sie uns: \r\n \r\nE-Mail: info@crypto-adviser.co \r\n \r\n \r\nCrypto Adviser LTD \r\nMichael Yoshioka \r\nE-Mail: info@crypto-adviser.co',NULL,'2024-05-16 12:32:03'),(23,'Tobiascer','no.reply.PatrickSchmidt@gmail.com','Do you want an inexpensive and imaginative advertising solution?','Howdy-ho! payperdialog.com \r\n \r\nHave you heard that it is possible to make an appeal that is completely lawful? We propose a new unique way of sending messages through contact forms. \r\nFeedback Forms\' messages are thought of as significant thus avoiding the categorization of them as spam. \r\nWe offer you to try our service for free. \r\nWe can dispatch up to 50,000 messages to you. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis offer is automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.',NULL,'2024-05-21 13:09:37'),(24,'Mike Wallace\r\n','mikeAcceta@gmail.com','NEW: Semrush Backlinks','Hi \r\n \r\nThis is Mike Wallace\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your payperdialog.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\nRegards \r\nMike Wallace\r\n \r\nmike@strictlydigital.net',NULL,'2024-05-21 18:37:07'),(25,'Mike Crossman\r\n','mikeDensnuch@gmail.com','Collaboration request','Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Crossman\r\n \r\nMonkey Digital',NULL,'2024-05-22 02:21:33'),(26,'Elisa Gleadow','isis.gleadow@gmail.com','Paid Advertising on payperdialog.com','Hi payperdialog.com Admin,\r\n\r\nI am curious to know how much you would charge for a link insertion in an existing post?\r\n\r\nDo you also allow the publication of sponsored posts on your blog? What\'s the fee?\r\n\r\nIf you prefer EXCHANGE instead of paid linking, we may get you featured on any of any of the following websites:\r\n\r\necommercefastlane.com (DR:71, Traffic:80.6K)\r\ncoolbio.org (DR:64, Traffic:102K)\r\nvyvymangaa.us (DR:48, Traffic:135K)\r\n\r\nYou won\'t have to link back to the same website but some other one.\r\n\r\nThis is called 3-way link exchange, the safest link building method works today.\r\n\r\nWe\'ve over 8K+ sites in our inventory with real organic traffic, if you want to look for more options for exchange.\r\n\r\nIf you\'re interested, please feel free to contact me via email at sebmarketer@gmail.com\r\n\r\nBest of Regards',NULL,'2024-05-22 09:02:36'),(27,'Tobiascer','no.reply.ClaudeSmith@gmail.com','A state-of-the-art method of email distribution.','Yo! payperdialog.com \r\n \r\nDid you know that it is possible to send proposals completely lawfully? We put a new, unique way of sending commercial offers through feedback forms. \r\nAs Feedback Forms messages are considered important, they will not be marked as spam. \r\nWe give you a chance to experience our service for free. \r\nYou can benefit from our service of sending up to 50,000 messages. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\nPlease use the contact details below to get in touch with us. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp  +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\n \r\nWe only use chat for communication.',NULL,'2024-05-22 19:10:13'),(28,'Dir. Chang','chihc420@gmail.com','Investment Proposal','Greetings, \r\n \r\nI am reaching out to propose a lucrative investment opportunity that I believe you will find intriguing. If you are interested in learning more, please reply, and I will gladly share the details with you. Kindly respond directly to this email for more information: dirchang@iei5h.com \r\n \r\nWarm regards, \r\nDir. Chang \r\n \r\nContact: dirchang@iei5h.com',NULL,'2024-05-23 01:27:49'),(29,'Arman Moritz','moritz.tessa@gmail.com','Boost Speed & Security! Website Care for Just $39/Month','Is your website slow and outdated?  Worrying about security threats? ️\r\n\r\nWe can help!  For just $39 a month, we offer a comprehensive website care package that includes:\r\n\r\nWebsite Maintenance: Regular updates, backups, and security checks to keep your site running smoothly and safely.\r\n\r\nWebsite Speed Optimization (Free) : Faster loading times for a better user experience and improved search engine ranking.\r\n\r\nReliable Hosting (Free): Secure and high-performance hosting with SSL certification and 3 business for Free\r\n\r\nDon\'t let a sluggish website hold you back!  Our expert team will take care of everything, so you can focus on running your business.\r\n\r\nLimited Time Offer!  Sign up for our website care package today and get your first month for just $39! \r\n\r\nWe\'re Here to Help!  Contact us today through your preferred method:\r\n\r\nVisit our website: https://arwebcrafts.com/maintenance\r\nEmail us: support@arwebcrafts.com\r\nWhatsapp: wa.me/+447401742519\r\nSkype: https://join.skype.com/invite/ykEwN9QgQGG2',NULL,'2024-05-26 00:34:30'),(30,'Mike Gimson\r\n','mikeAttagmatrady@gmail.com','Increase sales for your local business','This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speedseos.com/ranking-in-the-maps-means-sales/ \r\n \r\nWhatsapp us: https://wa.link/t9gzao \r\n \r\n \r\nThanks and Regards \r\nMike Gimson\r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speedseos.com/local-seo-bundle/',NULL,'2024-05-27 10:29:25'),(31,'Julia Schneider','wmgirl75@yahoo.com','Impfschaden? Jetzt 6.000 Euro Schadenersatz sichern','Du hast auch einen Impfschaden oder Nebenwirkungen nach der Corona-Impfung? \r\n \r\nIch leite dir diese Nachricht vom Verein BÜRGERSCHUTZ weiter, weil ich gehört habe, dass du und einige deiner Freunde Impfnebenwirkungen habt oder befürchtet, welche zu bekommen. Als Geimpfte könnten wir jetzt 6.000 € Schadenersatz vom Impfarzt erhalten. \r\n \r\nDer Verein Bürgerschutz, Österreichs größter „Impfopfer-Verein“, unterstützt dich bei Impfschäden nach deiner mRNA-Behandlung oder IMPFAUSLEITUNG. \r\n \r\nZusätzlich erhalten alle Mitglieder vom https://www.buergerschutz.org kostenlos eine Anleitung zur Impfausleitung. \r\n \r\nLeite diese Nachricht weiter, um den Druck auf die Impfärzte und die Regierung zu erhöhen. \r\n \r\nLG \r\nJulia \r\n \r\n \r\nPartnerprogramm Wohncontainer \r\nhttps://skycontainer.at/',NULL,'2024-05-29 00:09:10'),(32,'Julia Schneider','wmgirl75@yahoo.com','Impfschaden? Jetzt 6.000 Euro Schadenersatz sichern','Du hast auch einen Impfschaden oder Nebenwirkungen nach der Corona-Impfung? \r\n \r\nIch leite dir diese Nachricht vom Verein BÜRGERSCHUTZ weiter, weil ich gehört habe, dass du und einige deiner Freunde Impfnebenwirkungen habt oder befürchtet, welche zu bekommen. Als Geimpfte könnten wir jetzt 6.000 € Schadenersatz vom Impfarzt erhalten. \r\n \r\nDer Verein Bürgerschutz, Österreichs größter „Impfopfer-Verein“, unterstützt dich bei Impfschäden nach deiner mRNA-Behandlung oder IMPFAUSLEITUNG. \r\n \r\nZusätzlich erhalten alle Mitglieder vom https://www.buergerschutz.org kostenlos eine Anleitung zur Impfausleitung. \r\n \r\nLeite diese Nachricht weiter, um den Druck auf die Impfärzte und die Regierung zu erhöhen. \r\n \r\nLG \r\nJulia \r\n \r\n \r\nPartnerprogramm Wohncontainer \r\nhttps://skycontainer.at/',NULL,'2024-05-30 06:06:57'),(33,'Julia Schneider','wmgirl75@yahoo.com','Top 10 Wohn- und Bürocontainer: Perfekte Wertanlage auf einen Blick','Dein Weg zu Eigentum und WERTANLAGEN ab nur 1.500 €/m² - Entdecke die Möglichkeiten auf https://skycontainer.at! \r\n \r\nDie Wohnungsnot eskaliert, und Immobilien sind heute unverzichtbar. Ein eigenes Zuhause, eine lohnende Investition oder ein modernes Büro – all das ist dringender denn je. Was, wenn all das erschwinglich, flexibel und nachhaltig sein könnte? Unsere Container-Häuser ab 1.500 €/m² bieten diese Rettung. Die Vermietung verspricht zudem hervorragende Geschäftschancen mit hohen Renditen. In Zeiten, in denen Geld auf der Bank rapide an Wert verliert und Banken immer unsicherer werden, ist eine Investition in Immobilien die einzig sichere Entscheidung. Handle jetzt, bevor es zu spät ist! \r\n \r\n5 Schritte zu deinem NEUEN HAUS oder deiner WERTANLAGE: \r\n \r\nKAUFEN ALS EIGENHEIM: \r\nEin individuelles, modernes Zuhause, das perfekt zu deinem Lebensstil passt. \r\n \r\nKAUF ALS WERTANLAGE: \r\nEine Investition in die Zukunft, die sowohl Wertstabilität als auch Wertsteigerungspotenzial bietet. \r\n \r\nVERMIETEN ÜBER AIRBNB: \r\nNutze die Möglichkeit, durch Kurzzeitvermietungen attraktive Renditen zu erzielen und ein lukratives Geschäft aufzubauen. (ca. 1.500 € monatliche Einnahmen) \r\n \r\nFÜR DAUERMIETER: \r\nEine sichere Einkommensquelle durch langfristige Vermietungen. \r\n \r\nKAUF FÜR EIN NEUES BÜRO: \r\nGestalte ein kreatives und flexibles Arbeitsumfeld, das deine Produktivität steigert. \r\n \r\nFür detaillierte Informationen, BILDER UND PREISE besuche die Webseite unseres Herstellers: https://skycontainer.at \r\n \r\nErlebe die Vielfalt unserer Modelle und lass dich von inspirierenden Videos auf unseren Social-Media-Kanälen begeistern: \r\n \r\nINSTAGRAM: https://www.instagram.com/skycontainer_container_home/ \r\n \r\nTIKTOK: https://www.tiktok.com/@skycontainer.at \r\n \r\nFACEBOOK: https://www.facebook.com/skycontainer.at \r\n \r\nDEIN DIY-PROJEKT: \r\nMit den Plänen unserer beliebtesten Modelle kannst du deinen Design-Wohncontainer in jeder Größe selbst Stück für Stück aufbauen und gestalten. \r\n \r\nVerpasse nicht die Chance, deinen Traum zu verwirklichen und zugleich eine kluge Investition zu tätigen. Entdecke die Möglichkeiten mit SkyContainer. \r\n \r\nMit einem Klick zu deinem neuen Zuhause oder deiner Wertanlage!',NULL,'2024-06-03 08:48:12');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `signature` varchar(50) NOT NULL,
  `creaded_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer_profile`
--

DROP TABLE IF EXISTS `employer_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employer_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer_profile`
--

LOCK TABLES `employer_profile` WRITE;
/*!40000 ALTER TABLE `employer_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `employer_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer_rating`
--

DROP TABLE IF EXISTS `employer_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employer_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `worker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer_rating`
--

LOCK TABLES `employer_rating` WRITE;
/*!40000 ALTER TABLE `employer_rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `employer_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer_services`
--

DROP TABLE IF EXISTS `employer_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employer_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer_services`
--

LOCK TABLES `employer_services` WRITE;
/*!40000 ALTER TABLE `employer_services` DISABLE KEYS */;
/*!40000 ALTER TABLE `employer_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employer_subscription`
--

DROP TABLE IF EXISTS `employer_subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employer_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employer_id` int(11) NOT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  `name_of_card` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `payment_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `expiry_date` varchar(45) NOT NULL,
  `invoice_url` longtext NOT NULL,
  `invoice_pdf` longtext NOT NULL,
  `status` enum('1','2','3') DEFAULT '1',
  `duration` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employer_subscription`
--

LOCK TABLES `employer_subscription` WRITE;
/*!40000 ALTER TABLE `employer_subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `employer_subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friends_video`
--

DROP TABLE IF EXISTS `friends_video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `friends_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `publisher_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friends_video`
--

LOCK TABLES `friends_video` WRITE;
/*!40000 ALTER TABLE `friends_video` DISABLE KEYS */;
/*!40000 ALTER TABLE `friends_video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_bid`
--

DROP TABLE IF EXISTS `job_bid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_bid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postjob_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bid_amount` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` text NOT NULL,
  `bidding_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_bid`
--

LOCK TABLES `job_bid` WRITE;
/*!40000 ALTER TABLE `job_bid` DISABLE KEYS */;
INSERT INTO `job_bid` VALUES (1,1,1,'189','USD ($)','','1 Month',0,'Test Bid','Ready for Interview','Active','2024-03-20 12:28:15');
/*!40000 ALTER TABLE `job_bid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `live_videos`
--

DROP TABLE IF EXISTS `live_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `live_videos` (
  `liveId` bigint(20) NOT NULL AUTO_INCREMENT,
  `sessionId` text DEFAULT NULL,
  `tokenId` text DEFAULT NULL,
  `broadcastNumber` text DEFAULT NULL,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `videoUrl` varchar(255) DEFAULT NULL,
  `startSession` datetime DEFAULT NULL,
  `endSession` datetime DEFAULT NULL,
  `notification` tinyint(4) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1-Active 0-Inactive',
  PRIMARY KEY (`liveId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `live_videos`
--

LOCK TABLES `live_videos` WRITE;
/*!40000 ALTER TABLE `live_videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `live_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_cms`
--

DROP TABLE IF EXISTS `manage_cms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `manage_cms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_cms`
--

LOCK TABLES `manage_cms` WRITE;
/*!40000 ALTER TABLE `manage_cms` DISABLE KEYS */;
INSERT INTO `manage_cms` VALUES (1,'Term and conditions','<h2>1. Terms</h2>\r\n\r\n<p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.</p>\r\n\r\n<h2>2. Limitations</h2>\r\n\r\n<p>Whilst we try to ensure that the standard of the Website remains high and to maintain the continuity of it, the internet is not an inherently stable medium, and errors, omissions, interruptions of service and delays may occur at any time. We do not accept any liability arising from any such errors, omissions, interruptions or delays or any ongoing obligation or responsibility to operate the Website (or any particular part of it) or to provide the service offered on the Website. We may vary the specification of this site from time to time without notice.</p>\r\n\r\n<h2>3. Revisions and Errata</h2>\r\n\r\n<p>You may only use the Website for lawful purposes when seeking employment or help with your career, when purchasing training courses or when recruiting staff. You must not under any circumstances seek to undermine the security of the Website or any information submitted to or available through it. In particular, but without limitation, you must not seek to access, alter or delete any information to which you do not have authorised access, seek to overload the system via spamming or flooding, take any action or use any device, routine or software to crash, delay, damage or otherwise interfere with the operation of the Website or attempt to decipher, disassemble or modify any of the software, coding or information comprised in the Website.</p>\r\n','Active','2021-09-22 12:08:25','2023-08-14 15:12:54'),(2,'About Us','<p>Pay Per Dialog embarked on its transformative journey in 2013 with an unwavering commitment to bridging the gap in the African and American workforce and trade economies. Rooted in the belief that collaboration knows no boundaries, we&#39;ve tirelessly worked to create a platform that fosters connections, empowers entrepreneurs and businesses, and opens doors to a world of possibilities.</p>\n\n<h2>&nbsp;</h2>\n\n<h2><strong>Our Mission</strong></h2>\n\n<p>At Pay Per Dialog, our mission is crystal clear: to be the catalyst for economic growth and prosperity on two continents. We&#39;re driven by the conviction that talent, innovation, and entrepreneurial spirit flourish in both Africa and America, awaiting discovery and harnessing. Our platform serves as the bridge that connects these vibrant ecosystems, facilitating seamless opportunities for freelancers and businesses to unite forces.</p>\n\n<h2>&nbsp;</h2>\n\n<h2><strong>Our Commitment</strong></h2>\n\n<ul>\n	<li><strong>Empowering People:</strong> Our dedication lies in empowering freelancers and businesses across Africa and America. Through a dynamic and secure platform that transcends borders, languages, and industries, we empower entrepreneurs to showcase their skills, collaborate with international companies, and connect with like-minded professionals.</li>\n	<li><strong>Enabling Business Growth:</strong> Business knows no borders, and we firmly believe that great ideas and opportunities should never be confined by geography. Pay Per Dialog offers businesses a unique platform to expand their horizons, forge strategic partnerships, and tap into new markets on both continents.</li>\n	<li><strong>Fostering Innovation:</strong> Innovation thrives in diverse environments where ideas flow freely. We&#39;re committed to nurturing a culture of innovation by connecting brilliant minds from Africa and America. Through our interactive platform, we aim to be the bridge that sparks innovation and propels economic progress.</li>\n</ul>\n\n<h2>&nbsp;</h2>\n\n<h2><strong>Our Platform</strong></h2>\n\n<p>payperdialog.com is more than just a website; it&#39;s a gateway to a world of opportunities. Our platform is meticulously designed to be user-friendly, secure, and inclusive, ensuring that anyone, from aspiring freelancers to established businesses, can harness its power.</p>\n\n<h2><strong>Key Features</strong></h2>\n\n<ul>\n	<li><strong>Job Directory:</strong> Discover the perfect job opportunity or talent match across continents.</li>\n	<li><strong>Talent Directory:</strong> Explore a vast network of freelancers across diverse industries.</li>\n	<li><strong>Business Directory:</strong> From startups to established enterprises, peruse our curated directory of international businesses.</li>\n</ul>\n\n<h2>&nbsp;</h2>\n\n<h2><strong>Join Us in Building Bridges</strong></h2>\n\n<p>We extend a warm invitation for you to be a part of this journey, whether you are an individual seeking new opportunities, a business striving to expand your reach, or an innovator searching for collaborators.</p>\n\n<p>Together, we can bridge the gap in job opportunities and business deals between Africa and America, creating a brighter future for all. Join payperdialog.com today and be a part of something extraordinary.</p>\n','Active','2021-09-22 12:53:12','2023-10-04 07:49:11'),(3,'privacy policy','<p><strong>Your Privacy at payperdialog.com</strong></p>\n\n<p>payperdialog.com takes your privacy very seriously. This privacy policy has been created to explain how we use information you may choose to share with us. Please read our privacy policy carefully to get a clear understanding of how we collect, use, and protect your personal information.</p>\n\n<p><strong>What personal information do we collect from you?</strong></p>\n\n<p>When registering on our site, you may be asked to enter your name, email address, mailing address, phone number, credit card information, or other details to help fulfill your requests.</p>\n\n<p><strong>When do we collect information?</strong></p>\n\n<p>We collect information from you when you register on our site, place an order, subscribe to our newsletter, or fill out a contact form.</p>\n\n<p><strong>How do we use your information?</strong></p>\n\n<p>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</p>\n\n<p>To allow us to better serve you when responding to your customer service requests<br />\nTo acknowledge your subscription to our newsletter<br />\nTo acknowledge your contact-form submission to us<br />\nTo quickly process your transactions<br />\nTo send emails related to your orders or transactions with us</p>\n\n<p><br />\n<strong>How do we protect your information?</strong></p>\n\n<p>Your personal information is protected within a secured network and is only accessible by a limited number of personnel who have special access rights. These personnel are required to keep your information confidential. In addition, all purchases and transactions are encrypted via Secure Socket Layer (SSL) technology.</p>\n\n<p>We implement a variety of security measures when a user places an order to maintain the safety of your personal information. All transactions are processed through a secure gateway provider and are not stored or processed on our servers.</p>\n\n<p><strong>How do we use &ldquo;cookies&rdquo;?</strong></p>\n\n<p>Cookies are small files that are stored in your Web browser that enable a website to recognize its users. We use cookies to help us remember and process the items in your shopping cart. They also help us understand your preferences based on previous visits, which enables us to provide you with a better user experience. Cookies help us to compile aggregate data about site traffic and site interactions so that we can continuously improve our online services.</p>\n\n<p>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. If you disable your cookies, some features on our website will be disabled and won&rsquo;t function properly, such as the shopping cart. However, you can still place orders via phone by contacting customer service.</p>\n\n<p><strong>Third Party Disclosure</strong></p>\n\n<p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information unless we provide you with advanced notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. We may also release your information when we believe release is necessary to comply with the law, enforce our site policies, or protect our rights or others&#39; rights, property, or safety.</p>\n\n<p>Only non-personally-identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>\n\n<p><strong>CAN SPAM Act</strong></p>\n\n<p>The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.</p>\n\n<p>To be in accordance with CANSPAM we agree to the following: If at any time you would like to unsubscribe from receiving future emails, you can do so at any time by login into your membership dashboard. We will promptly remove you from all correspondence. Unless you elect to receive our newsletter or become a member of payperdialog.com, we won&rsquo;t send you marketing emails, but will only send emails directly related to an order or orders you&rsquo;ve placed with us.</p>\n\n<p><strong>Contacting Us</strong></p>\n\n<p>For any questions regarding our privacy policy, please Contact Us using our online customer service form. Or, we can be reached by mail to the address below:</p>\n\n<p>Pay Per Dialog, Inc</p>\n\n<p>231 E. Alessandro Blvd, Suite A-438<br />\nRiverside, CA 92508, USA.<br />\n&nbsp;</p>\n','Active','2021-09-22 13:41:08','2023-10-04 07:50:07');
/*!40000 ALTER TABLE `manage_cms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `our_service`
--

DROP TABLE IF EXISTS `our_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `our_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` longtext NOT NULL,
  `description` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `our_service`
--

LOCK TABLES `our_service` WRITE;
/*!40000 ALTER TABLE `our_service` DISABLE KEYS */;
INSERT INTO `our_service` VALUES (1,1,'','4060_WD.jpg','<p>From design to deployment, skilled developers are needed to bring vision to life, empowering business es to thrive in the digital realm.</p>\r\n','Active','2023-05-27 13:19:25','2023-05-29 15:11:55'),(2,2,'','163_AD.jpg','<p>We&#39;re on the lookout for talented individuals who can turn innovative ideas into cutting-edge mobile applications.</p>\r\n','Active','2023-05-27 13:35:27','2023-05-29 15:10:25'),(3,3,'','7972_GD.jpg','<p>Calling all skilled graphic designers: Join our team and unleash your creativity to design visually stunning experiences that captivate and inspire.</p>\r\n','Active','2023-05-27 13:37:28','2023-05-29 15:08:54'),(4,4,'','9203_DM.jpg','<p>Seeking digital marketeers to drive online success with their strategic insights and data-driven campaigns</p>\r\n','Active','2023-05-27 13:38:08','2023-05-29 15:08:21');
/*!40000 ALTER TABLE `our_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postjob`
--

DROP TABLE IF EXISTS `postjob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `postjob` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `required_key_skills` text DEFAULT NULL,
  `duration` varchar(100) NOT NULL,
  `charges` float NOT NULL,
  `currency` varchar(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `appli_deadeline` date DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `location` text NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `complete_address` varchar(255) NOT NULL,
  `remote` varchar(45) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `experience_level` varchar(100) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_delete` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postjob`
--

LOCK TABLES `postjob` WRITE;
/*!40000 ALTER TABLE `postjob` DISABLE KEYS */;
INSERT INTO `postjob` VALUES (1,2,'Alteryx workflow to change report - For Alteryx proficient only','<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>\r\n','Website Development,Full Stack Development','1-2 Weeks',199,'USD ($)',2,5,'2024-03-20','India','West Bengal','Kolkata','Kolkata, West Bengal, India','22.572672','88.363881','','1','1','2','1','Active','2024-03-20 12:25:37','2024-03-28 14:25:57',1);
/*!40000 ALTER TABLE `postjob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_contact`
--

DROP TABLE IF EXISTS `product_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `c_name` varchar(45) DEFAULT NULL,
  `c_email` varchar(45) DEFAULT NULL,
  `c_description` longtext DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_contact`
--

LOCK TABLES `product_contact` WRITE;
/*!40000 ALTER TABLE `product_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating_type`
--

DROP TABLE IF EXISTS `rating_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating_type` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating_type`
--

LOCK TABLES `rating_type` WRITE;
/*!40000 ALTER TABLE `rating_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website_name` varchar(100) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alternate_email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `fabout` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `flogo` text NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `fb_link` longtext NOT NULL,
  `tw_link` longtext NOT NULL,
  `lnkd_link` longtext NOT NULL,
  `ptrs_link` longtext NOT NULL,
  `baha_link` longtext NOT NULL,
  `required_subscription` int(2) NOT NULL COMMENT 'required_subscription value  =  0 (Subscription Not Required)\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n required_subscription value  =  1 (Subscription Required)',
  `commission` varchar(45) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setting`
--

LOCK TABLES `setting` WRITE;
/*!40000 ALTER TABLE `setting` DISABLE KEYS */;
INSERT INTO `setting` VALUES (1,'Pay Per Dialog','',9517779919,0,'info@payperdialog.com','','231 E. Alessandro Blvd, Ste A-438,\r\nRiverside, CA 92508','Reach the source - payperdialog.com','2861_Logo.png','2989_Logo.png','5878_Logo.png','https://www.facebook.com/payperdialog','https://twitter.com/payperdialog','https://www.linkedin.com/company/payperdialog/about/','https://www.pinterest.com','https://www.behance.net',0,'6','2021-11-03 18:14:59','2024-03-20 11:15:48');
/*!40000 ALTER TABLE `setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialist`
--

DROP TABLE IF EXISTS `specialist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `specialist_name` varchar(255) NOT NULL,
  `specialist_image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialist`
--

LOCK TABLES `specialist` WRITE;
/*!40000 ALTER TABLE `specialist` DISABLE KEYS */;
INSERT INTO `specialist` VALUES (1,'Website Development','','Active','2023-10-05 16:13:00','2023-10-05 14:13:00'),(2,'Full Stack Development','','Active','2023-10-05 16:13:00','2023-10-05 14:13:00'),(3,'Generative AI','','Active','2023-12-13 03:07:52','2023-12-13 03:07:52'),(4,'AI','','Active','2023-12-13 03:07:52','2023-12-13 03:07:52'),(5,'Saas','','Active','2023-12-28 00:14:30','2023-12-28 00:14:30'),(6,'Microsoft','','Active','2023-12-28 00:14:30','2023-12-28 00:14:30'),(7,'MS Word','','Active','2024-01-07 04:47:00','2024-01-07 04:47:00'),(8,'MS Excel','','Active','2024-01-07 04:47:00','2024-01-07 04:47:00');
/*!40000 ALTER TABLE `specialist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` VALUES (1,1,'Content Writing','','Active','2023-10-05 14:49:01','2023-10-05 12:49:01'),(2,1,'Blog Writing','','Active','2023-10-05 14:49:44','2023-10-05 12:49:44'),(3,1,'SEO Writing','','Active','2023-10-05 14:49:57','2023-10-05 12:49:57'),(4,1,'Email Marketing','','Active','2023-10-05 14:50:13','2023-10-05 12:50:13'),(5,2,'Web designer','','Active','2023-10-05 14:51:18','2023-10-05 12:51:18'),(6,2,'Back-end web development','','Active','2023-10-05 14:51:35','2023-10-05 12:51:35'),(7,2,'Full-stack web development','','Active','2023-10-05 14:51:46','2023-10-05 12:51:46'),(8,2,'Web programmer','','Active','2023-10-05 14:51:58','2023-10-05 12:51:58');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_name` varchar(100) NOT NULL,
  `subscription_user_type` varchar(255) NOT NULL,
  `subscription_type` varchar(100) DEFAULT NULL,
  `subscription_country` varchar(100) NOT NULL,
  `subscription_amount` varchar(100) NOT NULL,
  `subscription_duration` varchar(100) NOT NULL,
  `subscription_description` longtext DEFAULT NULL,
  `product_key` text DEFAULT NULL,
  `price_key` text DEFAULT NULL,
  `plan_code` text NOT NULL,
  `payment_link` text DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription`
--

LOCK TABLES `subscription` WRITE;
/*!40000 ALTER TABLE `subscription` DISABLE KEYS */;
INSERT INTO `subscription` VALUES (1,'Trial Period for Employee ','Employee','free','Global','0.00','30','<ul>\r\n	<li>This plan will be valid for 30 days.</li>\r\n	<li>All available features will be enabled as a trial.</li>\r\n	<li>This plan will be valid for 30 days.</li>\r\n	<li>All available features will be enabled as a trial.</li>\r\n</ul>\r\n','prod_012345335646456456464','price_3535375374534','',NULL,'','2023-10-05 15:42:19','2023-10-05 13:42:19'),(13,'Trial Period for Employer','Employer','free','Global','0.00','30','<ul>\r\n	<li>This plan will be valid for 30 days.</li>\r\n	<li>All available features will be enabled as a trial.</li>\r\n	<li>This plan will be valid for 30 days.</li>\r\n	<li>All available features will be enabled as a trial.</li>\r\n</ul>\r\n','','','',NULL,'','2023-10-05 15:44:13','2023-10-05 13:44:13'),(14,'Monthly Plan for Employee','Employee','paid','Global','49.99','30','<ul>\r\n	<li>Monthly subscription plan for freelancers</li>\r\n	<li>All features available</li>\r\n</ul>\r\n','prod_O5lUFfc9ARqDaw','price_1NJZx7Czymyc1pAinFJd2JY4','',NULL,'','2023-10-05 15:44:45','2023-10-05 13:44:45'),(15,'Monthly Plan for Employer','Employer','paid','Global','49.99','30','<ul>\r\n	<li>Monthly subscription plan for vendors</li>\r\n	<li>All features available</li>\r\n</ul>\r\n','prod_O5lXpPPj99QErK','price_1NJa06Czymyc1pAiQSd8SGEt','',NULL,'','2023-10-05 15:45:04','2023-10-05 13:45:04'),(17,'Annual Plan for Employee','Employee','paid','Global','499.99','365','<ul>\r\n	<li>Annual subscription plan for vendors</li>\r\n	<li>All features available</li>\r\n</ul>\r\n','prod_O5lbI9poNpMqOn','price_1NJa4DCzymyc1pAiPrsGsRtp','',NULL,'','2023-10-05 15:46:09','2023-10-05 13:46:09'),(18,'Annual Plan for Employer','Employer','paid','Global','499.99','365','<ul>\r\n	<li>Annual subscription plan for freelancers</li>\r\n	<li>All features available</li>\r\n</ul>\r\n','prod_O5ld4MQcuPYvKm','price_1NJa6PCzymyc1pAisL3siEhl','',NULL,'','2023-10-05 15:46:29','2023-10-05 13:46:29');
/*!40000 ALTER TABLE `subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_service`
--

DROP TABLE IF EXISTS `subscription_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_service`
--

LOCK TABLES `subscription_service` WRITE;
/*!40000 ALTER TABLE `subscription_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_availability`
--

DROP TABLE IF EXISTS `user_availability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_availability` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `from_time` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `to_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_availability`
--

LOCK TABLES `user_availability` WRITE;
/*!40000 ALTER TABLE `user_availability` DISABLE KEYS */;
INSERT INTO `user_availability` VALUES (1,'1','2024-03-31','09:20','2024-03-31','18:00');
/*!40000 ALTER TABLE `user_availability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_booking`
--

DROP TABLE IF EXISTS `user_booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` varchar(45) DEFAULT NULL,
  `employer_id` varchar(45) DEFAULT NULL,
  `available_id` varchar(45) DEFAULT NULL,
  `bookingTime` text DEFAULT NULL,
  `meeting_link` longtext DEFAULT NULL,
  `meeting_pass` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_booking`
--

LOCK TABLES `user_booking` WRITE;
/*!40000 ALTER TABLE `user_booking` DISABLE KEYS */;
INSERT INTO `user_booking` VALUES (1,'1','2','1','09:20,12:20','https://us04web.zoom.us/j/72736236910,https://us04web.zoom.us/j/78507887888','7LQ7Eb,V8Qi3G');
/*!40000 ALTER TABLE `user_booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_booking_txn`
--

DROP TABLE IF EXISTS `user_booking_txn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_booking_txn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(45) DEFAULT NULL,
  `rate` varchar(45) DEFAULT NULL,
  `txn_id` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_booking_txn`
--

LOCK TABLES `user_booking_txn` WRITE;
/*!40000 ALTER TABLE `user_booking_txn` DISABLE KEYS */;
INSERT INTO `user_booking_txn` VALUES (1,'1','200','txn_2bQFDF3KCJnrjvFEVBujI38C'),(2,'1','120','txn_ytOq2nzxZUl7INblpTT3XwNZ'),(3,'1','120','txn_WTJUKCOR7jefCidHsdETTmCQ'),(4,'1','80','txn_6wEu12xreQpRwyIpPkAVxoF1'),(5,'1','80','txn_sWFaFY7MvuQGHzZpEy5pQxay'),(6,'1','80','txn_imxAwH16KGWJGw4mFpye1fEO');
/*!40000 ALTER TABLE `user_booking_txn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_education`
--

DROP TABLE IF EXISTS `user_education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `education` varchar(50) NOT NULL,
  `passing_of_year` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_education`
--

LOCK TABLES `user_education` WRITE;
/*!40000 ALTER TABLE `user_education` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_product`
--

DROP TABLE IF EXISTS `user_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `prod_name` text DEFAULT NULL,
  `prod_description` longtext DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('1','2') DEFAULT '1',
  `is_delete` enum('1','2') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_product`
--

LOCK TABLES `user_product` WRITE;
/*!40000 ALTER TABLE `user_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_product_image`
--

DROP TABLE IF EXISTS `user_product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `prod_image` text DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_product_image`
--

LOCK TABLES `user_product_image` WRITE;
/*!40000 ALTER TABLE `user_product_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_workexperience`
--

DROP TABLE IF EXISTS `user_workexperience`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_workexperience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_workexperience`
--

LOCK TABLES `user_workexperience` WRITE;
/*!40000 ALTER TABLE `user_workexperience` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_workexperience` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userId` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `companyname` text NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `profilePic` varchar(255) NOT NULL,
  `userType` bigint(20) unsigned DEFAULT NULL,
  `serviceType` varchar(30) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` smallint(6) DEFAULT 0,
  `email_verified` smallint(6) NOT NULL DEFAULT 0,
  `address` text DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `zip` varchar(90) DEFAULT NULL,
  `resume` varchar(255) NOT NULL,
  `additional_image` varchar(255) NOT NULL,
  `short_bio` text NOT NULL,
  `video` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `skills` longtext NOT NULL,
  `oauth_provider` enum('facebook','google') NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `foundedyear` varchar(45) DEFAULT NULL,
  `teamsize` text DEFAULT NULL,
  `rateperhour` varchar(45) DEFAULT NULL,
  `isAggreed` enum('1','2') DEFAULT NULL,
  `forgot_otp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','Demo','Employee',NULL,'employee@gmail.com','',NULL,'MTIzNDU2','',1,NULL,'2024-03-20 11:49:56','2024-03-20 12:02:34',1,1,'Kolkata, West Bengal, India',22.5727,88.3639,'','4687_c4611_sample_explain.pdf','','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.','','Male','2','','Website Development','facebook','',0,NULL,NULL,'40','1',NULL),(2,'demo company','','',NULL,'sayantan@goigi.in','',NULL,'MTIzNDU2','',2,NULL,'2024-03-20 11:51:26','2024-06-03 15:58:37',1,1,'Kolkata, West Bengal, India',22.5727,88.3639,NULL,'','','In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.','','','','','','facebook','',5,'','TAX123456',NULL,'1',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_portfolio`
--

DROP TABLE IF EXISTS `users_portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `content_title` text DEFAULT NULL,
  `portfolio_file` longtext DEFAULT NULL,
  `created_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_portfolio`
--

LOCK TABLES `users_portfolio` WRITE;
/*!40000 ALTER TABLE `users_portfolio` DISABLE KEYS */;
INSERT INTO `users_portfolio` VALUES (1,'1','','','2024-03-20 12:03:34');
/*!40000 ALTER TABLE `users_portfolio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-04 13:42:22
