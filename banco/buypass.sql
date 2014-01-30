-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 30/01/2014 às 13:55:51
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `buypass`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE IF NOT EXISTS `pagamentos` (
  `tipo` varchar(45) NOT NULL,
  `valor` float NOT NULL,
  `parcelas` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `valor_parcelas` varchar(45) NOT NULL,
  `passagem_id` int(11) NOT NULL,
  KEY `fk_pagamentos_passagens1_idx` (`passagem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `passagens`
--

CREATE TABLE IF NOT EXISTS `passagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(255) NOT NULL,
  `funcionario` varchar(255) NOT NULL,
  `rota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_passagens_rotas1_idx` (`rota_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
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
-- Estrutura da tabela `rotas`
--

CREATE TABLE IF NOT EXISTS `rotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` varchar(255) NOT NULL,
  `fim` varchar(255) NOT NULL,
  `data_hora` datetime NOT NULL,
  `pontos` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `rotas`
--

INSERT INTO `rotas` (`id`, `inicio`, `fim`, `data_hora`, `pontos`) VALUES
(1, 'Itapua', 'Barra', '2014-01-28 18:20:00', 20),
(2, 'Barra', 'Salvador', '2014-01-29 14:39:00', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `username`, `cpf`, `endereco`, `telefone`, `password`, `tipo`, `pontos`) VALUES
(1, 'Euler Santana', 'euler@ufba.br', '133.212.313-21', 'Travessa beira rio', '(12) 3132-1321', '0b8bf062317a8b29a340bf2f22c4e7d4bb2735a5', 'Funcionario', ''),
(2, 'Marcos', 'marcos@ufba.br', '212.313.213-21', 'Costa Azul', '(13) 2123-1321', '0b8bf062317a8b29a340bf2f22c4e7d4bb2735a5', 'Cliente', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `poltronas_livre` int(11) NOT NULL DEFAULT '0',
  `poltronas_ocupadas` int(11) NOT NULL DEFAULT '0',
  `rota_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_veiculos_rotas1_idx` (`rota_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `tipo`, `poltronas_livre`, `poltronas_ocupadas`, `rota_id`) VALUES
(1, 'Lindo', 50, 0, 1);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `fk_pagamentos_passagens1` FOREIGN KEY (`passagem_id`) REFERENCES `passagens` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `passagens`
--
ALTER TABLE `passagens`
  ADD CONSTRAINT `fk_passagens_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `promocoes`
--
ALTER TABLE `promocoes`
  ADD CONSTRAINT `fk_promossoes_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `fk_veiculos_rotas1` FOREIGN KEY (`rota_id`) REFERENCES `rotas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
