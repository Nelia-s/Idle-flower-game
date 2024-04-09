<?php

include __DIR__ . '/Graine.php';

use \Graine\Graines as G;

class Fleur extends G
{
    function Afficher_la_graine()
    {
        echo "La graine que vous avez planter est prete.";
    }
    
    public static function GetFlower(String $fleur) : string {
        return "Votre fleur est une ".$fleur;
    }
}

echo Fleur::GetFlower("Rose");
// $test = new G("Orquide", 4, "Bleu");
// echo $test->Afficher_la_graine();

?>