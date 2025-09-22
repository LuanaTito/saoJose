-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22/09/2025 às 04:48
-- Versão do servidor: 10.4.8-MariaDB
-- Versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saojose_contato`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(4) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
