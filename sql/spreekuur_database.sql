-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 apr 2019 om 01:39
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

--
-- Gegevens worden geëxporteerd voor tabel `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `tevredenheid`, `zorginstelling`, `feedback`) VALUES
(8, 14, 'slecht', 'ErasmusMC', ''),
(9, 17, 'slecht', 'Revalidatiecentrumrotterdamzuid', ''),
(10, 18, 'slecht', 'Revalidatiecentrumrotterdamzuid', ''),
(11, 19, 'slecht', 'Revalidatiecentrumrotterdamzuid', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `geslacht` varchar(1) NOT NULL,
  `leeftijdsgroep` varchar(20) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `telefoon` int(15) NOT NULL,
  `medicatie` varchar(255) NOT NULL,
  `gezondheidsklachten` varchar(255) NOT NULL,
  `extra_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `geslacht`, `leeftijdsgroep`, `naam`, `telefoon`, `medicatie`, `gezondheidsklachten`, `extra_info`) VALUES
(1, 'M', '0', '', 'wefe@srgrg.com', 0, '', '', ''),
(2, 'wefe@srgrg.com', 'M', '66-75', '', 0, '', '', ''),
(3, '627359483', 'm', 'V', 'Milan Gupta', 0, '', '', ''),
(4, 'Milan Gupta', 'm', 'M', '627359483', 0, '', '', ''),
(5, 'Milan Gupta', 'm', 'M', '16-25', 627359483, '', '', ''),
(6, 'milan.gupta@ymail.com', 'M', '0-15', 'Milan Gupta', 627359483, '', '', ''),
(7, 'milan.gupta@ymail.com', 'M', '0-15', 'Milan Gupta', 627359483, '', '', ''),
(8, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(9, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(10, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(11, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(12, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(13, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(14, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(15, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(16, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(17, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(18, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', ''),
(19, 'wefe@srgrg.com', 'M', '0-15', '', 0, '', '', '');

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
(1, 1, 'Orgaan stelsel', ' wdw'),
(2, 2, 'Orgaan stelsel', 'ww'),
(3, 3, 'Orgaan stelsel', 'w'),
(4, 4, 'Orgaan stelsel', 'w'),
(5, 5, 'Orgaan stelsel', 'w'),
(6, 6, 'Orgaan stelsel', 'wwd'),
(7, 7, 'Orgaan stelsel', 'w');

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
