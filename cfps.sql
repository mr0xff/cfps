-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2021 às 21:59
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cfps`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdetalhes`
--

DROP TABLE IF EXISTS `userdetalhes`;
CREATE TABLE IF NOT EXISTS `userdetalhes` (
  `uid_d` int NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ultimo_nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_de_nascimento` date DEFAULT NULL,
  `tel` int NOT NULL,
  `gps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid_d`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `userdetalhes`
--

INSERT INTO `userdetalhes` (`uid_d`, `primeiro_nome`, `ultimo_nome`, `data_de_nascimento`, `tel`, `gps`) VALUES
(1, 'Mario', 'Tomas', '1994-09-06', 99999999, 'Luanda-Grafanil'),
(2, 'Mario', 'Tomas', '1994-09-06', 99999999, 'Luanda-Grafanil'),
(3, 'Abel', 'Suco', '1999-11-01', 929293939, 'Huambo'),
(4, 'Manuel', 'Morais', '1999-01-02', 929929299, 'Estados unidos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passfrase` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passdecode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`uid`, `username`, `passfrase`, `passdecode`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'mr.crypt', 'b4af804009cb036a4ccdc33431ef9ac9', 'pass1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
