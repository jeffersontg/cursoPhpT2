<?php

$variavel = 1;

while ($variavel <= 10){
    echo 'O valor de $variavel é: ' . $variavel . '<br>';
    $variavel = $variavel + 1;

    if ($variavel > 5){
        echo 'Tá bom... precisa mais não... <br>';
        break;  // função que para a execução do bloco while
    }

}

echo 'Fim do loop!';

?>