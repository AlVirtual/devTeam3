/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ tododb /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE tododb;

DROP TABLE IF EXISTS tasks;
CREATE TABLE `tasks` (
  `idTask` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) NOT NULL,
  `taskName` varchar(45) NOT NULL,
  `taskDescription` varchar(255) NOT NULL,
  `taskStart` varchar(255) DEFAULT NULL,
  `taskEnd` varchar(255) DEFAULT NULL,
  `taskStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`idTask`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
INSERT INTO tasks(idTask,userName,taskName,taskDescription,taskStart,taskEnd,taskStatus) VALUES(1,'Fidel','Anar a la platja','Comprar cerveses, agafar tovallola','15/02/2022','15/02/2022','Pendent'),(10,'Joan','tascca 12212','tasca per fer encara','28/02/2022','06/03/2022','Pendent'),(11,'Joan','444','444','07/03/2022','06/03/2022','Pendent');