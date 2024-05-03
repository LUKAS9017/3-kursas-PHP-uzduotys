<?php
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