-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clientes` DEFAULT CHARACTER SET utf8 ;
USE `clientes` ;

-- -----------------------------------------------------
-- Table `client`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clientes`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_cliente` VARCHAR(255) NULL,
  `email_cliente` VARCHAR(255) NULL,
  `telefone_cliente` VARCHAR(13) NULL,
  `senha_cliente` VARCHAR(255) NULL,
  `data_nasc_cliente` DATE NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
