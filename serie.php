<?php
function serieFibonacci($num){
    $num=intval(readline("ingrese un numero entero "));
    $sum=0;
    $sum2=1;
    echo $sum."\n";
    for ($i=0; $i <$num ; $i++){
        $sum3=$sum;
        $sum=$sum2;
        $sum2=$sum3+$sum;
        echo $sum."\n";
    }
}
echo serieFibonacci($num);
?>