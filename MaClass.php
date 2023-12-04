<?php
class MaClass
{

    // public
    public string $attributPublic;
    public string $couleur = 'vert';
    public int $age = 54;
    public string $prenom;
    // Une const est automatique en public si on ne le met pas, pat habitude on l'écrit quand même.
    public const  PI = 3.14;
    public int $rayon;


    static string $varStatic = 'Je suis une variable statique';

    // Private
    private string $_attributPrivate;
    private string $_nom = 'Michel Plik';

    // La méthode __construct est appelée automatiquement lorsqu'une nouvelle instance d'une classe est créée. C'est souvent utilisé pour effectuer des initialisations nécessaires à l'objet.
    public function __construct()
    {
        echo 'Je suis une methode magique __construct de la class' . __CLASS__ . "<br>";
    }

    public function displayMethode($value): string
    {
        // echo 'Je suis une methode .';
        // echo 'Je suis une methode .' . $value;
        return $this->prenom . ' aime la couleur ' . $this->couleur . ' ' . $value;
    }

    // 1er methode pour calculer l'air d'un cercle.
    public function calculCercleAir()
    {
        // Les :: servent à appeler la constante.
        // echo self::PI;
        return self::PI * $this->rayon * $this->rayon;
    }

    // 2e methode pour calculer l'air d'un cercle.
    public function calculCercleAir2($rayonParam)
    {
        // Les :: servent à appeler la constante.
        return self::PI * $rayonParam * $rayonParam;
    }

    // La méthode __destruct est appelée automatiquement lorsqu'une instance d'une classe est détruite, c'est-à-dire lorsque l'objet n'est plus référencé ou lorsque la fonction unset() est utilisée pour détruire l'objet.
    public function __destruct()
    {
        echo 'Je suis une methode magique (__destruct) de la class' . __CLASS__ . "<br>";
    }


    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    static function staticFunc()
    {
        return 'Methode statique qui affiche une variable statique ' . self::$varStatic;
    }
}


$objClass = new MaClass();
// echo $obj->couleur . '<br>';
// echo $obj->age . '<br>';
// On ne peut pas acceder à un attribut privé dans une class.
// echo $obj->nom . '<br>';
// $objClass->prenom = 'Bill';
// echo $objClass->displayMethode('');


// 1er methode pour calculer l'air d'un cercle.
$objClass->rayon = 3.5;
echo $objClass->calculCercleAir() . 'cm2' .  "<br>";


// 2e methode pour calculer l'air d'un cercle.
echo $objClass->calculCercleAir2(5) . 'cm2' .  "<br>";

echo maClass::$varStatic;
