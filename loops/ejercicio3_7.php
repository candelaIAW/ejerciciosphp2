<?php

    /*Partiendo del programa anterior, indica si el número es primo o no.*/
    $n1=1736;
    $numerodivisores=0; 
    echo "Los divisores de ". abs($n1) . " son <br>";

    for($contador=abs($n1);$contador>=1;$contador--){
        if (abs($n1)% $contador ==0){
            echo $contador!=1? "$contador, ": "$contador.<br>";
            $numerodivisores ++;
        }     
        
    }

    echo "$n1 tiene $numerodivisores divisores.<br>";
    echo $numerodivisores==2 ? "$n1 es primo <br>":"$n1 no es primo. <br>";

    ?>