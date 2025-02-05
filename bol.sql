-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: bolstart
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_page_content`
--

DROP TABLE IF EXISTS `about_page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_page_content`
--

LOCK TABLES `about_page_content` WRITE;
/*!40000 ALTER TABLE `about_page_content` DISABLE KEYS */;
INSERT INTO `about_page_content` VALUES (1,'header_heading','About Bolstart','2023-12-09 08:51:00','2023-12-15 15:04:01'),(2,'header_paragraph','Bolstart is the world\'s first and only platform that is tailored for \r\ncorporate professionals looking to venture into \r\nthe exciting world of startups.','2023-12-09 08:51:00','2024-02-06 16:45:33'),(3,'vision_heading','Vision','2023-12-09 08:52:15',NULL),(4,'vision_paragraph','Our vision Igniting global innovation, fostering creativity, shaping industry disruptors.','2023-12-09 08:52:15','2024-02-03 16:00:12'),(5,'mission_heading','Mission','2023-12-09 08:52:15',NULL),(6,'mission_paragraph','Our mission at Bolstart- empowers founders, connects with 130+ investors, \r\nfuels growth, and transforms industries through strategic \r\ninvestments and shared values.','2023-12-09 08:52:15','2024-02-06 16:45:33'),(7,'who_are_we_heading','Who are We?','2023-12-09 08:52:15',NULL),(8,'who_are_we_paragraph','Bolstart: Architects of connections, catalysts of change. \r\nBeyond an agency, we bridge 280+ startup founders with 130+ investors, \r\ncurating an environment where shared values meet visionary ideas. \r\nMore than capital infusion, we empower startups to disrupt and \r\ninvestors to partake in transformative journeys. The heartbeat of \r\ninnovation, reshaping startup success and contributing to a future \r\ndefined by progress and possibility.','2023-12-09 08:52:15','2024-02-06 16:45:33');
/*!40000 ALTER TABLE `about_page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'posts','created','Modules\\Article\\Models\\Post','created',1,'App\\Models\\User',1,'{\"attributes\": {\"hits\": 0, \"name\": \"My New Blog\", \"slug\": \"my-new-blog\", \"type\": \"Article\", \"intro\": \"This is a new blog article\", \"order\": null, \"status\": 1, \"content\": \"<h1 class=\\\"\\\">This is heading.</h1><h4 class=\\\"\\\">This is subheader</h4><p>And this is normal content.</p>\", \"created_at\": \"2023-10-31T08:44:10.000000Z\", \"created_by\": 1, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"My New Blog\", \"updated_by\": 1, \"category_id\": 1, \"is_featured\": 1, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-10-18T08:13:00.000000Z\", \"category_name\": \"Category 1\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Super Admin\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-10-31 09:14:10','2023-10-31 09:14:10'),(2,'posts','updated','Modules\\Article\\Models\\Post','updated',1,'App\\Models\\User',1,'{\"old\": {\"hits\": 0}, \"attributes\": {\"hits\": 1}}',NULL,'2023-10-31 09:14:23','2023-10-31 09:14:23'),(3,'posts','updated','Modules\\Article\\Models\\Post','updated',1,'App\\Models\\User',1,'{\"old\": {\"hits\": 1}, \"attributes\": {\"hits\": 2}}',NULL,'2023-10-31 09:14:33','2023-10-31 09:14:33'),(4,'posts','created','Modules\\Article\\Models\\Post','created',2,'App\\Models\\User',1,'{\"attributes\": {\"hits\": 0, \"name\": \"My New News\", \"slug\": \"my-new-news\", \"type\": \"News\", \"intro\": \"This is a new article\", \"order\": null, \"status\": 1, \"content\": \"<h1 class=\\\"\\\">This is a news article</h1>\", \"created_at\": \"2023-10-31T09:03:47.000000Z\", \"created_by\": 1, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"My New News\", \"updated_by\": 1, \"category_id\": 1, \"is_featured\": 1, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-10-21T08:33:00.000000Z\", \"category_name\": \"Category 1\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Super Admin\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-10-31 09:33:48','2023-10-31 09:33:48'),(5,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 0}, \"attributes\": {\"hits\": 1}}',NULL,'2023-11-09 09:12:52','2023-11-09 09:12:52'),(6,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 1}, \"attributes\": {\"hits\": 2}}',NULL,'2023-11-09 09:14:46','2023-11-09 09:14:46'),(7,'comments','created','Modules\\Comment\\Models\\Comment','created',1,'App\\Models\\User',1,'{\"attributes\": {\"name\": \"Hey\", \"slug\": null, \"order\": null, \"status\": 0, \"comment\": \"This is my comment\", \"user_id\": 1, \"parent_id\": null, \"user_name\": \"Super Admin\", \"created_at\": \"2023-11-09T08:44:54.000000Z\", \"created_by\": 1, \"deleted_at\": null, \"deleted_by\": null, \"updated_by\": 1, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": null, \"commentable_id\": 2, \"commentable_type\": \"Modules\\\\Article\\\\Models\\\\Post\"}}',NULL,'2023-11-09 09:14:54','2023-11-09 09:14:54'),(8,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 2}, \"attributes\": {\"hits\": 3}}',NULL,'2023-11-09 09:14:55','2023-11-09 09:14:55'),(9,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 3}, \"attributes\": {\"hits\": 4}}',NULL,'2023-11-09 09:15:00','2023-11-09 09:15:00'),(10,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 4}, \"attributes\": {\"hits\": 5}}',NULL,'2023-11-11 15:02:47','2023-11-11 15:02:47'),(11,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',1,'{\"old\": {\"hits\": 5}, \"attributes\": {\"hits\": 6}}',NULL,'2023-11-11 15:02:55','2023-11-11 15:02:55'),(12,'posts','created','Modules\\Article\\Models\\Post','created',3,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Hello sir\", \"slug\": \"hello-sir\", \"type\": \"Article\", \"intro\": \"Hello this is a test intro\", \"order\": null, \"status\": 1, \"content\": \"<p>THis is an image</p><p><br></p><p><br></p>\", \"created_at\": \"2023-11-21T10:07:08.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"Hello Sir\", \"updated_by\": 2, \"category_id\": 1, \"is_featured\": 1, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T04:00:00.000000Z\", \"category_name\": \"Category 1\", \"meta_keywords\": null, \"meta_og_image\": \"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Google_maps_car%2C_Paris_May_2014.jpg/2560px-Google_maps_car%2C_Paris_May_2014.jpg\", \"featured_image\": \"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Google_maps_car%2C_Paris_May_2014.jpg/2560px-Google_maps_car%2C_Paris_May_2014.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Mahesh Roy\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-21 10:37:08','2023-11-21 10:37:08'),(13,'comments','updated','Modules\\Comment\\Models\\Comment','updated',1,'App\\Models\\User',2,'{\"old\": {\"slug\": null, \"status\": 0, \"updated_by\": 1, \"moderated_at\": null, \"published_at\": null}, \"attributes\": {\"slug\": \"hey\", \"status\": 1, \"updated_by\": 2, \"moderated_at\": \"2023-11-21T14:15:41.000000Z\", \"published_at\": \"2023-11-21T14:15:41.000000Z\"}}',NULL,'2023-11-21 14:45:41','2023-11-21 14:45:41'),(14,'posts','updated','Modules\\Article\\Models\\Post','updated',3,'App\\Models\\User',2,'{\"old\": {\"name\": \"Hello sir\", \"intro\": \"Hello this is a test intro\", \"content\": \"<p>THis is an image</p><p><br></p><p><br></p>\", \"category_name\": \"Category 1\", \"meta_og_image\": \"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Google_maps_car%2C_Paris_May_2014.jpg/2560px-Google_maps_car%2C_Paris_May_2014.jpg\", \"featured_image\": \"https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Google_maps_car%2C_Paris_May_2014.jpg/2560px-Google_maps_car%2C_Paris_May_2014.jpg\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}, \"attributes\": {\"name\": \"The Rise of Sustainable Tech: Opportunities for VC Investments\", \"intro\": \"An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.\", \"content\": \"<p><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap;\\\">An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.</span><br></p><p><br></p>\", \"category_name\": \"Industry Insights\", \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"meta_description\": \"An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.\"}}',NULL,'2023-11-22 06:25:05','2023-11-22 06:25:05'),(15,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',2,'{\"old\": {\"name\": \"My New News\", \"slug\": \"my-new-news\", \"intro\": \"This is a new article\", \"content\": \"<h1 class=\\\"\\\">This is a news article</h1>\", \"updated_by\": 1, \"category_id\": 1, \"category_name\": \"Category 1\"}, \"attributes\": {\"name\": \"Navigating Regulatory Changes in Fintech: Implications for VC Investors\", \"slug\": \"navigating-regulatory-changes-in-fintech-implications-for-vc-investors\", \"intro\": \"An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.\", \"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space: pre-wrap;\\\">An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.</span><br></h1>\", \"updated_by\": 2, \"category_id\": 6, \"category_name\": \"Regulatory and Legal Updates\"}}',NULL,'2023-11-22 06:26:22','2023-11-22 06:26:22'),(16,'posts','updated','Modules\\Article\\Models\\Post','updated',1,'App\\Models\\User',2,'{\"old\": {\"name\": \"My New Blog\", \"slug\": \"my-new-blog\", \"intro\": \"This is a new blog article\", \"content\": \"<h1 class=\\\"\\\">This is heading.</h1><h4 class=\\\"\\\">This is subheader</h4><p>And this is normal content.</p>\", \"updated_by\": 1, \"category_id\": 1, \"category_name\": \"Category 1\"}, \"attributes\": {\"name\": \"Leadership Lessons from Successful Founders: Wisdom for Entrepreneurs\", \"slug\": \"leadership-lessons-from-successful-founders-wisdom-for-entrepreneurs\", \"intro\": \"A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.\", \"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space: pre-wrap;\\\">A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.</span><br></h1>\", \"updated_by\": 2, \"category_id\": 5, \"category_name\": \"Entrepreneurship and Leadership\"}}',NULL,'2023-11-22 06:27:22','2023-11-22 06:27:22'),(17,'posts','updated','Modules\\Article\\Models\\Post','updated',2,'App\\Models\\User',2,'{\"old\": {\"type\": \"News\", \"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space: pre-wrap;\\\">An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.</span><br></h1>\"}, \"attributes\": {\"type\": \"Article\", \"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \\\"Segoe UI\\\", Roboto, Ubuntu, Cantarell, \\\"Noto Sans\\\", sans-serif, \\\"Helvetica Neue\\\", Arial, \\\"Apple Color Emoji\\\", \\\"Segoe UI Emoji\\\", \\\"Segoe UI Symbol\\\", \\\"Noto Color Emoji\\\"; font-size: 16px; white-space: pre-wrap;\\\">An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.</span><br></h1>\"}}',NULL,'2023-11-22 06:27:42','2023-11-22 06:27:42'),(18,'posts','updated','Modules\\Article\\Models\\Post','updated',1,'App\\Models\\User',2,'{\"old\": {\"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; white-space: pre-wrap;\\\">A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.</span><br></h1>\"}, \"attributes\": {\"content\": \"<h1 class=\\\"\\\"><span style=\\\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \\\"Segoe UI\\\", Roboto, Ubuntu, Cantarell, \\\"Noto Sans\\\", sans-serif, \\\"Helvetica Neue\\\", Arial, \\\"Apple Color Emoji\\\", \\\"Segoe UI Emoji\\\", \\\"Segoe UI Symbol\\\", \\\"Noto Color Emoji\\\"; font-size: 16px; white-space: pre-wrap;\\\">A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.</span><br></h1>\"}}',NULL,'2023-11-22 07:29:09','2023-11-22 07:29:09'),(19,'posts','created','Modules\\Article\\Models\\Post','created',4,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"First Sample News\", \"slug\": \"first-sample-news\", \"type\": \"News\", \"intro\": \"This is first sample news\", \"order\": null, \"status\": 1, \"content\": \"<p>This is first sample news</p><ul><li>This is point 1</li><li>This is point 2</li><li>This is point 3</li></ul>\", \"created_at\": \"2023-11-22T10:30:04.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"First Sample News\", \"updated_by\": 2, \"category_id\": 1, \"is_featured\": 1, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T09:59:00.000000Z\", \"category_name\": \"Industry Insights\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/group-of-business-people-diverse-meeting-and-working-in-the-office-seminar-concept-e1676701745847.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/group-of-business-people-diverse-meeting-and-working-in-the-office-seminar-concept-e1676701745847.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-22 11:00:04','2023-11-22 11:00:04'),(20,'posts','created','Modules\\Article\\Models\\Post','created',5,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Second Sample News\", \"slug\": \"second-sample-news\", \"type\": \"News\", \"intro\": \"This is second sample news\", \"order\": null, \"status\": 1, \"content\": \"<p><b>This is second sample news</b><br></p>\", \"created_at\": \"2023-11-22T10:30:55.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"Second Sample News\", \"updated_by\": 2, \"category_id\": 6, \"is_featured\": 0, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T10:00:00.000000Z\", \"category_name\": \"Regulatory and Legal Updates\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-22 11:00:55','2023-11-22 11:00:55'),(21,'posts','created','Modules\\Article\\Models\\Post','created',6,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Third Sample News\", \"slug\": \"third-sample-news\", \"type\": \"News\", \"intro\": \"This is third sample news\", \"order\": null, \"status\": 1, \"content\": \"<p><b>This is third sample news</b><br></p>\", \"created_at\": \"2023-11-22T10:31:41.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"Third Sample News\", \"updated_by\": 2, \"category_id\": 5, \"is_featured\": 0, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T10:01:00.000000Z\", \"category_name\": \"Entrepreneurship and Leadership\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": null, \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-22 11:01:41','2023-11-22 11:01:41'),(22,'posts','created','Modules\\Article\\Models\\Post','created',7,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Fourth Sample News\", \"slug\": \"fourth-sample-news\", \"type\": \"News\", \"intro\": \"This is fourth sample news\", \"order\": null, \"status\": 1, \"content\": \"<p>This is fourth sample news<br></p>\", \"created_at\": \"2023-11-22T10:35:38.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"Fourth Sample News\", \"updated_by\": 2, \"category_id\": 5, \"is_featured\": 0, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T10:05:00.000000Z\", \"category_name\": \"Entrepreneurship and Leadership\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-22 11:05:38','2023-11-22 11:05:38'),(23,'posts','created','Modules\\Article\\Models\\Post','created',8,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Fifth Sample News\", \"slug\": \"fifth-sample-news\", \"type\": \"News\", \"intro\": \"Fifth sample news\", \"order\": null, \"status\": 1, \"content\": \"<p>This is fifth sample news</p>\", \"created_at\": \"2023-11-22T10:36:30.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"meta_title\": \"Fifth Sample News\", \"updated_by\": 2, \"category_id\": 6, \"is_featured\": 0, \"meta_og_url\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-22T10:06:00.000000Z\", \"category_name\": \"Regulatory and Legal Updates\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-22 11:06:30','2023-11-22 11:06:30'),(24,'posts','created','Modules\\Article\\Models\\Post','created',9,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Networking Event\", \"slug\": \"networking-event\", \"type\": \"Feature\", \"intro\": \"This is a networking event\", \"order\": null, \"status\": 1, \"content\": \"<p>This is a networking event</p>\", \"rsvp_link\": null, \"created_at\": \"2023-11-27T09:06:18.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"event_date\": null, \"meta_title\": \"Networking Event\", \"updated_by\": 2, \"category_id\": 5, \"is_featured\": 1, \"meta_og_url\": null, \"event_timing\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-27T08:36:00.000000Z\", \"category_name\": \"Entrepreneurship and Leadership\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"event_category\": null, \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-27 09:36:18','2023-11-27 09:36:18'),(25,'posts','created','Modules\\Article\\Models\\Post','created',10,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Investment Event\", \"slug\": \"investment-event\", \"type\": \"Feature\", \"intro\": \"This is investment event\", \"order\": null, \"status\": 1, \"content\": \"<p><b>This is investment event</b><br></p>\", \"rsvp_link\": null, \"created_at\": \"2023-11-27T09:09:27.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"event_date\": null, \"meta_title\": \"Investment Event\", \"updated_by\": 2, \"category_id\": 3, \"is_featured\": 0, \"meta_og_url\": null, \"event_timing\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-27T08:39:00.000000Z\", \"category_name\": \"Investment Strategies\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"event_category\": null, \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-27 09:39:27','2023-11-27 09:39:27'),(26,'posts','created','Modules\\Article\\Models\\Post','created',11,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Technical Event\", \"slug\": \"technical-event\", \"type\": \"Feature\", \"intro\": \"This is technical event\", \"order\": null, \"status\": 1, \"content\": \"<p><b>This is technical event</b><br></p>\", \"rsvp_link\": null, \"created_at\": \"2023-11-27T09:10:25.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"event_date\": null, \"meta_title\": \"Technical Event\", \"updated_by\": 2, \"category_id\": 5, \"is_featured\": 0, \"meta_og_url\": null, \"event_timing\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2023-11-27T08:40:00.000000Z\", \"category_name\": \"Entrepreneurship and Leadership\", \"meta_keywords\": null, \"meta_og_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"event_category\": null, \"featured_image\": \"https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2023-11-27 09:40:25','2023-11-27 09:40:25'),(27,'posts','created','Modules\\Article\\Models\\Post','created',12,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"New Event\", \"slug\": \"new-event\", \"type\": \"Feature\", \"intro\": \"This is intro\", \"order\": null, \"status\": 1, \"content\": \"<p>This is content</p>\", \"rsvp_link\": \"https://rsvp.com\", \"created_at\": \"2024-04-04T12:48:42.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"event_date\": \"2024-04-27\", \"meta_title\": \"New Event\", \"updated_by\": 2, \"category_id\": 1, \"is_featured\": 1, \"meta_og_url\": null, \"event_timing\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2024-04-04T12:18:00.000000Z\", \"category_name\": \"Industry Insights\", \"meta_keywords\": null, \"meta_og_image\": \"/storage/photos/2/655edb7f55f6b.png\", \"event_category\": \"TestCategory\", \"featured_image\": \"/storage/photos/2/655edb7f55f6b.png\", \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Ravi Singh\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2024-04-04 18:48:42','2024-04-04 18:48:42'),(28,'posts','updated','Modules\\Article\\Models\\Post','updated',12,'App\\Models\\User',2,'{\"old\": {\"rsvp_link\": \"https://rsvp.com\", \"event_date\": \"2024-04-27\", \"event_category\": \"TestCategory\", \"featured_image\": \"/storage/photos/2/655edb7f55f6b.png\"}, \"attributes\": {\"rsvp_link\": null, \"event_date\": null, \"event_category\": null, \"featured_image\": \"/storage/photos/2/660ea1f11def1.jpg\"}}',NULL,'2024-04-04 18:50:02','2024-04-04 18:50:02'),(29,'posts','updated','Modules\\Article\\Models\\Post','updated',12,'App\\Models\\User',2,'{\"old\": {\"rsvp_link\": null, \"event_date\": null, \"event_category\": null}, \"attributes\": {\"rsvp_link\": \"https://rsvp.com\", \"event_date\": \"2024-04-18\", \"event_category\": \"TestCategory\"}}',NULL,'2024-04-04 18:51:16','2024-04-04 18:51:16'),(30,'posts','updated','Modules\\Article\\Models\\Post','updated',12,'App\\Models\\User',2,'{\"old\": {\"twitter_link\": null, \"linkedin_link\": null, \"instagram_link\": null}, \"attributes\": {\"twitter_link\": \"https://twitter.com\", \"linkedin_link\": \"https://linkedin.com\", \"instagram_link\": \"https://instagram.com\"}}',NULL,'2024-04-06 19:47:51','2024-04-06 19:47:51'),(31,'posts','created','Modules\\Article\\Models\\Post','created',13,'App\\Models\\User',2,'{\"attributes\": {\"hits\": 0, \"name\": \"Test Event Paras\", \"slug\": \"test_event_paras\", \"type\": \"Feature\", \"intro\": \"This is the test event created by Paras\", \"order\": null, \"status\": 1, \"content\": \"<p>This is the test event created by Paras on 06 May 2024<br></p>\", \"rsvp_link\": null, \"created_at\": \"2024-05-06T07:45:46.000000Z\", \"created_by\": 2, \"deleted_at\": null, \"deleted_by\": null, \"event_date\": \"2024-05-07\", \"meta_title\": \"Test Event Paras\", \"updated_by\": 2, \"category_id\": 5, \"is_featured\": 1, \"meta_og_url\": null, \"event_timing\": null, \"moderated_at\": null, \"moderated_by\": null, \"published_at\": \"2024-05-07T09:30:00.000000Z\", \"twitter_link\": null, \"category_name\": \"Entrepreneurship and Leadership\", \"linkedin_link\": null, \"meta_keywords\": null, \"meta_og_image\": \"/storage/photos/2/660ea1f11def1.jpg\", \"event_category\": null, \"featured_image\": \"/storage/photos/2/660ea1f11def1.jpg\", \"instagram_link\": null, \"created_by_name\": \"Admin Istrator\", \"created_by_alias\": \"Paras\", \"meta_description\": \"A CMS like modular starter application project built with latest Laravel.\"}}',NULL,'2024-05-06 13:45:46','2024-05-06 13:45:46'),(32,'posts','updated','Modules\\Article\\Models\\Post','updated',13,'App\\Models\\User',2,'{\"old\": {\"published_at\": \"2024-05-07T09:30:00.000000Z\"}, \"attributes\": {\"published_at\": \"2024-05-06T06:00:00.000000Z\"}}',NULL,'2024-05-06 13:46:33','2024-05-06 13:46:33');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `group_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Industry Insights','industry-insights','This is a new category','Blog','/storage/media/1/J5d9oDPJvBupbMshoB9TPLeZ5yuEKiD29Zok6mbD.jpg',NULL,NULL,NULL,NULL,'Active',1,2,NULL,'2023-10-31 09:11:16','2023-11-22 06:19:57',NULL),(2,'Startup Spotlights','startup-spotlights',NULL,'Blog',NULL,NULL,NULL,NULL,NULL,'Active',2,2,NULL,'2023-11-22 06:20:19','2023-11-22 06:20:19',NULL),(3,'Investment Strategies','investment-strategies',NULL,'Blog',NULL,NULL,NULL,NULL,NULL,'Active',2,2,NULL,'2023-11-22 06:20:35','2023-11-22 06:20:35',NULL),(4,'Market Trends and Research','market-trends-and-research',NULL,'Blog',NULL,NULL,NULL,NULL,NULL,'Active',2,2,NULL,'2023-11-22 06:20:58','2023-11-22 06:20:58',NULL),(5,'Entrepreneurship and Leadership','entrepreneurship-and-leadership',NULL,'Blog',NULL,NULL,NULL,NULL,NULL,'Active',2,2,NULL,'2023-11-22 06:21:17','2023-11-22 06:21:17',NULL),(6,'Regulatory and Legal Updates','regulatory-and-legal-updates',NULL,'Blog',NULL,NULL,NULL,NULL,NULL,'Active',2,2,NULL,'2023-11-22 06:21:52','2023-11-22 06:21:52',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `parent_id` int unsigned DEFAULT NULL,
  `commentable_id` bigint unsigned DEFAULT NULL,
  `commentable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `user_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `moderated_by` int unsigned DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'Hey','hey','This is my comment',NULL,2,'Modules\\Article\\Models\\Post',1,'Super Admin',NULL,1,NULL,'2023-11-21 20:15:41','2023-11-21 14:45:41',1,2,NULL,'2023-11-09 09:14:54','2023-11-21 14:45:41',NULL);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_page_content`
--

DROP TABLE IF EXISTS `contact_page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_page_content`
--

LOCK TABLES `contact_page_content` WRITE;
/*!40000 ALTER TABLE `contact_page_content` DISABLE KEYS */;
INSERT INTO `contact_page_content` VALUES (1,'header_heading','Contact','2023-12-09 08:58:02','2023-12-15 15:04:18'),(2,'subheading','Get In Touch With Us','2023-12-09 08:58:02','2023-12-15 15:04:06'),(3,'subheading_paragraph','Connect with us for updates, inquiries, and collaboration. Your thoughts matter. We\'re just a message away. Let\'s start the conversation!','2023-12-09 08:58:02',NULL),(4,'card_1_text_1','Our Office','2023-12-09 08:58:02',NULL),(5,'card_1_text_2','Shop No. 13, Ashwini Paradise, Lullanagar Rd, Phase 1, Bibwewadi, Pune, Maharashtra 411037','2023-12-09 08:58:02','2024-04-06 12:26:11'),(6,'card_2_text_1','Work Hours','2023-12-09 08:58:02',NULL),(7,'card_2_text_2','Mon - Sat : 09 AM - 06 PM','2023-12-09 08:58:02','2024-02-03 17:20:16'),(8,'card_3_text_1','Our Email','2023-12-09 08:58:02',NULL),(9,'card_3_text_2','reachout@bolstart.com','2023-12-09 08:58:02','2024-02-03 17:20:17'),(10,'card_4_text_1','Our Phone','2023-12-09 08:58:02',NULL),(11,'card_4_text_2','+91 9503304430','2023-12-09 08:58:02','2024-02-03 17:17:11'),(12,'google_map_url','https://www.google.com/maps/dir//Shop+No.+13,+Bolstart,+Ashwini+Paradise,+Lullanagar+Rd,+Phase+1,+Bibwewadi,+Pune,+Maharashtra+411037/@18.4808313,73.8716291,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bc2ebe5c01bf133:0xa93d61b1505c303e!2m2!1d73.874204!2d18.4808262?entry=ttu','2023-12-09 08:58:02','2024-04-06 12:26:11'),(13,'form_heading','Leave A Message','2023-12-09 08:58:02',NULL),(14,'form_policy_sentence','I agree to the Bolstart','2023-12-09 08:58:02','2024-04-04 14:15:22'),(15,'form_button_text','Submit','2023-12-09 08:58:02',NULL),(16,'map_title','Shop No. 13, Ashwini Paradise, Lullanagar Rd, Phase 1, Bibwewadi, Pune, Maharashtra 411037','2023-12-09 09:16:53','2024-04-06 12:26:11');
/*!40000 ALTER TABLE `contact_page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_submissions`
--

DROP TABLE IF EXISTS `contact_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_submissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `source_page` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_submissions`
--

LOCK TABLES `contact_submissions` WRITE;
/*!40000 ALTER TABLE `contact_submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `answer` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `show_on_home_page` tinyint(1) DEFAULT NULL,
  `show_on_investors_page` tinyint(1) DEFAULT NULL,
  `show_on_startups_page` tinyint(1) DEFAULT NULL,
  `show_on_faq_page` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (2,'Can Bolstart investors refer startups for fundraising?','Certainly! Members are encouraged to refer exciting investment opportunities to the network. However, Bolstart will first evaluate the opportunity before presenting it to the network to make sure the quality meets the network\'s standard.',1,1,0,1,'2023-12-08 07:25:20',NULL),(3,'Can a Bolstart member refer potential investors?','Absolutely! Members are encouraged to refer potential investors, contributing to the network\'s strength.',1,1,0,1,'2023-12-08 07:25:50',NULL),(5,'How is Post-Investment Communication managed? Is it important?','Pre-investment communication ensures alignment, while post-investment communication is equally vital. Startup founders stay connected with investors until the investment materializes. However, communication often diminishes after investment, potentially creating a negative experience. To avoid this, Bolstart offers a tech platform with a dashboard for portfolio startups and a WhatsApp group for smooth coordination and communication among investors and startups. This ensures timely and professional updates, fostering a positive and informed investor experience.',1,1,0,1,'2023-12-08 07:29:28',NULL),(6,'How are investment opportunities communicated?','Investors stay informed through emails and WhatsApp updates every 15 days. Join Zoom Pitch Sessions and Investor Town Halls for a deeper understanding. Ensure your Bolstart WhatsApp group is unmuted; customize the notification tone for easy identification:\r\nOn iOS - WhatsApp > Bolstart Angel Group > Group name > Wallpaper & Sound > Alert tune > Select.\r\nOn Android - WhatsApp > Bolstart Angel Group > Group name > Custom notifications > Notification tone > Select.',1,1,0,1,'2023-12-08 07:29:55',NULL),(7,'I\'m not familiar with startup jargon. How can I understand the discussions and reports?','No worries! We understand that startup lingo can be complex. Bolstart offers a comprehensive Startup Glossary through monthly online sessions for angel investors, explaining common terms. Additionally, our team is always ready to assist and simplify any concepts during events or in one-on-one sessions. Feel free to reach out for clarity!',1,1,0,1,'2023-12-08 07:30:20',NULL);
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `header_and_footer_content`
--

