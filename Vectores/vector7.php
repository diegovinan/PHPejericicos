<?php
/*Añadir elementos a un array asociativo: Crea un array 
asociativo vacío. Añade tres pares de clave-valor (nombre de país
 y capital) al array y muestra el array completo.*/
$pais = array();
$pais += ["Noruega"=>"Oslo","Colombia"=>"Bogota", "Francia"=>"Paris",
            "Vietnam"=>"Hanoí","Tailandia"=>"Bangkok"];

foreach ($pais as $x => $y) {
  echo "$x: $y <br>";
}
?>