SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Rutas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Rutas` (
  `idRutas` INT NOT NULL COMMENT '',
  `Nombre` VARCHAR(45) NULL COMMENT '',
  `TiempoDeOperacion` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idRutas`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Estaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Estaciones` (
  `idEstaciones` INT NOT NULL COMMENT '',
  `Nombre` VARCHAR(45) NULL COMMENT '',
  `Latitud` VARCHAR(45) NULL COMMENT '',
  `Longitud` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idEstaciones`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rutas_has_Estaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Rutas_has_Estaciones` (
  `Rutas_idRutas` INT NOT NULL COMMENT '',
  `Estaciones_idEstaciones` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Rutas_idRutas`, `Estaciones_idEstaciones`)  COMMENT '',
  INDEX `fk_Rutas_has_Estaciones_Estaciones1_idx` (`Estaciones_idEstaciones` ASC)  COMMENT '',
  INDEX `fk_Rutas_has_Estaciones_Rutas_idx` (`Rutas_idRutas` ASC)  COMMENT '',
  CONSTRAINT `fk_Rutas_has_Estaciones_Rutas`
    FOREIGN KEY (`Rutas_idRutas`)
    REFERENCES `mydb`.`Rutas` (`idRutas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rutas_has_Estaciones_Estaciones1`
    FOREIGN KEY (`Estaciones_idEstaciones`)
    REFERENCES `mydb`.`Estaciones` (`idEstaciones`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Conductor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Conductor` (
  `idConductor` INT NOT NULL COMMENT '',
  `Nombre` VARCHAR(45) NULL COMMENT '',
  `Apellido` VARCHAR(45) NULL COMMENT '',
  `Sueldo` VARCHAR(45) NULL COMMENT '',
  `ARL` VARCHAR(45) BINARY NULL COMMENT '',
  `EPS` VARCHAR(45) NULL COMMENT '',
  `FechaDeNacimiento` DATE NULL COMMENT '',
  `RH` VARCHAR(45) NULL COMMENT '',
  `GrupoSanguineo` VARCHAR(45) NULL COMMENT '',
  `FechaVinculacion` DATE NULL COMMENT '',
  `Password` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idConductor`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Bus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Bus` (
  `idBus` INT NOT NULL COMMENT '',
  `Marca` VARCHAR(45) NULL COMMENT '',
  `Modelo` VARCHAR(45) NULL COMMENT '',
  `Placa` VARCHAR(45) NULL COMMENT '',
  `Propietario` VARCHAR(45) NULL COMMENT '',
  `Capacidad` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idBus`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Bus_has_Conductor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Bus_has_Conductor` (
  `Bus_idBus` INT NOT NULL COMMENT '',
  `Conductor_idConductor` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Bus_idBus`, `Conductor_idConductor`)  COMMENT '',
  INDEX `fk_Bus_has_Conductor_Conductor1_idx` (`Conductor_idConductor` ASC)  COMMENT '',
  INDEX `fk_Bus_has_Conductor_Bus1_idx` (`Bus_idBus` ASC)  COMMENT '',
  CONSTRAINT `fk_Bus_has_Conductor_Bus1`
    FOREIGN KEY (`Bus_idBus`)
    REFERENCES `mydb`.`Bus` (`idBus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bus_has_Conductor_Conductor1`
    FOREIGN KEY (`Conductor_idConductor`)
    REFERENCES `mydb`.`Conductor` (`idConductor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Monitores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Monitores` (
  `User` VARCHAR(45) NOT NULL COMMENT '',
  `Nombre` VARCHAR(45) NULL COMMENT '',
  `Password` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`User`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rutas_has_Bus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Rutas_has_Bus` (
  `Rutas_idRutas` INT NOT NULL COMMENT '',
  `Bus_idBus` INT NOT NULL COMMENT '',
  `HoraDeOperacion` TIMESTAMP NOT NULL COMMENT '',
  PRIMARY KEY (`Rutas_idRutas`, `Bus_idBus`, `HoraDeOperacion`)  COMMENT '',
  INDEX `fk_Rutas_has_Bus_Bus1_idx` (`Bus_idBus` ASC)  COMMENT '',
  INDEX `fk_Rutas_has_Bus_Rutas1_idx` (`Rutas_idRutas` ASC)  COMMENT '',
  CONSTRAINT `fk_Rutas_has_Bus_Rutas1`
    FOREIGN KEY (`Rutas_idRutas`)
    REFERENCES `mydb`.`Rutas` (`idRutas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rutas_has_Bus_Bus1`
    FOREIGN KEY (`Bus_idBus`)
    REFERENCES `mydb`.`Bus` (`idBus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
