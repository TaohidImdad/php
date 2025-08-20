-- import to SQLite by running: sqlite3.exe db.sqlite3 -init sqlite.sql

PRAGMA journal_mode = MEMORY;
PRAGMA synchronous = OFF;
PRAGMA foreign_keys = OFF;
PRAGMA ignore_check_constraints = OFF;
PRAGMA auto_vacuum = NONE;
PRAGMA secure_delete = OFF;
BEGIN TRANSACTION;

DROP TABLE IF EXISTS `core_applications`;

CREATE TABLE `core_applications` (
`id` int NOT NULL ,
`first_name` TEXT   NOT NULL,
`last_name` TEXT   NOT NULL,
`email` TEXT   NOT NULL,
`phone` TEXT   NOT NULL,
`address` text   NOT NULL,
`gender` TEXT    NOT NULL,
`passport_no` TEXT   NOT NULL,
`issue_date` date NOT NULL,
`expire_date` date NOT NULL,
`country_id` int NOT NULL,
`visa_type_id` int NOT NULL,
`job_position` TEXT   NOT NULL,
`agent_reference` TEXT   DEFAULT NULL,
`submitted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_applications` WRITE;
INSERT INTO `core_applications` VALUES (1,'Abdullah','Noman','noman.jnu1@gmail.com','01774673324','Dhaka','Male','12432546','2024-07-31','2024-08-22',2,2,'etrwe','twerer','2024-08-01 12:01:19'),(2,'Abdullah','Noman','noman.jnu1@gmail.com','01774673324','Dhaka','Male','12432546','2024-08-08','2024-08-12',1,2,'etrwe','asad','2024-08-10 14:26:48');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_booking_details`;

CREATE TABLE `core_booking_details` (
`id` int  NOT NULL ,
`booking_id` int  NOT NULL,
`room_id` int  NOT NULL,
`from_date` date NOT NULL,
`to_date` date NOT NULL,
`price` float NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_booking_details` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_bookings`;

CREATE TABLE `core_bookings` (
`id` int  NOT NULL ,
`created_at` datetime NOT NULL,
`order_total` float NOT NULL,
`paid_total` float NOT NULL,
`remark` text  
`customer_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_bookings` WRITE;
INSERT INTO `core_bookings` VALUES (1,'2024-05-22 00:00:00',1000,1000,'Test',7),(2,'2024-05-24 00:00:00',700,700,'Test Update Api',3),(3,'2024-05-25 00:00:00',3544,3544,'Test',2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_cattle_categories`;

CREATE TABLE `core_cattle_categories` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_cattle_categories` WRITE;
INSERT INTO `core_cattle_categories` VALUES (1,'Cow'),(2,'Goat');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_cattles`;

CREATE TABLE `core_cattles` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`region` TEXT   NOT NULL,
`dob` date NOT NULL,
`color` TEXT   NOT NULL,
`description` text  
`photo` TEXT   DEFAULT NULL,
`gender` tinyint  DEFAULT NULL,
`cattle_category_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_cattles` WRITE;
INSERT INTO `core_cattles` VALUES (2,'Black and White','Indian','2021-05-07','White','','2.webp',1,2),(3,'BlackCow','Indian','2021-05-07','Black','','3.jpeg',1,1),(19,'Goat 25','Deshi','2024-05-01','Red','','19.png',0,1),(24,'Goat 25','Deshi','2021-05-07','Red','Test','1-925-webp.webp',1,2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_contact_categories`;

CREATE TABLE `core_contact_categories` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_contact_categories` WRITE;
INSERT INTO `core_contact_categories` VALUES (1,'Family'),(2,'Relative'),(3,'Friend'),(4,'Student');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_contacts`;

CREATE TABLE `core_contacts` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`contact_category_id` int  NOT NULL,
`contact_no` TEXT NOT NULL,
`email` TEXT DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_contacts` WRITE;
INSERT INTO `core_contacts` VALUES (1,'Mehedi',4,'01797993131','mehedihasandb0@gmail.com'),(2,'Jahid',1,'3423423','jahid1@yahoo.com');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_countries`;

CREATE TABLE `core_countries` (
`id` int NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_countries` WRITE;
INSERT INTO `core_countries` VALUES (1,'Bangladesh'),(2,'India'),(3,'Pakistan'),(4,'Pakistan');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_customers`;

CREATE TABLE `core_customers` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`mobile` TEXT NOT NULL,
`email` TEXT NOT NULL,
`created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
`address` text,
`photo` TEXT DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_customers` WRITE;
INSERT INTO `core_customers` VALUES (1,'Jahidul Islam','45345435435','jahid@yahoo.com','2023-12-05 10:05:22','2023-12-05 10:05:22','','1.png'),(2,'Rejaul Karim','4353445546','Reza@yahoo.com','2023-12-05 10:27:02','2023-12-05 10:27:02','','2.jpg'),(3,'Niyamot','3434343','niyamot@yahoo.com','2023-12-05 10:27:19','2023-12-05 10:27:19','','3.png'),(4,'Kamrul','23432432423','kamrul@gmail.com','2023-12-05 10:43:37','2023-12-05 10:43:37','','4.png'),(5,'Silvia','34324232','silvia@gmail.com','2023-12-05 10:43:49','2023-12-05 10:43:49','','5.jpg'),(6,'Jahidul Islam','34324324','mehedihasandb0@gmail.com','2023-12-05 10:28:16','2023-12-05 10:28:16','333','beetroot-hummus-23bae4e-jpg.jpg'),(7,'Jahidul2','34324324','mehedihasandb0@gmail.com','2023-12-05 10:43:59','2023-12-05 10:43:59','343','7.jpg'),(8,'Mehedi3','34324324','mehedihasandb0@gmail.com','2023-12-05 10:31:09','2023-12-05 10:31:09','','34324324.jpg'),(9,'Sabbir Ahmed','34343434','sabbir3@gmail.com','2023-12-30 09:30:13','2023-12-30 09:30:13','NA',NULL),(10,'Abdur Rahman','35443434','abrahman@gmail.com','2023-12-30 09:32:00','2023-12-30 09:32:00','Rampua',NULL),(11,'Mahedi Hassan','9433442','mahedi@gmail.com','2023-12-30 09:54:37','2023-12-30 09:54:37','NA',NULL),(12,'Mahedi Hassanere','9433442sfds','mah3edi@gmail.com','2023-12-30 09:59:14','2023-12-30 09:59:14','NA',NULL),(13,'Abdur Rahim','3434324','abdur_rahim@gmail.com','2024-05-26 17:05:15','2024-05-26 17:05:15','Test','images-jpg.jpg'),(15,'Noman','01774673324','noman.jnu1@gmail.com','2024-07-06 13:15:17','2024-07-06 13:15:17',NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_departments`;

CREATE TABLE `core_departments` (
`id` int  NOT NULL ,
`code` TEXT NOT NULL,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_departments` WRITE;
INSERT INTO `core_departments` VALUES (1,'10','Accounts'),(2,'20','IT'),(3,'30','HR'),(4,'40','Sales and Marketing');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_district`;

CREATE TABLE `core_district` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`division_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_district` WRITE;
INSERT INTO `core_district` VALUES (1,'Narayangang',1),(2,'Nonakhali',3),(3,'Feni',3),(4,'Tingile',1),(5,'Gajipur',1),(6,'Potuakhali',2),(7,'Dhaka',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_districts`;

CREATE TABLE `core_districts` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`division_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_districts` WRITE;
INSERT INTO `core_districts` VALUES (1,'Narayangang',1),(2,'Nonakhali',3),(3,'Feni',3),(4,'Tingile',1),(5,'Gajipur',1),(6,'Potuakhali',2),(7,'Dhaka',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_division`;

CREATE TABLE `core_division` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_division` WRITE;
INSERT INTO `core_division` VALUES (1,'Dhaka'),(2,'Borishal'),(3,'Chottrogram');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_divisions`;

CREATE TABLE `core_divisions` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_divisions` WRITE;
INSERT INTO `core_divisions` VALUES (1,'Dhaka'),(2,'Borishal'),(3,'Chottrogram');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_failed_jobs`;

CREATE TABLE `core_failed_jobs` (
`id` bigint  NOT NULL ,
`uuid` TEXT   NOT NULL,
`connection` text   NOT NULL,
`queue` text   NOT NULL,
`payload` TEXT   NOT NULL,
`exception` TEXT   NOT NULL,
`failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_failed_jobs` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_consultants`;

CREATE TABLE `core_hms_consultants` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`hms_department_id` int  NOT NULL,
`designation` text,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_consultants` WRITE;
INSERT INTO `core_hms_consultants` VALUES (1,'Dr. Moshaidul Islam',1,'MBBS');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_departments`;

CREATE TABLE `core_hms_departments` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_departments` WRITE;
INSERT INTO `core_hms_departments` VALUES (1,'Medicine');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_medicine_categories`;

CREATE TABLE `core_hms_medicine_categories` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_medicine_categories` WRITE;
INSERT INTO `core_hms_medicine_categories` VALUES (1,'Antibiotic'),(2,'Vitamin'),(3,'Painkiller'),(4,'Antacids');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_medicine_types`;

CREATE TABLE `core_hms_medicine_types` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_medicine_types` WRITE;
INSERT INTO `core_hms_medicine_types` VALUES (1,'Tab'),(2,'Inj'),(3,'Syr'),(4,'Cap');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_medicines`;

CREATE TABLE `core_hms_medicines` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`hms_medicine_category_id` int  NOT NULL,
`hms_medicine_type_id` int  NOT NULL,
`generic_name` TEXT NOT NULL,
`description` text,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_medicines` WRITE;
INSERT INTO `core_hms_medicines` VALUES (1,'Napa 500mg',4,1,'Paracitamal','Na'),(2,'Seclo 20mg',3,4,'Antacid','Na');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_patients`;

CREATE TABLE `core_hms_patients` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`mobile` TEXT NOT NULL,
`dob` date NOT NULL,
`mob_ext` int  NOT NULL,
`gender` tinyint  NOT NULL,
`profession` TEXT DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_patients` WRITE;
INSERT INTO `core_hms_patients` VALUES (1,'Jahidul Islam','038403423','2000-01-01',1,0,'student'),(2,'Jamuna','034343345','2023-01-02',1,1,'na');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_prescription_details`;

CREATE TABLE `core_hms_prescription_details` (
`id` int  NOT NULL ,
`prescription_id` int  NOT NULL,
`medicine_id` int  NOT NULL,
`dose` TEXT NOT NULL,
`days` double NOT NULL,
`suggestion` text NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_prescription_details` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_hms_prescriptions`;

CREATE TABLE `core_hms_prescriptions` (
`id` int  NOT NULL ,
`patient_id` int  NOT NULL,
`consultant_id` int  NOT NULL,
`cc` text NOT NULL,
`rf` text NOT NULL,
`investigation` text NOT NULL,
`advice` text NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_hms_prescriptions` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_manufacturers`;

CREATE TABLE `core_manufacturers` (
`id` int NOT NULL ,
`name` TEXT DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_manufacturers` WRITE;
INSERT INTO `core_manufacturers` VALUES (1,'APCL'),(2,'ISL'),(3,'IDB');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_mfg_bom_details`;

CREATE TABLE `core_mfg_bom_details` (
`id` int  NOT NULL ,
`bom_id` int  NOT NULL,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`cost` float NOT NULL,
`uom_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_mfg_bom_details` WRITE;
INSERT INTO `core_mfg_bom_details` VALUES (1,1,400,200,100,1),(2,1,401,100,10,2),(3,1,402,10,50,3),(4,3,49,13,30,1),(5,3,17,14,2500,1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_mfg_bom_secondary_products`;

CREATE TABLE `core_mfg_bom_secondary_products` (
`id` int  NOT NULL ,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`price` float NOT NULL,
`uom` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_mfg_bom_secondary_products` WRITE;
INSERT INTO `core_mfg_bom_secondary_products` VALUES (1,500,5,400,5);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_mfg_boms`;

CREATE TABLE `core_mfg_boms` (
`id` int  NOT NULL ,
`code` TEXT NOT NULL,
`name` TEXT NOT NULL,
`product_id` int  NOT NULL,
`qty` TEXT NOT NULL,
`labour_cost` float NOT NULL,
`date` datetime DEFAULT NULL,
`remark` text,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_mfg_boms` WRITE;
INSERT INTO `core_mfg_boms` VALUES (1,'100','T-Shirt',1,'100',2000,NULL,NULL),(2,'343','BM-3',47,'3',45,NULL,NULL),(3,'3532','BM93',47,'34',432,NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_mfg_production_details`;

CREATE TABLE `core_mfg_production_details` (
`id` int  NOT NULL ,
`production_id` int  NOT NULL,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`uom_id` int  NOT NULL,
`cost` float NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_mfg_production_details` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_mfg_productions`;

CREATE TABLE `core_mfg_productions` (
`id` int  NOT NULL ,
`production_datetime` datetime NOT NULL,
`bom_id` int  NOT NULL,
`qty` float NOT NULL,
`labor_cost` float NOT NULL,
`manager_id` int  NOT NULL,
`total_cost` float NOT NULL,
`product_id` int  NOT NULL,
`uom_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_mfg_productions` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_migrations`;

CREATE TABLE `core_migrations` (
`id` int  NOT NULL ,
`migration` TEXT   NOT NULL,
`batch` int NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_migrations` WRITE;
INSERT INTO `core_migrations` VALUES (6,'2014_10_12_000000_create_users_table',1),(7,'2014_10_12_100000_create_password_reset_tokens_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2019_12_14_000001_create_personal_access_tokens_table',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_money_receipt_details`;

CREATE TABLE `core_money_receipt_details` (
`id` int  NOT NULL ,
`money_receipt_id` int  NOT NULL,
`product_id` int  NOT NULL,
`price` double NOT NULL,
`qty` double NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_money_receipt_details` WRITE;
INSERT INTO `core_money_receipt_details` VALUES (1,1,36,100,1),(2,7,0,2500,2),(3,7,0,180,1),(4,7,0,999,1),(5,8,36,2500,1),(6,25,0,180,2),(7,25,0,999,1),(8,26,46,180,2),(9,26,47,999,1),(10,27,46,180,2),(11,27,47,999,1),(12,28,46,180,2),(13,28,47,999,1),(14,29,46,180,2),(15,29,47,999,1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_money_receipts`;

CREATE TABLE `core_money_receipts` (
`id` int  NOT NULL ,
`created_at` datetime NOT NULL,
`updated_at` datetime NOT NULL,
`customer_id` int  NOT NULL,
`remark` text,
`receipt_total` double DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_money_receipts` WRITE;
INSERT INTO `core_money_receipts` VALUES (1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'Na',100),(2,'2023-12-27 13:57:23','2023-12-27 13:57:23',0,'NA',0),(3,'2023-12-27 13:59:35','2023-12-27 13:59:35',0,'NA',0),(4,'2023-12-27 14:00:07','2023-12-27 14:00:07',0,'NA',0),(5,'2023-12-27 14:00:27','2023-12-27 14:00:27',0,'NA',0),(6,'2023-12-27 14:02:47','2023-12-27 14:02:47',2,'',3673.95),(7,'2023-12-27 14:04:33','2023-12-27 14:04:33',3,'',6487.95),(8,'2023-12-27 14:06:11','2023-12-27 14:06:11',1,'',2625),(9,'2023-12-28 09:59:35','2023-12-28 09:59:35',0,'NA',0),(10,'2023-12-28 10:00:38','2023-12-28 10:00:38',1,'NA',200),(11,'2023-12-28 10:03:17','2023-12-28 10:03:17',0,'NA',0),(12,'2023-12-28 10:14:49','2023-12-28 10:14:49',0,'NA',0),(13,'2023-12-28 10:15:57','2023-12-28 10:15:57',0,'NA',0),(14,'2023-12-28 10:21:16','2023-12-28 10:21:16',0,'NA',0),(15,'2023-12-28 10:22:41','2023-12-28 10:22:41',0,'NA',0),(16,'2023-12-28 10:25:03','2023-12-28 10:25:03',0,'NA',0),(17,'2023-12-28 10:26:13','2023-12-28 10:26:13',0,'NA',0),(18,'2023-12-28 10:26:23','2023-12-28 10:26:23',0,'NA',0),(19,'2023-12-28 10:26:34','2023-12-28 10:26:34',0,'NA',0),(20,'2023-12-28 10:31:35','2023-12-28 10:31:35',1,'Test',200),(21,'2023-12-28 10:34:39','2023-12-28 10:34:39',1,'NA',200),(22,'2023-12-28 10:34:48','2023-12-28 10:34:48',1,'NA',200),(23,'2024-01-03 12:50:54','2024-01-03 12:50:54',0,'',12304.95),(24,'2024-01-03 12:53:38','2024-01-03 12:53:38',0,'',1426.95),(25,'2024-01-03 12:57:41','2024-01-03 12:57:41',0,'',1426.95),(26,'2024-01-03 13:01:07','2024-01-03 13:01:07',0,'',1426.95),(27,'2024-01-03 13:04:23','2024-01-03 13:04:23',1,'',1426.95),(28,'2024-01-03 13:07:18','2024-01-03 13:07:18',1,'',1426.95),(29,'2024-01-03 13:09:58','2024-01-03 13:09:58',1,'',1426.95);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_order_details`;

CREATE TABLE `core_order_details` (
`id` int  NOT NULL ,
`order_id` int  NOT NULL,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`price` float NOT NULL,
`vat` float NOT NULL DEFAULT '0',
`discount` float NOT NULL DEFAULT '0',
`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_order_details` WRITE;
INSERT INTO `core_order_details` VALUES (1,1,17,1,16,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(2,1,18,1,40,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(3,2,18,4,40,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(4,2,17,2,16,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(5,3,17,2,16,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(6,3,18,1,40,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(7,4,17,1,16,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(8,4,18,1,40,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(9,5,17,1,16,0,0,'2021-12-14 06:45:23','2021-12-14 06:45:23'),(10,14,18,1,30,0,0,'2021-12-14 01:14:27','2021-12-14 01:14:27'),(11,14,17,1,15,0,0,'2021-12-14 01:14:27','2021-12-14 01:14:27'),(12,15,18,1,40,0,0,'2021-12-15 12:48:59','2021-12-15 12:48:59'),(13,15,17,2,16,0,0,'2021-12-15 12:48:59','2021-12-15 12:48:59'),(14,16,28,1,5000,0,0,'2022-01-06 06:39:11','2022-01-06 06:39:11'),(15,16,29,1,342,0,0,'2022-01-06 06:39:11','2022-01-06 06:39:11'),(16,17,29,1,342,0,0,'2022-01-06 06:43:37','2022-01-06 06:43:37'),(17,17,28,1,5000,0,0,'2022-01-06 06:43:37','2022-01-06 06:43:37'),(18,17,20,1,110,0,0,'2022-01-06 06:43:37','2022-01-06 06:43:37'),(19,18,28,10,5000,0,0,'2022-01-06 09:14:42','2022-01-06 09:14:42'),(20,19,30,1,7999,0,0,'2022-01-08 03:05:54','2022-01-08 03:05:54'),(21,19,31,1,4444,0,0,'2022-01-08 03:05:54','2022-01-08 03:05:54'),(22,19,20,1,110,0,0,'2022-01-08 03:05:55','2022-01-08 03:05:55'),(23,20,29,1,342,0,0,'2022-01-08 03:06:58','2022-01-08 03:06:58'),(24,20,20,1,110,0,0,'2022-01-08 03:06:58','2022-01-08 03:06:58'),(25,20,30,1,7999,0,0,'2022-01-08 03:06:58','2022-01-08 03:06:58'),(26,20,32,1,5555,0,0,'2022-01-08 03:06:58','2022-01-08 03:06:58'),(27,21,29,1,342,0,0,'2022-01-08 03:07:27','2022-01-08 03:07:27'),(28,21,28,1,5000,0,0,'2022-01-08 03:07:27','2022-01-08 03:07:27'),(29,21,31,1,4444,0,0,'2022-01-08 03:07:27','2022-01-08 03:07:27'),(30,21,32,2,5555,0,0,'2022-01-08 03:07:27','2022-01-08 03:07:27'),(31,21,30,1,7999,0,0,'2022-01-08 03:07:27','2022-01-08 03:07:27'),(32,21,20,1,110,0,0,'2022-01-08 03:07:28','2022-01-08 03:07:28');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_orders`;

CREATE TABLE `core_orders` (
`id` int  NOT NULL ,
`customer_id` int  NOT NULL,
`order_date` datetime NOT NULL,
`delivery_date` datetime NOT NULL,
`shipping_address` text,
`order_total` double NOT NULL DEFAULT '0',
`paid_amount` double NOT NULL DEFAULT '0',
`remark` text,
`status_id` int  DEFAULT '1',
`discount` float DEFAULT '0',
`vat` float DEFAULT '0',
`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_orders` WRITE;
INSERT INTO `core_orders` VALUES (2,1,'2021-12-13 00:00:00','2021-12-13 00:00:00','na',0,0,'Na',1,0,0,'2021-12-14 06:40:41','2021-12-14 06:40:41'),(3,1,'2021-12-13 00:00:00','2021-12-13 00:00:00','na',0,0,'Na',1,0,0,'2021-12-14 06:40:41','2021-12-14 06:40:41'),(4,2,'2021-12-13 00:00:00','2021-12-13 00:00:00','na',0,0,'Na',1,0,0,'2021-12-14 06:40:41','2021-12-14 06:40:41'),(5,1,'2021-12-13 00:00:00','2021-12-13 00:00:00','na',0,0,'Na',1,0,0,'2021-12-14 06:40:41','2021-12-14 06:40:41'),(6,1,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,'',2,0,0,'2023-12-05 11:54:41','2023-12-05 11:54:41'),(7,3,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,NULL,NULL,'2021-12-14 01:02:07','2021-12-14 01:02:07'),(8,2,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:03:51','2021-12-14 01:03:51'),(9,1,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:05:32','2021-12-14 01:05:32'),(10,1,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:06:21','2021-12-14 01:06:21'),(11,3,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:07:13','2021-12-14 01:07:13'),(12,2,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:10:25','2021-12-14 01:10:25'),(13,1,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:13:06','2021-12-14 01:13:06'),(14,1,'2021-12-14 00:00:00','2021-12-14 00:00:00','Mirpur',0,0,NULL,1,0,0,'2021-12-14 01:14:27','2021-12-14 01:14:27'),(15,3,'2021-12-15 00:00:00','2021-12-15 00:00:00','Rampura',0,0,'Testing',1,0,0,'2021-12-15 12:48:59','2021-12-15 12:48:59'),(16,1,'2022-01-06 00:00:00','2022-01-06 00:00:00','Rampura',0,0,'NA',1,0,0,'2022-01-06 06:39:11','2022-01-06 06:39:11'),(17,1,'2022-01-06 00:00:00','2022-01-06 00:00:00','Rampura',0,0,'NA',1,0,0,'2022-01-06 06:43:37','2022-01-06 06:43:37'),(18,1,'2022-01-06 00:00:00','2022-01-06 00:00:00','Rampura',0,0,'NA',1,0,0,'2022-01-06 09:14:42','2022-01-06 09:14:42'),(19,1,'2022-01-08 00:00:00','2022-01-08 00:00:00','Rampura',0,0,'NA',1,0,0,'2022-01-08 03:05:54','2022-01-08 03:05:54'),(20,1,'2022-01-08 00:00:00','2022-01-08 00:00:00','Rampura',0,0,'NA',3,0,0,'2023-12-05 12:07:44','2023-12-05 12:07:44'),(21,1,'2022-01-08 00:00:00','2022-01-08 00:00:00','Rampura',0,0,'NA',4,0,0,'2023-12-05 12:06:48','2023-12-05 12:06:48'),(22,8,'2023-12-24 00:00:00','2023-12-24 00:00:00','Mohammadpur',1636.95,0,'',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,1,'2023-12-27 00:00:00','2023-12-27 00:00:00','Rampura, Banasree',1426.95,0,'Na',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,4,'2024-01-03 00:00:00','2024-01-03 00:00:00','Dhanmondi, Dhaka',12304.95,0,'Test',1,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_password_reset_tokens`;

CREATE TABLE `core_password_reset_tokens` (
`email` TEXT   NOT NULL,
`token` TEXT   NOT NULL,
`created_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`email`)
);
LOCK TABLES `core_password_reset_tokens` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_password_resets`;

CREATE TABLE `core_password_resets` (
`email` TEXT   NOT NULL,
`token` TEXT   NOT NULL,
`created_at` timestamp NULL DEFAULT NULL
);
LOCK TABLES `core_password_resets` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_personal_access_tokens`;

CREATE TABLE `core_personal_access_tokens` (
`id` bigint  NOT NULL ,
`tokenable_type` TEXT   NOT NULL,
`tokenable_id` bigint  NOT NULL,
`name` TEXT   NOT NULL,
`token` TEXT   NOT NULL,
`abilities` text  
`last_used_at` timestamp NULL DEFAULT NULL,
`expires_at` timestamp NULL DEFAULT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`updated_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_personal_access_tokens` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_persons`;

CREATE TABLE `core_persons` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`position_id` int  NOT NULL,
`sex` tinyINTEGER NOT NULL,
`dob` date NOT NULL,
`doj` date NOT NULL,
`mobile` TEXT NOT NULL,
`address` TEXT DEFAULT NULL,
`inactive` tinyINTEGER DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_persons` WRITE;
INSERT INTO `core_persons` VALUES (1,'Jahidul Islam',1,0,'2000-01-01','2021-01-01','677657657567','Rampura',0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_positions`;

CREATE TABLE `core_positions` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`grade` int  NOT NULL,
`department_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_positions` WRITE;
INSERT INTO `core_positions` VALUES (1,'Programmer',6,2),(2,'System Analyst',3,1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_product_brands`;

CREATE TABLE `core_product_brands` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_product_brands` WRITE;
INSERT INTO `core_product_brands` VALUES (1,'RFL'),(2,'Bengal');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_product_categories`;

CREATE TABLE `core_product_categories` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`section_id` int  NOT NULL,
`created_at` timestamp NOT NULL ,
`updated_at` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_product_categories` WRITE;
INSERT INTO `core_product_categories` VALUES (2,'Vegetables',3,'2022-01-11 06:46:24',NULL),(3,'Fish',3,'2022-01-11 06:46:24',NULL),(4,'Drugs',3,'2022-01-11 06:46:24',NULL),(5,'Cameras',1,'2022-01-11 06:46:24',NULL),(6,'Computers, Tablets & Laptops',1,'2022-01-11 06:46:24',NULL),(7,'Mobile Phone',1,'2022-01-11 06:46:24',NULL),(8,'Sound & Vision',1,'2022-01-11 06:46:24',NULL),(9,'Women''s',2,'2022-01-11 06:46:24',NULL),(10,'Men''s',2,'2022-01-11 06:46:24',NULL),(11,'Kids',2,'2022-01-11 06:46:24',NULL),(12,'Cosmatics',4,'2022-01-11 06:46:24',NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_product_sections`;

CREATE TABLE `core_product_sections` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`unit_id` int  DEFAULT NULL,
`photo` TEXT   DEFAULT NULL,
`icon` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_product_sections` WRITE;
INSERT INTO `core_product_sections` VALUES (1,'Section1',1,NULL,NULL),(2,'Section2',1,NULL,NULL),(3,'Section3',1,NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_product_units`;

CREATE TABLE `core_product_units` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`photo` TEXT   DEFAULT NULL,
`icon` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_product_units` WRITE;
INSERT INTO `core_product_units` VALUES (1,'Electronics',NULL,NULL),(2,'Grocery',NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_products`;

CREATE TABLE `core_products` (
`id` int NOT NULL ,
`name` TEXT NOT NULL,
`offer_price` double DEFAULT NULL,
`manufacturer_id` int NOT NULL,
`regular_price` double NOT NULL,
`description` text,
`photo` TEXT DEFAULT NULL,
`product_category_id` int  NOT NULL,
`product_section_id` int  NOT NULL,
`is_featured` tinyINTEGER DEFAULT '0',
`star` int  DEFAULT NULL,
`is_brand` tinyINTEGER DEFAULT '0',
`offer_discount` float DEFAULT '0',
`uom_id` int  NOT NULL,
`weight` float DEFAULT NULL,
`barcode` TEXT NOT NULL,
`created_at` datetime DEFAULT CURRENT_TIMESTAMP,
`updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
`product_type_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_products` WRITE;
INSERT INTO `core_products` VALUES (17,'Brown Borka',2500,1,3000,'','36.jpg',2,1,1,0,1,0,1,0,'4456342342','0000-00-00 00:00:00','0000-00-00 00:00:00',2),(18,'Eyeliner',180,1,200,'Eyeliner','46.jpg',12,4,NULL,NULL,NULL,NULL,1,NULL,'2222','2022-01-13 06:38:44','2022-01-13 06:38:44',1),(47,'Beef Biriyani',999,3,1000,'Healthy & Hygenic','47.png',4,3,0,0,0,0,3,0,'123abc','2022-02-15 22:36:34','2022-02-15 22:36:34',1),(49,'Chemical MP50',30,2,30,'Chemical','logo-png.png',12,1,0,0,0,0,5,1,'23445','2024-02-01 16:11:52','2024-02-01 16:11:52',2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_purchase_details`;

CREATE TABLE `core_purchase_details` (
`id` int  NOT NULL ,
`purchase_id` int  NOT NULL,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`price` float NOT NULL,
`vat` float NOT NULL DEFAULT '0',
`discount` float NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_purchase_details` WRITE;
INSERT INTO `core_purchase_details` VALUES (1,1,17,50,200,0,0),(2,1,18,30,250,0,0),(3,2,17,20,210,0,0),(4,2,40,70,240,0,0),(5,3,39,10,202,0,0),(6,4,40,30,300,0,0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_purchases`;

CREATE TABLE `core_purchases` (
`id` int  NOT NULL ,
`supplier_id` int  NOT NULL,
`purchase_date` datetime NOT NULL,
`delivery_date` datetime NOT NULL,
`shipping_address` text NOT NULL,
`purchase_total` double NOT NULL,
`paid_amount` double NOT NULL,
`remark` text NOT NULL,
`status_id` int  NOT NULL,
`discount` float NOT NULL DEFAULT '0',
`vat` float NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_purchases` WRITE;
INSERT INTO `core_purchases` VALUES (1,1,'2023-12-24 00:00:00','2023-12-24 00:00:00','Rangpur',18375,0,'Na',1,0,0),(2,2,'2023-12-24 00:00:00','2023-12-24 00:00:00','',22050,0,'',1,0,0),(3,1,'2023-12-24 00:00:00','2023-12-24 00:00:00','',2121,0,'',1,0,0),(4,1,'2023-12-24 00:00:00','2023-12-24 00:00:00','',9450,0,'',1,0,0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_roles`;

CREATE TABLE `core_roles` (
`id` int NOT NULL ,
`name` TEXT NOT NULL,
`updated_at` datetime DEFAULT NULL,
`created_at` timestamp NOT NULL ,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_roles` WRITE;
INSERT INTO `core_roles` VALUES (1,'Admin','2021-12-30 15:10:10','2021-12-30 09:10:19');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_room_types`;

CREATE TABLE `core_room_types` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_room_types` WRITE;
INSERT INTO `core_room_types` VALUES (1,'Single'),(2,'Double');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_rooms`;

CREATE TABLE `core_rooms` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`code` TEXT   NOT NULL,
`room_type_id` int  NOT NULL,
`price` float NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_rooms` WRITE;
INSERT INTO `core_rooms` VALUES (1,'Double South Side 200sft 2nd floor- 322','322',2,2000),(2,'Single 100sft non ac -324','324',1,500);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_sections`;

CREATE TABLE `core_sections` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_sections` WRITE;
INSERT INTO `core_sections` VALUES (1,'Electronices'),(2,'Clothings'),(3,'Food and Beverages'),(4,'Health & Beauty'),(5,'Sports & Leisure'),(6,'Books & Entertainments');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_album_details`;

CREATE TABLE `core_site_album_details` (
`id` int  NOT NULL ,
`site_album_id` int  NOT NULL,
`photo` TEXT   NOT NULL,
`name` TEXT   NOT NULL,
`description` text  
`inactive` tinyint  DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_album_details` WRITE;
INSERT INTO `core_site_album_details` VALUES (2,1,'1548843065.jpg','Intellect Cloud POS','Intellect Enterprise Resource Planning (ERP) is business management&#8230;',0),(3,1,'1548841332.jpg','Education and Training','For many people, gaining new skills through accredited&#8230;',0),(4,2,'1548867137.svg','Food and Beverage',NULL,0),(5,2,'1548867301.svg','Retail Goods',NULL,0),(6,2,'1548867424.svg','Energy, Oil and Gas',NULL,0),(7,2,'1548867363.svg','Chemical Goods',NULL,0),(8,2,'1548867453.svg','Consumer Packaged Goods',NULL,0),(9,3,'15488786820.jpg','Screenshot1',NULL,0),(10,3,'15488786821.jpg','Screenshot2',NULL,0),(11,4,'15488797600.jpg','POS1',NULL,0),(12,4,'15488797601.jpg','POS2',NULL,0),(13,4,'15488797602.jpg','POS3',NULL,0),(14,1,'slider-jpg.jpg','INTELLECT',NULL,0),(15,5,'login.PNG','LOGIN',NULL,0),(16,5,'purchase.PNG','PURCHASE',NULL,0),(17,5,'receipt_and_payments.PNG','Receipt and Payment',NULL,0),(18,5,'dashboard.PNG','Dashboard',NULL,0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_album_types`;

CREATE TABLE `core_site_album_types` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_album_types` WRITE;
INSERT INTO `core_site_album_types` VALUES (1,'Slider'),(2,'Album'),(3,'Screenshot'),(4,'Client');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_albums`;

CREATE TABLE `core_site_albums` (
`id` int  NOT NULL ,
`name` TEXT   DEFAULT NULL,
`created_at` timestamp NULL DEFAULT NULL,
`description` text  
`photo` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_albums` WRITE;
INSERT INTO `core_site_albums` VALUES (1,'Main Slider',NULL,'Na',NULL),(2,'INDUSTRY SECTORS',NULL,'We cover different industry sectors, from food and beverage, chemical, retail, durable goods and more. Check the full list.',NULL),(3,'Screenshot - Home Page',NULL,NULL,NULL),(4,'POS',NULL,NULL,NULL),(6,'Construction',NULL,NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_attributes`;

CREATE TABLE `core_site_attributes` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`description` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_attributes` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_clients`;

CREATE TABLE `core_site_clients` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`photo` TEXT   DEFAULT NULL,
`review` text  
`website` TEXT   DEFAULT NULL,
`sn` int  DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_clients` WRITE;
INSERT INTO `core_site_clients` VALUES (1,'Karnaphuli Group','1548871087-png.png','Na','https://www.karnaphuli.com/',NULL),(2,'Doreen','1548871127-png.png','Na','https://doreen.com/',NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_menu_sub_details`;

CREATE TABLE `core_site_menu_sub_details` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`link` TEXT   NOT NULL,
`site_menu_sub_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_menu_sub_details` WRITE;
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_menu_subs`;

CREATE TABLE `core_site_menu_subs` (
`id` int  NOT NULL ,
`site_menu_id` int  NOT NULL,
`name` TEXT   NOT NULL,
`link` TEXT   NOT NULL,
`has_child` tinyint  NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_menu_subs` WRITE;
INSERT INTO `core_site_menu_subs` VALUES (1,2,'POS ERP','pos-erp',0),(2,2,'ERP-Garments','garment-erp',0),(3,2,'ERP-General Insurance','general-insurance-erp',0),(4,2,'ERP-Education','academy-erp',0),(5,2,'ERP Manufacturing','manufacturing-erp',0),(6,2,'ERP Hospital','hospital-erp',0),(7,2,'ERP Texttile','textile-erp',0),(8,2,'ERP Real Estate','construction-erp',0),(9,8,'Web publising','webpublishing',0),(10,8,'Javascript Library','javascript-library',0),(11,8,'Server Side','server-side',0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_menus`;

CREATE TABLE `core_site_menus` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`link` TEXT   NOT NULL,
`has_child` tinyint  NOT NULL DEFAULT '0',
`route` TEXT   NOT NULL,
`inactive` tinyint  NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_menus` WRITE;
INSERT INTO `core_site_menus` VALUES (1,'Home','/',0,'/',0),(2,'Apply for Visa','/apply',1,'software',0),(3,'Services','/#service',0,'service',0),(4,'Partner','#',0,'',1),(5,'Client','client',0,'client',1),(6,'About','/#about',0,'about',0),(7,'Contact','/#contact',0,'contact',0),(8,'Blog','blog',1,'blog',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_pages`;

CREATE TABLE `core_site_pages` (
`id` int  NOT NULL ,
`name` TEXT   DEFAULT NULL,
`link` TEXT   DEFAULT NULL,
`inactive` tinyint  DEFAULT '0',
`slug` TEXT   DEFAULT NULL,
`description` text  
`photo` TEXT   DEFAULT NULL,
`src` TEXT   DEFAULT NULL,
`route` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_pages` WRITE;
INSERT INTO `core_site_pages` VALUES (1,'ERP Retal - POS','http',1,NULL,'Integrated solution from production to point of sale for any retials business including\r\n                                supershop, clothing, pharmacy, restaurant/food, electronics, library, jewellery,\r\n                                furniture, tiles &amp; sanitary etc',NULL,'views/pages/software/ERP-POS.php','pos-erp'),(2,'ERP Garment',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Garments.php','garment-erp'),(3,'ERP Hospital',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Hospital.php','hospital-erp'),(4,'ERP Academy',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Education.php','academy-erp'),(5,'ERP Textile',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Textile.php','textile-erp'),(6,'ERP Agro',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Agro.php','agro-erp'),(7,'ERP General Insurance',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-General-insurance.php','general-insurance-erp'),(8,'ERP Manufacturing',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-manufacturing.php','manufacturing-erp'),(9,'ERP Restaurant',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-restaurant.php','restaurant-erp'),(10,'ERP Construction',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-Construction.php','construction-erp'),(11,'ERP Generic',NULL,1,NULL,NULL,NULL,'views/pages/software/ERP-generic.php','generic-erp'),(12,'Service',NULL,0,NULL,NULL,NULL,'/','service'),(13,'Software',NULL,1,NULL,NULL,NULL,'views/pages/software.php','software'),(14,'Clients',NULL,1,NULL,NULL,NULL,'views/pages/client.php','client'),(15,'About',NULL,0,NULL,NULL,NULL,'/','about'),(16,'Contact',NULL,0,NULL,NULL,NULL,'/','contact'),(17,'Apply',NULL,0,NULL,NULL,NULL,'views/pages/apply/apply.php','apply');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_post_categories`;

CREATE TABLE `core_site_post_categories` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_post_categories` WRITE;
INSERT INTO `core_site_post_categories` VALUES (1,'Title Post'),(2,'Featured Post'),(3,'Normal Post Left mage'),(4,'Normal Post Right image');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_post_details`;

CREATE TABLE `core_site_post_details` (
`id` int  NOT NULL ,
`site_post_id` int  NOT NULL,
`description` text  
`photo` TEXT   DEFAULT NULL,
`name` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_post_details` WRITE;
INSERT INTO `core_site_post_details` VALUES (1,1,'Product multi-dimensional measurement unit',NULL,NULL),(2,1,'Convenience of buying and selling products according to batch / lot\r\n                                        number',NULL,NULL),(3,1,'Advantages of Product Metrics',NULL,NULL),(4,1,'Business data will never be lost or ',NULL,NULL),(5,1,'Buying from multiple branches can be sold through the same software',NULL,NULL),(6,1,'The software will never slow down, if the data is high or even from the remote\r\n                                        location.',NULL,NULL),(7,2,'Accounting Management',NULL,NULL),(8,2,'Payroll Management',NULL,NULL),(9,2,' Inventory Management',NULL,NULL),(10,2,'Purchase Management',NULL,NULL),(11,2,'Production & Distribution Management',NULL,NULL),(12,2,' Human Resource Management',NULL,NULL),(13,2,' Customer Relationship Management',NULL,NULL),(14,2,'Sales Management',NULL,NULL),(15,2,'Barcode Creator',NULL,NULL),(16,2,'Cloud Backup Server',NULL,NULL),(17,4,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos\r\n                                        himenaeos. Nulla nunc dui, tristique in semper vel.',NULL,'Super Design Layout '),(18,4,'Intellect Cloud pos software can be automated update after the release new\r\n                                        version of software. Update for the better performace and better userfriendly.',NULL,'Regular Updates & Support'),(19,4,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos\r\n                                        himenaeos nulla nunc dui.',NULL,'Responsive Web Design');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_posts`;

CREATE TABLE `core_site_posts` (
`id` int  NOT NULL ,
`name` TEXT   DEFAULT NULL,
`description` text  
`slug` TEXT   DEFAULT NULL,
`site_album_id` int  DEFAULT NULL,
`inactive` tinyint  DEFAULT '0',
`post_category_id` int  DEFAULT NULL,
`post_page_id` int  DEFAULT NULL,
`photo` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_posts` WRITE;
INSERT INTO `core_site_posts` VALUES (1,'Explain why its best','There are several kind of information we have for why we are best. Some the best features\r\n                                we provide for you that are the world wide challenging features. Some best features are\r\n                                given below.',NULL,3,0,3,1,NULL),(2,'Great way to Include with POS','With integrated POS software, the following business software is listed together.',NULL,4,0,4,1,NULL),(3,'ERP - POS','<p>A Point of Sale (POS) ERP system is a comprehensive software solution designed to integrate and manage all aspects of retail operations. By combining POS functionalities with enterprise resource planning (ERP) capabilities, it enhances efficiency, improves customer experience, and provides a unified view of business operations. Here is an overview of the key modules and features typically found in a POS ERP system:</p>\r\n<p>A POS ERP system is essential for modern retail businesses looking to enhance their operational efficiency, improve customer experience, and achieve better business outcomes. By integrating all aspects of retail management into a single platform, it provides the tools needed to manage complex retail operations and ensure their successful execution.</p>',NULL,5,0,1,1,'1548843653.jpg'),(4,'Intellect Cloud POS Software - features','Responsive & optimized for mobile devices. Completely without coding skills!',NULL,NULL,0,2,1,'15488780820.jpg'),(5,'ERP - Construction','A Construction ERP system is essential for modern construction companies looking to enhance their operational efficiency, improve project management, and achieve better business outcomes. By integrating all aspects of construction management into a single platform, it provides the tools needed to manage complex projects and ensure their successful completion.',NULL,NULL,0,1,10,'1548858645.jpg');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_product_categories`;

CREATE TABLE `core_site_product_categories` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_product_categories` WRITE;
INSERT INTO `core_site_product_categories` VALUES (1,'ERP'),(2,'OTHER SOFTWARES');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_product_uoms`;

CREATE TABLE `core_site_product_uoms` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_product_uoms` WRITE;
INSERT INTO `core_site_product_uoms` VALUES (1,'Piece');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_products`;

CREATE TABLE `core_site_products` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`site_product_category_id` int  NOT NULL,
`description` text  
`photo` TEXT   DEFAULT NULL,
`regular_price` float DEFAULT NULL,
`offer_price` float DEFAULT NULL,
`inactive` tinyint  DEFAULT NULL,
`current_stock` float DEFAULT NULL,
`site_product_uom_id` int  DEFAULT NULL,
`slug` TEXT   DEFAULT NULL,
`icon` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_products` WRITE;
INSERT INTO `core_site_products` VALUES (1,'POS ERP',1,' Integrated solution from production to point of sale for any retials business including supershop, clothing, pharmacy, restaurant/food, electronics, library, jewellery, furniture, tiles & sanitary etc','1548843653.jpg',0,0,0,0,1,'pos-erp',''),(2,'ERP - GARMENTS',1,'Intellect Garments ERP is one of the leading ERP solution provider, especially for Garments industries which is integrated with different modules that cover all the…','1548855465.jpg',0,0,0,0,1,'garment-erp',NULL),(3,'ERP - GENERAL INSURANCE',1,'Our Insurance software so flexible that you will reach your business goals in no time. Stop struggling with legacy systems! Our intellect software will help…','1548855650.jpg',0,0,0,0,1,'general-insurance-erp',NULL),(4,'ERP - EDUCATION',1,'Intellect education management software is used by teachers, students, and school/college/university administrators for organization and collaboration, and to facilitate learning. School software is','1548856590.jpg',0,0,0,0,1,'academy-erp',NULL),(5,'ERP - MANUFACTURING',1,'Intellect ERP gives a company an integrated real-time view of its core business processes such as production, order processing, and inventory management, tied together by…','1548856850.jpg',0,0,0,0,1,'manufacturing-erp',NULL),(6,'ERP - HOSPITAL',1,'Intellect Hospital Management Software is a comprehensive and integrated hospital management software, designed to manage all aspects of hospital operations.(i.e. Outpatient and Inpatient management, Patient…','1548857774.jpg',0,0,0,0,1,'hospital-erp',NULL),(7,'ERP - AGRO',1,'A Construction ERP (Enterprise Resource Planning) system is a comprehensive software solution designed to manage and integrate all aspects of construction project management and operations. By consolidating various ...','1548858095.jpg',0,0,0,0,1,'construction-erp',NULL),(8,'ERP - TEXTILE',1,'The Intellect ERP (enterprise resource planning) software solutions - seek to integrate the business processes involving eight critical areas in the textile production planning which…','1548858372.jpg',0,0,0,0,1,'textile-erp',NULL),(9,'ERP - CONSTRUCTION',1,'A Construction ERP (Enterprise Resource Planning) system is a comprehensive software solution designed to manage and integrate all aspects of construction project management and operations. By consolidating various ...','1548858645.jpg',0,0,0,0,1,'construction-erp',NULL),(10,'Accounting',2,'Accounting Software includes general journal, creating bill & invoice, all financial reports (Trial Balance, Income Statement, Balance Sheet) and so on.','accounting.png',0,0,1,0,1,'accounting',NULL),(11,'HR & Accounting',2,'Human Resource Management System includes person management, payroll, attendance, leave & holiday, shift & schedule, accounting and so on.','accounting.png',0,0,0,NULL,1,NULL,NULL),(12,'Diagnostic Application',2,'Diagnostic Application includes pharmacy management, radioloy reporting management, sample collection and reporting management and so on','diagnostic.png',NULL,NULL,0,NULL,1,NULL,NULL),(13,'Doctors Prescription',2,'Doctors Prescription Application includes appointment scheduling, visit fee collection, create and print prescription and so on..','prescription.png',NULL,NULL,0,NULL,1,NULL,NULL),(14,'Asset Management',2,'Asset Management System includes asset and components, operation schedule, material & service requisition and so on.','fixed-asset.png',NULL,NULL,0,NULL,1,NULL,NULL),(15,'Inventory Management',2,'Inventory Management System includes stock management, warehouse management, stock adjustment, requisition management, stock reporting and so on.','material-management.png',NULL,NULL,0,NULL,1,NULL,NULL),(16,'RealTime Attendance System',2,'Biometric System Application includes registration with finger print and webcam device, Bio-Metric verification, real time data storage, system & security and so on.','business.png',NULL,NULL,0,NULL,1,NULL,NULL),(17,'Project Management',2,'Project Management Application includes person management, task & team management, asset management, costing, reporting and so o','project-management.png',NULL,NULL,0,NULL,1,NULL,NULL),(18,'Logistics Management',2,'Logistics Management System includes procurement & delivery management, transportation & route management, storage of goods & transportation flow, navigation, billing and so on.','logistic.png',NULL,NULL,0,NULL,1,NULL,NULL),(19,'E-Commerce Solution',2,'E-Commerce Solution includes website, management of product, order, purchase, warehouse, customer, supplier, payment gateway and so on.','add-to-cart.png',NULL,NULL,0,NULL,1,NULL,NULL),(20,'Visa Processing Software',2,'Our Visa Processing Software includes customer registration, deed and document management, visa & ticket processing step management, invoice & payment, status report and so on.','boarding-pass.png',NULL,NULL,0,NULL,1,NULL,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_routes_tmp`;

CREATE TABLE `core_site_routes_tmp` (
`id` int  NOT NULL ,
`name` TEXT   DEFAULT NULL,
`src` TEXT   DEFAULT NULL,
`inactive` tinyint  NOT NULL DEFAULT '0',
`site_menu_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_routes_tmp` WRITE;
INSERT INTO `core_site_routes_tmp` VALUES (1,'pos-erp','views/pages/software/ERP-POS.php',0,2),(2,'garment-erp','views/pages/ERP-Garments.php',0,2),(3,'education-erp','views/pages/ERP-Education.php',0,2),(4,'general-insurance-erp','views/pages/ERP-General-Insurance.php',0,2),(5,'manufacturing-erp','views/pages/ERP-Manufacturing.php',0,2),(6,'hospital-erp','views/pages/ERP-Hospital.php',0,2),(7,'texttile-erp','views/pages/ERP-Textitle.php',0,2),(8,'real-estate-erp','views/pages/ERP-Real-Estate.php',0,2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_service_categories`;

CREATE TABLE `core_site_service_categories` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_service_categories` WRITE;
INSERT INTO `core_site_service_categories` VALUES (1,'Software Enable Service');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_site_services`;

CREATE TABLE `core_site_services` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`category_id` int  NOT NULL,
`description` text  
`regular_price` float DEFAULT '0',
`offer_price` float DEFAULT '0',
`icon` TEXT   DEFAULT NULL,
`inactive` tinyint  DEFAULT '0',
`photo` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_site_services` WRITE;
INSERT INTO `core_site_services` VALUES (1,'Software Quality Assurance',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater',0,0,NULL,0,'1548863121.png'),(2,'Software forensic',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater',0,0,NULL,0,'1548863180.png'),(3,'Database Migration',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater',0,0,NULL,0,'1548863362.png'),(4,'Setup Own Hosting',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater',0,0,NULL,0,'1548863484.png'),(5,'Cloud Backup Service',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greate',0,0,NULL,0,'1548862800.png'),(6,'Software Upgrade and Maintenance',1,'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater',0,0,NULL,0,'1548863512.png'),(7,'Incredibly Responsive',2,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.',0,0,'<i class=\"fa fa-laptop v-icon\"></i>',0,NULL),(8,'Fully Customizible',2,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.',0,0,'<i class=\"fa fa-leaf v-icon\"></i>',0,NULL),(9,'Interactive Elements',2,'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.',0,0,'<i class=\"fa fa-scissors v-icon\"></i>',0,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_status`;

CREATE TABLE `core_status` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_status` WRITE;
INSERT INTO `core_status` VALUES (1,'Processing'),(2,'Shifted'),(3,'Delivered'),(4,'Invoiced');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_stock_adjustment_details`;

CREATE TABLE `core_stock_adjustment_details` (
`id` int  NOT NULL ,
`adjustment_id` int  NOT NULL,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`price` float NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_stock_adjustment_details` WRITE;
INSERT INTO `core_stock_adjustment_details` VALUES (1,2,20,5,400),(2,3,20,50,400),(3,4,28,70,6650),(4,4,20,30,300);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_stock_adjustment_types`;

CREATE TABLE `core_stock_adjustment_types` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`factor` int NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_stock_adjustment_types` WRITE;
INSERT INTO `core_stock_adjustment_types` VALUES (1,'Is Outdated',-1),(2,'Is Damaged',-1),(3,'Material Missing',-1),(4,'Product Is Obsolete',-1),(5,'Existing Inventory',1),(6,'Fixed/Found Inventory',1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_stock_adjustments`;

CREATE TABLE `core_stock_adjustments` (
`id` int  NOT NULL ,
`adjustment_at` timestamp NOT NULL ,
`user_id` int  NOT NULL,
`remark` text NOT NULL,
`adjustment_type_id` int  NOT NULL,
`werehouse_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_stock_adjustments` WRITE;
INSERT INTO `core_stock_adjustments` VALUES (1,'2021-12-27 18:00:00',1,'ddd',2,1),(2,'2021-12-27 18:00:00',1,'ddd',2,1),(3,'2021-12-27 18:00:00',1,'ddddfd',6,1),(4,'2021-12-27 18:00:00',1,'NA',6,2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_stocks`;

CREATE TABLE `core_stocks` (
`id` int  NOT NULL ,
`product_id` int  NOT NULL,
`qty` float NOT NULL,
`transaction_type_id` int  NOT NULL,
`remark` text,
`created_at` timestamp NOT NULL ,
`warehouse_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_stocks` WRITE;
INSERT INTO `core_stocks` VALUES (1,39,50,3,'Purchase','2023-12-30 12:43:50',1),(2,40,30,3,'Purchase','2023-12-30 12:43:50',1),(3,39,20,3,'Purchase','2023-12-30 12:43:50',1),(4,40,70,3,'Purchase','2023-12-30 12:43:50',1),(5,39,10,3,'Purchase','0000-00-00 00:00:00',3),(6,40,30,3,'Purchase','2023-12-24 06:10:47',3),(7,39,-3,1,'Order','2023-12-30 12:43:50',2),(8,40,-2,1,'Order','2023-12-30 12:43:50',2),(9,46,-2,1,'Order','2023-12-30 12:43:50',2),(10,47,-1,1,'Order','2023-12-30 12:43:50',2),(11,36,-4,1,'Order','0000-00-00 00:00:00',0),(12,46,-4,1,'Order','0000-00-00 00:00:00',0),(13,47,-1,1,'Order','0000-00-00 00:00:00',0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_students`;

CREATE TABLE `core_students` (
`id` int  NOT NULL ,
`name` TEXT   NOT NULL,
`fathers_name` TEXT   NOT NULL,
`mothers_name` TEXT   DEFAULT NULL,
`dob` date DEFAULT NULL,
`contact_no` TEXT   DEFAULT NULL,
`address` text  
`photo` TEXT   DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_students` WRITE;
INSERT INTO `core_students` VALUES (1,'Mahedi Hassan','Abdur Rahman','Amena Akter','2024-01-19','','Rampura ','1.png');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_suppliers`;

CREATE TABLE `core_suppliers` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`mobile` TEXT NOT NULL,
`email` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_suppliers` WRITE;
INSERT INTO `core_suppliers` VALUES (1,'Md. Shahin','34223423455444','shahin@yahoo.com'),(2,'Tauhid Imdad','343254354235433','tauhid@gmail.com');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_dress_parameters`;

CREATE TABLE `core_tailor_dress_parameters` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`dress_id` int  NOT NULL,
`default_size` TEXT DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_dress_parameters` WRITE;
INSERT INTO `core_tailor_dress_parameters` VALUES (1,'Chest',1,NULL),(2,'Waist',1,NULL),(3,'Seat',1,NULL),(4,'Bicep',1,NULL),(5,'Shirt Length',1,NULL),(6,'Shoulder Width',1,NULL),(7,'Sleeve Length',1,NULL),(8,'Cuff Circumference',1,NULL),(9,'Collar Size',2,NULL);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_dresses`;

CREATE TABLE `core_tailor_dresses` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`price` float NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_dresses` WRITE;
INSERT INTO `core_tailor_dresses` VALUES (1,'Shirt',1000),(2,'Kamiz',1200),(3,'Pants',1100),(4,'Borka',2500),(5,'Panjabi',1300);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_order_details`;

CREATE TABLE `core_tailor_order_details` (
`id` int  NOT NULL ,
`dress_id` int  NOT NULL,
`price` double NOT NULL,
`qty` double NOT NULL,
`discount` double NOT NULL,
`order_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_order_details` WRITE;
INSERT INTO `core_tailor_order_details` VALUES (1,1,1000,1,0,1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_order_measurements`;

CREATE TABLE `core_tailor_order_measurements` (
`id` int  NOT NULL ,
`order_id` int  NOT NULL,
`measurement_id` int  NOT NULL,
`size` TEXT NOT NULL,
`uom_id` int  NOT NULL,
`dress_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_order_measurements` WRITE;
INSERT INTO `core_tailor_order_measurements` VALUES (1,1,1,'34',1,1),(2,1,2,'33',1,1),(3,1,5,'22',1,1);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_orders`;

CREATE TABLE `core_tailor_orders` (
`id` int  NOT NULL ,
`customer_name` TEXT NOT NULL,
`paid_amount` double DEFAULT NULL,
`order_datetime` timestamp NOT NULL ,
`delivery_datetime` datetime NOT NULL,
`order_total` double DEFAULT NULL,
`shipping_address` text,
`remark` text,
`mobile` TEXT DEFAULT NULL,
`discount` double DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_orders` WRITE;
INSERT INTO `core_tailor_orders` VALUES (1,'Jahidul Islam',500,'0000-00-00 00:00:00','2024-01-20 00:00:00',950,'Rampura','','3434343234',50);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_tailor_uoms`;

CREATE TABLE `core_tailor_uoms` (
`id` int  NOT NULL ,
`abbr` TEXT NOT NULL,
`name` TEXT NOT NULL,
`inactive` tinyint  NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
);
LOCK TABLES `core_tailor_uoms` WRITE;
INSERT INTO `core_tailor_uoms` VALUES (1,'inc','Inch',0),(2,'ft','Foot',0),(3,'yd','yard',0),(4,'piece','piece',0);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_thanas`;

CREATE TABLE `core_thanas` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`district_id` int  NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_thanas` WRITE;
INSERT INTO `core_thanas` VALUES (1,'Chatkhil',2),(2,'Ramgonj',2),(3,'Mijdi Sadar',2),(4,'Begomganj',2);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_transaction_types`;

CREATE TABLE `core_transaction_types` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_transaction_types` WRITE;
INSERT INTO `core_transaction_types` VALUES (1,'Sales Order'),(2,'Sales Return'),(3,'Purchase Order'),(4,'Purchase Return'),(5,'Positive Stock Adjustment'),(6,'Negative Stock Adjustment');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_uom`;

CREATE TABLE `core_uom` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_uom` WRITE;
INSERT INTO `core_uom` VALUES (1,'Piece'),(2,'Kg'),(3,'Pack'),(4,'Litter'),(5,'Gram');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_uoms`;

CREATE TABLE `core_uoms` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_uoms` WRITE;
INSERT INTO `core_uoms` VALUES (1,'Piece'),(2,'Kg'),(3,'Pack'),(4,'Litter'),(5,'Gram'),(6,'Ton');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_user_deposits`;

CREATE TABLE `core_user_deposits` (
`id` int  NOT NULL ,
`user_id` int  NOT NULL,
`amount` float NOT NULL,
`created_at` timestamp NOT NULL ,
`transaction_at` datetime DEFAULT NULL,
`note` TEXT DEFAULT NULL,
`created_by` int  DEFAULT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_user_deposits` WRITE;
INSERT INTO `core_user_deposits` VALUES (1,158,100,'2024-04-04 05:22:32','2024-04-04 00:00:00','NA',127),(2,186,10000,'2024-04-04 05:22:39','1970-01-01 06:00:00','',186),(3,160,-5e17,'2024-04-04 05:23:50','1970-01-01 06:00:00','',186),(4,194,1009,'2024-04-04 05:44:18','1970-01-01 06:00:00','NA',194),(5,197,10000,'2024-04-04 05:56:20','1970-01-01 06:00:00','',197),(6,199,1,'2024-04-04 05:56:29','1970-01-01 06:00:00','Na',199),(7,196,1000,'2024-04-04 05:56:49','1970-01-01 06:00:00','',196),(8,197,-1,'2024-04-04 05:57:17','1970-01-01 06:00:00','',197),(9,196,150,'2024-04-04 05:57:31','1970-01-01 06:00:00','',127),(10,203,5000,'2024-04-04 05:57:52','2024-04-04 00:00:00','Eid Gift',203),(11,204,0,'2024-04-04 05:58:09','2024-04-04 00:00:00','xero_xero',91),(12,200,9999,'2024-04-04 05:58:26','1970-01-01 06:00:00','',200),(13,199,4000,'2024-04-15 04:48:13','2024-04-15 00:00:00','',127),(14,201,3000,'2024-04-15 04:48:32','1970-01-01 06:00:00','',127);
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_users`;

CREATE TABLE `core_users` (
`id` int NOT NULL,
`username` TEXT DEFAULT NULL,
`role_id` int DEFAULT NULL,
`password` TEXT DEFAULT NULL,
`email` TEXT DEFAULT NULL,
`full_name` TEXT DEFAULT NULL,
`created_at` timestamp NOT NULL ,
`photo` TEXT DEFAULT NULL,
`verify_code` TEXT DEFAULT NULL,
`inactive` tinyint  DEFAULT '1',
`mobile` TEXT DEFAULT NULL,
`updated_at` datetime DEFAULT NULL
);
LOCK TABLES `core_users` WRITE;
INSERT INTO `core_users` VALUES (146,'admin',1,'111111','','','2024-07-29 13:26:04','146.png','',0,'','0000-00-00 00:00:00');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_visa_types`;

CREATE TABLE `core_visa_types` (
`id` int NOT NULL ,
`name` TEXT   NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_visa_types` WRITE;
INSERT INTO `core_visa_types` VALUES (1,'New'),(2,'Extend');
UNLOCK TABLES;
DROP TABLE IF EXISTS `core_warehouses`;

CREATE TABLE `core_warehouses` (
`id` int  NOT NULL ,
`name` TEXT NOT NULL,
`city` TEXT NOT NULL,
`contact` TEXT NOT NULL,
PRIMARY KEY (`id`)
);
LOCK TABLES `core_warehouses` WRITE;
INSERT INTO `core_warehouses` VALUES (1,'Tajgon','Dhaka','4543534534'),(2,'Rangpur','Rangpur','324242342'),(3,'Badda','Rampura','3434334324');
UNLOCK TABLES;



CREATE UNIQUE INDEX `core_failed_jobs_core_failed_jobs_uuid_unique` ON `core_failed_jobs` (`uuid`);
CREATE INDEX `core_password_resets_core_password_resets_email_index` ON `core_password_resets` (`email`);
CREATE UNIQUE INDEX `core_personal_access_tokens_core_personal_access_tokens_token_unique` ON `core_personal_access_tokens` (`token`);
CREATE INDEX `core_personal_access_tokens_core_personal_access_tokens_tokenable_type_tokenable_id_index` ON `core_personal_access_tokens` (`tokenable_type`);
CREATE UNIQUE INDEX `core_products_uni_barcode` ON `core_products` (`barcode`);
CREATE UNIQUE INDEX `core_products_uni_name` ON `core_products` (`name`);
CREATE UNIQUE INDEX `core_site_routes_tmp_uni_route` ON `core_site_routes_tmp` (`name`);

COMMIT;
PRAGMA ignore_check_constraints = ON;
PRAGMA foreign_keys = ON;
PRAGMA journal_mode = WAL;
PRAGMA synchronous = NORMAL;
