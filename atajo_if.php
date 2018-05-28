<?php
//$var = (condición) ? $var donde se asigna valor si es verdadero: 'Cadena a mostrar si arroja False.' ;
//isset()= Devuelve true si variable tiene un valor
$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad.';

echo 'Edad: '.$edad;
?>
