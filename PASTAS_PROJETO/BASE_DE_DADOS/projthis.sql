-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2021 às 16:21
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projthis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `conta` varchar(20) NOT NULL,
  `agencia` varchar(20) NOT NULL,
  `nome_comp` varchar(40) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat_comunidade`
--

CREATE TABLE `chat_comunidade` (
  `id` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `criador` int(255) NOT NULL,
  `moderador` enum('sim','nao') NOT NULL DEFAULT 'nao',
  `praso_dell` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  `marcacao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `cep` int(20) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `horario` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `caminho` varchar(100) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `capa` varchar(50) NOT NULL,
  `visualizacoes` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `totais`
--

CREATE TABLE `totais` (
  `proj_id` int(11) NOT NULL,
  `dia` datetime DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `pico` datetime DEFAULT NULL,
  `user_rep` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `github` varchar(40) NOT NULL,
  `ultimo_saque` double NOT NULL,
  `sexo` enum('Masculino','Feminino','Nao Informado') NOT NULL DEFAULT 'Nao Informado'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vizualisacoes`
--

CREATE TABLE `vizualisacoes` (
  `proj_id` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vizu_mes`
--

CREATE TABLE `vizu_mes` (
  `vz_mes` int(11) DEFAULT NULL,
  `media` float DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `tudo` int(11) DEFAULT NULL,
  `proj_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `id` (`id`);

--
-- Índices para tabela `chat_comunidade`
--
ALTER TABLE `chat_comunidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projeto`
--
ALTER TABLE `projeto`
  ADD KEY `id` (`id`);

--
-- Índices para tabela `totais`
--
ALTER TABLE `totais`
  ADD KEY `proj_id` (`proj_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vizualisacoes`
--
ALTER TABLE `vizualisacoes`
  ADD KEY `proj_id` (`proj_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `vizu_mes`
--
ALTER TABLE `vizu_mes`
  ADD KEY `proj_id` (`proj_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chat_comunidade`
--
ALTER TABLE `chat_comunidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `totais`
--
ALTER TABLE `totais`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
