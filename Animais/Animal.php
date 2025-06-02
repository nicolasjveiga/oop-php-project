<?php

require_once __DIR__ . "/../Humanos/Tutor.php";

abstract class Animal {
    private Tutor $tutor;
    private string $name;
    private string $breed;
    private string $color;
    private int $paws;
    private float $weight;
    private float $size;

    public function __construct(Tutor $tutor, string $name, string $breed, string $color, int $paws, float $weight, float $size){
        $this->tutor = $tutor;
        $this->name = $name;
        $this->breed = $breed;
        $this->color = $color;
        $this->paws = $paws;
        $this->weight = $weight;
        $this->size = $size;
    }

    public function getNameTutor(): string {
        return $this->tutor->getName();
    }
    public function getName(): string{
        return $this->name;
    }
    public function getBreed(): string{
        return $this->breed;
    }
    public function getColor(): string {
        return $this->color;
    }
    public function getPaws(): int{
        return $this->paws;
    }
    public function getWeith(): float {
        return $this->weight;
    }
    public function getSize(): float {
        return $this->size;
    }

    abstract public function speak();    
}
