-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 27 Juin 2018 à 16:56
-- Version du serveur :  5.7.22-0ubuntu0.17.10.1
-- Version de PHP :  7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Voiture_exo`
--

-- --------------------------------------------------------

--
-- Structure de la table `conso`
--

CREATE TABLE `conso` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `maximum` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `conso`
--

INSERT INTO `conso` (`id`, `nom`, `maximum`) VALUES
(1, 'A', 4.2),
(2, 'B', 5.5),
(3, 'C', 6.7),
(4, 'D', 8),
(5, 'E', 9.3),
(6, 'F', 10.5),
(7, 'G', 100);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(1, 'Ferrari'),
(2, 'Lamborghini'),
(3, 'Citroën'),
(4, 'Ford'),
(5, 'Chevrolet'),
(6, 'Land Rover'),
(7, 'BMW'),
(8, 'Bentley');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'Citadine'),
(2, 'Berline'),
(3, 'Cabriolet'),
(4, 'Supercar'),
(5, 'Muscle car'),
(6, 'Luxe'),
(7, '4x4'),
(8, 'Hypercar'),
(9, 'Break');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `puissance` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `vitesse_max` int(11) NOT NULL,
  `acceleration` float NOT NULL,
  `consommation` float NOT NULL,
  `marque` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`id`, `modele`, `puissance`, `poids`, `image`, `vitesse_max`, `acceleration`, `consommation`, `marque`, `type`, `dates`) VALUES
(4, 'Mustang', 421, 1740, 'https://st.motortrend.com/uploads/sites/10/2016/06/2017-ford-mustang-v6-coupe-angular-front.png', 239, 5.6, 12.4, 4, 3, '2018-06-27'),
(5, 'Impala', 195, 1655, 'http://cdn7.bigcommerce.com/s-r64qabfj/images/stencil/1280x1280/products/5251/8422/TSM144323_1__15338.1407448018.jpg?c=2&imbypass=on&imbypass=on', 165, 13.1, 18, 5, 5, '2018-06-28'),
(6, 'Evoque', 150, 1520, 'https://images.elite-auto.fr/visuel/LANDROVER/landrover_16rangeroverevoquehseod1fb_angularfront.png', 180, 10.7, 5, 6, 7, '2018-06-29'),
(7, 'M3', 343, 1495, 'https://s.aolcdn.com/commerce/autodata/images/USC60BMC111A021001.jpg', 289, 5.2, 11.9, 7, 2, '2018-06-30'),
(8, 'Continental', 560, 2425, 'https://www.bentleymotors.com/content/dam/bentley/Master/Models/Hero/New%20Continental%20GT/New%20Continental%20GT%20right%20facing%20profile%20studio%201920x670.jpg/_jcr_content/renditions/original.image_file.1366.477.file/New%20Continental%20GT%20right%20facing%20profile%20studio%201920x670.jpg', 318, 5.2, 16.6, 8, 6, '2018-07-01'),
(10, 'Centenario', 770, 1520, 'https://gts-models.com/3719-large_default/lamborghini-centenario.jpg', 350, 2.8, 10.7, 2, 8, NULL),
(12, 'F430', 500, 850, 'https://icarexperience.ca/wp-content/uploads/2015/11/458_side.png', 360, 2, 11, 1, 8, '2018-07-02'),
(13, 'Camaro', 450, 1500, 'https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/7617b1732e8d3a7ceaad72471da3e6fa.png', 300, 3.4, 20, 5, 5, '2018-07-02'),
(15, 'Gallardo', 800, 1000, 'http://bellesallemandes.fr/wp-content/uploads/2008/03/big-lamborghinigallardolp5604.jpg', 380, 2.1, 21, 2, 8, '2018-07-06'),
(16, 'DS', 84, 1210, 'https://www.motorlegend.com/images-voiture/med/citroen-ds-22184.jpg', 168, 9, 14, 3, 2, '2018-07-05'),
(18, '2CV', 84, 1000, 'https://images-na.ssl-images-amazon.com/images/I/61J5DAzwGvL._SL1200_.jpg', 100, 30, 11, 3, 1, '2018-07-05');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `conso`
--
ALTER TABLE `conso`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `marque` (`marque`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `conso`
--
ALTER TABLE `conso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `voiture_ibfk_2` FOREIGN KEY (`type`) REFERENCES `type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
