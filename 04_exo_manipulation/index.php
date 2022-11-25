<!-- 1. Création d'une classe véhicule 
2. Définir 2 propriétés : litreEssence et reservoirMax
3. Créer un constructor avec ces 2 propriétés. Le nombre de litres d'essence est obligatoire, le reservoirMax est fixé à 50 par défaut avec la possibilité de le changer.
4. Créer un objet véhicule
5. Attribuer un nombre de litre d'essence au véhicule (5 litres d'essence)
6. Afficher le nombre de litres d'essence du véhicule
7. Création d'une classe pompe
8. Définir 2 propriétés : litreEssence et essenceDistribue
9. Créer un constructor avec la propriété litre d'essence obligatoire. La propriété essenceDistribue ne doit pas apparaitre dans le construct.
10. Créer un objet pompe
11. Attribuer un nombre de litre d'essence à la pompe (800 litres d'essence)
12. Afficher le nombre de litres d'essence de la pompe
13. Créer une méthode dans la classe Vehicule qui permet d'ajouter de l'essence ( ajouterEssence() ). Avec cette méthode on doit pouvoir ajouter n'importe quel quantité d'essence au véhicule en prenant en compte, bien évidement, la quantité déjà présente dans le véhicule. 
14. Créer une méthode fairePlein() dans la classe Pompe qui permettra de faire le plein du réservoir sur un véhicule donné. Cette méthode permettra de définir l'essenceDistribue, d'ajouter de l'essence au véhicule et de réduire le nombre de littre d'essence de la pompe. 

UML:
---------------------
|    Vehicule		|
---------------------
|	$litresEssence	|
|	$reservoirMax	|
---------------------
| __construct()     |
|                   |
| getLitresEssence()|
| setLitresEssence()|
|                   |
| getReservoirMax() |
| setReservoirMax() |
|                   |
| ajouterEssence()  |
---------------------

-------------------------
|    Pompe   		    |
-------------------------
|	$litresEssence	    |
|	$essenceDistribue	|
-------------------------
| __construct()         |
|                       |
| getLitresEssence()    |
| setLitresEssence()    |
|                       |
| getessenceDistribue() |
| setessenceDistribue() |
|                       |
| fairePlein()          |
------------------------- -->
<?php

require_once "Vehicule.php";

require_once "Pompe.php";


$vehicule= new Vehicule("5");


$pompe= new Pompe(800);

echo "<br>";
var_dump($vehicule);
echo "<br>";


//fonction  ajouter essence




echo "<br> <br> Le vehicule N°1 possède: " . $vehicule->getLitresEssence(). " litres d'essences. <br>" ;
echo "<br> <br> La pompe N°1 possède: " . $pompe->getLitreEssence(). " litres d'essences. <br>" ;


$vehicule->ajouterEssence(10);

echo "<br> <br> Le vehicule N°1 possède: " . $vehicule->getLitresEssence(). " litres d'essences. <br>" ;


$vehicule->ajouterEssence(100);

echo "<br> <br> Le vehicule N°1 possède: " . $vehicule->getLitresEssence(). " litres d'essences. <br>" ;





//fonction faire le plein
//la pompe fait le plein dur le véhicule
$pompe->fairePlein($vehicule);

echo "<br> <br> Après le plein le vehicule n1 possède: " . $vehicule->getLitresEssence(). " litres d'essences. <br>" ;
echo "<br> <br> Après le plein  la pompe N1 possède " . $pompe->getLitreEssence(). " litres d'essences. <br>" ;



// echo "<br>";
// var_dump($pompe);
// echo "<br>";


// echo " <br> La station d'essence a actuellement fourni ".$pompe->getEssenceDistribue()." litres. <br>";
// echo " <br> La station d'essence contient donc ".$pompe->getLitreEssence()." litres. <br>";

















?>