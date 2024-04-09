<?php

namespace Graine;

class Graines
{

    private $espece;
    private $temps_de_pousse;
    private $couleur;
    private $pousse;

    function __construct(string $_espece, int $_temps_de_pousse, string $_couleur)
    {
        $this->espece = $_espece;
        $this->temps_de_pousse = $_temps_de_pousse;
        $this->couleur = $_couleur;
        $this->pousse = 0;
    }

    function getEspece()
    {
        return $this->espece;
    }

    function getTemps_de_pousse()
    {
        return $this->temps_de_pousse;
    }

    function getCouleur()
    {
        return $this->couleur;
    }

    function getPousse()
    {
        return $this->pousse;
    }

    function Arroser()
    {
        return $this->Pousser();
    }

    private function Pousser()
    {
        $this->pousse = $this->pousse + 1;
        if ($this->pousse >= 10) :
            $this->pousse = 0;
            return "La plante a poussé";
        else :
            return "La plante a été arrosée";
        endif;
    }

    function Afficher_la_graine(){
        echo "La fleur que vous avez est une " .$this->espece ." " .$this->couleur .".";
    }
}
?>