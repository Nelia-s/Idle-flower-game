<?php

include __DIR__ .'/Terre.php';

use Pot_de_fleur\IPot_de_fleur;
use Terre\Terre;

class Vente implements IPot_de_fleur {

    private $largeur;
    private $longueur;
    private $profondeur;
    private $forme;
    private float $rayon;

    // Catégories de Prix
    // Petit 15€ / Medium 35€ / Grand 59€
    // Matiere ajoute au prix: Plastic +0€ / Metal +15€ / Terre-cuite +20€

    
    function GetLargeur() : float{
        return $this->largeur;
    }

    function GetLongueur() : float{
        return $this->longueur;
    }

    function GetProfondeur() : float{
        return $this->profondeur;
    }

    function GetForme() : string{
        return $this->forme;
    }

    function GetRayon() : float{
        return $this->rayon;
    }

    function CalculerPrix(float $largeur, float $longueur, float $profondeur, string $forme, float $rayon){
        $prix = 0;
        $taille = new Terre($largeur, $longueur, $profondeur, $forme, $rayon);
        if ($taille->Volume() < 2 or $taille->Volume() === 2 ):
            $prix = 15;
            return "Le prix est de $prix €";
        elseif ($taille->Volume() > 2 && $taille->Volume() < 10):
            $prix = 35;
            return "Le prix est de $prix €";
        else:
            $prix = 59;
            return "Le prix est de $prix €";
        endif;
    }
}
$achat = new Vente();
echo $achat->CalculerPrix(1,2,4,"carre",0);
?>
