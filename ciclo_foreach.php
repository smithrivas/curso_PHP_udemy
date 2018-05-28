<?php
$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$alejandro = ['telefono'=>3013499444, 'edad'=>24, 'pais'=>'Colombia'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>MESES</h1>
    <ul>
      <?php
      /*
      foreach ($meses as $mes) {
        echo '<li>'.$mes.'</li>';
      }
      */
      foreach ($alejandro as $dato => $valor) {
        echo '<li>'.$dato.' : '.$valor.'</li>';
      }
      ?>
    </ul>
  </body>
</html>
