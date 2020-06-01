-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mer. 20 mai 2020 à 09:41
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site-vente`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`idadmin`),
  UNIQUE KEY `idadmin_UNIQUE` (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `email`, `password`) VALUES
(2, 'root@admin.com', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e4'),
(3, 'admin@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe'),
(4, 'admin1@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe'),
(5, 'admin2@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe'),
(6, 'admin3@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idarticles` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `text` longtext,
  `date` datetime DEFAULT NULL,
  `auteur` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idarticles`),
  UNIQUE KEY `idblog_UNIQUE` (`idarticles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idclient` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idclient`),
  UNIQUE KEY `idclient_UNIQUE` (`idclient`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `email`, `password`, `ville`, `nom`, `prenom`) VALUES
(1, 'client@gmail.com', '', 'ville one', 'client one', 'client one'),
(2, 'client@gmail.com', '', 'ville one', 'client one', 'client one'),
(3, 'clienttest@gmail.com', 'test', 'test', 'test', 'test'),
(6, 'clienttest@gmail.com', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e4', 'test', 'test', 'test'),
(7, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b571', '', '', ''),
(8, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b571', '', '', ''),
(9, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b571', '', '', ''),
(10, '', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b571', '', '', ''),
(11, 'clientprincipal@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe', 'client', 'client', 'client'),
(12, 'clientsecond@gmail.com', '99adc231b045331e514a516b4b7680f588e3823213abe901738bc3ad67b2f6fcb3c64efb93d18002588d3ccc1a49efbae1ce20cb43df36b38651f11fa75678e8', 'client', 'client', 'client');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `idproduits` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproduits`),
  UNIQUE KEY `idproduits_UNIQUE` (`idproduits`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_produits_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `administrateur` (`idadmin`),
  ADD CONSTRAINT `fk_produits_articles1` FOREIGN KEY (`articles_idarticles`) REFERENCES `articles` (`idarticles`),
  ADD CONSTRAINT `fk_produits_client1` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`idclient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
