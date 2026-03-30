<?php

/**
 * TP PHP — Programmation Orientée Objet
 * Point d'entrée principal — exécute tous les exercices
 */

require_once __DIR__ . '/src/Exercice1/Cercle.php';
require_once __DIR__ . '/src/Exercice2/Voiture.php';
require_once __DIR__ . '/src/Exercice3/CompteBancaire.php';
require_once __DIR__ . '/src/Exercice4/Temperature.php';
require_once __DIR__ . '/src/Exercice5/Personne.php';
require_once __DIR__ . '/src/Exercice5/Etudiant.php';
require_once __DIR__ . '/src/Exercice5/Professeur.php';
require_once __DIR__ . '/src/Exercice5/ProfesseurChef.php';

// ─── Exercice 1 : Classe Cercle ────────────────────────────────────────────
echo "=== Exercice 1 — Classe Cercle ===\n";
$c1 = new Cercle(7);
$c1->afficher();
$c2 = new Cercle(3.5);
$c2->afficher();

echo "\n";

// ─── Exercice 2 : Classe Voiture ───────────────────────────────────────────
echo "=== Exercice 2 — Classe Voiture ===\n";
$v1 = new Voiture('Renault', 'Clio', 2022, 180);
$v1->afficher();
$v2 = new Voiture('Peugeot', '206', 2003, 165);
$v2->afficher();

echo "\n";

// ─── Exercice 3 : Classe CompteBancaire ────────────────────────────────────
echo "=== Exercice 3 — Classe CompteBancaire ===\n";
$compte1 = new CompteBancaire('Alice', 500.0);
$compte1->afficherSolde();
$compte1->deposer(300);
$compte1->retirer(100);
$compte1->retirer(800);
$compte1->afficherSolde();

echo "\n";

$compte2 = new CompteBancaire('Bob');
$compte2->afficherSolde();
$compte2->deposer(1000);
$compte2->retirer(250);
$compte2->afficherSolde();

echo "\n";

// ─── Exercice 4 : Classe Temperature ──────────────────────────────────────
echo "=== Exercice 4 — Classe Temperature ===\n";
$t1 = new Temperature(100);
$t1->afficher();
$t2 = new Temperature(0);
$t2->afficher();
$t3 = new Temperature(-40);
$t3->afficher();

echo "\nTest de validation :\n";
try {
    $invalid = new Temperature(-300);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}

echo "\n";

// ─── Exercice 5 : Héritage — Gestion d'une école ──────────────────────────
echo "=== Exercice 5 — Héritage — Gestion d'une école ===\n\n";

$personne = new Personne('Alaoui', 'Mohammed', 45);
echo $personne->sePresenter() . "\n\n";

$etudiant1 = new Etudiant('Benali', 'Sara', 20, 'Informatique', 14.5);
$etudiant1->afficher();

$etudiant2 = new Etudiant('Idrissi', 'Karim', 22, 'Gestion', 8.0);
$etudiant2->afficher();

echo "\n";

$prof = new Professeur('El Amrani', 'Fatima', 38, 'Mathématiques', 7500.0);
$prof->afficher();
echo $prof->enseigner() . "\n";

echo "\n";

$chef = new ProfesseurChef('Tazi', 'Hassan', 52, 'Informatique', 12000.0, 'Département Informatique');
$chef->afficher();
echo $chef->enseigner() . "\n";
