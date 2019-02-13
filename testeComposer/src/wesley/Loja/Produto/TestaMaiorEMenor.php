<?php
use wesley\Loja\Carrinho\CarrinhoDeCompras;
use wesley\Loja\Produto\MaiorEMenor;
use wesley\Loja\Produto\Produto;

class TestaMaiorEMenor
{
    public function realizaTeste()
    {

        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(
            new Produto("Liquidificador", 250.00));
        $carrinho->adiciona(
            new Produto("Geladeira", 450.00));
        $carrinho->adiciona(
            new Produto("Jogo de pratos", 70.00));

        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        echo "O menor produto: ";
        echo $maiorEMenor->getMenor()->getNome() . PHP_EOL;
        echo "O maior produto: ";
        echo $maiorEMenor->getMaior()->getNome() . PHP_EOL;
    }
}
$test = new TestaMaiorEMenor();
$test->realizaTeste();
