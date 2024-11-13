<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
//bienvenida
echo "Bienvenido: " . " " . $nombre . " "  . $apellido . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Apellido: " . $apellido . "<br>";
//nombre al reves
echo " tu nombre al reves es " . strrev($nombre . " " . $apellido) . "<br>";

echo "Contar: " . streln(string: $nombre) . " " . streln(string: $apellido) + streln(string: $nombre) . "<br>";
//Nombre y apelldio en mayusculas
echo "tu nombre y apellido en MAYUSCULAS  es "  . strtoupper($nombre . " " . $apellido) . "<br>";

//primer caracter del nombre
echo "El primer caracter del nombre es " . $nombre[0] ."<br>";

//ultimo caracer del apellido
echo "El ultimo caracter del apellido es " . $apellido[strlen($apellido)-1] ."<br>";

$texto=str_replace(["A","E","I","O"],"U",$texto);//y asi con todas

    echo "tu nombre con la U " . $texto . "<br>";
    
echo var_dump($nombre);
}
?>