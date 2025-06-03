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
$veterinarios = [];
$vendedores = [];
$balconistas = [];

while(true){
    echo "+-------------Menu-------------+\n";
    echo "| 1 - Cadastro de Tutor        |\n";
    echo "| 2 - Cadastro de Produtos     |\n";
    echo "| 3 - Cadastro de Animais      |\n";
    echo "| 4 - Cadastro de Funcionario  |\n";
    echo "| 5 - Vendas                   |\n";
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
            $TutorId = readline("Escolha o tutor pelo ID: ");
            
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
                    break;
                case 2: 
                    $cachorros[] = new Cachorro($tutor, $name, $breed, $color, $paws, $weight, $size);
                    break;
                case 3:
                    $passarinhos[] = new Passarinho($tutor, $name, $breed, $color, $paws, $weight, $size);
                    break;
                default:
                    break;
            }
        case 4: 
            echo "+----Cadastro De Funcionarios---+\n";
            echo "| 1 - Veterinário               |\n";
            echo "| 2 - Vendedor                  |\n";
            echo "| 3 - Balconista                |\n";
            echo "+-------------------------------+\n";
            $funcOptions = readline("Escolha que funcionário registrar: ");
            
            $name = readline("Digite o nome: ");
            $address = readline("Digite o endereço: ");
            $age = readline("Digite a idade: ");
            $contact = readline("Digite o contato: ");
            $salary = readline("Digite o salário: ");

            switch($funcOptions){
                case 1: 
                    $veterinarios[] = new Veterinario($name, $address, $age, $contact, $salary);
                    break;
                case 2:
                    $vendedores[] = new Vendedor($name, $address, $age, $contact, $salary);
                    break;
                case 3:
                    $balconistas = new Balconista($name, $address, $age, $contact, $salary);
                    break;    
                default:
                    break;
            }
        case 5:

    }   
}

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