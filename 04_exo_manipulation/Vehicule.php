<?php 

class Vehicule{

    private $litresEssence;
    private $reservoirMax;
    
    //fonction construct
        public function __construct($litresEssence,$reservoirMax=50)
        {
            echo "Instanciation de la classe Vehicule <br>";
            $this->setReservoirMax($reservoirMax);
            $this->setLitresEssence($litresEssence);
        }
    // FIN fonction construct
    // fonction AjoutEssence qui permettra de remplir le véhicule. Elle change de la propriété $litreEssence
        
    public function ajouterEssence($quantite){
        if ($this->getLitresEssence()+$quantite <= $this->getReservoirMax()) {
            $this->setLitresEssence($this->getLitresEssence()+$quantite);
        }else{
        
        echo "Attention la quantité demander est supérieur au réservoir Max <br>";
        echo "quantité Max autorisé: " .($this->getReservoirMax()-$this->getLitresEssence())."<br>";
        }
        
        
    }
    // FIN fonction construct
    

    /**
     * Get the value of litresEssence
     */ 
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    /**
     * Set the value of litresEssence
     *
     * @return  self
     */ 
    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;

        return $this;
    }

    /**
     * Get the value of reservoirMax
     */ 
    public function getReservoirMax()
    {
        return $this->reservoirMax;
    }

    /**
     * Set the value of reservoirMax
     *
     * @return  self
     */ 
    public function setReservoirMax($reservoirMax)
    {
        $this->reservoirMax = $reservoirMax;

        return $this;
    }
}















?>