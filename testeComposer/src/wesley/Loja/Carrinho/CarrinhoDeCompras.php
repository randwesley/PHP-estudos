<?php
namespace wesley\Loja\Carrinho;

use ArrayObject;
use wesley\Loja\Produto\Produto;

class CarrinhoDeCompras
{
    private $produtos;

    public function __construct()
    {
        $this->produtos = new ArrayObject();
    }

    public function adiciona(Produto $produto)
    {
        $this->produtos->append($produto);
        return $this;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function maiorValor()
    {
        if (count($this->getProdutos()) === 0) {
            return 0;
        }
        $maiorValor = $this->getProdutos()[0]->getValorUnitario();

        foreach ($this->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValorUnitario()) {
                $maiorValor = $produto->getValorUnitario();
            }
        }
        return $maiorValor;
    }

}
