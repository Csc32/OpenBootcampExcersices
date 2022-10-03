<?php

class Coche{
    public int $carDoor;

    function __construct($carDoor){
       $this->carDoor = $carDoor; 
    }
    
    public function increaseDoor(int $door){
        $this->result = $this->carDoor + $door;
        echo "the car have $this->result";
    }

}

$miCoche = new Coche(4);
$miCoche->increaseDoor(1);