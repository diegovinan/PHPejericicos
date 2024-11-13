<?php
/*Crea un programa con una variable $n1 a la que daremos valor
 en el código. Escribe todos los números de $n1 al 0 contando 
 hacia atrás. Si el número es negativo deberá cambiar su valor 
 a positivo.*/
 
 $n1=-54;
 echo "Comienza la cuenta atrás <br>";
 for($contador=abs($n1);$contador>=0;$contador--){
     echo $contador!=0? "$contador, ": "$contador .";
     
 }
 echo "<br> fin de la cuenta atrás <br>";

?>