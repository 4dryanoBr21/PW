-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/12/2025 às 23:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_do_brasil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `imagem`, `nome`, `preco`, `descricao`) VALUES
(1, 'iphone', 'iPhone 16 PRO MAX', 'R$ 10.000,00', 'O iPhone 15 possui tela Super Retina XDR de 6,1 polegadas com Dynamic Island, processador A16 Bionic, e sistema de câmera dupla com sensor principal de 48MP. Ele é equipado com porta USB-C, estrutura de alumínio e vidro colorido por infusão, e está disponível em capacidades de 128 GB, 256 GB e 512 GB. '),
(2, 'maquina_de_lavar', 'Maquina de Lavar Roupa', 'R$ 2.000,00', ''),
(3, 'premiere', 'Adobe Premiere PRO 2025', 'R$ 120,00', ''),
(4, 'notebook', 'Notebook Lenovo', 'R$ 2.000,00', ''),
(5, 'racao', 'Ração de Gato', 'R$ 150,00', ''),
(6, 'windows', 'Chave do Windows 11', 'R$ 1.500,00', ''),
(7, 'teclado', 'Teclado Gamer', 'R$ 200,00', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `cpf`, `data_nascimento`, `email`) VALUES
(3, 'Adriano Canto Junior', 'adriano.jr', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 11010591924, '2006-07-17', 'adriano@email.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
