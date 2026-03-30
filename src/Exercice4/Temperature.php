<?php

class Temperature
{
    private float $valeur;

    public function __construct(float $valeur)
    {
        $this->setValeur($valeur);
    }

    public function setValeur(float $valeur): void
    {
        if ($valeur < -273.15 || $valeur > 1000) {
            throw new InvalidArgumentException(
                "Température invalide : la valeur doit être comprise entre -273.15 et 1000 °C."
            );
        }
        $this->valeur = $valeur;
    }

    public function getValeur(): float
    {
        return $this->valeur;
    }

    public function toFahrenheit(): float
    {
        return ($this->valeur * 9 / 5) + 32;
    }

    public function toKelvin(): float
    {
        return $this->valeur + 273.15;
    }

    public function afficher(): void
    {
        echo "Température : {$this->valeur} °C"
            . " | " . round($this->toFahrenheit(), 2) . " °F"
            . " | " . round($this->toKelvin(), 2) . " K\n";
    }
}
