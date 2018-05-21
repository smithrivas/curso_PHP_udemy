<?php
$nombre = 'Brayan';
# NOTAS
# Nombres de variables sensibles a nayusculas y minusculas.
# Comillas dobles permite llamar variable y mostrar su valor.
# Comillas sencillas no permite ejecutar variable dentro.
# No puede llevar caracteres especial,No puede comenzar con números y no pueden llevar espacios.

$numero = '8';
//Double
$numero_decimal = "7.7";
$verdadero = false;
$valor_nulo = null;

echo 'Hola '.$nombre.'</br>';
//echo 'Hola $nombre';

#echo gettype($nombre);
//Muestra el tipo de variable.

var_dump($nombre);
//Muestra el tipo de variable ademas de su valor.
?>
