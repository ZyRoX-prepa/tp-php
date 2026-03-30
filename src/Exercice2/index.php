<?php

require_once __DIR__ . '/Voiture.php';

echo "=== Exercice 2 — Classe Voiture ===\n";

$v1 = new Voiture('Renault', 'Clio', 2022, 180);
$v1->afficher();

$v2 = new Voiture('Peugeot', '206', 2003, 165);
$v2->afficher();
