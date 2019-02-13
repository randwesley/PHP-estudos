<?php
namespace wesley\exemplos;

class ConversorDeNumeroRomano
{

    protected $tabela = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    );

    public function converte($numeroEmRomano)
    {
        /*
        EXEMPLO DE CONVERSÃO PARA APENAS UM NUMERO

        if(array_key_exists($numeroEmRomano, $this->tabela)){
        return $this->tabela[$numeroEmRomano];
        }
        return 0;

        EXEMPLO DE CONVERSÃO PARA DOIS NUMEROS
        $acumulador = 0;
        for ($i = 0; $i < strlen($numeroEmRomano); $i++) {
        $numCorrente = $numeroEmRomano[$i];
        if (array_key_exists($numCorrente, $this->tabela)) {
        $acumulador += $this->tabela[$numCorrente];
        }
        }
        return $acumulador;*/

        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        for ($i = strlen($numeroEmRomano) - 1; $i >= 0; $i--) {

            //pega o valor inteiro do elemento atual
            $atual = 0;
            $numCorrente = $numeroEmRomano[$i];
            if (array_key_exists($numCorrente, $this->tabela)) {
                $atual = $this->tabela[$numCorrente];
            }

            //se o valor da direita for menor, multiplicaresmo
            //por -1 para torna-lo negativo
            $multiplicador = 1;
            if ($atual < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }

            $acumulador += ($atual * $multiplicador);

            //atualiza o vizinho da direita
            $ultimoVizinhoDaDireita = $atual;
        }
        return $acumulador;
    }

}
