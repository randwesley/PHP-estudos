<?php
$site = "www.dienekes.com.br";
$ano = 2019;
$salario = 500.00;
$bloqueado = true;
/*************************/
$frutas = array("maçã", "Laranja", "Tomate");
//echo $frutas[2];

/*************************/
$nascimento = new DateTime();
//var_dump($nascimento);

/*************************/
$arquivo = fopen("helloWorld.php", "r");
var_dump($arquivo)
?>