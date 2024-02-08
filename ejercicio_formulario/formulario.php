<?php

    $directorio = $_POST['directorio'];
    $fichero = $_FILES['fichero'];

    if (!is_dir($directorio)){
        mkdir($directorio);
    }

    move_uploaded_file($fichero['tmp_name'], "$directorio/mifichero.txt");

    file_put_contents("$directorio/mifichero.txt","hola",FILE_APPEND);

    echo '<h1>Fichero creado con exito<h1/>';