-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 avr. 2024 à 14:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fne82`
--

-- --------------------------------------------------------

--
-- Structure de la table `dossier_fne82`
--

DROP TABLE IF EXISTS `dossier_fne82`;
CREATE TABLE IF NOT EXISTS `dossier_fne82` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(255) NOT NULL,
  `type` int(255) NOT NULL,
  `suite_justice` tinyint(1) NOT NULL,
  `clos` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `renouvelable` tinyint(1) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `animateur` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `frequence` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `suivi_justice`
--

DROP TABLE IF EXISTS `suivi_justice`;
CREATE TABLE IF NOT EXISTS `suivi_justice` (
  `id_dossier` int(11) NOT NULL AUTO_INCREMENT,
  `etape` varchar(255) NOT NULL,
  `responsable_fne` varchar(255) NOT NULL,
  `pollueur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_dossier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `types_dossiers`
--

DROP TABLE IF EXISTS `types_dossiers`;
CREATE TABLE IF NOT EXISTS `types_dossiers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
