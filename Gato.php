<?php

require_once 'Animal.php';

class Gato extends Animal{
    
    public function __construct($name, $breed, $color, $paws, $weight, $size){
        parent::__construct($name, $breed, $color, $paws, $weight, $size);
    }
    
    public function speak(){
        return $this->getName() . ": Miau!" . PHP_EOL;
    }

}