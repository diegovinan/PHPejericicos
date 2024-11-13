<?php
/*Añadir elementos a un array numérico: Crea un array vacío. 
Añade cinco nombres de ciudades al array y muestra el array
 completo en pantalla.*/
$ciudad = array ();
array_push($ciudad, "Zaragoza", "Segovia", "Caracas", "Baires", "Miami");
foreach ($ciudad as $x) {
    echo "$x <br>";
}
?>