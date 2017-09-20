-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Set 02, 2017 alle 13:14
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videodelta`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `serie_tv`
--

CREATE TABLE `serie_tv` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `serie_tv`
--

INSERT INTO `serie_tv` (`id`, `nome`, `immagine`) VALUES
(1, 'Scandal', 'Scandal.jpg'),
(2, 'I Borgia', 'I Borgia.jpg'),
(3, 'Law & Order', 'Law & Order.jpg'),
(4, 'Nip/Tuck', 'NipTuck.jpg');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `serie_tv`
--
ALTER TABLE `serie_tv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `serie_tv`
--
ALTER TABLE `serie_tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
