<?php
$paises = ['Mexico','España','Colombia','Peru','Argentina','Venezuela','Guatemala'];
/*
foreach ($paises as $pais) {
  if ($pais == 'Colombia') {
    break;
  }
  echo $pais.'</br>';
}
*/
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Paises latinoamericanos</h1>
    <?php
    foreach ($paises as $pais) {
      if ($pais=='España') {
        continue;
      }
      echo $pais.'</br>';
    }
    ?>
  </body>
</html>
