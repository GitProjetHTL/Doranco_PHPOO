<?php


/**
 * Dans sa BDD l'entreprise stock des informations de personnes :
 *      Employer
 *      Clients
 *          Premium
 * 
 * 
 *  Personne
 *      nom
 *      prenom
 *      age
 * 
 *  Employer extends Personne
 *      Service
 *      Salaire
 * 
 *  Clients extends Personne
 *      email
 *      adress
 *      numeroClient
 * 
 *  Premium extends Client
 *      reduction
 *  
 */
 class Personne {
    protected $nom;
    protected $prenom;
    protected $age;

    public function __construct($nom,$prenom,$age)
    {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->age = $age ;
    }

    public function identite()
    {
        return "Nom : $this->nom <br>
                Prenom : $this->prenom <br>
                Age : $this->age <br>";
    }
}

class Employer extends Personne{

    private $service;
    private $salaire;

    public function __construct($nom,$prenom,$age,$service,$salaire)
    {
        parent :: __construct($nom,$prenom,$age);
        $this->service=$service;
        $this->salaire=$salaire;

    }

    public function identite()
    {

        return  parent::identite() ."Service : $this->service <br>
                Salaire : $this->salaire <br>";
    }

    
}

class Clients extends Personne{

    protected $email;
    protected $adress;
    protected $numeroClient;

    public function __construct($nom,$prenom,$age,$email,$adress,$numeroClient)
    {
        parent :: __construct($nom,$prenom,$age);
        $this->email =$email;
        $this->adress=$adress;
        $this->numeroClient=$numeroClient;

    }

    public function identite()
    {

        return  parent::identite() ."Email : $this->email <br>
                                    Adress : $this->adress <br>
                                    NumeroClient : $this->numeroClient <br>";
    }
    
    
}

class Premium extends Clients{

    private $reduction;

    public function __construct($nom,$prenom,$age,$email,$adress,$numeroClient,$reduction)
    {
        parent :: __construct($nom,$prenom,$age,$email,$adress,$numeroClient);
        $this->reduction=$reduction;
    }
    public function identite()
    {

        return  parent::identite() ."Reduction : $this->reduction  % <br>";
    }

}

$employe = new Employer('Ha','Tan Luc',28,'informatique',3000);
$client= new Clients('Ha','Tan Luc',28,"hatanluc0@gmail.com","44 Rue chance milly",1);
$clientPremium= new Premium('Ha','Tan Luc',28,"hatanluc0@gmail.com","44 Rue chance milly",1,5);


echo $employe->identite()."<br>";

echo $client->identite()."<br>";

echo $clientPremium->identite()."<br>";