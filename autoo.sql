-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 12:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nb_portes` int(11) NOT NULL,
  `nb_places` int(11) NOT NULL,
  `poid_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `nb_portes`, `nb_places`, `poid_max`) VALUES
(3, 'sedan', 4, 4, 1900),
(4, 'suv', 4, 4, 1900);

-- --------------------------------------------------------

--
-- Table structure for table `livraison`
--

CREATE TABLE `livraison` (
  `id` int(11) NOT NULL,
  `date_livraison` date NOT NULL,
  `id_livreur` int(11) NOT NULL,
  `adresse_livraison` varchar(255) NOT NULL,
  `id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livraison`
--

INSERT INTO `livraison` (`id`, `date_livraison`, `id_livreur`, `adresse_livraison`, `id_commande`) VALUES
(31, '2022-12-16', 10, 'jhvvhkjv', 1),
(33, '2022-12-22', 4, 'hjjhg', 1),
(36, '2022-12-30', 4, 'ynnous', 25),
(45, '2022-12-30', 4, 'annous', 1);

-- --------------------------------------------------------

--
-- Table structure for table `livreur`
--

CREATE TABLE `livreur` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livreur`
--

INSERT INTO `livreur` (`id`, `nom`, `prenom`, `email`, `etat`) VALUES
(4, 'Annas', 'Mnassri', 'Anas@gmail', 'Non Dispo'),
(10, 'Mme linda', 'Ouerfeli', 'linda@gmail', 'Non Dispo'),
(29, 'Med amine', 'Hechmi', 'amine@esprit.tn', 'dispo'),
(33, 'Saif', 'Rguez', 'saif@gmail', 'dispo'),
(37, 'Attoufa', 'Mnasri', 'att@gmail', 'dispo'),
(38, 'Houcine', 'Mnasri', 'Houc@gamail', 'dispo');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `bin` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nom`, `description`, `prix`, `bin`) VALUES
(24, 'ferrari', 'khalini sekett', 1999, 0x75706c6f6164732f36333931346439303064363237666572726172692e6a706567),
(25, 'mercedes', 'haya aaaad', 2326, 0x75706c6f6164732f363339313464633937383739356d657263656465732e6a706567),
(26, 'lamborghini', 'nchalah nalg&#039;eha uploadet ya rabi', 2635, 0x75706c6f6164732f363339313464663862643731636c616d626f2e6a706567),
(27, 'kia', 'mtaa karya nharin w noss', 996, 0x75706c6f6164732f363339313465336139613035616b69612e6a7067),
(28, 'ferrari', 'jjjjjjjjjjjjjjj', 999, 0x75706c6f6164732f363339316131323839666662396d657263656465732e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `prenom_user` varchar(50) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `tel_user` int(11) NOT NULL,
  `adresse_user` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `role_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `tel_user`, `adresse_user`, `username`, `password_user`, `role_user`) VALUES
(1, 'test1', 'test', 'test@gmail.com', 12345678, 'Ghazela', 'test', '74b87337454200d4d33f80c4663dc5e5', 'ADMIN_ROLE'),
(2, 'aaaa', 'aaaa', 'aaaa@esprit.tn', 122344, 'ariana', 'yoser', '74b87337454200d4d33f80c4663dc5e5', 'USER_ROLE'),
(10, 'ahmed', 'zaidi', 'azer@zer.com', 12345678, 'azertyui', 'ahmed', '74b87337454200d4d33f80c4663dc5e5', 'USER_ROLE'),
(12, 'bouba', 'naceur', 'bouba@yahoo.fr', 54650034, 'menzel temim', 'boubaa', '8fda55147d27a2ff7258238d3b5c124b', 'ADMIN_ROLE'),
(13, 'ahmed', 'kkk', 'ahmed@uyahoo.fr', 8954712, 'menzel temim', 'ahmed', '202cb962ac59075b964b07152d234b70', 'USER_ROLE'),
(16, 'azerty', 'zertyu', 'rabeb.benaceur@esprit.tn', 8954712, 'menzel temim', 'rabeb', '6488af96ac21ceb2b16ed1447ae1262b', 'USER_ROLE'),
(17, 'bouba', 'rghuezzz', 'rabeb.benaceur1@gmail.com', 54650034, 'menzel temim', 'bouba', '11448fbf3ddd8ab99bfbf7249fd73243', 'USER_ROLE');

-- --------------------------------------------------------

--
-- Table structure for table `vente`
--

CREATE TABLE `vente` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_voiture` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

CREATE TABLE `voiture` (
  `matricule` int(11) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `kilometrage` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `consommation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voitures_a_louer`
--

CREATE TABLE `voitures_a_louer` (
  `code_reservation` int(11) NOT NULL,
  `date_reservation` date NOT NULL,
  `nb_jours` int(11) NOT NULL,
  `heure_res` time NOT NULL,
  `prix_res` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voitures_a_louer`
--

INSERT INTO `voitures_a_louer` (`code_reservation`, `date_reservation`, `nb_jours`, `heure_res`, `prix_res`) VALUES
(15, '2012-12-12', 12, '12:12:00', 12),
(16, '1998-12-12', 10, '12:45:00', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_livreur_livraison` (`id_livreur`);

--
-- Indexes for table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `fk` (`id_categorie`);

--
-- Indexes for table `voitures_a_louer`
--
ALTER TABLE `voitures_a_louer`
  ADD PRIMARY KEY (`code_reservation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vente`
--
ALTER TABLE `vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voitures_a_louer`
--
ALTER TABLE `voitures_a_louer`
  MODIFY `code_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `fk_livreur_livraison` FOREIGN KEY (`id_livreur`) REFERENCES `livreur` (`id`);

--
-- Constraints for table `voiture`
--
ALTER TABLE `voiture`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
