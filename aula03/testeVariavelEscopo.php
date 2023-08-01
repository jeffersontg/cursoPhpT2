<?php

$variavelGlobal = 'GLOBAL!!!';

echo "O conteúdo da variavelGlobal é $variavelGlobal <br>";

function testeDeFuncao(){
    $variavelGlobal = 'NOVA VARIAVEL GLOBAL!!! <br>';
    echo "Aqui é o teste de função. <br>";
    echo "bla bla bla <br>";
    echo "O conteúdo da variavelGlobal é $variavelGlobal <br>";
}


function testeDeFuncaoParametro( $parametroDaFuncao ){
    $variavelGlobal = $parametroDaFuncao;
    echo "Aqui é o teste de função por Parametro!! <br>";
    echo "bla bla bla <br>";
    echo "O conteúdo da variavelGlobal é $variavelGlobal <br>";
}


  
testeDeFuncao(); 
testeDeFuncaoParametro('Conteudo de Teste');



echo "<br>";
echo "O conteúdo da variavelGlobal é $variavelGlobal <br>";
?>