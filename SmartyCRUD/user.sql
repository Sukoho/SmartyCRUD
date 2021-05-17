-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3308
-- Généré le : lun. 17 mai 2021 à 14:10
-- Version du serveur :  10.2.6-MariaDB-log
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `pwd` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `mail`, `pwd`) VALUES
(1, 'ADMIN', 'Admin', 'admin@admin.admin', '$2y$10$832/RK2e86EHbmqmQVEbiOmJT3vr1UPW.mo5vmox3sxpwrJAwj1ZC'),
(15, 'CHALDER', 'Mickael', 'Chalder@hotmail.fr', '$2y$10$HDKy4L2FdVcFIleaPrwwbO/8je93ScAFIqRZuqCSAxqgmjnNbhnkq'),
(16, 'BODINO', 'Lucas', 'Bodino@twitter.com', '$2y$10$VrrUDI1j6SZF3aqA/3Vu5.5AuUtorzjifq.0DobzEplFTls6f21/K'),
(17, 'JEDDI', 'Naceur', 'Jeddi@wanadoo.fr', '$2y$10$A6MIJJ2FJOm0rzZeYLG/9OoIVf8Oedsz9Ck8tE9qCjLnmhOBli5lC'),
(18, 'BISCH', 'Patrick', 'bisch@yahoo.fr', '$2y$10$qAT0yNuKSeJsrWEJ6zoIMOkjjt1R1zlUiXKp4F6iPAoDdkmlo.dmK'),
(20, 'ASTIER', 'Alexandre', 'couillere@interprete.kaamelot', '$2y$10$D29aMPwJI/2OYojgwvXUduMp0dCtCV1HvYl8PU.GJILlLL0IVL.x.'),
(21, 'ENRICI', 'Cyril', 'Enrici@koala.fr', '$2y$10$.Y0N92AGoiqjEQkFJGhWFup75l02VMh9AeITe68vF2CgXE5qqj7kq'),
(24, 'MENARD', 'Antoine', 'menard@gmail.fr', '$2y$10$UMITxodJG9xXBA6fM9u6Z.SR.kToFq6pkameWYGrgrutlNTOHJTDe'),
(25, 'KIKOU', 'Test', 'test@test.test', '$2y$10$YFjxEa9DSFkoUr7EfXozcu7qgAkVGwxYkINpN7lkiWaihsQU2XXrG');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
