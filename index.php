<?php

require_once __DIR__ . "/Animais/Passarinho.php";
require_once __DIR__ . "/Animais/Cachorro.php";
require_once __DIR__ . "/Humanos/Tutor.php";
require_once __DIR__ . "/Animais/Gato.php";
require_once __DIR__ . "/Humanos/Funcionarios/Veterinario.php";
require_once __DIR__ . "/Humanos/Funcionarios/Balconista.php";
require_once __DIR__ . "/Humanos/Funcionarios/Vendedor.php";
require_once __DIR__ . "/Vendas/ItemVenda.php";
require_once __DIR__ . "/Vendas/Produto.php";
require_once __DIR__ . "/Vendas/Venda.php";

$tutores = [];
$produtos = [];
$gatos = [];
$cachorro = [];
$passarinhos = [];

while(true){
    echo "+-------------Menu-------------+\n";
    echo "| 1 - Cadastro de Tutor        |\n";
    echo "| 2 - Cadastro de Produtos     |\n";
    echo "| 3 - Cadastro de Animais      |\n";
    echo "| 4 - Cadastro de Funcionario  |\n";
    echo "| 2 - Vendas                   |\n";
    echo "+------------------------------+\n";
    $option = readline("Escolha uma opção: ");
    
    switch($option){
        case 1:
            $name = readline ("Digite o Nome: ");
            $address = readline ("Digite o Endereço: ");
            $age = readline ("Digite a idade: ");
            $contact = readline ("Digite o contato: ");
            $tutores[] = new Tutor($name, $address, $age, $contact);
            break;
        case 2:
            $name = readline("Digite o Nome do Produto: ");
            $produtos[] = new Produto($name);
            break;
        case 3:
            echo "+------Cadastro De Animais-----+\n";
            echo "| 1 - Gato                     |\n";
            echo "| 2 - Cachorro                 |\n";
            echo "| 3 - Passarinho               |\n";
            echo "+------------------------------+\n";
            $animalOption = readline ("Escolha qual animal deseja Cadastrar: ");
            if (empty($tutores)) {
                echo "Cadastre um tutor antes!";
                break;
            }

            echo "Tutores Cadastrados:\n";
            foreach($tutores as $i => $tutor){
                echo "$i - " . $tutor->getName() . "\n";
            }
            $TutorId = readline("Escolha o tutor pelo ID");
            
            $tutor = $tutores[$TutorId];
            $name = readline("Digite o nome do animal: ");
            $breed = readline("Digite a raça do animal: ");
            $color = readline("Digite a cor do animal: ");
            $paws = readline("Digite a quantidade de patas: ");
            $weight = readline("Digite o peso do animal: ");
            $size = readline("Digite o tamanho do animal: ");
            
            switch($animalOption){
                case 1:
                    $gatos[] = new Gato($tutor, $name, $breed, $color, $paws, $weight, $size);
                    print_r($gatos);
                    break;
                case 2: 
                    break;
                case 3:
                    break;
            }
        case 4: 
    }
}


// $gato = new Gato($tutor1, "Mimi", "Siamese", "White", 4, 3.5, 30.0);
// echo $gato->getNameTutor() . ": \n";
// echo $gato->getName() . ": ";
// echo $gato->speak() . PHP_EOL;

// $cachorro = new Cachorro($tutor1, "Rex", "Labrador", "Black", 4, 30.0, 60.0);
// echo $cachorro->getNameTutor() . ": \n";
// echo $cachorro->getName() . ": ";
// echo $cachorro->speak() . PHP_EOL;

// $passarinho = new Passarinho($tutor1, "Tweety", "Canary", "Yellow", 2, 0.1, 15.0);
// echo $passarinho->getNameTutor() . ": \n";
// echo $passarinho->getName() . ": ";
// echo $passarinho->speak() . PHP_EOL;

// HUMANOS

// $veterinario = new Veterinario("Dr. Smith", "Rua Veterinária", 40, 88888888, 1340.50);
// echo $veterinario->getName() . ": \n";
// echo $veterinario->calcSalario() . PHP_EOL;

// $balconista = new Balconista("Maria", "Rua Balconista", 22, 77777777, 1340.5);
// echo $balconista->getName() . ": \n";
// echo $balconista->calcSalario() . PHP_EOL;

// $vendedor = new Vendedor("Carlos", "Rua Vendedor", 28, 66666666, 1340.5);
// echo $vendedor->getName() . ": \n";
// echo $vendedor->calcSalario() . PHP_EOL;

// VENDAS

// $p1 = new Produto("Produto 1");
// $p2 = new Produto("Produto 2");
// $p3 = new Produto("Produto 3");

// $venda = new Venda($tutor1);

// $venda->addItens(new ItemVenda($p1, 2));
// $venda->addItens(new ItemVenda($p2, 3));

// $venda2 = new Venda($tutor2);

// $venda2->addItens(new ItemVenda($p1, 3));
// $venda2->addItens(new ItemVenda($p2, 5));
// $venda2->addItens(new ItemVenda($p3, 6));

// foreach ($venda->listarItens() as $info) {
//     echo $info . PHP_EOL;
// }
// foreach ($venda2->listarItens() as $info) {
//     echo $info . PHP_EOL;
//}