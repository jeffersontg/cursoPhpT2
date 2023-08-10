<?php
	$array = ['Pedro','Tiago','Joao','no barquinho','jesus', 1, 2, 3,4,5];
	
	$count = 0;

	while(gettype($array[$count]) == 'string'){
		echo "$array[$count]<br>";
		$count++;
	}

	echo'<br><br><br>';

	for($i = 0; $i < 9; $i++){
		if(gettype($array[$i]) == 'string'){
			echo "$array[$i]<br>";
		}
	}
	echo'<br><br><br>';
	foreach ($array as $item){
		if(gettype($item) == 'string'){
			echo "$item  <br>";
		}
	}




?>