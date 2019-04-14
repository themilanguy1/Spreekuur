-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 apr 2019 om 21:10
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spreekuur_database`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `tevredenheid` varchar(255) NOT NULL,
  `zorginstelling` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `geslacht` varchar(1) NOT NULL,
  `leeftijdsgroep` varchar(20) NOT NULL,
  `telefoon` int(15) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `medicatie` varchar(255) NOT NULL,
  `gezondheidsklachten` varchar(255) NOT NULL,
  `extra_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `geslacht`, `leeftijdsgroep`, `telefoon`, `naam`, `medicatie`, `gezondheidsklachten`, `extra_info`) VALUES
(1, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(2, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(3, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(4, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(5, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(6, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(7, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(8, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', ''),
(9, 'M', '0', 'Milan Gupta', 627359483, 'milan.gupta@ymail.com', '', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vragen`
--

CREATE TABLE `vragen` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `lichaam_stelsel` varchar(255) DEFAULT NULL,
  `vraag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `vragen`
--

INSERT INTO `vragen` (`id`, `user_id`, `lichaam_stelsel`, `vraag`) VALUES
(1, 1, '3', 'hallo daar'),
(2, 3, '3', 'hallo daar'),
(3, 4, '3', 'w'),
(4, 5, '1', 'wdwdwd'),
(5, 6, '1', 'wewrwe'),
(6, 7, '1', 'wewrwe'),
(7, 8, '3', 'wdwd'),
(8, 9, '3', 'wdqwdqw');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `vragen`
--
ALTER TABLE `vragen`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
