<?php
function palindromo (){
    $cadena = (readline("ingrese una frace"));
    $min=strtolower($cadena);
    $cadena1= str_replace(" ","",$min);
    $invertir = strrev($cadena1);

    return $cadena1 == $invertir; 
}
var_dump(palindromo());

