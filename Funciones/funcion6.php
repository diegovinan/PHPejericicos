<?php
/*Escribe una función que calcule el promedio y la mediana de 
un array de números. La función debe recibir el array y devolver 
un array con el promedio y la mediana.*/

function calcularPromedioYMediana($numeros) {
    // Calcular el promedio
    $suma = array_sum($numeros);
    $cantidad = count($numeros);
    $promedio = $cantidad > 0 ? $suma / $cantidad : 0;

    // Calcular la mediana
    sort($numeros); // Ordenar el array para calcular la mediana
    $indiceMedio = floor($cantidad / 2);

    if ($cantidad % 2 == 0) {
        // Si el número de elementos es par, la mediana es el promedio de los dos elementos centrales
        $mediana = ($numeros[$indiceMedio - 1] + $numeros[$indiceMedio]) / 2;
    } else {
        // Si el número de elementos es impar, la mediana es el elemento central
        $mediana = $numeros[$indiceMedio];
    }

    // Devolver los resultados como un array
    return array('promedio' => $promedio, 'mediana' => $mediana);
}

// Ejemplo de uso
$numeros = [5, 3, 8, 6, 7];
$resultado = calcularPromedioYMediana($numeros);

echo "Promedio: " . $resultado['promedio'] . "\n";
echo "Mediana: " . $resultado['mediana'] . "\n";

?>
