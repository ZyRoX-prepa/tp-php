<?php

require_once __DIR__ . '/Personne.php';

class Professeur extends Personne
{
    protected string $matiere;
    protected float  $salaire;

    public function __construct(string $nom, string $prenom, int $age, string $matiere, float $salaire)
    {
        parent::__construct($nom, $prenom, $age);
        $this->matiere = $matiere;
        $this->salaire = $salaire;
    }

    public function enseigner(): string
    {
        return "{$this->prenom} {$this->nom} enseigne la matière : {$this->matiere}.";
    }

    public function afficher(): void
    {
        echo $this->sePresenter() . " | Matière : {$this->matiere} | Salaire : {$this->salaire} MAD\n";
    }
}
