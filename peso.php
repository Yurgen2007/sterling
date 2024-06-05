<?php
function FierroAlv(){
    for($i=0; $i < 101; $i++){
        if ($i % 3== 0){
            echo "peso\n";
        }if ($i % 5 == 0){
            echo "pluma\n";
        }if($i % 3 == 0 && $i % 5 == 0){
            echo "peso_pluma\n";
        }
        }
    }
    echo FierroAlv();
