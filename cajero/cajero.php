<?php
$ingrese=intval(readline("ingrese su monto inicial : "));

while ($ingrese){
    print ("opcion 1 ,consultar saldo"."\n");
    print ("opcion 2 , consignar dinero"."\n");
    print ("opcion 3, retirar dinero"."\n");
    print ("opcion 4, salir"."\n");
    break;
}
    $op=(readline("ingrese una opcion : "));
    if ($op==1){
        function opcion1($ingrese){
            $si=$ingrese;
            echo "su saldo total es de : $si"; 
            return $si;
    }
    opcion1($ingrese);
    }

    if ($op==2){
        function opcion2(){
            $consig=intval(readline("ingrese el monto que desea consignar :"));
            echo "consignacion exitosa....";
            return $consig;
        
    }
    opcion2();
    }


    if ($op==3){
        function opcion3(){
            $retirar=intval(readline("¿cuanto dinero desea retirar?"));
            echo "retiro exitoso.....";
            return $retirar;
    }
    opcion3();
    }


    if ($op==4){
        echo "saliendo......";
    }
    



   

    







?>