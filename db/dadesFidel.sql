/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO tasks(idTask,userName,taskName,taskDescription,taskStart,taskEnd,taskStatus) VALUES(1,'Fidel','Anar a la platja','Comprar cerveses, agafar tovallola','15/02/2022','15/02/2022','Pendent'),(2,'Albert','Desar arbre de Nadal','El gos s\'hi ha pixat, i cal netejar-lo i desar-lo','15/1/2022','15/01/2022','Acabada'),(3,'Joan','Comprar bitllets avió','NY, del 5 al 13 de Juliol, dues persones','15/02/2022',NULL,'Pendent');
