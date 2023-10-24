-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2023 at 10:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix-demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `release_year` int(4) NOT NULL,
  `type` varchar(64) NOT NULL,
  `season_number` int(3) NOT NULL,
  `synopsis` text NOT NULL,
  `image_thumbnail` varchar(128) NOT NULL,
  `age_limit` int(3) NOT NULL,
  `genre` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `title`, `release_year`, `type`, `season_number`, `synopsis`, `image_thumbnail`, `age_limit`, `genre`) VALUES
(1, 'Black Mirror Saison 6', 2023, 'Serie', 6, 'Avec des histoires tordues qui traversent les époques et répandent la terreur, cette saison est la plus imprévisible de la série d\'anthologie qui a révolutionné le genre.', 'cover-blackmirror2.jpg', 16, 'Thriller'),
(2, 'La Plateforme', 2019, 'Movie', 0, 'Une plateforme de nourriture descend d\'étage en étage pour ravitailler les détenus d\'une prison. Ceux du dessus se gavent, affamant ceux du dessous. La révolte gronde.', 'la-plateforme.png', 18, 'Thriller'),
(3, 'One Piece', 2023, 'Serie', 1, 'Dans cette adaptation en prise de vues réelles du manga culte, le jeune pirate au chapeau de paille Monkey D. Luffy emmène son équipage improbable dans une épique chasse au trésor.', 'one-piece.jpeg', 13, 'Live Action'),
(4, 'Joker', 2019, 'Movie', 0, 'En 1981 à Gotham City, un clown atteint de troubles mentaux et en mal de reconnaissance voit sa vie basculer du côté obscur le jour où il se défend contre des agresseurs.', 'joker-2019.jpg', 16, 'Thriller'),
(5, 'The Amazing Spider-Man', 2012, 'Movie', 0, 'Andrew Garfield incarne Peter Parker, un lycéen qui apprend à se servir de ses nouveaux pouvoirs alors qu\'il découvre des secrets de famille et affronte un vieil ennemi.', 'the-amazing-spicer-man.jpg', 13, 'Action');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
