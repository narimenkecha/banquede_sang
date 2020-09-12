-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 09 sep. 2020 à 16:30
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `banque_de_sang`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(255) NOT NULL,
  `wilaya` varchar(100) NOT NULL,
  `code` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id_adresse`, `wilaya`, `code`) VALUES
(1, 'Adrar', 1),
(2, 'Chlef', 2),
(3, 'Laghouat', 3),
(5, 'Oum El Bouaghi', 4),
(6, 'Batna', 5),
(7, 'Béjaïa', 6),
(11, ' Biskra', 7),
(12, 'Béchar', 8),
(13, 'Blida', 9),
(14, 'Bouira', 10),
(15, 'Tamanrasset', 11),
(16, 'Tébessa', 12),
(17, 'Tlemcen', 13),
(18, ' Tiaret', 14),
(19, 'Tizi-Ouzou', 15),
(20, 'Alger', 16),
(21, 'Djelfa', 17),
(22, 'Jijel', 18),
(23, 'Sétif', 19),
(24, 'Saida', 20),
(25, 'Skikda', 21),
(26, 'Sidi-Bel-Abbès', 22),
(27, 'Annaba', 23),
(28, 'Guelma', 24),
(29, 'Constantine', 25),
(30, 'Médéa', 26),
(31, 'Mostaganem', 27),
(32, 'M\'Sila', 28),
(33, 'Mascar', 29),
(34, 'Ouargla', 30),
(35, 'Oran', 31),
(36, 'El-Bayadh', 32),
(37, 'Illizi', 33),
(38, 'Bordj-Bou-Arreridj', 34),
(39, 'Boumerdès', 35),
(40, 'El-Tarf', 36),
(41, 'Tindouf', 37),
(42, 'Tissemsilt', 38),
(43, 'El-Oued', 39),
(44, 'Khenchela', 40),
(45, 'Souk-Ahras', 41),
(46, 'Tipaza', 42),
(47, 'Mila', 43),
(48, 'Aïn-Defla', 44),
(49, 'Naâma', 45),
(50, ' Aïn-Témouchent', 46),
(51, 'Ghardaia', 47),
(52, ' Relizane', 48);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `groupe_de_sang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `id_user`, `groupe_de_sang`) VALUES
(12, 0, 'AB-');

-- --------------------------------------------------------

--
-- Structure de la table `don_demande`
--

CREATE TABLE `don_demande` (
  `id_user` int(100) NOT NULL,
  `id_visiteur` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `envoye`
--

CREATE TABLE `envoye` (
  `id_user` int(100) NOT NULL,
  `id_Message` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_Message` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Messag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `email` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`email`, `mot_de_passe`, `id_user`, `Type`) VALUES
('admin@gmail.com', 'admin123', 2, 1),
('haouhadjer@gmail.com', 'haouhadjer', 6, 2),
('narimenkechaichia@gmail.com', 'narimenkechaichia', 8, 2);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `id_visiteur` int(255) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Age` int(2) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `Groupe_de_sang` varchar(10) NOT NULL,
  `Date_de_donne` date NOT NULL,
  `Numero` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `id_adresse` int(100) NOT NULL,
  `Type` int(11) NOT NULL,
  `établissement` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visiteur`, `Nom`, `Prenom`, `Age`, `Sexe`, `Groupe_de_sang`, `Date_de_donne`, `Numero`, `email`, `adresse`, `id_adresse`, `Type`, `établissement`) VALUES
(38, 'narimen', 'kechaichia', 20, 'Femme', 'O+', '2020-09-06', 666666, 'narimennanou@gmail.com', 'Souk-Ahras', 0, 1, ''),
(41, 'yousra', 'kechaichia', 22, 'Femme', 'A+', '2020-09-13', 65582186, 'louzaa@gmail.com', 'Adrar', 0, 1, ''),
(42, 'abir', 'kechaichia', 26, 'Femme', 'O-', '0000-00-00', 55869288, 'abirna@gmail.com', 'Jijel', 0, 2, 'hopital'),
(43, 'amine', 'kechaichia', 20, 'Homme', 'AB+', '2020-09-19', 22222, 'mom51@gmail.com', 'Tizi-Ouzou', 0, 1, ''),
(46, 'abir', 'kechaichia', 55, 'Femme', 'B-', '2020-09-27', 55555548, 'abirnanou@gmail.com', 'Sétif', 0, 1, ''),
(47, 'adem', 'ppp', 26, 'Femme', 'AB-', '0000-00-00', 562651122, 'dmfl@gmail.com', 'Tiaret', 0, 2, 'hopital');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `don_demande`
--
ALTER TABLE `don_demande`
  ADD PRIMARY KEY (`id_user`,`id_visiteur`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_Message`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id_visiteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_Message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id_visiteur` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
