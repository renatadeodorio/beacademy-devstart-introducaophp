<?php

declare(strict_types=1);

function welcome(string $nome){
 return "Bem vindo {$nome}";
}

function soma(float $n1, float $n2) {
return $n1 + $n2;
}

echo soma(5.67, 33);

echo PHP_EOL;

echo welcome("Renata");