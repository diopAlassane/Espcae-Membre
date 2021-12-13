-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 21 Juin 2021 à 20:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `espacemembre`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisations`
--

CREATE TABLE IF NOT EXISTS `cotisations` (
  `NumCotis` int(11) NOT NULL AUTO_INCREMENT,
  `DateCotis` date NOT NULL,
  `Mois` varchar(30) NOT NULL,
  `Motif` varchar(30) NOT NULL,
  `Montant` varchar(255) NOT NULL,
  `Matricule` int(11) NOT NULL,
  PRIMARY KEY (`NumCotis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `cotisations`
--

INSERT INTO `cotisations` (`NumCotis`, `DateCotis`, `Mois`, `Motif`, `Montant`, `Matricule`) VALUES
(8, '2021-07-16', 'Janvier', 'Inscription', '35 000f', 7),
(9, '2021-09-09', 'Janvier', 'Inscription', '40 000f', 2),
(10, '2021-10-08', 'Janvier', 'Mensualite', '60 000f', 4),
(11, '2021-06-10', 'Janvier', 'Inscription', '40 000f', 6),
(16, '2021-06-19', 'Mars', 'Mensualite', '50 000', 16),
(18, '2021-06-11', 'Juillet', 'Inscription', '500 000f', 17),
(19, '2021-06-26', 'Octomre', 'Inscription', '8 898999', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `Matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`Matricule`, `nom`, `prenom`, `adresse`, `telephone`) VALUES
(1, 'Gueye', 'Arame', 'Dakar-mariste', '77 486 24 34'),
(2, 'Diop', 'Moussa', 'Thies', '77 654 67 45'),
(4, 'Seck', 'Abdoulaye', 'Touba', '77 432 25 34'),
(9, 'Sylla', 'Moussa', 'Kaolack', '76 543 69 09'),
(10, 'Sylla', 'Moussa', 'Kaolack', '76 543 69 09'),
(11, 'Faye', 'Khady', 'saint-louis', '78 354 34 09'),
(12, 'Sene', 'Adama', 'Fatick', '70 234 23 12'),
(13, 'Sylla', 'Moussa', 'Kaolack', '76 543 69 09'),
(14, 'Sylla', 'Moussa', 'Kaolack', '76 543 69 09'),
(15, 'LY', 'BABA', 'SEBI', '77 345 12 45'),
(16, 'ba', 'marieme', 'pikine', '77 900 87 67'),
(17, 'DIOP', 'Fallou', 'touba', '33 456 77 44'),
(18, 'Sall', 'macky', 'Mermoz', '33 987 08 78'),
(19, 'Sall', 'macky', 'Mermoz', '33 987 08 78'),
(20, 'diop', 'moussa', 'touba', '77 658 94 64'),
(21, 'Gueye', 'Bakh yaye', 'mariste', '78 465 34 45'),
(22, 'Gueye', 'Bakh yaye', 'mariste', '78 465 34 45'),
(23, 'sy', 'Sopey s. Babacar', 'tivaoune', '77 876 34 56'),
(24, 'ndiaye', 'salif', 'Kaolack', '76 675 89 79');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
