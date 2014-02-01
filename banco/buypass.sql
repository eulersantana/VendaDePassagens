-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2014 at 01:15 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buypass`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `valor` float NOT NULL,
  `parcelas` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `valor_parcelas` varchar(45) NOT NULL,
  `passagem_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pagamentos_passagens1_idx` (`passagem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `tipo`, `valor`, `parcelas`, `status`, `valor_parcelas`, `passagem_id`) VALUES
(3, 'Leito', 100, 2, 0, '50', 4);

-- --------------------------------------------------------

--
-- Table structure for table `passagens`
--

CREATE TABLE IF NOT EXISTS `passagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(255) NOT NULL,
  `funcionario` varchar(255) NOT NULL,
  `rota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_passagens_rotas1_idx` (`rota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `passagens`
--

INSERT INTO `passagens` (`id`, `cliente`, `funcionario`, `rota_id`) VALUES
(4, 'Tercio', 'Funcionario', 3);

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE IF NOT EXISTS `promocoes` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `rota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_promossoes_rotas1_idx` (`rota_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rotas`
--

CREATE TABLE IF NOT EXISTS `rotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` varchar(255) NOT NULL,
  `fim` varchar(255) NOT NULL,
  `data_hora` datetime NOT NULL,
  `pontos` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rotas`
--

INSERT INTO `rotas` (`id`, `inicio`, `fim`, `data_hora`, `pontos`) VALUES
(3, 'Brasil', 'China', '2014-02-01 12:13:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `pontos` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `username`, `cpf`, `endereco`, `telefone`, `password`, `tipo`, `pontos`) VALUES
(1, 'Euler Santana', 'euler@ufba.br', '133.212.313-21', 'Travessa beira rio', '(12) 3132-1321', '0b8bf062317a8b29a340bf2f22c4e7d4bb2735a5', 'Funcionario', ''),
(2, 'Marcos', 'marcos@ufba.br', '212.313.213-21', 'Costa Azul', '(13) 2123-1321', '0b8bf062317a8b29a340bf2f22c4e7d4bb2735a5', 'Cliente', ''),
(3, 'Tercio', 'tercio', '122.323.123-12', 'udiashsdiah', '(28) 4236-4237', '76be0a174251dc3b4f18840c6816d03582a25e44', 'Funcionario', '');

-- --------------------------------------------------------

--
-- Table structure for table `veiculos`
--

CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `poltronas_livre` int(11) NOT NULL DEFAULT '0',
  `poltronas_ocupadas` int(11) NOT NULL DEFAULT '0',
  `rota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_veiculos_rotas1_idx` (`rota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `veiculos`
--

INSERT INTO `veiculos` (`id`, `tipo`, `poltronas_livre`, `poltronas_ocupadas`, `rota_id`) VALUES
(4, 'leito', 1, 1, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `fk_pagamentos_passagens1` FOREIGN KEY (`passagem_id`) REFERENCES `passagens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `passagens`
--
ALTER TABLE `passagens`
  ADD CONSTRAINT `fk_passagens_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD CONSTRAINT `fk_promossoes_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `fk_veiculos_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
