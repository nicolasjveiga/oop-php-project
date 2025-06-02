<?php

require_once 'Animal.php';

class Cachorro extends Animal{
    
    public function __construct($tutor, $name, $breed, $color, $paws, $weight, $size){
        parent::__construct($tutor, $name, $breed, $color, $paws, $weight, $size);    
    }

    public function speak(){
        return $this->getName().  ": Au Au!" . PHP_EOL;
    }

}
