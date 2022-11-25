<?php
class A {

    public function test1()
    {
        return "function test1 class A <br> ";
    }

    protected function testProtected(){
        return "Fonction en portée Protected <br>";
    }
}

class B extends A {

    public function test2()
    {
        return "function test2 class B <br>";
    }

}

$b = new B();//J'instancie un objet de la class B

echo $b->test2();
echo $b->test1();

class C extends B{
    
    public function test3(){
        
        return "Function test3 class C <br>". $this->testProtected();
    }
    
}

//Par effet de transitivité, l'objet 'C' peut acceder aux méthodes de la classe A car la classe C étend B et B étend A
$c = new C();

echo $c->test3();
echo $c->test2();
echo $c->test1();

// B n'a pas accès aux méthodes de ses enfants .

/**
 * Une classe ne peut pas hériter directement de 2 classe différents
 *      ex: class C extends B, A =>interdit
 * 
 * non réflexible : class A extends A {}
 *      ex: class A extends A {}
 * 
 * Non Symétrique
 *      ex: class F extend E {}
 *          class E extend F {}
 *      
 *      =>Interdit. Si F hérite de E, alors E ne peut pas hériter
 */

//echo $c-> testProtected(); // ERREUR je ne peux pas accéder a une méthode protected à l'exterieur de ma class. Je ne peux donc y acceder uniquement dans la class A ou dans Les classes qui héritent de A directement ou indirectement