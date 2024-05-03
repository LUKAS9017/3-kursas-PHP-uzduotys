<?php
class pavadinimas {
    public $name;

    function set_pavadinimas($name) {
        $this->name = $name;
    }

    function get_pavadinimas() {
        return $this->name;
    }
}

$pradzia = new pavadinimas();
$pradzia->set_pavadinimas('Fibonacis');

echo $pradzia->get_pavadinimas();



class Fibonacci {
    public $pirmas = 1;
    public $antras = 1;
    public $suma = 2;

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
}

$fibonacci = new Fibonacci();
$fibonacci->skaiciuoti();



class formule {
    public $x = 6;
    public $i = 0;

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
}

$collatz = new formule();
$collatz->skaiciavimas();




class intervalas {
    private $nuo;
    private $iki;
    private $iteracijuSkaicius = 0;
    private $maksimaliReiksme = 0;

    public function set_intervalas($nuo, $iki) {
        $this->nuo = $nuo;
        $this->iki = $iki;
        $this->calculate();
    }

    private function calculate() {
        for ($i = $this->nuo; $i <= $this->iki; $i++) {
            $this->iteracijuSkaicius++;
            if ($i > $this->maksimaliReiksme) {
                $this->maksimaliReiksme = $i;
            }
        }
    }

    public function get_iteracijos() {
        return $this->iteracijuSkaicius;
    }

    public function get_maksimaliReiksme() {
        return $this->maksimaliReiksme;
    }
}

$intervaloSkaiciavimas = new intervalas();
$intervaloSkaiciavimas->set_intervalas(1, 10**6);
echo "Iteracijų skaičius: " . $intervaloSkaiciavimas->get_iteracijos() . "\n";
echo "Maksimali reikšmė: " . $intervaloSkaiciavimas->get_maksimaliReiksme() . "\n";
?>