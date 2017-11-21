-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 21-Nov-2017 às 03:17
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `felipesilva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_corrida`
--

CREATE TABLE `tb_corrida` (
  `id` int(11) NOT NULL,
  `motorista` varchar(60) NOT NULL,
  `passageiro` varchar(255) NOT NULL,
  `vlcorrida` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_corrida`
--

INSERT INTO `tb_corrida` (`id`, `motorista`, `passageiro`, `vlcorrida`) VALUES
(6, 'Felipe 1', 'Giovane de Lucas Haddad', 10.75),
(7, 'Maria 1', 'Felipe da Silva Liberal', 10.6),
(8, 'Carlos 1', 'Giovane de Lucas Haddad', 17.5),
(9, 'Felipe da Silva Liberal', 'Giovane de Lucas Haddad', 22.5),
(10, 'Felipe da Silva Liberal', 'Carlos', 25.6),
(11, 'Carlos', 'Giovane de Lucas Haddad', 30.8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_motorista`
--

CREATE TABLE `tb_motorista` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `datanasc` char(10) NOT NULL,
  `cpf` char(14) NOT NULL,
  `mcar` char(40) NOT NULL,
  `status` char(7) NOT NULL,
  `sexo` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_motorista`
--

INSERT INTO `tb_motorista` (`id`, `nome`, `datanasc`, `cpf`, `mcar`, `status`, `sexo`) VALUES
(22, 'Felipe da Silva Liberal', '10-08-1993', '413.813.958-30', 'Corsa', 'Ativo', 'Masculino'),
(23, 'Felipe', '10-08-1993', '994.656.638-91', 'Uno', 'Inativo', 'Masculino'),
(24, 'Carlos', '18-09-1952', '994.656.638-91', 'Gol', 'Ativo', 'Masculino'),
(25, 'Felipe', '10-08-1993', '413.813.958-30', 'Uno', 'Ativo', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_passageiro`
--

CREATE TABLE `tb_passageiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `datanasc` char(10) NOT NULL,
  `cpf` char(14) NOT NULL,
  `sexo` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_passageiro`
--

INSERT INTO `tb_passageiro` (`id`, `nome`, `datanasc`, `cpf`, `sexo`) VALUES
(13, 'Giovane de Lucas Haddad', '22-11-2017', '413.813.958-30', 'Masculino'),
(14, 'Felipe da Silva Liberal', '18-11-2017', '994.656.638-91', 'Masculino'),
(15, 'Felipe', '10-08-1993', '994.656.638-91', 'Masculino'),
(16, 'Carlos', '18-09-1952', '994.656.638-91', 'Masculino'),
(17, 'Felipe da Silva Liberal', '10-08-1993', '413.813.958-30', 'Masculino'),
(18, 'Carlos', '18-09-1952', '994.656.638-91', 'Masculino'),
(19, 'Carlos', '18-09-1952', '994.656.638-91', 'Masculino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_corrida`
--
ALTER TABLE `tb_corrida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_passageiro`
--
ALTER TABLE `tb_passageiro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_corrida`
--
ALTER TABLE `tb_corrida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_passageiro`
--
ALTER TABLE `tb_passageiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
