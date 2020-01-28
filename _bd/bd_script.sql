-- MySQL Script generated by MySQL Workbench
-- Tue Jan 14 10:29:32 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd_pisco
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_pisco
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_pisco` DEFAULT CHARACTER SET utf8 ;
USE `bd_pisco` ;

-- -----------------------------------------------------
-- Table `bd_pisco`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_pisco`.`empresa` (
  `idempresa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  `cnpj` VARCHAR(14) NOT NULL,
  `ddd` VARCHAR(3) NOT NULL,
  `telefone` VARCHAR(9) NOT NULL,
  `site` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  PRIMARY KEY (`idempresa`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_pisco`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_pisco`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