DROP TABLE IF EXISTS `header_and_footer_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `header_and_footer_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `status` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `header_and_footer_content`
--

LOCK TABLES `header_and_footer_content` WRITE;
/*!40000 ALTER TABLE `header_and_footer_content` DISABLE KEYS */;
INSERT INTO `header_and_footer_content` VALUES (1,'header_login_button_link','https://app.bolstart.com/#/account/login',NULL,'2023-12-09 04:51:36','2024-04-29 13:28:24'),(2,'footer_company_intro','World\'s leading Angel Investing platform, offering personalized support, transparent experiences, and tailored for corporate professionals venturing into startups.',NULL,'2023-12-09 04:52:56','2024-02-05 17:32:37'),(3,'section_1_heading','STARTUPS',NULL,'2023-12-09 05:34:11','2024-02-05 11:25:11'),(4,'section_1_menu_1_text','Overview',NULL,'2023-12-09 05:34:11',NULL),(5,'section_1_menu_1_link','#',NULL,'2023-12-09 05:34:11',NULL),(6,'section_1_menu_2_text','Events',NULL,'2023-12-09 05:34:11',NULL),(7,'section_1_menu_2_link','#',NULL,'2023-12-09 05:34:11',NULL),(8,'section_1_menu_3_text','FAQs',NULL,'2023-12-09 05:34:11',NULL),(9,'section_1_menu_3_link','#',NULL,'2023-12-09 05:34:11',NULL),(10,'section_1_menu_4_text','Community',NULL,'2023-12-09 05:34:11',NULL),(11,'section_1_menu_4_link','#',NULL,'2023-12-09 05:34:11',NULL),(12,'section_2_heading','INVESTORS',NULL,'2023-12-09 05:34:11',NULL),(13,'section_2_menu_1_text','Overview',NULL,'2023-12-09 05:34:11',NULL),(14,'section_2_menu_1_link','#',NULL,'2023-12-09 05:34:11',NULL),(15,'section_2_menu_2_text','Events',NULL,'2023-12-09 05:34:11',NULL),(16,'section_2_menu_2_link','#',NULL,'2023-12-09 05:34:11',NULL),(17,'section_2_menu_3_text','FAQs',NULL,'2023-12-09 05:34:11',NULL),(18,'section_2_menu_3_link','#',NULL,'2023-12-09 05:34:11',NULL),(19,'section_2_menu_4_text','Community',NULL,'2023-12-09 05:34:11',NULL),(20,'section_2_menu_4_link','#',NULL,'2023-12-09 05:34:11',NULL),(21,'section_3_heading','DISCOVER',NULL,'2023-12-09 05:34:11',NULL),(22,'section_3_menu_1_text','News',NULL,'2023-12-09 05:34:11',NULL),(23,'section_3_menu_1_link','#',NULL,'2023-12-09 05:34:11',NULL),(24,'section_3_menu_2_text','Blogs',NULL,'2023-12-09 05:34:11',NULL),(25,'section_3_menu_2_link','#',NULL,'2023-12-09 05:34:11',NULL),(26,'section_3_menu_3_text','Partner',NULL,'2023-12-09 05:34:11',NULL),(27,'section_3_menu_3_link','#',NULL,'2023-12-09 05:34:11',NULL),(28,'section_3_menu_4_text','Career',NULL,'2023-12-09 05:34:11',NULL),(29,'section_3_menu_4_link','#',NULL,'2023-12-09 05:34:11',NULL),(30,'section_4_heading','GENERAL',NULL,'2023-12-09 05:34:11',NULL),(31,'section_4_menu_1_text','Sign Up',NULL,'2023-12-09 05:34:11',NULL),(32,'section_4_menu_1_link','#',NULL,'2023-12-09 05:34:11',NULL),(33,'section_4_menu_2_text','About',NULL,'2023-12-09 05:34:11',NULL),(34,'section_4_menu_2_link','#',NULL,'2023-12-09 05:34:11',NULL),(35,'section_4_menu_3_text','Contact',NULL,'2023-12-09 05:34:11',NULL),(36,'section_4_menu_3_link','#',NULL,'2023-12-09 05:34:11',NULL),(37,'section_4_menu_4_text','T&C',NULL,'2023-12-09 05:34:11',NULL),(38,'section_4_menu_4_link','#',NULL,'2023-12-09 05:34:11',NULL),(39,'section_4_menu_5_text','Privacy',NULL,'2023-12-09 05:34:11',NULL),(40,'section_4_menu_5_link','https://staging.bolstart.com/privacy-policy',NULL,'2023-12-09 05:34:11','2024-04-04 18:42:32'),(41,'linkedin_link','https://www.linkedin.com/company/bolstart/',NULL,'2023-12-09 05:34:11','2024-04-06 12:19:06'),(42,'twitter_link','https://twitter.com/bolstart',NULL,'2023-12-09 05:34:11','2024-04-06 12:19:06'),(43,'facebook_link','https://www.facebook.com/bolstart',NULL,'2023-12-09 05:34:11','2024-04-06 12:19:06'),(44,'instagram_link','https://www.instagram.com/bolstart_',NULL,'2023-12-09 05:34:11','2024-04-06 12:19:06'),(45,'youtube_link','https://www.youtube.com/@bolstart',NULL,'2023-12-09 05:36:40','2024-04-06 12:19:06'),(46,'disclaimer_text','The information provided on this website is for general informational purposes only. It does not constitute professional advice or recommendations.',NULL,'2023-12-09 05:36:40',NULL);
/*!40000 ALTER TABLE `header_and_footer_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page_content`
--

DROP TABLE IF EXISTS `home_page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page_content`
--

LOCK TABLES `home_page_content` WRITE;
/*!40000 ALTER TABLE `home_page_content` DISABLE KEYS */;
INSERT INTO `home_page_content` VALUES (1,'top_investor_section_small_heading','STARTUP. ANGEL NETWORK. VC NETWORK.','2023-12-04 12:04:11','2023-12-15 14:56:03'),(2,'top_investor_section_main_heading_part_1','We','2023-12-04 12:04:39','2024-01-03 21:43:07'),(3,'top_investor_section_main_heading_part_2','Identify Disruptive','2023-12-04 12:05:01','2024-01-03 21:43:07'),(4,'top_investor_section_main_heading_part_3','Startups for Investors','2023-12-04 12:05:15','2024-01-12 17:43:50'),(5,'top_investor_section_paragraph','Bolstart simplifies startup investing for corporate professionals in 20 mins, providing personalized support, accountability, and a transparent experience, redefining startup investments.','2023-12-04 12:05:43','2024-02-05 16:18:17'),(6,'top_investor_section_button_text','Get Started','2023-12-04 12:06:07',NULL),(7,'top_investor_section_button_link','https://google.com','2023-12-04 12:06:36',NULL),(8,'top_investor_section_video_button_text','Play Video','2023-12-04 12:06:54',NULL),(9,'top_investor_section_youtube_video_link','https://www.youtube.com/watch?list=TLGG9m1lwPUk9SEwNDEyMjAyMw&v=MLpWrANjFbI','2023-12-04 12:07:31',NULL),(10,'top_investor_section_right_card_1_heading','Innovate-Elevate','2023-12-04 12:08:20','2024-02-01 16:26:01'),(11,'top_investor_section_right_card_1_text_1','Strategize Align','2023-12-04 12:08:50','2024-02-01 16:24:04'),(12,'top_investor_section_right_card_1_text_2','Network Link','2023-12-04 12:09:01','2024-02-01 16:24:05'),(13,'top_investor_section_right_card_1_text_3','Disruption','2023-12-04 12:09:11','2024-02-01 15:28:07'),(14,'top_investor_section_right_card_2_number','98','2023-12-04 12:09:41',NULL),(15,'top_investor_section_right_card_2_heading','Success Rate','2023-12-04 12:10:04',NULL),(16,'top_investor_section_right_card_2_text','in Empowering Ventures','2023-12-04 12:10:18',NULL),(17,'top_investor_section_number_of_investors','130+','2023-12-04 12:11:16','2024-01-12 17:50:00'),(18,'top_investor_section_number_of_investors_heading','Investors in our Community','2023-12-04 12:11:33',NULL),(19,'top_investor_section_number_of_investors_text','VCs, Micro VCs, Angels and HNIs','2023-12-04 12:11:51',NULL),(20,'top_startup_section_heading_part_1','Then We Power Disruption','2023-12-04 12:12:33',NULL),(21,'top_startup_section_heading_part_2','with Investor Capital','2023-12-04 12:12:46',NULL),(22,'top_startup_section_number_of_startups','300+','2023-12-04 12:11:16','2024-01-12 17:50:00'),(23,'top_startup_section_number_of_startups_heading','Startups in our Community','2023-12-04 12:11:33',NULL),(24,'top_startup_section_number_of_startups_text','Disruptors and Sustainable Ventures','2023-12-04 12:11:51',NULL),(25,'top_startup_section_paragraph','Our network of 130+ trailblazing investors don\'t just invest capital, but also provide strategic mentorship.','2023-12-04 12:14:36','2024-01-12 17:46:02'),(26,'partners_section_heading_part_1','Investors in our','2023-12-04 12:15:05',NULL),(27,'partners_section_heading_part_2','Community','2023-12-04 12:15:17',NULL),(28,'about_section_card_1_heading','Why Bolstart?','2023-12-04 12:16:12',NULL),(29,'about_section_card_1_text','Discover Prime Opportunities, Bolster Your Portfolio','2023-12-04 12:16:34',NULL),(30,'about_section_card_1_right_side_text_1','ELEVATE PORTFOLIO POTENTIAL','2023-12-04 12:17:23',NULL),(31,'about_section_card_1_right_side_text_2','Bolster Portfolio Success','2023-12-04 12:17:23',NULL),(32,'about_section_card_1_right_side_text_3','Pitch day every 15 days','2023-12-04 12:17:23',NULL),(33,'about_section_card_1_right_side_text_4','Investor Townhall','2023-12-04 12:17:23',NULL),(34,'about_section_card_1_right_side_text_5','Platform Access','2023-12-04 12:17:23',NULL),(35,'about_section_card_1_right_side_text_6','Investment Report','2023-12-04 12:17:23',NULL),(36,'about_section_card_1_right_side_text_7','Networking Events','2023-12-04 12:17:23',NULL),(39,'about_section_card_1_right_side_button_text','Read More','2023-12-04 12:17:23',NULL),(40,'about_section_card_1_right_side_button_link','https://www.bolstart.com/about-investors','2023-12-04 12:17:23','2024-05-07 13:35:11'),(41,'about_section_card_2_right_side_text_1','Real-Time Insights','2023-12-04 12:17:23',NULL),(42,'about_section_card_2_right_side_text_2','Reduce Management Effort','2023-12-04 12:17:23',NULL),(43,'about_section_card_2_right_side_text_3','Monitor Live Trends','2023-12-04 12:17:23',NULL),(44,'about_section_card_2_right_side_text_4','Streamline Data Management','2023-12-04 12:17:23',NULL),(45,'about_section_card_2_right_side_text_5','Seamless Portfolio Tracking','2023-12-04 12:17:23',NULL),(46,'about_section_card_2_right_side_text_6','Access Valuable Insights','2023-12-04 12:17:23',NULL),(47,'about_section_card_2_right_side_text_7','User-Friendly Tools','2023-12-04 12:17:23',NULL),(52,'about_section_card_2_heading','Dashboard','2023-12-09 06:32:54',NULL),(53,'about_section_card_2_text','Live Data, Streamline, Elevate Investment Experience.','2023-12-09 06:32:54','2024-02-01 16:19:17'),(54,'about_section_card_3_heading','MIS Updates','2023-12-09 06:32:54','2024-02-01 16:02:33'),(55,'about_section_card_3_text','Optimize with Detailed MIS Reports','2023-12-09 06:32:54','2024-02-01 16:16:57'),(56,'about_section_card_4_heading','Community','2023-12-09 06:32:54',NULL),(57,'about_section_card_4_text','Network, Engage, Grow—Shaping Success Together.','2023-12-09 06:32:54','2024-02-01 16:18:12'),(58,'about_section_card_3_right_side_text_1','Optimize Strategy','2023-12-04 12:17:23',NULL),(59,'about_section_card_3_right_side_text_2','Data-Driven Decisions','2023-12-04 12:17:23',NULL),(60,'about_section_card_3_right_side_text_3','Detailed MIS Reports','2023-12-04 12:17:23',NULL),(61,'about_section_card_3_right_side_text_4','Fuel Informed Decisions','2023-12-04 12:17:23',NULL),(62,'about_section_card_3_right_side_text_5','Market Trends Insights','2023-12-04 12:17:23',NULL),(63,'about_section_card_3_right_side_text_6','Comprehensive Understanding','2023-12-04 12:17:23',NULL),(64,'about_section_card_3_right_side_text_7','Strategy Optimization Guide','2023-12-04 12:17:23',NULL),(65,'about_section_card_4_right_side_text_1','Collective Growth','2023-12-04 12:17:23',NULL),(66,'about_section_card_4_right_side_text_2','Network, Engage, Thrive','2023-12-04 12:17:23',NULL),(67,'about_section_card_4_right_side_text_3','Vibrant Community Network','2023-12-04 12:17:23',NULL),(68,'about_section_card_4_right_side_text_4','Forge Valuable Partnerships','2023-12-04 12:17:23',NULL),(69,'about_section_card_4_right_side_text_5','Share Insights Collaboratively','2023-12-04 12:17:23',NULL),(70,'about_section_card_4_right_side_text_6','Engage in Discussions','2023-12-04 12:17:23',NULL),(71,'about_section_card_4_right_side_text_7','Shape Future Success','2023-12-04 12:17:23',NULL),(72,'testimonial_section_text_part_1','Bolstart\'s Investment Report offers insightful details and a','2023-12-09 06:58:49','2024-02-05 16:18:17'),(73,'testimonial_section_text_part_2','startup credit score,','2023-12-09 06:58:49','2024-02-05 16:18:17'),(74,'testimonial_section_text_part_3','empowering my Angel Investing journey with confidence.','2023-12-09 06:58:49','2024-02-05 16:18:17'),(75,'testimonial_section_name','Kshitij Lodha','2023-12-09 06:58:49',NULL),(76,'testimonial_section_designation','Founder, Forthius Capital.','2023-12-09 06:58:49',NULL),(77,'testimonial_section_card_1_text_1','Avg. Ticket Size','2023-12-09 06:58:49',NULL),(78,'testimonial_section_card_1_text_2','₹12L','2023-12-09 06:58:49',NULL),(79,'testimonial_section_card_2_text_1','3 Startups Invested','2023-12-09 06:58:49',NULL),(80,'testimonial_section_card_2_text_2','Co-invested along with Bolstart Angel Network','2023-12-09 06:58:49',NULL),(81,'big_card_1_text','We know what Distracts','2023-12-09 06:58:49',NULL),(82,'big_card_1_right_side_text_1','IDENTIFY DISTRACTIONS','2023-12-09 06:58:49',NULL),(83,'big_card_1_right_side_text_2','Mastering Distraction Dynamics','2023-12-09 06:58:49',NULL),(84,'big_card_1_right_side_text_3','Uncover the obstacles hindering progress and streamline your path to success','2023-12-09 06:58:49',NULL),(85,'big_card_1_right_side_button_text','See All Projects','2023-12-09 06:58:49',NULL),(86,'big_card_1_right_side_button_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(87,'reports_section_heading','Crucial Insights: Startup Investment Analysis Report','2023-12-09 06:58:49','2024-02-05 16:18:17'),(88,'reports_section_paragraph_1','Explore Bolstart\'s Investment Report, an indispensable guide for Angel Investors. Uncover detailed insights and proprietary scores, enhancing informed decision-making. Delve into Traction, Business Score, and the compelling reasons to invest in each startup.','2023-12-09 06:58:49','2024-02-05 16:45:26'),(89,'reports_section_paragraph_2','Our algorithm-based Business and Team Scores provide a holistic view. Beyond conventional metrics, the report is your compass for success in Angel Investing—aligning opportunities with your goals. Elevate your journey with nuanced details and confident choices.','2023-12-09 06:58:49','2024-02-05 16:45:27'),(90,'reports_section_button_text','View Sample Report','2023-12-09 06:58:49',NULL),(91,'reports_section_button_link','https://www.bolstart.com/Startup_Dossier_Format.pdf','2023-12-09 06:58:49','2024-05-07 15:42:58'),(92,'events_section_small_heading','STAY INFORMED AND ENGAGED','2023-12-09 06:58:49',NULL),(93,'events_section_heading','Insightful Innovation Journeys','2023-12-09 06:58:49','2024-02-06 16:02:41'),(94,'events_section_paragraph','Dive into curated events, unite investors and founders for discussions, presentations, networking. Stay at the forefront of trends, gain insights, be part of innovation. Elevate with Bolstart\'s gateway to possibilities.','2023-12-09 06:58:49','2024-02-06 15:58:39'),(95,'events_section_card_small_heading','Explore Community Pulse','2023-12-09 06:58:49',NULL),(96,'events_section_card_heading','Join Vibrant Startup and Investor Gatherings','2023-12-09 06:58:49',NULL),(97,'events_section_button_text','See All Events','2023-12-09 06:58:49',NULL),(98,'events_section_button_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(99,'faq_section_small_heading','FAQ','2023-12-09 06:58:49',NULL),(100,'faq_section_heading','Got Questions ?','2023-12-09 06:58:49',NULL),(101,'faq_section_email','reachout@bolstart.com','2023-12-09 06:58:49','2024-02-01 16:44:40'),(102,'faq_section_button_text','Contact Us','2023-12-09 06:58:49',NULL),(103,'faq_section_button_link','https://staging.bolstart.com/contact-us','2023-12-09 06:58:49','2024-04-04 18:45:29'),(104,'cta_section_small_heading','COLLABORATE FOR UNLEASHED POTENTIAL','2023-12-09 06:58:49','2024-02-05 17:28:44'),(105,'cta_section_heading_part_1','Elevate Your','2023-12-09 06:58:49','2024-02-05 17:28:44'),(106,'cta_section_heading_part_2','Venture Together','2023-12-09 06:58:49','2024-02-05 17:28:44'),(107,'cta_section_paragraph','Immerse yourself in a vibrant community at Bolstart, where startups and investors converge for unparalleled opportunities and strategic partnerships. Our dynamic platform is your catalyst for business growth, connecting you with innovative ventures and like-minded partners. Join today to become a vital part of a network that fuels success.','2023-12-09 06:58:49','2024-02-05 17:28:44'),(108,'cta_section_button_1_text','Get Started','2023-12-09 06:58:49',NULL),(109,'cta_section_button_1_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(110,'cta_section_button_2_text','Contact Us','2023-12-09 06:58:49',NULL),(111,'cta_section_button_2_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(112,'big_card_2_text','We know what Attracts','2023-12-09 06:58:49',NULL),(113,'big_card_2_right_side_text_1','DISCOVER KEY ALLURE','2023-12-09 06:58:49',NULL),(114,'big_card_2_right_side_text_2','The Magnetism Blueprint','2023-12-09 06:58:49',NULL),(115,'big_card_2_right_side_text_3','Pinpoint the factors that captivate, guiding you to investments with significant potential','2023-12-09 06:58:49',NULL),(116,'big_card_2_right_side_button_text','See All Projects','2023-12-09 06:58:49',NULL),(117,'big_card_2_right_side_button_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(118,'big_card_3_text_part_1','And we know what to','2023-12-09 06:58:49',NULL),(119,'big_card_3_right_side_text_1','STRATEGIC FOCUS INSIGHT','2023-12-09 06:58:49',NULL),(120,'big_card_3_right_side_text_2','Precision in Focus Strategies','2023-12-09 06:58:49',NULL),(121,'big_card_3_right_side_text_3','Gain clarity on essential focal points, ensuring your efforts contribute to optimal results and growth','2023-12-09 06:58:49',NULL),(122,'big_card_3_right_side_button_text','See All Projects','2023-12-09 06:58:49',NULL),(123,'big_card_3_right_side_button_link','https://www.bolstart.com/about-investors','2023-12-09 06:58:49','2024-05-07 13:35:11'),(124,'faq_section_text_with_email','If you have any other questions – please get in touch at','2023-12-09 06:58:49',NULL),(125,'big_card_3_text_part_2','Focus','2023-12-09 06:58:49',NULL),(126,'big_card_3_text_part_3','On!','2023-12-09 06:58:49',NULL),(130,'about_section_card_1_right_side_paragraph',NULL,'2024-04-06 13:44:30','2024-05-02 15:14:43'),(131,'about_section_card_1_right_small_heading',NULL,'2024-04-06 13:44:34','2024-05-02 15:21:00'),(132,'about_section_card_2_right_side_paragraph',NULL,'2024-04-06 13:44:39','2024-05-02 15:14:43'),(133,'about_section_card_2_right_small_heading',NULL,'2024-04-06 13:44:42','2024-05-02 15:21:00'),(134,'about_section_card_3_right_side_paragraph',NULL,'2024-04-06 13:44:47','2024-05-02 15:14:43'),(135,'about_section_card_3_right_small_heading',NULL,'2024-04-06 13:44:50','2024-05-02 15:21:00'),(136,'about_section_card_4_right_side_paragraph',NULL,'2024-04-06 13:44:54','2024-05-02 15:14:43'),(137,'about_section_card_4_right_small_heading',NULL,'2024-04-06 13:44:58','2024-05-02 15:21:00');
/*!40000 ALTER TABLE `home_page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investors_page_content`
--

DROP TABLE IF EXISTS `investors_page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `investors_page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investors_page_content`
--

LOCK TABLES `investors_page_content` WRITE;
/*!40000 ALTER TABLE `investors_page_content` DISABLE KEYS */;
INSERT INTO `investors_page_content` VALUES (1,'top_section_text_1','Elevate Your Investment Success','2023-12-09 08:43:27','2024-02-02 16:34:11'),(2,'top_section_text_2','Dive into India\'s prime deal flow, co-invest with seasoned backers in promising startups. Lifelong wealth creation, diversification & mentorship.','2023-12-09 08:43:27','2024-02-02 16:55:05'),(3,'top_section_text_3','Prime Investment Opportunities Await','2023-12-09 08:43:27','2024-02-02 17:05:05'),(4,'counter_card_1_text_1','Investors','2023-12-09 08:43:27',NULL),(5,'counter_card_1_text_2','130','2023-12-09 08:43:27',NULL),(6,'counter_card_1_symbol','+','2023-12-09 08:43:27',NULL),(7,'tile_1_heading','Curated Deals','2023-12-09 08:43:27','2023-12-15 15:00:25'),(8,'tile_1_description','Ignite growth and returns with exclusive, visionary opportunities, vetted for your investment success.','2023-12-09 08:43:27','2024-02-02 17:38:45'),(9,'tile_1_right_side_text_1','STRATEGIC INVESTMENT OPPORTUNITIES','2023-12-09 08:43:27',NULL),(10,'tile_1_right_side_text_2','Unlock Innovation','2023-12-09 08:43:27',NULL),(11,'tile_1_right_side_text_3','Exclusive investment opportunities','2023-12-09 08:43:27',NULL),(12,'tile_1_right_side_text_4','Vetting for high returns','2023-12-09 08:43:27',NULL),(13,'tile_1_right_side_text_5','Diverse startup portfolios','2023-12-09 08:43:27',NULL),(14,'tile_1_right_side_text_6','Strategic investment curation','2023-12-09 08:43:27',NULL),(15,'tile_1_right_side_text_7','Pioneering growth ventures','2023-12-09 08:43:27',NULL),(16,'tile_1_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(17,'tile_1_right_side_button_link','#','2023-12-09 08:43:27',NULL),(18,'address_section_small_heading','CONNECT WITH US','2023-12-09 08:43:27','2024-02-02 17:31:45'),(19,'address_section_big_heading','Get in Touch: Reach Out for Investment Inquiries','2023-12-09 08:43:27','2024-02-02 17:31:45'),(20,'address_section_paragraph','We\'re here to help. Join as an investor or Reach out to us for exciting investment opportunities, partnership inquiries, or any questions. Your success journey starts with a engaging conversation.','2023-12-09 08:43:27','2024-02-02 17:37:33'),(21,'address_section_text_1','Bibwewadi, Pune','2023-12-09 08:43:27','2024-02-05 17:44:10'),(22,'address_section_text_2','Shop No. 13, Ashwini Paradise, Lullanagar Rd, Phase 1, Bibwewadi, Pune, Maharashtra 411037','2023-12-09 08:43:27','2024-02-05 17:44:10'),(23,'address_section_text_3','Address','2023-12-09 08:43:27',NULL),(24,'address_section_text_4','Lullanagar Rd, Phase 1, Bibwewadi, Pune','2023-12-09 08:43:27','2024-02-05 17:44:10'),(25,'address_section_text_5','Phone','2023-12-09 08:43:27',NULL),(26,'address_section_text_6','+91 9503304430','2023-12-09 08:43:27','2024-02-02 16:34:12'),(27,'address_section_text_7','Email','2023-12-09 08:43:27',NULL),(28,'address_section_text_8','reachout@bolstart.com','2023-12-09 08:43:27','2024-02-02 16:34:12'),(29,'events_small_heading','STAY INFORMED AND ENGAGED','2023-12-09 08:43:27','2023-12-15 15:00:26'),(30,'events_big_heading','Explore our Event Showcase','2023-12-09 08:43:27','2024-02-06 16:27:55'),(31,'events_paragraph','Discover exclusive events tailored for investors, featuring insightful discussions, groundbreaking presentations, and the latest industry trends. Join us to be part of the innovation narrative.','2023-12-09 08:43:27','2024-02-06 16:27:55'),(32,'events_card_text_1','Explore Community Pulse','2023-12-09 08:43:27',NULL),(33,'events_card_text_2','Join Vibrant Startup and Investor Gatherings','2023-12-09 08:43:27',NULL),(34,'events_button_text','See All Events','2023-12-09 08:43:27',NULL),(35,'events_button_link','#','2023-12-09 08:43:27',NULL),(36,'contact_section_small_heading','BECOME MEMBER','2023-12-09 08:43:27','2024-02-02 16:34:12'),(37,'contact_section_big_heading','Let\'s talk about Investment','2023-12-09 08:43:27','2024-02-03 15:44:25'),(38,'contact_section_paragraph','Contact us to tap into India\'s prime deal flow, co-invest with experienced backers in high-potential startups.','2023-12-09 08:43:27','2024-02-03 15:44:25'),(39,'contact_section_icon_1_text_1','Our Email','2023-12-09 08:43:27',NULL),(40,'contact_section_icon_1_text_2','reachout@bolstart.com','2023-12-09 08:43:27','2024-02-02 17:36:44'),(41,'contact_section_icon_2_text_1','Our Phone','2023-12-09 08:43:27',NULL),(42,'contact_section_icon_2_text_2','+91 9503304430','2023-12-09 08:43:27','2024-02-02 17:36:44'),(43,'faq_section_small_heading','FAQ','2023-12-09 08:43:27',NULL),(44,'faq_section_heading','Got Questions ?','2023-12-09 08:43:27',NULL),(45,'faq_section_text','If you have any other questions – please get in touch at','2023-12-09 08:43:27',NULL),(46,'faq_section_email','reachout@bolstart.com','2023-12-09 08:43:27','2024-02-02 17:36:44'),(47,'counter_card_2_text_1','VCs','2023-12-09 08:43:27',NULL),(48,'counter_card_2_text_2','50','2023-12-09 08:43:27',NULL),(49,'counter_card_2_symbol','+','2023-12-09 08:43:27',NULL),(50,'counter_card_3_text_1','Angels','2023-12-09 08:43:27',NULL),(51,'counter_card_3_text_2','80','2023-12-09 08:43:27',NULL),(52,'counter_card_3_symbol','+','2023-12-09 08:43:27',NULL),(53,'counter_card_4_text_1','Networking Events','2023-12-09 08:43:27',NULL),(54,'counter_card_4_text_2','80+','2023-12-09 08:43:27','2024-05-02 15:19:29'),(55,'tile_2_heading','In-Depth Insights','2023-12-09 08:43:27','2024-02-02 17:05:05'),(56,'tile_2_description','Empowering investments with detailed dossiers, ensuring strategic and informed decisions.','2023-12-09 08:43:27',NULL),(57,'tile_2_right_side_text_1','Precision Investment Intelligence','2023-12-09 08:43:27',NULL),(58,'tile_2_right_side_text_2','Knowledge, Precision, Power','2023-12-09 08:43:27',NULL),(59,'tile_2_right_side_text_3','Comprehensive startup profiles','2023-12-09 08:43:27',NULL),(60,'tile_2_right_side_text_4','In-depth market analysis','2023-12-09 08:43:27',NULL),(61,'tile_2_right_side_text_5','Tailored investment strategies','2023-12-09 08:43:27',NULL),(62,'tile_2_right_side_text_6','Strategic risk assessment','2023-12-09 08:43:27',NULL),(63,'tile_2_right_side_text_7','Actionable intelligence','2023-12-09 08:43:27',NULL),(64,'tile_2_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(65,'tile_1_right_side_button_link','#','2023-12-09 08:43:27',NULL),(66,'tile_3_heading','Weekly Updates','2023-12-09 08:43:27','2024-02-02 17:36:44'),(67,'tile_3_description','Thriving through real-time trends, weekly highlights shaping investment landscapes dynamically.','2023-12-09 08:43:27',NULL),(68,'tile_3_right_side_text_1','Dynamic Investment Highlights','2023-12-09 08:43:27',NULL),(69,'tile_3_right_side_text_2','Stay Informed, Thrive','2023-12-09 08:43:27',NULL),(70,'tile_3_right_side_text_3','Real-time market trends','2023-12-09 08:43:27',NULL),(71,'tile_3_right_side_text_4','Weekly investment highlights','2023-12-09 08:43:27',NULL),(72,'tile_3_right_side_text_5','Startup success stories','2023-12-09 08:43:27',NULL),(73,'tile_3_right_side_text_6','Industry breakthroughs','2023-12-09 08:43:27',NULL),(74,'tile_3_right_side_text_7','Timely investment insights','2023-12-09 08:43:27',NULL),(75,'tile_3_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(76,'tile_3_right_side_button_link','#','2023-12-09 08:43:27',NULL),(77,'tile_4_heading','Community Access','2023-12-09 08:43:27',NULL),(78,'tile_4_description','Connect, collaborate, catalyze change—exclusive network access unlocking collective innovation potential.','2023-12-09 08:43:27',NULL),(79,'tile_4_right_side_text_1','Synergy Hub','2023-12-09 08:43:27',NULL),(80,'tile_4_right_side_text_2','Connect. Collaborate. Catalyze.','2023-12-09 08:43:27',NULL),(81,'tile_4_right_side_text_3','Exclusive networking events','2023-12-09 08:43:27',NULL),(82,'tile_4_right_side_text_4','Mentorship opportunities','2023-12-09 08:43:27',NULL),(83,'tile_4_right_side_text_5','Collaborative forums','2023-12-09 08:43:27',NULL),(84,'tile_4_right_side_text_6','Industry thought leadership','2023-12-09 08:43:27',NULL),(85,'tile_4_right_side_text_7','Collective innovation spirit','2023-12-09 08:43:27',NULL),(86,'tile_4_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(87,'tile_4_right_side_button_link','#','2023-12-09 08:43:27',NULL),(88,'tile_1_right_side_paragraph',NULL,'2024-04-06 13:45:02','2024-05-02 15:16:38'),(89,'tile_1_right_side_small_heading',NULL,'2024-04-06 13:45:06','2024-05-02 15:17:55'),(90,'tile_2_right_side_paragraph',NULL,'2024-04-06 13:45:10','2024-05-02 15:16:38'),(91,'tile_2_right_side_small_heading',NULL,'2024-04-06 13:45:13','2024-05-02 15:17:55'),(92,'tile_3_right_side_paragraph',NULL,'2024-04-06 13:45:17','2024-05-02 15:16:38'),(93,'tile_3_right_side_small_heading',NULL,'2024-04-06 13:45:21','2024-05-02 15:17:55'),(94,'tile_4_right_side_paragraph',NULL,'2024-04-06 13:45:25','2024-05-02 15:16:38'),(95,'tile_4_right_side_small_heading',NULL,'2024-04-06 13:45:29','2024-05-02 15:17:55');
/*!40000 ALTER TABLE `investors_page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,'Modules\\Category\\Models\\Category',1,'f131a023-c4c5-4c9f-a283-e3bcbd82989f','categories','two-business-men-celebrating-a-deal-e1676701847398','J5d9oDPJvBupbMshoB9TPLeZ5yuEKiD29Zok6mbD.jpg','image/jpeg','media','media',140384,'[]','[]','{\"thumb\": true, \"thumb300\": true}','[]',1,'2023-10-31 09:11:16','2023-10-31 09:11:18');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_03_11_062135_create_posts_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2020_02_19_173641_create_settings_table',1),(7,'2020_02_19_173700_create_userprofiles_table',1),(8,'2020_02_19_173711_create_notifications_table',1),(9,'2020_02_22_115918_create_user_providers_table',1),(10,'2020_05_01_163442_create_tags_table',1),(11,'2020_05_01_163833_create_polymorphic_taggables_table',1),(12,'2020_05_04_151517_create_comments_table',1),(13,'2022_04_01_132914_create_media_table',1),(14,'2022_04_01_133918_create_permission_tables',1),(15,'2022_04_01_134140_create_activity_log_table',1),(16,'2022_04_01_134141_add_event_column_to_activity_log_table',1),(17,'2022_04_01_134142_add_batch_uuid_column_to_activity_log_table',1),(18,'2023_03_12_195541_add_expires_at_column_to_personal_access_tokens_table',1),(19,'2023_07_30_013129_create_categories_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',3),(4,'App\\Models\\User',4),(5,'App\\Models\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES ('8ad867ce-8b95-4176-84c7-8194c434172d','Modules\\Comment\\Notifications\\NewCommentAdded','App\\Models\\User',1,'{\"title\":\"New Comment for review!\",\"module\":\"Comment\",\"type\":\"created\",\"icon\":\"fas fa-comments\",\"text\":\"New Comment | <strong>Hey<\\/strong> on <strong><\\/strong>  by <strong>Super Admin<\\/strong>\",\"url_backend\":\"http:\\/\\/localhost\\/bolstart-website\\/laravel-starter\\/public\\/admin\\/comments\\/1\",\"url_frontend\":\"\"}',NULL,'2023-11-09 09:14:55','2023-11-09 09:14:55');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_reset_tokens_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_backend','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(2,'edit_settings','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(3,'view_logs','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(4,'view_users','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(5,'add_users','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(6,'edit_users','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(7,'delete_users','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(8,'restore_users','web','2023-10-22 07:20:07','2023-10-22 07:20:07'),(9,'block_users','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(10,'view_roles','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(11,'add_roles','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(12,'edit_roles','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(13,'delete_roles','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(14,'restore_roles','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(15,'view_backups','web','2023-10-22 07:20:08','2023-10-22 07:20:08'),(16,'add_backups','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(17,'create_backups','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(18,'download_backups','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(19,'delete_backups','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(20,'view_posts','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(21,'add_posts','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(22,'edit_posts','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(23,'delete_posts','web','2023-10-22 07:20:09','2023-10-22 07:20:09'),(24,'restore_posts','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(25,'view_categories','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(26,'add_categories','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(27,'edit_categories','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(28,'delete_categories','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(29,'restore_categories','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(30,'view_tags','web','2023-10-22 07:20:10','2023-10-22 07:20:10'),(31,'add_tags','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(32,'edit_tags','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(33,'delete_tags','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(34,'restore_tags','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(35,'view_comments','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(36,'add_comments','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(37,'edit_comments','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(38,'delete_comments','web','2023-10-22 07:20:11','2023-10-22 07:20:11'),(39,'restore_comments','web','2023-10-22 07:20:12','2023-10-22 07:20:12');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_category` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_timing` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsvp_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_id` int unsigned DEFAULT NULL,
  `category_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` int DEFAULT NULL,
  `featured_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_og_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_og_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int unsigned NOT NULL DEFAULT '0',
  `order` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `moderated_by` int unsigned DEFAULT NULL,
  `moderated_at` datetime DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL,
  `created_by_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by_alias` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Leadership Lessons from Successful Founders: Wisdom for Entrepreneurs','leadership-lessons-from-successful-founders-wisdom-for-entrepreneurs','A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.','<h1 class=\"\"><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, Ubuntu, Cantarell, \"Noto Sans\", sans-serif, \"Helvetica Neue\", Arial, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; white-space: pre-wrap;\">A post sharing leadership lessons and advice from successful founders, offering valuable insights to aspiring entrepreneurs.</span><br></h1>','Article',NULL,NULL,NULL,NULL,5,'Entrepreneurship and Leadership',1,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','My New Blog',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,2,NULL,1,NULL,NULL,1,'Super Admin','Ravi Singh',2,NULL,'2023-10-18 08:43:00','2023-10-31 09:14:10','2023-11-22 07:29:09',NULL,NULL,NULL,NULL),(2,'Navigating Regulatory Changes in Fintech: Implications for VC Investors','navigating-regulatory-changes-in-fintech-implications-for-vc-investors','An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.','<h1 class=\"\"><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \"Segoe UI\", Roboto, Ubuntu, Cantarell, \"Noto Sans\", sans-serif, \"Helvetica Neue\", Arial, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px; white-space: pre-wrap;\">An exploration of recent regulatory changes in the fintech sector and how VC firms can adapt their investment strategies.</span><br></h1>','Article',NULL,NULL,NULL,NULL,6,'Regulatory and Legal Updates',1,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','My New News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,6,NULL,1,NULL,NULL,1,'Super Admin','Ravi Singh',2,NULL,'2023-10-21 09:03:00','2023-10-31 09:33:47','2023-11-22 06:27:41',NULL,NULL,NULL,NULL),(3,'The Rise of Sustainable Tech: Opportunities for VC Investments','hello-sir','An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.','<p><span style=\"color: rgb(15, 15, 15); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space: pre-wrap;\">An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.</span><br></p><p><br></p>','Article',NULL,NULL,NULL,NULL,1,'Industry Insights',1,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Hello Sir',NULL,'An analysis of the growing sustainability trend within the technology industry and potential investment opportunities for a VC firm.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Mahesh Roy',2,NULL,'2023-11-22 04:30:00','2023-11-21 10:37:08','2023-11-22 06:25:04',NULL,NULL,NULL,NULL),(4,'First Sample News','first-sample-news','This is first sample news','<p>This is first sample news</p><ul><li>This is point 1</li><li>This is point 2</li><li>This is point 3</li></ul>','News',NULL,NULL,NULL,NULL,1,'Industry Insights',1,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/group-of-business-people-diverse-meeting-and-working-in-the-office-seminar-concept-e1676701745847.jpg','First Sample News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/group-of-business-people-diverse-meeting-and-working-in-the-office-seminar-concept-e1676701745847.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-22 10:29:00','2023-11-22 11:00:04','2023-11-22 11:00:04',NULL,NULL,NULL,NULL),(5,'Second Sample News','second-sample-news','This is second sample news','<p><b>This is second sample news</b><br></p>','News',NULL,NULL,NULL,NULL,6,'Regulatory and Legal Updates',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Second Sample News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-22 10:30:00','2023-11-22 11:00:55','2023-11-22 11:00:55',NULL,NULL,NULL,NULL),(6,'Third Sample News','third-sample-news','This is third sample news','<p><b>This is third sample news</b><br></p>','News',NULL,NULL,NULL,NULL,5,'Entrepreneurship and Leadership',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Third Sample News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator',NULL,2,NULL,'2023-11-22 10:31:00','2023-11-22 11:01:41','2023-11-22 11:01:41',NULL,NULL,NULL,NULL),(7,'Fourth Sample News','fourth-sample-news','This is fourth sample news','<p>This is fourth sample news<br></p>','News',NULL,NULL,NULL,NULL,5,'Entrepreneurship and Leadership',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Fourth Sample News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-22 10:35:00','2023-11-22 11:05:38','2023-11-22 11:05:38',NULL,NULL,NULL,NULL),(8,'Fifth Sample News','fifth-sample-news','Fifth sample news','<p>This is fifth sample news</p>','News',NULL,NULL,NULL,NULL,6,'Regulatory and Legal Updates',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Fifth Sample News',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-22 10:36:00','2023-11-22 11:06:30','2023-11-22 11:06:30',NULL,NULL,NULL,NULL),(9,'Networking Event','networking-event','This is a networking event','<p>This is a networking event</p>','Feature','Investment','2023-12-27','08:00 AM to 09:00 PM','https://calendar.google.com',5,'Entrepreneurship and Leadership',1,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Networking Event',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-27 09:06:00','2023-11-27 09:36:18','2023-11-27 09:36:18',NULL,NULL,NULL,NULL),(10,'Investment Event','investment-event','This is investment event','<p><b>This is investment event</b><br></p>','Feature','Investment','2023-12-27','08:00 AM to 09:00 PM','https://calendar.google.com',3,'Investment Strategies',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Investment Event',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-27 09:09:00','2023-11-27 09:39:27','2023-11-27 09:39:27',NULL,NULL,NULL,NULL),(11,'Technical Event','technical-event','This is technical event','<p><b>This is technical event</b><br></p>','Feature','Investment','2023-12-27','08:00 AM to 09:00 PM','https://calendar.google.com',5,'Entrepreneurship and Leadership',0,'https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg','Technical Event',NULL,'A CMS like modular starter application project built with latest Laravel.','https://kit.baliniz.com/valuent/wp-content/uploads/sites/52/2023/02/casual-businessman-and-woman-with-laptop-meeting-in-office-e1676701724492.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2023-11-27 09:10:00','2023-11-27 09:40:25','2023-11-27 09:40:25',NULL,NULL,NULL,NULL),(12,'New Event','new-event','This is intro','<p>This is content</p>','Feature','TestCategory','2024-04-18',NULL,'https://rsvp.com',1,'Industry Insights',1,'/storage/photos/2/660ea1f11def1.jpg','New Event',NULL,'A CMS like modular starter application project built with latest Laravel.','/storage/photos/2/655edb7f55f6b.png',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Ravi Singh',2,NULL,'2024-04-04 18:18:00','2024-04-04 18:48:42','2024-04-06 19:47:51',NULL,'https://linkedin.com','https://instagram.com','https://twitter.com'),(13,'Test Event Paras','test_event_paras','This is the test event created by Paras','<p>This is the test event created by Paras on 06 May 2024<br></p>','Feature',NULL,'2024-05-07',NULL,NULL,5,'Entrepreneurship and Leadership',1,'/storage/photos/2/660ea1f11def1.jpg','Test Event Paras',NULL,'A CMS like modular starter application project built with latest Laravel.','/storage/photos/2/660ea1f11def1.jpg',NULL,0,NULL,1,NULL,NULL,2,'Admin Istrator','Paras',2,NULL,'2024-05-06 12:00:00','2024-05-06 13:45:46','2024-05-06 13:46:33',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),(22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2),(37,2),(38,2),(39,2),(1,3),(1,4);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'super admin','web','2023-10-22 07:20:06','2023-10-22 07:20:06'),(2,'administrator','web','2023-10-22 07:20:06','2023-10-22 07:20:06'),(3,'manager','web','2023-10-22 07:20:06','2023-10-22 07:20:06'),(4,'executive','web','2023-10-22 07:20:06','2023-10-22 07:20:06'),(5,'user','web','2023-10-22 07:20:06','2023-10-22 07:20:06');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'string',
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `startups_page_content`
--

DROP TABLE IF EXISTS `startups_page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `startups_page_content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content_name` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content_value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `startups_page_content`
--

LOCK TABLES `startups_page_content` WRITE;
/*!40000 ALTER TABLE `startups_page_content` DISABLE KEYS */;
INSERT INTO `startups_page_content` VALUES (1,'top_section_text_1','Empowering Visionaries, Fuelling Growth.','2023-12-09 08:43:27','2024-02-03 18:31:57'),(2,'top_section_text_2','Bolstart empowers founders, connecting with 130+ investors. Fuel your startup\'s growth through strategic investments, shared values, and transformative support.','2023-12-09 08:43:27','2024-02-03 18:31:57'),(3,'top_section_text_3','Elevate Dreams, Spark Success.','2023-12-09 08:43:27','2024-02-03 18:31:57'),(4,'counter_card_1_text_1','Investors','2023-12-09 08:43:27',NULL),(5,'counter_card_1_text_2','130','2023-12-09 08:43:27',NULL),(6,'counter_card_1_symbol','+','2023-12-09 08:43:27',NULL),(7,'tile_1_heading','Curated Deals','2023-12-09 08:43:27','2023-12-15 15:01:09'),(8,'tile_1_description','Ignite growth with exclusive deals, vetted for visionary investment success.','2023-12-09 08:43:27',NULL),(9,'tile_1_right_side_text_1','STRATEGIC INVESTMENT OPPORTUNITIES','2023-12-09 08:43:27',NULL),(10,'tile_1_right_side_text_2','Unlock Innovation','2023-12-09 08:43:27',NULL),(11,'tile_1_right_side_text_3','Exclusive investment opportunities','2023-12-09 08:43:27',NULL),(12,'tile_1_right_side_text_4','Vetting for high returns','2023-12-09 08:43:27',NULL),(13,'tile_1_right_side_text_5','Diverse startup portfolios','2023-12-09 08:43:27',NULL),(14,'tile_1_right_side_text_6','Strategic investment curation','2023-12-09 08:43:27',NULL),(15,'tile_1_right_side_text_7','Pioneering growth ventures','2023-12-09 08:43:27',NULL),(16,'tile_1_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(17,'tile_1_right_side_button_link','#','2023-12-09 08:43:27',NULL),(18,'address_section_small_heading','CONNECT WITH US','2023-12-09 08:43:27','2024-02-03 18:31:57'),(19,'address_section_big_heading','Let\'s Ignite Your Vision: Contact Us','2023-12-09 08:43:27','2024-02-03 18:31:57'),(20,'address_section_paragraph','Explore opportunities, partnerships, or any queries. Initiate your founder journey with a conversation that sparks success.','2023-12-09 08:43:27','2024-02-03 18:38:36'),(21,'address_section_text_1','Bibwewadi, Pune','2023-12-09 08:43:27','2024-02-05 17:42:25'),(22,'address_section_text_2','Shop No. 13, Ashwini Paradise, Lullanagar Rd, Phase 1, Bibwewadi, Pune, Maharashtra 411037','2023-12-09 08:43:27','2024-02-05 17:42:25'),(23,'address_section_text_3','Address','2023-12-09 08:43:27',NULL),(24,'address_section_text_4','Lullanagar Rd, Phase 1, Bibwewadi, Pune','2023-12-09 08:43:27','2024-02-05 17:42:25'),(25,'address_section_text_5','Phone','2023-12-09 08:43:27',NULL),(26,'address_section_text_6','+91 9503304430','2023-12-09 08:43:27','2024-02-03 18:31:57'),(27,'address_section_text_7','Email','2023-12-09 08:43:27',NULL),(28,'address_section_text_8','reachout@bolstart.com','2023-12-09 08:43:27','2024-02-03 18:31:57'),(29,'events_small_heading','FOUNDERS: STAY CONNECTED, STAY INFORMED','2023-12-09 08:43:27','2024-02-06 16:37:28'),(30,'events_big_heading','Immerse Yourself in Innovation','2023-12-09 08:43:27','2024-02-06 16:37:28'),(31,'events_paragraph','Dive into our curated events for founders: insightful discussions and industry trend exploration. Fuel your innovation journey, connect with like-minded peers, and unlock new opportunities for growth.','2023-12-09 08:43:27','2024-02-06 16:38:25'),(32,'events_card_text_1','Explore Community Pulse','2023-12-09 08:43:27',NULL),(33,'events_card_text_2','Join Vibrant Startup and Investor Gatherings','2023-12-09 08:43:27',NULL),(34,'events_button_text','See All Events','2023-12-09 08:43:27',NULL),(35,'events_button_link','#','2023-12-09 08:43:27',NULL),(36,'contact_section_small_heading','GET IN TOUCH','2023-12-09 08:43:27','2023-12-15 15:01:10'),(37,'contact_section_big_heading','Let\'s Fuel Your Visionary Success','2023-12-09 08:43:27','2024-02-03 18:36:24'),(38,'contact_section_paragraph','Reach out to ignite your startup journey. We\'re here to empower, connect, and fuel your visionary success.','2023-12-09 08:43:27','2024-02-03 18:36:24'),(39,'contact_section_icon_1_text_1','Our Email','2023-12-09 08:43:27',NULL),(40,'contact_section_icon_1_text_2','reachout@bolstart.com','2023-12-09 08:43:27','2024-02-03 18:31:57'),(41,'contact_section_icon_2_text_1','Our Phone','2023-12-09 08:43:27',NULL),(42,'contact_section_icon_2_text_2','+91 9503304430','2023-12-09 08:43:27','2024-02-03 18:31:57'),(43,'faq_section_small_heading','FAQ','2023-12-09 08:43:27',NULL),(44,'faq_section_heading','Got Questions ?','2023-12-09 08:43:27',NULL),(45,'faq_section_text','If you have any other questions – please get in touch at','2023-12-09 08:43:27',NULL),(46,'faq_section_email','support@bolstart.com','2023-12-09 08:43:27',NULL),(47,'counter_card_2_text_1','VCs','2023-12-09 08:43:27',NULL),(48,'counter_card_2_text_2','50','2023-12-09 08:43:27',NULL),(49,'counter_card_2_symbol','+','2023-12-09 08:43:27',NULL),(50,'counter_card_3_text_1','Angels','2023-12-09 08:43:27',NULL),(51,'counter_card_3_text_2','80','2023-12-09 08:43:27',NULL),(52,'counter_card_3_symbol','+','2023-12-09 08:43:27',NULL),(53,'counter_card_4_text_1','Networking Events','2023-12-09 08:43:27',NULL),(54,'counter_card_4_text_2','80','2023-12-09 08:43:27','2024-05-02 15:20:36'),(55,'tile_2_heading','In-Depth Insights (Dossier)','2023-12-09 08:43:27',NULL),(56,'tile_2_description','Empowering investments with detailed dossiers, ensuring strategic and informed decisions.','2023-12-09 08:43:27',NULL),(57,'tile_2_right_side_text_1','Precision Investment Intelligence','2023-12-09 08:43:27',NULL),(58,'tile_2_right_side_text_2','Knowledge, Precision, Power','2023-12-09 08:43:27',NULL),(59,'tile_2_right_side_text_3','Comprehensive startup profiles','2023-12-09 08:43:27',NULL),(60,'tile_2_right_side_text_4','In-depth market analysis','2023-12-09 08:43:27',NULL),(61,'tile_2_right_side_text_5','Tailored investment strategies','2023-12-09 08:43:27',NULL),(62,'tile_2_right_side_text_6','Strategic risk assessment','2023-12-09 08:43:27',NULL),(63,'tile_2_right_side_text_7','Actionable intelligence','2023-12-09 08:43:27',NULL),(64,'tile_2_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(65,'tile_1_right_side_button_link','#','2023-12-09 08:43:27',NULL),(66,'tile_3_heading','Platform for Weekly Updates','2023-12-09 08:43:27',NULL),(67,'tile_3_description','Thriving through real-time trends, weekly highlights shaping investment landscapes dynamically.','2023-12-09 08:43:27',NULL),(68,'tile_3_right_side_text_1','Dynamic Investment Highlights','2023-12-09 08:43:27',NULL),(69,'tile_3_right_side_text_2','Stay Informed, Thrive','2023-12-09 08:43:27',NULL),(70,'tile_3_right_side_text_3','Real-time market trends','2023-12-09 08:43:27',NULL),(71,'tile_3_right_side_text_4','Weekly investment highlights','2023-12-09 08:43:27',NULL),(72,'tile_3_right_side_text_5','Startup success stories','2023-12-09 08:43:27',NULL),(73,'tile_3_right_side_text_6','Industry breakthroughs','2023-12-09 08:43:27',NULL),(74,'tile_3_right_side_text_7','Timely investment insights','2023-12-09 08:43:27',NULL),(75,'tile_3_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(76,'tile_3_right_side_button_link','#','2023-12-09 08:43:27',NULL),(77,'tile_4_heading','Community Access','2023-12-09 08:43:27',NULL),(78,'tile_4_description','Connect, collaborate, catalyze change—exclusive network access unlocking collective innovation potential.','2023-12-09 08:43:27',NULL),(79,'tile_4_right_side_text_1','Synergy Hub','2023-12-09 08:43:27',NULL),(80,'tile_4_right_side_text_2','Connect. Collaborate. Catalyze.','2023-12-09 08:43:27',NULL),(81,'tile_4_right_side_text_3','Exclusive networking events','2023-12-09 08:43:27',NULL),(82,'tile_4_right_side_text_4','Mentorship opportunities','2023-12-09 08:43:27',NULL),(83,'tile_4_right_side_text_5','Collaborative forums','2023-12-09 08:43:27',NULL),(84,'tile_4_right_side_text_6','Industry thought leadership','2023-12-09 08:43:27',NULL),(85,'tile_4_right_side_text_7','Collective innovation spirit','2023-12-09 08:43:27',NULL),(86,'tile_4_right_side_button_text','Read More','2023-12-09 08:43:27',NULL),(87,'tile_4_right_side_button_link','#','2023-12-09 08:43:27',NULL),(88,'tile_1_right_side_paragraph','Tile 1 right side paragraph','2024-04-06 13:45:33','2024-04-06 19:49:48'),(89,'tile_1_right_side_small_heading','Tile 1 right side small heading','2024-04-06 13:45:36','2024-04-06 19:49:48'),(90,'tile_2_right_side_paragraph','Tile 2 right side paragraph','2024-04-06 13:45:40','2024-04-06 19:49:48'),(91,'tile_2_right_side_small_heading','Tile 2 right side small heading','2024-04-06 13:45:43','2024-04-06 19:49:48'),(92,'tile_3_right_side_paragraph','Tile 3 right side paragraph','2024-04-06 13:45:47','2024-04-06 19:49:48'),(93,'tile_3_right_side_small_heading','Tile 3 right side small heading','2024-04-06 13:45:50','2024-04-06 19:49:48'),(94,'tile_4_right_side_paragraph','Tile 4 right side paragraph','2024-04-06 13:45:54','2024-04-06 19:49:48'),(95,'tile_4_right_side_small_heading','Tile 4 right side small heading','2024-04-06 13:45:57','2024-04-06 19:49:48');
/*!40000 ALTER TABLE `startups_page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taggables`
--

DROP TABLE IF EXISTS `taggables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taggables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` bigint unsigned NOT NULL,
  `taggable_id` bigint unsigned NOT NULL,
  `taggable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taggables`
--

LOCK TABLES `taggables` WRITE;
/*!40000 ALTER TABLE `taggables` DISABLE KEYS */;
INSERT INTO `taggables` VALUES (1,1,1,'Modules\\Article\\Models\\Post'),(2,2,1,'Modules\\Article\\Models\\Post'),(3,3,1,'Modules\\Article\\Models\\Post');
/*!40000 ALTER TABLE `taggables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `meta_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Startup','startup',NULL,NULL,NULL,1,'Startup','A CMS like modular starter application project built with latest Laravel.','Web Application, web app, Laravel, Laravel starter, Bootstrap, Admin, Template, Open Source, nasir khan saikat, nasirkhansaikat',2,2,NULL,'2023-11-22 07:28:25','2023-11-22 07:28:25',NULL),(2,'Leadership','leadership',NULL,NULL,NULL,1,'Leadership','A CMS like modular starter application project built with latest Laravel.','Web Application, web app, Laravel, Laravel starter, Bootstrap, Admin, Template, Open Source, nasir khan saikat, nasirkhansaikat',2,2,NULL,'2023-11-22 07:28:36','2023-11-22 07:28:36',NULL),(3,'Funding','funding',NULL,NULL,NULL,1,'Funding','A CMS like modular starter application project built with latest Laravel.','Web Application, web app, Laravel, Laravel starter, Bootstrap, Admin, Template, Open Source, nasir khan saikat, nasirkhansaikat',2,2,NULL,'2023-11-22 07:28:51','2023-11-22 07:28:51',NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_providers`
--

DROP TABLE IF EXISTS `user_providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_providers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_providers_user_id_foreign` (`user_id`),
  CONSTRAINT `user_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_providers`
--

LOCK TABLES `user_providers` WRITE;
/*!40000 ALTER TABLE `user_providers` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userprofiles`
--

DROP TABLE IF EXISTS `userprofiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userprofiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_website` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_metadata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_ip` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_count` int NOT NULL DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userprofiles`
--

LOCK TABLES `userprofiles` WRITE;
/*!40000 ALTER TABLE `userprofiles` DISABLE KEYS */;
INSERT INTO `userprofiles` VALUES (1,1,'Super Admin','Super','Admin','100001','super@admin.com','760.984.3534','Male',NULL,NULL,NULL,NULL,NULL,'2018-12-05',NULL,NULL,'img/default-avatar.jpg',NULL,'::1',7,'2023-11-11 15:02:04',NULL,1,NULL,1,NULL,'2023-10-22 07:20:05','2023-11-11 15:02:04',NULL),(2,2,'Admin Istrator','Admin','Istrator','100002','admin@admin.com','678-600-8221','Other',NULL,NULL,NULL,NULL,NULL,'2013-08-14',NULL,NULL,'img/default-avatar.jpg',NULL,'49.37.171.7',59,'2024-05-08 13:35:34',NULL,1,NULL,2,NULL,'2023-10-22 07:20:05','2024-05-08 13:35:34',NULL),(3,3,'Manager','Manager','User User','100003','manager@manager.com','(283) 618-3697','Other',NULL,NULL,NULL,NULL,NULL,'1996-04-14',NULL,NULL,'img/default-avatar.jpg',NULL,NULL,0,NULL,NULL,1,NULL,NULL,NULL,'2023-10-22 07:20:05','2023-10-22 07:20:05',NULL),(4,4,'Executive User','Executive','User','100004','executive@executive.com','+1 (534) 768-2162','Male',NULL,NULL,NULL,NULL,NULL,'2019-04-05',NULL,NULL,'img/default-avatar.jpg',NULL,NULL,0,NULL,NULL,1,NULL,NULL,NULL,'2023-10-22 07:20:05','2023-10-22 07:20:05',NULL),(5,5,'General User','General','User','100005','user@user.com','+1.803.471.4156','Female',NULL,NULL,NULL,NULL,NULL,'1998-05-06',NULL,NULL,'img/default-avatar.jpg',NULL,NULL,0,NULL,NULL,1,NULL,NULL,NULL,'2023-10-22 07:20:06','2023-10-22 07:20:06',NULL);
/*!40000 ALTER TABLE `userprofiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'img/default-avatar.jpg',
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int unsigned DEFAULT NULL,
  `updated_by` int unsigned DEFAULT NULL,
  `deleted_by` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super Admin','Super','Admin','100001','superadmin@bolstart.com','760.984.3534','Male','2018-12-05','2023-10-22 07:20:04','$2a$12$Bs/9RSsHc3NpMUKVSk7AiOary/HQGgtmwXvu5NDnKW9zLvXBKAZiC','img/default-avatar.jpg',1,NULL,NULL,NULL,NULL,'2023-10-22 07:20:04','2023-10-22 07:20:04',NULL),(2,'Admin Istrator','Admin','Istrator','100002','admin@bolstart.com','678-600-8221','Other','2013-08-14','2023-10-22 07:20:04','$2a$12$Bs/9RSsHc3NpMUKVSk7AiOary/HQGgtmwXvu5NDnKW9zLvXBKAZiC','img/default-avatar.jpg',1,NULL,NULL,NULL,NULL,'2023-10-22 07:20:04','2023-10-22 07:20:04',NULL),(3,'Manager','Manager','User User','100003','manager@bolstart.com','(283) 618-3697','Other','1996-04-14','2023-10-22 07:20:04','$2a$12$Bs/9RSsHc3NpMUKVSk7AiOary/HQGgtmwXvu5NDnKW9zLvXBKAZiC','img/default-avatar.jpg',1,NULL,NULL,NULL,NULL,'2023-10-22 07:20:04','2023-10-22 07:20:04',NULL),(4,'Executive User','Executive','User','100004','executive@bolstart.com','+1 (534) 768-2162','Male','2019-04-05','2023-10-22 07:20:04','$2a$12$Bs/9RSsHc3NpMUKVSk7AiOary/HQGgtmwXvu5NDnKW9zLvXBKAZiC','img/default-avatar.jpg',1,NULL,NULL,NULL,NULL,'2023-10-22 07:20:04','2023-10-22 07:20:04',NULL),(5,'General User','General','User','100005','user@bolstart.com','+1.803.471.4156','Female','1998-05-06','2023-10-22 07:20:04','$2a$12$Bs/9RSsHc3NpMUKVSk7AiOary/HQGgtmwXvu5NDnKW9zLvXBKAZiC','img/default-avatar.jpg',1,NULL,NULL,NULL,NULL,'2023-10-22 07:20:04','2023-10-22 07:20:04',NULL);
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

-- Dump completed on 2024-05-09  3:55:42
