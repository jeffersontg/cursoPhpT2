<?php

$arrayTeste = [ 'nome' => 1, 2,3,4,5,6];

echo "Array simples: <br>";



echo "Item: " . $arrayTeste['nome'] . '<br>' ;
echo "<br>";
echo "Item: $arrayTeste[0] " ;
echo "<br>";
echo "Item: $arrayTeste[1] " ;
echo "<br>";
echo "Item: $arrayTeste[2] " ;
echo "<br>";
echo "Item: $arrayTeste[3] " ;
echo "<br>";
echo "Item: $arrayTeste[4] " ;
echo "<br>";

echo "Array associativo: <br>";
$arrayAssociativo = [ 'nome' => 'Jefferson Teixeira', 'curso' => 'PHP', 'numeroAulas' => 9];
echo $arrayAssociativo['nome'];
echo "<br>";
echo $arrayAssociativo['curso'];
echo "<br>";
echo $arrayAssociativo['numeroAulas'];
echo "<br>";




?>