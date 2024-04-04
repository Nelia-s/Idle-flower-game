<?php

namespace Pot_de_fleur;

interface IPot_de_fleur
{
    function GetLargeur(): float;
    function GetLongueur(): float;
    function GetProfondeur(): float;
    function GetForme(): string;

    //function SetLargeur(float $value);
    //function SetProfondeur(float $value);
    //function SetEpaisseur(float $value);
    //function SetMateriaux(float $value);
    //function SetForme(string $value);
}
