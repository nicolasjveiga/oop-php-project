<?php

abstract class Humano{
    private string $name;
    private string $address;
    private int $age;
    private int $contact;

    public function __construct(string $name,  string $address, int $age, int $contact){
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
        $this->contact = $contact;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getAddress(): string {
        return $this->address;
    }
    public function getAge(): int {
        return $this->age;
    }
    public function getContact(): int {
        return $this->contact;
    }
}