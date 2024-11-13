<?php
/*Genera una función que reciba como parámetro un número y 
devuelva un booleano indicando si es primo o no. Utiliza la 
función para calcular todos los primos entre uno y un millón.*/


function esPrimo($n) {
    if ($n <= 1) // Check for numbers less than or equal to 1
        return false;
    for ($i = 2; $i <= $n / 2; $i++) { // Loop up to $n/2
        if ($n % $i == 0) // Check if $n is divisible by $i
            return false;
    }
    return true; // If no divisors were found, $n is prime
}

$n = 40;
$val = esPrimo($n);
if ($val)
    echo "Es primo";
else
    echo "No es primo";
?>