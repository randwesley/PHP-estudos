<?php
$name = "Randerson";

$midleName = "Wesley";

$fullName = $name." ".$midleName;

echo $fullName;

echo "</br></br>";

exit; //o PHP para a execução do codigo aqui

var_dump($name); //da detalhes do dado inserido na variavel

echo "</br></br>";

unset($name); //apaga o valor armazenado na variavel

//function empty serve para saber se uma variável é vazia…retornando true quando uma variável for vazia
if (empty($name)) {
    echo "A variavel está vazia.";
    // Verifica se o usuário digitou o seu nome
}
//function isset serve para saber se uma variável existe...retornando true quando uma variável existir
if (isset($name)) {
    echo $name;
}
