<?php

require_once __DIR__ . '/CompteBancaire.php';

echo "=== Exercice 3 — Classe CompteBancaire ===\n";

$c1 = new CompteBancaire('Alice', 500.0);
$c1->afficherSolde();
$c1->deposer(300);
$c1->retirer(100);
$c1->retirer(800);
$c1->afficherSolde();

echo "\n";

$c2 = new CompteBancaire('Bob');
$c2->afficherSolde();
$c2->deposer(1000);
$c2->retirer(250);
$c2->afficherSolde();
