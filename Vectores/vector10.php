<?php
/*Ordenar un array asociativo por clave Crea un array asociativo 
con 5 nombres de empleados y sus salarios. Ordena el array por 
nombre en orden ascendente y muestra el array ordenado.*/
$trabajador = array("Sebas"=>1450, "Almu"=>1620, "Jacinto"=>1350,
                    "Elena"=>1740, "Robin"=>1950);
ksort($trabajador);
foreach($trabajador as $x => $x_value) {
    echo "Nombre:" . $x . ", Salario: " . $x_value;
    echo "<br>";
  }
?>