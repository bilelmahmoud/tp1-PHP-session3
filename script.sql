-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema rent
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema rent
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `rent` DEFAULT CHARACTER SET utf8mb4 ;
USE `rent` ;

-- -----------------------------------------------------
-- Table `rent`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rent`.`client` (
  `id` INT(11) NOT NULL,
  `nom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NULL DEFAULT NULL,
  `phone` VARCHAR(20) NULL DEFAULT NULL,
  `courriel` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `rent`.`categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rent`.`categorie` (
  `id` INT NOT NULL,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rent`.`voiture`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rent`.`voiture` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marque` VARCHAR(45) NOT NULL,
  `modele` VARCHAR(45) NOT NULL,
  `annee` VARCHAR(45) NOT NULL,
  `categorie_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_voiture_categorie1_idx` (`categorie_id` ASC) VISIBLE,
  CONSTRAINT `fk_voiture_categorie1`
    FOREIGN KEY (`categorie_id`)
    REFERENCES `rent`.`categorie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rent`.`location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rent`.`location` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date_debut` VARCHAR(45) NOT NULL,
  `date_fin` VARCHAR(45) NOT NULL,
  `prix` DOUBLE NOT NULL,
  `client_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_location_client_idx` (`client_id` ASC) VISIBLE,
  CONSTRAINT `fk_location_client`
    FOREIGN KEY (`client_id`)
    REFERENCES `rent`.`client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `rent`.`location_voiture`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `rent`.`location_voiture` (
  `location_id` INT NOT NULL,
  `voiture_id` INT NOT NULL,
  PRIMARY KEY (`location_id`, `voiture_id`),
  INDEX `fk_location_has_voiture_voiture1_idx` (`voiture_id` ASC) VISIBLE,
  INDEX `fk_location_has_voiture_location1_idx` (`location_id` ASC) VISIBLE,
  CONSTRAINT `fk_location_has_voiture_location1`
    FOREIGN KEY (`location_id`)
    REFERENCES `rent`.`location` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_location_has_voiture_voiture1`
    FOREIGN KEY (`voiture_id`)
    REFERENCES `rent`.`voiture` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
