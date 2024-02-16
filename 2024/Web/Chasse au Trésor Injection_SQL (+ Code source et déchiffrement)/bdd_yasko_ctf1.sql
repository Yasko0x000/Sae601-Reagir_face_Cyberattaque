-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Creato il: Feb 13, 2024 alle 00:16
-- Versione del server: 8.2.0
-- Versione PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctf1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `treasures`
--

DROP TABLE IF EXISTS `treasures`;
CREATE TABLE IF NOT EXISTS `treasures` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `flag` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dump dei dati per la tabella `treasures`
--

INSERT INTO `treasures` (`id`, `name`, `location`, `flag`) VALUES
(1, 'Gold', 'Cave', NULL),
(2, 'Silver', 'Castle', NULL),
(3, 'Diamonds', 'Shipwreck', NULL),
(4, 'Phoenix Feather', 'Mystical Forest', NULL),
(5, 'Ruby', 'Mountain', NULL),
(6, 'Emerald', 'Forest', NULL),
(7, 'Sapphire', 'Lake', NULL),
(8, 'Amethyst', 'Cave', NULL),
(9, 'Topaz', 'Desert', NULL),
(10, 'Opal', 'Underwater Cave', NULL),
(11, 'Pearl', 'Seashore', NULL),
(12, 'Jade', 'Temple Ruins', NULL),
(13, 'Platinum', 'Tower', NULL),
(14, 'Bronze', 'Underground Mine', NULL),
(15, 'Silver Nugget', 'Mountain', NULL),
(16, 'Gold Coin', 'Castle', NULL),
(17, 'Diamond Necklace', 'Shipwreck', NULL),
(18, 'Copper Relic', 'Desert', NULL),
(19, 'Crystal Skull', 'Jungle', NULL),
(20, 'Ancient Relic', 'Tomb', NULL),
(21, 'Titanium Ingot', 'Volcano', NULL),
(22, 'Antique Dagger', 'Cave', NULL),
(23, 'Engraved Tablet', 'Temple', NULL),
(24, 'Mystical Orb', 'Ruins', NULL),
(25, 'Golden Chalice', 'Castle', NULL),
(26, 'Enchanted Amulet', 'Forest', NULL),
(27, 'Lost Crown', 'Underwater Palace', NULL),
(28, 'Royal Scepter', 'Palace', NULL),
(29, 'Magic Wand', 'Wizard Tower', NULL),
(30, 'Hidden Treasure', 'Secret Island', 'IB6JNM9B0rxT5JEwGUEeeDdEaUdWZGtvYXVVeXBxdytIdnZVNExkaGNzcXYzMVRaWXpsbkZZaHRLQmxMaHk0c0ZCQWE2cithMDBSK3BQZ055M3Y3MGc9PQ=='),
(31, 'Dragon Scale', 'Dragon Lair', NULL),
(32, 'Fairy Dust', 'Enchanted Garden', NULL),
(33, 'Elven Bow', 'Elven Kingdom', NULL),
(34, 'Mermaids Pearl', 'Underwater Grotto', NULL),
(35, 'Pirates Treasure', 'Treasure Island', NULL),
(36, 'Genies Lamp', 'Desert Oasis', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
