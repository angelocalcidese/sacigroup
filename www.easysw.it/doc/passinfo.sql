-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Apr 29, 2023 alle 08:37
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
-- Struttura della tabella `passinfo`
--

CREATE TABLE `passinfo` (
  `progr` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `passinfo`
--

INSERT INTO `passinfo` (`progr`, `login`, `password`) VALUES
(1, 'mimmo', 71863),
(2, 'marco', 87590),
(3, 'calcidese.domenico@gmail.com', 63742),
(4, 'domenico.calcidese@gmail.com', 75698),
(5, 'arcamutua@gmail.com', 35983),
(6, 'bancadeltempocarpediem@gmail.com', 33736),
(7, 'tommyguenzani@gmail.com', 53002),
(8, 'p00006562@gmail.com', 21290),
(9, 'garbagnatemonasteroebrongio.lecco@ana.it', 19953),
(10, 'bdtcusago@gmx.com', 36473),
(11, 'sergio.amidani@gmail.com', 31852),
(12, 'info@zunelliassociati.it', 57555);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `passinfo`
--
ALTER TABLE `passinfo`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `passinfo`
--
ALTER TABLE `passinfo`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
