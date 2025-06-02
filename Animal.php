<?php

abstract class Animal {
    private string $name;
    private string $breed;
    private string $color;
    private int $paws;
    private float $weight;
    private float $size;

    abstract public function speak();    

    public function __construct(string $name, string $breed, string $color, int $paws, float $weight, float $size){
        $this->name = $name;
        $this->breed = $breed;
        $this->color = $color;
        $this->paws = $paws;
        $this->weight = $weight;
        $this->size = $size;
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


}
