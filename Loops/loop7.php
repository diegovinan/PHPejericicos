<?php
/* Partiendo del programa anterior indica si el número es primo o no.*/

$n1 = 897;

$CP = 0;

for($C = 1; $C<=$n1; $C++){
	if($n1 % $C == 0){
		$CP = $CP + 1;
	}
}

if($n1 == 1 or $CP == 2){
	echo $n1." es primo ";
}
else{
	echo $n1." NO es primo ";
}

echo "Divisores: ";
for($i = 1; $i < $n1; $i ++) {
    if ($n1 % $i == 0) {
        echo $i . " ";
    }
}