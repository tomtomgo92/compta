/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 5.7.19 : Database - petitcomptable
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`petitcomptable` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `petitcomptable`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `typeCat` enum('debit','credit') DEFAULT 'debit',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `category` */

insert  into `category`(`id`,`name`,`typeCat`) values 
(1,'Alimentaire','debit'),
(2,'Vestimentaire','debit'),
(3,'Loisir','debit'),
(4,'Transport','debit'),
(5,'Autres','debit'),
(6,'Virement','credit'),
(7,'Depôt','credit'),
(8,'Salaire','credit'),
(9,'Autres','credit');

/*Table structure for table `operations` */

DROP TABLE IF EXISTS `operations`;

CREATE TABLE `operations` (
  `idAccount` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `amount` decimal(15,4) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `paymentMethod` enum('blue card','bank check','transfer','sample') DEFAULT NULL,
  PRIMARY KEY (`idAccount`),
  KEY `fk_user` (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `operations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `idUser` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `accountType` enum('standard','saving','joint account') NOT NULL,
  `accountProvision` decimal(15,4) NOT NULL,
  `currency` enum('EUR','USD') DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;