-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 05 juin 2018 à 08:11
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_agenda`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `idAnnonce` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `dateEnregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `typeAnnonce` varchar(255) NOT NULL,
  `typeDeBien` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prix` int(11) NOT NULL,
  `charges` int(11) NOT NULL,
  `description` text NOT NULL,
  `surface` int(11) NOT NULL,
  `exposition` varchar(15) NOT NULL,
  `etage` int(11) NOT NULL,
  `chauffage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`idAnnonce`, `idUser`, `dateEnregistrement`, `typeAnnonce`, `typeDeBien`, `nom`, `prix`, `charges`, `description`, `surface`, `exposition`, `etage`, `chauffage`) VALUES
(2, 8, '2018-06-02 12:26:24', 'Vente', 'Maison', 'T1 centre ville', 125000, 35, 'T1 Centre ville', 37, 'Nord', 4, 'Electrique'),
(3, 8, '2018-06-02 12:26:53', 'Location', 'Maison', 'T1 centre ville', 125000, 25, '', 25, 'Nord', 3, 'Electrique'),
(4, 9, '2018-06-03 14:20:40', 'Vente', 'Château', 'Chateau des ducs de bretagne', 1000000, 350, '', 1000, 'Sud', 6, 'Autre'),
(5, 9, '2018-06-04 23:45:26', 'Location', 'Maison', 'T1 centre ville', 125000, 25, '', 25, 'Nord', 0, 'Nord'),
(6, 9, '2018-06-04 23:48:00', 'Location', 'Château', 'T1 centre ville', 125, 350, '', 37, 'Nord', 2, 'Nord'),
(7, 9, '2018-06-04 23:49:50', 'Vente', 'Parking / Box', 'T1 centre ville', 125000, 35, '', 25, 'Nord', 0, 'Nord'),
(8, 9, '2018-06-05 03:12:07', 'Location', 'Maison', 'T1 centre ville', 25, 0, '', 25, 'Nord', 0, 'Nord'),
(9, 9, '2018-06-05 04:58:58', 'Location', 'Maison', 'Studio 30m² pas loin des transport', 485, 45, 'Grand studio tout équipé remi à neuf il y à un an', 35, 'Sud', 5, 'Sud');

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

CREATE TABLE `calendar` (
  `idEvent` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `annonce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `statut` enum('Particulier','EI','EURL','SARL','SA','SAS','SNC','SCOP') NOT NULL,
  `date_enregistrement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `password`, `nom`, `prenom`, `mail`, `telephone`, `statut`, `date_enregistrement`) VALUES
(8, 'root', 'Jeandot', 'Téofilo', 'teofilo.jeandot@gmail.com', 659552165, 'Particulier', '2018-05-27 21:36:54'),
(9, 'root', 'jeandot', 'Teofilo', 'admin@gmail.com', 659552165, 'SARL', '2018-05-27 22:26:10');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`idAnnonce`),
  ADD KEY `fk_user_annonce` (`idUser`);

--
-- Index pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD KEY `fk_event_annonce` (`annonce`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `idAnnonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_user_annonce` FOREIGN KEY (`idUser`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `fk_event_annonce` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`idAnnonce`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
