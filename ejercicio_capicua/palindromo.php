<?php

$data = $_POST['data'];

echo $data;

$data_reversa = strrev($data);

if($data == $data_reversa){

    echo "$data es un palindromo";
} else {
    echo "$data no es un palindromo";
};