<?php

class Gateau{

    private $nom;
    private $quantitéIngredient;
    private $nombreDePart;

    
    public function __construct($nomDuGateau,$quantitéIngredient)
    {
        echo "Instanciation de la classe Gateau";
        $this->setNom($nomDuGateau);
        $this->setQuantitéIngredient($quantitéIngredient);
    }


    public function couperGateau($nombreDePart){
        
        //enregistrer dans la propriété nombreDePart
        $this->setNombreDePart($nombreDePart);

        //Je renvoie un message
        return " <p>Le gateau a été coupé en ".$this->getNombreDePart() ." parts <p>";
    }



    public function distribuerGateau($nombreDePartDistribuer){

        //Si le gateau n'est pas coupé
        //  empty(this->getNombreDePart)
        if ($this->getNombreDePart() == 0) {

            return '<br> Le gateau n\'a pas encore été coupé ! <br>';

        }elseif($nombreDePartDistribuer > $this->getNombreDePart()) {

            return '<br> Il n\'y a pas assez de part pour tout le monde ! <br>';

        }else{
            // $this->setNombreDePart($this->getNombreDePart()-$nombreDePartDistribuer);
            $nombreDePartDistribuer;
            $nbPartGateau=$this->getNombreDePart();

            $nouveauNbPart = $nbPartGateau-$nombreDePartDistribuer;

            return  '<br>'.$nombreDePartDistribuer.' parts on été distribuées. Il  reste  '.$nouveauNbPart .' part de gateaux. <br>' ;
        }
    }



    public function cuisinergateau(Ingredient $ingredient){
        if ($ingredient->getStock() >= $this->getQuantitéIngredient()) {


            $ingredient->reduireStock($this->getQuantitéIngredient());

            return 'Le gâteau est prêt ! Le stock de l\'ingrédient ' .$ingredient->getNom().' est maintenant de  '.$ingredient->getStock().'. <br>';
            
        } else{
            return " <br>Il n'y a pas assez de ".$ingredient->getNom(). " pour faire le gâteau ".$this->getNom()." .<br>";
        }

    }
    


    //Getter & Setter
        /**
         * Get the value of nombreDePart
         */ 
        public function getNombreDePart()
        {
            return $this->nombreDePart;
        }

        /**
         * Set the value of nombreDePart
         *
         * @return  self
         */ 
        public function setNombreDePart($nombreDePart)
        {
            $this->nombreDePart = $nombreDePart;

            return $this;
        }

        /**
         * Get the value of quantitéIngredient
         */ 
        public function getQuantitéIngredient()
        {
            return $this->quantitéIngredient;
        }

        /**
         * Set the value of quantitéIngredient
         *
         * @return  self
         */ 
        public function setQuantitéIngredient($quantitéIngredient)
        {
            $this->quantitéIngredient = $quantitéIngredient;

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
    //Fin Guetter & Setter    
}
        