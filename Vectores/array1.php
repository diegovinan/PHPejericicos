<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Array asociativo de personas con sus notas y promedio
$personas = [
    "Juan" => [
        "nota1" => 8,
        "nota2" => 7,
        "media" => (8 + 7) / 2
    ],
    "María" => [
        "nota1" => 9,
        "nota2" => 10,
        "media" => (9 + 10) / 2
    ],
    "Pedro" => [
        "nota1" => 6,
        "nota2" => 5,
        "media" => (6 + 5) / 2
    ]
];

// Mostrar los datos
foreach ($personas as $nombre => $notas) {
    echo "Nombre: $nombre\n";
    echo "Nota 1: " . $notas['nota1'] . "\n";
    echo "Nota 2: " . $notas['nota2'] . "\n";
    echo "Media: " . $notas['media'] . "\n\n<br>";

}

?>
</body>
</html>