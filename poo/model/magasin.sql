-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 16 août 2023 à 04:21
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `magasin`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `pseudo` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `dates` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `pseudo`, `pass`, `dates`) VALUES
(1, 'Ngom', 'Ousmane Balla', 'noreyni', '940c0f26fd5a30775bb1cbd1f6840398d39bb813', '2023-08-14 18:11:34'),
(2, 'Sow', 'Pape Cheikh', 'kheuss', '76622e9714945d159160b0a5fc750731e79c213c', '2023-08-14 18:18:54'),
(3, 'Ngom', 'hamdi', 'moustaf', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', '2023-08-14 18:26:31'),
(4, 'Ngom', 'Mame Diarra', 'Diarietou', '337c8b3b244ca5910bd94e41f821c23ade8e13a1', '2023-08-16 02:10:29'),
(5, 'Ngom', 'Nogaye', 'nogs', '973ccd8b79dfb83aefbbaa27c06d6c157a6989db', '2023-08-16 02:24:01'),
(6, 'ba', 'ibra', 'khalll', '477ceef20aab308d215e5ba95111b405d2513cb9', '2023-08-16 03:50:25'),
(7, 'Ngom', 'Awa', 'eva', '828e64e13e3fc71511c7785f33117be2da9e4fb7', '2023-08-16 06:16:06');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `quantité` int(11) NOT NULL,
  `nature` varchar(50) NOT NULL,
  `num_magas` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `quantité`, `nature`, `num_magas`, `date`) VALUES
(1, 'sac riz 50kg', 100, 'DEPOT', 1, '2023-08-06 05:28:26'),
(2, 'sac riz 50kg', 100, 'DEPOT', 1, '2023-08-06 05:28:33'),
(3, 'sucre en poudre 25kg', 340, 'DEPOT', 2, '2023-08-06 05:33:03'),
(4, 'lait en poudre pot de 2kg', 179, 'DEPOT', 3, '2023-08-06 05:37:48'),
(5, 'paquet chocolat', 300, 'DEPOT', 1, '2023-08-06 05:40:31'),
(6, 'sachet bombon', 400, 'DEPOT', 1, '2023-08-06 05:45:56'),
(7, 'bidon huile', 200, 'DEPOT', 2, '2023-08-06 05:52:31'),
(8, 'paquet gloria', 36, 'RETRAIT', 1, '2023-08-07 15:51:06'),
(9, 'paquet savon', 400, 'DEPOT', 1, '2023-08-16 04:37:50'),
(10, 'sac riz 50kg', 200, 'RETRAIT', 1, '2023-08-16 04:44:31');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
