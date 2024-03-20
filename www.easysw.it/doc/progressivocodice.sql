-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Mag 01, 2023 alle 12:05
-- Versione del server: 5.7.36-39-log
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sql1615711_3`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `progressivocodice`
--

CREATE TABLE `progressivocodice` (
  `progr` int(11) NOT NULL,
  `tessera` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `progressivocodice`
--

INSERT INTO `progressivocodice` (`progr`, `tessera`) VALUES
(1, 240);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `progressivocodice`
--
ALTER TABLE `progressivocodice`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `progressivocodice`
--
ALTER TABLE `progressivocodice`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
