-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 22 sep. 2020 à 11:47
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_activity`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`id_activity`, `activity_name`) VALUES
(1, 'Culture'),
(2, 'Environnement'),
(3, 'Social'),
(4, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id_advert` int(11) NOT NULL AUTO_INCREMENT,
  `advert_title` varchar(50) NOT NULL,
  `advert_object` varchar(50) NOT NULL,
  `advert_desc` text NOT NULL,
  `advert_date` date NOT NULL,
  `advert_validate` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_activity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_advert`),
  KEY `advert_activity0_FK` (`id_activity`),
  KEY `advert_user_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id_advert`, `advert_title`, `advert_object`, `advert_desc`, `advert_date`, `advert_validate`, `id_user`, `id_activity`) VALUES
(3, 'annonce', 'une annonce', 'ceci est une annonce', '2020-09-04', 1, 10, NULL),
(16, 'annonce', 'une annonce', 'annonce de tibaut et test date', '2020-09-16', 1, 3, NULL),
(17, 'annonce', 'une annonce', 'annonce de pauline', '2020-09-11', 1, 4, NULL),
(18, 'annonce', 'une annonce', 'annonce de sabrina', '2020-09-11', 1, 5, NULL),
(19, 'annonce', 'une annonce', 'annonce de julien', '2020-09-11', 1, 29, NULL),
(20, 'annonce', 'une annonce', 'ceci est une annonce', '2020-09-15', 1, 10, NULL),
(21, 'annonce', 'une annonce', 'ceci est une annonce', '2020-09-16', 0, 28, NULL),
(22, 'annonce', 'une annonce', 'qsdqsfsqdfsqdfsdfsd', '2020-09-16', 1, 28, NULL),
(23, 'annonce', 'une annonce', 'test date jour', '2020-09-16', 1, 28, NULL),
(24, 'annonce', 'une annonce', 'annonce aquacaux', '2020-09-22', 0, 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `contact_object` varchar(50) NOT NULL,
  `contact_claim` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`),
  KEY `contact_user_FK` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `contact_object`, `contact_claim`, `id_user`) VALUES
(4, 'plainte', 'SSSS', 27);

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `photo_name` varchar(50) NOT NULL,
  `photo_nameindirectory` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_photo`),
  KEY `photo_user_FK` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_mail` varchar(50) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `volunteer_firstname` varchar(50) DEFAULT NULL,
  `volunteer_lastname` varchar(50) DEFAULT NULL,
  `volunteer_age` varchar(50) DEFAULT NULL,
  `organization_name` varchar(50) DEFAULT NULL,
  `organization_adress` varchar(50) DEFAULT NULL,
  `organization_phone` varchar(50) DEFAULT NULL,
  `organization_mail` varchar(50) DEFAULT NULL,
  `organization_siren` varchar(50) DEFAULT NULL,
  `organization_desc` text,
  `user_validate` tinyint(4) NOT NULL,
  `user_moderator` tinyint(4) NOT NULL,
  `id_activity` int(11) DEFAULT NULL,
  `id_usertypes` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `user_usertype0_FK` (`id_usertypes`),
  KEY `user_activity_FK` (`id_activity`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `user_mail`, `user_password`, `volunteer_firstname`, `volunteer_lastname`, `volunteer_age`, `organization_name`, `organization_adress`, `organization_phone`, `organization_mail`, `organization_siren`, `organization_desc`, `user_validate`, `user_moderator`, `id_activity`, `id_usertypes`) VALUES
