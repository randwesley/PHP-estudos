<?php
/* VARIAVEIS PRÉ-DEFINIDAS/SUPER GLOBAIS, SÃO AS QUE JÁ VEM COM UMA UTILIDADE EM ESPEFICICO
    ALEM DISSO, ELAS DÃO RETORNO INDEPENDENTE DO ESCOPO NO QUAL ELAS ESTÃO INSERIDAS */

//todo valor enviado via GET e POST são do tipo string
//para guardar no banco, tem que fazer casting
$nome = (int)$_GET["a"]; //fazendo um casting
//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //pegando o ip do usuario
$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip." ".$ip2;
?>