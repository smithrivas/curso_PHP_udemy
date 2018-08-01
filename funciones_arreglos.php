<?php
/*
//Funcion para extraer elementos de un arreglo asociativo como si fueran variables
$amigo = ['telefono'=>326541, 'Edad'=>20, 'pais'=>'Colombia'];
extract($amigo);
echo $telefono;
*/

$semana = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

//Extrae y elimina ultimo elemento de un arreglo, también se puede guardar ese valor en una variable
//$ultimo_dia = array_pop($semana);
//echo $ultimo_dia;
/*
array_pop($semana);
foreach ($semana as $dia) {
  echo $dia.'<br/>';
}
*/

//Colocar separador entre elemoentos de un array
//echo join('<br/>',$semana);

//Contar elementos del array
//echo count($semana);

//Mostrar arreglo en orden ascendente
//sort($semana);
//echo join('<br/>',$semana);

//Mostrar arreglo en orden descendente
//rsort($semana);
//echo join('<br/>',$semana);

//Invierte orden de elementos del array
$semana_reverse = array_reverse($semana);
echo join('<br/>',$semana_reversekb);
?>
