/*
SQLyog Ultimate v11.5 (64 bit)
MySQL - 5.6.24 : Database - pegada_energetica
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pegada_energetica` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pegada_energetica`;

/*Table structure for table `authassignment` */

DROP TABLE IF EXISTS `authassignment`;

CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('Admin','1',NULL,'N;'),('Cliente','3',NULL,'N;'),('Cliente','4',NULL,'N;');

/*Table structure for table `authitem` */

DROP TABLE IF EXISTS `authitem`;

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitem` */

insert  into `authitem`(`name`,`type`,`description`,`bizrule`,`data`) values ('Admin',2,NULL,NULL,'N;'),('Authenticated',2,NULL,NULL,'N;'),('Cae.*',1,NULL,NULL,'N;'),('Cae.Admin',0,NULL,NULL,'N;'),('Cae.Create',0,NULL,NULL,'N;'),('Cae.Delete',0,NULL,NULL,'N;'),('Cae.Index',0,NULL,NULL,'N;'),('Cae.Update',0,NULL,NULL,'N;'),('Cae.View',0,NULL,NULL,'N;'),('Cliente',2,'Cliente',NULL,'N;'),('Cliente.*',1,NULL,NULL,'N;'),('Cliente.Admin',0,NULL,NULL,'N;'),('Cliente.Create',0,NULL,NULL,'N;'),('Cliente.Delete',0,NULL,NULL,'N;'),('Cliente.Index',0,NULL,NULL,'N;'),('Cliente.Update',0,NULL,NULL,'N;'),('Cliente.View',0,NULL,NULL,'N;'),('Empresa.*',1,NULL,NULL,'N;'),('Empresa.Admin',0,NULL,NULL,'N;'),('Empresa.Create',0,NULL,NULL,'N;'),('Empresa.Delete',0,NULL,NULL,'N;'),('Empresa.Index',0,NULL,NULL,'N;'),('Empresa.Update',0,NULL,NULL,'N;'),('Empresa.View',0,NULL,NULL,'N;'),('Equipamento.*',1,NULL,NULL,'N;'),('Equipamento.Admin',0,NULL,NULL,'N;'),('Equipamento.Create',0,NULL,NULL,'N;'),('Equipamento.Delete',0,NULL,NULL,'N;'),('Equipamento.Index',0,NULL,NULL,'N;'),('Equipamento.Update',0,NULL,NULL,'N;'),('Equipamento.View',0,NULL,NULL,'N;'),('Guest',2,NULL,NULL,'N;'),('Potencia.*',1,NULL,NULL,'N;'),('Potencia.Admin',0,NULL,NULL,'N;'),('Potencia.Create',0,NULL,NULL,'N;'),('Potencia.Delete',0,NULL,NULL,'N;'),('Potencia.Index',0,NULL,NULL,'N;'),('Potencia.Update',0,NULL,NULL,'N;'),('Potencia.View',0,NULL,NULL,'N;'),('Profissional.*',1,NULL,NULL,'N;'),('Profissional.Admin',0,NULL,NULL,'N;'),('Profissional.Create',0,NULL,NULL,'N;'),('Profissional.Delete',0,NULL,NULL,'N;'),('Profissional.Index',0,NULL,NULL,'N;'),('Profissional.Update',0,NULL,NULL,'N;'),('Profissional.View',0,NULL,NULL,'N;'),('Simulacao.*',1,NULL,NULL,'N;'),('Simulacao.Admin',0,NULL,NULL,'N;'),('Simulacao.Create',0,NULL,NULL,'N;'),('Simulacao.Delete',0,NULL,NULL,'N;'),('Simulacao.Index',0,NULL,NULL,'N;'),('Simulacao.Update',0,NULL,NULL,'N;'),('Simulacao.View',0,NULL,NULL,'N;'),('SimulacaoEquipamento.*',1,NULL,NULL,'N;'),('Site.*',1,NULL,NULL,'N;'),('Site.Contact',0,NULL,NULL,'N;'),('Site.Error',0,NULL,NULL,'N;'),('Site.Index',0,NULL,NULL,'N;'),('Site.Login',0,NULL,NULL,'N;'),('Site.Logout',0,NULL,NULL,'N;'),('User.Activation.*',1,NULL,NULL,'N;'),('User.Activation.Activation',0,NULL,NULL,'N;'),('User.Admin.*',1,NULL,NULL,'N;'),('User.Admin.Admin',0,NULL,NULL,'N;'),('User.Admin.Create',0,NULL,NULL,'N;'),('User.Admin.Delete',0,NULL,NULL,'N;'),('User.Admin.Update',0,NULL,NULL,'N;'),('User.Admin.View',0,NULL,NULL,'N;'),('User.Default.*',1,NULL,NULL,'N;'),('User.Default.Index',0,NULL,NULL,'N;'),('User.Login.*',1,NULL,NULL,'N;'),('User.Login.Login',0,NULL,NULL,'N;'),('User.Logout.*',1,NULL,NULL,'N;'),('User.Logout.Logout',0,NULL,NULL,'N;'),('User.Profile.*',1,NULL,NULL,'N;'),('User.Profile.Changepassword',0,NULL,NULL,'N;'),('User.Profile.Edit',0,NULL,NULL,'N;'),('User.Profile.Profile',0,NULL,NULL,'N;'),('User.ProfileField.*',1,NULL,NULL,'N;'),('User.ProfileField.Admin',0,NULL,NULL,'N;'),('User.ProfileField.Create',0,NULL,NULL,'N;'),('User.ProfileField.Delete',0,NULL,NULL,'N;'),('User.ProfileField.Update',0,NULL,NULL,'N;'),('User.ProfileField.View',0,NULL,NULL,'N;'),('User.Recovery.*',1,NULL,NULL,'N;'),('User.Recovery.Recovery',0,NULL,NULL,'N;'),('User.Registration.*',1,NULL,NULL,'N;'),('User.Registration.Registration',0,NULL,NULL,'N;'),('User.User.*',1,NULL,NULL,'N;'),('User.User.Index',0,NULL,NULL,'N;'),('User.User.View',0,NULL,NULL,'N;'),('Utilizador.*',1,NULL,NULL,'N;'),('Utilizador.Admin',0,NULL,NULL,'N;'),('Utilizador.Create',0,NULL,NULL,'N;'),('Utilizador.Delete',0,NULL,NULL,'N;'),('Utilizador.Index',0,NULL,NULL,'N;'),('Utilizador.Update',0,NULL,NULL,'N;'),('Utilizador.View',0,NULL,NULL,'N;'),('Visita.*',1,NULL,NULL,'N;'),('Visita.Admin',0,NULL,NULL,'N;'),('Visita.Create',0,NULL,NULL,'N;'),('Visita.Delete',0,NULL,NULL,'N;'),('Visita.Index',0,NULL,NULL,'N;'),('Visita.Update',0,NULL,NULL,'N;'),('Visita.View',0,NULL,NULL,'N;'),('VisitaEquipamento.*',1,NULL,NULL,'N;');

/*Table structure for table `authitemchild` */

DROP TABLE IF EXISTS `authitemchild`;

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `authitemchild` */

insert  into `authitemchild`(`parent`,`child`) values ('Cliente','Cae.*'),('Cliente','Empresa.*'),('Cliente','Equipamento.*'),('Cliente','Potencia.*'),('Cliente','Simulacao.*'),('Cliente','SimulacaoEquipamento.*');

/*Table structure for table `cae` */

DROP TABLE IF EXISTS `cae`;

CREATE TABLE `cae` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `media` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cae` */

