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
$vendas = [];

function listarTutores($tutores): bool{
    if (empty($tutores)) {
        echo "Cadastre um tutor antes!\n";
        return false;
    }
    echo "Tutores Cadastrados:\n";
    foreach($tutores as $i => $tutor){
        echo "$i - " . $tutor->getName() . "\n";
    }
    return true;
}

function listarProdutos($produtos): bool{
    if (empty($produtos)) {
        echo "Cadastre um produto antes!\n";
        return false;
    }
    echo "Produtos disponíveis:\n";
    foreach($produtos as $i => $produto){
        echo "$i - " . $produto->getName() . " \n"; 
    }
    return true;
}
function clear() {
    system('clear');
}

while(true){
    clear();
    echo "+-------------Menu-------------+\n";
    echo "| 1 - Cadastro de Humano       |\n";
    echo "| 2 - Cadastro de Produtos     |\n";
    echo "| 3 - Cadastro de Animais      |\n";
    echo "| 4 - Vender                   |\n";
    echo "+------------------------------+\n";
    $option = readline("Escolha uma opção: ");
    
    switch($option){
        case 1:
            clear();
            echo "+------Cadastro De Humanos------+\n";
            echo "| 1 - Veterinário               |\n";
            echo "| 2 - Vendedor                  |\n";
            echo "| 3 - Balconista                |\n";
            echo "| 4 - Tutor                     |\n";
            echo "+-------------------------------+\n";
            $humanOption = readline("Escolhe o que cadastrar: ");

            $name = readline ("Digite o Nome: ");
            $address = readline ("Digite o Endereço: ");
            $age = readline ("Digite a idade: ");
            $contact = readline ("Digite o contato: ");
            switch($humanOption){
                case 1:
                case 2:
                case 3:
                    $salary = readline("Digite o salário: ");
                    break;
                default:
                    $salary = null;
            }

            switch($humanOption){
                case 1: 
                    $veterinarios[] = new Veterinario($name, $address, $age, $contact, $salary);
                    break;
                case 2: 
                    $vendedores[] = new Vendedor($name, $address, $age, $contact, $salary);
                    break;
                case 3:
                    $balconista[] = new Balconista($name, $address, $age, $contact, $salary);
                    break;
                case 4:
                    $tutores[] = new Tutor($name, $address, $age, $contact);
                    break;
            }
            break;
        case 2:
            clear();
            echo "+-----Cadastro de produtos-----+\n";
            $name = readline("Digite o Nome do Produto: ");
            $produtos[] = new Produto($name);
            break;
        case 3:
            clear();
            echo "+------Cadastro De Animais-----+\n";
            echo "| 1 - Gato                     |\n";
            echo "| 2 - Cachorro                 |\n";
            echo "| 3 - Passarinho               |\n";
            echo "+------------------------------+\n";
            $animalOption = readline ("Escolha qual animal deseja Cadastrar: ");
            listarTutores($tutores);
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
            break;

        case 4:
            clear();
            echo "+------------Vendas------------+\n";
            
            if(listarTutores($tutores)){
                $tutorId = readline("Escolha o tutor pelo ID: ");
            } else {
                readline("Pressione Enter para continuar");
                break;
            }
            
            if(listarProdutos($produtos)){
                $produtoId = readline("Escolha o produto pelo ID: ");
                $quantidade = readline("Digite a quantidade: ");
            } else {
                readline("Pressione Enter para continuar");
                break;
            }

            $tutor = $tutores[$tutorId];
            $produto = $produtos[$produtoId];
            $venda = new Venda($tutor);
            $venda->addItens(new ItemVenda($produto, $quantidade));
            echo $produto->getName() . " Foi vendido para: " . $tutor->getName() . PHP_EOL;
            readline("Pressione Enter para continuar");
            $vendas[] = $venda;    
            break;
        default:
            break; 
    }   
}
