<?php

$num = $_POST['num'];

// echo $num;

$num_reversa = strrev($num);

if($num == $num_reversa){

    echo "El numero $num es capicua";
} else {
    echo "El numero $num no es capicua";
};

