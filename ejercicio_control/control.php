<html lang="en">
<body>
<form action="control.php" method="post">
    <input type="text" name="numero">
    <input type="submit" name="Enviar"> 
</form>

<?php

if(isset($_POST['numero'])){
$numero = $_POST['numero'];

echo $numero;

if(!is_numeric($numero)){
    echo "<p>El dato introducido no es numerico</p>";
    }else{
            $exponente = 1;
            $resultado = $numero;      
        while ($resultado <= 10000) {
            $resultado = pow($numero, ++$exponente);
        }
       // echo "Si es numero $numero"; 
    echo "<p> El exponente es $exponente</p>";
}
}
