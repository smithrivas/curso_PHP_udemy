<?php
if (isset($_COOKIE['font-size'])) {
  $tamaño = $_COOKIE['font-size'];
} else {
  $tamaño = '15px';
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      p{
        font-size: <?php echo $tamaño; ?>;
      }
    </style>
  </head>
  <body>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <a href="index.php">Volver</a>
  </body>
</html>
