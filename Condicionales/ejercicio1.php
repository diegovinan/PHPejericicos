<?php
/*Crea un programa en php con una variable 
$numero con un valor aleatoria entre 0 y 100.
El programa debe escribir un mensaje indicando 
si número es positivo, negativo o cero.*/

$x = rand(-100, 100);
if ($x == 0 ) { 
    echo "$x es 0";
}
elseif ($x > 0 ) {
    echo "$x es un numero entero";
}
else {
echo "$x es un numero negativo";
}
?>
