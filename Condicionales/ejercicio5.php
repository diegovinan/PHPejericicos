<?php
/*Crea un programa con una variable booleana $lluvia y una
 variable $temperatura a las que darás valor en el código. 
 El programa debe dar los siguientes mensajes. */
$lluvia= rand(0, 1);
$temperatura= rand(-10, 50);

if ($temperatura > 20 && $lluvia ==0) {
    echo "A la playa";
}
elseif ($lluvia ==0 && $temperatura > -10 && $temperatura < 20) {
    echo "A esquiar";
}
elseif ($lluvia ==0 && $temperatura > 5 && $temperatura < 20) {
    echo "De paseo";
}
elseif ($lluvia ==1 && $temperatura > -10 && $temperatura < 40) {
    echo "Hoy llueve quedate en casa";
}
else{
    echo "La temperatura es extrema";
}
?>