<?php

require_once 'Humano.php';

class Tutor extends Humano{

    public function __construct(string $name, string $address, int $age, int $contact){
        parent::__construct($name, $address, $age, $contact);
    }
}