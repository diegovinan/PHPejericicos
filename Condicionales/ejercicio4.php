<?php
/*Crea un programa en php que genere un numeroaleatorio 
entre 1 y 7. El programa debe mostrar el numero y el día 
de la semana siendo el lunes el día 1 y el domingo el 7.*/
$n1 = rand(1, 7);
echo "Numero que genra $n1 ";

switch ($n1) {
    case 1;
        echo "$n1 Hoy es lunes";
        break;
    case 2;
        echo "$n1 Hoy es Martes";
        break;    
    case 3;
        echo "$n1 Hoy es Miercoles";
        break;
    case 4;
        echo "$n1 Hoy es Jueves";
        break;
    case 5;
        echo "$n1 Hoy es Viernes";
        break;
    case 6;
        echo "$n1 Hoy es Sábado";
        break;
    case 7;
        echo "$n1 Hoy es Domingo";
        break;
}
?>