<?php

    $variavel1 = 5;
    $variavel2 = 4;

    //if com conector AND

    if ( ($variavel1 >= 5) && ($variavel2 == 3) ) {
        echo "O teste deu certo! <br>";
    } else {
        echo "O teste não deu certo!! <br>";
    }

    //if com conector OR

    if ( ($variavel1 >= 5) || ($variavel2 == 3) ) {
        echo "O teste deu certo! <br>";
    } else {
        echo "O teste não deu certo!! <br>";
    }

    //if com conector NOT

    if ( ($variavel1 >= 5) && !($variavel2 == 3) ) {
        echo "O teste deu certo! <br>";
    } else {
        echo "O teste não deu certo!! <br>";
    }

    //if um pouquinho mais complexo....
    $variavel3 = 10;

    if (  ( ($variavel1 >= 5) && !($variavel2 == 3) )  && ($variavel3 == 10) ){
        echo "O teste deu certo! <br>";
    } else {
        echo "O teste não deu certo!! <br>";
    }

    // if aninhado

    if ( $variavel1 > 6) {
        if ($variavel2 >2 ) {
            if ($variavel3 == 10){
                echo "Deu certo o teste de if aninhado <br>";
            } else {
                echo "A variavel3 não é igual a 10 <br>";
            }
        } else {
            echo "Testei o 2o nivel e não deu legal<br>";
        }
    } else {
        echo "Nem passou no primeiro if...<br>";
    }

    // teste com ELSEIF

    $string = 'Professora';

    if ($string == 'PROFESSOR') {

        echo "A string testada deu certo!!";
    } elseif ($string == 'Professor' ) {
        echo "A string testada agora deu certo nesse teste do elseif !!";
    } else {
        echo 'Nada deu certo...';
    }


?>