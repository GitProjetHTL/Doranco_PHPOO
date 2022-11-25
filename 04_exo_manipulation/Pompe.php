<?php 

class Pompe
{
    private $litreEssence;
    private $essenceDistribue;
    // fonction __construct
        public function __construct($litreEssence)
        {
            echo "Instanciation de la classe Pompe <br>";
            $this->setLitreEssence($litreEssence);
        }
    // FIN fonction construct
    // fonction fairePlein
        //On fait ici de l'injection de dépendance. C'est à dire qu'on utilise en paramètre un objet d'une classe externe
        public function fairePlein(Vehicule $vehicule){
            $this->setEssenceDistribue($vehicule->getReservoirMax()-$vehicule->getLitresEssence());
            //definir le nombre de litre d'essence a distribuer
            $vehicule->ajouterEssence($this->getEssenceDistribue());
            //ajouter de l'essence au vehicule

            //reduire le stock de la pompe
            $this->setLitreEssence($this->getLitreEssence()-$this->getEssenceDistribue());
            
        }
    // FIN fonction fairePlein

    /**
     * Get the value of essenceDistribue
     */ 
    public function getEssenceDistribue()
    {
        return $this->essenceDistribue;
    }

    /**
     * Set the value of essenceDistribue
     *
     * @return  self
     */ 
    public function setEssenceDistribue($essenceDistribue)
    {
        $this->essenceDistribue = $essenceDistribue;

        return $this;
    }

    /**
     * Get the value of litreEssence
     */ 
    public function getLitreEssence()
    {
        return $this->litreEssence;
    }

    /**
     * Set the value of litreEssence
     *
     * @return  self
     */ 
    public function setLitreEssence($litreEssence)
    {
        $this->litreEssence = $litreEssence;

        return $this;
    }
}










?>