<?php

    $nome = 'Maria de Tal';
    $endereco = 'Rua tal, 1';
    $idade = 19;
    /*
	- Se a idade for maior que 18 e menor que 20: escrever "Entre 18 e 20 anos"
	- Senão, escrever: "Maior ou igual a 20 anos"
    */

    echo "Nome: " . $nome . "<br>";
    echo "Endereço: " . $endereco . "<br>";
    echo "Idade: " . $idade . "<br>";

    if ($idade > 18  && $idade < 20){
        echo "Entre 18 e 20 anos <br>";
    } else {
        echo "Maior ou igual a 20 anos";
    }

?>