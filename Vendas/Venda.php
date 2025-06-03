<?php

require_once "ItemVenda.php";
require_once "Produto.php";
require_once __DIR__ . "/../Humanos/Tutor.php";

class Venda {
    private array $itens = [];
    private Tutor $tutor;
    public Produto $produto;

    public function __construct(Tutor $tutor){
        $this->tutor = $tutor;
    }

    public function addItens(ItemVenda $item){
        $this->itens[] = $item;
    }

    public function listarItens()  {
        $names = [];
        echo $this->tutor->getName() . PHP_EOL;
        foreach ($this->itens as $item){
            $names[] = $item->getProduto()->getName() . ": " . $item->getQuantidade();
        }
        return $names;
    }

    
}