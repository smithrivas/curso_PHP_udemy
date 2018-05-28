<?php
$texto = '< ><h1>Hola</h1> & " " ';
$texto2 = 'hOLa';

//Convierte a caracteres HTML evitando que elusuario ejecute código
//echo htmlspecialchars($texto);

//Elimia espacioes en blanco al inicio y al final
//echo trim($texto2);

//Calcula tamaño de un string
//echo strlen($texto2);

//retorna parte de una línea de un string
//echo substr($texto2,0,2);

//Convierte a mayuscula
//echo strtoupper($texto2);

//Convierte a minuscula
//echo strtolower($texto2);

//Posición de una letra en una cadena
echo strpos($texto2,'L');
?>
