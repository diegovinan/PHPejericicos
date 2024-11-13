<?php
/*Crea un programa en php con tres variables aleatorias
 $n1,$n2,$n3. El programa mostrará sus valores y 
 posteriormente las mostrará los números ordenados de
 mayor a menor.*/
$n1= rand(0, 100);
$n2= rand(0, 100);
$n3= rand(0, 100);
echo "$n1, $n2, $n3 ";

$numeros = array($n1, $n2, $n3);
sort($numeros);

$arrlength = count($numeros);
for($x = 0; $x < $arrlength; $x++) {
    echo $numeros [$x];
    echo " ";
}
?>