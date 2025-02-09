CREATE DATABASE  IF NOT EXISTS `DB` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `DB`;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `dataNasc` date NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `usuario` WRITE;
INSERT INTO `usuario` VALUES (1,'Esc','2006-12-12','47996570035','eduardo@gmail.com'),(2,'dodo','2005-07-04','47969696969','douglasonopagode@gmail.com');
UNLOCK TABLES;
