-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 20 mai 2025 à 11:07
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `logistique`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `equipement_id` int(11) DEFAULT NULL,
  `employe_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `equipement_id`, `employe_id`, `user_id`, `date`) VALUES
(2, 4, 10, 2, '2025-05-07 10:10:50'),
(3, 8, 22, 9, '2025-05-07 10:11:49');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom_emp` varchar(40) NOT NULL,
  `prenom_emp` varchar(40) NOT NULL,
  `user_id` int(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `fonction` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom_emp`, `prenom_emp`, `user_id`, `adresse`, `fonction`, `email`, `telephone`) VALUES
(1, 'gatore', 'Alida', 1, 'jabe', 'comptable', 'Akimana@gmail.com', 65342097),
(2, 'Levis', 'obede', 2, 'kigobe', 'docteur', 'obede@gmail.com', 62763452),
(6, 'kadoyi', 'heritier', 1, 'nyakabiga2', 'chauffeur', 'heritier@gmail.com', 6234098),
(10, 'Bukuru', 'innocente', 1, 'bukeye', 'Tacheron', 'Bukuru@gmail.com', 76234754),
(12, 'Nahimana', 'Adidja', 6, 'buyenzi', 'chauffeur', 'nahi@gmail.com', 73788474),
(13, 'Akimana', 'Drocas', 1, 'kayanza', 'comptable', 'Drocas@gmail.com', 61678530),
(14, 'ndundu', 'key', 5, 'nyakabiga2', 'Macon', 'ndundu@gmail.com', 71234567),
(16, 'kadogo', 'fils', 6, 'kabondo', 'ingenieur', 'kadogo@gmail.com', 76345120),
(17, 'kamikazi', 'bryan', 2, 'kigobe', 'ingenier', 'byan@gmail.com', 76234567),
(18, 'kigeme', 'meme', 1, 'karusi', 'chauffeur', 'kigeme@gmail.com', 79098456),
(19, 'kigeme', 'meme', 1, 'karusi', 'chauffeur', 'kigeme@gmail.com', 79098456),
(20, 'kigeme', 'meme', 1, 'karusi', 'chauffeur', 'kigeme@gmail.com', 79098456),
(21, 'kigeme', 'meme', 1, 'karusi', 'chauffeur', 'kigeme@gmail.com', 79098456),
(22, 'irakoze', 'raissa', 11, 'rubirizi', 'chauffeur', 'irakoze@gmail.com', 65345321);

-- --------------------------------------------------------

--
-- Structure de la table `equipement`
--

CREATE TABLE `equipement` (
  `id` int(11) NOT NULL,
  `nom_eq` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `equipement`
--

INSERT INTO `equipement` (`id`, `nom_eq`, `date`, `user_id`) VALUES
(1, 'tables', '2025-05-08 10:25:26', 11),
(2, 'HACHE', '2025-05-06 07:44:46', 1),
(3, 'T0LES', '2025-05-06 07:44:46', 3),
(4, 'CIMENT', '2025-05-06 07:44:46', 2),
(5, 'GRAVIER', '2025-05-06 07:44:46', 4),
(6, 'SABLE', '2025-05-06 07:44:46', 2),
(7, 'TERRE ROUGE', '2025-05-06 07:44:46', 1),
(8, 'BRIQUE', '2025-05-06 07:44:46', 5),
(9, 'chaise', '2025-05-06 08:03:50', 2),
(10, 'table', '2025-05-06 08:03:50', 1),
(12, 'boite', '2025-05-06 08:03:50', 2),
(13, 'meuble', '2025-05-06 08:03:50', 4),
(14, 'carton', '2025-05-06 08:03:50', 4),
(15, 'marteau masse', '2025-05-06 08:03:50', 5),
(16, 'argile', '2025-05-06 08:03:50', 5),
(20, 'table', '2025-05-07 09:16:52', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `adresse`, `tel`, `email`, `password`) VALUES
(1, 'Kaze', 'Monia', 'kigobe', 67345210, 'kaze@gmail.com', 123456),
(2, 'Rahma', 'Mwiza', 'Rubirizi', 65166706, 'kaneza@gmail.com', 12345678),
(3, 'Keza', 'Katia', 'Mutanga sud', 67890342, 'katia2@gmail.com', 1345678),
(4, 'Ntore', 'Guy', 'Kabondo', 66789034, 'kibeya@gmail.com', 765432),
(5, 'kababa', 'didier', 'kamenge', 79087564, 'kababa@gmail.com', 98765),
(6, 'kigeme', 'momo', 'gahahe', 67423065, 'kigeme@gmail.com', 98765),
(7, 'toyi', 'ana', 'buguruka', 68987354, 'toyiana@gmail.com', 98123),
(8, 'matayo', 'iris', 'bururi', 66780341, 'matayo@gmail.com', 124765),
(9, 'gahungu ', 'Adrien', 'kayanza', 76123098, 'gahungu@gmail.com', 145670),
(10, 'ncutinziza', 'Meme', 'carama 1', 79087456, 'Meme@gmail.com', 756098),
(11, 'Ntore', 'Levis', 'carama', 67423065, 'levis@gmail.com', 98765),
(14, 'kaneza', 'angel', 'kinama', 727272732, 'angel@gmail.com', 11122333),
(15, 'kimana ', 'raissa', 'kinama', 72333324, 'kimana@gmail.com', 2727262),
(16, 'kimana', 'raissa', 'kigobe', 78263632, 'kimana@gmail.com', 12277363),
(17, 'kimana', 'raissa', 'kigobe', 78263632, 'kimana@gmail.com', 0),
(18, 'kimana', 'raissa', 'kigobe', 78263632, 'kimana@gmail.com', 1234),
(19, 'kamanzi', 'kim', 'kamenge', 76543128, 'kamanzi@gmail.com', 123456),
(20, 'kamanzi', 'kim', 'kamenge', 76543124, 'kamanzi@gmail.com', 123456),
(21, 'kamanzi', 'kim', 'kamenge', 76543124, 'kamanzi@gmail.com', 123456),
(22, 'kamanzi', 'kim', 'kamenge', 76543124, 'kamanzi@gmail.com', 123456),
(23, 'kamanzi', 'kim', 'kamenge', 76543124, 'kamanzi@gmail.com', 123456),
(24, 'kamanzi', 'kim', 'kamenge', 76543124, 'kamanzi@gmail.com', 123456),
(25, 'Abasi', 'Ahmad', 'Bujumbura', 737377272, 'ahma@mail.com', 12345678);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `equipement`
--
ALTER TABLE `equipement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `equipement`
--
ALTER TABLE `equipement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
