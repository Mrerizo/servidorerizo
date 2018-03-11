<?php
class Car{
    private $owner;
    
    function __destruct(){
        echo "<div>el carro de $this->owner se destruyó</div>";
    }
    
    function __construct($owner){
        echo "<div>El constructor funciona</div>";
        $this->owner = $owner;
    }
    
    function setOwner($owner){
        $this->owner = $owner;
    }
    
    function move(){
        echo "<div>Carro en movimiento</div>";
    }
}

$car1 = new Car("derian");
echo "el propietario es:" . $car1->owner;
$car1->move();
$car1->owner = "Robert";