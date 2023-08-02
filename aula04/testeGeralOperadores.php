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


?>