<?php
/*Escribe una función que genere una contraseña aleatoria. 
Longitud entre 8 y 12 caracteres, al menos un carácter entre 
"@#$%&-"*/
function generarContrasenaAleatoria() {
    // Definir los caracteres permitidos para la contraseña
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros = '0123456789';
    $caracteresEspeciales = '@#$%&-';

    // Combinamos todos los posibles caracteres que pueden ir en la contraseña
    $todosLosCaracteres = $letras . $numeros . $caracteresEspeciales;

    // Generar una longitud aleatoria entre 8 y 12
    $longitud = rand(8, 12);

    // Inicializar la contraseña vacía
    $contrasena = '';

    // Asegurarnos de que haya al menos un carácter especial
    $contrasena .= $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];

    // Rellenar el resto de la contraseña con caracteres aleatorios
    for ($i = 1; $i < $longitud; $i++) {
        $contrasena .= $todosLosCaracteres[rand(0, strlen($todosLosCaracteres) - 1)];
    }

    // Barajar la contraseña para distribuir aleatoriamente los caracteres
    $contrasena = str_shuffle($contrasena);

    // Devolver la contraseña generada
    return $contrasena;
}

// Ejemplo de uso
$contrasena = generarContrasenaAleatoria();
echo "Contraseña generada: " . $contrasena . "\n";

?>
