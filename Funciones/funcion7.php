<?php
/*Escribe una función que reciba un precio y un descuento y 
devuelva el precio una vez aplicado el descuento.*/
function aplicarDescuento($precio, $descuento) {
    // Calcular el monto del descuento
    $montoDescuento = $precio * ($descuento / 100);

    // Restar el descuento del precio original
    $precioFinal = $precio - $montoDescuento;

    return $precioFinal;
}

// Ejemplo de uso
$precio = 100;
$descuento = 15; // 15% de descuento
echo "Precio final: $" . aplicarDescuento($precio, $descuento) . "\n";

?>
