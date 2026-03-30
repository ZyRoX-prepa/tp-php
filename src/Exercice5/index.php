<?php

require_once __DIR__ . '/Etudiant.php';
require_once __DIR__ . '/ProfesseurChef.php';

echo "=== Exercice 5 — Héritage — Gestion d'une école ===\n\n";

$personne = new Personne('Alaoui', 'Mohammed', 45);
echo $personne->sePresenter() . "\n";

echo "\n";

$etudiant = new Etudiant('Benali', 'Sara', 20, 'Informatique', 14.5);
$etudiant->afficher();

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
