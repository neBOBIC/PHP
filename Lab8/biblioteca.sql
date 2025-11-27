-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2025 at 10:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `carti_biblioteca`
--

CREATE TABLE `carti_biblioteca` (
  `id` int(11) NOT NULL,
  `titlu_carte` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `gen_literar` varchar(50) NOT NULL,
  `an_publicare` int(11) NOT NULL,
  `nr_pagini` int(11) NOT NULL,
  `descriere` text NOT NULL,
  `stare_disponibilitate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carti_biblioteca`
--

INSERT INTO `carti_biblioteca` (`id`, `titlu_carte`, `autor`, `gen_literar`, `an_publicare`, `nr_pagini`, `descriere`, `stare_disponibilitate`) VALUES
(1, 'Morometii', 'Marin Preda', 'Roman', 1955, 423, 'Roman realist românesc care urmărește viața familiei Moromete din satul Siliștea-Gumești în perioada interbelică.', 1),
(2, 'Mândrie și prejudecată', 'Jane Austen', 'Roman clasic', 1813, 432, 'Roman clasic despre relații sociale, prejudecăți și iubire în Anglia secolului XIX.', 1),
(3, 'Crimă și pedeapsă', 'Fiodor Dostoievski', 'Roman psihologic', 1866, 671, 'Povestea lui Raskolnikov și lupta lui interioară după crimă.', 0),
(4, 'Harry Potter și piatra filozofală', 'J.K. Rowling', 'Fantasy / Aventură', 1997, 309, 'Prima carte din seria Harry Potter, în care Harry descoperă că este vrăjitor.', 1),
(6, 'De veghe în lanul de secară', 'J.D. Salinger', 'Roman modernist', 1951, 277, 'Un adolescent rebel, Holden Caulfield, explorează problemele maturizării și alienării.', 0),
(7, 'Pet Cemetary', 'Stephen King', 'Fictiune', 2011, 202, 'Un roman infricosator cae iti va trezi frica', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nr_telefon` varchar(20) NOT NULL,
  `data_inregistrare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `nume`, `prenume`, `email`, `nr_telefon`, `data_inregistrare`) VALUES
(1, 'Tocarciuc', 'Adrian', 'mihaela@gmail.edu', '123456789', '2025-11-23'),
(2, 'Tocarciuc', 'Adrian', 'mihaela@gmail.edu', '123456789', '2025-11-23'),
(3, 'Omelianovici', 'Daniel', 'diana@gmail.com', '4789876544', '2024-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carti_biblioteca`
--
ALTER TABLE `carti_biblioteca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carti_biblioteca`
--
ALTER TABLE `carti_biblioteca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
