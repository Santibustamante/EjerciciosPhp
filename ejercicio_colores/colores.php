<?php

$colores = ['blanco', 'verde', 'rojo'];

echo implode (" ",$colores);
sort($colores);
// print_r($colores);

echo count($colores);

echo "<ul>";
for($i=0; $i < count($colores); $i++) {
    echo "<li>colores[$i] </li> "; 
};
echo "</ul>";
