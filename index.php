<?php
include 'MaClass.php';
include 'MaClassHerite.php';

// echo $obj->couleur . '<br>';
// echo $obj->age . '<br>';
// On ne peut pas acceder à un attribut privé dans une class.
// echo $obj->nom . '<br>';
// $objClass->prenom = 'Bill';
// echo $objClass->displayMethode('');


// 1er methode pour calculer l'air d'un cercle.
// $objClass->rayon = 3.5;
// echo $objClass->calculCercleAir() . 'cm2' .  "<br>";


// 2e methode pour calculer l'air d'un cercle.
// echo $objClass->calculCercleAir2(5) . 'cm2' .  "<br>";

$objHerite = new MaClassHerite();

// echo $objHerite->getCouleur();

echo $objHerite->getVariableProtected();

$obj2 = new MaClass();

// je ne peut pas appeler une class protegé, je peut que par l'heritage.
// echo $obj2->varProtected;

$obj2->setNom('Micheline PICOLE' . '<br>');
echo $obj2->getNom();
