-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Out-2019 às 20:05
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reuniao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_eventos`
--

CREATE TABLE `admin_eventos` (
  `EvId` int(4) NOT NULL,
  `UId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `admin_eventos`
--

INSERT INTO `admin_eventos` (`EvId`, `UId`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `EvId` int(4) NOT NULL,
  `EvDate` date NOT NULL,
  `EvStart` time NOT NULL,
  `EvEnd` time NOT NULL,
  `EvSubject` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `EvUId` int(3) NOT NULL,
  `EvRemovido` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`EvId`, `EvDate`, `EvStart`, `EvEnd`, `EvSubject`, `EvUId`, `EvRemovido`) VALUES
(1, '2019-10-30', '08:00:00', '10:00:00', 'ReuniÃ£o Sem falta', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(3) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `UReuniao` tinyint(1) NOT NULL,
  `Removido` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Login`, `Senha`, `Nome`, `UReuniao`, `Removido`) VALUES
(1, 'admin', 'admin', 'Administrador', 1, 0)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_eventos`
--
ALTER TABLE `admin_eventos`
  ADD KEY `FK_EVENTOS_ADMIN` (`EvId`),
  ADD KEY `FK_USER_ADMIN_EVENTOS` (`UId`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`EvId`),
  ADD KEY `FK_USER_EVENTOS` (`EvUId`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Email` (`Login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `EvId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `admin_eventos`
--
ALTER TABLE `admin_eventos`
  ADD CONSTRAINT `FK_EVENTOS_ADMIN` FOREIGN KEY (`EvId`) REFERENCES `eventos` (`EvId`),
  ADD CONSTRAINT `FK_USER_ADMIN_EVENTOS` FOREIGN KEY (`UId`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Limitadores para a tabela `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `FK_USER_EVENTOS` FOREIGN KEY (`EvUId`) REFERENCES `usuarios` (`IdUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
