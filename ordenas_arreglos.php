<?php
$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
$numeros = [1,4,22,66,3,4,90,23,10,100];
//Funcion que orden de forma alfabeticamente los elementos que componen el arreglo.
//sort($numeros);

//Funcion que orden de forma inversa alfabeticamente los elementos que componen el arreglo.
rsort($numeros);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meses del año</title>
  </head>
  <body>
    <h1>Meses del año</h1>
    <ul>
      <?php
      //Se le pasa el nombre del arreglo y se le asigna un alias.
      foreach ($numeros as $numero) {
        echo '<li>'.$numero.'</li>';
      }
      ?>
    </ul>
  </body>
</html>
