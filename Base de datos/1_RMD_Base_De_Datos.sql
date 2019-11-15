-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema RMD
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema RMD
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `RMD` DEFAULT CHARACTER SET utf8 ;
USE `RMD` ;

-- -----------------------------------------------------
-- Table `RMD`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `Registro` DATE NOT NULL,
  `Correo` VARCHAR(20) NOT NULL,
  `Nombre` VARCHAR(20) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Fecha_Nacimiento` DATE NOT NULL,
  `Telefono` VARCHAR(10) NULL,
  `Password` VARCHAR(50) NOT NULL,
  `Usuario` VARCHAR(20) NOT NULL,
  `Pais` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  `Ciudad` VARCHAR(45) NULL,
  `Fotografia` VARCHAR(45) NULL,
  `Genero` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Coordinador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Coordinador` (
  `Usuario_idUsuario` INT NOT NULL,
  `Coordinador_Usuario_idUsuario` INT NULL,
  `Nivel` VARCHAR(45) NULL,
  `Escuela_de_procedencia` VARCHAR(45) NULL,
  `Matricula` VARCHAR(45) NULL,
  PRIMARY KEY (`Usuario_idUsuario`),
  INDEX `fk_Coordinador_Usuario_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Coordinador_Coordinador1_idx` (`Coordinador_Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Coordinador_Usuario`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Coordinador_Coordinador1`
    FOREIGN KEY (`Coordinador_Usuario_idUsuario`)
    REFERENCES `RMD`.`Coordinador` (`Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Profesor` (
  `Usuario_idUsuario` INT NOT NULL,
  `Coordinador_Usuario_idUsuario` INT NULL,
  `Nivel` VARCHAR(45) NULL,
  `Escuela_de_Procedencia` VARCHAR(45) NULL,
  `Matricula` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`),
  INDEX `fk_Profesor_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Profesor_Coordinador1_idx` (`Coordinador_Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Profesor_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Profesor_Coordinador1`
    FOREIGN KEY (`Coordinador_Usuario_idUsuario`)
    REFERENCES `RMD`.`Coordinador` (`Usuario_idUsuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Asignatura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Asignatura` (
  `idAsignatura` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idAsignatura`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Archivo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Archivo` (
  `idArchivo` INT NOT NULL,
  `Coordinador_Usuario_idUsuario` INT NULL,
  `Profesor_Usuario_idUsuario` INT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` TEXT(200) NULL,
  `Asignatura_idAsignatura` INT NOT NULL,
  `Ubicacion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idArchivo`),
  INDEX `fk_Archivo_Coordinador1_idx` (`Coordinador_Usuario_idUsuario` ASC),
  INDEX `fk_Archivo_Profesor1_idx` (`Profesor_Usuario_idUsuario` ASC),
  INDEX `fk_Archivo_Asignatura1_idx` (`Asignatura_idAsignatura` ASC),
  CONSTRAINT `fk_Archivo_Coordinador1`
    FOREIGN KEY (`Coordinador_Usuario_idUsuario`)
    REFERENCES `RMD`.`Coordinador` (`Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Profesor1`
    FOREIGN KEY (`Profesor_Usuario_idUsuario`)
    REFERENCES `RMD`.`Profesor` (`Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Archivo_Asignatura1`
    FOREIGN KEY (`Asignatura_idAsignatura`)
    REFERENCES `RMD`.`Asignatura` (`idAsignatura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Mensaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Mensaje` (
  `idMensaje` INT NOT NULL,
  `Contenido` TEXT(612) NOT NULL,
  PRIMARY KEY (`idMensaje`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Comentario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Comentario` (
  `idComentario` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Archivo_idArchivo` INT NOT NULL,
  `Fecha` DATETIME NOT NULL,
  `Mensaje` TEXT(612) NOT NULL,
  PRIMARY KEY (`idComentario`, `Usuario_idUsuario`, `Archivo_idArchivo`),
  INDEX `fk_Comentario_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Comentario_Archivo1_idx` (`Archivo_idArchivo` ASC),
  CONSTRAINT `fk_Comentario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comentario_Archivo1`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Alumno` (
  `Usuario_idUsuario` INT NOT NULL,
  `Escuela` VARCHAR(45) NULL,
  PRIMARY KEY (`Usuario_idUsuario`),
  INDEX `fk_Alumno_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Alumno_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Video`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Video` (
  `Archivo_idArchivo` INT NOT NULL,
  `Duracion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Archivo_idArchivo`),
  INDEX `fk_Video_Archivo1_idx` (`Archivo_idArchivo` ASC),
  CONSTRAINT `fk_Video_Archivo1`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Tipo` (
  `idTipo` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idTipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Documento` (
  `Archivo_idArchivo` INT NOT NULL,
  `Tipo_idTipo` INT NOT NULL,
  PRIMARY KEY (`Archivo_idArchivo`),
  INDEX `fk_Documento_Archivo1_idx` (`Archivo_idArchivo` ASC),
  INDEX `fk_Documento_Tipo1_idx` (`Tipo_idTipo` ASC),
  CONSTRAINT `fk_Documento_Archivo1`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Documento_Tipo1`
    FOREIGN KEY (`Tipo_idTipo`)
    REFERENCES `RMD`.`Tipo` (`idTipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Cuestionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Cuestionario` (
  `Archivo_idArchivo` INT NOT NULL,
  PRIMARY KEY (`Archivo_idArchivo`),
  INDEX `fk_Cuestionario_Archivo1_idx` (`Archivo_idArchivo` ASC),
  CONSTRAINT `fk_Cuestionario_Archivo1`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Mensaje_Enviado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Mensaje_Enviado` (
  `Usuario_idUsuario` INT NULL,
  `Mensaje_idMensaje` INT NULL,
  `Fecha` DATETIME NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Mensaje_idMensaje`),
  INDEX `fk_Usuario_has_Mensaje_Mensaje1_idx` (`Mensaje_idMensaje` ASC),
  INDEX `fk_Usuario_has_Mensaje_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Mensaje_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Mensaje_Mensaje1`
    FOREIGN KEY (`Mensaje_idMensaje`)
    REFERENCES `RMD`.`Mensaje` (`idMensaje`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Mensaje_Recibido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Mensaje_Recibido` (
  `Usuario_idUsuario` INT NULL,
  `Mensaje_idMensaje` INT NULL,
  `Fecha` DATETIME NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Mensaje_idMensaje`),
  INDEX `fk_Usuario_has_Mensaje_Mensaje2_idx` (`Mensaje_idMensaje` ASC),
  INDEX `fk_Usuario_has_Mensaje_Usuario2_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Mensaje_Usuario2`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Mensaje_Mensaje2`
    FOREIGN KEY (`Mensaje_idMensaje`)
    REFERENCES `RMD`.`Mensaje` (`idMensaje`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Archivo_Visto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Archivo_Visto` (
  `Usuario_idUsuario` INT NOT NULL,
  `Archivo_idArchivo` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Archivo_idArchivo`),
  INDEX `fk_Usuario_has_Archivo_Archivo1_idx` (`Archivo_idArchivo` ASC),
  INDEX `fk_Usuario_has_Archivo_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Archivo_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Archivo_Archivo1`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Archivo_Guardado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Archivo_Guardado` (
  `Usuario_idUsuario` INT NOT NULL,
  `Archivo_idArchivo` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Archivo_idArchivo`),
  INDEX `fk_Usuario_has_Archivo_Archivo2_idx` (`Archivo_idArchivo` ASC),
  INDEX `fk_Usuario_has_Archivo_Usuario2_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Archivo_Usuario2`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Archivo_Archivo2`
    FOREIGN KEY (`Archivo_idArchivo`)
    REFERENCES `RMD`.`Archivo` (`idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Documento_Descargado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Documento_Descargado` (
  `Usuario_idUsuario` INT NOT NULL,
  `Documento_Archivo_idArchivo` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`, `Documento_Archivo_idArchivo`),
  INDEX `fk_Usuario_has_Documento_Documento1_idx` (`Documento_Archivo_idArchivo` ASC),
  INDEX `fk_Usuario_has_Documento_Usuario1_idx` (`Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Usuario_has_Documento_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `RMD`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Documento_Documento1`
    FOREIGN KEY (`Documento_Archivo_idArchivo`)
    REFERENCES `RMD`.`Documento` (`Archivo_idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Cuestionario_Resuelto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Cuestionario_Resuelto` (
  `Alumno_Usuario_idUsuario` INT NOT NULL,
  `Cuestionario_Archivo_idArchivo` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  PRIMARY KEY (`Alumno_Usuario_idUsuario`, `Cuestionario_Archivo_idArchivo`),
  INDEX `fk_Alumno_has_Cuestionario_Cuestionario1_idx` (`Cuestionario_Archivo_idArchivo` ASC),
  INDEX `fk_Alumno_has_Cuestionario_Alumno1_idx` (`Alumno_Usuario_idUsuario` ASC),
  CONSTRAINT `fk_Alumno_has_Cuestionario_Alumno1`
    FOREIGN KEY (`Alumno_Usuario_idUsuario`)
    REFERENCES `RMD`.`Alumno` (`Usuario_idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumno_has_Cuestionario_Cuestionario1`
    FOREIGN KEY (`Cuestionario_Archivo_idArchivo`)
    REFERENCES `RMD`.`Cuestionario` (`Archivo_idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Op_Correcta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Op_Correcta` (
  `idCorrecta` INT NOT NULL,
  `Opcion` INT NOT NULL,
  `Valor` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idCorrecta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Op_Incorrecta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Op_Incorrecta` (
  `idIncorrecta` INT NOT NULL,
  `Opcion` INT NOT NULL,
  `Valor` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`idIncorrecta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RMD`.`Pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RMD`.`Pregunta` (
  `idPregunta` INT NOT NULL,
  `Numero` INT NOT NULL,
  `Preguntacol` VARCHAR(256) NOT NULL,
  `Correcta_idCorrecta` INT NOT NULL,
  `Incorrecta_idIncorrecta` INT NOT NULL,
  `Cuestionario_Archivo_idArchivo` INT NOT NULL,
  PRIMARY KEY (`idPregunta`, `Correcta_idCorrecta`, `Incorrecta_idIncorrecta`),
  INDEX `fk_Pregunta_Correcta1_idx` (`Correcta_idCorrecta` ASC),
  INDEX `fk_Pregunta_Incorrecta1_idx` (`Incorrecta_idIncorrecta` ASC),
  INDEX `fk_Pregunta_Cuestionario1_idx` (`Cuestionario_Archivo_idArchivo` ASC),
  CONSTRAINT `fk_Pregunta_Correcta1`
    FOREIGN KEY (`Correcta_idCorrecta`)
    REFERENCES `RMD`.`Op_Correcta` (`idCorrecta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pregunta_Incorrecta1`
    FOREIGN KEY (`Incorrecta_idIncorrecta`)
    REFERENCES `RMD`.`Op_Incorrecta` (`idIncorrecta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pregunta_Cuestionario1`
    FOREIGN KEY (`Cuestionario_Archivo_idArchivo`)
    REFERENCES `RMD`.`Cuestionario` (`Archivo_idArchivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
