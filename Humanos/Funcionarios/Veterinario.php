<?php

require_once __DIR__ . "/Funcionario.php";

class Veterinario extends Funcionario{
    
    public function __construct($name, $address, $age, $contact, $salary){
        parent::__construct($name, $address, $age, $contact, $salary);
    }
    
    public function calcSalario(): float {
        return $this->getSalary() * 100; 
    }
}