insert  into `cae`(`id`,`descricao`,`media`) values (2,'Energia',12000),(3,'Agricultura',20000);

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `empresa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa` (`empresa`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`id`,`nome`,`password`,`empresa`) values (1,'zecoxao','invisible',2),(2,'andre','invisible',5);

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `latitude` double(12,10) DEFAULT NULL,
  `longitude` double(13,10) DEFAULT NULL,
  `localidade` varchar(50) NOT NULL,
  `cae` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cae` (`cae`),
  CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`cae`) REFERENCES `cae` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `empresa` */

insert  into `empresa`(`id`,`nome`,`latitude`,`longitude`,`localidade`,`cae`) values (2,'ElectroLima',41.3000000000,-8.2000000000,'Aião, Portugal',2),(3,'AgroViana',41.0000000000,-8.0000000000,'Bustelo, 4690, Portugal',3),(4,'EDP',41.0000000000,-8.1000000000,'Viana',2),(5,'Simplicio',42.0000000000,-8.2000000000,'Gavieira, Portugal',3);

/*Table structure for table `equipamento` */

DROP TABLE IF EXISTS `equipamento`;

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `potencia` int(11) NOT NULL,
  `horas` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `consumo` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `potencia` (`potencia`),
  CONSTRAINT `equipamento_ibfk_1` FOREIGN KEY (`potencia`) REFERENCES `potencia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `equipamento` */

