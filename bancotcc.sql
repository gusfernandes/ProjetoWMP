-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2021 às 18:12
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
-- Estrutura da tabela `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `de` varchar(200) NOT NULL,
  `para` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `imagem` text NOT NULL,
  `data` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`id`, `de`, `para`, `texto`, `imagem`, `data`, `status`) VALUES
(1, 'ayrton22', 'hitzy', 'ola amigo', '', '2021-12-04', 1),
(2, 'duduz', 'hitzy', 'carai borracha mano', 'gato.jpg', '2021-12-04', 1),
(3, 'ayrton22', 'hitzy', 'me responde', '', '2021-12-04', 1),
(4, 'hitzy', 'ayrton22', 'Oiii', '', '2021-12-05', 1),
(5, 'hitzy', 'ayrton22', 'tudo bem?', '', '2021-12-05', 1),
(6, 'ayrton22', 'hitzy', 'tudo!!!!', '', '2021-12-05', 1),
(7, 'yEmerson', 'hitzy', 'Salve mano! Tem vaga pra flex ainda? tenho interesse', '', '2021-12-05', 0);

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
(39, 'hitzy', 'Uai sÃ´', '', '2021-12-02'),
(40, 'duduz', 'Eita bixo que isso\r\n', '', '2021-12-04'),
(41, 'ayrton22', 'AlguÃ©m quer jogar algo?', '', '2021-12-05'),
(42, 'hitzy', 'AlguÃ©m flex lolzinho? to tentando subir de elo, quem quiser manda msg privada!!!', 'lolzinho.png', '2021-12-05'),
(43, 'yEmerson', 'Oii, sou novo aqui alguÃ©m quer jogar algo? valorant lolzinho ou cs???', '', '2021-12-05'),
(44, 'Gguiz', 'MINEZADA DOS CRIAS??????????????', '', '2021-12-05'),
(45, 'mercadalegria', 'O Melhor preÃ§o para os gamers!!!! Venha conhecer!', 'mercado.png', '2021-12-05');

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
(3, 'ayrton22', 'ayrton@gmail.com', 'Ayrton Senna', '3201933eu (2).jpg', 'ayrton1234', '2001-02-20'),
(4, 'duduz', 'duduz@gmail.com', 'Eduardo Pio', '', 'dudu12345', '2003-08-03'),
(5, 'yEmerson', 'emersonc@gmail.com', 'Emerson Cardoso', '', 'emerson12345', '2002-01-17'),
(6, 'Gguiz', 'gguizpaula@gmail.com', 'Guilherme Paula', '', 'gguiz12345', '1999-06-07'),
(7, 'mercadalegria', 'mercadinhosoalegria@gmail.com', 'Mercadinho SÃ³ Alegr', '', 'mercado123', '1967-07-03');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de tabela `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
