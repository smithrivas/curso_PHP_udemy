<?php
# NOTAS
// Validar metodo de envío $_SERVER['REQUEST_METHOD']
/*
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  echo 'Se enviaron por GET';
} else {
  echo 'Se enviaron por POST';
}
*/

if (isset($_POST['submit'])) {
  echo 'Se han enviado los datos correctamente.';
  print_r($_POST);
}
?>
