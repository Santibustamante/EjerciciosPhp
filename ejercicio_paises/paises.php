<?php

$paises = [
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
    "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"
    ];

    //ver antes de la función
    print_r($paises);

    //la primera capital
    asort($paises);
    // Obtener el primer elemento del array ordenado
    $primerElemento = reset($paises);
    // Obtener la clave (capital) del primer elemento
    $capital = $primerElemento;
    // Obtener el país asociado a la capital
    $pais = array_search($capital, $paises);  
    echo "La capital de $pais es $capital.";    

    //todos los paises
 //   asort($paises);
 //   foreach ($paises as $pais => $capital) {
 //   echo "La capital de $pais es $capital.\n";
 //   }
    //resuelto  profesor (no funciona con ksort)
    ksort($paises);
    print_r($paises);

    asort($paises as $key => $value) {
        echo "La capital de $key es $value";
        echo "<br>"
    }
