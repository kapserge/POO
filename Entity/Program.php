<?php

require 'vendor/autoload.php';
use Entity\ClassJoueur;
$joueur = new ClassJoueur(150);
echo "bonjour";
while($joueur->GetEstVivant())
{
    $monstre = new MonstreFacile();
    while($joueur->getEstvivant() AND $monstre->getEstvivant())
    {
        $joueur->Attaque($monstre);
        if($monstre->getEstvivant() == true)
        {
            $monstre->Attaque($joueur);
        }
    }}

