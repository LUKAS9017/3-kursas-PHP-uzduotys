<?php
class PasswordGenerator {
    private $length;
    private $numLowercase;
    private $numUppercase;
    private $numDigits;
    private $numSpecialChars;
    private $quantity;

    function __construct($length, $numLowercase = 0, $numUppercase = 0, $numDigits = 0, $numSpecialChars = 0, $quantity = 1) {
        $this->length = $length;
        $this->numLowercase = $numLowercase;
        $this->numUppercase = $numUppercase;
        $this->numDigits = $numDigits;
        $this->numSpecialChars = $numSpecialChars;
        $this->quantity = $quantity;
    }

    private function generatePassword() {
        $password = '';

        $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
        $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $digitChars = '0123456789';
        $specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';

        $allChars = '';

        // Pridedame žemųjų raidžių
        $allChars .= str_repeat($lowercaseChars, $this->numLowercase);

        // Pridedame didžiųjų raidžių
        $allChars .= str_repeat($uppercaseChars, $this->numUppercase);

        // Pridedame skaičių simbolius
        $allChars .= str_repeat($digitChars, $this->numDigits);

        // Pridedame specialius simbolius
        $allChars .= str_repeat($specialChars, $this->numSpecialChars);

        // Patikriname, ar yra pakankamai simbolių generavimui
        if (strlen($allChars) < $this->length) {
            die("Nepakanka simbolių generavimui.");
        }

        // Sumaišome simbolius
        $allChars = str_shuffle($allChars);

        // Paimame tik tiek simbolių, kiek reikia slaptažodžiui
        $password = substr($allChars, 0, $this->length);

        return $password;
    }

    public function generatePasswords() {
        $passwords = [];

        for ($i = 0; $i < $this->quantity; $i++) {
            $passwords[] = $this->generatePassword();
        }

        return $passwords;
    }
}

// Pavyzdys naudojant klasę
$passwordGenerator = new PasswordGenerator(10, 2, 3, 2, 2, 5);
$passwords = $passwordGenerator->generatePasswords();

foreach ($passwords as $password) {
    echo $password . "<br>";
}
?>
