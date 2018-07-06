<?php


namespace Entity;
use Entity\ClassDe;

class ClassJoueur
{
    public $Points;
     public $EstVivant = true;
    private $de;
    
    public function __construct( int $Points)
    {
		$this->Points = $Points;
       // $de = new ClassDe();
        
        
    } 
    public function getEstvivant():bool
    {
            $this->$EstVivant = true;
                 
    }
    public function Attaque(MonstreFacile $montre):void
    {
        $lancerDe= $this->LanceDe();
        $lancerJoueur= $joueur->LanceDe();
         if ($lancerJoueur >=$lanceMonstre){

            $joueur->SubitDegats();}
        
    }
    
    public function LanceDe():int
    {
                return $this->de->LanceDe();
                 
    }
    
    public function subit(int $degats):void
    {
           if (!$this->Bouclier()){

            $points -= $degats;
            }
    }
    public function Bouclier(int $degats):bool
    {	
		$this->de->LanceDe()<= 2;
		}
}
