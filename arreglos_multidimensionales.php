<?php
# NOTAS
# Se pueden crear todos los arrays dentro de otrs aray que se quiera aunque no es lo más recomendable.

$amigos = array(
  array('Alejandro',28, array('Vacio','Nivel 2',array('Nivel 3'))),
  array('Cesar',21),
  array('Manuel',18)
);
//Nombre del arreglo, posición del arreglo que quiere y posición del valor que se quiere mostrar.
echo $amigos[0][2][2][0].'</br>';
echo $amigos[1][0].'</br>';
echo $amigos[2][0].'</br>';
?>
