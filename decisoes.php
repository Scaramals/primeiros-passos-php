<?php

$idade = 18;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if($idade<18){
    echo "Você não pode entrar. Sua idade é $idade";
}else{
    echo "Você pode entrar sua idade é $idade";
}

echo PHP_EOL;
echo "Tchau!";