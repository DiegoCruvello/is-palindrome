<?php

$input = 'Amor a Roma';
$service = new PalindromeService();

echo $service->isPalindrome($input) ?
    "Verdadeiro: é um palíndromo." :
    "Falso: não é um palíndromo.";
