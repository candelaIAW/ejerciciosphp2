<?php
    function genera_password():string {
        $password="";
        $longitud=rand(8,12);
        $caracteres_esp="@#$%&-";
        $numeros="0123456789";
        $letras="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $password.=$caracteres_esp[rand(0,strlen($caracteres_esp)-1)];
        $password.=$numeros[rand(0,strlen($numeros)-1)];
        for($c=strlen($password);$c<$longitud;$c++){
            $password.=$letras[rand(0,strlen($letras)-1)];
        }

        $password=str_shuffle($password);

        return $password;
        
    }

    for ($c=0;$c<10;$c++){
        echo genera_password(). "<br>";
    }

?>