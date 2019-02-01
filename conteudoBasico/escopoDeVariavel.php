<?php

$nome = "Wesley";

function teste(){
    
    global $nome; //ESTÁ DIZENDO QUE A VARIAVEL NOME DE DENTRO DA FUNÇÃO É A MESMA DO ESCOPO GLOBAL
    echo $nome;
}

function teste2(){
    
    $nome = "Jonas";
    echo $nome." "."Agora no teste 2";
}

teste(); //chamada da função
echo "</br>";
teste2();   
?>