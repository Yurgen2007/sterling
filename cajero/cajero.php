<?php
$ingrese=intval(readline("ingrese su monto inicial : "));

while ($ingrese){
    print ("opcion 1 ,consultar saldo"."\n");
    print ("opcion 2 , consignar dinero"."\n");
    print ("opcion 3, retirar dinero"."\n");
    print ("opcion 4, salir"."\n");
   

    $op=(readline("ingrese una opcion : "));
    if ($op==1){
        function opcion1($ingrese){
            $si=$ingrese;
            echo "su saldo total es de : $si". "\n"; 
            return $si;
    }
    opcion1($ingrese);

    }

    if ($op==2){
        function opcion2($ingrese){
            $consig=intval(readline("ingrese el monto que desea consignar :"));
            echo "consignacion exitosa...."."\n";
            $ultimo=$ingrese;
            $operacion2=$ultimo+$consig;
            echo "el monto total en su cuenta es de : $operacion2". "\n";
            return $operacion2;
            return $consig;
        
    }
    opcion2($ingrese);
    }

    if ($op==3){
        function opcion3($ingrese){
            $retirar=intval(readline("¿cuanto dinero desea retirar?"));
            echo "retiro exitoso....."."\n";
            $no=$ingrese;
            $operacion=$no-$retirar;
            echo "el monto total en su cuenta es de : $operacion". "\n";
            return $operacion;
            return $retirar;
    }
    opcion3($ingrese);
    }


    if ($op==4){
        echo "saliendo......";
    }
}

?>