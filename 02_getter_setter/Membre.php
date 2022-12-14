<?php
/*

    Déclarez une classe 'Membre' avec comme propriétés pseudo et mdp.
    Les propriétés doivent être privées.
    Vous devez donc créer des getter et setter pour pouvoir y accéder.
    Instanciez un membre et ajoutez lui un pseudo et un mdp.

    Sur votre navigateur je veux voir les écritures suivantes : 
    
    Pseudo : (le pseudo que vous avez choisi)
    Mdp : (le mdp que vous avez choisi)

    
    EXERCICE BONUS => controler la longeur du pseudo et du mdp. 
    Le pseudo doit contenir entre 4 et 15 caractères
    Le mdp doit contenir minimum 8 caractères 

 */



class Membre {

    
    private $pseudo;
    private $mdp;

    public function getPseudo(){

        return $this -> pseudo;
    }
        
    public function getMdp(){

        return $this -> mdp;
    }
        public function setPseudo($pseudo){
            if (ctype_alpha ($pseudo) && iconv_strlen(trim($pseudo))>=4 && iconv_strlen(trim($pseudo))<=15 ) {
                $this->pseudo=$pseudo;
            }
            else {
                echo "Mettez un Pseudo entre 4 et 15 caractères.";
            }
        }

        public function setMdp($mdp){
            if (iconv_strlen(trim($mdp)) >= 8 ) {
                
                $this->mdp=$mdp;
            }
            else {
                echo "Mettez un Mdp supérieur à 8 caractères.";
            }
        }
    
        

    }
    $membre = new Membre();
    $membre->setPseudo("aota");
    $membre->setMdp("aaaaaaaa");
    echo  "Pseudo: ".$membre->getPseudo("")."<br>";
    echo  "Mdp: ".$membre->getMdp("")."<br>" ;



?>