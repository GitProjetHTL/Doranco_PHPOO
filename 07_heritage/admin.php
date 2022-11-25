<?php

class utilisateur{

    private $id = 15;
    private $pseudo ;
    private $password;

    public function __construct()
    {
        echo "Création de l'internaute. <br>";
    }

    public function seConnecter(){

        /**
         * --TRAITEMENT DES DONNEES
         * --L'INSERTION DANS LA SESSION DE L'UTILISATEUR
         * 
         */

        return "Je me connecte <br>";
    }

    public function modifieMonProfil(){
        /**
         * --TRAITEMENT DES DONNEES
         * --La REQUETE UPDATE EN SQL
         * 
         */

        return "Modification des données. <br>";
    }
}

class Admin extends Utilisateur{

    public function accessBackOffice()
    {
        /**
         * --VERIFICATION DU STATUS
         * --REDIRECTION VERS UNE PAGE ADMIN
         * 
         */

        return "Acces autorisé au Back Office. <br>";
    }

}

$admin = new Admin();

echo $admin->seConnecter();
echo $admin->accessBackOffice();

$user = new Utilisateur();
//$user->accessBackOffice();//Ici l'utilisateur ne peux pas acceder au BackOffice