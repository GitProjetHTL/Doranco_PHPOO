<?php 

/**
 * Pour declarer une classe PHP on utilise le mot clé 'class'.
 * Ce mot clé est suivi du nom que l'on souhaite donner à la classe.Ce nom doit OBLIGATOIREMENT être en majuscule. Le reste doit être en camelCase.
 * 
 * ATTENTION TRES IMPORTANT le nom du fichier doit obligatoirement être identique au nom de la classe
 */

class Panier{ //CLASS QUI RECUL7RE LES OBJETS

    /**
     * Les variables présentent à l'intérieur d'une classe sont appelées des 'propriétés'.
     * 
     * Les fonction présentent à l'intérieur d'une classe sint appelées des 'méthodes'.
     * 
     * On est obligés en Orienté Objet de definir la portée d'une propriété et d'une méthode.
     * 
     * Pour definir la portér nous avons 3 mots clés:
     *      -public     =>accessible partout dans le code (dans la classe et en dehors de celle-ci).
     *      -private    =>accessible uniquement dans la classe ou la propriété/ la méthode a été déclarée .
     *      -protected  =>accessible dans la classe ou elle été déclaree mais également dans les classes héritières.
     */

    public $nbProduit;//Cette propriété est accessible partout dans mon code

    public function ajouterArticle(){
        return "L'article à été ajouté <br>";
    }

    private function retirerArticle(){
        return "L'article à été retirer <br>";
    }

}

$panier = new Panier();//On instancie un objet de la classe Panier grâce au mit clé 'new'
//$panier devient un objet de la classe Panier()
//On peut donc maintenant utiliser les propriétés et les méthodes de la class Panier() via l'objet $panier

echo "<pre>";
print_r($panier);
echo "<pre>";

//Pour acceder à une propriété ou une méthode d'un objet on utilise '->'
$panier->nbProduits = 5 ; // Je defini ici le nombre de produit.

echo "<pre>";
print_r($panier);
echo "<pre>";

echo "Le panier n°1 possède $panier->nbProduits produits <br>";//On accède à la propriété nbProduit,qui a une portée 'public' à l'intérieur de ma classe Panier

echo "Ajout d'un article au panier:".$panier->ajouterArticle();//On accède dela meme manière à une méthode

//ATTENTION lorsque l'on affiche le résultat d'un méthode, on est obligé de faire de la concaténation.

//echo " Je supprime un article:".$panier->retirerArticle(); On ne peut pas acceder à une méthode private a l'extérieur de la classe



?>