<?php
namespace wesley\Loja\Carrinho;

use wesley\Loja\Carrinho\CarrinhoDeCompras;

class MaiorPreco
{
    public function maiorValor(CarrinhoDeCompras $carrinho)
    {
        if (count($carrinho->getProdutos()) === 0) {
            return 0;
        }
        $maiorValor = $carrinho->getProdutos()[0]->getValorUnitario();

        foreach ($carrinho->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValorUnitario()) {
                $maiorValor = $produto->getValorUnitario();
            }
        }
        return $maiorValor;
    }
}
