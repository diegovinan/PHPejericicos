<?php
/*Escribe una función que convierta temperaturas de Celsius a 
Fahrenheit y viceversa. La función debe recibir la temperatura y 
la escala ("C" o "F") y devolver la temperatura convertida.*/

function convertirTemperatura($temperatura, $escala) {
    // Verificar que la escala sea válida
    if ($escala == "C") {
        // Convertir de Fahrenheit a Celsius
        return ($temperatura - 32) * 5/9;
    } elseif ($escala == "F") {
        // Convertir de Celsius a Fahrenheit
        return ($temperatura * 9/5) + 32;
    } else {
        // Si la escala no es válida, devolver un mensaje de error
        return "Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit.";
    }
}

// Ejemplos de uso
echo convertirTemperatura(32, "C") . " °C a Fahrenheit = " . convertirTemperatura(32, "C") . " °F\n"; // De Celsius a Fahrenheit
echo convertirTemperatura(100, "F") . " °F a Celsius = " . convertirTemperatura(100, "F") . " °C\n"; // De Fahrenheit a Celsius

?>
