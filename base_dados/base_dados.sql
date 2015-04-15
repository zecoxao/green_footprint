/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - pegada_energetica
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

/*Table structure for table `cae` */

DROP TABLE IF EXISTS `cae`;

CREATE TABLE `cae` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cae` */

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilizador` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`utilizador`),
  KEY `empresa` (`empresa`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`utilizador`) REFERENCES `utilizador` (`id`),
  CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `localidade` varchar(50) NOT NULL,
  `cae` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cae` (`cae`),
  CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`cae`) REFERENCES `cae` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `empresa` */

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `equipamento` */

/*Table structure for table `potencia` */

DROP TABLE IF EXISTS `potencia`;

CREATE TABLE `potencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potencia` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `potencia` */

/*Table structure for table `profissional` */

DROP TABLE IF EXISTS `profissional`;

CREATE TABLE `profissional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilizador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`utilizador`),
  CONSTRAINT `profissional_ibfk_1` FOREIGN KEY (`utilizador`) REFERENCES `utilizador` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profissional` */

/*Table structure for table `simulacao` */

DROP TABLE IF EXISTS `simulacao`;

CREATE TABLE `simulacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` int(11) NOT NULL,
  `data` date NOT NULL,
  `consumo_total` double NOT NULL,
  `equipamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa` (`empresa`),
  KEY `equipamento` (`equipamento`),
  CONSTRAINT `simulacao_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`),
  CONSTRAINT `simulacao_ibfk_2` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `simulacao` */

/*Table structure for table `utilizador` */

DROP TABLE IF EXISTS `utilizador`;

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contacto` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `utilizador` */

/*Table structure for table `visita` */

DROP TABLE IF EXISTS `visita`;

CREATE TABLE `visita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `empresa` int(11) NOT NULL,
  `profissional` int(11) NOT NULL,
  `equipamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa` (`empresa`),
  KEY `profissional` (`profissional`),
  KEY `equipamento` (`equipamento`),
  CONSTRAINT `visita_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`id`),
  CONSTRAINT `visita_ibfk_2` FOREIGN KEY (`profissional`) REFERENCES `profissional` (`id`),
  CONSTRAINT `visita_ibfk_3` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `visita` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
