<?php

function passwordCreate()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';


    if (isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];
        $newPassword = '';
        while (strlen($newPassword) < $passwordLength) {
            $valori = $symbols . $letters . $upLetters . $numbers;
            $randomCharacter = $valori[rand(0, strlen($valori) - 1)];

            if (!strpos($newPassword, $randomCharacter)) {
                $newPassword .= $randomCharacter;
            }

        }

    }
    return $newPassword;

}
?>