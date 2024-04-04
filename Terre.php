<?php

namespace Terre;

use Pot_de_fleur\IPot_de_fleur;

include __DIR__ . '/Pot.php';

class Terre implements IPot_de_fleur
{

    private float $largeur;
    private float $profondeur;
    private float $longueur;
    private float $rayon;
    private string $forme;

    // Les medures sont en dm pour le calcul du volume
    function __construct(float $_largeur,float $_longueur, float $_profondeur, string $_forme, float $_rayon)
    {
        $this->largeur = $_largeur;
        $this->longueur = $_longueur;
        $this->profondeur = $_profondeur;
        $this->forme = $_forme;
        $this->rayon = $_rayon;
    }

    function GetLargeur(): float
    {
        return $this->largeur;
    }

    function GetLongueur(): float
    {
        return $this->longueur;
    }

    function GetProfondeur(): float
    {
        return $this->profondeur;
    }

    function GetForme(): string
    {
        return $this->forme;
    }

    function GetRayon(): float
    {
        return $this->rayon;
    }

    //Le volume de Terre dépend de la forme, largeur et profondeur du pot
    function Volume()
    {
        $volume = 0.0;
        if ($this->forme==="carre" or $this->forme==="rectangulaire"):
            $volume = $this->longueur * $this->largeur * $this->profondeur;
            return "Votre pot aura besoin de $volume L de terre.";

        elseif($this->forme==="rond"):
            $volume = $this->profondeur * ($this->rayon*$this->rayon) * 3;
            return "Votre pot aura besoin de $volume L de terre.";

        else:
             return "Pas de calcul pour cette forme.";
        endif;
    }
}
