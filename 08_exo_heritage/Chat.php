<?php

class Chat extends Animal{
    
    public function quiSuisJe()
    {
        return "Je suis un chat <br>";
    }

    public function manger()
    {
        return parent::manger()."des crocettes <br>";
    }
}