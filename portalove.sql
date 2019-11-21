-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1:3306
-- Čas generovania: Št 21.Nov 2019, 10:39
-- Verzia serveru: 5.7.26
-- Verzia PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `portalove`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`) VALUES
(1, 'fdsfdsa', 'fdsafdas'),
(2, 'dominik.halvoník', 'fdsafdsafdsafdsafdsa'),
(3, 'Dominik', 'Ahoj'),
(4, 'fdfdsfdsa', 'fffff');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `images`
--

INSERT INTO `images` (`id`, `url`) VALUES
(1, 'https://cdn.pixabay.com/photo/2017/09/02/14/29/guy-2707418_960_720.png'),
(14, 'https://image.shutterstock.com/image-photo/beautiful-water-drop-on-dandelion-260nw-789676552.jpg'),
(13, 'https://images.pexels.com/photos/67636/rose-blue-flower-rose-blooms-67636.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(2, 'https://www.cukrarskysvet.sk/fotky8077/fotos/_vyr_7516minions-sugar-disc-16cm.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kluc` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kluc` (`kluc`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `kluc`, `name`, `menu`, `path`) VALUES
(1, 'index', 'Zaciname s PHP', 'Domov', 'index.php'),
(2, 'about', 'O nas', 'O nas', 'about.php'),
(3, 'contact', 'Kontakt', 'Kontakt', 'contact.php'),
(4, 'chat', 'Chat', 'Chat', 'chat.php'),
(5, 'gallery', 'Galeria', 'Galeria', 'gallery.php'),
(6, 'gallery-update', 'Galeria-update', 'Galeria-update', 'gallery-update.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
