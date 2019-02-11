<?php
$nome = "randerson wesley";

$nome = strtoupper($nome); // deixa todos os caracteres em maiusculo

echo $nome;

$nome = strtolower($nome); // deixa todos os caracteres em minusculo

echo "<br>";

echo $nome;

echo "<br>";

echo ucfirst($nome);

echo "<br>";

echo ucwords($nome); // deixa a letra de cada palavra é maiuscula

echo "<br><br>"; /* --------------------- */

$empresa = "Dienekes";

$empresa = str_replace("i", "1", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

echo "<br><br>"; /* --------------------- */

$frase = "Onde a praticidade encontra o profissionalismo";

$q = strpos($frase, "encon"); //encontra a posição de um determinado caracter no texto

var_dump($q);

echo "<br>";

$texto = substr($frase, 0,$q); //seleciona uma sub-seção de uma string

var_dump($texto);

echo "<br>";

echo $texto2 = substr($frase, $q);
?>