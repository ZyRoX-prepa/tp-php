<?php

require_once __DIR__ . '/Personne.php';

class Etudiant extends Personne
{
    private string $filiere;
    private float  $moyenne;

    public function __construct(string $nom, string $prenom, int $age, string $filiere, float $moyenne)
    {
        parent::__construct($nom, $prenom, $age);
        $this->filiere = $filiere;
        $this->moyenne = $moyenne;
    }

    public function estAdmis(): bool
    {
        return $this->moyenne >= 10;
    }

    public function afficher(): void
    {
        $statut = $this->estAdmis() ? 'Admis' : 'Recalé';
        echo $this->sePresenter() . " | Filière : {$this->filiere} | Moyenne : {$this->moyenne} | {$statut}\n";
    }
}
