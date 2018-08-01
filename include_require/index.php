<?php
# NOTAS
# require = fatal error y detiene la ejecución de la aplicación.
# include = warning error pero continua la ejecución
# include_once && require_once = si se esta llamando varias veces lo incluye una sola vez.
function suma($numero1, $numero2){
  return $numero1+$numero2;
}

include 'vista.php';
?>
