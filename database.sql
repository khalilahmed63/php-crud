/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.21-MariaDB : Database - student_record
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`student_record` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `student_record`;

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `students` */

insert  into `students`(`id`,`name`,`email`,`password`) values 
(2,'saaad','saad@gmail.com','12341234'),
(6,'ali raza','ali@gmail.com','asdfasdf'),
(7,'ahmed','student@gmail.com','12341234'),
(8,'khalil ahmed ','panhwarkhalilahmed@gmail.com','12341234asdf'),
(24,'abdullah basheer','Abdullahbashir919@gmail.com','asdfasdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
