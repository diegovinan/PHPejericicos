<?php
/* Crea un programa igual que el anterior pero que lance el
 dado mientras la suma total sea menor que 100.*/

    //creo variables
    $suma=0;echo($suma);
    $numerolanzamiento=0;
    while($suma<=100){
        echo("kk");

            $numerolanzamiento++;//sumo uno al contador
            $valor=rand(1,6);//genero el nuumero
            $suma+=$valor; //acumulo suma

         //imprimo resultados
        echo "He lanzado el dado $numerolanzamiento veces valor =$valor suma =$suma <br>";  
        //pantear como tratar el ultimoo caso, no imprimir, 

     }
?>