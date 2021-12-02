-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2021 às 23:18
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancotcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pubs`
--

CREATE TABLE `pubs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `dataa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pubs`
--

INSERT INTO `pubs` (`id`, `user`, `texto`, `imagem`, `dataa`) VALUES
(27, 'hitzy', 'OMG!', '', '2021-11-29'),
(28, 'hitzy', 'Meu deus', '', '2021-11-29'),
(29, 'hitzy', 'Mano do ceu', '', '2021-11-29'),
(33, 'duduz', 'pinto', '', '2021-12-01'),
(34, 'duduz', 'teste imagem', 'gato.jpg', '2021-12-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usu_name` varchar(50) NOT NULL,
  `usu_mail` varchar(50) NOT NULL,
  `usu_nick` varchar(20) NOT NULL,
  `usu_img` text NOT NULL,
  `usu_pass` varchar(20) NOT NULL,
  `usu_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usu_name`, `usu_mail`, `usu_nick`, `usu_img`, `usu_pass`, `usu_date`) VALUES
(1, 'gustavo', 'xtremenoobs@hotmail.com', 'Ayrton Senna', '', '123456789', '2021-11-30'),
(2, 'hitzy', 'guga.spfc.guga@gmail.com', 'Gustavo Fernandes', 'perfil.jpg', 'gustavo1234', '2002-05-11'),
(3, 'duduz', 'dudu@gmail.com', 'Eduardo Pio', '', 'dudu123456', '2021-11-28');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
