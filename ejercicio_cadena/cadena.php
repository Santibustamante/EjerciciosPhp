<?php


$cadenas = ["patata", "cebolla", "sal", "pimienta","te","agua"];

function palabra($cadenas) {
    $palabraLarga = $cadenas[0];
    $palabraCorta = $cadenas[0];

    foreach ($cadenas as $palabra) {
        if (strlen($palabra) > strlen($palabraLarga)) {
            $palabraLarga = $palabra;
        }

        if (strlen($palabra) < strlen($palabraCorta)) {
            $palabraCorta = $palabra;
        }
    }

    return [
        "larga" => $palabraLarga,
        "corta" => $palabraCorta
    ];
}

$resultado = palabra($cadenas);

echo "La palabra más larga es: " . $resultado['larga'] ;
echo "La palabra más corta es: " . $resultado['corta'] ;



