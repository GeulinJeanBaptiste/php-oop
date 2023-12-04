<?php


// Je créer une class "MaClassHerite étendu à MaClass.
class MaClassHerite extends MaClass
{
    // Je créer un constructeur 
    /*     public function __const()
    {
        // J'appelle le constructeur parent.
        parent::__construct();
    } */

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function getVariableProtected()
    {
        return $this->varProtected;
    }
}


