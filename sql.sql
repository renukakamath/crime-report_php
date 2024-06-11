/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - crime_report
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crime_report` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `crime_report`;

/*Table structure for table `complaints` */

DROP TABLE IF EXISTS `complaints`;

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `station_id` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `complaints` */

insert  into `complaints`(`complaint_id`,`user_id`,`station_id`,`description`,`date_time`,`status`) values (3,2,'4','dffffffffffffff','2022-06-29T12:29','HFGYTESY');

/*Table structure for table `crime_type` */

DROP TABLE IF EXISTS `crime_type`;

CREATE TABLE `crime_type` (
  `crime_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `crime_type_name` varchar(500) DEFAULT NULL,
  `minimum_penalty` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`crime_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `crime_type` */

insert  into `crime_type`(`crime_type_id`,`crime_type_name`,`minimum_penalty`) values (3,'drunk n drive','5000'),(4,'violation','5000'),(5,'petty cases','1000');

/*Table structure for table `crimes` */

DROP TABLE IF EXISTS `crimes`;

CREATE TABLE `crimes` (
  `crime_id` int(11) NOT NULL AUTO_INCREMENT,
  `crime_type_id` int(11) DEFAULT NULL,
  `crime_title` varchar(500) DEFAULT NULL,
  `crime_description` varchar(500) DEFAULT NULL,
  `date_time_occured` varchar(500) DEFAULT NULL,
  `date_time_reported` varchar(500) DEFAULT NULL,
  `station_id` int(11) DEFAULT NULL,
  `crime_status` varchar(500) DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `district` varchar(560) DEFAULT NULL,
  `image` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `crimes` */

insert  into `crimes`(`crime_id`,`crime_type_id`,`crime_title`,`crime_description`,`date_time_occured`,`date_time_reported`,`station_id`,`crime_status`,`place`,`district`,`image`) values (2,1,'theftdd','stole 20000 from a hodduse at midnight','2022-06-23T11:21','2022-06-24T08:17',3,'remanteddd','Kochid','malappuram','image/images_62bbf9d34b21b.jpg'),(4,1,'signal vialation','violate traffic signal','2022-06-30T14:34','2022-06-30T12:37',4,'searching for criminala','alappuzha','alappuzha','image/images_62bbf9a73c726.jpg');

/*Table structure for table `criminals` */

DROP TABLE IF EXISTS `criminals`;

CREATE TABLE `criminals` (
  `criminal_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `dob` varchar(500) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `thumb_impression` varchar(2000) DEFAULT NULL,
  `identification_mark_1` varchar(500) DEFAULT NULL,
  `identification_mark_2` varchar(500) DEFAULT NULL,
  `house_name` varchar(500) DEFAULT NULL,
  `father_name` varchar(500) DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `district` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`criminal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `criminals` */

insert  into `criminals`(`criminal_id`,`first_name`,`last_name`,`gender`,`dob`,`photo`,`thumb_impression`,`identification_mark_1`,`identification_mark_2`,`house_name`,`father_name`,`place`,`district`) values (2,'Anna64','RoseWE45Y','female','2022-06-18','image/images_62b933f9736c1.png','image/images_62b933f973f6d.jpg','arfyiliR5EWA','eraur5AweRTGA','kalarikkalAweTGF','peethambaranAWETG','KochiEAwe','eranakulam'),(3,'rajeevqar','vikramsegr','male','2022-06-17','image/images_62b934cd9849e.jpg','image/images_62b934cd989c9.jpg','wq2rey5rewa','w4yge5uaSEfw','kattiparambilQWEFEf','prabhakaranaWEFwq','eranakulamasefw','patthanamthitta');

/*Table structure for table `evidence` */

DROP TABLE IF EXISTS `evidence`;

CREATE TABLE `evidence` (
  `evidence_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `station_id` varchar(5200) DEFAULT NULL,
  `evidence` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`evidence_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `evidence` */

insert  into `evidence`(`evidence_id`,`user_id`,`station_id`,`evidence`,`description`,`date_time`) values (1,1,'3','jcju,g/fi.dik;p0','taken at the time i was attacked','16-02-2022 8:15'),(2,1,'','image/images_62bab96e4a54c.jpg','missinbng','2022-06-28 13:48:54'),(3,2,'','image/images_62bbf8862fd02.jpg','dffffffffffffff','2022-06-29 12:30:22');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `feedback_desc` varchar(500) DEFAULT NULL,
  `replay` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`user_id`,`feedback_desc`,`replay`,`date_time`) values (1,1,'v bad','happy to help you','10-06-2022 8:16'),(2,1,'good','thank u for your valuble feedback','2022-06-28 17:12:05'),(3,1,'goodverygood','pending','2022-06-28 17:25:21'),(4,2,'full of bugs','pending','2022-06-29 12:30:59');

/*Table structure for table `found_report` */

DROP TABLE IF EXISTS `found_report`;

CREATE TABLE `found_report` (
  `found_id` int(11) NOT NULL AUTO_INCREMENT,
  `criminal_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `found_place` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`found_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `found_report` */

insert  into `found_report`(`found_id`,`criminal_id`,`user_id`,`found_place`,`date_time`,`description`) values (1,3,1,'nedumbrakkad','15-06-20220-','i see him in a tea shop near nedumbrakkad busstop'),(2,2,1,'aroor','2022-06-28 08:58:47','isaw him in the supermarket'),(3,2,2,'pattanakadu','2022-06-29 12:28:53','dffffffffffffff');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `user_type` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`login_id`,`user_name`,`password`,`user_type`) values (4,'sn','sn','user'),(9,'skps','sps','station'),(10,'admin','admin','admin'),(12,'pps','ps','station'),(13,'hari','hari','user'),(14,'cps','cps','station'),(15,'WEF','TY','user');

/*Table structure for table `message` */

DROP TABLE IF EXISTS `message`;

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `message_description` varchar(500) DEFAULT NULL,
  `replay` varchar(500) DEFAULT NULL,
  `date_time` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `message` */

insert  into `message`(`message_id`,`user_id`,`message_description`,`replay`,`date_time`) values (1,1,'we will contact you right away','thank u sir','2022-06-27 15:44:00'),(2,1,'hhghhhhhh','pending','2022-06-29 13:03:16'),(3,2,'ESFWRHYETDJU','pending','2022-06-29 17:12:05');

/*Table structure for table `stations` */

DROP TABLE IF EXISTS `stations`;

CREATE TABLE `stations` (
  `station_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `station_name` varchar(500) DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `district` varchar(500) DEFAULT NULL,
  `pincode` varchar(500) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `fax_no` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`station_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stations` */

insert  into `stations`(`station_id`,`login_id`,`station_name`,`place`,`district`,`pincode`,`phone`,`email`,`fax_no`) values (1,9,'south ps','eranakulam','kozhikod','699563','9870990987','sps@gmail.com','5552223'),(3,12,'pattanakad ps','pattanakad','kollam','688532','89879087656','pps@yahoo.com','5582565'),(4,14,'cherthala ps','cherthala','alappuzha','688531','9142449546','cherthaps@gmail.com','55555555');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(500) DEFAULT NULL,
  `last_name` varchar(500) DEFAULT NULL,
  `house_name` varchar(500) DEFAULT NULL,
  `place` varchar(500) DEFAULT NULL,
  `pincode` varchar(450) DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`login_id`,`first_name`,`last_name`,`house_name`,`place`,`pincode`,`phone`,`email`) values (1,4,'jinto','jorge','valiyaveeetil','eranakulam','688543','9870990987','vickeyjhon@gmail.com'),(2,13,'hari','prasad','viyathra','cherthala','688543','7356295523','harip@gmail.com'),(3,15,'efgwg','rewg','wrg','wergf','655882','9865986758','SYHGUU@GMMAIL.COM');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
