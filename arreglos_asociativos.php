<?php
# NOTAS
# Se le agregan titulos a los valores.
# Sensible a mayusculas y minusculas.

$smith = ['Telefono'=>'3013499444','Edad'=>'25','Apellido'=>'Rivas','Pais'=>'Colombia'];
echo $smith['Telefono'].'</br>';
echo $smith['Edad'].'</br>';
echo $smith['Apellido'].'</br>';
echo $smith['Pais'].'</br>';

//sobreescribir
$smith['Telefono'] = '3202815502';
echo 'El teléfono de Brayan es '.$smith['Telefono'].'</br>';
var_dump($smith);
?>
