<?php
include "connexion.php";

$sql = "INSERT INTO carti_biblioteca (titlu_carte, autor, gen_literar, an_publicare, nr_pagini, descriere, stare_disponibilitate) VALUES
('Micul Print', 'Antoine de Saint-Exupery', 'Fictiune', 1943, 120, 'Carte clasica', 1),
('Harry Potter', 'J.K. Rowling', 'Fictiune', 1997, 340, 'Volumul 1', 1),
('Gandire rapida, gandire lenta', 'Daniel Kahneman', 'Psihologie', 2011, 500, 'Carte despre gandire', 0),
('Ion', 'Liviu Rebreanu', 'Fictiune', 1920, 350, 'Roman romanesc', 1),
('Cartea fara autor', NULL, 'Fictiune', 2018, 250, 'Autor necunoscut', 1)";

$conn->query($sql);

echo "Cartile au fost adaugate";
?>
