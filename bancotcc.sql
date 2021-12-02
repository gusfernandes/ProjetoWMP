-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2021 às 20:10
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(33, 'hitzy', 'alo\r\n', '', '2021-11-29'),
(34, 'hitzy', 'Teste daqui', 'image.jpeg', '2021-11-30'),
(35, 'hitzy', 'Teste sem imagem', '', '2021-11-30'),
(36, 'ayrton22', 'teste outra conta', '', '2021-11-30'),
(37, 'hitzy', 'fiz a atividade de bd de hoje!!!!', 'WhatsApp Image 2021-11-30 at 22.20.55.jpeg', '2021-12-02'),
(38, 'hitzy', 'Teste', '', '2021-12-02'),
(39, 'hitzy', 'Uai sÃ´', '', '2021-12-02');

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
(3, 'ayrton22', 'ayrton@gmail.com', 'Ayrton Senna', '3201933eu (2).jpg', '', '2001-02-20');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
