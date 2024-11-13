<?php
/*Modificar un elemento específico de un array numérico: 
Crea un array con los nombres de 5 animales. Modifica 
el tercer elemento del array para que sea otro animal diferente 
y muestra el array actualizado.*/

$animal = array("perro", "gato", "Iguana", "mapache", "lobo");
$animal[3] = "anaconda";
foreach ($animal as $x) {
    echo "$x <br>";
}
?>