<?php

class Elephant extends Animal{
    
    public function quiSuisJe()
    {
        return "Je suis un elephant et ".$this->deplacement();
    }

    
}