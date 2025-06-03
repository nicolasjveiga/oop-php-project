<?php

class ItemVenda {
    private Produto $produto;
    private int $quantidade;

    public function __construct(Produto $produto, int $quantidade){
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getProduto(): Produto {
        return $this->produto;
    }
    
    public function getQuantidade(): int {
        return $this->quantidade;
    }
}