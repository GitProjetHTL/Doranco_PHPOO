<?php

class Maison{

    public $couleurMurs = "Blanc";//Appartient à l'objet
    private $nbPortes = 10;//Appartient à l'objet

    //Une constante par convention s'écrire TOUJOURS en Majuscule. Attention il n' y a pas de '$' au moment de la déclaration.
    //L''interet d'une constante est que sa valeur ne changera jamais.
    const HAUTEUR ="4m";//Appartient a la classe

    public static $terrain ="300m²";//Appartient à la classe

    private static $nbPiece= 3;//Appartien à la classe

    /**
     * Get the value of nbPortes
     */ 
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * Set the value of nbPortes
     *
     * @return  self
     */ 
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }

    /**
     * Get the value of nbPiece
     */ 
    public static function getNbPiece() //rajoute static
    {
        return self::$nbPiece;
    }

    /**
     * Set the value of nbPiece
     *
     */ 

    public static function setNbPiece($nbPiece)//rajoute static
    {
        self::$nbPiece = $nbPiece;

        
    }
}

$maison = new Maison();

echo "Couleurs des Murs : ".$maison->couleurMurs;

echo "<hr>";

echo "Nombre de porte :" .$maison->getNbPortes();

echo "<hr>";

$villa = new Maison();
$villa->couleurMurs ="Rouge";

echo "Couleurs des Murs : ".$villa->couleurMurs;

echo "<hr>";

echo "Nombre de porte :" .$villa->getNbPortes();

echo "<hr>";

/**
 * On essaye d'acceder à la constante 'HAUTEUR'
 * On la defini plus haut q'une constante appartenait à la classe
 * On ne peut pas accéder a la constante via un objet, on doit passer obligatoirement par la classe
 * l'opérateur "->" est utiliser pour acceder à un objet. Ici on passe par la classe, on doit donc utiliser l'opérateur "::"
 * 
 * C'est ce qu'on utilisais lors de la connexion à la BDD :
 * PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING
 * 
 */

echo "Hauteur du premier étage de la maison : " .Maison::HAUTEUR;

echo "<hr>";
echo "Hauteur du premier étage de la villa: " .Maison::HAUTEUR;

echo "<hr>";

echo "Taille du terrain: " .Maison::$terrain;

echo "<hr>";
echo "Nombre de pièce: " .Maison::getNbPiece();

echo "<hr>";

/**
 * Tous les objets ont les mêmes propriété (couleurMurs, nbPortes, terrain ...) mais leurs valeurs peuvent changer. On peut definir la couleurMurs en fonction de notre objet.
 * Dans certains cas nous avons besoin de definir des valeurs qui doivent être identique pourtous les objets.
 * 
 * Pour faire cela, nous avons 2 options:
 *      -Definition d'une constante. Une constante appartient à la classe, tous les objets auront la même valeur. La limite de la constante est que cette valeur ne pourra jamais changer.
 * 
 *      -Definition de proriété 'static'. Ce type de propriété appartient à la classe, tous les objets auront la même valeur. L'interet de déclarer des propriétés static est que contrairement à la constante , je pourrais changer sa valeur. Lorsque je change la valeur d'une propriété static tous les objets sont impactés?
 */

$appartement = new Maison();

echo "Terrain Maison: " .Maison::$terrain;
echo "<hr>";
$appartement :: $terrain = '70m2';

echo "Terrain Maison: " .Maison::$terrain;
echo "<hr>";

/** 
 * Il existe des exeption pour accéder aux propriété 'static'
 *      -Je peux acceder a une propriété static depuis un objet en utilisant l'opérateur'::'
 *      -Je peux utiliser les méthodes static de manière 'normal' via l'objet.
 */