-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2021 às 15:20
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cesta`
--

DROP TABLE IF EXISTS `cesta`;
CREATE TABLE `cesta` (
  `sessionID` varchar(100) NOT NULL,
  `codigoCliente` int(11) NOT NULL,
  `codigoProduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorUnitario` float NOT NULL,
  `valorTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cesta`
--

INSERT INTO `cesta` (`sessionID`, `codigoCliente`, `codigoProduto`, `quantidade`, `valorUnitario`, `valorTotal`) VALUES
('0', 0, 0, 1, 0, 0),
('12', 1, 1, 1, 1, 0),
('12987j', 1, 1, 1, 1, 0),
('1992', 1, 1, 1, 1, 0),
('33333', 22, 52, 1, 44, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`, `endereco`) VALUES
(20, 'amandas', 'amanda@amanda.com', 'amanda', 'amanda'),
(22, 'matheus', 'matheus@matheus.com', 'matheus', 'Matheus'),
(23, 'djane', 'djane@djane.com', 'djane', 'djanex');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` float NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `valor`, `destaque`, `categoria`, `quantidade`, `imagem`) VALUES
(3, 'Camiseta 1', 'Camiseta Item 1', 49, 1, 'camiseta', 0, '/assets/roupas/camiseta1.png'),
(4, 'Camiseta 2', 'Camiseta Item 2', 49, 1, 'camiseta', 0, '/assets/roupas/camiseta2.png'),
(5, 'Camiseta 3', 'Camiseta Item 3', 49, 1, 'camiseta', 0, '/assets/roupas/camiseta3.png'),
(6, 'Calça 1', 'Calça Item 1', 49, 1, 'calça', 0, '/assets/roupas/calça1.png'),
(7, 'Calça 2', 'Calça Item 2', 49, 1, 'calça', 0, '/assets/roupas/calça2.png'),
(8, 'Calça 3', 'Calça Item 3', 49, 1, 'calça', 0, '/assets/roupas/calça3.png'),
(9, 'Casaco 1', 'Casaco Item 1', 49, 1, 'casaco', 0, '/assets/roupas/casaco1.png'),
(10, 'Casaco 2', 'Casaco Item 2', 49, 1, 'casaco', 0, '/assets/roupas/casaco2.png'),
(11, 'Casaco 3', 'Casaco Item 3', 49, 1, 'casaco', 0, '/assets/roupas/casaco3.png'),
(12, 'Moleton 1', 'Moleton Item 1', 49, 1, 'moleton', 0, '/assets/roupas/moleton1.png'),
(13, 'Moleton 2', 'Moleton Item 2', 49, 1, 'moleton', 0, '/assets/roupas/moleton2.png'),
(14, 'Moleton 3', 'Moleton Item 3', 49, 1, 'moleton', 0, '/assets/roupas/moleton3.png'),
(15, 'Vestido 1', 'Vestido Item 1', 49, 1, 'vestido', 0, '/assets/roupas/vestido1.png'),
(16, 'Vestido 2', 'Vestido Item 2', 49, 1, 'vestido', 0, '/assets/roupas/vestido2.png'),
(17, 'Vestido 3', 'Vestido Item 3', 49, 1, 'vestido', 0, '/assets/roupas/vestido3.png'),
(18, 'Destaque 1', 'Produto em destaque 1', 99, 0, 'destaque', 1, '/assets/roupas/1.png'),
(19, 'Destaque 2', 'Produto em destaque 2', 99, 0, 'destaque', 1, '/assets/roupas/2.png'),
(20, 'Destaque 3', 'Produto em destaque 3', 99, 0, 'destaque', 1, '/assets/roupas/3.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`sessionID`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