(3, 'tibaut@gmail.com', '$2y$10$8eiA8.3a2R2sUeNwjyBW7Og/td9AYtHpmADVvNWFfYDB3epVew6Va', 'tibaut', 'pickow', '2001-12-03', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 1),
(4, 'pauline@gmail.com', '$2y$10$53zn2m3FPA5yicAk0M1PIuG2BavLqOslCgg9v5nSA4MzV55oLO4pu', 'pauline', 'desert', '1995-04-23', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 1),
(5, 'sabrina@gmail.com', '$2y$10$fGzaFk9KkjE9ZjnNV7taNefalxok93qXWhQ44CH80aUZVsLWdhCaS', 'sabrina', 'monclair', '1990-05-12', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 1),
(7, 'tristan@gmail.com', '$2y$10$6U3AkrNpqBJBfj6idVHsyOSquIypJYFkhDcLDaVx.A/DBPZalfaCi', 'tristan', 'dacosta', '1992-04-23', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 1),
(8, 'anthony@gmail.com', '$2y$10$V3sxcRydaP4kdxPL8/wTve6qQfynya7g.MVT3eqTzdDGS9ewHUMlG', 'anthony', 'leplay', '1996-12-23', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 1),
(10, 'aquacaux@orange.fr', '$2y$10$./C.he5wH56takxt5.gNWeZDUKFnkSX7BUFzqlU3C2oqueCS5z1sG', NULL, NULL, NULL, 'aquacaux', '34 boulevard françois bayrou', '0202020202', 'aquacaux.contact@orange.fr', '123456789', 'association insertion sociale', 1, 0, 3, 2),
(12, 'mediaction@orange.fr', '$2y$10$3K9vSaFgAXlKDYpeShGw3ebjVqiyRcHzSKTsU7DbXjnfSXEjs748m', NULL, NULL, NULL, 'médiaction', '55 avenue générale de gaulle', '0202020202', 'medi.contact@orange.fr', '123456789', 'association médiation culturel', 1, 0, 1, 2),
(13, 'hac@orange.fr', '$2y$10$Jep9MWbTjcg1V0BhNloHuuJZolO1CALWlB8X0Oibda4QI3tEoTC2q', NULL, NULL, NULL, 'hac', '34 boulevard auguste perrey', '0202020202', 'hac.contact@orange.fr', '123456789', 'association sportive rugby le havre', 1, 0, 4, 2),
(24, 'quentin@gmail.com', '$2y$10$yjhoNy/LSHF6uvNNyazAPOqDDZ6DXd.xqhCZXLEIMSgwO.WAOnvSe', 'quentin', 'poirier', '1992-06-28', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 1),
(26, 'nicolas@gmail.com', '$2y$10$dsL57f/wuek3S1wiHAWfC.ycTFYpyrBT5s9cygx0csRUVNn0du3bu', 'nicolas', 'valois', '1986-08-12', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 1),
(27, 'justine@gmail.com', '$2y$10$O/sXivz2AZFLDdVtRsBDeOpfyQMORVdP3OSKTjEbi9urInBnTmPyC', 'justine', 'fontbonne', '1992-01-01', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 1),
(28, 'admin@gmail.com', '$2y$10$Ju4hV7W9QRDpAHWrJDw9f.SbvM8FJh7SgRU18Tl5Shdz25cVuqFcm', 'admin', 'admin', '2014-05-14', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, NULL, 1),
(29, 'julien@gmail.com', '$2y$10$OuqKQozZsb3kxsH1fmuIVO2EbTI7vaBJ20698AyAMr7ewVA6BMnnK', 'julien', 'gioux', '1988-04-20', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, 1),
(32, 'johndoe@gmail.com', '$2y$10$Fc.tg1GG/UfWs2wVgVKIpuqrGmVhWzkD5HiXXoyEDCuQlM4a1WqZO', 'John', 'Doe', '2020-09-18', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 1),
(33, 'yvesmarie@gmail.com', '$2y$10$WVHwlKsUeevLKD/JAItB/uPx95.P00SWwXDYfUAJNIRXXlPICGVJS', 'Yves-Marie', 'Drouard', '1991-06-08', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `id_usertypes` int(11) NOT NULL AUTO_INCREMENT,
  `usertype_value` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usertypes`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `usertype`
--

INSERT INTO `usertype` (`id_usertypes`, `usertype_value`) VALUES
(1, 'bénévole'),
(2, 'association');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `advert_activity0_FK` FOREIGN KEY (`id_activity`) REFERENCES `activity` (`id_activity`),
  ADD CONSTRAINT `advert_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_activity_FK` FOREIGN KEY (`id_activity`) REFERENCES `activity` (`id_activity`),
  ADD CONSTRAINT `user_usertype0_FK` FOREIGN KEY (`id_usertypes`) REFERENCES `usertype` (`id_usertypes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
