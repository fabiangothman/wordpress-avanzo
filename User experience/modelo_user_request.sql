-- -----------------------------------------------------
-- Table `landing_user_request_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `landing_user_request_info` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipo_documento` VARCHAR(15) NOT NULL,
  `numero_documento` VARCHAR(50) NOT NULL,
  `nombres` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(100) NOT NULL,
  `ciudad` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `fecha_nacimiento` DATE NOT NULL,
  `empresa` VARCHAR(50) NOT NULL,
  `antiguedad` VARCHAR(50) NOT NULL,
  `tipo_contrato` VARCHAR(50) NOT NULL,
  `renovaciones` INT NOT NULL,
  `fecha_renovacion` DATE NOT NULL,
  `acepta_politica` BIT NOT NULL DEFAULT 1,
  `acepta_suministrar` BIT NOT NULL DEFAULT 1,
  `inserted_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;