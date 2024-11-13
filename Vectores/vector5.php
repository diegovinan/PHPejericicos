<?php
/*Ordenar un array numérico: Crea un array con los nombres 
de 7 deportes en desorden. Ordena el array alfabéticamente 
y muestra el array ordenado.*/
$deporte = array("basket", "ciclismo", "MMA", "boxeo", "futbol",
                "natacion", "rugby");
sort($deporte);

foreach ($deporte as $x) {
    echo "$x <br>";
}
?>