<?php

// Teste de concatenação
$primeiraString = "Essa variável vai ser ";
$segundaString = " usada para teste! ";

echo $primeiraString . $segundaString;
echo "<br>";

// Teste de incremento

$numero = 5;
echo 'A variável $numero tem o valor: '; 
echo $numero;
echo "<br>";
$numero++; // $numero = $numero + 1
echo 'A variável $numero tem o valor incrementado: ';
echo $numero;
echo "<br>";

$numero--; // $numero = $numero + 1
echo 'A variável $numero tem o valor decrementado: '; 
echo $numero;
echo "<br>";

// Teste de igualdade
echo "Teste de igualdade (5==5): ";
echo ( 5 == 5 );
echo "<br>";
echo "Teste de diferença (5!=5): ";
echo ( 5 != 5 );
echo "<br>";
// Teste com operadores lógicos

// teste com AND
echo "O resultado do teste ( 5 == 5) && ( 10 > 2) é: <br> ";
echo  ( 5 == 5) && ( 10 > 2);
echo "<br>";

// teste com OR
echo "O resultado do teste ( 5 == 6) || ( 10 > 2) é: <br> ";
echo  ( 5 == 6) || ( 10 > 2);
echo "<br>";

// teste com NOT
echo "O resultado do teste !( 5 == 6)  é: <br> ";
echo  !( 5 == 6) ;
echo "<br>";

// Teste combinado
echo "O resultado do teste ( ( 5 == 6) || (10>2) ) && ('a' == 'a') é: <br> ";
echo  ( ( 5 == 6) || (10>2) ) && ('a' == 'a') ;
echo "<br>";



?>