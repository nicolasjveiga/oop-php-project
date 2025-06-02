<?php

require_once "Passarinho.php";
require_once "Cachorro.php";
require_once "Gato.php";

$gato = new Gato("Mimi", "Siamese", "White", 4, 3.5, 30.0);
echo $gato->speak();

$cachorro = new Cachorro("Rex", "Labrador", "Black", 4, 30.0, 60.0);
echo $cachorro->speak();

$passarinho = new Passarinho("Tweety", "Canary", "Yellow", 2, 0.1, 15.0);
echo $passarinho->speak();