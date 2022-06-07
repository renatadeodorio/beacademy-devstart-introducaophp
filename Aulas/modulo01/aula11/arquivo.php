<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, "Renata".PHP_EOL);
fwrite($arquivo, "Cleo".PHP_EOL);
fwrite($arquivo, "Lavinia".PHP_EOL);

fclose($arquivo);