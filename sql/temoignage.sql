-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : justeavaqeguisql.mysql.db
-- Généré le :  ven. 17 jan. 2020 à 10:54
-- Version du serveur :  5.6.39-log
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `justeavaqeguisql`
--

-- --------------------------------------------------------

--
-- Structure de la table `temoignage`
--

CREATE TABLE `temoignage` (
  `id_temoignage` int(20) UNSIGNED NOT NULL,
  `texte_temoignage` varchar(400) NOT NULL,
  `image_temoignage` varchar(30) NOT NULL,
  `nom_temoignage` varchar(30) NOT NULL,
  `status_temoignage` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `temoignage`
--

INSERT INTO `temoignage` (`id_temoignage`, `texte_temoignage`, `image_temoignage`, `nom_temoignage`, `status_temoignage`) VALUES
(1, 'Extrêmement impliqué, toujours ponctuel et volontaire. Guillaume est un véritable professionnel qui n\'a pas peur de se salir les mains\r\n						afin que le travail soit correctement accompli. Double profil développeur / graphiste, le tout livré avec bonne humeur. Que demande le peuple ?', 'images/max.jpg', 'Maxime Chevasson', 'Webmaster freelance / Formateur développement web - 3W Academy'),
(2, 'Guillaume est un passionné. Et c’est ce qui contribue à sa réussite.\r\n						Sa maîtrise et ses connaissances en font sans nul doute un développeur redoutable et pointu.\r\n						Avec en plus un background en web design et graphisme, il a les atouts pour ajouter du « beau » au « fiable ».', 'images/dave.png', 'Dave Euphrasie', 'Web developer FR/EN'),
(3, 'Ça a été un plaisir d\'étudier à tes cotés. Tu as su te dépasser pendant cette formation de par ta volonté et ton travail.\r\n						Je recommande vivement Guillaume qui, je le sais, saura relever tous les défis que le monde du développement web mettra sur son chemin.', 'images/mandarine.jpg', 'Mandarine Gervaise', 'Graphiste / Développeuse intégratrice web'),
(4, 'Guillaume a su tirer profit de sa formation HTML / CSS, il a bien acquis les compétences requises pour être intégrateur web, et fut un étudiant très agréable.', 'images/erwin.jpg', 'Erwin Calvez', 'Formateur intégration web - 3W Academy'),
(5, 'Guillaume et moi avons étudié ensemble et je me permet de le recommander car il a été un collègue des plus brillants.\r\n						En effet, son passé de graphiste fait de lui un développeur sensible au rendu final.\r\n						Bravo Guillaume pour ta progression nette et sans bavure ! En espérant pouvoir retravailler avec toi bientôt.', 'images/solveig.jpg', 'Solveig Gaydon-Ohl', 'Développeuse');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `temoignage`
--
ALTER TABLE `temoignage`
  ADD PRIMARY KEY (`id_temoignage`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `temoignage`
--
ALTER TABLE `temoignage`
  MODIFY `id_temoignage` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
