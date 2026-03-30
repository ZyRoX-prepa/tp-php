<?php

class Voiture
{
    public string $marque;
    public string $modele;
    public int    $annee;
    public int    $vitesseMax;

    public function __construct(string $marque, string $modele, int $annee, int $vitesseMax)
    {
        $this->marque     = $marque;
        $this->modele     = $modele;
        $this->annee      = $annee;
        $this->vitesseMax = $vitesseMax;
    }

    public function estRecente(): bool
    {
        return $this->annee >= 2020;
    }

    public function afficher(): void
    {
        $recente = $this->estRecente() ? 'Récente' : 'Ancienne';
        echo "{$this->marque} {$this->modele} ({$this->annee}) — Vitesse max : {$this->vitesseMax} km/h — {$recente}\n";
    }
}
