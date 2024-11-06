<?php
$n1 = 7;
if ($n1 < 0) {
    $n1 = abs($n1);
}

for ($i = $n1; $i >= 0; $i--) {
    echo $i . "<br>";
}
?>