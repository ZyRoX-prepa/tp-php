<?php

require_once __DIR__ . '/Temperature.php';

echo "=== Exercice 4 — Classe Temperature ===\n";

$t1 = new Temperature(100);
$t1->afficher();

$t2 = new Temperature(0);
$t2->afficher();

$t3 = new Temperature(-40);
$t3->afficher();

// Test validation
echo "\nTest de validation :\n";
try {
    $invalid = new Temperature(-300);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}
