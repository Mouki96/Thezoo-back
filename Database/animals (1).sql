-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 10 juil. 2022 à 04:05
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_thezoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `nom`, `description`, `image`) VALUES
(1, 'Une Girafle', 'La giraffe est un animal très attentionée gentille très douce', 'giraffe.jpg'),
(2, 'un chien', 'Le chien est un animal domestique très doux ,intelligent\r\nqui adore les enfants', 'chien.jpg'),
(3, 'un lion', 'Le lion est le roi de la savane et c\'est un animal très dangereux', 'lion.jpg'),
(4, ' flamard rose', 'Rose bonbon est le roi de la savane et c\'est un animal très dangereux', 'no.jpg'),
(5, 'un Aigle', 'L\'aigle est très visionaire et précis', 'aigle.jpg'),
(6, 'L\'albatross', 'L\'albatross ,intelligent\r\nqui adore les enfants', 'albatross.jpg'),
(7, 'Araigné', 'l\'araignée est très dangereux', 'araigne.jpg'),
(8, 'Autruche', 'L\'autriche est adorabl', 'autriche.jpg'),
(9, 'Buffle', 'Le buffle très agressif', 'buffle.jpg'),
(10, 'Cameléon', 'Le  caméléon est très intelligent qui s\'adapte la ou il est.', 'cameleon.jpg'),
(11, 'Castor', 'Le castor est l\'un animal très dangereux', 'castor.jpg'),
(12, 'Chimpanze', 'Le chimpanzé est le roi de la savane et c\'est un animal très taquin drôle', 'chimpanze.jpg'),
(13, 'Colibri', 'Le colibri est un oiseau adorable', 'colibri.jpg\"'),
(14, 'un Elephant', 'L\'éléphant est très adorable', 'elephant.jpg'),
(15, 'Gorille', 'le gorille est très dangereux', 'gorille.jpg'),
(16, 'Guépard', 'le guépard est très rapide', 'guepard.jpg'),
(17, 'Hérisson', 'L\'hérisson est super intelligent', 'herisson.jpg'),
(18, 'Hippo', 'L\'hippopotame est très dangereux', 'hippo.jpg'),
(19, 'Hyène', 'L\'hyène est dangereux agressive', 'hyene.jpg'),
(20, 'Baleine blue', 'La baleine est très adorable mais quelques fois dangereuse', 'baleine.jpg'),
(21, 'Lémur', 'Le lémur est un animal très comique', 'lemur.jpg'),
(22, 'Lièvre', 'Lièvre est un animal très doux ,intelligent \r\n               qui adore les enfants', 'lievre.jpg'),
(23, 'Loup', 'Le loup est un animal très dangereux ', 'loup.jpg'),
(24, 'Orque', 'Le l\'orque est chou bibi ', 'orque.jpg'),
(25, 'Ours', 'L\'ours est vraiment dangereux attention!', 'ours.jpg'),
(26, 'Pangolin', 'Le pangolin est dangereux ', 'pangolin.jpg'),
(27, 'Phacochere', 'Le phacochère est méchant et laid', 'phacochere.jpg'),
(28, 'Rapace', 'rapace dangereux aussi hein j\'avoue!', 'rapace.jpg'),
(29, 'Singe', 'le singe est un animal très comique adore faire les grimaces', 'singe.jpg'),
(30, 'Scorpion', 'Le scorpion est dangereux avec son venin.', 'scorpion.jpg'),
(31, 'Serpent', 'Le serpent est dangereux je vous le dire!', 'snake.jpg'),
(32, 'Tigre', 'Le tigre dangeux aussi hein !', 'tigre.jpg'),
(33, 'Tortue', 'La tortue a vraiment longue vie', 'tortue.jpg'),
(34, 'Zebre', 'Le zèbre de la savane et c\'est un animal très dangereux ', 'zebre.jpg'),
(35, 'Lion', 'Le lion est le roi de la savane et c\'est un animal très dangereux ', 'lion.jpg'),
(36, 'Gazelle', 'La gazelle n\'est pas agressive', 'gazelle.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
