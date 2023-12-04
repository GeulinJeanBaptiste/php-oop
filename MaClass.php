<?php
class MaClass
{
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 54;
    public string $prenom;
    // Une const est automatique en public si on ne le met pas, pat habitude on l'écrit quand même.
    public const  PI = 3.14;
    public int $rayon;


    private string $_attributPrivate;
    private string $_nom = 'Michel Plik';

    public function displayMethode($value): string
    {
        // echo 'Je suis une methode .';
        // echo 'Je suis une methode .' . $value;
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' . $value;
    }

    public function calculCercleAir()
    {
        // Les :: servent à appeler la constante.
        // echo self::PI;
        return self::PI * $this->rayon * $this->rayon;
    }
    public function calculCercleAir2($rayonParam)
    {
        // Les :: servent à appeler la constante.
        return self::PI * $rayonParam * $rayonParam;
    }
}
$objClass = new MaClass();
// echo $obj->couleur . '<br>';
// echo $obj->age . '<br>';
// On ne peut pas acceder à un attribut privé dans une class.
// echo $obj->nom . '<br>';
// $objClass->prenom = 'Bill';
// echo $objClass->displayMethode('');
$objClass->rayon = 3.5;
echo $objClass->calculCercleAir() . 'cm2' .  "<br>";

echo $objClass->calculCercleAir2(5) . 'cm2' .  "<br>";
