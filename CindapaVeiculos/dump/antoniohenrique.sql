-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Dez-2021 às 17:03
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `antoniohenrique`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `chassi` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `ano` varchar(9) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `caracteristica1` varchar(30) NOT NULL,
  `caracteristica2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `chassi`, `marca`, `modelo`, `ano`, `placa`, `caracteristica1`, `caracteristica2`) VALUES
(10, '154298367', 'Mitsubishi', 'Lancer Evolution', '2002', 'GTX3090', 'TURBO', 'ESPORTE'),
(11, '559944', 'Mazda', 'MX3', '1993', 'GTX3050', 'TURBO', 'ESPORTE'),
(12, '559944', 'Honda', 'Civic', '2019', 'GTX3070', 'PARA CIDADE', 'PARA LONGAS VIAGENS'),
(13, '4149594', 'Honda', 'MX3', '2019', 'GTX3030', 'ESPORTE', 'TURBO'),
(19, '481591591', 'Volkswagem', 'Gol', '2006', 'GTX550', 'PARA CIDADE', 'ECONOMICO'),
(21, '18915916', 'Ferrari', 'F2000', '2016', '18918515', 'TURBO', 'ESPORTE'),
(22, '89748594596', 'Buggati', 'Veyron', '2012', 'GTX4050', 'ESPORTE', 'CLASSICO'),
(23, '4851485159159', 'Honda', 'Civic', '2020', 'GTX1050TI', 'PARA CIDADE', 'CLASSICO'),
(24, '5645941564156', 'Hyundai', 'HB20', '2020', 'GTX1070', 'PARA CIDADE', 'CLASSICO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
