<?php

class Cercle
{
    private float $rayon;

    public function __construct(float $rayon)
    {
        if ($rayon <= 0) {
            throw new InvalidArgumentException("Le rayon doit être strictement positif.");
        }
        $this->rayon = $rayon;
    }

    public function calculerAire(): float
    {
        return M_PI * $this->rayon * $this->rayon;
    }

    public function afficher(): void
    {
        $aire = $this->calculerAire();
        echo "Cercle (rayon = {$this->rayon}) — Aire : " . round($aire, 4) . "\n";
    }
}
