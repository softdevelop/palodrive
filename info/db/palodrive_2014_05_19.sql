-- MySQL Script generated by MySQL Workbench
-- 05/19/14 16:05:27
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`users` ;

CREATE TABLE IF NOT EXISTS `mydb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45) NULL,
  `handle_name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `created_date` INT NULL,
  `modified_date` INT NULL,
  `parent_id` TINYINT NULL,
  `type` TINYINT NULL,
  `hash` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tournaments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`tournaments` ;

CREATE TABLE IF NOT EXISTS `mydb`.`tournaments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `created_date` INT NULL,
  `modified_date` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`wager_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`wager_types` ;

CREATE TABLE IF NOT EXISTS `mydb`.`wager_types` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `alias` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sport_books`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`sport_books` ;

CREATE TABLE IF NOT EXISTS `mydb`.`sport_books` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `alias` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`wager_type_attributes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`wager_type_attributes` ;

CREATE TABLE IF NOT EXISTS `mydb`.`wager_type_attributes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `spread` TINYINT NULL DEFAULT 0,
  `ml` TINYINT NULL DEFAULT 0,
  `total` TINYINT NULL DEFAULT 0,
  `parlay` TINYINT NULL DEFAULT 0,
  `bet` TINYINT NULL DEFAULT 0,
  `teaser` TINYINT NULL DEFAULT 0,
  `future` TINYINT NULL DEFAULT 0,
  `prop` TINYINT NULL DEFAULT 0,
  `tournaments_id` INT NOT NULL,
  `wager_types_id` INT NOT NULL,
  `users_id` INT NOT NULL,
  `sport_books_id` INT NOT NULL,
  `wsp` TINYINT NULL,
  `exacta` TINYINT NULL,
  `trifecta` TINYINT NULL,
  `superfecta` TINYINT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_wager_type_attributes_tournaments_idx` (`tournaments_id` ASC),
  INDEX `fk_wager_type_attributes_wager_types1_idx` (`wager_types_id` ASC),
  INDEX `fk_wager_type_attributes_users1_idx` (`users_id` ASC),
  INDEX `fk_wager_type_attributes_sport_books1_idx` (`sport_books_id` ASC),
  CONSTRAINT `fk_wager_type_attributes_tournaments`
    FOREIGN KEY (`tournaments_id`)
    REFERENCES `mydb`.`tournaments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_wager_types1`
    FOREIGN KEY (`wager_types_id`)
    REFERENCES `mydb`.`wager_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_sport_books1`
    FOREIGN KEY (`sport_books_id`)
    REFERENCES `mydb`.`sport_books` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`wager_limits`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`wager_limits` ;

CREATE TABLE IF NOT EXISTS `mydb`.`wager_limits` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `wager_limitscol` VARCHAR(45) NULL,
  `wager_types_id` INT NOT NULL,
  `users_id` INT NOT NULL,
  `tournaments_id` INT NOT NULL,
  `spread` TINYINT NULL,
  `ml` TINYINT NULL,
  `total` TINYINT NULL,
  `parlay` TINYINT NULL,
  `bet` TINYINT NULL,
  `teaster` TINYINT NULL,
  `future` TINYINT NULL,
  `prop` TINYINT NULL,
  `wsp` TINYINT NULL,
  `exacta` TINYINT NULL,
  `trifecta` TINYINT NULL,
  `superfecta` TINYINT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_wager_limits_wager_types1_idx` (`wager_types_id` ASC),
  INDEX `fk_wager_limits_users1_idx` (`users_id` ASC),
  INDEX `fk_wager_limits_tournaments1_idx` (`tournaments_id` ASC),
  CONSTRAINT `fk_wager_limits_wager_types1`
    FOREIGN KEY (`wager_types_id`)
    REFERENCES `mydb`.`wager_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_limits_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_limits_tournaments1`
    FOREIGN KEY (`tournaments_id`)
    REFERENCES `mydb`.`tournaments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`limitions_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`limitions_types` ;

CREATE TABLE IF NOT EXISTS `mydb`.`limitions_types` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `alias` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`game_circles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`game_circles` ;

CREATE TABLE IF NOT EXISTS `mydb`.`game_circles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `spread` INT NULL,
  `ml` INT NULL,
  `total` INT NULL,
  `1st_half_spread` INT NULL,
  `1st_half_ml` INT NULL,
  `1st_half_total` INT NULL,
  `limitions_types_id` INT NOT NULL,
  `users_id` INT NOT NULL,
  `tournaments_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_game_circles_limitions_types1_idx` (`limitions_types_id` ASC),
  INDEX `fk_game_circles_users1_idx` (`users_id` ASC),
  INDEX `fk_game_circles_tournaments1_idx` (`tournaments_id` ASC),
  CONSTRAINT `fk_game_circles_limitions_types1`
    FOREIGN KEY (`limitions_types_id`)
    REFERENCES `mydb`.`limitions_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_circles_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_circles_tournaments1`
    FOREIGN KEY (`tournaments_id`)
    REFERENCES `mydb`.`tournaments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`agent_properties`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`agent_properties` ;

CREATE TABLE IF NOT EXISTS `mydb`.`agent_properties` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `commission_rate` INT NULL,
  `red_ figures` INT NULL,
  `set_default_sportsbook` TINYINT NULL,
  `change_credit_limit` TINYINT NULL,
  `have_red` TINYINT NULL,
  `player_discount` TINYINT NULL,
  `offer_freeplay` TINYINT NULL,
  `roll_over_existing_balance` TINYINT NULL,
  `shade_players` TINYINT NULL,
  `circle_sharp_players` TINYINT NULL,
  `change_limits_up_to_masters_settings` TINYINT NULL,
  `modify_max_win_up_to_masters_limits` TINYINT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_agent_properties_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_agent_properties_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`horses_park`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`horses_park` ;

CREATE TABLE IF NOT EXISTS `mydb`.`horses_park` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `alias` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`horses_wager_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`horses_wager_type` ;

CREATE TABLE IF NOT EXISTS `mydb`.`horses_wager_type` (
  `id` INT NOT NULL,
  `wsp` TINYINT NULL,
  `exacta` TINYINT NULL,
  `trifecta` TINYINT NULL,
  `superfecta` TINYINT NULL,
  `horses_park_id` INT NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_horses_wager_type_horses_park1_idx` (`horses_park_id` ASC),
  INDEX `fk_horses_wager_type_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_horses_wager_type_horses_park1`
    FOREIGN KEY (`horses_park_id`)
    REFERENCES `mydb`.`horses_park` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_horses_wager_type_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`horses_wager_limit`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`horses_wager_limit` ;

CREATE TABLE IF NOT EXISTS `mydb`.`horses_wager_limit` (
  `id` INT NOT NULL,
  `wsp` TINYINT NULL,
  `exacta` TINYINT NULL,
  `trifecta` TINYINT NULL,
  `superfecta` TINYINT NULL,
  `horses_park_id` INT NOT NULL,
  `users_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_horses_wager_type_horses_park1_idx` (`horses_park_id` ASC),
  INDEX `fk_horses_wager_type_users1_idx` (`users_id` ASC),
  CONSTRAINT `fk_horses_wager_type_horses_park10`
    FOREIGN KEY (`horses_park_id`)
    REFERENCES `mydb`.`horses_park` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_horses_wager_type_users10`
    FOREIGN KEY (`users_id`)
    REFERENCES `mydb`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;