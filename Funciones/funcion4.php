<?php
/*Escribe una función que calcule el área y el perímetro de un 
rectángulo. La función debe recibir el largo y el ancho como 
parámetros y devolver un array con el área y el perímetro.*/

function calcularAreaYPerimetro($largo, $ancho) {
    // Calcular el área
    $area = $largo * $ancho;

    // Calcular el perímetro
    $perimetro = 2 * ($largo + $ancho);

    // Devolver los resultados como un array
    return array('area' => $area, 'perimetro' => $perimetro);
}

// Ejemplo de uso
$resultado = calcularAreaYPerimetro(5, 3);

// Imprimir los resultados
echo "Área: " . $resultado['area'] . "\n";
echo "Perímetro: " . $resultado['perimetro'] . "\n";

?>
