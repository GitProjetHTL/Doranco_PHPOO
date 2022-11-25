<?php

class Ingredient
{
    private $nom;
    private $stock;

    public function __construct($nom,$stockIngredient)
    {
        $this->setNom($nom);
        $this->setStock($stockIngredient);
    }

    public function reduireStock($nombreIngredienutiliser){
        
        $this->setStock($this->getstock()-$nombreIngredienutiliser);
        
    }
    
    //Getter & Setter
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

            /**
         * Get the value of stock
         */ 
        public function getStock()
        {
            return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
            $this->stock = $stock;

            return $this;
        }
    //FIN Getter & Setter    

    
}


?>