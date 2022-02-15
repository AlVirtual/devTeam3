-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tododb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tododb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tododb` ;
USE `tododb` ;

-- -----------------------------------------------------
-- Table `tododb`.`tasks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tododb`.`tasks` (
  `idTask` INT NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `taskName` VARCHAR(45) NOT NULL,
  `taskDescription` VARCHAR(255) NOT NULL,
  `taskStart` DATETIME NOT NULL,
  `taskEnd` DATETIME NOT NULL,
  `taskStatus` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idTask`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
