<?php
function password_valida(string $password ):bool{
    $caracteres_esp="@#$%&-";
    if (strlen($password)>8) return true;
    if (preg_match("/[A-Z]/", $password)) return true;
    if (preg_match("/[a-z]/", $password)) return true;
    if (preg_match("/[0-9]/", $password)) return true;
    if (preg_match("/[@#$%&-]/", $password)) return true;
    return false;
}

$c="1w45AgR";
echo $c;
if (password_valida($c)){
    echo " Es valida";
}
else {
    echo "No es valida";
}
?>