insert  into `equipamento`(`id`,`nome`,`potencia`,`horas`,`quantidade`,`consumo`) values (1,'lampadas',1,12,15,72000),(2,'lol',1,25,12,120000),(3,'máquina de café',2,12,15,54000),(4,'Tractor',2,50,40,600000);

/*Table structure for table `potencia` */

DROP TABLE IF EXISTS `potencia`;

CREATE TABLE `potencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potencia` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `potencia` */

insert  into `potencia`(`id`,`potencia`) values (1,400),(2,300);

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

insert  into `profiles`(`user_id`,`lastname`,`firstname`) values (1,'Admin','Administrator'),(2,'Demo','Demo'),(3,'Coixao','Jose'),(4,'Pereira','Andre');

/*Table structure for table `profiles_fields` */

DROP TABLE IF EXISTS `profiles_fields`;

CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `profiles_fields` */

insert  into `profiles_fields`(`id`,`varname`,`title`,`field_type`,`field_size`,`field_size_min`,`required`,`match`,`range`,`error_message`,`other_validator`,`default`,`widget`,`widgetparams`,`position`,`visible`) values (1,'lastname','Last Name','VARCHAR','50','3',1,'','','Incorrect Last Name (length between 3 and 50 characters).','','','','',1,3),(2,'firstname','First Name','VARCHAR','50','3',1,'','','Incorrect First Name (length between 3 and 50 characters).','','','','',0,3);

/*Table structure for table `rights` */

DROP TABLE IF EXISTS `rights`;

CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rights` */

/*Table structure for table `simulacao` */

DROP TABLE IF EXISTS `simulacao`;

CREATE TABLE `simulacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `consumo_total` double NOT NULL,
  `habitantes` int(11) NOT NULL,
  `divisoes` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa` (`empresa`),
  CONSTRAINT `simulacao_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `simulacao` */

insert  into `simulacao`(`id`,`empresa`,`data`,`consumo_total`,`habitantes`,`divisoes`) values (8,2,'2015-06-24',10000,12,5),(9,3,'2015-06-24',1500,12,4),(11,5,'2015-06-25',123456,12,34);

/*Table structure for table `simulacao_equipamento` */

DROP TABLE IF EXISTS `simulacao_equipamento`;

CREATE TABLE `simulacao_equipamento` (
  `simulacao` int(11) NOT NULL,
  `equipamento` int(11) NOT NULL,
  PRIMARY KEY (`simulacao`,`equipamento`),
  KEY `equipamento` (`equipamento`),
  CONSTRAINT `simulacao_equipamento_ibfk_1` FOREIGN KEY (`simulacao`) REFERENCES `simulacao` (`id`),
  CONSTRAINT `simulacao_equipamento_ibfk_2` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `simulacao_equipamento` */

insert  into `simulacao_equipamento`(`simulacao`,`equipamento`) values (8,1),(9,1),(11,1),(8,2),(11,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`email`,`activkey`,`create_at`,`lastvisit_at`,`superuser`,`status`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','webmaster@example.com','9a24eff8c15a6a141ece27eb6947da0f','2015-04-22 12:32:11','2015-06-25 22:33:41',1,1),(2,'demo','fe01ce2a7fbac8fafaed7c982a04e229','demo@example.com','099f825543f7850cc038b90aaff39fac','2015-04-22 12:32:11','0000-00-00 00:00:00',0,1),(3,'zecoxao','4c4999ac17adcef1a5a75fab71e5c857','zecoxao@hotmail.com','7e6855c10bf4180434aa0671edd56a44','2015-04-28 01:41:31','2015-06-25 22:58:22',0,1),(4,'andre','4c4999ac17adcef1a5a75fab71e5c857','andre@hotmail.com','cccd3fe09907d3ed387661fd4a873eca','2015-06-18 15:15:33','2015-06-25 23:16:25',0,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
