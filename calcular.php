<?php
function calcular(){
    $num=intval(readline("ingrese un numero entero"));
    $pala= strval($num);
    $num_entero=str_split($pala);

    $suma=0;
    for($i=0;$i < count($num_entero); $i++){
        $suma+=intval($num_entero[$i]);
    }
    echo "el total de nuestra suma es : $suma";
}
echo calcular();








?>