-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 nov 2013 om 11:28
-- Serverversie: 5.1.72
-- PHP-versie: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `woutepl78_proj`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inserts`
--

CREATE TABLE IF NOT EXISTS `inserts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `tweet_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `link` text NOT NULL,
  `username` text NOT NULL,
  `gender` text NOT NULL,
  `language` text NOT NULL,
  `login_date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `logins`
--

INSERT INTO `logins` (`id`, `facebook_id`, `name`, `first_name`, `last_name`, `link`, `username`, `gender`, `language`, `login_date_time`) VALUES
(1, 0, '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(2, 0, '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(3, 2147483647, 'Wouter Polman', 'Wouter', 'Polman', 'https://www.facebook.com/WouterP0lman', 'WouterP0lman', 'male', 'nl_NL', '2013-11-25 11:20:36'),
(4, 2147483647, 'Wouter Polman', 'Wouter', 'Polman', 'https://www.facebook.com/WouterP0lman', 'WouterP0lman', 'male', 'nl_NL', '2013-11-25 11:21:14'),
(5, 2147483647, 'Wouter Polman', 'Wouter', 'Polman', 'https://www.facebook.com/WouterP0lman', 'WouterP0lman', 'male', 'nl_NL', '2013-11-25 11:21:30');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tweeter` text NOT NULL,
  `inhoud` text NOT NULL,
  `date` datetime NOT NULL,
  `insert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `tweets`
--

INSERT INTO `tweets` (`id`, `tweeter`, `inhoud`, `date`, `insert_id`) VALUES
(1, '', '', '0000-00-00 00:00:00', 0),
(2, '', '', '0000-00-00 00:00:00', 0),
(3, '', '', '0000-00-00 00:00:00', 0),
(4, '', '', '0000-00-00 00:00:00', 0),
(5, '', '', '0000-00-00 00:00:00', 0),
(6, '', '', '0000-00-00 00:00:00', 0),
(7, '', '', '2013-11-22 00:00:00', 0),
(8, '', '', '2013-11-22 00:00:00', 0),
(9, '', '', '2013-11-22 11:41:26', 0),
(10, '', '', '2013-11-22 11:41:40', 0),
(11, '', '', '2013-11-22 11:45:02', 0),
(12, '', '', '2013-11-22 11:50:14', 0),
(13, '', '', '2013-11-22 11:50:53', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
