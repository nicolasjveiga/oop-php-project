<?php

require_once __DIR__ . "/../Humano.php";

abstract class Funcionario extends Humano{
    private float $salary;

    public function __construct($name, $address, $age, $contact, $salary){
        parent::__construct($name, $address, $age, $contact, $salary);
        $this->salary = $salary;
    }

    public function getSalary(){
        return $this->salary;
    }

    abstract function calcSalario();
}