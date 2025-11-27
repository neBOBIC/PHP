-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2025 at 02:26 PM
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
-- Database: `market_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenzi`
--

CREATE TABLE `comenzi` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `prenume` varchar(50) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `produs` varchar(100) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `data_comenzii` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comenzi`
--

INSERT INTO `comenzi` (`id`, `nume`, `prenume`, `telefon`, `email`, `produs`, `cantitate`, `data_comenzii`) VALUES
(1, 'Omelianovici', 'Mihaela', 'u97877t', 'uyg@gmail.com', 'Slapi', 6, '2025-10-27 13:03:36'),
(2, 'Tocarciuc', 'Adrian', '069760380', 'mihaela@gmail.com', 'Slapi', 3, '2025-10-27 13:04:09'),
(3, 'Omelianovici', 'Mihaela', 'u97877t', 'uyg@gmail.com', 'Slapi', 6, '2025-10-27 13:13:00'),
(4, 'Panuta', 'Mihai', '123456789', 'mihaela@gmail.com', 'Ghete', 2, '2025-10-27 13:13:47'),
(5, 'Ganenco', 'Stefan', '763947394', 'stefan@gmail.com', 'Culegere de Matematica', 3, '2025-10-27 13:24:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comenzi`
--
ALTER TABLE `comenzi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comenzi`
--
ALTER TABLE `comenzi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
