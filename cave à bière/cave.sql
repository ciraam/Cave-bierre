-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 03 déc. 2023 à 13:03
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biere`
--

-- --------------------------------------------------------

--
-- Structure de la table `cave`
--

DROP TABLE IF EXISTS `cave`;
CREATE TABLE IF NOT EXISTS `cave` (
  `id_biere` int NOT NULL AUTO_INCREMENT,
  `nom_biere` text NOT NULL,
  `description_biere` text NOT NULL,
  `degre` int NOT NULL,
  `pays` text NOT NULL,
  PRIMARY KEY (`id_biere`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cave`
--

INSERT INTO `cave` (`id_biere`, `nom_biere`, `description_biere`, `degre`, `pays`) VALUES
(1, 'desperados', 'tequila', 6, 'France'),
(2, '1664', 'référence à l\'année de fondation de Kronenbourg', 5, 'France'),
(3, 'Kronenbourg', 'Bière française', 4, 'France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
