<?php

require_once "Animal.php";

class Passarinho extends Animal{

    public function __construct($tutor, $name, $breed, $color, $paws, $weight, $size){
        parent::__construct($tutor, $name, $breed, $color, $paws, $weight, $size);
        
    }

    public function speak(){
        return ": Piu!";
    }
}