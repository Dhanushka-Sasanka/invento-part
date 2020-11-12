/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 5.5.41 : Database - testone
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`testone` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `testone`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `cat_id` INT(10) NOT NULL AUTO_INCREMENT,
  `cat_name` VARCHAR(100) DEFAULT NULL,
  `description` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=INNODB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

INSERT  INTO `category`(`cat_id`,`cat_name`,`description`) VALUES 
(1,'Coconut products','Coconut products'),
(2,'Dehydrated Fruits','Dehydrated Fruits'),
(3,'Canned Foods','Canned Foods'),
(4,'Spices & Herbs','Spices & Herbs'),
(5,'Fruit Juice','Fruit Juice'),
(6,'Essential Oil','Essential Oil'),
(7,'Recycled Products','Recycled Products'),
(8,'Gardening Products','Gardening Products');

/*Table structure for table `hibernate_sequence` */

DROP TABLE IF EXISTS `hibernate_sequence`;

CREATE TABLE `hibernate_sequence` (
  `next_val` BIGINT(20) DEFAULT NULL
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

/*Data for the table `hibernate_sequence` */

INSERT  INTO `hibernate_sequence`(`next_val`) VALUES 
(5);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` INT(11) NOT NULL,
  `added_by` VARCHAR(255) DEFAULT NULL,
  `added_date` VARCHAR(255) DEFAULT NULL,
  `category` VARCHAR(255) DEFAULT NULL,
  `description` VARCHAR(255) DEFAULT NULL,
  `img_url` VARCHAR(255) DEFAULT NULL,
  `is_feature` INT(11) NOT NULL,
  `product_code` VARCHAR(255) DEFAULT NULL,
  `product_name` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

/*Data for the table `product` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(255) DEFAULT NULL,
  `cof_password` VARCHAR(255) DEFAULT NULL,
  `created_date` VARCHAR(255) DEFAULT NULL,
  `nic` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  `status` INT(1) NOT NULL,
  `tele` VARCHAR(255) DEFAULT NULL,
  `user_name` VARCHAR(255) DEFAULT NULL,
  `user_type` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MYISAM DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `user_type` */

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `user_type_id` INT(10) NOT NULL AUTO_INCREMENT,
  `user_type` VARCHAR(100) DEFAULT NULL,
  `decription` VARCHAR(100) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=INNODB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_type` */

INSERT  INTO `user_type`(`user_type_id`,`user_type`,`decription`) VALUES 
(1,'Super User','Super User'),
(2,'Product User','Product User');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- AUTHORIZATION QUERY
SELECT user.user_type , user.`status` FROM user WHERE user.user_name = 'Dhanush' &&
user.password = '12345'