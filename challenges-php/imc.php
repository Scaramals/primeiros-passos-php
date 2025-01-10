<?php

$altura = 1.91;
$peso = 70;

$imc = $peso/($altura*$altura);

echo "Calculadora IMC" . PHP_EOL;

if($imc<18.5){
    echo "Seu IMC está baixo: $imc";
}elseif($imc<=29.9){
    echo "Seu IMC está normal: $imc";
}else{
    echo "Seu IMC está alto: $imc";
}
