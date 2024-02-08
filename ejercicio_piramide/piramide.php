<?php


if (isset($_GET['longitud'])){

    $longitud = $_GET['longitud'];

} else {
    die("NO SE HA DEFINIDO LA LONGITUD\n"); //terminamos el script

}

for ($i = 1; $i <= $longitud; $i++) {
    echo '<pre>';
    echo str_repeat(' ', $longitud - $i);
    echo (str_repeat('* ', $i))."\n";
    echo '</pre>';
}

/*
  Recogemos el valor de la longitud primero mirando si se pasa como parametro GET,
  es decir por la url, como un parámetro extra en la url, ej:
    http://localhost/solucion.php?longitud=5
  o bien como un parámetro que se pasa al ejecutar el script desde la consola ej:
    php solucion_1.php 5
*/


/*  La clave del ejercicio es pensar con papel y lápiz qué patrón sigue la generación
    de la pirámide, si lo pensamos seria algo tal que así para una longitud de 5:

fila1 ->  hay 4 "espacios en blanco" y luego 1 asterisco
fila2 ->  hay 3 "espacios en blanco" y luego 1 asterisco, 1 espacio en blanco y otro asterisco
fila3 ->  hay 2 "espacios en blanco" y luego 1 asterisco, 1 espacio en blanco, 1 asterisco, 1 espacio en blanco y 1 asterisco
fila3 ->  hay 1 "espacios en blanco" y luego 1 asterisco, 1 espacio en blanco, 1 asterisco, 1 espacio en blanco y 1 asterisco, 1 espacio en blanco y 1 asterisco
fila3 ->  hay 0 "espacios en blanco" y luego 1 asterisco, 1 espacio en blanco, 1 asterisco, 1 espacio en blanco y 1 asterisco, 1 espacio en blanco y 1 asterisco, 1 espacio en blanco y 1 asterisco

La primera parte está clara, habrá tantos espacios en blanco como la longitud pasada, menos la fila en la que estamos, es decir

ej: para la fila 3, el cálculo será 5 - 3

Y luego lo que hacemos es repetir el patrón "* " tantas veces como en la fila que estemos

ej: para la fila 3, pintamos: "* " 3 veces, es decir: * * *

Y por último para no generar un espacio en blanco al final del último asterisco, quitamos los espacios en blanco de la derecha

http://php.net/manual/es/function.str-repeat.php
http://php.net/manual/es/function.rtrim.php
*/

