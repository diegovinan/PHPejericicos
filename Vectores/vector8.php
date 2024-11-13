<?php
/*Modificar un elemento específico de un array asociativo: 
Crea un array asociativo con los nombres de 4 países y 
sus capitales. Modifica la capital de uno de los países y 
 muestra el array actualizado.*/
$pais = array("Noruega"=>"Oslo","Colombia"=>"Bogota", "Francia"=>"Paris",
            "Vietnam"=>"Hanoí");
$pais["Francia"] = "Marsella";

foreach ($pais as $x => $y) {
    echo "$x: $y <br>";
}
?>