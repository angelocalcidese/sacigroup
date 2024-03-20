-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 31.11.39.82:3306
-- Creato il: Apr 29, 2023 alle 08:54
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
-- Struttura della tabella `logo`
--

CREATE TABLE `logo` (
  `progr` int(11) NOT NULL,
  `estensione` varchar(5) DEFAULT NULL,
  `logolunghezza` int(11) DEFAULT NULL,
  `logoaltezza` int(11) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `nomefile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `logo`
--

INSERT INTO `logo` (`progr`, `estensione`, `logolunghezza`, `logoaltezza`, `login`, `nomefile`) VALUES
(1, '.png', 300, 150, 'mimmo', 'parola.png'),
(5, 'png', 0, 0, 'domenico.calcidese@gmail.com', 'generico.png'),
(6, 'jpg', 0, 0, 'm52888232@gmail.com', 'burocrazia-6.jpg'),
(7, 'jpg', 0, 0, 'marco', 'offrire.png'),
(8, 'png', 0, 0, 'calcidese.domenico@gmail.com', 'generico.png'),
(11, '', 0, 0, 'pippo@pippo.it', 'generico.png'),
(12, 'jpg', 0, 0, 'pippo@pippo.it', 'motivo.jpg'),
(13, 'png', 0, 0, 'calcidese.domenico@gmail.com', 'generico.png'),
(14, 'jpg', 0, 0, 'calcidese.domenico@gmail.com', 'marchioxx.jpg'),
(15, 'jpg', 0, 0, 'calcidese.domenico@gmail.com', 'gira.png'),
(16, 'jpg', 0, 0, 'calcidese.domenico@gmail.com', 'motivo.jpg'),
(17, 'png', 0, 0, 'pippo@pippoxx.it', 'generico.png'),
(18, 'png', 0, 0, 'domenico.calcidese@gmail.com', 'generico.png'),
(19, 'png', 0, 0, 'arcamutua@gmail.com', 'generico.png'),
(20, 'png', 0, 0, 'arcamutua@gmail.com', 'generico.png'),
(21, 'jpg', 0, 0, 'arcamutua@gmail.com', 'arca.png'),
(22, 'png', 0, 0, 'lucia.ben1412@gmail.com', 'generico.png'),
(23, 'jpg', 0, 0, 'marco', 'Logo La Calla.jpg'),
(24, 'png', 0, 0, 'bancadeltempocarpediem@gmail.com', 'generico.png'),
(25, 'jpg', 0, 0, 'bancadeltempocarpediem@gmail.com', 'carlopoma.png'),
(26, 'png', 0, 0, 'a.guenzani@libero.it', 'generico.png'),
(27, 'jpg', 0, 0, 'tommyguenzani@gmail.com', 'Cattura.PNG'),
(28, 'png', 0, 0, 'alessandro.bossi@uniter-arese.it', 'generico.png'),
(29, 'png', 0, 0, 'amicidelsalotto.ud@gmail.com', 'generico.png'),
(30, 'png', 0, 0, 'garbagnatemonasteroebrongio.lecco@ana.it', 'generico.png'),
(31, 'png', 0, 0, 'p00006562@gmail.it', 'generico.png'),
(32, 'png', 0, 0, 'p00006562@gmail.com', 'generico.png'),
(33, 'jpg', 0, 0, 'p00006562@gmail.com', 'abacus.png'),
(34, 'jpg', 0, 0, 'garbagnatemonasteroebrongio.lecco@ana.it', 'logoAssociazione2021.jpg'),
(35, 'jpg', 0, 0, 'p00006562@gmail.com', 'callax.png'),
(36, 'jpg', 0, 0, 'p00006562@gmail.com', 'abacus.png'),
(37, 'png', 0, 0, 'bdtcusago@gmx.com', 'generico.png'),
(38, 'jpg', 0, 0, 'bdtcusago@gmx.com', 'logo-mail .jpg'),
(39, 'jpg', 0, 0, 'bdtcusago@gmx.com', 'logo-mail .jpg'),
(40, 'png', 0, 0, 'sergio.amidani@gmail.com', 'generico.png'),
(41, 'jpg', 0, 0, 'sergio.amidani@gmail.com', 'Foto 2.jpg'),
(42, 'png', 0, 0, 'NeVe@libero.it', 'generico.png'),
(43, 'jpg', 0, 0, 'info@zunelliassociati.it', 'Senza titolo.png'),
(44, 'png', 0, 0, 'a@a.it', 'generico.png'),
(45, 'png', 0, 0, 'ba@a.it', 'generico.png'),
(46, 'png', 0, 0, 'a@a.it', 'generico.png'),
(47, 'png', 0, 0, 'a@a.it', 'generico.png'),
(48, 'png', 0, 0, 'a@a.it', 'generico.png'),
(49, 'jpg', 0, 0, 'tommyguenzani@gmail.com', 'logo 2023.png');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`progr`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `logo`
--
ALTER TABLE `logo`
  MODIFY `progr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
