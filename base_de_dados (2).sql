-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Dez-2018 às 01:14
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base de dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `csenha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `cpf`, `senha`, `csenha`) VALUES
(1, 'daniela', 'leal', '044', '0123', ''),
(2, 'daniela', 'leal', '044', '0123', '0123'),
(3, 'Emily', 'Ximendes', '055', '055', ''),
(4, 'Daniela', 'Leal', '099', '099', ''),
(5, 'Teste', 'Teste', '000', '000', ''),
(6, 'Teste', 'Teste', '567', '567', ''),
(7, 'Teste', '1', '012', '012', ''),
(8, 'l', 'l', '777', '777', ''),
(9, 'Teste', '2', '333', '333', ''),
(10, 'j', 'j', '111', '111', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lembrete`
--

CREATE TABLE `lembrete` (
  `cadastro_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(11) NOT NULL,
  `assunto` text NOT NULL,
  `descricao` text NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lembrete`
--

INSERT INTO `lembrete` (`cadastro_id`, `data`, `hora`, `assunto`, `descricao`, `id_tutor`, `id_usuario`) VALUES
(5, '2018-12-29', '03:00', 'CafÃ©', '', 0, 0),
(6, '2018-12-29', '00:00', 'Dormir', '', 0, 0),
(7, '2018-12-21', '00:00', 'CafÃ©', '', 0, 0),
(8, '2018-12-21', '02:00', 'CafÃ©', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembrete`
--
ALTER TABLE `lembrete`
  ADD PRIMARY KEY (`cadastro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lembrete`
--
ALTER TABLE `lembrete`
  MODIFY `cadastro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
