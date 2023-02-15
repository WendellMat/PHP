<?php

$peso = 85;
$altura = 2.2;

$imc = $peso / $altura ** 2;
$imc = number_format($imc, 2, '.', '');

if ($imc <= 18.49) {
    echo "Seu IMC é $imc"."Kg/m2, você está abaixo do peso";
} elseif ($imc >= 18.50 and $imc <= 24.99) {
    echo "Seu IMC é $imc"."Kg/m2, você está no peso ideal";
} else {
    echo "Seu IMC é $imc"."Kg/m2, você está com sobrepeso";
}