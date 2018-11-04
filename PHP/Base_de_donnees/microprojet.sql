-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 29 oct. 2018 à 15:26
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `microprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `identifiant` varchar(250) NOT NULL,
  `mdp` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`nom`, `prenom`, `identifiant`, `mdp`) VALUES
('Mittler', 'Raphael', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `ihm`
--

CREATE TABLE `ihm` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `present` tinyint(1) NOT NULL,
  `nbAbsences` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ihm`
--

INSERT INTO `ihm` (`nom`, `prenom`, `present`, `nbAbsences`) VALUES
('Mittler', 'Raphael', 0, 1),
('Le Berre', 'Pierre', 0, 1),
('Ingoglia', 'Baptiste', 0, 1),
('Rousseau', 'Romain', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `may`
--

CREATE TABLE `may` (
  `debut` varchar(8) NOT NULL,
  `fin` varchar(8) NOT NULL,
  `cours` varchar(128) NOT NULL,
  `salle` varchar(128) NOT NULL,
  `groupe` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `may`
--

INSERT INTO `may` (`debut`, `fin`, `cours`, `salle`, `groupe`) VALUES
('9:30', '10:45', 'IHM', 'TD4', '4INFO'),
('11:00', '12:15', 'SI', 'TD1', '4INFO'),
('13:45', '16:45', 'IHM', 'C03', '4INFO'),
('12:01', '13:44', 'Pause', 'RU', '4INFO');

-- --------------------------------------------------------

--
-- Structure de la table `mittler`
--

CREATE TABLE `mittler` (
  `debut` varchar(8) NOT NULL,
  `fin` varchar(8) NOT NULL,
  `cours` varchar(128) NOT NULL,
  `salle` varchar(128) NOT NULL,
  `groupe` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mittler`
--

INSERT INTO `mittler` (`debut`, `fin`, `cours`, `salle`, `groupe`) VALUES
('9:30', '10:45', 'IHM', 'TD4', '4INFO'),
('11:00', '12:15', 'SI', 'TD1', '4INFO'),
('13:45', '16:45', 'IHM', 'C03', '4INFO'),
('12:01', '13:44', 'Pause', 'RU', '4INFO');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `identifiant` varchar(250) NOT NULL,
  `mdp` varchar(7) NOT NULL,
  `code` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`nom`, `prenom`, `identifiant`, `mdp`, `code`) VALUES
('May', 'Madeth', 'may', 'may', 0);

-- --------------------------------------------------------

--
-- Structure de la table `si`
--

CREATE TABLE `si` (
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `present` tinyint(1) NOT NULL,
  `nbAbsences` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `si`
--

INSERT INTO `si` (`nom`, `prenom`, `present`, `nbAbsences`) VALUES
('Mittler', 'Raphael', 0, 0),
('Le Berre', 'Pierre', 0, 0),
('Ingoglia', 'Baptiste', 0, 0),
('Rousseau', 'Romain', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
