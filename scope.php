<?php
# NOTA
# si se quiere utilizar variable dentro de la funcion entonces se debe pasar como atributo.
# Si se quiere mostrar valor de una variable que esta en una funcionse debe exportar con el "return".

//$numero = 7;

//function mostrarNumero($numero){
function mostrarNumero(){
  //echo $numero;
  $numero = 10;
  return $numero;
}

//mostrarNumero($numero);

echo mostrarNumero();
?>
