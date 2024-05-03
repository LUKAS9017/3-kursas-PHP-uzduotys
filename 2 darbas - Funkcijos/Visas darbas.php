<?php
function pradzia() {
    echo "My first PHP script! <br>";
    $x = "Fibonacis <br>";
    echo "$x";
}

function fibonaci() {
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
}

// pradzia();
// fibonaci();



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

// formule();



echo "<br> <br> <br> 3 uzduotis skaiciu intervalui skaiciuoti <br> <br>";
function intervalas($nuo, $iki) { //i funkcija irasomas noriams intervalas pacioje apacioje
    $iteracijuSkaicius = 0;
    $maksimaliReiksme = 0; 

    for ($i = $nuo; $i <= $iki; $i++) {
        $iteracijuSkaicius++;
        if ($i > $maksimaliReiksme) { //if'as maksimaliai reiksmei skaiciuoti
            $maksimaliReiksme = $i;
        }
    }

    return array( //atsakyma idedu i masyva
        'iteracijuSkaicius' => $iteracijuSkaicius,
        'maksimaliReiksme' => $maksimaliReiksme
    );
}

$rezultatai = intervalas(1, 10**6); //nustatomas norimas intervalas
echo "Iteracijų skaičius: " . $rezultatai['iteracijuSkaicius'] . "\n";
echo "Maksimali reikšmė: " . $rezultatai['maksimaliReiksme'] . "\n";
?>
