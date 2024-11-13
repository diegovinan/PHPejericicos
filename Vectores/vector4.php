<?php
/*Borrar un elemento específico de un array numérico: Crea un 
array con los nombres de 5 colores. Borra el segundo color del 
array y muestra el array actualizado.*/

$color = array("verde", "amarillo", "naranja", "cian", "magenta");
print_r($color);

echo "Array con el segundo eliminado";
unset($color[1]);
foreach ($color as $x) {
    echo "$x <br>";
}
?>