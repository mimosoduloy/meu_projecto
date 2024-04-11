-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03/04/2024 às 18:05
-- Versão do servidor: 11.2.2-MariaDB
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: memories
--
CREATE DATABASE IF NOT EXISTS memories DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE memories;

-- --------------------------------------------------------

--
-- Estrutura para tabela cadavel
--

DROP TABLE IF EXISTS cadavel;
CREATE TABLE IF NOT EXISTS cadavel (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(30) DEFAULT NULL,
  bairro varchar(30) DEFAULT NULL,
  tell varchar(15) DEFAULT NULL,
  cemiterio int(11) NOT NULL,
  avenida varchar(10) DEFAULT NULL,
  sexo varchar(10) DEFAULT NULL,
  data_nasc date DEFAULT NULL,
  bi varchar(30) DEFAULT NULL,
  dh varchar(25) DEFAULT NULL,
  ft char(1) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY cemiterio (cemiterio)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela campa
--

DROP TABLE IF EXISTS campa;
CREATE TABLE IF NOT EXISTS campa (
  id_campa int(11) NOT NULL AUTO_INCREMENT,
  num_campa int(11) NOT NULL,
  PRIMARY KEY (id_campa)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela campa
--
select * from campa;
INSERT INTO campa (id_campa, num_campa) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);


-- --------------------------------------------------------

--
-- Estrutura para tabela campa_cem
--

DROP TABLE IF EXISTS campa_cem;
CREATE TABLE IF NOT EXISTS campa_cem (
  id_ca_cem int(11) NOT NULL AUTO_INCREMENT,
  cem int(11) NOT NULL,
  campa int(11) DEFAULT NULL,
  PRIMARY KEY (id_ca_cem),
  KEY cem (cem),
  KEY campa (campa)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
select * from campa_c;
--
-- Despejando dados para a tabela campa_cem
--
select * from campa_cem;
INSERT INTO campa_cem (id_ca_cem, cem, campa) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4),
(10, 2, 5),
(11, 3, 1),
(12, 3, 2),
(13, 3, 3),
(14, 3, 4),
(15, 3, 5),
(16, 4, 1),
(17, 4, 2),
(18, 4, 3),
(19, 4, 4),
(20, 4, 5),
(21, 5, 1),
(22, 5, 2),
(23, 5, 3),
(24, 5, 4),
(25, 5, 5),
(26, 6, 1),
(27, 6, 2);
(28, 6, 3);
(29, 6, 4);
(28, 6, 3);
select * from cadavel;
-- --------------------------------------------------------

--
-- Estrutura para tabela cem
--

DROP TABLE IF EXISTS cem;
CREATE TABLE IF NOT EXISTS cem (
  id_cem int(11) NOT NULL AUTO_INCREMENT,
  nome_cem varchar(50) NOT NULL,
  localizacao varchar(50) NOT NULL,
  PRIMARY KEY (id_cem)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela cem
--

INSERT INTO cem (id_cem, nome_cem, localizacao) VALUES
(1, 'Catorze', 'Cazenga'),
(2, 'Viana', 'Viana'),
(3, 'Santana', 'Kilamba Kiaxi');

-- --------------------------------------------------------

--
-- Estrutura para tabela quarteirao
--

DROP TABLE IF EXISTS quarteirao;
CREATE TABLE IF NOT EXISTS quarteirao (
  id_qua int(11) NOT NULL AUTO_INCREMENT,
  num_qua int(11) NOT NULL,
  PRIMARY KEY (id_qua)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela quarteirao
--

INSERT INTO quarteirao (id_qua, num_qua) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);
describe cadavel;
select * from quarteirao;
-- --------------------------------------------------------

--
-- Estrutura para tabela quarteirao_cem
--

DROP TABLE IF EXISTS quarteirao_cem;
CREATE TABLE IF NOT EXISTS quarteirao_cem (
  id_qt_cem int(11) NOT NULL AUTO_INCREMENT,
  cemiterio int(11) NOT NULL,
  quarteirao int(11) NOT NULL,
  PRIMARY KEY (id_qt_cem),
  KEY cemiterio (cemiterio),
  KEY quarteirao (quarteirao)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
select * from qu;
--
-- Despejando dados para a tabela quarteirao_cem
--
select * from quarteirao_cem;
INSERT INTO quarteirao_cem (id_qt_cem, cemiterio, quarteirao) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4),
(10, 2, 5),
(11, 3, 1),
(12, 3, 2),
(13, 3, 3),
(14, 3, 4),
(15, 3, 5);
COMMIT;
drop table quarteirao_cem;
delete from quarteirao_cem where id_qt_cem = 1 and 2 and 3 and 4 and 5;
select * from quarteirao_cem;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
