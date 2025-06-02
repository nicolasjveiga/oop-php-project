<?php

require_once 'Animal.php';

class Gato extends Animal{
    
    public function __construct($tutor, $name, $breed, $color, $paws, $weight, $size){
        parent::__construct($tutor, $name, $breed, $color, $paws, $weight, $size);
    }
    
    public function speak(){
        echo $this->getNameTutor() . PHP_EOL;
        return $this->getName() . ": Miau!" . PHP_EOL;
    }

}