<?php
$nome = "Empresa";
$nome .= " Dienekes.";

echo $nome;

echo "</br>"; /* ---------------- */

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 67.41;

echo $valorTotal;

echo "</br></br>"; /* --------COMPARAÇÃO-------- */

$a = 87.0;
$b = 87;
// um = significa atribuição
//var_dump($a=$b); 

echo "</br>";
var_dump($a==$b); // dois == significa comparação de valores
echo "</br>";
var_dump($a===$b); // três === significa comparação tipo de variaveis e de valores

echo "</br></br>"; /* --------COMPARAÇÃO SPACESHIP-------- */
/* O operador <=> é utilizado para fazer comparações combinadas.
    Retorna 0 se os valores de ambos os lados são iguais.
    Retorna 1 se o valor à esquerda é maior.
    Retorna -1 se o valor à direita é maior.
*/

echo 1 <=> 1;// 0
echo "</br>";
echo 3 <=> 4; // -1
echo "</br>";
echo 4 <=> 3; // 1
echo "</br>";

/* A vantagem em usar o operador <=> é que ele não se restringe
 a um determinado tipo, enquanto a função strcmp limita-se a strings. */


 echo "</br></br>"; /* --------COMPARAÇÃO NULL COALESCE-------- */
 /* A lógica do operador é a seguinte: retornar o primeiro valor
  que exista e não seja nulo dentre os valores passados.  */
  
  
  //trata valores nulos CRLH Q FODA

  $a = NULL;
  $b = NULL;
  $c = 10;

  echo $a ?? $b ?? $c;