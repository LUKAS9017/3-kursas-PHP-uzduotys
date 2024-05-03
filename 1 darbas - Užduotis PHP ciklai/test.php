<?php
echo "My first PHP script! <br>";
$x = "Fibonacis <br>";
echo "$x";

$f = 1; //fibonacio skaicius
$pirmas = 1; //kintamasis laikyti skaiciu pries fibonacio skaiciu
$antras = 1; //kintamasis laikyti fibonacio skaiciu
$suma = 2; //kintamasis sumai laikyti
echo "0 <br> 1 <br>"; //pirmi fibanacio skaitmenys
while($suma <= 1000000) { //ciklas fibonacio skaitmenims apskaiciuoti
    echo "$f <br>";
    $f = $pirmas + $antras;
    $pirmas = $antras;
    $antras = $f;
    $suma = $suma + $f;
}
echo "Paskutinio elemento reiksme: $f <br>";
echo "<br> Suma = $suma";
?>
