-- MySQL Script generated by MySQL Workbench
-- Sun Oct 25 10:45:48 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema crud
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `crud` ;

-- -----------------------------------------------------
-- Schema crud
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8 ;
USE `crud` ;

-- -----------------------------------------------------
-- Table `crud`.`Data`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crud`.`Data` ;

CREATE TABLE IF NOT EXISTS `crud`.`Data` (
  `idData` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(50) NULL,
  `npm` VARCHAR(45) NULL,
  `alamat` VARCHAR(45) NULL,
  `foto` VARCHAR(255) NULL,
  PRIMARY KEY (`idData`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
