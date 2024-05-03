<?php

class PrimeNumbers { //pirminiu skaiciu gavimo klase
    private $limit;

    function __construct($limit) { 
        $this->limit = $limit;
    }

    private function isPrime($number) { //pirminiam skaiciui apskaiciuoti
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function findPrimes() { 
        echo "<br> Pirminiai skaičiai iki {$this->limit}: <br>";

        for ($i = 2; $i <= $this->limit; $i++) {
            if ($this->isPrime($i)) {
                echo "{$i} ";
            }
        }

        echo "<br>";
    }

    function __destruct() {
        echo "Objektas sunaikintas. ";
    }
}

$primeNumbers = new PrimeNumbers(50);
$primeNumbers->findPrimes();



class pavadinimas {
    private $name;

    function __construct($name) { //sukuriau konstruktorius kiekvienai klasei
        $this->name = $name;
    }

    function get_pavadinimas() {
        return $this->name;
    }

    function __destruct() { //pridejau destruktorius kiekvienai klasei
        echo $this->name;
    }
}

$pradzia = new pavadinimas("<br> Fibonacis");
echo $pradzia->get_pavadinimas();



class Fibonacci {
    private $pirmas;
    private $antras;
    private $suma;
    private $f;

    function __construct($pirmas, $antras, $suma, $f) {
        $this->pirmas = $pirmas;
        $this->antras = $antras;
        $this->suma = $suma;
        $this->f = $f;
    }

    function skaiciuoti() {
        echo "<br> 0 <br> 1 <br>";

        while ($this->suma <= 1000000) {
            echo "{$this->suma} <br>";
            $f = $this->pirmas + $this->antras;
            $this->pirmas = $this->antras;
            $this->antras = $f;
            $this->suma += $f;
        }

        echo "Paskutinio elemento reiksme: {$this->suma} <br>";
        echo "<br> Suma = {$this->suma}";
    }

    function __destruct()
    {
        echo "Paskutinio elemento reiksme: {$this->suma} <br>";
        echo "<br> Suma = {$this->suma}";
    }
}

$fibonacci = new Fibonacci(1, 1, 2, 1);
$fibonacci->skaiciuoti();



class formule {
    private $x;
    private $i;

    function __construct($x, $i)
    {
        $this->x = $x;
        $this->i = $i;
    }

    function skaiciavimas() {
        echo "<br> <br> <br> 2 uzduotis matematinei formulei skaiciuoti <br> <br>";
        echo "Ivestas skaicius: $this->x";
        while($this->x > 1) { //ciklas: jei skaicius lyginis, tada padalinti is 2
            if($this->x % 2 == 0) {
            $this->x = $this->x / 2;
            echo "<br> Buvo lyginis, o dabar: $this->x";
            $this->i++;
        }
        else { //ciklas: jei skaicius nelyginis, tada ivesta skaiciu padauginti is 3 ir prideti 1
            $this->x = $this->x * 3 + 1;
            echo "<br> Buvo nelyginis, o dabar: $this->x";
            $this->i++;
        }
        }

        echo "<br> <br> Paskutinis: $this->x";
        echo "<br> Iteraciju kiekis: $this->i <br> <br>";
    }

    function __destruct()
    {
        echo "<br> <br> Destruktoriaus metami atsakymai:";
        echo "<br> <br> Paskutinis: $this->x";
        echo "<br> Iteraciju kiekis: $this->i <br> <br>";
    }
}

$collatz = new formule(6, 0);
$collatz->skaiciavimas();
?>