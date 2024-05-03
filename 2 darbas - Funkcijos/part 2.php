<?php
echo "<br> <br> <br> 2 uzduotis matematinei formulei skaiciuoti <br> <br>";
function formule() {
$x = 6;
$i = 0;
echo "Ivestas skaicius: $x";
while($x > 1) { //ciklas: jei skaicius lyginis, tada padalinti is 2
    if($x % 2 == 0) {
    $x = $x / 2;
    echo "<br> Buvo lyginis, o dabar: $x";
    $i++;
}
else { //ciklas: jei skaicius nelyginis, tada ivesta skaiciu padauginti is 3 ir prideti 1
    $x = $x * 3 + 1;
    echo "<br> Buvo nelyginis, o dabar: $x";
    $i++;
}
}

echo "<br> <br> Paskutinis: $x";
echo "<br> Iteraciju kiekis: $i";
}

formule();
?>