<?php

require_once __DIR__ . "/Animais/Passarinho.php";
require_once __DIR__ . "/Animais/Cachorro.php";
require_once __DIR__ . "/Humanos/Tutor.php";
require_once __DIR__ . "/Animais/Gato.php";


$tutor1 = new Tutor("João", "Rua", 30, 99999999);

$gato = new Gato($tutor1, "Mimi", "Siamese", "White", 4, 3.5, 30.0);
echo $gato->speak();

$cachorro = new Cachorro($tutor1, "Rex", "Labrador", "Black", 4, 30.0, 60.0);
echo $cachorro->speak();

$passarinho = new Passarinho($tutor1, "Tweety", "Canary", "Yellow", 2, 0.1, 15.0);
echo $passarinho->speak();