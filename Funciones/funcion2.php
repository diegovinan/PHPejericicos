<?php declare(strict_types=1);
/*Escribe una función que calcule el IMC de una persona dado 
su peso y altura. La función debe devolver el IMC y la categoria corres.*/
function imc(float $altura, float $peso) : 
float{
    $imc = $peso / ($altura * $altura);

    if ($imc <= 18 ){
        echo "Peso bajo :";
    }
    elseif ($imc >= 18 && $imc <= 25){
        echo "Peso medio :";
    }
    elseif ($imc >= 25 && $imc <= 30){
        echo "Peso superior al medio :";
    }
    else echo "Sobrepeso :";
    return $imc;
}

echo imc(1.50, 60);
?>