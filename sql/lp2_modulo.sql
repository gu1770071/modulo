-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2019 às 20:43
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp2_modulo`
--
CREATE DATABASE IF NOT EXISTS `lp2_modulo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lp2_modulo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco_produto`
--

CREATE TABLE IF NOT EXISTS `preco_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compra` int(11) NOT NULL,
  `fixo` int(11) NOT NULL,
  `lucro` int(11) NOT NULL,
  `preco` float NOT NULL,
  `produto_id` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefa_turma`
--

CREATE TABLE IF NOT EXISTS `tarefa_turma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) NOT NULL,
  `prazo` date NOT NULL,
  `descricao` varchar(512) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tarefa_turma`
--

INSERT INTO `tarefa_turma` (`id`, `titulo`, `prazo`, `descricao`, `turma_id`, `deleted`, `last_modified`) VALUES
(1, 'Atividade 01', '2019-06-05', 'Uma tarefa bem difícil', 5, 0, '2019-06-22 01:59:53'),
(3, 'Tarefa muito atrasada', '2019-06-03', 'Caso de reprovar o aluno', 7, 0, '2019-06-22 01:59:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
