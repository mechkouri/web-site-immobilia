-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 10 mai 2021 à 18:53
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobilia`
--

-- --------------------------------------------------------

--
-- Structure de la table `description`
--

CREATE TABLE `description` (
  `Photo` varchar(100) NOT NULL,
  `Categorie` varchar(100) NOT NULL,
  `Espace` int(11) NOT NULL,
  `Etage` int(11) NOT NULL,
  `Adresse` varchar(500) NOT NULL,
  `Prix` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `description`
--

INSERT INTO `description` (`Photo`, `Categorie`, `Espace`, `Etage`, `Adresse`, `Prix`) VALUES
('images/mariano.JPG', 'MAISON', 100, 3, 'azilal', 19991),
('picture/mariano.JPG', 'MAISON1', 0, 0, '', 0),
('picture/mariano.JPG', 'maisona', 107, 5, 'arfood', 12345),
('picture/mariano.JPG', 'Terrain', 5, 2, 'mihad', 123),
('mariano.jpg', 'Villa', 1000, 3, 'derb_ghelf', 10000000);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `login` varchar(100) NOT NULL,
  `motepasse` varchar(20) NOT NULL,
  `my_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`login`, `motepasse`, `my_photo`) VALUES
('', '', ''),
('l,s', 'skn', 'picture/C:xampp	mpphp604.tmp'),
('manal', 'manal1', 'picture/C:xampp	mpphp1F9D.tmp'),
('mari', 'mariii', ''),
('marid', 'marid', 'picture/C:xampp	mpphp1B7E.tmp'),
('maroua', 'maroua1998', ''),
('marouane', 'marouane19998', ''),
('radi', 'radi', 'picture/mariano.JPG'),
('said', 'said1', 'picture/mariano.JPG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`Categorie`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
