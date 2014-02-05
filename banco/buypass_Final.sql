SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `buypass` DEFAULT CHARACTER SET latin1 ;
USE `buypass` ;

-- -----------------------------------------------------
-- Table `buypass`.`pagamentos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`pagamentos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `tipo` VARCHAR(45) NOT NULL ,
  `parcelas` INT(11) NULL DEFAULT NULL ,
  `status` TINYINT(1) NOT NULL DEFAULT '0' ,
  `valor_parcelas` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `buypass`.`rotas`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`rotas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `inicio` VARCHAR(255) NOT NULL ,
  `fim` VARCHAR(255) NOT NULL ,
  `data_hora` DATETIME NOT NULL ,
  `pontos` INT(11) NULL DEFAULT '0' ,
  `valor` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `buypass`.`veiculos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`veiculos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `tipo` VARCHAR(45) NOT NULL ,
  `poltronas_livre` INT(11) NOT NULL DEFAULT '0' ,
  `poltronas_ocupadas` INT(11) NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `buypass`.`passagens`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`passagens` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `rota_id` INT(11) NOT NULL ,
  `cliente` VARCHAR(255) NOT NULL ,
  `funcionario` VARCHAR(255) NOT NULL ,
  `pagamento_id` INT(11) NOT NULL ,
  `veiculo_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`, `rota_id`) ,
  INDEX `fk_passagens_pagamentos1_idx` (`pagamento_id` ASC) ,
  INDEX `fk_passagens_rotas1_idx` (`rota_id` ASC) ,
  INDEX `fk_passagens_veiculos1_idx` (`veiculo_id` ASC) ,
  CONSTRAINT `fk_passagens_pagamentos1`
    FOREIGN KEY (`pagamento_id` )
    REFERENCES `buypass`.`pagamentos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_passagens_rotas1`
    FOREIGN KEY (`rota_id` )
    REFERENCES `buypass`.`rotas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_passagens_veiculos1`
    FOREIGN KEY (`veiculo_id` )
    REFERENCES `buypass`.`veiculos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `buypass`.`promocoes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`promocoes` (
  `id` INT(11) NOT NULL ,
  `descricao` VARCHAR(255) NOT NULL ,
  `rota_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_promossoes_rotas1_idx` (`rota_id` ASC) ,
  CONSTRAINT `fk_promossoes_rotas1`
    FOREIGN KEY (`rota_id` )
    REFERENCES `buypass`.`rotas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `buypass`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(255) NOT NULL ,
  `username` VARCHAR(45) NOT NULL ,
  `cpf` VARCHAR(45) NOT NULL ,
  `endereco` VARCHAR(45) NOT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `tipo` VARCHAR(45) NOT NULL ,
  `pontos` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `buypass`.`compras`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `buypass`.`compras` (
  `user_id` INT(11) NOT NULL ,
  `passagem_id` INT(11) NOT NULL ,
  `passagem_rota_id` INT(11) NOT NULL ,
  INDEX `fk_compras_users1_idx` (`user_id` ASC) ,
  INDEX `fk_compras_passagens1_idx` (`passagem_id` ASC, `passagem_rota_id` ASC) ,
  CONSTRAINT `fk_compras_users1`
    FOREIGN KEY (`user_id` )
    REFERENCES `buypass`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_compras_passagens1`
    FOREIGN KEY (`passagem_id` , `passagem_rota_id` )
    REFERENCES `buypass`.`passagens` (`id` , `rota_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `buypass` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
