<?php
namespace wesley\Loja\Produto;

class Produto
{
    private $nome;
    private $valorUnitario;

    public function __construct($nome, $valorUnitario, $quantidade = 1)
    {
        $this->nome = $nome;
        $this->valorUnitario = $valorUnitario;
        $this->quantidade = $quantidade;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    
    public function getValorTotal()
    {
        return $this->valorUnitario * $this->quantidade;
    }
}
