<?php
/*Borrar un elemento específico de un array asociativo: Crea 
un array asociativo con 4 marcas de autos y sus países de origen. 
Borra uno de los pares del array y muestra el array actualizado.*/
$auto = array("Mustang"=>"EEUU", "Chevrolet"=>"EEUU",
            "BMW"=>"Alemania","Audi"=>"Alemania");
unset($auto["Audi"]);

foreach ($auto as $x => $y) {
    echo "$x: $y <br>";
}
?>