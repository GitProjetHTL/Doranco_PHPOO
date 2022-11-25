<?php

class Etudiant{

    
    private $prenom;
    private $nom;
    
    /**
     * __construct() est une méthode magique
     * Les méthodes magiques sont appellés automatiquement au moment de l'instanciations de la classe.
     * On a passé en paramètre de la méthode __construct() le paramètr $prenom. La Méthode __construct a donc maintenant besoin pour fonctionner de cette information.
     * Si la méthode est appelée automatiquement, alors j'aurais besoin de passer à la classe les informations nécessaires.
     * 
     * On utilisera le construct pour obliger l'utilisateur a nous donner au moment de l'instanciation les informations nécessaire au bon fonctionnement de ma class.
     * 
     * A partir de maintenant un Etudiant aura forcément un prenom
     */
    public function __construct($prenom){
        echo "Insanciation de la classe Etudiant <br>";
        $this->setPrenom($prenom);
    }


    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    
}


?>