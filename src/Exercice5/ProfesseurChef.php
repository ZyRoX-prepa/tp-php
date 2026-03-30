<?php

require_once __DIR__ . '/Professeur.php';

class ProfesseurChef extends Professeur
{
    private string $departement;

    public function __construct(
        string $nom,
        string $prenom,
        int    $age,
        string $matiere,
        float  $salaire,
        string $departement
    ) {
        parent::__construct($nom, $prenom, $age, $matiere, $salaire);
        $this->departement = $departement;
    }

    public function afficher(): void
    {
        echo $this->sePresenter()
            . " | Matière : {$this->matiere}"
            . " | Salaire : {$this->salaire} MAD"
            . " | Chef du département : {$this->departement}\n";
    }
}
