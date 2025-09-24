-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost

-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CabinetMedical`
--

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
    `patient` VARCHAR(100) NOT NULL,
    `date` DATE NOT NULL,
    `heure` TIME NOT NULL,
    `motif` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`,`patient`, `date`, `heure`) VALUES
(1,'Benoit Félicien'  ,'2025-10-28', '13:00:00'),
(2,'Goudreau Christine' , '2025-11-07', '15:00:00');




-- --------------------------------------------------------
--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_patient` int(11) NOT NULL,
  `civilite` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `num_secu` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Patient`
--

INSERT INTO `Patient` (`id_patient`, `civilite`, `nom`, `prenom`, `adresse`, `date_naissance`, `num_secu`) VALUES
(1,  'Monsieur', 'Benoit', 'Félicien', '4 rue roussy 93130 noisy-le-sec', '1982-01-14', '182024604691491'),
(2,'Madame', 'Goudreau', 'Christine', '80 rue léon dierx 87280 limoges', '1980-12-23', '281064690485878'),
(3, 'Monsieur', 'Covillon', 'Donatien', '28 rue frédéric chopin', '1973-11-09', '173013228693278'),
(4,'Madame', 'Baril', 'Angelette', '8 avenue du marechal juin', '1997-09-10', '234029474516087'),

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  satut ENUM('admin', 'patient') NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--
-- admin
INSERT INTO `users` (`email`, `password`,`statut`) VALUES
('admin@cabinet.com', '<?= password_hash("admin123", PASSWORD_DEFAULT) ?>', 'admin');
-- patient
INSERT INTO `users` (`email`, `password`,`statut`) VALUES
('patient@cabinet.com', '<?= password_hash("patient123", PASSWORD_DEFAULT) ?>', 'patient');


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_patient`),
  
--

--
-- Index pour la table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id_patient`),
 

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--




---------------------------------------------------------------------------------------

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 nov. 2021 à 19:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbguassailly`
--

-- --------------------------------------------------------

-
--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `titre` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lien` varchar(500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`lien`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`titre`, `description`, `lien`, `date`) VALUES
('TITRE1', 'DESC1', 'LIEN3', '2018-11-21'),
('TITRE2', 'DESC2', 'LIEN2', '2018-11-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
