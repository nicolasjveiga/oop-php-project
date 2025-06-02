<?php

require_once __DIR__ . "/Animais/Passarinho.php";
require_once __DIR__ . "/Animais/Cachorro.php";
require_once __DIR__ . "/Humanos/Tutor.php";
require_once __DIR__ . "/Animais/Gato.php";
require_once __DIR__ . "/Humanos/Funcionarios/Veterinario.php";
require_once __DIR__ . "/Humanos/Funcionarios/Balconista.php";
require_once __DIR__ . "/Humanos/Funcionarios/Vendedor.php";

$tutor1 = new Tutor("João", "Rua", 30, 99999999);

$gato = new Gato($tutor1, "Mimi", "Siamese", "White", 4, 3.5, 30.0);
echo $gato->getNameTutor() . ": \n";
echo $gato->getName() . ": ";
echo $gato->speak() . PHP_EOL;

$cachorro = new Cachorro($tutor1, "Rex", "Labrador", "Black", 4, 30.0, 60.0);
echo $cachorro->getNameTutor() . ": \n";
echo $cachorro->getName() . ": ";
echo $cachorro->speak() . PHP_EOL;

$passarinho = new Passarinho($tutor1, "Tweety", "Canary", "Yellow", 2, 0.1, 15.0);
echo $passarinho->getNameTutor() . ": \n";
echo $passarinho->getName() . ": ";
echo $passarinho->speak() . PHP_EOL;

$veterinario = new Veterinario("Dr. Smith", "Rua Veterinária", 40, 88888888, 1340.50);
echo $veterinario->getName() . ": \n";
echo $veterinario->calcSalario() . PHP_EOL;

$balconista = new Balconista("Maria", "Rua Balconista", 22, 77777777, 1340.5);
echo $balconista->getName() . ": \n";
echo $balconista->calcSalario() . PHP_EOL;

$vendedor = new Vendedor("Carlos", "Rua Vendedor", 28, 66666666, 1340.5);
echo $vendedor->getName() . ": \n";
echo $vendedor->calcSalario() . PHP_EOL;
