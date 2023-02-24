/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 5.7.36 : Database - chignahuapan deportes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/* CREATE DATABASE /*!32312 IF NOT EXISTS*//* `chignahuapan deportes` */ /*!40100 DEFAULT CHARACTER SET utf8 */; */

/* USE `chignahuapan deportes`; */

/*Table structure for table `amolestaciones` */

DROP TABLE IF EXISTS `amolestaciones`;

CREATE TABLE `amolestaciones` (
  `Id_Jugadores` int(11) NOT NULL AUTO_INCREMENT,
  `No_Faltas` varchar(100) NOT NULL,
  `No_Amol` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_Jugadores`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Table structure for table `equipos` */

DROP TABLE IF EXISTS `equipos`;

CREATE TABLE `equipos` (
  `Id_Equipos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `DT` varchar(100) NOT NULL,
  `No_Jugadores` int(11) NOT NULL,
  PRIMARY KEY (`Id_Equipos`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Table structure for table `jugadores` */

DROP TABLE IF EXISTS `jugadores`;

CREATE TABLE `jugadores` (
  `Id_Jugadores` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Jugadores` varchar(100) NOT NULL,
  `Ap_Paterno` varchar(100) NOT NULL,
  `Num_Playera` varchar(100) NOT NULL,
  `Id_Equipos` int(11) NOT NULL,
  PRIMARY KEY (`Id_Jugadores`),
  KEY `FKequipo` (`Id_Equipos`),
  CONSTRAINT `FKequipo` FOREIGN KEY (`Id_Equipos`) REFERENCES `equipos` (`Id_Equipos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Table structure for table `partidos` */

DROP TABLE IF EXISTS `partidos`;

CREATE TABLE `partidos` (
  `No_partido` int(11) NOT NULL AUTO_INCREMENT,
  `Jornada` varchar(100) NOT NULL,
  `Local` int(11) NOT NULL,
  `Visitante` int(11) NOT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Fechas` datetime NOT NULL,
  `GolLoc` varchar(100) NOT NULL,
  `GolVist` varchar(100) NOT NULL,
  PRIMARY KEY (`No_partido`),
  KEY `Local` (`Local`),
  KEY `Visitante` (`Visitante`),
  CONSTRAINT `partidos_ibfk_2` FOREIGN KEY (`Local`) REFERENCES `equipos` (`Id_Equipos`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `partidos_ibfk_3` FOREIGN KEY (`Visitante`) REFERENCES `equipos` (`Id_Equipos`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `tg` */

DROP TABLE IF EXISTS `tg`;

CREATE TABLE `tg` (
  `Posicion` int(11) NOT NULL AUTO_INCREMENT,
  `Equipos` varchar(15) NOT NULL,
  `PJ` varchar(15) NOT NULL,
  `PG` varchar(15) NOT NULL,
  `PE` varchar(15) NOT NULL,
  `PP` varchar(15) NOT NULL,
  `GFav` varchar(100) NOT NULL,
  `GCon` varchar(100) NOT NULL,
  `Puntos` varchar(100) NOT NULL,
  PRIMARY KEY (`Posicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
