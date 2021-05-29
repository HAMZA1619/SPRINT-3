-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 29 mai 2021 à 17:24
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `image` varchar(122) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `id_class` varchar(60) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `image`, `genre`, `age`, `id_class`, `date`) VALUES
(47, 'hamza', 'elglaoui', 'uploads/image-patrick.jpg', 'female', 20, 'grad 1', '2021-05-29 15:25:24'),
(48, 'hamza', 'elglaoui', 'uploads/image-jeanette.jpg', 'male', 22, 'grad 2', '2021-05-29 15:22:24'),
(49, 'hamid', 'elglaoui', 'uploads/800px_COLOURBOX7084548.jpg', 'female', 20, 'grad 2', '2021-05-29 15:04:06'),
(50, 'hamid', 'toto', 'uploads/image-jonathan.jpg', 'male', 22, 'grad 1', '2021-05-29 15:21:40'),
(51, 'hamid', 'toto', 'uploads/image-irene.jpg', 'male', 22, 'grad 2', '2021-05-29 15:13:16'),
(52, 'aa', 'toto', 'uploads/image-anne.jpg', 'female', 22, 'grad 3', '2021-05-29 15:15:18'),
(53, 'hamza', 'toto', 'uploads/image-kira.jpg', 'female', 22, 'hamid', '2021-05-29 15:27:45');

-- --------------------------------------------------------

--
-- Structure de la table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `specialite` varchar(60) NOT NULL,
  `desception` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `class`
--

INSERT INTO `class` (`id`, `nom`, `specialite`, `desception`, `id_user`, `date`) VALUES
(22, 'grad 1', 'somthing', 'i don\'t know', 38, '2021-05-21 18:20:36'),
(23, 'grad 2', 'somthing', 'somthing', 38, '2021-05-21 18:21:44'),
(24, 'grad 3', 'somthing', 'somthing', 38, '2021-05-21 18:23:07'),
(25, 'hamid', 'nooooo', 'mpoiuhg', 39, '2021-05-28 13:16:12');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `date`) VALUES
(38, 'hamza', 'chyoin188@gmail.com', '$2y$10$zcdpnchr1LQH9rNS1Yzd2.ihcE0vnxnuBHxVKcR57vEnxptBWxaZG', 'admin', '2021-05-21 18:19:40'),
(39, 'abdo ellglaoui', 'hellnot127@gmail.com', '$2y$10$vYBIxpettiJ.kypSEOO6zeEysHD2DW1Tl0DdPhfAmIt/T5..uEd6q', 'user', '2021-05-28 12:59:23');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
