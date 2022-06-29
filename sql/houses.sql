-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 jun 2022 om 13:12
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snelkookpan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `streetname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `houses`
--

INSERT INTO `houses` (`id`, `streetname`, `image`, `price`, `description`, `area`, `zipcode`, `status`) VALUES
(1, '\'t Hooft 76', 'img/houses/house1.jpg', 3500, 'Wat een ruime woning, deze tweekapper met uitbouw aan de achterzijde en aangebouwde garage gelegen in de Drait.', 'Moerdijk', '4859 KA', 0),
(2, 'Overlaat 10', 'img/houses/house2.jpg', 5500, 'Op een uitzonderlijk mooie plek midden in de natuur, op een rustieke locatie aan de Overlaat te Gassel, staat dit in de jaren 80 onder architectuur gebouwde landhuis met uitzicht over het natuurgebied van de Kraaijenbergse Plassen.', 'Tholen', '3462 AR', 0),
(3, 'Linde 27', 'img/houses/house3.jpg', 6000, 'Met een perceeloppervlakte van 230 m2, maar liefst een totale woonoppervlakte van 173 m² met een woonkamer/keuken van 57 m², een inhoud van 642 m³ en een tuin van 100 m² kun je alle kanten op.', 'Waalwijk', '4495 UR', 1),
(4, 'Linde 27', 'img/houses/house4.jpg', 4500, 'Royale en sfeervolle half vrijstaande woning, gelegen in het centrum van Roosendaal. Deze woning met veel lichtinval heeft 4 royale slaapkamers, een gezellige achtertuin op het westen met achterom en een stenen berging.\r\n', 'Breda', '2954 UB', 0),
(5, 'Linde 27', 'img/houses/house5.jpg', 6000, 'Deze fraaie, vrijstaande woning is gelegen in een landelijke omgeving in het prachtige Vriezenveen. De woning is onder architectuur gebouwd (Bekhuis & Kleinjan architecten). De woning beschikt over een statige oprijlaan die wordt afgesloten door een ijzer', 'Breda', '2934 UB', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
