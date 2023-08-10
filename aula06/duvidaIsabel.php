<?php

$array = ['Jefferson', 'João', 'Marta', 'Marcus'];

$array2 = ['Jefferson', 1, 'João', 2,  'Marta', 3, 'Marcus'];

$y = 0;

while ( $y < count($array2) ) {

    if (gettype($array2[$y])=='string') {
        echo " $array2[$y] <br>";    
    }
    $y++;
}

for ($i = 0; $i < count($array); $i++){
    echo "O elemento atual é o $array[$i] <br>";
}

echo "agora com o foreach... <br>";

foreach($array as $x){

    echo "O elemento atual é o $x <br>";
}

