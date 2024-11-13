<?php
/*Crea un programa en php con tres variables aleatorias
 $n1,$n2,$n3. El programa mostrará sus valores y 
 posteriormente las mostrará los números ordenados de
 mayor a menor.*/
$n1= rand(0, 100);
$n2= rand(0, 100);
$n3= rand(0, 100);
echo "$n1, $n2, $n3 ";

if ($n1 > $n2 && $n2 > $n3){
    echo "orden : $n1, $n2, $n3";
}
elseif ($n1 > $n3 && $n3 > $n2){
    echo "orden : $n1", $n3, $n2;
}
elseif ($n2 > $n1 && $n1 > $n3){
    echo "orden : $n2, $n1, $n3";
}
elseif ($n3 > $n1 && $n1> $n2){
    echo "orden : $n3, $n1, $n2";
}
elseif ($n3 > $n2 && $n2 > $n1){
    echo "orden : $n3, $n2, $n1";
}
else{
    echo "orden : $n2, $n3, $n1";
}
?>