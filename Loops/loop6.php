<?php
/*Crea un programa con una variable $n1 a la que daremos valor en 
el código. El programa mostrará todos los divisores de ese número.*/

$n1 = 897;

$CP = 0;

for($C = 1; $C<=$n1; $C++){
	if($n1 % $C == 0){
		$CP = $CP + 1;
	}
}

echo "Divisores: ";
for($i = 1; $i < $n1; $i ++) {
    if ($n1 % $i == 0) {
        echo $i . " ";
    }
}