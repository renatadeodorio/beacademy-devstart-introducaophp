<?php

$bandas = [
"Dream theater", 
"Neo Pi Neo", 
"Exaltasambah", 
"Iron Maiden",  
"Aviões do forro",

];

$bandas[100] = "Nirvana";
$bandas[9] = "Calcinha Preta";
echo "<ul>";

foreach ($bandas as $cadaBanda) {
     echo "<li>{$cadaBanda}</li>";
}
echo "</ul>";