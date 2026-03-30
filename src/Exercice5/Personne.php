<?php

class Personne
{
    protected string $nom;
    protected string $prenom;
    protected int    $age;

    public function __construct(string $nom, string $prenom, int $age)
    {
        if ($age < 0 || $age > 150) {
            throw new InvalidArgumentException("L'âge doit être compris entre 0 et 150.");
        }
        $this->nom    = $nom;
        $this->prenom = $prenom;
        $this->age    = $age;
    }

    public function sePresenter(): string
    {
        return "Je suis {$this->prenom} {$this->nom}, {$this->age} ans.";
    }
}
