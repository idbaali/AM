-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 10:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `actionmephi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `first_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creation_admin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `password`, `image`, `Creation_admin`, `role`) VALUES
(1, 'Ike david', 'BAALI', 'ikebaalidavid@live.de', '56b467204ff2f871332935f8cb34ca8eceaa8ada', 'ike3.jpg', '2023-10-17 11:49:14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `angagement`
--

CREATE TABLE `angagement` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_teacher` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carrousel`
--

CREATE TABLE `carrousel` (
  `id` int NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `espace_donateur`
--

CREATE TABLE `espace_donateur` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.png',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `espace_donateur`
--

INSERT INTO `espace_donateur` (`id`, `first_name`, `last_name`, `email`, `password`, `image`, `date`) VALUES
(1, '', '', '', '', 'image.png', '2023-12-05 10:53:27'),
(2, 'Ike David', 'BAALI', 'ikebaalidavid@live.de', '56b467204ff2f871332935f8cb34ca8eceaa8ada', 'image.png', '2023-12-05 15:23:49'),
(3, 'Ike David', 'BAALI', 'ikebaalidavid@live.de', '56b467204ff2f871332935f8cb34ca8eceaa8ada', 'image.png', '2023-12-05 18:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `make_donation`
--

CREATE TABLE `make_donation` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_phone` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_date` datetime NOT NULL,
  `donation_price` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.png',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `description`, `country`, `city`, `date`, `categorie_id`) VALUES
(1, 'Le Président de la République, Félix Antoine Tshisekedi a pensé aux personne vivant avec handicap.', 'image.png', 'Le Président de la République, Félix Antoine Tshisekedi lance la campagne de vulgarisation de la loi organique n°22/003 du 3 Mai 2022 portant protection et promotion des droits de la personne vivant avec handicap, ce samedi 4 novembre à l’hôtel Hilton dans la commune de la Gombe, ( Kinshasa).\r\n\r\nAu cours de cette cérémonie, le chef de l’État va également procéder au vernissage du premier dictionnaire de la langue des signes.\r\n\r\nUn échantillon représentatif d’une centaine des personnes vivant avec handicap notamment les personnes atteintes de l’albinisme, personnes à mobilité réduite, les malvoyants, les malentendants, les personnes atteintes de nanisme, les autochtones, (…). participe à Cette cérémonie symbolique pour un pays qui compte plus au moins 18% des handicapés parmi population congolaise, ( dernières statistiques des experts), sans compter des victimes des conflits Armés et des catastrophes naturelles.', 'RD Congo', 'Kinshasa', '2023-12-03 23:40:53', 1),
(2, 'Au cœur des urgences, les kits de l\'association redonnent espoir', 'image.png', 'Séismes en Afghanistan, guerre au Soudan, inondations meurtrières en Libye, sécheresse historique en Somalie, escalade du conflit entre Israël et l’Etat de Palestine… L’année 2023 aura été marquée par une succession de crises à travers le monde.  \r\n\r\nAu cœur de ces urgences, des millions d’enfants. Leurs maisons, leurs écoles, leurs parcs de jeux ont été détruits. Des enfances volées.  \r\n\r\nEn Ukraine, les bombardements ont plongé plus de 4 millions de jeunes dans une détresse psychologique sévère. En Libye, la tempête Daniel a coûté la vie à plus de 6 000 enfants. Au Soudan, le nouveau conflit a poussé 2,6 millions d’autres sur les chemins de l’exil. En Afghanistan, en Turquie, en Syrie, au Népal, les violents séismes ont anéanti des villages entiers.  \r\n\r\nDepuis le début de Seconde Guerre mondiale, ils n’ont jamais été aussi nombreux à dépendre d’une assistance humanitaire. Tous ces enfants ont besoin de soins, de nourriture, de protection. Il faut les rassurer, les accompagner, les aider à reconstruire leur vie. Pour cela, les équipes de l’UNICEF travaillent sans relâche pour leur redonner espoir.', 'Palestine', 'Gaza', '2023-12-04 23:15:07', 2),
(9, 'fshhndnh', 'image.png', 'nbbnbnc', 'nn', 'nbnbd', '2023-12-05 23:17:23', 2),
(10, 'fshhndnh', 'image.png', 'nbbnbnc', 'nn', 'nbnbd', '2023-12-05 23:19:02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(1, 'ikebaalidavid@live.nl', '2023-09-19 16:48:44'),
(15, 'ikebaalidavid@live.de', '2023-10-30 23:24:08'),
(16, 'matundu_s@yahoo.fr', '2023-11-15 14:05:48'),
(17, 'fayabasket87@gmail.com', '2023-12-05 16:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`) VALUES
(1, 'communiqué'),
(2, 'urgence');

-- --------------------------------------------------------

--
-- Table structure for table `our_action`
--

CREATE TABLE `our_action` (
  `id` int NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'image.png',
  `country` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_action`
--

INSERT INTO `our_action` (`id`, `title`, `categorie_id`, `description`, `image`, `country`, `city`, `date`) VALUES
(2, 'Instruction', 'scolarite', 'L’éducation est une dès clés mère afin d’optimiser un meilleur lendemain. Voilà pourquoi il est nécessaire d’entamer cette dernière dès le bas-âge au travers les enfants et ce par le biais de l’école qui est malheureusement pas accessible à tous', 'image.png', 'RD Congo', 'Kinshasa', '2023-12-05 00:26:00'),
(3, 'Medicament', 'humanitaire', 'Afrique est le continent où nous intervenons dans le plus grand nombre de pays. \r\nEn parrainant un enfant en Afrique, votre don de parrainage finance sa scolarité \r\net ses besoins vitaux en alimentation, santé, eau et assainissement.', 'image.png', 'RD Congo', 'Mbandaka', '2023-12-05 00:44:19'),
(4, 'Hebergement', 'humanitaire', 'Dans le but de perfectionner notre vision, il est nécessaire d’obtenir un centre permettant aux personnes vivants avec un handicap d’obtenir des soins médicaux appropriés, se former, s’informer.', 'image.png', 'RD Congo', 'Mbandaka', '2023-12-05 00:47:02'),
(5, 'Participant', 'humanitaire', 'En parrainant un enfant en Afrique, votre don de parrainage finance sa scolarité et ses besoins vitaux en alimentation, santé, eau et assainissement.  Nous désirons donc faire appel à la bienveillance de tout un chacun afin de construire cet édifice.', 'image.png', 'RD Congo', 'Mbandaka', '2023-12-05 00:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `reset_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_email` tinyint(1) NOT NULL,
  `verification_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `first_name`, `last_name`, `password`, `phone`, `email`, `verification_email`, `verification_date`, `is_admin`) VALUES
(1, 'Fallone', 'Fallone', 'Lobito', 'Action2023', '+33751146754', 'fallonelobito@actionmephi.fr', 1, '2023-09-24 20:08:58', 0),
(2, 'Mirose', 'Mirose', 'Olela', 'Action2023', '+33768488008', 'miroseolela@actionmephi.fr', 1, '2023-09-24 20:08:58', 0),
(3, 'Billy', 'Billy', 'Olela', 'Action2023', '+33788879340', 'billyolela@actionmephi.fr', 1, '2023-09-24 20:08:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angagement`
--
ALTER TABLE `angagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `espace_donateur`
--
ALTER TABLE `espace_donateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_donation`
--
ALTER TABLE `make_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_action`
--
ALTER TABLE `our_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userManager` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `angagement`
--
ALTER TABLE `angagement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `espace_donateur`
--
ALTER TABLE `espace_donateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `make_donation`
--
ALTER TABLE `make_donation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_action`
--
ALTER TABLE `our_action`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `news_categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `userManager` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
