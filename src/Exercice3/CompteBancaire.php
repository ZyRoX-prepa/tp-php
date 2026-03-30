<?php

class CompteBancaire
{
    private string $titulaire;
    private float  $solde;
    private string $numero;

    public function __construct(string $titulaire, float $solde = 0)
    {
        $this->titulaire = $titulaire;
        $this->solde     = $solde;
        $this->numero    = 'CPT-' . strtoupper(substr(md5(uniqid()), 0, 8));
    }

    public function deposer(float $montant): void
    {
        if ($montant <= 0) {
            echo "Dépôt invalide : le montant doit être positif.\n";
            return;
        }
        $this->solde += $montant;
        echo "Dépôt de {$montant} MAD effectué sur le compte {$this->numero}.\n";
    }

    public function retirer(float $montant): void
    {
        if ($montant <= 0) {
            echo "Retrait invalide : le montant doit être positif.\n";
            return;
        }
        if ($montant > $this->solde) {
            echo "Retrait refusé : solde insuffisant (solde actuel : {$this->solde} MAD).\n";
            return;
        }
        $this->solde -= $montant;
        echo "Retrait de {$montant} MAD effectué sur le compte {$this->numero}.\n";
    }

    public function afficherSolde(): void
    {
        echo "Compte {$this->numero} — Titulaire : {$this->titulaire} — Solde : {$this->solde} MAD\n";
    }
}
