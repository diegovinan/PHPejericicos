<?php
/*Ordenar un array asociativo por valor: Crea un array asociativo 
con 5 nombres de productos y sus precios. Ordena el array por 
precio en orden ascendente y muestra el array ordenado.*/
$producto = array("cola"=>"2", "queso"=>"5", "jamon"=>"3",
                "sandia"=>"3", "setas"=>"2" );
arsort($producto);

foreach($producto  as $x => $x_value) {
    echo "Producto: " . $x . ", precio: " . $x_value;
    echo "<br>";
  }
?>