<?php

$array = ['Joao', 1, 'Jair', 2, 'Ismael', 3, 'jefferson', 4, 'Rosa'];

$y = 0;
while ($y < count($array)) {
  if(gettype($array[$y]) == 'string'){
    echo "Os nomes consultados no array são: $array[$y] <br>";
  }
  $y++;
};

echo "<br><br>";

for ($i = 0; $i < count($array); $i++){
  if(gettype($array[$i]) == 'string'){
    echo "Os nomes consultados no array são: $array[$i] <br>";
  }
}

?>