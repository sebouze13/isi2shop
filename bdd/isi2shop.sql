-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 sep. 2018 à 18:26
-- Version du serveur :  5.7.22-log
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `isi2shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'homme'),
(2, 'femme'),
(3, 'enfant');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

DROP TABLE IF EXISTS `pannier`;
CREATE TABLE IF NOT EXISTS `pannier` (
  `id_user` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_cat` int(3) NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `description` varchar(30) NOT NULL,
  `img` varchar(20) NOT NULL,
  `prix` decimal(5,2) NOT NULL,
  `qte_dispo` int(2) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_cat`, `libelle`, `description`, `img`, `prix`, `qte_dispo`, `id`) VALUES
(1, 'Manteau', 'Manteau marron', '1.jpg', '80.00', 50, 1),
(1, 'Montre', 'Montre en or', '2.jpg', '300.00', 50, 2),
(1, 'Appareil photo', 'Appareil photo super-puissant', '3.jpg', '100.00', 50, 3),
(1, 'Enceinte', 'Enceinte Samsung sophistiquée', '4.jpg', '100.00', 50, 4),
(2, 'Echarpe', 'Echarpe burberry', '1.jpg', '50.00', 50, 5),
(2, 'Bracelet', 'Bracelet en argent incassable', '2.jpg', '80.00', 50, 6),
(2, 'Sac', 'Sac à main Kim Kardashian', '3.jpg', '200.00', 50, 7),
(2, 'Lunettes', 'Lunettes de soleil du futur', '4.jpg', '20.00', 50, 8),
(2, 'Talon', 'Talons-sandale pour chaussette', '5.jpg', '70.00', 50, 9),
(2, 'Manteau', 'Manteau de fourure', '6.jpg', '150.00', 50, 10),
(2, 'Bague', 'Bague en diamant', '7.jpg', '500.00', 50, 11);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `login`, `pwd`) VALUES
(1, 'Blain', 'Guillaume', 'blain.gui@gmail.com', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
